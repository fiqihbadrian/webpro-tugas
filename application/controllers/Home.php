<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	// Nama class harus sama dengan nama file
	// Nama file harus diawali dengan huruf kapital
	// cntrl+/ untuk komentar

	public function index()
	{
		$this->load->model('m_wisata');
		$this->load->model('M_destinasi');

		// CEK apakah form disubmit
		if ($this->input->post('budget')) {

			$data_insert = [
				'budget' => $this->input->post('budget'),
				'hari'   => $this->input->post('jumlah_hari'),
				'orang'  => $this->input->post('jumlah_orang'),
				'jenis'  => $this->input->post('jenis_wisata'),
			];

			// simpan ke database
			$this->m_wisata->insert($data_insert);

			// redirect ke riwayat
			redirect('home/index#riwayat');
		}

		// ambil data untuk ditampilkan
		$data = [
			'budget' => '',
			'hari' => '',
			'orang' => '',
			'jenis' => '',
			'wisata' => $this->m_wisata->get_all(),
			'latest_wisata' => $this->M_destinasi->get_all()
		];

		$this->load->view('v_home', $data);
	}

	public function detail_destinasi($id)
	{
		$this->load->model('M_destinasi');

		$data['destinasi'] = $this->M_destinasi->get_by_id($id);
		if (!$data['destinasi']) {
			show_404();
		}

		$this->load->view('v_detail_destinasi', $data);
	}

	public function profile()
	{
		$this->load->view('v_profil'); // untuk menampilkan halaman v_profile.php
	}

}
