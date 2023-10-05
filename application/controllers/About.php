<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "About Us";
        main_template('about/index', $data);
    }

    public function framework()
    {
        $data['title'] = "LGRC - MIMAROPA KM Framework";
        main_template('about/framework', $data);
    }

    public function organizational_structure()
    {
        $data['title'] = "ORGANIZATIONAL STRUCTURE";
        main_template('about/org_governance', $data);
    }

    public function operations_management()
    {
        $data['title'] = "THE OPERATIONS, MANAGEMENT POLICIES AND PROCEDURES";
        main_template('about/operations_management', $data);
    }

    public function guiding_principles()
    {
        $data['title'] = "THE GUIDING PRINCIPLES AND STRATEGIES";
        main_template('about/guiding_principles', $data);
    }

    public function popularizing_lgrc()
    {
        $data['title'] = "POPULARIZING THE LGRC";
        main_template('about/popularizing_lgrc', $data);
    }
}
