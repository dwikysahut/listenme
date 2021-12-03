<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
		// $this->session->unset_userdata('name');
		// $this->session->sess_destroy();
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
			'dataPopular' => $data['popular'],));
    }
    public function login()
    {
        $post = $this->input->post();
        $this->authModel->login($post);
    }
}
