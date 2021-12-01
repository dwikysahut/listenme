<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('homeModel');
    }
	public function index()
	{
		$data['limit']=$this->homeModel->getDataLimit();
		$data['new']=$this->homeModel->getDataOrderByNew();
		$this->load->view('home',array('data'=>$data['limit'],'dataNew'=>$data['new']));
	}
}
