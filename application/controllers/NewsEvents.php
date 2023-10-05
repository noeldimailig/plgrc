<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsEvents extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('NewsEvents_model', 'news_model');
    }

    public function index()
    {
        $data['title'] = 'News & Events';
        $data['events'] = $this->news_model->all();
        template('news/index', $data);
    }

    public function news_events()
    {
        $data['title'] = 'News & Events';
        $data['news'] = $this->news_model->get_where('publish');
        main_template('news_events', $data);
    }
    
    public function read_more($id)
    {
        $data['news'] = $this->news_model->get($id);
        $data['title'] = $data['news']->title;
        
        main_template('news', $data);
    }

    public function create()
    {
        $data['title'] = 'Create News & Events';
        template('news/create', $data);
    }

    public function store()
    {
        $data = [
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'status' => $this->input->post('status'),
        ];

        $config['upload_path']          = 'uploads/news/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2000;
        $this->load->library('My_Upload', $config);
        $result = $this->my_upload->do_multi_upload('attachment');

        if (count($result['errors']) > 1) {
            foreach ($result['errors'] as $error) {
                $this->session->set_flashdata('danger', $error);
            }
            redirect('news/create');
        }

        if (count($result['files']) > 1) {
            $data['files'] = implode('|', $result['files']);
        } 
        
        if (count($result['files']) == 1) {
            $data['files'] = $result['files'][0];
        }

        $this->load->database();
        if ($this->db->insert('news', $data)) {
            $this->session->set_flashdata('success', 'News has been created');
            redirect('news');
        } else {
            $this->session->set_flashdata('danger', 'News could not be created');
            redirect('news/create');
        }
    }

    public function edit($news_id)
    {
        $data['title'] = 'Edit News & Events';
        $data['news'] = $this->news_model->get($news_id);
        template('news/edit', $data);
    }

    public function update($news_id)
    {
        $data = [
            'news_id' => $news_id,
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'status' => $this->input->post('status'),
        ];

        if (!empty($_FILES['attachment'])) {

            $config['upload_path']          = 'uploads/news/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2000;
            $this->load->library('My_Upload', $config);
            $result = $this->my_upload->do_multi_upload('attachment');

            if (count($result['errors']) > 1) {
                foreach ($result['errors'] as $error) {
                    $this->session->set_flashdata('danger', $error);
                }
                redirect('news/create');
            }

            if (count($result['files']) > 1) {
                $data['files'] = implode('|', $result['files']);
            } 
            
            if (count($result['files']) == 1) {
                $data['files'] = $result['files'][0];
            }
        }

        $this->load->database();
        $this->db->where('news_id', $data['news_id']);
        if ($this->db->update('news', $data)) {
            $this->session->set_flashdata('success', 'News has been updated');
            redirect('news');
        } else {
            $this->session->set_flashdata('danger', 'News could not be updated');
            redirect('news/update/' . $news_id);
        }
    }
    
    public function delete($id)
    {
        if($this->news_model->delete($id)){
            $this->session->set_flashdata('success', 'News has been deleted');
        } else {
            $this->session->set_flashdata('danger', 'News could not be deleted');
        }

        redirect('news');
    }
}
