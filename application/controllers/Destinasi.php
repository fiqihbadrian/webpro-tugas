<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Destinasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_destinasi');
        $this->load->model('M_destinasi');
    }
    public function index()
    {
        $data['destinasi'] = $this->M_destinasi->get_all();
        $data['latest_wisata'] = array_slice($data['destinasi'], 0, 5); // 5 latest
        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_destinasi', $data);
        $this->load->view('v_footer');
    }
    public function tambah()
    {
        // Load kategori untuk dropdown
        $this->load->model('M_kategori');
        $data['kategori'] = $this->M_kategori->get_all();
        
        // Load latest wisata untuk dashboard
        $data['destinasi'] = $this->M_destinasi->get_all();
        $data['latest_wisata'] = array_slice($data['destinasi'], 0, 5);
        
        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_tambah_destinasi', $data);
        $this->load->view('v_footer');
    }
    public function simpan()
    {
        $config['upload_path'] = './public/assets/upload/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('foto')) {
            echo $this->upload->display_errors();
            return;
        }
        $upload = $this->upload->data();
        $data = [
            'nama_destinasi' => $this->input->post('nama_destinasi'),
            'alamat' => $this->input->post('alamat'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_tiket' => $this->input->post('harga_tiket'),
            'jam_operasional' => $this->input->post('jam_operasional'),
            'foto' => $upload['file_name'],
            'link_maps' => $this->input->post('link_maps'),
            'id_kategori' => $this->input->post('id_kategori')
        ];
        $this->M_destinasi->insert($data);
        $this->session->set_flashdata(
            'success',
            'Destinasi berhasil ditambahkan'
        );
        redirect('destinasi');
    }
    public function detail($id)
    {
        $data['destinasi'] = $this->M_destinasi->get_by_id($id);
        if (!$data['destinasi']) {
            show_404();
        }
        
        // Load latest wisata untuk dashboard
        $all_destinasi = $this->M_destinasi->get_all();
        $data['latest_wisata'] = array_slice($all_destinasi, 0, 5);
        
        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_detail_destinasi', $data);
        $this->load->view('v_footer');
    }
    public function edit($id)
    {
        $data['destinasi'] = $this->M_destinasi->get_by_id($id);
        if (!$data['destinasi']) {
            show_404();
        }
        
        // Load kategori untuk dropdown
        $this->load->model('M_kategori');
        $data['kategori'] = $this->M_kategori->get_all();
        
        // Load latest wisata untuk dashboard
        $all_destinasi = $this->M_destinasi->get_all();
        $data['latest_wisata'] = array_slice($all_destinasi, 0, 5);
        
        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_edit_destinasi', $data);
        $this->load->view('v_footer');
    }
    public function update($id)
    {
        $destinasi = $this->M_destinasi->get_by_id($id);
        if (!$destinasi) {
            show_404();
        }
        $data = [
            'nama_destinasi' => $this->input->post('nama_destinasi'),
            'alamat' => $this->input->post('alamat'),
            'deskripsi' => $this->input->post('deskripsi'),
            'harga_tiket' => $this->input->post('harga_tiket'),
            'jam_operasional' => $this->input->post('jam_operasional'),
            'link_maps' => $this->input->post('link_maps'),
            'id_kategori' => $this->input->post('id_kategori')
        ];
        if (!empty($_FILES['foto']['name'])) {
            $config['upload_path'] = './public/assets/upload/';
            $config['allowed_types'] = 'jpg|jpeg|png|webp';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('foto')) {
                $upload = $this->upload->data();
                if (
                    !empty($destinasi->foto) &&
                    file_exists('./public/assets/upload/' . $destinasi->foto)
                ) {
                    unlink('./public/assets/upload/' . $destinasi->foto);
                }
                $data['foto'] = $upload['file_name'];
            }
        }
        $this->M_destinasi->update($id, $data);
        $this->session->set_flashdata(
            'success',
            'Destinasi berhasil diperbarui'
        );
        redirect('destinasi');
    }
    public function hapus($id)
    {
        $destinasi = $this->M_destinasi->get_by_id($id);
        if (!$destinasi) {
            show_404();
        }
        if (
            !empty($destinasi->foto) &&
            file_exists('./public/assets/upload/' . $destinasi->foto)
        ) {
            unlink('./public/assets/upload/' . $destinasi->foto);
        }
        $this->M_destinasi->delete($id);
        $this->session->set_flashdata(
            'success',
            'Destinasi berhasil dihapus'
        );
        redirect('destinasi');
    }
}
