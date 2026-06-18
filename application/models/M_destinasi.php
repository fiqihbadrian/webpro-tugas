<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_destinasi extends CI_Model
{
    private $table = 'tb_destinasi';
    public function get_all()
    {
        $this->db->select('tb_destinasi.*, tb_kategori.nama_kategori');
        $this->db->from('tb_destinasi');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_destinasi.id_kategori', 'left');
        $this->db->order_by('id_destinasi', 'DESC');
        return $this->db->get()->result();
    }
    public function get_by_id($id)
    {
        $this->db->select('tb_destinasi.*, tb_kategori.nama_kategori');
        $this->db->from('tb_destinasi');
        $this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_destinasi.id_kategori', 'left');
        $this->db->where('tb_destinasi.id_destinasi', $id);
        return $this->db->get()->row();
    }
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function update($id, $data)
    {
        return $this->db
            ->where('id_destinasi', $id)
            ->update($this->table, $data);
    }
    public function delete($id)
    {
        return $this->db
            ->where('id_destinasi', $id)
            ->delete($this->table);
    }
}
