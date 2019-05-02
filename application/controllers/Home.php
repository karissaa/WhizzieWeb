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

        public function AddUser(){
            $data['js'] = $this->load->view('include/javascript.php', NULL, TRUE);
            $data['css'] = $this->load->view('include/css.php', NULL, TRUE);

            $username = $this->input->post('loginUsername');
            $password = $this->input->post('loginPassword');
            $passwordConf = $this->input->post('loginPasswordConfirm');

            $this->form_validation->set_rules('loginUsername'	 ,     'Login Username'  ,             'required',			     array('required'=> 'This field cannot be Empty'));
            $this->form_validation->set_rules('loginPassword'	 ,     'Login Password',               'required|min_length[8]', array('required'=> 'This field cannot be Empty', 'min_length[8]' => 'Please input minimal 8 character!'));
            $this->form_validation->set_rules('loginPasswordConfirm',  'Login Password Confirmation',  'required',				 array('required'=> 'This field cannot be Empty'));

            if($this->form_validation->run() == FALSE){
                $this->load->view('pages/signup.php', $data);
            } else{

                if($password != $passwordConf){
                    //Password tidak match, Print Error!
                    redirect('pages/signup.php');
                }else{
                    // AddData($username, $password, $passwordConf) dari data yang sudah diinput
                }

            }
        }
    }
?>