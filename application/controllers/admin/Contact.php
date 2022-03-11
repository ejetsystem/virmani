<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends Home_Controller {

    public function __construct()
    {
        parent::__construct();
        //check auth
        if (!is_admin()) {
            redirect(base_url());
        }
    }


    public function index()
    {
        $data = array();
        $data['page_title'] = 'Contact';      
        $data['page'] = 'Contact';
        $data['contacts'] = $this->admin_model->select('site_contacts');
        $data['main_content'] = $this->load->view('admin/contact',$data,TRUE);
        $data['doctors'] = $this->admin_model->select_all_doctors();
        $data['patientses'] = $this->admin_model->select_by_chamber('patientses');
        $this->load->view('admin/index',$data);
    }

    public function delete($id)
    {
        $this->admin_model->delete($id,'site_contacts'); 
        echo json_encode(array('st' => 1));
    }

}


