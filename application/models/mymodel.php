<?php
class Mymodel extends CI_Model {

	public function GetMahasiswa() {
		$data = $this->db->query('select * from mahasiswa');
		return $data->result_array();
	}

	public function insert_data($tabelName,$data) {
		$res = $this->db->insert($tabelName,$data);
		return ($res);
		}
}