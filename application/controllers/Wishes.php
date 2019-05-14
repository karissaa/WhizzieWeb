<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    class Wishes extends CI_Controller{
        public $data = [];
        
        public function __construct(){
            parent::__construct ();

            $this->load->model('wishes_model');
            $this->data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $this->data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $this->data['firebase'] = $this->load->view('include/firebase.php', NULL, TRUE);
            $this->data['js_classes'] = $this->load->view('include/js_classes.php', NULL, TRUE);

            $this->data['header'] = $this->load->view('template/header.php',NULL, TRUE);
            $this->data['footer'] = $this->load->view('template/footer.php', NULL, TRUE);
        }

        public function index(){
            $arr['user_id'] = $this->session->user_id;
            $this->data['js_functions'] = $this->load->view('include/js_wishes_functions.php', $arr, TRUE);

            $this->load->view('pages/wishesview.php', $this->data);
        }
    }
?>