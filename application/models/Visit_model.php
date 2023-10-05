<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Visit_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // public function insert_visit()
    // {
    //     $visitor_ip = $_SERVER['REMOTE_ADDR'];
    //     $count = $this->db->where('device_info', $visitor_ip)->count_all_results('visits');

    //     if ($count == 0) {
    //         $data = array(
    //             'device_info' => $visitor_ip
    //         );

    //         $this->db->insert('visits', $data);
    //     }
    // }

    public function insert_visit()
    {
        $visitor_ip = $_SERVER['REMOTE_ADDR'];

        // Get the current date and time in the database format
        $currentDateTime = date('Y-m-d H:i:s');

        $device = $this->db->get('visits', ['device_info' => $visitor_ip])->row();

        if ($device) {
            if ($device->created_at != $currentDateTime) {
                $data = array(
                    'device_info' => $visitor_ip,
                );

                $this->db->insert('visits', $data);
            }
        } else {
            $data = array(
                'device_info' => $visitor_ip,
            );

            $this->db->insert('visits', $data);
        }
    }


    public function count_visits()
    {
        return $this->db->get('visits')->num_rows();
    }

    // number of visit per month in order from january to december
    public function count_visits_per_month()
    {
        $this->db->select('MONTH(created_at) as month, COUNT(*) as count');
        $this->db->from('visits');
        $this->db->group_by('MONTH(created_at)');
        $this->db->order_by('MONTH(created_at)', 'ASC');
        return $this->db->get()->result();
    }
}
