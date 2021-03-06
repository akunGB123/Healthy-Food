<?php
defined('BASEPATH') or exit('No direct script access allowed');
set_time_limit(0);
ignore_user_abort(1);
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user');
		$this->load->config('mainconfig');
	}
	public function index()
	{
		$this->load->helper('form');
		$data['list_config'] = $this->config->config;
		if (!$this->session->userdata('credentials')) :
			if ($this->input->method() == 'post') {
				$email = $this->input->post('email_address');
				$password = $this->input->post('password');
				if ($email && $password) {
					$con['returnType'] = 'single';
					$con['conditions'] = array(
						'email' => $email,
						'password' => md5($password)
					);
					$user = $this->user->getData($con);
					if ($user) {
						$data['sukses_message'] = "Selamat datang, anda berhasil masuk kedalam website.";
						$this->load->view('auth/masuk', $data);
						$this->session->set_userdata('credentials', $user);
					} else {
						$data['error_message'] = "Data Akun tidak ditemukan atau salah.";
						$this->load->view('auth/masuk', $data);
					}
				} else {
					$data['error_message'] = md5($password);
					$this->load->view('auth/masuk', $data);
				}
			} else if ($this->session->userdata('credentials'))
				redirect(base_url());
			else
				$this->load->view('auth/masuk', $data);
		else :
			redirect(base_url());
		endif;
	}
}
