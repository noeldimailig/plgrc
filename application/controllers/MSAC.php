<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MSAC extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'MSAC';
        main_template('msac/index', $data);
    }
}
