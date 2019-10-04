<?php
defined("BASEPATH") OR exit ("No direct sciprt access allowed");

/**
 * 
 */
class Siswa extends CI_Controller
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("Siswa_model");
	}

	public function index()
	{
		$data["siswa"] = $this->Siswa_model->get_data();
		$this->load->view("tampil_siswa", $data);
	}

	public function profil()
	{
		echo "ini method profil dalam controller Siswa";
	}
}