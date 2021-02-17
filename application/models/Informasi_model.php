<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_model extends CI_Model
{
    public function getPengumumanById($pengumuman_id)
    {
        return $this->db->get_where('pengumuman', ['pengumuman_id' => $pengumuman_id])->row_array();
    }

    public function deletePengumuman($pengumuman_id)
    {
        $this->db->where('pengumuman_id', $pengumuman_id);
        $this->db->delete('pengumuman');
    }
}
