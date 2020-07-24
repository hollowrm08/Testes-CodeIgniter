<?php 
    defined('BASEPATH') or exit('No direct script access allowed');

    class Restrict Extends CI_Controller{
        public function index(){
            $this->template->show("login.php");
        }

        
    }

?>