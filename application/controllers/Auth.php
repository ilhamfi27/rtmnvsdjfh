<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('user');
		$this->load->helper(array('url'));
		$this->load->library('form_validation');
	}
	
	public function index(){
		$this->load->view('user_auth/login');
	}

	public function registrasi(){
		$this->load->view('user_auth/registrasi');
	}

	public function user_add() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$confirm_password = $this->input->post('confirm_password');
		$validation = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|min_length[5]'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[6]',
				'errors' => array(
					'min_length' => "Minimal Password 6 Karakter!",
				)
			),
			array(
				'field' => 'confirm_password',
				'label' => 'Confirm Password',
				'rules' => 'required|matches[password]'
			),
		);
		$this->form_validation->set_rules($validation);
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user_auth/registrasi');
		} else {
			// $this->load->view('user_auth/index');
			echo "yeay";
		}

		$data = array(
			'username' => $username,
			'password' => $password
		);
	}

	public function login()	{
		# code...
	}
}
