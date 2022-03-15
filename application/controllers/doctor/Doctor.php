<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('calendar');
        $this->load->helper('custom_helper');
        //check auth
        // if (!is_staff() && !is_user()) {
        //     redirect(base_url());
        // }
    }

    public function index()
    {
        // die;
        // $data = array();
        // $data['page'] = 'Appointment';
        // $data['page_title'] = 'Appointments';
        // $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        // $data['appointments'] = $this->admin_model->get_appointments(user()->id);
        // $data['main_content'] = $this->load->view('admin/appointments/add',$data,TRUE);
        // $data['doctors'] = $this->admin_model->select_all_doctors();
        // $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        // $this->load->view('admin/index',$data);
    }
}


