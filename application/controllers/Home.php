<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
// Nama class harus sama dengan nama file
// Nama file harus diawali dengan huruf kapital
// cntrl+/ untuk komentar

	public function index()
	{
		$this->load->view('v_home'); // untuk menampilkan halaman v_home.php
	}
	
	public function profile()
	{
		$this->load->view('v_profil'); // untuk menampilkan halaman v_profile.php
	}
}

