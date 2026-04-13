<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
// Nama class harus sama dengan nama file
// Nama file harus diawali dengan huruf kapital
// cntrl+/ untuk komentar

	public function index()
	{
		$this->load->view('v_profile'); // untuk menampilkan halaman v_profile.php
	}
}

