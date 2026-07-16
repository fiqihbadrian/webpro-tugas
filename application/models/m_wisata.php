<?php
 
class M_wisata extends CI_Model 
{
     public function get_all()
     {
         return $this->db->get('tb_contoh')->result();
     }
     public function insert($data)
     {
         return $this->db->insert('tb_contoh', $data);
     }
 }

?>