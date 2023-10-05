<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    #region Main Category
    public function count_main()
    {
        return $this->db->get('main_category')->num_rows();
    }

    public function main_get($main_cat_id)
    {
        return $this->db->get_where('main_category', ['main_cat_id' => $main_cat_id])->row();
    }

    public function main_all()
    {
        return $this->db->get('main_category')->result();
    }

    public function main_store($data)
    {
        return $this->db->insert('main_category', $data);
    }

    public function main_update($data)
    {
        $this->db->where('main_cat_id', $data['main_cat_id']);
        return $this->db->update('main_category', $data);
    }

    public function main_delete($main_cat_id)
    {
        return $this->db->delete('main_category', ['main_cat_id' => $main_cat_id]);
    }
    #endregion

    #region Sub Category
    public function count_sub()
    {
        return $this->db->get('sub_category')->num_rows();
    }

    public function sub_get($sub_cat_id)
    {
        return $this->db->get_where('sub_category', ['sub_cat_id' => $sub_cat_id])->row();
    }

    public function sub_all()
    {
        return $this->db->get('sub_category')->result();
    }

    public function sub_store($data)
    {
        return $this->db->insert('sub_category', $data);
    }

    public function sub_update($data)
    {
        $this->db->where('sub_cat_id', $data['sub_cat_id']);
        return $this->db->update('sub_category', $data);
    }

    public function sub_delete($sub_cat_id)
    {
        return $this->db->delete('sub_category', ['sub_cat_id' => $sub_cat_id]);
    }
    #endregion
}
