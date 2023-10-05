<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Books_model', 'book_model');
        $this->load->model('Publisher_model', 'publisher_model');
        $this->load->model('Category_model', 'category_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Books';

        // $this->load->library('paginator');
        // $optional = array(
        //     'per_page' => 15,
        //     'query_string' => true,
        //     'base_url' => 'books',
        // );

        $data['books'] = $this->book_model->all();
        // $data['books'] = $this->paginator->paginate('books', $optional);

        // Get pagination links
        // $pagination_links = $this->paginator->get_links('books', 'bootstrap5');
        // $data['pagination'] = $pagination_links;


        template('book/index', $data);
    }

    public function create()
    {
        $data['title'] = 'Add Book';
        $data['publishers'] = $this->publisher_model->all();
        $data['main_categories'] = $this->category_model->main_all();
        $data['sub_categories'] = $this->category_model->sub_all();

        $data['scripts'] = 'admin/partials/choices.php';
        template('book/create', $data);
    }

    public function store()
    {
        $config['upload_path'] = 'uploads/books';
        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $file = 'book.png';

        if (!empty($_FILES['cover']['name'])) {
            if (!$this->upload->do_upload('cover')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
            } else {
                $book_cover = $this->upload->data();
                $file = $book_cover['file_name'];
            }
        }

        // dd($_POST);
        $data = [
            'serial_number' => $this->input->post('sn'),
            'issn_isbn' => $this->input->post('isbn'),
            'title' => $this->input->post('title'),
            'author_editor' => $this->input->post('author'),
            'main_category' => $this->input->post('main-category'),
            'sub_category' => $this->input->post('sub-category'),
            'publisher' => $this->input->post('name-of-publisher'),
            'place_of_publication' => $this->input->post('place-of-publication'),
            'year_of_publication' => $this->input->post('year-of-publication'),
            'copyright_date' => $this->input->post('copyright-date'),
            'volume_edition' => $this->input->post('edition'),
            'no_of_pages' => $this->input->post('no-of-pages'),
            'status_of_publication' => $this->input->post('publishing-status'),
            'kp_type' => $this->input->post('kp_type'),
            'kp_category' => $this->input->post('kp_category'),
            'with_cd' => $this->input->post('with-cd'),
            'total_copies' => $this->input->post('total-copies'),
            'available_copies' => $this->input->post('available-copies'),
            'file' => $file
        ];
        // dd($data);
        if ($this->book_model->store($data)) {
            $this->session->set_flashdata('success', 'Book has been added.');
            redirect('books');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->create();
        }
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Book';
        $data['book'] = $this->book_model->get($id);
        $data['publishers'] = $this->publisher_model->all();
        $data['main_categories'] = $this->category_model->main_all();
        $data['sub_categories'] = $this->category_model->sub_all();

        $data['scripts'] = 'admin/partials/choices.php';

        template('book/edit', $data);
    }

    public function update($book_id)
    {
        $config['upload_path'] = 'uploads/books/';
        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG';

        $this->load->library('Upload', $config);
        $this->upload->initialize($config);

        $old_file = $this->book_model->get($book_id)->file;

        // $file = 'book.png';

        if (!empty($_FILES['cover']['name'])) {
            if (!$this->upload->do_upload('cover')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
            } else {
                $book_cover = $this->upload->data();
                $file = $book_cover['file_name'];

                if ($old_file != 'book.png') {
                    unlink('uploads/books/' . $old_file);
                }
            }
        }

        $data = [
            'book_id' => $book_id,
            'serial_number' => $this->input->post('sn'),
            'issn_isbn' => $this->input->post('isbn'),
            'title' => $this->input->post('title'),
            'author_editor' => $this->input->post('author'),
            'main_category' => $this->input->post('main-category'),
            'sub_category' => $this->input->post('sub-category'),
            'publisher' => $this->input->post('name-of-publisher'),
            'place_of_publication' => $this->input->post('place-of-publication'),
            'year_of_publication' => $this->input->post('year-of-publication'),
            'copyright_date' => $this->input->post('copyright-date'),
            'volume_edition' => $this->input->post('edition'),
            'no_of_pages' => $this->input->post('no-of-pages'),
            'status_of_publication' => $this->input->post('publishing-status'),
            'kp_type' => $this->input->post('kp_type'),
            'kp_category' => $this->input->post('kp_category'),
            'with_cd' => $this->input->post('with-cd'),
            'total_copies' => $this->input->post('total-copies'),
            'available_copies' => $this->input->post('available-copies'),
            'file' => $file
        ];

        // dd($data);
        if ($this->book_model->update($data)) {
            $this->session->set_flashdata('success', 'Book has been updated.');
            redirect('books');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->edit($book_id);
        }
    }

    public function delete($book_id)
    {
        if ($this->book_model->delete($book_id)) {
            $this->session->set_flashdata('success', 'Book has been updated.');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
        }
        redirect('books');
    }
}
