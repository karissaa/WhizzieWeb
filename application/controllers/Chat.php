<?php

class Chat extends CI_Controller
{
    public $user;
    
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->database();
        $this->load->helper(array('url','form'));
        $this->load->library('user_agent');
    }

}

?>