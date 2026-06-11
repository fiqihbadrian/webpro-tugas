<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_kategori extends CI_Model
{
    private $table = 'tb_kategori';
    // Ambil semua data
    public function get_all()
    {
        return $this->db->order_by('id_kategori', 'DESC')
            ->get($this->table)
            ->result();
    }
    // Ambil data berdasarkan ID
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, [
            'id_kategori' => $id
        ])->row();
    }
    // Simpan data
    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }
    // Update data
    public function update($id, $data)
    {
        return $this->db->where('id_kategori', $id)
            ->update($this->table, $data);
    }
    // Hapus data
    public function delete($id)
    {
        return $this->db->where('id_kategori', $id)
            ->delete($this->table);
    }
    // Search kategori
    public function search($keyword)
    {
        return $this->db
            ->like('nama_kategori', $keyword)
            ->get($this->table)
            ->result();
    }
    // Hitung jumlah kategori
    public function count_all()
    {
        return $this->db->count_all($this->table);
    }
}
