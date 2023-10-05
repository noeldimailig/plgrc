<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publisher extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Publisher_model', 'publisher_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Publishers';
        $data['publishers'] = $this->publisher_model->all();
        $data['scripts'] = 'admin/partials/script_publisher_table.php';

        template('publisher/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Add Publisher';
        template('publisher/create', $data);
    }

    public function store()
    {
        $data = [
            'publisher' => $this->input->post('publisher'),
        ];

        if ($this->publisher_model->store($data)) {
            // dd($data);
            $this->session->set_flashdata('success', 'Publisher has been added.');
            redirect('publisher');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->create();
        }
    }

    public function edit($publisher_id)
    {
        $data['title'] = 'Edit publisher';
        $data['publisher'] = $this->publisher_model->get($publisher_id);
        
        template('publisher/edit', $data);
    }

    public function update($publisher_id)
    {
        $data = [
            'publisher_id' => $publisher_id,
            'publisher' => $this->input->post('publisher'),
        ];

        if ($this->publisher_model->update($data)) {
            $this->session->set_flashdata('success', 'Publisher has been updated.');
            redirect('publisher');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->edit($publisher_id);
        }
    }

    public function delete($publisher_id)
    {
        if ($this->publisher_model->delete($publisher_id)) {
            $this->session->set_flashdata('success', 'Publisher has been deleted.');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
        }
        redirect('publisher');
    }
}
