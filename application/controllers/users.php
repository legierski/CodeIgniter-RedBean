<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	private $data = array();

	public function signup() {
		return $this->load->view('signup', $this->data);
	}

	public function signup_submit() {
		rb();

		$login = $this->input->post('login');
		$password = $this->input->post('password');

		$user = R::dispense('myapp_user');
		$user->login = $login;
		$user->password = md5($password.'this is my random salt');
		R::store($user);

		redirect('login');
	}

	public function dashboard() {
		if(!logged_in()) {
			redirect('login');
		}

		return $this->load->view('dashboard', $this->data);
	}
}