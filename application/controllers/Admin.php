<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	public function __construct(){
        parent::__construct();
        $this->load->model('AdminModel');
    }

	public function index(){
		$data['new'] = $this->AdminModel->getDataTransaction();

		$this->load->view('admin', 
		array(
			'dataTrans' => $data['new']
			)
		);
	}

	public function update_user_trans(){
		$id = $this->input->post('id_user');

		$this->AdminModel->update_user_trans($id, 'users');
		redirect('admin/index');
	}
}
