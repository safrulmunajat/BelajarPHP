<?php
class Mymodel extends CI_Model {

	public function GetCategori($where="") {
		$data = $this->db->query('select * from kategori '.$where);
		return $data;
	}

	public function GetContent($where="") {
		$data = $this->db->query('select * from konten '.$where);
		return $data;
	}

}