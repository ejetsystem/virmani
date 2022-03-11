<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        //check auth
        if (!is_admin() && !is_user()) {
            redirect(base_url());
        }
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'Pages';  
        $data['page'] = FALSE;
        $data['pages'] = $this->admin_model->select('pages');
        $data['main_content'] = $this->load->view('admin/pages',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('admin/index',$data);
    }



    public function add()
    {	
        if($_POST)
        {   
            $id = $this->input->post('id', true);

            $data=array(
                'title' => $this->input->post('title', true),
                'slug' => str_slug(trim($this->input->post('slug', true))),
                'details' => $this->input->post('details', true),
                'status' => 1,
                'created_at' => my_date_now()
            );
            $data = $this->security->xss_clean($data);

            //if id available info will be edited
            if ($id != '') {
                $this->admin_model->edit_option($data, $id, 'pages');
                $this->session->set_flashdata('msg', trans('updated-successfully')); 
            } else {
                $id = $this->admin_model->insert($data, 'pages');
                $this->session->set_flashdata('msg', trans('inserted-successfully')); 
            }
            redirect(base_url('superadmin/pages'));

        }      
        
    }

    public function edit($id)
    {  
        $data = array();
        $data['page_title'] = 'Edit';   
        $data['page'] = $this->admin_model->select_option($id, 'pages');
        $data['main_content'] = $this->load->view('admin/pages',$data,TRUE);
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
        $this->admin_model->update($data, $id,'pages');
        $this->session->set_flashdata('msg', trans('activate-successfully')); 
        redirect(base_url('admin/pages'));
    }

    public function deactive($id) 
    {
        $data = array(
            'status' => 0
        );
        $data = $this->security->xss_clean($data);
        $this->admin_model->update($data, $id,'pages');
        $this->session->set_flashdata('msg', trans('deactivate-successfully')); 
        redirect(base_url('admin/pages'));
    }

    public function delete($id)
    {
        $this->admin_model->delete($id,'pages'); 
        echo json_encode(array('st' => 1));
    }

}


