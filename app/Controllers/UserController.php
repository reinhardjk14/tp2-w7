<?php
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->User_model->login($email, $password);
    }
}
