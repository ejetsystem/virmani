<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RegistrationController extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        //check auth
        $this->load->model('staff_model');
        if (!is_staff() && !is_user()) {
            redirect(base_url());
        }
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'All Staff';      
        $data['page'] = 'Staff';   
        $data['drug'] = FALSE;
        
        $data['drugs'] = $this->admin_model->select_by_user('drugs');        
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['staffs_info'] = $this->admin_model->select_all_staff('staffs');

        if($this->input->post('search')=='search_full'){
            if($this->input->post('role')=='doctor'){
                $where = '';
                if(!empty($this->input->post('search_text'))){
                    $where = " AND name LIKE '".$this->input->post('search_text')."%'";
                }
                $data['staff_doctors'] = $this->db->query("SELECT *,phone1 as mobile FROM doctors WHERE role='".$this->input->post('role')."' AND user_id='".$this->session->userdata('id')."' AND is_delete='0'".$where)->result_array();
            }
            elseif($this->input->post('role')=='staff'){
                $where = '';
                if(!empty($this->input->post('search_text'))){
                    $where = " AND name LIKE '".$this->input->post('search_text')."%'";
                }
                $data['staff_doctors'] = $this->db->query("SELECT *,phone as mobile FROM staffs WHERE role='".$this->input->post('role')."' AND user_id='".$this->session->userdata('id')."' AND is_deleted='0'".$where)->result_array();
            }
        }
        else{
            $data['staff_doctors'] = array_merge($data['doctors'],json_decode(json_encode($data['staffs_info']), true));
        }
        // die;
        // $data['staff_doctors'] = array_merge($data['doctors'],json_decode(json_encode($data['staffs_info']), true));

        // echo "<pre>";
        // print_r($data['staffs_info']);
        // die;
        $data['main_content'] = $this->load->view('admin/registration/index',$data,TRUE);
        $this->load->view('admin/index',$data);
    }

    public function add_staff(){
        $data = array();
        $data['page_title'] = 'All Staff';      
        $data['page'] = 'Staff';
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['main_content'] = $this->load->view('admin/registration/add_staff',$data,TRUE);
        $this->load->view('admin/index',$data);
    }

    public function add()
    {
        if($_POST)
        {   
            if(empty($this->admin_model->checkEmailExsist($this->input->post('email')))){
                $id = $this->input->post('id', true);

                $check = $this->admin_model->check_duplicate_email($this->input->post('email'));
                if (!empty($check) && $id == '') {
                    $this->session->set_flashdata('error', trans('email-exist'));
                    redirect(base_url('clinic-admin/staff'));
                }

                //validate inputs
                $this->form_validation->set_rules('name', trans('name'), 'required|max_length[100]');

                if ($this->form_validation->run() === false) {
                    $this->session->set_flashdata('error', validation_errors());
                    redirect(base_url('clinic-admin/staff'));
                } else {
                    if ($id != '') {
                        $password = $this->input->post('password');
                    } else {
                        $password = hash_password($this->input->post('password'));
                    }

                    $password = substr(md5(mt_rand()), 0, 9);
                    $data=array(
                        'user_id' => user()->id,
                        'chamber_id' => $this->input->post('chamber_id', true),
                        'name' => $this->input->post('name', true),
                        'department' => $this->input->post('department', true),
                        'email' => $this->input->post('email', true),
                        'user_name' => $this->input->post('email', true),
                        'father' => $this->input->post('father_name', true),
                        'mother' => $this->input->post('mother_name', true),
                        'gender' => $this->input->post('gender', true),
                        'marital_status' => $this->input->post('marital_status', true),
                        'blood_group' => $this->input->post('blood_group', true),
                        'dob' => $this->input->post('dob', true),
                        'date_of_joining' => $this->input->post('date_of_joining', true),
                        'phone' => $this->input->post('phone', true),
                        'qualification' => $this->input->post('qualification', true),
                        'work_experience' => $this->input->post('work_exp', true),
                        'specialization' => $this->input->post('specialization', true),
                        'note' => $this->input->post('note', true),
                        'current_address' => $this->input->post('address', true),
                        'permanent_address' => $this->input->post('permanent_address', true),
                        'pan' => $this->input->post('pan_number', true),
                        'gst' => $this->input->post('gst_number', true),
                        'slug' => str_slug($this->input->post('name', true)),
                        'designation' => $this->input->post('designation', true),
                        'password' => hash_password($password),
                        'role' => 'staff',
                        'created_at' => my_date_now(),
                    );
                    $data = $this->security->xss_clean($data);

                    if ($id != '') {
                        $this->admin_model->edit_option($data, $id, 'staffs');
                        $this->session->set_flashdata('msg', trans('updated-successfully')); 
                    } else {

                        $total = get_total_value('staffs');
                        if (ckeck_plan_limit('staffs', $total) == FALSE) {
                            $this->session->set_flashdata('error', trans('reached-maximum-limit'));
                            redirect(base_url('clinic-admin/staff'));
                            exit();
                        }
                        $id = $this->admin_model->insert($data, 'staffs');

                        // Send Credentials to Staff
                        $subject = "Your Credentials";
                        $msg = "Hello Staff<br> We have Created Your Account, Please use these credentials to login your account <br> <h3>Login Details</h3> <p> Email : ".$this->input->post('email')."</p> <p> Password : ".$password."</p>";
                        $this->email_model->send_email($this->input->post('email'), $subject, $msg);
                        $this->session->set_flashdata('msg', trans('inserted-successfully')); 
                    }

                    // upload logo
                    $data_img = $this->admin_model->do_upload('photo');
                    if($data_img){
                        $data_img = array(
                            'thumb' => $data_img['medium']
                        );
                        $this->admin_model->edit_option($data_img, $id, 'staffs'); 
                    }

                    $all_users = $data=array(
                        'email' => $this->input->post('email', true),
                        'created_at' => my_date_now()
                    );
                    $this->admin_model->insert($all_users, 'all_users');
                    
                    $this->admin_model->insert_multiple_staff($this->input->post('vaccination'), 'staff_vaccination', $id);
                    $this->admin_model->insert_multiple_staff_bank($this->input->post('bank'), 'staff_bank_details', $id);
                    $this->admin_model->insert_multiple_staff_insurance($this->input->post('insurance'), 'staff_insurance_details', $id);

                    redirect(base_url('clinic-admin/staff'));

                }
            }
            else{
                $this->session->set_flashdata('error', "Email Already Exists");
                redirect(base_url('clinic-admin/staff'));
            }
        }      
        
    }


    public function edit($id)
    {  
        $data = array();
        $data['page_title'] = 'Edit';   
        $data['drug'] = $this->admin_model->select_option($id, 'drugs');
        $data['main_content'] = $this->load->view('admin/user/drugs',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('admin/index',$data);
    }

    
    public function active($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'drugs');
        $this->session->set_flashdata('msg', trans('activate-successfully')); 
        redirect(base_url('admin/drugs'));
    }

    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'drugs');
        $this->session->set_flashdata('msg', trans('deactivate-successfully')); 
        redirect(base_url('admin/drugs'));
    }

    public function delete($id)
    {
        $this->admin_model->delete($id,'drugs'); 
        echo json_encode(array('st' => 1));
    }

    public function view_registration($role,$id)
    {
        $data = array();
        $data['page_title'] = 'View';   
        
        if($role == 'doctor'){
            $data['doctors']['doctors'] = $this->admin_model->select_doctor_detail($id,'doctors');
            $data['doctors']['vaccination'] = $this->admin_model->select_vaccination($id,'doctors_vaccination');
            $data['doctors']['bank_details'] = $this->admin_model->select_bank($id,'doctor_bank_details');
            $data['doctors']['insurance_details'] = $this->admin_model->select_insurance($id,'doctor_insurance_details');
        }
        elseif($role == 'staff'){
            $data['staff']['staff'] = $this->admin_model->select_option($id, 'staffs');
            $data['staff']['bank_details'] = $this->admin_model->get_by_column_attr('staff_bank_details','staff_id',$id);
            $data['staff']['insurance_details'] = $this->admin_model->get_by_column_attr('staff_insurance_details','staff_id',$id);
            $data['staff']['vaccination'] = $this->admin_model->get_by_column_attr('staff_vaccination','staff_id',$id);
        }


        $data['main_content'] = $this->load->view('admin/registration/view_registration',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('admin/index',$data);
    }

    public function disable($role,$id){ 
        if($role=='doctor'){
            $this->admin_model->edit_option(array('is_delete'=>1), $id, 'doctors');
            redirect(base_url("clinic-admin/registration/view/doctor/".$id)); 
        }
        elseif($role=='staff'){
            $this->admin_model->edit_option(array('is_deleted'=>1), $id, 'staffs');
            redirect(base_url("clinic-admin/registration/view/staff/".$id));            
        }
    }

    public function enable($role,$id){ 
        if($role=='doctor'){
            $this->admin_model->edit_option(array('is_delete'=>0), $id, 'doctors');
            redirect(base_url("clinic-admin/registration/view/doctor/".$id)); 
        }
        elseif($role=='staff'){
            $this->admin_model->edit_option(array('is_deleted'=>0), $id, 'staffs');
            redirect(base_url("clinic-admin/registration/view/staff/".$id));            
        }
    }

    public function change_password($table){
        
        if($table=='doctors'){
            if($this->input->post('new_pass') == $this->input->post('confirm_pass')){
                $password = hash_password($this->input->post('password'));
                $id = $this->input->post('id');
                $this->admin_model->edit_option(array('password'=>$password), $id,$table);
                $this->session->set_flashdata('msg','Password Changes Successfully');
                redirect(base_url("clinic-admin/registration/view/doctor/".$id));
            }
            else{
                $this->session->set_flashdata('error','Password And Confirm Password Doest Not Match');
                redirect(base_url("clinic-admin/registration/view/doctor/".$this->input->post('id')));
            }
        }
        elseif($table == 'staffs'){
            if($this->input->post('new_pass') == $this->input->post('confirm_pass')){
                $password = hash_password($this->input->post('password'));
                $id = $this->input->post('id');
                $this->admin_model->edit_option(array('password'=>$password), $id,$table);
                $this->session->set_flashdata('msg','Password Changes Successfully');
                redirect(base_url("clinic-admin/registration/view/staff/".$id));
            }
            else{
                $this->session->set_flashdata('error','Password And Confirm Password Doest Not Match');
                redirect(base_url("clinic-admin/registration/view/staff/".$this->input->post('id')));
            }
        }
    }

}


