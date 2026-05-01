<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	// Nama class harus sama dengan nama file
	// Nama file harus diawali dengan huruf kapital
	// cntrl+/ untuk komentar

	public function index()
	{
		$data = [
			'budget' => $this->input->post('budget'),
			'hari' => $this->input->post('jumlah_hari'),
			'orang' => $this->input->post('jumlah_orang'),
			'jenis' => $this->input->post('jenis_wisata')
		];
		$this->load->view('v_home', $data); // untuk menampilkan halaman v_home.php
	}

	public function profile()
	{
		$this->load->view('v_profil'); // untuk menampilkan halaman v_profile.php
	}
}
