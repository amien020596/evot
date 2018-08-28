<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function voting($nim, $bem, $senat = null, $angkatan) {
		$up = array('status' => 'sudah');
		$where = array('idpemilih' => $nim);
		$query = $this->db->update('pemilih', $up, $where); 

		if ($query) {
			$data = array(
				'BEM' 	=> $bem,
				'SENAT' => $senat,
				'pemilih_idpemilih' => $nim,
				'angkatan' => $angkatan
			);

			$this->db->insert('hasil_vote', $data);
		}
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */ 