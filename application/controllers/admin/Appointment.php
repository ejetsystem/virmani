<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment extends Home_Controller {

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
        $data['page'] = 'Appointment';
        $data['page_title'] = 'Appointments';
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['appointments'] = $this->admin_model->get_appointments(user()->id);
        $data['main_content'] = $this->load->view('admin/appointments/add',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('admin/index',$data);
    }

    public function add_appointment()
    {
        $data = array();
        $data['page'] = 'Appointment';
        $data['page_title'] = 'Add Appointments';
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['appointments'] = $this->admin_model->get_appointments(user()->id);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['main_content'] = $this->load->view('admin/appointments/add_appointment',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('admin/index',$data);
    }

    public function add()
    {
        if($_POST)
        {  
             
            $treatment_id = $this->input->post('treatment_id');
            $workdone_id = $this->input->post('workdone_id');
            
            if(user()->role == 'staff'){$user_id = user()->user_id;}else{$user_id = user()->id;}

            $patient_type = $this->input->post('patient_type');
            if ($patient_type == 1) {
	            //validate inputs
               $this->form_validation->set_rules('name', trans('patient-name'), 'required');
               $this->form_validation->set_rules('email', trans('email'), 'required');
               $this->form_validation->set_rules('mobile', trans('phone'), 'required');
           }else{
               $this->form_validation->set_rules('patient_id', "Patient", 'required');
           }

           if ($this->form_validation->run() === false) {
                $this->session->set_flashdata('error', validation_errors());
                if($this->input->post('page')=='chair_view_page'){
                    redirect(base_url('clinic-admin/appointment/chair-view'));
                }
                redirect(base_url('clinic-admin/appointment'));
            } 
            else {
            if ($patient_type == 1) {

                $user_data = array(
                    'chamber_id' => $this->chamber->uid,
                    'user_id' => $user_id,
                    'name' => $this->input->post('name', true),
                    'email' => $this->input->post('email', true),
                    'mr_number' => random_string('numeric',5),
                    'age' => $this->input->post('age', true),
                    'weight' => $this->input->post('weight', true),
                    'sex' => $this->input->post('sex', true),
                    'mobile' => $this->input->post('mobile', true),
                    'password' => hash_password('1234'),
                    'created_at' => my_date_now()
                );

                $user_data = $this->security->xss_clean($user_data);
                $patient_id = $this->admin_model->insert($user_data, 'patientses');
                
                $patient_contact = array(
                    'patient_id' => $patient_id,
                    'phone1' => $this->input->post('mobile', true),
                    'created_at' => my_date_now()
                );

                $this->admin_model->insert($patient_contact, 'patients_contact');

                $subject = 'Welcome to '.$this->settings->site_name;
                $msg = 'Your account has been created successfully, now you can login to your account using below access <br> Username:'.$this->input->post('email').' , and Password: 1234';
                $this->email_model->send_email($this->input->post('email'), $subject, $msg);
                
            }else{
                $patient_id = $this->input->post('patient_id');
            }
            
            $date = $this->input->post('date', true);
            $time = $this->input->post('start_time').'-'.$this->input->post('end_time');
            $serial_id = $this->admin_model->get_last_serial($date);
            
            $check_exist = $this->admin_model->check_existing_patient($patient_id, $date,$this->input->post('start_time'),$this->input->post('end_time'));
            $data = array(
                'chamber_id' => $this->chamber->uid,
                'user_id' => $user_id,
                'patient_id' => $patient_id,
                'doctor_id' => $this->input->post('doctors_id', true),
                'doctor_name' => $this->input->post('doctor_name', true),
                'chair' => $this->input->post('chair_no', true),
                'number_of_slot' => $this->input->post('slot', true),
                'slot_time' => $this->input->post('slot_type', true),
                'cause' => $this->input->post('cause', true),
                'extra_notes' => $this->input->post('extra_notes', true),
                'serial_id' => $serial_id,
                'date' => $date,
                'start_time' => $this->input->post('start_time', true),
                'end_time' => $this->input->post('end_time', true),
                'status' => 1,
                'type' => $this->input->post('type'),
                'created_at' => my_date_now()
            );
            if ($check_exist == 1) {
                $this->session->set_flashdata('error', trans('patient-already-registered')); 
                redirect(base_url('clinic-admin/appointment/chair-view')); 
            }

            if (date('Y-m-d') > $date) {
                $this->session->set_flashdata('error', trans('please-select-a-valid-date'));  
                redirect(base_url('clinic-admin/appointment/chair-view'));
            }
            $this->admin_model->insert($data, 'appointments');
            $appointment_id = $this->db->insert_id();
            
            
            $this->session->set_flashdata('msg', trans('inserted-successfully')); 
            if($this->input->post('page')=='chair_view_page'){
                if($treatment_id){
                    $treat_data = array(
                        'appointment_id' => $appointment_id,
                        'treatment_id' => $treatment_id
                    );
                    $this->admin_model->insert($treat_data, 'appointment_treatmentplan');
                    redirect(base_url('clinic-admin/patients/view/'.$patient_id.'/sittingplans'));
                }elseif($workdone_id){
                    $treat_data = array(
                        'appointment_id' => $appointment_id,
                        'workdone_id' => $workdone_id
                    );
                    $this->admin_model->insert($treat_data, 'appointment_workdone');
                    redirect(base_url('clinic-admin/patients/view/'.$patient_id.'/worksdone'));
                }

                else{ 
                    redirect($_SERVER['HTTP_REFERER']);
                  //redirect(base_url('clinic-admin/appointment/chair-view'));  
                }
            }
            redirect(base_url('clinic-admin/appointment'));

        }

    } 
    
}


public function empty_serial($date, $id)
{   
    $lists = '1,3,5,10,15,20,25';
    $block_serial = explode(',', $lists);
    foreach ($block_serial as $value) {
        if ($value == $serial_id) {
            $this->empty_serial($date, $value);
            $serial_id = $serial_id+1;
        }else{
            $serial_id = $serial_id;
        }
    }
    
    if(user()->role == 'staff'){$user_id = user()->user_id;}else{$user_id = user()->id;}
    $data = array(
        'chamber_id' => $this->chamber->uid,
        'user_id' => $user_id,
        'patient_id' => 0,
        'serial_id' => $id,
        'date' => $date,
        'status' => 1,
        'created_at' => my_date_now()
    );
    $this->admin_model->insert($data, 'appointments');
}


public function list($date)
{
    $data = array();
    $data['page'] = 'Appointment';
    $data['page_title'] = 'Appointment lists';
    $data['date'] = $date;
    $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
    $data['appointments'] = $this->admin_model->get_appointments_by_date($date);
    $data['main_content'] = $this->load->view('admin/appointments/list',$data,TRUE);
    $data['doctors'] = $this->admin_model->select_all_doctors();
    $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
    $this->load->view('admin/index',$data);
}


public function all_list()
{
    $data = array();
    $data['page'] = 'Appointment';
    $data['page_title'] = 'Appointments list';
    $data['appointments'] = $this->admin_model->get_all_appointments();
    $data['main_content'] = $this->load->view('admin/appointments/all_list',$data,TRUE);
    $data['doctors'] = $this->admin_model->select_all_doctors();
    $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
    $this->load->view('admin/index',$data);
}



public function assign()
{
    $data = array();
    $data['page'] = 'Appointment';
    $data['page_title'] = 'Appointment Schedule';
    $data['my_days'] =$this->admin_model->get_user_days();
    $data['main_content'] = $this->load->view('admin/appointments/assign',$data,TRUE);
    $data['doctors'] = $this->admin_model->select_all_doctors();
    $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
    $this->load->view('admin/index',$data);
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


public function set_time()
{   

    $this->admin_model->delete_assaign_time($user_id, 'assaign_time');
    
    $data = array(
        'user_id' => $user_id,
        'day_id' => $day,
        'start' => $day,
        'end' => $day
    );
    $data = $this->security->xss_clean($data);
    $this->admin_model->insert($data, 'assaign_time');
}


public function delete_time($id)
{
    $this->admin_model->delete($id,'assign_time'); 
    echo json_encode(array('st' => 1));
}

public function delete($id)
{
    $this->admin_model->edit_option(array('is_delete' => 1), $id,'appointments');
    echo json_encode(array('st' => 1));
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
    $data['main_content'] = $this->load->view('admin/appointments/appointment_calendar',$data,TRUE);
        //$this->load->view('admin/appointments/appointment_calendar', $data);   
    $data['doctors'] = $this->admin_model->select_all_doctors();
    $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
    $this->load->view('admin/index',$data);   
    
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


public function chairView()
{
    $data = array();
    $chair_ids = '';
    $data['page'] = 'Appointment';
    $data['page_title'] = 'Chair View';
    $data['AllAppointments'] = $this->admin_model->fetch_current_date_appointment();    
    $data['doctors'] = $this->admin_model->select_all_doctors();
    $data['doctors_list'] = $this->admin_model->get_by_user('doctors');
    $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
    if(isset($_REQUEST['chair_id']) && $_REQUEST['chair_id'] != ''){
        $chair_ids = $_REQUEST['chair_id'];
        $data['chairs_search_list'] = $this->admin_model->get_chair_list_with_search($chair_ids);
      }
    $data['chairs_list'] = $this->admin_model->get_chair_list_with_status();
    $data['main_content'] = $this->load->view('admin/appointments/chair_view',$data,TRUE);
    $this->load->view('admin/index',$data);   
    
}

public function appointments_function() {
      
    /*$data["doctor_id"] = $_REQUEST['doctor_id'];
    $data["chair_id"] = $_REQUEST['chair_id'];
    $data["sdate"] = $_REQUEST['sdate']; 
    if($data["doctor_id"] == ''){
        $data["doctor_id"] = 'all';
    }
    if($data["chair_id"] == ''){
        $data["chair_id"] = 'all';
    }*/
    // echo "<pre>";
    // print_r($data);
    // die;
    echo $this->load->view('admin/appointments/chair_view',$data,TRUE);
    
    
}


public function changeAppointmentStatus() {
    // echo "<pre>";
    // print_r($this->input->post());
    // die;
    if($this->input->post('appointment_type')=='shift_appointment'){
        $appointment_id = $this->input->post('id');
        $shift = array(
            'date' => date("Y-m-d",strtotime($this->input->post('date', true))),
            'start_time' => $this->input->post('start_time', true),
            'end_time' => $this->input->post('end_time', true),
            'slot_time' => $this->input->post('slot_type', true),
            'appointment_status' => $this->input->post('status', true)
        );
        $this->admin_model->edit_option($shift, $appointment_id,'appointments');
    }
    else{
        $appointment_id = $this->input->post('id');
        $appointment_status = $this->input->post('status');
        $this->admin_model->edit_option(array('appointment_status' => $appointment_status), $appointment_id,'appointments');
    }
}


// Waiting room
public function waiting_room(){
   $data = array();
   $data['page'] = 'Appointment';
   $data['page_title'] = 'Waiting Room';
   $data['appointments'] = $this->admin_model->getAppointmentByStatus(user()->id,4);
   $data['main_content'] = $this->load->view('admin/appointments/waiting_room',$data,TRUE);
   $data['doctors'] = $this->admin_model->select_all_doctors();
   $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
   $this->load->view('admin/index',$data); 
}

}


