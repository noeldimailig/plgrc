<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Publisher_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function count_publisher()
    {
        return $this->db->get('publishers')->num_rows();
    }

    public function get($publisher_id)
    {
        return $this->db->get_where('publishers', ['publisher_id' => $publisher_id])->row();
    }

    public function all()
    {
        return $this->db->get('publishers')->result();
    }

    public function store($data)
    {
        return $this->db->insert('publishers', $data);
    }

    public function update($data)
    {
        $this->db->where('publisher_id', $data['publisher_id']);
        return $this->db->update('publishers', $data);
    }

    public function delete($publisher_id)
    {
        return $this->db->delete('publishers', ['publisher_id' => $publisher_id]);
    }
}
