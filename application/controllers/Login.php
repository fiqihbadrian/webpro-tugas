<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load model
        $this->load->model('M_login');
    }
    public function index()
    {
        $this->load->view('v_header');
        $this->load->view('v_login');
    }
    // halaman register
    public function register()
    {
        $this->load->view('v_header');
        $this->load->view('v_register');
    }
    // proses simpan register
    public function simpan_register()
    {
        $nama_lengkap = $this->input->post('nama_lengkap');
        $username = $this->input->post('username');
        $password = password_hash(
            $this->input->post('password'),
            PASSWORD_DEFAULT
        );
        $data = [
            'nama_lengkap' => $nama_lengkap,

            'username' => $username,
            'password' => $password
        ];
        $this->M_login->insert_user($data);
        $this->session->set_flashdata(
            'success',
            'Registrasi berhasil!'
        );
        redirect('login');
    }
    // proses login
    public function cek_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $cek = $this->M_login->cek_login($username);
        if ($cek) {
            // verifikasi password
            if (password_verify($password, $cek->password)) {
                $data_session = [
                    'id_user' => $cek->id_user,
                    'nama_lengkap' => $cek->nama_lengkap,
                    'login' => TRUE
                ];
                $this->session->set_userdata($data_session);
                // $this->session->set_flashdata('success', 'Login berhasil!');
                redirect('dashboard');
            } else {
                $this->session->set_flashdata(
                    'error',
                    'Password salah!'
                );
                redirect('login');
            }
        } else {
            $this->session->set_flashdata(
                'error',
                'Username tidak ditemukan!'
            );
            redirect('login');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
