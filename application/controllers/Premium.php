<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Premium extends CI_Controller
{

	public function index()
	{
		$this->load->view('premium');
	}
}
