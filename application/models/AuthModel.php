<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

   
    public function login($post)
    {
        $this->db->where('email', $post['email']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get('users');
        if($query->num_rows()>0){
            
            $array = array(
                'email' => $post['email']
            );
            $this->session->set_userdata( $array );
            return 1;
            // redirect('home');
        }else{
           $this->session->set_flashdata('errorlogin', '<p class="login-box-msg text-danger">username atau password salah</p>');  
           return 0;
            // redirect('login');
        }
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
    
   
}
