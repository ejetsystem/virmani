<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Chairs extends Home_Controller {

	public function __construct()
    {
        parent::__construct();
        //check auth
        if (!is_user() && !is_staff()) {
            redirect(base_url());
        }
    }

    public function index()
    {

        $data = array();
        $data['page_title'] = 'Chairs';
        $data['page'] = 'chair';
        $data['chair'] = FALSE;
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['chairs'] = $this->admin_model->get_chair_with_doctor();
         
        $data['main_content'] = $this->load->view('admin/user/chair',$data,TRUE);
        
        $this->load->view('admin/index',$data);
    }

    //switch chamber
    public function switch_chamber($chamber = "")
    {   
        $chamber = ($chamber != "") ? $chamber : $this->chamber->uid;
        $active_chamber = array('active_chamber' => $chamber);
        $this->session->set_userdata($active_chamber);
        redirect(base_url('admin/dashboard/user'));
    }


    public function add()
    {   
        if($_POST)
        {   
            check_status();
            $id = $this->input->post('id', true);
            //validate inputs
            $this->form_validation->set_rules('name', trans('name'), 'required');

            if ($this->form_validation->run() === false) {
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('clinic-admin/chamber'));
            } else {

                if ($id != '') {
                    $chamber = $this->admin_model->get_single_chamber($id);
                    $uid = $chamber[0]['uid'];
                }else{
                    $uid = random_string('numeric',5);
                }

                $data=array(
                    'user_id' => user()->id,
                    'uid' => $uid,
                   
                    'appoinment_limit' => $this->input->post('appoinment_limit', true),
                    'name' => $this->input->post('name', true),
                    'address' => $this->input->post('address', true),
                    'doctor_id' => $this->input->post('doctor_id', true),
                    'status' => $this->input->post('status', true),
                    
                );
                $data = $this->security->xss_clean($data);
                if ($id != '') {
                    $this->admin_model->edit_option($data, $id, 'chairs');
                    $this->session->set_flashdata('msg', trans('inserted-successfully')); 
                } else {

                    $total = get_total_value('chairs');
                    if (ckeck_plan_limit('chair', $total) == FALSE) {
                        $this->session->set_flashdata('error', trans('reached-maximum-limit'));
                        redirect(base_url('clinic-admin/chairs'));
                        exit();
                    }
                    
                    $id = $this->admin_model->insert($data, 'chairs');
                    $this->session->set_flashdata('msg', trans('inserted-successfully')); 
                }

                 
                redirect(base_url('clinic-admin/chairs'));
            }
        }      
        
    }


    public function edit($id)
    {  
        $data = array();
        $data['page_title'] = 'Edit';   
        $data['page'] = 'chair';
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['chair'] = $this->admin_model->select_option_md5($id,'chairs');
        $data['main_content'] = $this->load->view('admin/user/chair',$data,TRUE);
        $this->load->view('admin/index',$data);
    }


    public function set_primary($id) 
    {
        check_status();

        $chamber = $this->admin_model->get_primary_chamber();
        if (!empty($chamber)) {
            $udata = array(
                'is_primary' => 0
            );
            $this->admin_model->update($udata, $chamber->id,'chairs');
        }

        $data = array(
            'is_primary' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'chairs');
        echo json_encode(array('st' => 1));
    }


    public function invoice_customize() 
    {
        if($_POST)
        {   
            $data = array(
                'template_style' => $this->input->post('template_style', true),
                'color' => $this->input->post('color', true),
                'footer_note' => $this->input->post('footer_note')
            );
            $this->admin_model->update($data, $this->chamber->id, 'chairs');
            $this->session->set_flashdata('msg', trans('msg-updated')); 
            redirect($_SERVER['HTTP_REFERER']);
        }
        $data = array();
        $data['page_title'] = 'Invoice Customization';   
        $data['page'] = 'Invoice';   
        $data['chamber'] = $this->admin_model->get_chamber(0);
        $data['main_content'] = $this->load->view('admin/user/invoice_customize',$data,TRUE);
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
        $this->admin_model->update($data, $id,'chairs');
        $this->session->set_flashdata('msg', trans('activate-successfully')); 
        redirect(base_url('admin/chamber'));
    }

    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'chairs');
        $this->session->set_flashdata('msg', trans('deactivate-successfully')); 
        redirect(base_url('admin/chamber'));
    }

    public function delete($id)
    {
        $this->admin_model->delete($id,'chairs'); 
        echo json_encode(array('st' => 1));
    }
 


}