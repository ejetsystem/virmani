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
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        if($this->input->post('search')){
            $doctor_id = $this->input->post('doctor_id');
            $start = $this->input->post('start');
            $end = $this->input->post('end');
            $date = '';
            if(!empty($this->input->post('start')) && !empty($this->input->post('end'))){
                $date = "AND p.created_at BETWEEN '".$start." 00:00:00' AND '".$end." 23:59:59'";
            }

            $data['payment_history'] = $this->db->query("SELECT p.*,d.name as doctor_name from payment_history p inner join doctors d on d.id = p.doctor_id  where p.doctor_id='".$doctor_id."' AND p.amount_type=1 ".$date)->result();
            
        }
        else{
            $data['payment_history'] = $this->admin_model->payment_history();
        }
        $data['main_content'] = $this->load->view('admin/payment/index', $data, TRUE);
        $this->load->view('admin/index',$data);
    }

    public function getWorkDone()
    {
        $workdone_id = $this->input->post('workdone_id');
        $work_done = $this->admin_model->getWorkDone($workdone_id);
        header('Content-Type: application/json');
        echo json_encode($work_done[0]);
    }

    
    
}


