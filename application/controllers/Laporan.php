<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model("laporan_model");
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Laporan baptis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (empty($this->input->post('filter_bln')) && empty($this->input->post('filter_thn'))) {
            $data['laporan_baptis'] = $this->laporan_model->getAllBaptis();
            $data['thn'] = '';
            $data['bln'] = '';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/baptis', $data);
            $this->load->view('templates/footer');
        } else {
            $data['laporan_baptis'] = $this->laporan_model->getFilterBaptis($this->input->post('filter_bln'), $this->input->post('filter_thn'));
            $data['thn'] = $this->input->post('filter_thn');
            $data['bln'] = $this->input->post('filter_bln');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/baptis', $data);
            $this->load->view('templates/footer');
        }
    }

    public function detailbaptis($baptis_id)
    {
        $data['title'] = 'Detail baptis';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['baptis'] = $this->laporan_model->getLaporanBaptisByid($baptis_id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/detailbaptis', $data);
        $this->load->view('templates/footer');
    }

    public function komuni()
    {

        $data['title'] = 'Laporan komuni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['laporan_komuni'] = $this->db->get('komuni')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/komuni', $data);
        $this->load->view('templates/footer');
    }

    public function detailkomuni($komuni_id)
    {
        $data['title'] = 'Detail baptis';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komuni'] = $this->laporan_model->getKomuniByid($komuni_id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/detailkomuni', $data);
        $this->load->view('templates/footer');
    }

    public function nikah()
    {

        $data['title'] = 'Laporan nikah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        if (empty($this->input->post('filter_bln')) && empty($this->input->post('filter_thn'))) {
            $data['laporan_nikah'] = $this->laporan_model->getAllNikah();
            $data['thn'] = '';
            $data['bln'] = '';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/nikah', $data);
            $this->load->view('templates/footer');
        } else {
            $data['laporan_nikah'] = $this->laporan_model->getFilterNikah($this->input->post('filter_bln'), $this->input->post('filter_thn'));
            $data['thn'] = $this->input->post('filter_thn');
            $data['bln'] = $this->input->post('filter_bln');
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laporan/nikah', $data);
            $this->load->view('templates/footer');
        }
    }

    public function detailnikah($nikah_id)
    {
        $data['title'] = 'Detail Nikah';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nikah'] = $this->laporan_model->getNikahByid($nikah_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/detailnikah', $data);
        $this->load->view('templates/footer');
    }
}
