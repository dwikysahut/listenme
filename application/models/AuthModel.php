<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthModel extends CI_Model
{

    public function login($post)
    {
        $this->db->where('email', $post['email']);
        $this->db->where('password', $post['password']);
        $query = $this->db->get('users');
        $data=$query->row();
        if ($query->num_rows() > 0) {

            $array = array(
                'email' => $post['email'],
                'role' => $data->role,
                'id_status' => $data->id_status,
                'logged_in' => true,
            );
            $this->session->set_userdata($array);
            return[
                'role' => $data->role,
                'email' => $data->email,
                'id_status' => $data->id_status,
                'status' => 200,
            ];
            // redirect('home');
        } else {
            $this->session->set_flashdata('errorlogin', '<p class="login-box-msg text-danger">username atau password salah</p>');
            return    [
                'message'=>"Login failed",
                'status' => 401,
            ];
            // redirect('login');
        }
    }
    public function cek_mail($data)
    {
        $query = $this->db->get_where('users', array('email' => $data['email']));
        if ($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }

    }
    public function register($post)
    {
        $query=$this->db->insert('users', $post);
        
       return 1;
    }

}
