<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin', 'm_admin');
    }

    public function index()
    {
        $data = [
            'total_users' => $this->m_admin->count_users(),
            'total_wisata' => $this->m_admin->count_wisata(),
            'latest_wisata' => $this->m_admin->latest_wisata(),
        ];

        $this->load->view('v_header');
        $this->load->view('v_navbar');
        $this->load->view('v_main', $data);
        $this->load->view('v_footer');
    }
}