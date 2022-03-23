<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

class Drugs extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        //check auth
        if (!is_staff() && !is_user()) {
            redirect(base_url());
        }
        $this->load->model("pharmacy_model");
        $this->load->model("patient_model");
        //$this->load->model("Printing_model");
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'Drugs';      
        $data['page'] = 'Drugs';   
        $data['drug'] = FALSE;
        $data['drugs'] = $this->admin_model->select_by_user('drugs');
        $data['main_content'] = $this->load->view('admin/drugs/drugs',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('admin/index',$data);
    }


    public function addDrug()
    {
        $data = array();
        $data['page_title'] = 'Add Drug';      
        $data['page'] = 'Drugs';   
        $data['drug'] = FALSE;
        $data['drugs'] = $this->admin_model->select_by_user('drugs');
        $data['medicine_category'] = $this->admin_model->get_order_by_attr('medicine_category','id','ASC');
        $data['medicine_brand'] = $this->admin_model->get_order_by_attr('medicine_brand','id','ASC');
        $data['main_content'] = $this->load->view('admin/drugs/add_drug',$data,TRUE);
        
        $this->load->view('admin/index',$data);
    }


    public function add()
    {	
        //print_r($_POST);
        //die;
        if($_POST)
        {   
            $id = $this->input->post('id', true);
             
            //validate inputs
            $this->form_validation->set_rules('medicine_name', "Medicine Name", 'trim|required');
            $this->form_validation->set_rules('medicine_category_id', "Medicine Category"  , 'required');
            $this->form_validation->set_rules('medicine_company', "Medicine Company", 'required');
            $this->form_validation->set_rules('medicine_composition', "Medicine composition", 'required');
            $this->form_validation->set_rules('medicine_group', "Medicine Group", 'required');
            $this->form_validation->set_rules('unit', "Unit", 'required');
            $this->form_validation->set_rules('unit_packing', "Unit/Packing", 'required');

            if ($this->form_validation->run() === false) {
                $this->session->set_flashdata('error', validation_errors());
                redirect(base_url('clinic-admin/drugs'));
            } else {
                if(user()->role == 'staff'){$user_id = user()->user_id;}else{$user_id = user()->id;}
                
                if(!empty($_FILES['medicine_image'])){
                $title =  'med_'.time();
                $path = 'uploads/medicine/';
                $report_file =  $this->patient_model->upload_single_file($path, $title, 'medicine_image');
                }else{
                    $report_file = "";
                } 
                
                $data = array(
                    'user_id' => $user_id,
                    'medicine_name' => $this->input->post('medicine_name'),
                    'medicine_category_id' => $this->input->post('medicine_category_id'),
                    'medicine_brand_id' => $this->input->post('medicine_brand_id'),
                    'medicine_image'    => $report_file,
                    'medicine_company' => $this->input->post('medicine_company'),
                    'basic_salt' => $this->input->post('basic_salt'),
                    'medicine_composition' => $this->input->post('medicine_composition'),
                    'medicine_group' => $this->input->post('medicine_group'),
                    'unit' => $this->input->post('unit'),
                    'min_level' => $this->input->post('min_level'),
                    'reorder_level' => $this->input->post('reorder_level'),
                    'vat' => $this->input->post('vat'),
                    'unit_packing' => $this->input->post('unit_packing'),
                    'supplier' => $this->input->post('supplier'),
                    'note' => $this->input->post('note'),
                    'vat_ac' => $this->input->post('vat_ac'),
                    'form' => $this->input->post('note'),
                    'description' => $this->input->post('description'),
                    'safety_alerts' => $this->input->post('safety_alerts'),
                    'bactrology' => $this->input->post('bactrology')
                );
                
                $data = $this->security->xss_clean($data);
                
                //if id available info will be edited
                if ($id != '') {
                    $this->admin_model->edit_option($data, $id, 'drugs');
                    $this->session->set_flashdata('msg', trans('updated-successfully')); 
                } else {
                    $id = $this->admin_model->insert($data, 'drugs');
                    $this->session->set_flashdata('msg', trans('inserted-successfully')); 
                }
                redirect(base_url('clinic-admin/drugs'));

            }
        }      
        
    }
    
    public function getDetails($pharmacy_id)
    {
       $data['drug'] = $this->admin_model->select_option($pharmacy_id, 'drugs')[0];
       $data['doctors'] = $this->admin_model->select_all_doctors();
       $data['all_bad_stock'] = $this->admin_model->get_by_column_attr('medicine_bad_stock','medicine_id',$pharmacy_id);
       $data['all_stock'] = $this->admin_model->get_by_column_attr('medicine_batch_details','medicine_id',$pharmacy_id);
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
       $data['main_content'] = $this->load->view('admin/drugs/view_tpl',$data,true);
        $this->load->view('admin/index',$data);
    }
    
     public function getSalt() {
        $brand_id = $this->input->get_post('brand_id');
        $result = $this->pharmacy_model->getBranddetail($brand_id);

        echo json_encode($result);
    }

    public function edit($id)
    {  
        $data = array();
        $data['page_title'] = 'Edit';   
        $data['drug'] = $this->admin_model->select_option($id, 'drugs');
        $data['medicine_category'] = $this->admin_model->get_order_by_attr('medicine_category','id','ASC');
        $data['medicine_brand'] = $this->admin_model->get_order_by_attr('medicine_brand','id','ASC');
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $data['main_content'] = $this->load->view('admin/drugs/edit_drug',$data,TRUE);
        $this->load->view('admin/index',$data);
    }


    public function update()
    {  
        if(!empty($_FILES['medicine_image'])){
        $title =  'med_'.time();
        $path = 'uploads/medicine/';
        $report_file =  $this->patient_model->upload_single_file($path, $title, 'medicine_image');
        }else{
            $report_file = "";
        } 
        
        $data = array(
            'medicine_name' => $this->input->post('medicine_name'),
            'medicine_category_id' => $this->input->post('medicine_category_id'),
            'medicine_brand_id' => $this->input->post('medicine_brand_id'),
            'medicine_image'    => $report_file,
            'medicine_company' => $this->input->post('medicine_company'),
            'basic_salt' => $this->input->post('basic_salt'),
            'medicine_composition' => $this->input->post('medicine_composition'),
            'medicine_group' => $this->input->post('medicine_group'),
            'unit' => $this->input->post('unit'),
            'min_level' => $this->input->post('min_level'),
            'reorder_level' => $this->input->post('reorder_level'),
            'vat' => $this->input->post('vat'),
            'unit_packing' => $this->input->post('unit_packing'),
            'supplier' => $this->input->post('supplier'),
            'note' => $this->input->post('note'),
            'vat_ac' => $this->input->post('vat_ac'),
            'form' => $this->input->post('note'),
            'description' => $this->input->post('description'),
            'safety_alerts' => $this->input->post('safety_alerts'),
            'bactrology' => $this->input->post('bactrology')
        );

        $this->admin_model->edit_option($data, $this->input->post('id'), 'drugs');
        $this->session->set_flashdata('msg', trans('updated-successfully'));
        redirect(base_url('clinic-admin/drugs'));
    }

    
    public function active($id) 
    {
        $data = array(
            'status' => 1
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'drugs');
        $this->session->set_flashdata('msg', trans('activate-successfully')); 
        redirect(base_url('admin/drugs'));
    }

    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'drugs');
        $this->session->set_flashdata('msg', trans('deactivate-successfully')); 
        redirect(base_url('admin/drugs'));
    }

    public function delete($id)
    {
        $this->admin_model->delete($id,'drugs'); 
        echo json_encode(array('st' => 1));
    }

    public function deleteBadStock($id)
    {
        $this->admin_model->edit_option(array('is_deleted'=>1),$id,'medicine_bad_stock'); 
        echo json_encode(array('st' => 1));
    }

    public function deleteStock($id)
    {
        $this->admin_model->edit_option(array('is_deleted'=>1),$id,'medicine_batch_details'); 
        echo json_encode(array('st' => 1));
    }

    public function addStock()
    {
        $data = array(
            'medicine_id' => $this->input->post('medicine_id'),
            'inward_date' => $this->input->post('inward_date'),
            'expiry_date' => $this->input->post('expiry_date'),
            'batch_no'    => $this->input->post('batch_no'),
            'packing_qty' => $this->input->post('packing_qty'),
            'purchase_rate_packing' => $this->input->post('purchase_rate_packing'),
            'quantity' => $this->input->post('quantity'),
            'mrp' => $this->input->post('mrp'),
            'sale_rate' => $this->input->post('sale_rate'),
            'amount' => $this->input->post('amount'),
            'available_quantity' => $this->input->post('quantity'),
            'created_at' => my_date_now(),
            'updated_at' => my_date_now()
        );
        $this->admin_model->insert($data, 'medicine_batch_details');
        $this->session->set_flashdata('msg', trans('inserted-successfully'));
        redirect(base_url('clinic-admin/drugs'));
    }

    public function getBatch(){
        $id = $this->input->post('id');
        $data = $this->admin_model->get_by_column_attr("medicine_batch_details", 'medicine_id',$id);
        $select =  "<option value='Select'> Select </option>";
        foreach($data as $d){
            $select.= "<option value='".$d->id."'> ".$d->batch_no." </option>";
        }
        echo $select;
         
    }

    public function getExpire(){
        $id = $this->input->post('id');
        $data = $this->admin_model->select_option($id, 'medicine_batch_details')[0];
        echo $data['expiry_date'];
    }

    

    public function addBadStock()
    {
        $data = array(
            'medicine_id' => $this->input->post('bad_medicine_id'),
            'outward_date' => $this->input->post('inward_date'),
            'expiry_date' => $this->input->post('expiry_date'),
            'batch_no'    => $this->input->post('batch_no'),
            'quantity' => $this->input->post('packing_qty'),
            'note' => $this->input->post('note'),
            'created_at' => my_date_now(),
        );
        $this->admin_model->insert($data, 'medicine_bad_stock');
        $this->session->set_flashdata('msg', trans('inserted-successfully'));
        redirect(base_url('clinic-admin/drugs'));
    }

    

}


