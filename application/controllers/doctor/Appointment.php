<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('calendar');
        $this->load->helper('custom_helper');
        //check auth
        if (!is_doctor()) {
            redirect(base_url());
        }
    }

    public function list()
    {
        $data = array();
        $data['page'] = 'Appointment';
        $data['page_title'] = 'Appointments';
        $data['appointments'] = $this->admin_model->get_doctor_appointments($this->session->userdata('id'));
        // echo "<pre>";
        // print_r($data['appointments']);
        // die;
        $data['main_content'] = $this->load->view('doctor/appointments/all_list',$data,TRUE);
        $this->load->view('doctor/index',$data);
    }
}


