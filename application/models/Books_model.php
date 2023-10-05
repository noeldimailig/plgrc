<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Books_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function recently_added_books()
    {
        $this->db->order_by('book_id', 'DESC');
        $this->db->limit(10);
        return $this->db->get('books')->result();
    }

    function get_custom_db_obj($conditions)
    {
        $this->db->select('*');
        $this->db->from('books');

        if (is_array($conditions)) {
            $this->db->like('title', $conditions['q']);
            $this->db->or_like('author_editor', $conditions['q']);

            if ($conditions['main_category'] != '') {
                $this->db->having('main_category', $conditions['main_category']);
            }

            if ($conditions['sub_category'] != '') {
                $this->db->having('sub_category', $conditions['sub_category']);
            }
            if ($conditions['publisher'] != '') {
                $this->db->having('publisher', $conditions['publisher']);
            }
        } else {
            $this->db->like('title', $conditions);
            $this->db->or_like('author_editor', $conditions);
            $this->db->or_like('main_category', $conditions);
            $this->db->or_like('sub_category', $conditions);
            $this->db->or_like('publisher', $conditions);
        }
        return $this->db; // make sure to return $this->db without calling ->get() on it
    }

    public function all_books($limit, $offset)
    {
        $this->db->limit($limit, $offset);
        return $this->db->get('books')->result();
    }

    public function count_search_results($query)
    {
        $this->db->like('title', $query);
        $this->db->or_like('author_editor', $query);
        $this->db->or_like('main_category', $query);
        $this->db->or_like('sub_category', $query);
        $this->db->or_like('publisher', $query);

        return $this->db->get('books')->num_rows();
    }

    public function search_result_books($query, $limit, $offset)
    {
        $this->db->like('title', $query);
        $this->db->or_like('author_editor', $query);
        $this->db->or_like('main_category', $query);
        $this->db->or_like('sub_category', $query);
        $this->db->or_like('publisher', $query);
        $this->db->limit($limit, $offset);
        return $this->db->get('books')->result();
    }

    public function count_book()
    {
        return $this->db->get('books')->num_rows();
    }

    public function related($id, $main, $sub)
    {
        $this->db->where('book_id !=', $id);
        $this->db->where('main_category', $main);
        $this->db->or_where('sub_category', $sub);
        $this->db->limit(10);
        return $this->db->get('books')->result();
    }

    public function get($book_id)
    {
        return $this->db->get_where('books', ['book_id' => $book_id])->row();
    }

    public function all()
    {
        return $this->db->get('books')->result_array();
    }

    public function store($data)
    {
        return $this->db->insert('books', $data);
    }

    public function update($data)
    {
        $this->db->where('book_id', $data['book_id']);
        return $this->db->update('books', $data);
    }

    public function delete($book_id)
    {
        return $this->db->delete('books', ['book_id' => $book_id]);
    }
}
