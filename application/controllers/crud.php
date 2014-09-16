<?php
class Crud extends CI_Controller {

	public function index() {
		$data = $this->mymodel->GetMahasiswa();
		$this->load->view('tabel', array('data'=>$data));
	}

	public function add_data() {
		$this->load->view('form_add');
	}

	public function do_insert() {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$data_insert = array(
			'nim'=>$nim,
			'nama'=>$nama,
			'alamat'=>$alamat
		);
		$res = $this->mymodel->insert_data('mahasiswa',$data_insert);
		if($res>=1) {
			redirect('crud/index');
		}

	}
		
}