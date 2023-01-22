<?php
class User_model extends CI_Model {
    public $email;
    public $nama;
    public $tanggal_lahir;
    public $role;

    public function login($email, $password) {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            // Email and password match
            $row = $query->row();
            $data = array(
                'email' => $row->email,
                'name' => $row->nama,
                'role' => $row->role,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($data);
            return true;
        } else {
            // Email and password don't match
            return false;
        }
    }
}








