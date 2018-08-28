<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

	public function isVoter (){
		$retVal = ($this->session->userdata('voterlogin') !== null) ? true : false;
		return $retVal;
	}

	public function isAdmin(){
		$retVal = ($this->session->userdata('adminlogin') !== null) ? true : false;
		return $retVal;
	}

	public function voterAuth($nim, $token){
		$query = $this->db->get_where('pemilih', array('idpemilih' => $nim));

		if (strlen($nim) < 14){
	  		$this->session->set_flashdata('err_user', '<div class="alert alert-danger alert-login" role="alert">Akun yang Anda masukkan salah</div>');
	  		redirect('login');
	  	} elseif ($query->num_rows() == 0){
	  		$this->session->set_flashdata('err_user', '<div class="alert alert-danger alert-login" role="alert">Akun yang Anda masukkan tidak terdaftar.</div>');
	  		redirect('login');
	  	} else {
	  		$user = $query->row();
	  		if ($token != $user->password_pemilih){
		  		$this->session->set_flashdata('err_user', '<div class="alert alert-danger alert-login" role="alert">Nama Pengguna atau Kata Sandi tidak sesuai.</div>');
		  		redirect('login');
		  	} elseif ($user->status == 'sudah') {
		  		$this->session->set_flashdata('err_user', '<div class="alert alert-danger alert-login" role="alert">Maaf, Anda hanya diijinkan memilih sebanyak 1 kali</div>');
		  		redirect('login');
		  	}else {
		  		$array = array(
		  			'voterlogin' 	=> TRUE,
		  			'nama'			=> $user->nama_pemilih,
		  			'nim'			=> $nim,
		  			'angkatan'		=> $user->angkatan 
		  		);

				$this->session->set_userdata($array);
		  	}
	  	}
	}

	public function adminAuth($uname, $pass){
		$query = $this->db->get_where('admin', array('username_admin' => $uname));

		if ($query->num_rows() < 1){
	  		$this->session->set_flashdata('err_admin', '<div class="alert alert-danger alert-login" role="alert">Akun yang Anda masukkan tidak terdaftar.</div>');
	  		redirect('dashboard/login');
	  	} else {
	  		$admin = $query->row();

	  		if (md5(md5($pass)) != $admin->password_admin){
		  		$this->session->set_flashdata('err_admin', '<div class="alert alert-danger alert-login" role="alert">Nama Pengguna atau Kata Sandi tidak sesuai.</div>');
		  		redirect('dashboard/login');
		  	} else {
		  		$array = array(
		  			'adminlogin' 	=> TRUE
		  		);

				$this->session->set_userdata($array);
		  	}
	  	}
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */