<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	// Nama class harus sama dengan nama file
	// Nama file harus diawali dengan huruf kapital
	// cntrl+/ untuk komentar

	public function index()
	{

		$this->load->model('m_wisata'); // untuk memanggil model m_wisata.php
		$this->load->model('M_destinasi');


		$data = [
			'budget' => $this->input->post('budget'),
			'hari' => $this->input->post('jumlah_hari'),
			'orang' => $this->input->post('jumlah_orang'),
			'jenis' => $this->input->post('jenis_wisata'),
			'wisata' => $this->m_wisata->get_all(),
			'latest_wisata' => $this->M_destinasi->get_all()
		];
		$this->load->view('v_home', $data); // untuk menampilkan halaman v_home.php
	}

	public function detail_portofolio($id)
	{
		$this->load->model('M_destinasi');

		$data['destinasi'] = $this->M_destinasi->get_by_id($id);
		if (!$data['destinasi']) {
			show_404();
		}

		$this->load->view('v_detail_portofolio', $data);
	}

	public function profile()
	{
		$this->load->view('v_profil'); // untuk menampilkan halaman v_profile.php
	}

	
}
