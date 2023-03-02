<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('auth/templates/header');
		$this->load->view('auth/login');
		$this->load->view('auth/templates/footer');
	}

	public function registration()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('username', 'username', 'required|trim|is_unique[user.username]');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]');
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if ($this->form_validation->run() == false) {
			$data['title'] = 'Registrasi';
			$this->load->view('auth/templates/header', $data);
			$this->load->view('auth/registration');
			$this->load->view('auth/templates/footer');
		} else {
			$data = [
				'name' => $this->input->post('name'),
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => time()
			];
			$this->db->insert('user', $data);
			redirect('auth');
		}
	}
}
