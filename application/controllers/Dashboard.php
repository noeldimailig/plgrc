<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Publisher_model', 'publisher_model');
        $this->load->model('Books_model', 'books_model');
        $this->load->model('Category_model', 'category_model');
        $this->load->model('Borrower_model', 'borrower_model');
        $this->load->model('Visit_model', 'visit_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['publisher_count'] = $this->publisher_model->count_publisher();
        $data['main_count'] = $this->category_model->count_main();
        $data['sub_count'] = $this->category_model->count_sub();
        $data['book_count'] = $this->books_model->count_book();
        $data['borrower_count'] = $this->borrower_model->count_borrower();
        $data['visits'] = $this->visit_model->count_visits();

        // Get the raw data from the database
        $rawData = $this->visit_model->count_visits_per_month();

        // Create an associative array to map month numbers to month names
        $monthNames = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];

        // Initialize an associative array to store the final data
        $finalData = [];

        // Initialize an array to keep track of which months have data
        $monthsWithData = [];

        // Fill the $monthsWithData array with month numbers from the raw data
        foreach ($rawData as $row) {
            $monthNumber = $row->month;
            $monthsWithData[$monthNumber] = true;
        }

        // Loop through all months (1 to 12) and fill in the final data
        for ($i = 1; $i <= 12; $i++) {
            $monthNumber = $i;
            $monthName = $monthNames[$monthNumber];
            $count = isset($monthsWithData[$monthNumber]) ? $rawData[array_search($monthNumber, array_column($rawData, 'month'))]->count : 0;

            $finalData[] = (object)['month' => $monthName, 'count' => $count];
        }

        $data['siteVisitData'] = $finalData;

        // dd($data['siteVisitData']);

        $data['recent_books'] = $this->books_model->recently_added_books();
        $data['scripts'] = 'admin/partials/chartjs.php';

        template('dashboard', $data);
    }
}
