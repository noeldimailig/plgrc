<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Books_model', 'books_model');
        $this->load->model('Category_model', 'category_model');
        $this->load->model('Publisher_model', 'publisher_model');
        $this->load->model('Visit_model', 'visit_model');
    }

    public function index()
    {
        $data['title'] = 'Home';

        // $this->visit_model->insert_visit();

        main_template('main', $data);
    }

    public function about_us()
    {
        $data['title'] = 'About Us';
        main_template('about', $data);
    }

    public function contact_us()
    {
        $data['title'] = 'Contact Us';
        main_template('contact', $data);
    }

    public function library($page = 1)
    {
        $data['title'] = 'Library';

        $this->load->library('paginator');
        $optional = array(
            'per_page' => 10,
            'query_string' => true,
            'base_url' => 'user/library',
        );

        $data['books'] = $this->paginator->paginate('books', $optional);
        $pagination_links = $this->paginator->get_links('books', 'bootstrap5');
        $data['pagination'] = $pagination_links;

        // $this->load->library('pagination');
        // $config['base_url'] = base_url('user/books');
        // $config['total_rows'] = $this->books_model->count_book();
        // $config['per_page'] = 10;
        // $config['uri_segment'] = 3;

        // $data['books'] = $this->books_model->all_books($config['per_page'], $page);
        // $config['full_tag_open'] = '<ul  class="pagination">';
        // $config['full_tag_close'] = '</ul>';
        // $config['first_link'] = 'First';
        // $config['last_link'] = 'Last';
        // $config['first_tag_open'] =  '<li  class="page-item"><span class="page-link">';
        // $config['first_tag_close'] = '</span></li>';
        // $config['prev_link'] = '&laquo';
        // $config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';

        // $config['prev_tag_close'] = '</span></li>';
        // $config['next_link'] = '&raquo';
        // $config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
        // $config['next_tag_close'] = '</span></li>';
        // $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        // $config['last_tag_close'] = '</span></li>';
        // $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        // $config['cur_tag_close'] = '</a></li>';
        // $config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
        // $config['num_tag_close'] = '</span></li>';
        // $this->pagination->initialize($config);
        // $data['pagination'] = $this->pagination->create_links();

        // $data['scripts'] = 'main/partials/filter.php';

        main_template('books', $data);
    }

    public function book($id)
    {
        $data['book'] = $this->books_model->get($id);
        $data['title'] = $data['book']->title;
        $data['related_books'] = $this->books_model->related($id, $data['book']->main_category, $data['book']->sub_category);

        main_template('book', $data);
    }

    public function search()
    {
        $data['title'] = 'Search Results';
        $this->load->library('paginator');

        // Get the search query
        $query = $this->input->get('q');

        $main_category = '';
        $sub_category = '';
        $publisher = '';

        if (isset($_GET['main-category'])) {
            $main_category = $_GET['main-category'];
            // dd($main_category);
        }

        if (isset($_GET['sub-category'])) {
            $sub_category = $_GET['sub-category'];
            // dd($sub_category);
        }

        if (isset($_GET['publisher'])) {
            $publisher = $_GET['publisher'];
            // dd($publisher);
        }

        $data['page'] = $this->input->get('page');
        $data['search'] = $query;

        // Paginate the search results

        $custom_object = null;
        if ($main_category != '' || $sub_category != '' || $publisher != '') {
            $conditions = [
                'q' => $query,
                'main_category' => $main_category,
                'sub_category' => $sub_category,
                'publisher' => $publisher
            ];

            $custom_object = $this->books_model->get_custom_db_obj($conditions);

            $optional = array(
                'per_page' => 10,
                'query_string' => true,
                'base_url' => 'library/search?q=' . $query . 'main-category=' . $main_category . 'sub-category=' . $sub_category . 'publisher=' . $publisher,
            );
        } else {
            $custom_object = $this->books_model->get_custom_db_obj($query);
            $optional = array(
                'per_page' => 10,
                'query_string' => true,
                'base_url' => 'library/search?q=' . $query,
            );
        }

        $clone = clone $custom_object;
        $data['count'] = $clone->count_all_results();
        $data['results'] = $this->paginator->paginate($custom_object, $optional);

        $data['publishers'] = $this->publisher_model->all();
        $data['main_categories'] = $this->category_model->main_all();
        $data['sub_categories'] = $this->category_model->sub_all();

        // Get pagination links
        $pagination_links = $this->paginator->get_links('books', 'bootstrap5');
        $data['pagination'] = $pagination_links;
        $data['scripts'] = 'main/partials/filter.php';

        main_template('search_results', $data);
    }
}
