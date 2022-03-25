<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Live extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
    }


    public function zoom($type='', $id)
    {
 
        $data = array();
        if ($type == 'doctor') {
            $data['leave_url'] = base_url('doctor/patients/appointments');  
        } else {
            $data['leave_url'] = base_url('doctor/live_consults?cancel='.$id);
            $edit_data = array(
                'is_start' => 1
            );
            if ($id != 0) {
                $this->admin_model->edit_option($edit_data, $id, 'appointments');
            }
        }
        
        $data['page_title'] = 'Zoom Meeting';      
        $data['page'] = 'Live';
        $data['appointment'] = $this->admin_model->get_by_id($id, 'appointments');
        $data['patient'] = $this->admin_model->get_by_id($data['appointment']->patient_id, 'patientses');
        $data['user'] = $this->admin_model->get_by_id($data['appointment']->doctor_id, 'doctors');
        
//        echo '<pre>';
//        print_r($data);
//        
//        die;
        
        $data['main_content'] = $this->load->view('doctor/zoom',$data);
    }



    public function cancel_meeting($id)
    {
        $edit_data = array(
            'is_start' => 0
        );
        if ($id != 0) {
            $this->doctor_model->edit_option($edit_data, $id, 'appointments');
        }
        $this->session->set_flashdata('msg', trans('meeting-canceled-successfully')); 
        redirect($_SERVER['HTTP_REFERER']);
    }



}


