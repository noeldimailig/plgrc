<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Borrowers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Books_model', 'books_model');
        $this->load->model('Borrower_model', 'borrower_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'All Borrower';

        $data['borrowers'] = $this->borrower_model->all();
        $data['scripts'] = 'admin/partials/script_borrower_table.php';

        template('borrower/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Add Borrower';
        $data['books'] = $this->books_model->all();

        template('borrower/create', $data);
    }

    public function store()
    {
        $data = [
            'full_name' => $this->input->post('name'),
            'office' => $this->input->post('office'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('phone'),
            'purpose' => $this->input->post('purpose'),
            'book_id' => $this->input->post('book-borrowed'),
            'date_borrowed' => $this->input->post('date-borrowed'),
        ];

        if ($this->borrower_model->store($data)) {
            $this->session->set_flashdata('success', 'Borrower information has been added.');
            redirect('borrowers');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong! Try again.');
            redirect('borrowers/create');
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Borrower Details';

        $data['borrower'] = $this->borrower_model->get($id);
        $data['books'] = $this->books_model->all();

        template('borrower/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'borrower_id' => $id,
            'full_name' => $this->input->post('name'),
            'office' => $this->input->post('office'),
            'address' => $this->input->post('address'),
            'contact_no' => $this->input->post('phone'),
            'purpose' => $this->input->post('purpose'),
            'book_id' => $this->input->post('book-borrowed'),
            'date_borrowed' => $this->input->post('date-borrowed'),
        ];

        if ($this->borrower_model->update($data)) {
            $this->session->set_flashdata('success', 'Borrower information has been updated.');
            redirect('borrowers');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong! Try again.');
            redirect('borrowers/edit/' . $id);
        }
    }

    public function delete($id)
    {
        if ($this->borrower_model->delete($id)) {
            $this->session->set_flashdata('success', 'Borrower information has been deleted.');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong! Try again.');
        }
        redirect('borrowers');
    }
}
