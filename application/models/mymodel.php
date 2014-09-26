<?php
class Mymodel extends CI_Model {

<<<<<<< HEAD
	public function GetCategori($where="") {
		$data = $this->db->query('select * from kategori '.$where);
		return $data;
	}

	public function GetContent($where="") {
		$data = $this->db->query('select * from konten '.$where);
		return $data;
	}

=======
	public function GetMahasiswa() {
		$data = $this->db->query('select * from mahasiswa');
		return $data->result_array();
	}

	public function insert_data($tabelName,$data) {
		$res = $this->db->insert($tabelName,$data);
		return ($res);
		}
>>>>>>> a64f4d8807bb5db527ee50f6bfa61080c090c595
}