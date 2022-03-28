<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        //check auth
        if (!is_staff() && !is_user()) {
            redirect(base_url());
        }
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'Staff';      
        $data['page'] = 'Staff';   
        $data['staff'] = FALSE;
        $data['staffs'] = $this->admin_model->select_by_user('staffs');
        $data['chambers'] = $this->admin_model->select_by_user('chamber');
        $data['main_content'] = $this->load->view('admin/user/staff',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
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

                    $data=array(
                        'user_id' => user()->id,
                        'chamber_id' => $this->input->post('chamber_id', true),
                        'name' => $this->input->post('name', true),
                        'email' => $this->input->post('email', true),
                        'slug' => str_slug($this->input->post('name', true)),
                        'designation' => $this->input->post('designation', true),
                        'password' => hash_password($this->input->post('password')),
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
                        $all_users = $data=array(
                            'email' => $this->input->post('email', true),
                            'created_at' => my_date_now()
                        );
                        $this->admin_model->insert($all_users, 'all_users');
                        
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

                    redirect(base_url('clinic-admin/staff'));

                }
            }
            else{
                $this->session->set_flashdata('error', "This email is Already Exist");
                redirect(base_url('clinic-admin/staff'));
            }
        }      
        
    }

    public function edit($id)
    {  
        $data = array();
        $data['page_title'] = 'Edit';   
        $data['staff'] = $this->admin_model->select_option($id, 'staffs');
        $data['bank_details'] = $this->admin_model->get_by_column_attr('staff_bank_details','staff_id',$id);
        $data['insurance_details'] = $this->admin_model->get_by_column_attr('staff_insurance_details','staff_id',$id);
        $data['vaccination'] = $this->admin_model->get_by_column_attr('staff_vaccination','staff_id',$id);
        $data['chambers'] = $this->admin_model->select_by_user('chamber');
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        // echo "<pre>";
        // print_r($data['staff']);
        // die;
        $data['main_content'] = $this->load->view('admin/user/staff_edit',$data,TRUE);
        $this->load->view('admin/index',$data);
    }


    public function update_staff() {
        // echo "<pre>";
        // print_r($this->input->post());
        // die;
        $staff_id = $this->input->post('staff_id');
        $staff = array(
                    'name' => $this->input->post('name', true),
                    'email' => $this->input->post('email', true),
                    'user_name' => $this->input->post('email', true),
                    'department' => $this->input->post('department', true),
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
                    'designation' => $this->input->post('designation', true),
        );

        // Update Patients Details
        $this->admin_model->update($staff, $staff_id, 'staffs');

        if(!empty($this->input->post('password'))){
            $this->admin_model->update(array('password'=>hash_password($this->input->post('password'))), $staff_id, 'staffs');            
        }

        $data_img = $this->admin_model->do_upload('photo');
        if ($data_img) {
            $data_img = array(
                'thumb' => $data_img['medium']
            );
            $this->admin_model->edit_option($data_img, $staff_id, 'staffs');
        }

        // staff_vaccination
        foreach ($this->input->post('vaccination') as $key => $value) {
            if (!empty($value['id'])) {
                $staffs_vaccination1 = array(
                    'vaccination_type' => $value['vaccination_type'],
                    'vaccination_date' => $value['vaccination_date'],
                    'reminder_date_for_next' => $value['reminder_date_for_next'],
                    'remarks' => $value['vaccination_remarks'],
                    'medical_history' => $value['medical_history'],
                    'updated_at' => my_date_now()
                );
                $this->admin_model->update($staffs_vaccination1, $value['id'], 'staff_vaccination');
            } else {
                $staffs_vaccination2 = array(
                    'staff_id' => $staff_id,
                    'vaccination_type' => $value['vaccination_type'],
                    'vaccination_date' => $value['vaccination_date'],
                    'reminder_date_for_next' => $value['reminder_date_for_next'],
                    'remarks' => $value['vaccination_remarks'],
                    'medical_history' => $value['medical_history'],
                    'updated_at' => my_date_now()
                );
                $this->admin_model->insert($staffs_vaccination2, 'staff_vaccination');
            }
        }

        // Bank
        foreach ($this->input->post('bank') as $key => $value) {
            if (!empty($value['id'])) {
                $staffs_bank1 = array(
                    'bank_name' => $value['bank_name'],
                    'bank_account_number' => $value['bank_account_number'],
                    'ifsc_code' => $value['ifsc_code'],
                    'remarks' => $value['bank_remarks'],
                    'updated_at' => my_date_now()
                );
                $this->admin_model->update($staffs_bank1, $value['id'], 'staff_bank_details');
            } else {
                $staffs_bank2 = array(
                    'staff_id' => $staff_id,
                    'bank_name' => $value['bank_name'],
                    'bank_account_number' => $value['bank_account_number'],
                    'ifsc_code' => $value['ifsc_code'],
                    'remarks' => $value['bank_remarks'],
                    'updated_at' => my_date_now()
                );
                $this->admin_model->insert($staffs_bank2, 'staff_bank_details');
            }
        }

        // Insurance
        foreach ($this->input->post('insurance') as $key => $value) {
            $allow = ($value['allow_notifications']==1) ? 1 : 0;
            if (!empty($value['id'])) {
                $staffs_insurance1 = array(
                    'insurance' => $value['insurance'],
                    'insurance_date' => $value['insurance_date'],
                    'renewal_date' => $value['renewal_date'],
                    'amount_insured' => $value['amount_insured'],
                    'amount_paid' => $value['amount_paid'],
                    'allow_notifications' => $allow,
                    'remarks' => $value['insurance_remarks'],
                    'updated_at' => my_date_now()
                );
                $this->admin_model->update($staffs_insurance1, $value['id'], 'staff_insurance_details');
            } else {
                $staff_insurance2 = array(
                    'staff_id' => $staff_id,
                    'insurance' => $value['insurance'],
                    'insurance_date' => $value['insurance_date'],
                    'renewal_date' => $value['renewal_date'],
                    'amount_insured' => $value['amount_insured'],
                    'amount_paid' => $value['amount_paid'],
                    'allow_notifications' => $allow,
                    'remarks' => $value['insurance_remarks'],
                    'updated_at' => my_date_now()
                );
                $this->admin_model->insert($staff_insurance2, 'staff_insurance_details');
            }
        }

        redirect(base_url('clinic-admin/staff'));
    }

    
    public function active($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'staffs');
        $this->session->set_flashdata('msg', trans('activate-successfully')); 
        redirect(base_url('admin/staff'));
    }

    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'staffs');
        $this->session->set_flashdata('msg', trans('deactivate-successfully')); 
        redirect(base_url('admin/staff'));
    }

    public function delete($id)
    {
        $this->admin_model->delete($id,'staffs'); 
        echo json_encode(array('st' => 1));
    }

    public function deleteParticularVaccination()
    {
        $id = $this->input->post('id');
        $deleted = $this->db->delete('staff_vaccination', array('id' => $id));
        if ($deleted) {
            return "true";
        } else {
            return "false";
        }
    }

    public function deleteParticularBank()
    {
        $id = $this->input->post('id');
        $deleted = $this->db->delete('staff_bank_details', array('id' => $id));
        if ($deleted) {
            return "true";
        } else {
            return "false";
        }
    }

    public function deleteParticularInsurance()
    {
        $id = $this->input->post('id');
        $deleted = $this->db->delete('staff_insurance_details', array('id' => $id));
        if ($deleted) {
            return "true";
        } else {
            return "false";
        }
    }

    

}


