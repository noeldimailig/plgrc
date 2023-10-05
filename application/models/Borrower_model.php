<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Borrower_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function count_borrower()
    {
        return $this->db->get('borrowers')->num_rows();
    }

    public function all()
    {
        return $this->db->get('borrowers')->result();
    }

    public function get($id)
    {
        return $this->db->get_where('borrowers', ['borrower_id' => $id])->row();
    }

    public function store($data)
    {
        return $this->db->insert('borrowers', $data);
    }

    public function update($data)
    {
        $this->db->where('borrower_id', $data['borrower_id']);
        return $this->db->update('borrowers', $data);
    }

    public function delete($id)
    {
        $this->db->where('borrower_id', $id);
        return $this->db->delete('borrowers');
    }
}
