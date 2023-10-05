<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model', 'auth_model');
    }

    public function index()
    {
        $data['title'] = 'Login';
        $this->load->view('admin/signin', $data);
    }

    public function signin()
    {
        $email = $this->input->post('email');

        $user = $this->auth_model->check_user($email);

        if($user) {
            if(passwordverify($this->input->post('password'), $user->password))
            {
                $data = [
                    'user_id' => $user->admin_id,
                    'username' => $user->username,
                    'email' => $user->email,
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($data);

                redirect('dashboard');
            } else {
                $this->session->set_flashdata('danger', 'Invalid username/email or password');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}