<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CheckEmailExist extends Home_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function checkEmailExsist(){
        $email = $this->input->post('email');
        if(!empty($this->admin_model->checkEmailExsist($email))){
            echo "true";
        }
        else{
            echo "false";
        }
    }

}