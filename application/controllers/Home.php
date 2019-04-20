<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    class Home extends CI_Controller{

        function __Construct(){
            parent::__Construct ();
                $this->load->model('home_model');
        }

        public function index(){
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $this->load->view('pages/homeview.php', $data);
        }
    }
?>