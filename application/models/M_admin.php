<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
    public function count_users()
    {
        return $this->db->count_all('tb_user');
    }

    public function count_wisata()
    {
        return $this->db->count_all('tb_destinasi');
    }

    public function latest_users($limit = 5)
    {
        return $this->db->order_by('id_user', 'DESC')->get('tb_user', $limit)->result();
    }

    public function latest_wisata($limit = 6)
    {
        $this->db->select('tb_destinasi.*, tb_kategori.nama_kategori');
        $this->db->from('tb_destinasi');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_destinasi.id_kategori', 'left');
        $this->db->order_by('id_destinasi', 'DESC');
        $this->db->limit($limit);
        return $this->db->get()->result();
    }
}
