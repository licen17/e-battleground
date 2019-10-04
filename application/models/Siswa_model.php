<?php

/**
 * 
 */
class Siswa_model extends CI_Model
{
	public function get_data()
	{
		$data_siswa = [
			["nama" => "Eriec", "kelas" => "3SIMB"],
			["nama" => "Melvin", "kelas" => "3SIMB"],
			["nama" => "Robin", "kelas" => "3SIMB"]
		];
		return $data_siswa;
	}

}

?>