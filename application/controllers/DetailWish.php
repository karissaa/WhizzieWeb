<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    class DetailWish extends CI_Controller{
        public $data = [];
        
        public function __construct(){
            parent::__construct ();

            $this->load->model('DetailWish_model');
            $this->data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $this->data['css'] = $this->load->view('include/css.php', NULL, TRUE);
            $this->data['cart_css'] = $this->load->view('include/cart_css.php', NULL, TRUE);
            $this->data['firebase'] = $this->load->view('include/firebase.php', NULL, TRUE);
            $this->data['js_classes'] = $this->load->view('include/js_classes.php', NULL, TRUE);

            $this->data['header'] = $this->load->view('template/header.php',NULL, TRUE);
            $this->data['footer'] = $this->load->view('template/footer.php', NULL, TRUE);
        }

        public function index($wish_key){

            if($this->session->user_id !== null){
                $arr['wish_key'] = $wish_key;
                $arr['user_id'] = $this->session->user_id;
                $this->data['js_functions'] = $this->load->view('include/js_detailwish_functions.php', $arr, TRUE);

                $this->load->view('pages/detailwishview.php', $this->data);
            }
            else redirect('Login/index');
            
        }
    }
?>