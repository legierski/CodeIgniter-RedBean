<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

    private $data = array();

    public function __construct() {
        parent::__construct();
    }

    public function login() {
        if(logged_in()) {
            redirect('dashboard');
        }
        else {
            return $this->load->view('login', $this->data);
        }
        
    }

    public function authenticate() {
        rb();

        $login = $this->input->post('login');
        $password = $this->input->post('password');

        $u = R::findOne('myapp_user',' login = ? AND password = ?', array($login, md5($password.'this is my random salt')));

        if($u != null) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('user_id', $u->id);
            redirect('dashboard');
        }
        else {
            redirect('login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        redirect();
    }
}