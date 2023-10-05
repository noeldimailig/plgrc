<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NewsEvents_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function count_news()
    {
        return $this->db->get('news')->num_rows();
    }
    
    public function get_where($cond)
    {
        return $this->db->get_where('news', ['status' => $cond])->result();
    }

    public function get($news_id)
    {
        return $this->db->get_where('news', ['news_id' => $news_id])->row();
    }

    public function all()
    {
        return $this->db->get('news')->result();
    }

    public function store($data)
    {
        return $this->db->insert('news', $data);
    }

    public function update($data)
    {
        $this->db->where('news_id', $data['news_id']);
        return $this->db->update('news', $data);
    }

    public function delete($news_id)
    {
        return $this->db->delete('news', ['news_id' => $news_id]);
    }
}