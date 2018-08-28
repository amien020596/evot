<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");

		$this->session->all_userdata();
	  	$this->session->sess_destroy();
	}

	public function index()
	{
		// $this->load->view($page.'/login');
	}

	public function user() {
		$this->load->view('user/login');
	}

	public function admin() {
		$this->load->view('admin/login');
	}

	public function logout(){
		$this->session->all_userdata();
		$this->session->sess_destroy();
		redirect('login');
	}

	public function admlogout(){
		$this->session->all_userdata();
		$this->session->sess_destroy();
		redirect('dashboard/login');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */