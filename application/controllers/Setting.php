<?php

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
    }

    public function index()
    {
        $data['title'] = 'Settings - Change Password';
        template('settings', $data);
    }

    public function changepass()
    {
        $this->load->model('Auth_model', 'auth_model');
        $user = $this->auth_model->check_user($this->session->userdata('email'));

        // dd($user);

        if($user) {
            if(passwordverify($this->input->post('old_password'), $user->password)) {
                if($this->input->post('new_password') == $this->input->post('confirm_password')) {
                    $this->auth_model->admin_changepass($user->admin_id, passwordhash($this->input->post('new_password')));
                    $this->session->set_flashdata('success', 'Password successfully changed');
                } else {
                    $this->session->set_flashdata('error', 'New password and confirm password does not match');
                }
            } else {
                $this->session->set_flashdata('error', 'Invalid current password');
            }
        }
        redirect('setting');
    }
}