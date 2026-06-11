<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
	{
        $this->load->view('v_header'); // untuk memanggil model m_header.php
        $this->load->view('v_navbar'); // untuk memanggil model m_navbar.php
        $this->load->view('v_main'); 
        $this->load->view('v_footer'); // untuk memanggil model m_footer.php
	}
}