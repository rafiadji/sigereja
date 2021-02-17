<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model

{
    public function getAllBaptis()
    {
        return $this->db->get('baptis')->result_array();
    }

    public function getLaporanBaptisByid($baptis_id)
    {

        return $this->db->get_where('baptis', ['baptis_id' => $baptis_id])->row_array();
    }

    public function getKomuniByid($komuni_id)
    {
        return $this->db->get_where('komuni', ['komuni_id' => $komuni_id])->row_array();
    }


    public function getNikahByid($nikah_id)
    {
        return $this->db->get_where('nikah', ['nikah_id' => $nikah_id])->row_array();
    }


    //QUERY FILTER DATA BAPPTIS

    public function view_by_month($month, $year)
    {
        $this->db->where('MONTH(tanggal_baptis)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tanggal_baptis)', $year); // Tambahkan where tahun

        return $this->db->get('baptis')->result(); // Tampilkan data baptis sesuai bulan dan tahun yang diinput oleh user pada filter
    }

    public function view_by_year($year)
    {
        $this->db->where('YEAR(tanggal_baptis)', $year); // Tambahkan where tahun

        return $this->db->get('baptis')->result(); // Tampilkan data baptis sesuai tahun yang diinput oleh user pada filter
    }

    public function option_tahun()
    {
        $this->db->select('YEAR(tanggal_baptis) AS tahun'); // Ambil Tahun dari field tanggal_baptis
        $this->db->from('baptis'); // select ke tabel baptis
        $this->db->order_by('YEAR(tanggal_baptis)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tanggal_baptis)'); // Group berdasarkan tahun pada field tanggal_baptis

        return $this->db->get()->result(); // Ambil data pada tabel baptis sesuai kondisi diatas
    }
}
