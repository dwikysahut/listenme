<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

		// $this->session->unset_userdata('name');
		// $this->session->sess_destroy();
        $this->load->model('trackModel');
        $this->load->model('authModel');
    }
    public function index()
    {
        $data['limit'] = $this->trackModel->getDataLimit(6);
        $data['top'] = $this->trackModel->getDataLimit(1);
        $data['new'] = $this->trackModel->getDataOrderByNew();
		$data['popular'] = $this->trackModel->getDataPopular();

        $this->load->view('home', array('dataHot' => $data['limit'],
            'dataNew' => $data['new'],
			'dataTop' => $data['top'],
			'dataPopular' => $data['popular']));
    }

    function loginModal() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    
        if ($username == ''){
            $result['pesan'] = "Username harus diisi";
        }elseif ($password == ''){
            $result['pesan'] = "Password harus diisi";
        }else {
    
    
            $data=array(
                'email' =>$username,
                'password' =>$password
            );
            
            $result['success']=$this->authModel->login($data);
            if( $result['success']==1){
                $result['pesan']="";

            }
            else{
                $result['pesan']="Username atau password salah";

            }
            
            
        }
        
        echo json_encode($result);
    }

}
