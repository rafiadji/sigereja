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

	public function laksanabaptis()
	{
		$cek = $this->input->post('pilihan');
		switch($this->input->post('kehadiran')){
			case 'hadir':
				$st = 'Sudah';
				break;
			case 'ulang':
				$st = 'Terdaftar';
				break;
			case 'batal':
				$st = 'Belum';
				break;
		}

		for ($i = 0; $i < count($cek); $i++) {
			$this->db->where('baptis_id', $cek[$i]);
			$usr = $this->db->get('baptis')->row_array();

			$this->db->where('user_id', $usr['user_id']);
			$this->db->update('user', array('st_baptis' => $st));
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
		$cek = $this->input->post('pilihan');

		for ($i = 0; $i < count($cek); $i++) {
			$data = [
				'tgl_nikah' => $this->input->post('tanggal_nikah'),
				'st_konfrim' => "1",
			];

			$this->db->where('nikah_id', $cek[$i]);
			$this->db->update('nikah', $data);
		}
	}

	public function laksananikah()
	{
		$cek = $this->input->post('pilihan');
		switch($this->input->post('kehadiran')){
			case 'hadir':
				$st = 'Sudah';
				break;
			case 'ulang':
				$st = 'Terdaftar';
				break;
			case 'batal':
				$st = 'Belum';
				break;
		}

		for ($i = 0; $i < count($cek); $i++) {
			$this->db->where('nikah_id', $cek[$i]);
			$usr = $this->db->get('nikah')->row_array();

			$this->db->where('user_id', $usr['user_id']);
			$this->db->update('user', array('st_nikah' => $st));
		}
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
