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
            $this->data['js_functions'] = $this->load->view('include/js_functions.php', NULL, TRUE);

            $this->data['header'] = $this->load->view('template/header.php',NULL, TRUE);
            $this->data['footer'] = $this->load->view('template/footer.php', NULL, TRUE);
        }

        public function index(){
            $this->load->view('pages/wishesview.php', $this->data);
        }

        // public function AddUser(){
        //     $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
        //     $data['css'] = $this->load->view('include/css.php', NULL, TRUE);

        //     $username = $this->input->post('loginUsername');
        //     $password = $this->input->post('loginPassword');
        //     $passwordConf = $this->input->post('loginPasswordConfirm');

        //     $this->form_validation->set_rules('loginUsername'	 ,     'Login Username'  ,             'required',			     array('required'=> 'This field cannot be Empty'));
        //     $this->form_validation->set_rules('loginPassword'	 ,     'Login Password',               'required|min_length[8]', array('required'=> 'This field cannot be Empty', 'min_length[8]' => 'Please input minimal 8 character!'));
        //     $this->form_validation->set_rules('loginPasswordConfirm',  'Login Password Confirmation',  'required',				 array('required'=> 'This field cannot be Empty'));

        //     if($this->form_validation->run() == FALSE){
        //         $this->load->view('pages/signup.php', $data);
        //     } else{

        //         if($password != $passwordConf){
        //             //Password tidak match, Print Error!
        //             redirect('pages/signup.php');
        //         }else{
        //             // AddData($username, $password, $passwordConf) dari data yang sudah diinput
        //         }

        //     }
        // }
    }
?>