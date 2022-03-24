<?php
//ini_set('display_errors', '1');
//ini_set('display_startup_errors', '1');
//error_reporting(E_ALL);

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Patients extends Home_Controller {

    public function __construct() {
        parent::__construct();
        //check auth
        if (!is_staff() && !is_user() && !is_patient() && !is_doctor()) {
            redirect(base_url());
        }
        $this->load->model('patient_model');
    }

    public function index() {
        $data = array();
        $data['page_title'] = 'Patients';
        $data['page'] = 'patients';
        $data['patients'] = FALSE;
        $data['patientses'] = $this->admin_model->select_all_patients('patientses', 0);
        $data['main_content'] = $this->load->view('admin/patients/patients', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function appointments() {
        $data = array();
        $data['page_title'] = 'Appointments';
        $data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['main_content'] = $this->load->view('admin/appointments/patient_lists', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function doctors() {

        $data = array();
        //initialize pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url('admin/patients/doctors');
        $total_row = $this->admin_model->get_doctors_by_patient(1, 0, 0);
        $config['total_rows'] = $total_row;
        $config['per_page'] = 18;
        $this->pagination->initialize($config);
        $page = $this->security->xss_clean($this->input->get('page'));
        if (empty($page)) {
            $page = 0;
        }
        if ($page != 0) {
            $page = $page - 1;
        }

        $data['page_title'] = 'Doctors';
        $data['page'] = 'Doctors';
        $data['prescription'] = $this->admin_model->get_doctors_by_patient(0, $config['per_page'], $page * $config['per_page']);
        $data['main_content'] = $this->load->view('admin/user/doctors', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function prescriptions() {
        $data = array();

        //initialize pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url('admin/patients/prescriptions');
        $total_row = $this->admin_model->get_prescription_by_patient(1, 0, 0);
        $config['total_rows'] = $total_row;
        $config['per_page'] = 18;
        $this->pagination->initialize($config);
        $page = $this->security->xss_clean($this->input->get('page'));
        if (empty($page)) {
            $page = 0;
        }
        if ($page != 0) {
            $page = $page - 1;
        }

        $data['page_title'] = 'Prescription';
        $data['page'] = 'Prescription';
        $data['prescription'] = $this->admin_model->get_prescription_by_patient(0, $config['per_page'], $page * $config['per_page']);
        $data['main_content'] = $this->load->view('admin/user/all_prescription', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function all_prescriptions($id) {
        $data = array();

        //initialize pagination
        $this->load->library('pagination');
        $config['base_url'] = base_url('admin/patients/prescriptions');
        $total_row = $this->admin_model->get_prescription_by_patient(1, 0, 0, $id);
        $config['total_rows'] = $total_row;
        $config['per_page'] = 48;
        $this->pagination->initialize($config);
        $page = $this->security->xss_clean($this->input->get('page'));
        if (empty($page)) {
            $page = 0;
        }
        if ($page != 0) {
            $page = $page - 1;
        }

        $data['page_title'] = 'Prescription';
        $data['page'] = 'Prescription';
        $data['prescription'] = $this->admin_model->get_prescription_by_patient(0, $config['per_page'], $page * $config['per_page'], $id);
        $data['main_content'] = $this->load->view('admin/user/all_prescription', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function prescription($id) {
        $data = array();
        $data['page_title'] = 'Prescription';
        $data['page'] = 'Prescription';
        $data['prescription'] = $this->admin_model->get_prescription($id);
        $data['drugs'] = $this->admin_model->get_user_prescription($id, 'prescription_items');
        $data['pre_ad_advices'] = $this->admin_model->select_by_prescription_id($id, 'pre_ad_advices');
        $data['pre_diagonosis'] = $this->admin_model->select_by_prescription_id($id, 'pre_diagonosis');
        $data['pre_advice'] = $this->admin_model->select_by_prescription_id($id, 'pre_advice');
        $data['pre_investigation'] = $this->admin_model->select_by_prescription_id($id, 'pre_investigation');
        $data['appointments'] = $this->admin_model->select_by_prescription_id($id, 'appointments');
        $data['appointment'] = $data['appointments'][0];
        $data['main_content'] = $this->load->view('admin/user/single_prescription', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add_report($prescription_id) {

        $tests = $this->admin_model->select_by_prescription_id($prescription_id, 'pre_investigation');
        $prescription = $this->admin_model->get_by_id($prescription_id, 'prescription');

        $pdata = array(
            'check_report' => 0
        );
        $pdata = $this->security->xss_clean($pdata);
        $this->admin_model->update($pdata, $prescription_id, 'prescription');


        $a = 1;
        foreach ($tests as $value) {

            if (!empty($_FILES['files' . $a]['name'])) {

                $filesCount = count($_FILES['files' . $a]['name']);

                for ($i = 0; $i < $filesCount; $i++) {

                    $_FILES['file']['name'] = $_FILES['files' . $a]['name'][$i];
                    $_FILES['file']['type'] = $_FILES['files' . $a]['type'][$i];
                    $_FILES['file']['tmp_name'] = $_FILES['files' . $a]['tmp_name'][$i];
                    $_FILES['file']['error'] = $_FILES['files' . $a]['error'][$i];
                    $_FILES['file']['size'] = $_FILES['files' . $a]['size'][$i];

                    $new_name = "reports_" . time() . strtolower(uniqid() . '.' . pathinfo($_FILES['files' . $a]['name'][$i], PATHINFO_EXTENSION));
                    //echo $_FILES['files'.$a]['name'][$i]; exit();
                    // File upload configuration
                    $uploadPath = 'uploads/files/';
                    $config['upload_path'] = $uploadPath;
                    $config['file_name'] = $new_name;
                    $config['allowed_types'] = 'jpg|jpeg|png|gif';

                    // Load and initialize upload library
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    $this->load->library('image_lib');

                    // Upload file to server
                    if ($this->upload->do_upload('file')) {

                        // resize image
                        $image_data = $this->upload->data();
                        $configer = array(
                            'image_library' => 'gd2',
                            'source_image' => $image_data['full_path'],
                            'maintain_ratio' => TRUE,
                            'width' => 1200,
                            'height' => 1000,
                        );
                        $this->image_lib->clear();
                        $this->image_lib->initialize($configer);
                        $this->image_lib->resize();


                        $data = array(
                            'user_id' => $prescription->user_id,
                            'patient_id' => $prescription->patient_id,
                            'prescription_id' => $prescription_id,
                            'diagnosis_id' => $value['investigation_id'],
                            'file' => 'uploads/files/' . $new_name,
                            'status' => 0,
                            'created_at' => my_date_now()
                        );
                        $data = $this->security->xss_clean($data);
                        $this->common_model->insert($data, 'diagnosis_reports');
                    }
                }
            }

            $a++;
        }

        $this->session->set_flashdata('msg', trans('inserted-successfully'));
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function live_consults() {
        $data = array();
        $data['page_title'] = 'Live consults';
        $data['consults'] = $this->admin_model->get_patient_live_consults();
        $data['main_content'] = $this->load->view('admin/user/patient_consult_lists', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function add() {
        $user_id = $this->session->userdata('id');

        $patientses = array(
            'chamber_id' => $this->chamber->uid,
            'user_id' => $user_id,
            'mr_number' => random_string('numeric', 5),
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'age' => $this->input->post('age', true),
            'weight' => $this->input->post('weight', true),
            'sex' => $this->input->post('sex', true),
            'password' => $password,
            'title' => $this->input->post('title', true),
            'guardian' => $this->input->post('guardian', true),
            'present_address' => $this->input->post('present_address', true),
            'permanent_address' => $this->input->post('permanent_address', true),
            'created_at' => my_date_now()
        );

        $patient_id = $this->admin_model->insert($patientses, 'patientses');

        $data_img = $this->admin_model->do_upload('photo');
        if ($data_img) {
            $data_img = array(
                'thumb' => $data_img['patients']
            );
            $this->admin_model->edit_option($data_img, $patient_id, 'patientses');
        }

        $patients_contact = array(
            'patient_id' => $patient_id,
            'phone1' => $this->input->post('phone1', true),
            'phone2' => $this->input->post('phone2', true),
            'phone3' => $this->input->post('phone3', true),
            'phone4' => $this->input->post('phone4', true),
            'email' => $this->input->post('email', true),
            'email2' => $this->input->post('email2', true),
            'address_r' => $this->input->post('address_r', true),
            'city_r' => $this->input->post('city_r', true),
            'zip_r' => $this->input->post('zip_r', true),
            'country_r' => $this->input->post('country_r', true),
            'address_o' => $this->input->post('address_o', true),
            'city_o' => $this->input->post('city_o', true),
            'zip_o' => $this->input->post('zip_o', true),
            'country_o' => $this->input->post('country_o', true),
            'address_other' => $this->input->post('address_other', true),
            'city_other' => $this->input->post('city_other', true),
            'zip_other' => $this->input->post('zip_other', true),
            'country_other' => $this->input->post('country_other', true),
            'physician' => $this->input->post('physician', true),
            'reffered_by' => $this->input->post('reffered_by', true),
            'doctor_name' => $this->input->post('doctor_name', true),
            'phone' => $this->input->post('phone', true),
            'relationship_type' => $this->input->post('relationship_type', true),
            'medical_history_allergies' => $this->input->post('history_allergies', true),
            'special_notes' => $this->input->post('special_notes', true),
            'created_at ' => my_date_now()
        );

        $this->admin_model->insert($patients_contact, 'patients_contact');


        $this->admin_model->insert_multiple_patient($this->input->post('insurance_loan'), 'patients_insurance_loan', $patient_id);

        // print_r($this->input->post('insurance_loan'));
        // print_r($_FILES);
        // die;

        redirect(base_url('clinic-admin/patients'));
    }

    // add patient from prescription
    public function add_pateint() {
        if ($_POST) {

            $check = $this->admin_model->check_duplicate_email($this->input->post('email'));
            if (!empty($check)) {
                echo json_encode(array('st' => 0, 'msg' => trans('email-exist')));
                exit();
            }

            //validate inputs
            $this->form_validation->set_rules('name', trans('name'), 'required');
            $this->form_validation->set_rules('mobile', trans('phone'), 'required');

            if ($this->form_validation->run() === false) {
                echo json_encode(array('st' => 0, 'msg' => validation_errors()));
            } else {

                $patients = $this->admin_model->select_by_chamber('patientses');
                if (ckeck_plan_limit('patients', count($patients)) == FALSE) {
                    echo json_encode(array('st' => 0, 'msg' => trans('reached-maximum-limit')));
                    exit();
                }

                $data = array(
                    'chamber_id' => $this->chamber->uid,
                    'user_id' => user()->id,
                    'name' => $this->input->post('name', true),
                    'email' => $this->input->post('email', true),
                    'mr_number' => random_string('numeric', 5),
                    'age' => $this->input->post('age', true),
                    'weight' => $this->input->post('weight', true),
                    'sex' => $this->input->post('sex', true),
                    'mobile' => $this->input->post('mobile', true),
                    'password' => hash_password('1234'),
                    'present_address' => $this->input->post('present_address', true),
                    'permanent_address' => $this->input->post('permanent_address', true),
                    'created_at' => my_date_now()
                );
                $data = $this->security->xss_clean($data);
                $insert = $this->admin_model->insert($data, 'patientses');

                if ($insert) {
                    echo json_encode(array('st' => 1, 'msg' => trans('inserted-successfully')));
                } else {
                    echo json_encode(array('st' => 0, 'msg' => trans('something-wrong')));
                }
            }
        }
    }

    //change password
    public function change() {
        if ($_POST) {

            $id = user()->id;
            $user = $this->admin_model->get_by_id($id, 'patientses');

            if (password_verify($this->input->post('old_pass', true), $user->password)) {
                if ($this->input->post('new_pass', true) == $this->input->post('confirm_pass', true)) {
                    $data = array(
                        'password' => hash_password($this->input->post('new_pass', true))
                    );
                    $data = $this->security->xss_clean($data);
                    $this->admin_model->edit_option($data, $id, 'patientses');
                    echo json_encode(array('st' => 1));
                } else {
                    echo json_encode(array('st' => 2));
                }
            } else {
                echo json_encode(array('st' => 0));
            }
        }
    }

    public function edit($id) {
        $data = array();
        $data['page_title'] = 'Edit';
        $data['patients'] = $this->admin_model->select_patients(array('id' => $id), 'patientses');
        $data['contact'] = $this->admin_model->select_patients(array('patient_id' => $id), 'patients_contact');
        $data['insurance'] = $this->admin_model->select_patients(array('patients_id' => $id), 'patients_insurance_loan');
        $data['main_content'] = $this->load->view('admin/patients/patients-edit', $data, TRUE);
        $this->load->view('admin/index', $data);
    }

    public function update_patient() {
        $patientses = array(
            'name' => $this->input->post('name', true),
            'email' => $this->input->post('email', true),
            'age' => $this->input->post('age', true),
            'weight' => $this->input->post('weight', true),
            'sex' => $this->input->post('sex', true),
            'password' => $password,
            'title' => $this->input->post('title', true),
            'guardian' => $this->input->post('guardian', true),
            'present_address' => $this->input->post('present_address', true),
            'permanent_address' => $this->input->post('permanent_address', true)
        );

        // Update Patients Details
        $this->admin_model->update($patientses, $this->input->post('patient_id'), 'patientses');


        $data_img = $this->admin_model->do_upload('photo');
        if ($data_img) {
            $data_img = array(
                'thumb' => $data_img['patients']
            );
            $this->admin_model->edit_option($data_img, $patient_id, 'patientses');
        }


        // Array of Patient Contact
        $patients_contact = array(
            'phone1' => $this->input->post('phone1', true),
            'phone2' => $this->input->post('phone2', true),
            'phone3' => $this->input->post('phone3', true),
            'phone4' => $this->input->post('phone4', true),
            'email' => $this->input->post('email', true),
            'email2' => $this->input->post('email2', true),
            'address_r' => $this->input->post('address_r', true),
            'city_r' => $this->input->post('city_r', true),
            'zip_r' => $this->input->post('zip_r', true),
            'country_r' => $this->input->post('country_r', true),
            'address_o' => $this->input->post('address_o', true),
            'city_o' => $this->input->post('city_o', true),
            'zip_o' => $this->input->post('zip_o', true),
            'country_o' => $this->input->post('country_o', true),
            'address_other' => $this->input->post('address_other', true),
            'city_other' => $this->input->post('city_other', true),
            'zip_other' => $this->input->post('zip_other', true),
            'country_other' => $this->input->post('country_other', true),
            'physician' => $this->input->post('physician', true),
            'reffered_by' => $this->input->post('reffered_by', true),
            'doctor_name' => $this->input->post('doctor_name', true),
            'phone' => $this->input->post('phone', true),
            'relationship_type' => $this->input->post('relationship_type', true),
            'medical_history_allergies' => $this->input->post('history_allergies', true),
            'special_notes' => $this->input->post('special_notes', true),
            'updated_at ' => my_date_now()
        );

        // Updating Patients Contacts
        $this->admin_model->update($patients_contact, $this->input->post('contact_id'), 'patients_contact');


        foreach ($this->input->post('insurance_loan') as $key => $value) {
            if (!empty($value['id'])) {
                $patients_insurance1 = array(
                    'type' => $value['type'],
                    'name' => $value['name'],
                    'amount' => $value['amount'],
                    'balance_spent' => $value['balance_spent'],
                    'balance_amount' => $value['balance_amount'],
                    'updated_at' => my_date_now()
                );
                $this->admin_model->update($patients_insurance1, $value['id'], 'patients_insurance_loan');
            } else {
                $patients_insurance2 = array(
                    'patients_id' => $this->input->post('patient_id'),
                    'type' => $value['type'],
                    'name' => $value['name'],
                    'amount' => $value['amount'],
                    'balance_spent' => $value['balance_spent'],
                    'balance_amount' => $value['balance_amount'],
                    'created_at' => my_date_now()
                );
                $this->admin_model->insert($patients_insurance2, 'patients_insurance_loan');
            }
        }

        redirect(base_url('clinic-admin/patients'));
    }

    public function active($id) {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id, 'patientses');
        $this->session->set_flashdata('msg', trans('activate-successfully'));
        redirect(base_url('admin/patients'));
    }

    public function add_rating() {
        if ($_POST) {

            $data = array(
                'user_id' => $this->input->post('user_id'),
                'patient_id' => $this->input->post('patient_id'),
                'rating' => $this->input->post('rating'),
                'feedback' => $this->input->post('feedback'),
                'created_at' => my_date_now()
            );
            $data = $this->security->xss_clean($data);
            $this->admin_model->insert($data, 'ratings');
            $this->session->set_flashdata('msg', trans('inserted-successfully'));
            redirect(base_url('admin/patients/doctors'));
        }
    }

    public function deactive($id) {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id, 'patientses');
        $this->session->set_flashdata('msg', trans('deactivate-successfully'));
        redirect(base_url('admin/patients'));
    }

    public function delete($id) {
        $this->admin_model->delete($id, 'patientses');
        echo json_encode(array('st' => 1));
    }

    public function submit_report_feedback($id) {
        $data = array(
            'check_report' => 1,
            'feedback' => $this->input->post('feedback')
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id, 'prescription');
        $this->session->set_flashdata('msg', trans('summited-successfully'));
        redirect($_SERVER['HTTP_REFERER']);
    }

    //delete image
    public function delete_report($id) {

        $report = $this->common_model->get_by_id($id, 'diagnosis_reports');
        delete_image_from_server($report->file);
        $this->common_model->delete($report->id, 'diagnosis_reports');
        echo json_encode(array('st' => 1));
    }

    public function delete_patients($id) {
        $this->admin_model->edit_option(array('is_delete' => 1), $id, 'patientses');
        echo json_encode(array('st' => 1));
    }

    public function view_patient($id,$tabpage='patientinfo') {
        // echo $id;
        $data = array();
        $data['page_title'] = 'Patient View';
        //$data['appointments'] = $this->admin_model->get_patient_appointments();
        $data['patients'] = $this->admin_model->select_patients(array('id' => $id), 'patientses');
        $data['contact'] = $this->admin_model->select_patients(array('patient_id' => $id), 'patients_contact');
        $data['doctors'] = $this->admin_model->get_order_by_attr('doctors', 'name', 'asc');
        $data['teeths'] = $this->admin_model->get_by_column_attr('teeth', 'teeth_cat', '4');
        $data['teethar_cat'] = $this->admin_model->get_order_by_attr('teeth_category', 'teeth_category_name', 'asc');
         if(!empty($tabpage)){
            $data['tabpage'] = $tabpage; 
        }
        if($tabpage == 'sittingplans')
        {
            $data['sitting_plan_list'] = $this->patient_model->getSittingPlanList($id);
            $data['pending']=$this->patient_model->count_rows('treatmentplans','0');
            $data['completed']=$this->patient_model->count_rows('treatmentplans','1');
        }
        if($tabpage == 'worksdone')
        {
            $data['treatmentplans'] = $this->admin_model->select_patients(array('patient_id' => $id), 'treatmentplans');
            $data['workdones'] = $this->patient_model->getWorkdoneReport($id);
        }
        if($tabpage == 'labs')
        {
            $data['lab_tests'] = $this->patient_model->getLabtestsDetails();
            $data['patient_tests']=$this->patient_model->getPatienttestsDetails($id);
        }
        
        if($tabpage == 'xrays')
        {
            $data['scan_tests'] =  $this->patient_model->getScantestsDetails();
            $data['patient_scans']=$this->patient_model->getPatientscansDetails($id);
        }
        if($tabpage == 'payments')
        {
            
            $data['payments']=$this->patient_model->getPatientsPaymnetDetails($id);
        }
        
        $data['main_content'] = $this->load->view('admin/patients/patient_view', $data, TRUE);
        $this->load->view('admin/index', $data);
    }
    
    public function add_sitting()
    {    
        $treatmentid = $this->input->post('trtid');
        $data = array(
            'sitting' => $this->input->post('sitting')            
        );
        $this->db->where('treatmentplans_id', $treatmentid);
        $this->db->update('teethinfo', $data);
        $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        echo json_encode($array);
    }
    
    public function add_treatmentCode() {
        $workdone_id = $this->input->post('workdone_id');
        $data = array(
            'workdoneon_id' => $this->input->post('job_id'),
            'workdoneon' => $this->input->post('job_name')            
        );
        $this->db->where('id', $workdone_id);
        $this->db->update('workdone', $data);
        $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'));
        echo json_encode($array);
    }
    
    public function add_lab(){
       
    $this->form_validation->set_rules('test_name', "test_name", 'trim|required');
      if ($this->form_validation->run() == FALSE){
        $msg = array(
             'test_name' =>form_error('test_name'),
             'test_price' =>form_error('test_price'),          
            );
        $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        }else{
          
            $title =  'lab_'.time();
            $path = 'uploads/labs/';
            $img =  $this->patient_model->upload_files($path, $title, $_FILES['file']);
             
            $report_file =  implode(",",$img);
            $report_date = $this->input->post('report_date');
            $data = array(
                      'patient_id' => $this->input->post("patient"),
                      'test_name' => $this->input->post("test_name"),
                      'report_date' => date('Y-m-d', strtotime($report_date)),
                      'test_price' => $this->input->post("test_price"),
                      'report_file' => $report_file,
                    );  
            $insert_id =  $this->patient_model->add_lab_test($data);
           
          $array = array('status' => 'success', 'error' =>'', 'message' => 'Lab Added Successfully.');
        }
    echo json_encode($array);
  }
  
  
  public function add_scan(){
    $this->form_validation->set_rules('scan_name', "scan_name", 'trim|required');
      if ($this->form_validation->run() == FALSE){
        $msg = array(
             'scan_name' =>form_error('scan_name'),
             'scan_price' =>form_error('scan_price'),          
            );
        $array = array('status' => 'fail', 'error' => $msg, 'message' => '');
        }else{
            $title =  'lab_'.time();
            $path = 'uploads/xrays/';
            $img =  $this->patient_model->upload_files($path, $title, $_FILES['file']);
             
            $report_file =  implode(",",$img);
            $report_date = $this->input->post('report_date');
            $data = array(
                      'patient_id' => $this->input->post("patient"),
                      'scan_name' => $this->input->post("scan_name"),
                      'report_date' => date('Y-m-d', strtotime($report_date)),
                      'scan_price' => $this->input->post("scan_price"),
                      'report_file' => $report_file,
                    );  
            $insert_id =  $this->patient_model->add_scan_test($data);
           
          $array = array('status' => 'success', 'error' =>'', 'message' => 'Scan Added Successfully.');
        }
    echo json_encode($array);
  }

    public function getteeth() {
        ?>
        <label>Tooth Notation</label>
        <select class="form-control" name="teethcat_id_treatment" id="teethcat_id_treatment" onchange="gettecchnumbers_treatment(this.value)">
            <?php
            $this->db->select('*')->from('teeth_category');
            $this->db->order_by("teeth_category_name", "asc");
            $query1 = $this->db->get();
            $teethar_cat = $query1->result_array();
            foreach ($teethar_cat as $key => $teetharcat_data) {
                if ($teetharcat_data['id'] > 5) {
                    ?>
                    <option value="<?php echo $teetharcat_data['id']; ?>" <?php
                    if ($teetharcat_data['id'] == '4') {
                        echo "selected='selected'";
                    }
                    ?>><?php echo $teetharcat_data['teeth_category_name']; ?></option>
                            <?php
                        }
                    }
                    ?>
        </select>
        <?php
    }

    public function getteethdata() {
        ?>
        <ul id="continents1_teeth">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 7);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                <li class="teeth_child<?php echo $i; ?>" ><a href="#" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
                <?php
                $i++;
            }
            ?>
        </ul>
        <?php
    }
public function getteeth_new()
{
  ?>
<label>Tooth Notation</label>
                <select class="form-control" name="teethcat_id_treatment" id="teethcat_id_treatment" onchange="gettecchnumbers_new(this.value)">
                    <?php
                    $this->db->select('*')->from('teeth_category');
                    $this->db->order_by("teeth_category_name", "asc");
                    $query1 = $this->db->get();
                    $teethar_cat=$query1->result_array();
                    foreach ($teethar_cat as $key => $teetharcat_data) {
                        if($teetharcat_data['id']>5)
                        {
                    ?>
                    <option value="<?php echo $teetharcat_data['id']; ?>" <?php if($teetharcat_data['id']=='4'){ echo "selected='selected'"; } ?>><?php echo $teetharcat_data['teeth_category_name']; ?></option>
                        <?php
                    }
                    }
                    ?>
               </select>
  <?php
}
public function getteethdata_new()
{
  ?>
  <ul id="continents1_new_teeth">
<?php 
          $i=1;       
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 7);
            $query = $this->db->get();
            $teethar=$query->result_array();
            foreach ($teethar as $key => $teethar_data) {
        ?> 
      
        <li class="teeth_child<?php echo $i; ?>" ><a href="#" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>,'<?php echo $teethar_data['teeth_note']; ?>','<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
        <?php
              $i++;
              }  
              ?>
            </ul>
  <?php
}
public function getteeth_per_new()
{
  ?>
 <label>Tooth Notation</label>
                <select class="form-control" name="teethcat_id_treatment" id="teethcat_id_treatment" onchange="gettecchnumbers_new(this.value)">
                    <?php
                    $this->db->select('*')->from('teeth_category');
                    $this->db->order_by("teeth_category_name", "asc");
                    $query1 = $this->db->get();
                    $teethar_cat=$query1->result_array();
                    foreach ($teethar_cat as $key => $teetharcat_data) {
                        if($teetharcat_data['id']<=5)
                        {
                    ?>
                    <option value="<?php echo $teetharcat_data['id']; ?>" <?php if($teetharcat_data['id']=='4'){ echo "selected='selected'"; } ?>><?php echo $teetharcat_data['teeth_category_name']; ?></option>
                        <?php
                    }
                    }
                    ?>
               </select>
  <?php
}
public function getteethdata_per_new()
{
  ?>
   <ul id="continents1_new">
<?php 
          $i=1;       
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 4);
            $query = $this->db->get();
            $teethar=$query->result_array();
            foreach ($teethar as $key => $teethar_data) {
        ?>       
        <li class="teethord<?php echo $i; ?>" ><a onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>,'<?php echo $teethar_data['teeth_note']; ?>','<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
        <?php
              $i++;
              }  
              ?>
            </ul>
  <?php
}
    public function getteeth_per() {
        ?>
        <label>Tooth Notation</label>
        <select class="form-control" name="teethcat_id_treatment" id="teethcat_id_treatment" onchange="gettecchnumbers_treatment(this.value)">
            <?php
            $this->db->select('*')->from('teeth_category');
            $this->db->order_by("teeth_category_name", "asc");
            $query1 = $this->db->get();
            $teethar_cat = $query1->result_array();
            foreach ($teethar_cat as $key => $teetharcat_data) {
                if ($teetharcat_data['id'] <= 5) {
                    ?>
                    <option value="<?php echo $teetharcat_data['id']; ?>" <?php
                    if ($teetharcat_data['id'] == '4') {
                        echo "selected='selected'";
                    }
                    ?>><?php echo $teetharcat_data['teeth_category_name']; ?></option>
                            <?php
                        }
                    }
                    ?>
        </select>
        <?php
    }

    public function getteethdata_per() {
        ?>
        <ul id="continents1">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 4);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                <li class="teethord<?php echo $i; ?>" ><a onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
                <?php
                $i++;
            }
            ?>
        </ul>
        <?php
    }

    public function getteethnumber() {
        $result = $this->patient_model->getteethnumber($_POST['teethid']);
        echo $result;
    }
    
    public function add_workdone_report()
    {
        //$SQL = $this->db->query('select * FROM `patientses` WHERE id ="'.$_POST['wk_patient_id'].'"');
       //$res_patient = $SQL->result();

      if($_POST['individual_tooth_wrk']=='')
      {
        $individual_tooth_wrk='';
      }else
      {
        $individual_tooth_wrk=$_POST['individual_tooth_wrk'];
      }

      if($_POST['workdoneon']=='')
      {
        $workdoneon='';
      }else
      {
        $workdoneon=$_POST['workdoneon'];
      }

      $rand_nm=rand();

      $wrkdone_data = array(
              'patient_name' => $_POST['patient_name'],
              'workdone_date' =>date('Y-m-d'),
              'workdoneon' =>$workdoneon,
              'workdone_doc' =>$_POST['workdone_doc'],
              'wrk_special_notes' =>$_POST['wrk_special_notes'],
              'amt_due_current_work' =>$_POST['amt_due_current_work'],
              'if_any_amt' =>$_POST['if_any_amt'],
              'prev_bal_amt' =>$_POST['prev_bal_amt'],
              'adv_amt' =>$_POST['adv_amt'],
              'print_tooth_id' =>$_POST['print_tooth_id'],
              'print_tooth_name' =>$_POST['print_tooth_name'],
              'individual_tooth_wrk' =>$individual_tooth_wrk,
              'wk_patient_id' =>$_POST['wk_patient_id'],
              'rmd'=>$rand_nm,
              'wrk_apt_id'=>$_POST['wrk_apt_id'],
              'added_date'=>date('Y-m-d')
            ); 

      $apt_data = array(
              'id'=>$_POST['wrk_apt_id'],
              'appointment_status'=>'Completed'
            ); 

        $patient_wrkdone = $this->patient_model->add_workkdonereport($wrkdone_data);

        //$update_appointment= $this->patient_model->updateappointment($apt_data);

  $amt=($_POST['amt_due_current_work']+$_POST['if_any_amt']+$_POST['prev_bal_amt'])-($_POST['adv_amt']);
         $data_partial = array(
              'amt_due_current_work' =>$_POST['amt_due_current_work'],
              'if_any_amt' =>$_POST['if_any_amt'],
              'prev_bal_amt' =>$_POST['prev_bal_amt'],
              'adv_amt' =>$_POST['adv_amt'],
              'pending_amount' =>$amt,
              'wk_patient_id' =>$_POST['wk_patient_id'],
              'workdone_id'=>$patient_wrkdone,
              'date'=>date('Y-m-d')
            ); 

         $patient_payement = $this->patient_model->add_partialpaymemt($data_partial);


       $amt=($_POST['amt_due_current_work']+$_POST['if_any_amt']+$_POST['prev_bal_amt'])-($_POST['adv_amt']);

          $payment_detail = array(
              'patient_id' =>$_POST['wk_patient_id'],
              'paid_amount' =>$_POST['adv_amt'],
              'balance_amount' =>$amt,
              'total_amount' =>$_POST['adv_amt'],
              'payment_mode' =>'cash',
              'note' =>'patient bill',
              'date'=>date('Y-m-d')

            ); 

          $addpayements = $this->patient_model->add_payments($payment_detail);
          $balance = $this->patient_model->maxTotalAmount($_POST['wk_patient_id']);
          
          $payment_history = array(
              'doctor_id'   => $_POST['workdone_doc'],
              'patient_id' =>$_POST['wk_patient_id'],
              'credit_amount' =>'0.00',
              'debit_amount' =>$_POST['amt_due_current_work'],
              'balance' =>($balance['balance'] + $_POST['amt_due_current_work']),
              'payment_mode' =>'',
              'description' =>'patient bill',
             ); 
          
          $payements = $this->admin_model->insert($payment_history,'payment_history');

  //      $tooth_data=array(
  //            'workdone_id'=>$patient_wrkdone,
  //            'tooth_patient_id'=>$_POST['wk_patient_id'],
  //            'rmd'=>$rand_nm,
  //            'treatmentplans_id'=>$workdoneon,
  //            'added_date'=>date('Y-m-d')
  //          ); 
  //
  //       $prescription_data=array(
  //            'workdone_id'=>$patient_wrkdone,
  //            'opd_id'=>$_POST['wk_patient_id'],
  //            'rmd'=>$rand_nm,
  //            'added_date'=>date('Y-m-d')
  //          ); 
  //
  //        $treatment_data1=array(
  //            'id'=>$workdoneon,
  //            'workdone_id'=>$patient_wrkdone,
  //            'status'=>$_POST['treatment_status'],
  //            'completed_date'=>date('Y-m-d')
  //          ); 
  //      $patient_tooth = $this->patient_model->add_tooth_wrkdone($tooth_data);
  //      $patient_prescription = $this->patient_model->add_prescription_wrkdone($prescription_data);
  //      $treatmentplans = $this->patient_model->update_treatmentplans($treatment_data1);


      $this->session->set_flashdata('msg', trans('inserted-successfully'));
        redirect($_SERVER['HTTP_REFERER']);

  }
  
  public function add_payment() {
      $balance = $this->patient_model->maxTotalAmount($_POST['patient_id']);
          
          $payment_history = array(
              'doctor_id'   => $_POST['doctor_id'],
              'patient_id' =>$_POST['patient_id'],
              'credit_amount' =>$_POST['price'],
              'debit_amount' =>'0.00',
              'balance' =>($balance['balance'] - $_POST['price']),
              'payment_mode' => $_POST['payment_mode'],
              'description' => $_POST['description'],
             ); 
          
          $payements = $this->admin_model->insert($payment_history,'payment_history');
      $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'), 'trid' => $insid, 'ttype' => $this->input->post('trtypes'));
        echo json_encode($array);
  }

    public function add_note_new() {
        $new = $this->input->post('addnew');
        $tt = $this->input->post('toothinfo_ids');

        if ($_POST['print_tooth_name_treatment'] == '') {
            $print_tooth_name_treatment = '';
        } else {
            $print_tooth_name_treatment = $_POST['print_tooth_name_treatment'];
        }
        if ($_POST['view_individual_treatment'] == '') {
            $view_individual_treatment = '';
        } else {
            $view_individual_treatment = $_POST['view_individual_treatment'];
        }

        if ($_POST['treatment_type'] == 'chief_complaint') {
            $status = '2';
        } else if ($_POST['treatment_type'] == 'other_findings') {
            $status = '2';
        } else {
            $status = '0';
        }

        $date = date('Y-m-d');
        $treatment_data = array(
            'patient_id' => $this->input->post('patient_id'),
            'date' => date('Y-m-d'),
            'doctor' => $this->input->post('treatment_doctor'),
            'job' => $this->input->post('job_name'),
            'job_id' => $this->input->post('job_id'),
            'status' => $status,
            'amount' => $this->input->post('treatment_amount'),
            'courtesy' => $this->input->post('treatment_courtesy'),
            'print_tooth_name' => $print_tooth_name_treatment,
            'individual_tooth_wrk' => $view_individual_treatment
        );

        $this->db->insert('treatmentplans', $treatment_data);
        $insid = $this->db->insert_id();

        $data1 = array(
            'tooth_patient_id' => $this->input->post('patient_id'),
            'toth_note' => $this->input->post('toth_note'),
            'date' => $date,
            'teeth_id' => $this->input->post('teethsid'),
            'teeth_number_note' => $this->input->post('tooth_no_note'),
            'doc_id' => $this->input->post('treatment_doctor'),
            'treatmentplans_id' => $insid,
            'type' => $this->input->post('treatment_type'),
        );
        $this->db->insert('teethinfo', $data1);
        // $insid1 = $this->db->insert_id();
        $array = array('status' => 'success', 'error' => '', 'message' => $this->lang->line('success_message'), 'trid' => $insid, 'ttype' => $this->input->post('trtypes'));
        echo json_encode($array);
    }

    public function delete_insurance() {
        $id = $this->input->post('id');
        $deleted = $this->db->delete('patients_insurance_loan', array('id' => $id));
        if ($deleted) {
            return "true";
        } else {
            return "false";
        }
    }

    function get_phone() {
        $id = $this->input->post('id');
        $phone_no = $this->admin_model->get_patient_phone($id);
        if (!empty($phone_no)) {
            echo $phone_no['phone1'];
        }
    }

    public function getteethlist_treatment() {

//echo $_POST['teeth_cat_id'];

        if ($_POST['teeth_cat_id'] == 3) {
            ?>
            <ul id="continents2">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 3);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                    <li class="teethord<?php echo $i; ?>" ><a href="#" data-toggle="popover<?php echo $teethar_data['id']; ?>"  title="" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
                    <?php
                    $i++;
                }
                ?>
            </ul>

                <?php
            }
            if ($_POST['teeth_cat_id'] == 5) {
                ?>
            <ul id="continents3">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 5);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                    <li class="teethord<?php echo $i; ?>" ><a href="#" data-toggle="popover<?php echo $teethar_data['id']; ?>"  title="" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
                    <?php
                    $i++;
                }
                ?>
            </ul>

                <?php
            }
            if ($_POST['teeth_cat_id'] == 4) {
                ?>
            <ul id="continents1">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 4);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                    <li class="teethord<?php echo $i; ?>" ><a href="#" data-toggle="popover<?php echo $teethar_data['id']; ?>"  title="" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')" data-original-title="<?php echo $teethar_data['teeth_note']; ?>"></a></li>
                    <?php
                    $i++;
                }
                ?>
            </ul>

                <?php
            }
            if ($_POST['teeth_cat_id'] == 7) {
                ?>
            <ul id="continents1_teeth">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 7);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                    <li class="teeth_child<?php echo $i; ?>" ><a href="#" data-toggle="popover<?php echo $teethar_data['id']; ?>"  title="" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')"></a></li>
                    <?php
                    $i++;
                }
                ?>

            </ul>

                <?php
            }
            if ($_POST['teeth_cat_id'] == 8) {
                ?>
            <ul id="continents2_teeth">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 8);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                    <li class="teeth_child<?php echo $i; ?>" ><a href="#" data-toggle="popover<?php echo $teethar_data['id']; ?>"  title="" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')"></a></li>
                    <?php
                    $i++;
                }
                ?>

            </ul>

                <?php
            }
            if ($_POST['teeth_cat_id'] == 9) {
                ?>

            <ul id="continents3_teeth">
            <?php
            $i = 1;
            $this->db->select('*')->from('teeth');
            $this->db->where('teeth_cat', 9);
            $query = $this->db->get();
            $teethar = $query->result_array();
            foreach ($teethar as $key => $teethar_data) {
                ?> 

                    <li class="teeth_child<?php echo $i; ?>" ><a href="#" data-toggle="popover<?php echo $teethar_data['id']; ?>"  title="" onclick="getRecord_teechinfo(<?php echo $teethar_data['id']; ?>, '<?php echo $teethar_data['teeth_note']; ?>', '<?php echo $teethar_data['image']; ?>')"></a></li>
                    <?php
                    $i++;
                }
                ?>

            </ul>

                    <?php
                }
            }
            
            public function deleteteeth($id){
                  
                $this->db->where('treatmentplans_id', $id);
                $this->db->delete('teethinfo');
                  
                $this->db->where('id', $id);
                $this->db->delete('treatmentplans');
                  
                  //$this->db->where('teeth_id', $id);
                  //$this->db->delete('toothcomplaint');
                  //echo json_encode(array('st' => 1));
                 echo json_encode(array('st' => 1, 'msg' => 'Your record is deleted successfully!!'));

              }
              
            public function get_xraysReportImage()
            {
                $data = [];
                $result = $this->admin_model->get_by_column_attr('patient_scans','id',$_POST['postid']);
               // print_r($result);
                $image = explode(',',$result[0]->report_file);
                foreach ($image as $key => $value) {
                    $data[$key]['src'] = base_url().'uploads/xrays/'.$value;
                    $data[$key]['title'] = $result[0]->scan_name;
                }                 
                echo json_encode(array('data' => $data));
            }
            
             public function get_labReportImage()
            {
                $data = [];
                $result = $this->admin_model->get_by_column_attr('patient_tests','id',$_POST['postid']);
                $image = explode(',',$result[0]->report_file);
                foreach ($image as $key => $value) {
                    $data[$key]['src'] = base_url().'uploads/labs/'.$value;
                    $data[$key]['title'] = $result[0]->scan_name;
                }                 
                echo json_encode(array('data' => $data));
            }
            
            public function deleteOpdPatientScan($pateint_id,$id){
                $this->patient_model->deleteIpdPatientScan($id);
                echo json_encode(array('st' => 1, 'msg' => 'Your record is deleted successfully!!'));
              }
  
            public function deleteOpdPatientLab($pateint_id,$id){
                $this->patient_model->deleteIpdPatientLab($id);
                echo json_encode(array('st' => 1, 'msg' => 'Your record is deleted successfully!!'));
            }

            
            
            
}
        