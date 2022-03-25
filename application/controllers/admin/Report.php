<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('calendar');
        $this->load->helper('custom_helper');
        //check auth
        if (!is_staff() && !is_user() && !is_doctor()) {
            redirect(base_url());
        }
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'Payment History';      
        $data['page'] = 'Report';
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['payment_history'] = $this->admin_model->payment_history();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        // echo "<pre>";
        // print_r($data['payment_history']);
        // die;
        $data['main_content'] = $this->load->view('admin/payment/index', $data, TRUE);
        $this->load->view('admin/index',$data);
    }
    
}


