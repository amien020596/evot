<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function monitoring(){
		$this->load->model('Admin_model');

		$data['bem_total'] = $this->Admin_model->stotal_bem();
		$data['bem_sudah'] = $this->Admin_model->sudah_bem();
		$data['bem_belum'] = $this->Admin_model->belum_bem();
		$data['senat_total'] = $this->Admin_model->stotal_senat();
		$data['senat_sudah'] = $this->Admin_model->sudah_senat();
		$data['senat_belum'] = $this->Admin_model->belum_senat();
		$data['total15'] = $this->Admin_model->total_senat_angkatan("2015");
		$data['sudah15'] = $this->Admin_model->sudah_senat_angkatan("2015");
		$data['total16'] = $this->Admin_model->total_senat_angkatan("2016");
		$data['sudah16'] = $this->Admin_model->sudah_senat_angkatan("2016");
		$data['total17'] = $this->Admin_model->total_senat_angkatan("2017");
		$data['sudah17'] = $this->Admin_model->sudah_senat_angkatan("2017");

		$this->load->view('user/monitoring', $data);
	}
}
