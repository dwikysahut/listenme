<?php
class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('authModel');
      }

    // Fungsi untuk memanggil view register (Form Register)
    public function register() {
        $this->load->view('view_register');
    }

    // fungsi pengecekan register
    public function cekregister() {

        // Atur validasi
        $this->form_validation->set_rules('user', 'Username', 'required');
        $this->form_validation->set_rules('pass', 'Password', 'required');

        // Atur tag css untuk hasil validasi
        $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');

        
        if ($this->form_validation->run() == FALSE)
        {
        $this->load->view('view_register');
        }
        else
        {
            $user= $this->input->post('user');
            $pass = md5($this->input->post('pass'));
            $level= $this->input->post('level');
            $this->user_model->prosesregister($user,$pass, $level);
            redirect('user/login');
        }
    }
}
