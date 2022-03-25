<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor extends Home_Controller {

  public function __construct()
  {
    parent::__construct();
        //check auth
    if (!is_staff() && !is_user()) {
      redirect(base_url());
    }
  }


  public function index()
  {
    $data = array();
    $data['page_title'] = 'Doctor';      
    $data['page'] = 'Doctor';   
    $data['doctor'] = FALSE;
    $data['doctors'] = $this->admin_model->select_by_user('doctors',0);
    $data['chamber_category'] = $this->admin_model->select_chamber_by_user('chamber_category');
    $data['main_content'] = $this->load->view('admin/doctor/index',$data,TRUE);
    $data['doctors'] = $this->admin_model->select_all_doctors();
    $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
    $this->load->view('admin/index',$data);
  }


  public function add()
  {
    $user_id = $this->session->userdata('id');
    $doctors = array(
     'user_id' => $user_id,   
     'name' => $this->input->post('name'),   
     'gender' => $this->input->post('gender'),   
     'dob' => $this->input->post('dob'),   
     'role' => "doctor",   
     'marital_status' => $this->input->post('marital_status'),   
     'blood_group' => $this->input->post('blood_group'),   
     'qualification' => $this->input->post('qualification'),   
     'email' => $this->input->post('email'),   
     'email2' => $this->input->post('email2'),   
     'password' => hash_password($this->input->post('password')),   
     'speciality' => $this->input->post('speciality'),   
     'phone1' => $this->input->post('phone1'),   
     'phone2' => $this->input->post('phone2'),   
     'phone3' => $this->input->post('phone3'),   
     'phone4' => $this->input->post('phone4'),   
     'pan_number' => $this->input->post('pan_number'),   
     'gst_number' => $this->input->post('gst_number'),   
     'created_at' => date("Y-m-d h:i:s"),   
     'updated_at' => date("Y-m-d h:i:s"),   
   );

        // Insert in Doctors Table
    $id = $this->admin_model->insert($doctors,'doctors');

    $data_img = $this->admin_model->do_upload('photo');
    if($data_img){
      $data_img = array(
        'thumb' => $data_img['doc']
      );
      $this->admin_model->edit_option($data_img, $id, 'doctors'); 
    }

    $doctors_address = array(
     'doctor_id' => $id,   
     'address_r' => $this->input->post('address_r'),   
     'city_r' => $this->input->post('city_r'),   
     'zip_r' => $this->input->post('zip_r'),   
     'country_r' => $this->input->post('country_r'),   
     'address_o' => $this->input->post('address_o'),   
     'city_o' => $this->input->post('city_o'),   
     'zip_o' => $this->input->post('zip_o'),   
     'country_o' => $this->input->post('country_o'),   
     'address_other' => $this->input->post('address_other'),   
     'city_other' => $this->input->post('city_other'),   
     'zip_other' => $this->input->post('zip_other'),   
     'country_other' => $this->input->post('country_other'),     
     'created_at' => date("Y-m-d h:i:s"),   
     'updated_at' => date("Y-m-d h:i:s"),   
   );

        // Insert in Doctors Address Table
    $this->admin_model->insert($doctors_address,'doctors_address');

    $doctors_vaccination = array(
      'doctor_id' => $id,
      'vaccination_type' => $this->input->post('vaccination_type'),
      'vaccination_date' => $this->input->post('vaccination_date'),
      'reminder_date_for_next' => $this->input->post('reminder_date_for_next'),
      'remarks' => $this->input->post('vaccination_remarks'),
      'medical_history' => $this->input->post('medical_history'),
      'updated_at' => date("Y-m-d h:i:s"),
    );

        // Insert in Doctors Vaccination Table
    $this->admin_model->insert_doctors_vaccination($doctors_vaccination,'doctors_vaccination');

    $doctors_bank = array(
      'doctor_id' => $id,
      'bank_name' => $this->input->post('bank_name'),
      'bank_account_number' => $this->input->post('bank_account_number'),
      'ifsc_code' => $this->input->post('ifsc_code'),
      'remarks' => $this->input->post('bank_remarks'),
      'updated_at' => date("Y-m-d h:i:s"),
    );

        // Insert in Doctors Bank Table
    $this->admin_model->insert_doctors_banks($doctors_bank,'doctor_bank_details');
    
    $doctors_insurance = array(
      'doctor_id' => $id,
      'insurance' => $this->input->post('insurance'),
      'insurance_date' => $this->input->post('insurance_date'),
      'renewal_date' => $this->input->post('renewal_date'),
      'amount_insured' => $this->input->post('amount_insured'),
      'amount_paid' => $this->input->post('amount_paid'),
      'allow_notifications' => $this->input->post('allow_notifications'),
      'remarks' => $this->input->post('remarks'),
      'updated_at' => date("Y-m-d h:i:s"),
    );

        // Insert in Doctors Insurance Table
    $this->admin_model->insert_doctors_insurance($doctors_insurance,'doctor_insurance_details');
    
    redirect(base_url('clinic-admin/doctor'));

  }

  public function edit($id)
  {  
    $data = array();
    $data['page_title'] = 'Edit';   
    $data['doctors'] = $this->admin_model->select_doctor_detail($id,'doctors');
    $data['vaccination'] = $this->admin_model->select_vaccination($id,'doctors_vaccination');
    $data['bank_details'] = $this->admin_model->select_bank($id,'doctor_bank_details');
    $data['insurance_details'] = $this->admin_model->select_insurance($id,'doctor_insurance_details');
    $data['chamber_category'] = $this->admin_model->select_chamber_by_user('chamber_category');
    $data['main_content'] = $this->load->view('admin/doctor/edit',$data,TRUE);
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
    $this->admin_model->update($data, $id,'staffs');
    $this->session->set_flashdata('msg', trans('activate-successfully')); 
    redirect(base_url('admin/staff'));
  }

  public function deactive($id) 
  {
    $data = array(
      'status' => 0
    );
    $data = $this->security->xss_clean($data);
    $this->admin_model->update($data, $id,'staffs');
    $this->session->set_flashdata('msg', trans('deactivate-successfully')); 
    redirect(base_url('admin/staff'));
  }

  public function delete()
  {
    $id = $this->input->post('id');
    $table = $this->input->post('table');
    if($this->admin_model->delete($id,$table)){
      return true;
    } 
  }

  public function update()
  {

    $doctors = array(
     'name' => $this->input->post('name'),   
     'gender' => $this->input->post('gender'),   
     'dob' => $this->input->post('dob'),   
     'marital_status' => $this->input->post('marital_status'),   
     'blood_group' => $this->input->post('blood_group'),   
     'qualification' => $this->input->post('qualification'),   
     'email' => $this->input->post('email'),   
     'email2' => $this->input->post('email2'),   
     ///'password' => hash_password($this->input->post('password')),   
     'speciality' => $this->input->post('speciality'),   
     'phone1' => $this->input->post('phone1'),   
     'phone2' => $this->input->post('phone2'),   
     'phone3' => $this->input->post('phone3'),   
     'phone4' => $this->input->post('phone4'),   
     'pan_number' => $this->input->post('pan_number'),   
     'gst_number' => $this->input->post('gst_number'),   
     'updated_at' => date("Y-m-d h:i:s"),   
   );
    if(!empty($this->input->post('password'))){
    $doctors['password'] = hash_password($this->input->post('password'));
    }
        // Update Doctors Details
    $this->admin_model->update($doctors,$this->input->post('id'),'doctors');

    $data_img = $this->admin_model->do_upload('photo');
    if($data_img){
      $data_img = array(
        'thumb' => $data_img['doc']
      );
      $this->admin_model->edit_option($data_img,$this->input->post('id'), 'doctors'); 
    }

    $doctors_address = array(
     'address_r' => $this->input->post('address_r'),   
     'city_r' => $this->input->post('city_r'),   
     'zip_r' => $this->input->post('zip_r'),   
     'country_r' => $this->input->post('country_r'),   
     'address_o' => $this->input->post('address_o'),   
     'city_o' => $this->input->post('city_o'),   
     'zip_o' => $this->input->post('zip_o'),   
     'country_o' => $this->input->post('country_o'),   
     'address_other' => $this->input->post('address_other'),   
     'city_other' => $this->input->post('city_other'),   
     'zip_other' => $this->input->post('zip_other'),   
     'country_other' => $this->input->post('country_other'),     
     'updated_at' => date("Y-m-d h:i:s"),   
   );

        // Update in Doctors Address Table
    $this->admin_model->update($doctors_address,$this->input->post('address_id'),'doctors_address');


    $doctors_vaccination = array(
      'doctor_id' => $this->input->post('id'),
      'vaccination_type' => $this->input->post('vaccination_type'),
      'vaccination_date' => $this->input->post('vaccination_date'),
      'reminder_date_for_next' => $this->input->post('reminder_date_for_next'),
      'remarks' => $this->input->post('vaccination_remarks'),
      'medical_history' => $this->input->post('medical_history'),
      'updated_at' => date("Y-m-d h:i:s"),
    );

        // Update in Doctors Vaccination Table
    $this->admin_model->insert_doctors_vaccination($doctors_vaccination,'doctors_vaccination',$this->input->post('vaccination_id'));


    $doctors_bank = array(
      'doctor_id' => $this->input->post('id'),
      'bank_name' => $this->input->post('bank_name'),
      'bank_account_number' => $this->input->post('bank_account_number'),
      'ifsc_code' => $this->input->post('ifsc_code'),
      'remarks' => $this->input->post('bank_remarks'),
      'updated_at' => date("Y-m-d h:i:s"),
    );

        // Update in Doctors Bank Table
    $this->admin_model->insert_doctors_banks($doctors_bank,'doctor_bank_details',$this->input->post('bank_id'));


    $doctors_insurance = array(
      'doctor_id' => $this->input->post('id'),
      'insurance' => $this->input->post('insurance'),
      'insurance_date' => $this->input->post('insurance_date'),
      'renewal_date' => $this->input->post('renewal_date'),
      'amount_insured' => $this->input->post('amount_insured'),
      'amount_paid' => $this->input->post('amount_paid'),
      'allow_notifications' => $this->input->post('allow_notifications'),
      'remarks' => $this->input->post('remarks'),
      'updated_at' => date("Y-m-d h:i:s"),
    );

        // Update in Doctors Insurance Table
    $this->admin_model->insert_doctors_insurance($doctors_insurance,'doctor_insurance_details',$this->input->post('insurance_id'));

    redirect(base_url('clinic-admin/doctor'));
  }

  public function delete_doctor($id){
    $this->admin_model->edit_option(array('is_delete' => 1), $id,'doctors');
    echo json_encode(array('st' => 1));
  }

}


