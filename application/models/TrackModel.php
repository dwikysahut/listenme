<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TrackModel extends CI_Model
{

    public function getDataLimit($limit)
    {
        $result = $this->db->get('tracks',$limit);
        return $result->result_array();
    }

    public function getDataOrderByNew()
    {   
        $this->db->select('*');
        $this->db->from('tracks');
        $this->db->order_by('id','DESC');
        $this->db->limit(6);
        $result = $this->db->get();
        return $result->result_array();
    }
    public function getDataPopular()
    {   
        $this->db->select('*');
        $this->db->from('tracks');
        $this->db->where('rating > 7');
        $this->db->order_by('id','DESC');
        $this->db->limit(9);
        $result = $this->db->get();
        return $result->result_array();
    }
    
    // public function get_kategori()
    // {
    //     $query = $this->db->get('service');
    //     return $query->result();
    // }

   

    // public function add_service($data)
    // {
    //     $this->db->insert('service_order', $data);
    // }

    // public function login($username, $password)
    // {
    //     $this->db->where('email_member', $username);
    //     $this->db->where('password_member', $password);
    //     $query = $this->db->get('member');
    //     if ($query->num_rows() > 0) {
    //         return $query->row();
    //     } else {
    //         return false;
    //     }
    // }
   
}
