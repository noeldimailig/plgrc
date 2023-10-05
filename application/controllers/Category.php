<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_model', 'category_model');

        if (!$this->session->userdata('logged_in')) {
            redirect('auth');
        }
    }

    public function main()
    {
        $data['title'] = 'Collection Main Category';
        $data['main_categories'] = $this->category_model->main_all();
        $data['scripts'] = 'admin/partials/script_main_cat_table.php';

        template('category/main/index', $data);
    }

    public function main_create()
    {
        $data['title'] = 'Add Main Category';

        template('category/main/create', $data);
    }

    public function main_store()
    {
        $data = [
            'main_category' => $this->input->post('main-category')
        ];

        if ($this->category_model->main_store($data)) {
            $this->session->set_flashdata('success', 'Main category has been added.');
            redirect('main-category');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->main_create();
        }
    }

    public function main_edit($id)
    {
        $data['title'] = 'Collection Main Category Edit';

        $data['main_category'] = $this->category_model->main_get($id);

        template('category/main/edit', $data);
    }

    public function main_update($id)
    {
        $data = [
            'main_cat_id' => $id,
            'main_category' => $this->input->post('main-category')
        ];

        if ($this->category_model->main_update($data)) {
            $this->session->set_flashdata('success', 'Main category has been updated.');
            redirect('main-category');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->main_edit($id);
        }
    }

    public function main_delete($id)
    {
        if ($this->category_model->main_delete($id)) {
            $this->session->set_flashdata('success', 'Main category has been deleted.');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
        }
        redirect('main-category');
    }

    public function sub()
    {
        $data['title'] = 'Collection Sub Category';
        $data['sub_categories'] = $this->category_model->sub_all();
        $data['scripts'] = 'admin/partials/script_sub_cat_table.php';

        template('category/sub/index', $data);
    }

    public function sub_create()
    {
        $data['title'] = 'Add Sub Category';

        template('category/sub/create', $data);
    }

    public function sub_store()
    {
        $data = [
            'sub_category' => $this->input->post('sub-category')
        ];

        if ($this->category_model->sub_store($data)) {
            $this->session->set_flashdata('success', 'Sub category has been added.');
            redirect('sub-category');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->sub_create();
        }
    }

    public function sub_edit($id)
    {
        $data['title'] = 'Collection Sub Category Edit';

        $data['sub_category'] = $this->category_model->sub_get($id);

        template('category/sub/edit', $data);
    }

    public function sub_update($id)
    {
        $data = [
            'sub_cat_id' => $id,
            'sub_category' => $this->input->post('sub-category')
        ];

        if ($this->category_model->sub_update($data)) {
            $this->session->set_flashdata('success', 'Sub category has been updated.');
            redirect('sub-category');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
            $this->sub_edit($id);
        }
    }

    public function sub_delete($id)
    {
        if ($this->category_model->sub_delete($id)) {
            $this->session->set_flashdata('success', 'Sub category has been deleted.');
        } else {
            $this->session->set_flashdata('danger', 'Something went wrong. Try again.');
        }
        redirect('sub-category');
    }
}
