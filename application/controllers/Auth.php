<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('user_model');
        $this->load->model('authModel');
        $this->load->helper('url', 'form');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function login()
    {
        $this->load->view('login');
    }
    

    public function login_proses()
    {
        $this->form_validation->set_rules('username', 'Username', 'callback_username_check');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() === false) {

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            $this->load->view('login');

        } else {

            $email = $this->input->post('username');

            $password = $this->input->post('password');
            $data = [
                'email' => $email,
                'password' => md5($password),
            ];
            // Login user
            $result = $this->authModel->login($data);
            // echo $result['role'];

            if ($result['status'] == 200) {
                // Create session
                // $user_data = array(
                //     'username' => $username,
                //     'logged_in' => true,
                // );

                // $this->session->set_userdata($user_data);

                // Set message
                $this->session->set_flashdata('login_status', 'Login successful');
                redirect('home');
            } else {
                // Set message
                $this->session->set_flashdata('login_status', '<div class="alert

       alert-danger text-center">Incorrect username or password</div>');

                redirect('auth/login');
            }
        }
    }
    public function register_proses()
    {
        $this->form_validation->set_rules('username', 'Username', 'callback_username_check');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('birth', 'Date of Birth', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        if ($this->form_validation->run() === false) {

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">', '</div>');
            $this->load->view('login#tab-register');

        } else {

            $email = $this->input->post('username');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $birth = $this->input->post('birth');

            $password = $this->input->post('password');
            $data = [
                'email' => $email,
                'password' => md5($password),
                'phone' => $phone,
                'birth' => $birth,
                'name' => $name,
            ];
            $cek=$this->authModel->cek_mail($data);
            if($cek){
                $result = $this->authModel->register($data);

                if ($result == 1) {
                
                    $this->session->set_flashdata('register_status', '<div class="
    
                    alert alert-success text-center">Register Successfully</div>');
             
                    $this->session->set_flashdata('register_status', '<div class="
    
                    alert alert-success text-center">Register Successfully</div>');
             
                    redirect('auth/login#tab-login');
                } else {
                    // Set message
                    $this->session->set_flashdata('register_status', '<div class="alert
    
           alert-danger text-center">Register Failed</div>');
    
                    redirect('auth/login#tab-register');
                }
            }
            else{
                $this->session->set_flashdata('register_status', '<div class="alert
    
           alert-danger text-center">Email Already Exists</div>');
    
                redirect('auth/login#tab-register');
            }
           
        }
    }
    public function username_check($str)
    {
        if (!filter_var($str, FILTER_VALIDATE_EMAIL)) {
            $this->form_validation->set_message('username_check', 'Invalid email format');
            return false;
        } else {
            return true;
        }
    }
    public function logout() {
        $this->session->sess_destroy();
        redirect("home");
    }

}
