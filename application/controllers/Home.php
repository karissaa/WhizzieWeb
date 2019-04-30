<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller{
        public $data = [];
        
        public function __construct(){
            parent::__construct ();

            $this->load->model('home_model');
            $this->data['firebase'] = $this->load->view('include/firebase.php', NULL, TRUE);
            $this->data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $this->data['css'] = $this->load->view('include/css.php', NULL, TRUE);
        }

        public function index(){
            $this->load->view('pages/homeview.php', $this->data);
        }
    }
?>