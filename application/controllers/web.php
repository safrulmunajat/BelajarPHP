<?php
class Web extends CI_Controller {

	public function index() {
		$data = array(
			"contents"=>$this->mymodel->GetContent()->result_array(),
		);
		$comp = array(
			"content"=>$this->load->view("content",$data,true),
			"sidebar"=>$this->sidebar(),
			"footer"=>$this->footer(),
		);

		$this->load->view('index',$comp);	
	}

	public function categori($id) {
		$cek =$this->mymodel->GetCategori("where kode_kategori='$id'");
		if($cek->num_rows() > 0) {
		$data = array(
				"contents"=>$this->mymodel->GetContent("where kode_kategori='$id'")->result_array(),
			);
			$comp = array(
				"content"=>$this->load->view("content",$data,true),
				"sidebar"=>$this->sidebar(),
				"footer"=>$this->footer(),
			);

			$this->load->view('index',$comp);
		}else {
			show_404();
		}
	}

	public function sidebar() {
		$data = array(
			"categoris"=>$this->mymodel->GetCategori()->result_array(),
		);

		return $this->load->view("sidebar",$data,true);
	}

	public function footer() {
		return $this->load->view("footer",array(),true);
	}

	public function dsfdsfdsf() {
		
	}
}