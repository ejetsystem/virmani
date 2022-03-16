<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends Home_Controller {

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

    public function index()
    {
        $data = array();
        $data['page'] = 'Dashboard';
        $data['page_title'] = 'Doctor Home';

        $data['currency'] = currency_symbol(user()->currency);
        for ($i = 1; $i <= 13; $i++) {
            $months[] = date("Y-m", strtotime( date('Y-m-01')." -$i months"));
        }

        for ($i = 0; $i <= 11; $i++) {
            $income = $this->admin_model->get_user_income_by_date(date("Y-m", strtotime( date('Y-m-01')." -$i months")));
            $months[] = array("date" => month_show(date("Y-m", strtotime( date('Y-m-01')." -$i months"))));
            $incomes[] = array("total" => $income);
        }


        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['appointments'] = $this->admin_model->get_doctor_appointments($this->session->userdata('id'));
        // echo "<pre>";
        // print_r($data['appointments']);
        // die;
        $data['income_axis'] = json_encode(array_column($months, 'date'),JSON_NUMERIC_CHECK);
        $data['income_data'] = json_encode(array_column($incomes, 'total'),JSON_NUMERIC_CHECK);
        $data['net_income'] = $this->admin_model->get_user_income_by_year();
        $data['total_net_income'] = get_pres_values();
        $data['staffs'] = $this->admin_model->get_count_by_user_id('staffs', user()->id);
        $data['patients'] = $this->admin_model->get_count_by_user_id('patientses', user()->id);
        $data['serials'] = $this->admin_model->get_count_serials();
        // $data['doctors'] = $this->admin_model->select_all_doctors();
        // $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        // echo "<pre>";
        // print_r($data);
        // die;
        $data['main_content'] = $this->load->view('doctor/dashboard',$data,TRUE);
        $this->load->view('doctor/index',$data);
    }
}


