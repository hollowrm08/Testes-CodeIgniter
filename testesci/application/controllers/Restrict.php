<?php 
    defined('BASEPATH') or exit('No direct script access allowed');

    class Restrict Extends CI_Controller{
        public function index(){
            //$this->template->show("login.php");

            $this->load->model("users_model");
            print_r($this->users_model->get_user_data("hollowrm08"));
        }

        
    }

?>