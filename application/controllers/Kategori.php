<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('M_kategori');
    }
    public function index()
    {
        $data['kategori'] = $this->M_kategori->get_all();
        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_kategori', $data);
        $this->load->view('v_footer');
    }
    public function tambah_kategori()
    {
        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_tambah_kategori');
        $this->load->view('v_footer');
    }
    public function edit_kategori($id)
    {
        $data['kategori'] = $this->M_kategori->get_by_id($id);
        if (!$data['kategori']) {
            show_404();
        }
        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_edit_kategori', $data);
        $this->load->view('v_footer');
    }
    public function update_kategori($id)
    {
        $kategori = $this->M_kategori->get_by_id($id);
        if (!$kategori) {
            show_404();
        }
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori')
        ];
        $this->M_kategori->update($id, $data);
        redirect('kategori');
    }
    public function simpan_kategori()
    {
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori')
        ];
        $this->M_kategori->insert($data);
        redirect('kategori');
    }
    public function hapus_kategori($id)
    {
        $kategori = $this->M_kategori->get_by_id($id);
        if (!$kategori) {
            show_404();
        }
        $this->M_kategori->delete($id);
        redirect('kategori');
    }
}
