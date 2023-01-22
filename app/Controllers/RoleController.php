<?php
class Role extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Role_model');
    }
    public function index() {
        $data['description'] = $this->Role_model->get_description();
        $this->load->view('role_view', $data);
    }
}
