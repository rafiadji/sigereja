<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
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

  public function getUmatById($user_id)
  {
    return $this->db->get_where('user', ['nik_kk' => $user_id])->result_array();
  }

  public function deletUmatById($user_id)
  {
    $this->db->where('user_id', $user_id);
    $this->db->delete('user');
  }
  public function updatekomuni()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'jen_kel' => $this->input->post('jen_kel'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'tpt_permandian' => $this->input->post('tpt_permandian'),
      'tgl_permandian' => $this->input->post('tgl_permandian')
    ];

    $this->db->where('komuni_id', $this->input->post('komuni_id'));
    $this->db->update('komuni', $data);
  }
}
