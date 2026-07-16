<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Cek login
        if (!$this->session->userdata('id_user')) {
            redirect('login');
        }
    }

    public function index()
    {
        $id_user = $this->session->userdata('id_user');

        // Ambil data user
        $data['user'] = $this->db
            ->where('id_user', $id_user)
            ->get('tb_user')
            ->row();

        // Jika tidak ditemukan
        if (!$data['user']) {
            show_error('Data user tidak ditemukan');
        }

        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_profile', $data);
        $this->load->view('v_footer');
    }

    public function update()
    {
        $id_user    = $this->session->userdata('id_user');
        $password   = $this->input->post('password');
        $konfirmasi = $this->input->post('konfirmasi_password');

        // Sesuai field database
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'username'     => $this->input->post('username')
        ];

        $password_diubah = false;

        if (!empty($password)) {
            if ($password !== $konfirmasi) {
                $this->session->set_flashdata('error', 'Konfirmasi password tidak sesuai');
                redirect('profile');
                return;
            }

            $data['password'] = password_hash($password, PASSWORD_DEFAULT);
            $password_diubah = true;
        }

        // Update database
        $this->db->where('id_user', $id_user);
        $this->db->update('tb_user', $data);

        // Jika password diubah, logout
        if ($password_diubah) {
            $this->session->sess_destroy();
            $this->session->set_flashdata('success', 'Password berhasil diubah, silakan login kembali');
            redirect('login');
            return;
        }

        // Update session
        $this->session->set_userdata('nama_lengkap', $data['nama_lengkap']);
        $this->session->set_userdata('username', $data['username']);

        $this->session->set_flashdata('success', 'Profil berhasil diperbarui');
        redirect('profile');
    }
}