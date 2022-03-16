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
        $data['main_content'] = $this->load->view('doctor/appointments/add',$data,TRUE);
        $this->load->view('doctor/index',$data);
    }

    public function assign()
    {
        $data = array();
        $data['page'] = 'Appointment';
        $data['page_title'] = 'Appointment Schedule';
        $data['my_days'] =$this->admin_model->get_user_days();
        $data['main_content'] = $this->load->view('doctor/appointments/assign',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('doctor/index',$data);
    }


    public function set()
    {   
        check_status();
        
        if(user()->role == 'staff'){$user_id = user()->user_id;}else{$user_id = user()->id;}
        $this->admin_model->delete_assaign_days($user_id, 'assaign_days');
        $this->admin_model->delete_assaign_time($user_id, 'assign_time');

        if($_POST)
        {   
            for ($i=0; $i < 7; $i++) { 
                if(empty($this->input->post("day_".$i))){
                    $day = 0;
                }else{
                    $day = $this->input->post("day_".$i);
                }
                $data = array(
                    'user_id' => $user_id,
                    'day' => $day
                );
                $data = $this->security->xss_clean($data);
                $this->admin_model->insert($data, 'assaign_days');

                    // insert times
                $start = $this->input->post("start_time_".$i);
                $end = $this->input->post("end_time_".$i);

                if ($day != 0) {
                    for ($a=0; $a < count($start); $a++) { 
                        $time_data = array(
                            'user_id' => $user_id,
                            'day_id' => $day,
                            'time' => $start[$a].'-'.$end[$a],
                            'start' => $start[$a],
                            'end' => $end[$a]
                        );
                        $time_data = $this->security->xss_clean($time_data);
                        $this->admin_model->insert($time_data, 'assign_time');
                    }
                }

            }

            $this->session->set_flashdata('msg', trans('schedule-assigned-successfully')); 
            redirect(base_url('admin/appointment/assign'));
        }      
        
    }
    

    public function chairView()
    {
        $data = array();
        $data['page'] = 'Appointment';
        $data['page_title'] = 'Chair View';
        $data['AllAppointments'] = $this->admin_model->fetch_current_date_appointment();    
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['doctors_list'] = $this->admin_model->get_by_user('doctors');
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['main_content'] = $this->load->view('doctor/appointments/chair_view',$data,TRUE);
        $this->load->view('doctor/index',$data);   
        
    }

    public function changeAppointmentStatus() {
        $appointment_id = $this->input->post('id');
        $appointment_status = $this->input->post('status');
        $this->admin_model->edit_option(array('appointment_status' => $appointment_status), $appointment_id,'appointments');
    }

    public function load()
    {
      $event_data = $this->admin_model->fetch_all_appointment();
      echo json_encode($event_data);
    }

    public function fetch_particular_appointment(){
        $id = $this->input->post('id');
        $appointment = $this->admin_model->one_appointment($id);
        if(!empty($appointment)){
            header('Content-Type: application/json');
            echo json_encode($appointment[0]);
        } 
    }


    public function calendar()
    {
        $data = array();
        $data['page'] = 'Appointment';
        $data['page_title'] = 'Appointment Calendar';
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        // $data['result'] = $this->db->get("events")->result();
        
        // foreach ($data['result'] as $key => $value) {
        //     $data['data'][$key]['title'] = $value->title;
        //     $data['data'][$key]['start'] = $value->start_date;
        //     $data['data'][$key]['end'] = $value->end_date;
        //     $data['data'][$key]['backgroundColor'] = "#00a65a";
        // }
        $data['main_content'] = $this->load->view('doctor/appointments/appointment_calendar',$data,TRUE);
            //$this->load->view('admin/appointments/appointment_calendar', $data);   
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('doctor/index',$data);   
        
    }
    
}


