<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function create($data)
    {
        $this->db->insert('admin', $data);
    }

    public function check_user($email)
    {
        $this->db->where('email', $email);
        $this->db->or_where('username', $email);
        return $this->db->get_where('admin')->row();
    }

    public function admin_changepass($id, $password)
    {
        $this->db->where('admin_id', $id);
        return $this->db->update('admin', ['password' => $password]);
    }
}