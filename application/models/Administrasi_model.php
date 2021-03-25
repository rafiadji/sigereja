<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi_model extends CI_Model
{

	public function getBaptisByid($baptis_id)
	{

		return $this->db->get_where('daftar_baptis', ['baptis_id' => $baptis_id])->row_array();
	}

	public function updatebaptis()
	{
		$cek = $this->input->post('pilihan');

		for ($i = 0; $i < count($cek); $i++) {
			$data = [
				'tanggal_baptis' => $this->input->post('tanggal_baptis'),
				'st_konfrim' => "1",
			];

			$this->db->where('baptis_id', $cek[$i]);
			$this->db->update('baptis', $data);
		}
	}

	public function deletDataBaptis($baptis_id)
	{
		$this->db->where('baptis_id', $baptis_id);
		$this->db->delete('baptis');
	}

	public function getKomuniByid($komuni_id)
	{
		return $this->db->get_where('komuni', ['komuni_id' => $komuni_id])->row_array();
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

	public function getNikahByid($nikah_id)
	{
		return $this->db->get_where('daftar_nikah', ['nikah_id' => $nikah_id])->row_array();
	}

	public function updatenikah()
	{
		$data = [
			'n_cal_suami' => $this->input->post('n_cal_suami'),
			'a_cal_suami' => $this->input->post('a_cal_suami'),
			'n_cal_istri' => $this->input->post('n_cal_istri'),
			'a_cal_istri' => $this->input->post('a_cal_istri'),
			'n_saksi' => $this->input->post('n_saksi'),
			'tgl_nikah' => $this->input->post('tgl_nikah'),
			'tpt_nikah' => $this->input->post('tpt_nikah')
		];
		$this->db->where('nikah_id', $this->input->post('nikah_id'));
		$this->db->update('nikah', $data);
	}

	public function deleteDataKomuni($komuni_id)
	{
		$this->db->where('komuni_id', $komuni_id);
		$this->db->delete('komuni');
	}
	public function deleteDataNikah($nikah_id)
	{
		$this->db->where('nikah_id', $nikah_id);
		$this->db->delete('nikah');
	}

	public function getUmatById($umat_id)
	{
		return $this->db->get_where('umat', ['umat_id' => $umat_id])->row_array();
	}
	public function getAnggotaByKK($nik_kk)
	{
		return $this->db->get_where('v_umat', ['nik_kk' => $nik_kk])->result_array();
	}
}
