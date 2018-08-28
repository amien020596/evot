<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
	function greeting_msg (){
		date_default_timezone_set("Asia/Jakarta");

		$hour = date("G",time());

		if ($hour>=0 && $hour<=11)
		{
			return "Selamat Pagi";
		}
		elseif ($hour >=12 && $hour<=14)
		{
			return "Selamat Siang";
		}
		elseif ($hour >=15 && $hour<=17)
		{
			return "Selamat Sore";
		}
		elseif ($hour >=17 && $hour<=18)
		{
			return "Selamat Petang";
		}
		elseif ($hour >=19 && $hour<=23)
		{
			return "Selamat Malam";
		}
	}

	public function __construct()
    {
        parent::__construct();
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");

        $this->load->model('Auth');
        $this->load->model('Admin_model');

        if ( ($this->session->userdata('nim') || $this->session->userdata('token')) == NULL) {
        	$array = array(
	        	'nim' 	=> $this->input->post('nim'),
	        	'token' => $this->input->post('token') 
	        );
	        
	        $this->session->set_userdata( $array );
        }

        $nim 	= $this->session->userdata('nim');
	    $token	= $this->session->userdata('token');

	    // die($nim);
        $this->Auth->voterAuth($nim, $token);

        if($this->Auth->isVoter() == FALSE){
        	redirect('login');
        }
    }


	public function index()
	{
		$this->load->view('user/layout');
	}


	public function bem() 
	{
        if (($this->session->userdata('bem') || $this->session->userdata('senat')) !== NULL) {
			$voted = array(
				'bem' 	=> $this->session->userdata('bem'),
				'senat' => $this->session->userdata('senat')
			);
			$this->session->unset_userdata($voted);
		}
		
		$data['xkandidat_bem'] = $this->Admin_model->get_jml_kandidat_bem();

		$data['waktu'] 	= $this->greeting_msg();
		$data['view']	= 'vote-bem';
		$data['title']	= 'Vote BEM';
		$this->load->view('user/layout', $data);
	}

	public function senat() 
	{
		$array = array(
			'bem' 	=> $this->input->post('paslonbem')
		);
		
		$this->session->set_userdata( $array );

		$angkatan = $this->session->userdata('angkatan');
		$data['xkandidat_senat'] = $this->Admin_model->get_jml_kandidat_senat($angkatan);

		$data['waktu'] = $this->greeting_msg();
		$data['view']	= 'vote-senat';
		$data['title']	= 'Vote Senator';
		$this->load->view('user/layout', $data);
	}

	public function review() {
		$array = array(
			'bem' 	=> $this->input->post('paslonbem'),
			'senat' => $this->input->post('senator')
		);
		
		$this->session->set_userdata( $array );

		$data['waktu'] = $this->greeting_msg();
		$data['view']	= 'vote-review';
		$data['title']	= 'Vote Review';
		$this->load->view('user/layout',$data);
	}

	public function thanks() {

		$nim		= $this->session->userdata('nim');
		$bem 		= $this->session->userdata('bem');
		$senat 		= $this->session->userdata('senat');
		$angkatan 	= $this->session->userdata('angkatan');

		$this->load->model('User_model');
		$this->User_model->voting($nim, $bem, $senat, $angkatan);

		$data['waktu'] = $this->greeting_msg();
		$data['view']	= 'thanks-msg';
		$data['title']	= 'Thank You';
		$this->load->view('user/layout', $data);
	}

}
