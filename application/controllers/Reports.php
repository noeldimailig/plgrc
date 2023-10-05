<?php
defined('BASEPATH') or exit('No direct script access allowed');

use \Mpdf\Mpdf;

class Reports extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Books_model', 'books_model');
        $this->load->model('Publisher_model', 'publisher_model');
        $this->load->model('Category_model', 'category_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Books List';

        $this->load->library('paginator');
        $optional = array(
            'per_page' => 15,
            'query_string' => true,
            'base_url' => 'books',
        );

        $data['books'] = $this->paginator->paginate('books', $optional);
        $pagination_links = $this->paginator->get_links('books', 'bootstrap5');
        $data['pagination'] = $pagination_links;
        template('reports/index', $data);
    }

    public function export_pdf_book()
    {
        $data['title'] = 'Books List';
        $data['books'] = $this->books_model->all();

         $html = $this->load->view('admin/export_book_pdf', $data);

        // Set the headers to tell the browser to download the file.
        // header('Content-Type: application/pdf');
        // header('Content-Disposition: attachment;');

        $mpdf = new mPDF();
        $mpdf->WriteHTML($html);
        echo $mpdf->Output();
    }
}
