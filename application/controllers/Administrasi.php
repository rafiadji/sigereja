<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model("administrasi_model");

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Baptis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['baptis'] = $this->db->where('st_baptis','Terdaftar')->get('daftar_baptis')->result_array();
        $data['baptis_laksana'] = $this->db->where('st_baptis','Pelaksanaan')->get('daftar_baptis')->result_array();
        $data['baptis_sudah'] = $this->db->where('st_baptis','Sudah')->get('daftar_baptis')->result_array();
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('administrasi/baptis', $data);
		$this->load->view('templates/footer');
    }

    public function editbaptis()
    {
        $data['title'] = 'Edit baptis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['baptis'] = $this->db->where('st_baptis','Terdaftar')->get('daftar_baptis')->result_array();

        $this->form_validation->set_rules('tanggal_baptis', 'Tanggal baptis', 'required');
        $this->form_validation->set_rules('pilihan[]', 'Peserta', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/baptis', $data);
            $this->load->view('templates/footer');
        } else {
            $this->administrasi_model->updatebaptis();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Update data baptis </div>');
            redirect('administrasi');
        }
    }

    public function detailbaptis($baptis_id)
    {
        $data['title'] = 'Detail baptis';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['baptis'] = $this->administrasi_model->getBaptisByid($baptis_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/detailbaptis', $data);
        $this->load->view('templates/footer');
    }


    public function deletebaptis($baptis_id)
    {
        $data['baptis'] = $this->db->get('baptis')->result_array();
        $this->administrasi_model->deletDataBaptis($baptis_id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button> SUCCESS! Data baptis telah dihapus</div>');
        redirect('administrasi');
    }

    public function komuni()
    {
        $data['title'] = 'Komuni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komuni'] = $this->db->get('komuni')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jen_kel', 'Jenis kelamin', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('tpt_permandian', 'Tempat permandian', 'required');
        $this->form_validation->set_rules('tgl_permandian', 'Tanggal permandian', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/komuni', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'jen_kel' => $this->input->post('jen_kel'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'tpt_permandian' => $this->input->post('tpt_permandian'),
                'tgl_permandian' => $this->input->post('tgl_permandian')
            ];

            $this->db->insert('komuni', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Tambah data komuni </div>');
            redirect('administrasi/komuni');
        }
    }

    public function editkomuni($komuni_id)
    {
        $data['title'] = 'Edit Komuni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komuni'] = $this->administrasi_model->getKomuniByid($komuni_id);
        $data['jenis_kelamin'] = ['Laki-laki', 'Perempuan']; //array untuk tampilkan jenis kelamin

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jen_kel', 'Jenis kelamin', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('tpt_permandian', 'Tempat permandian', 'required');
        $this->form_validation->set_rules('tgl_permandian', 'Tanggal permandian', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/editkomuni', $data);
            $this->load->view('templates/footer');
        } else {
            $this->administrasi_model->updatekomuni();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Update data komuni </div>');
            redirect('administrasi/komuni');
        }
    }

    public function detailkomuni($komuni_id)
    {
        $data['title'] = 'Detail komuni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['komuni'] = $this->administrasi_model->getKomuniByid($komuni_id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/detailkomuni', $data);
        $this->load->view('templates/footer');
    }

    public function deletekomuni($komuni_id)
    {

        $this->administrasi_model->deleteDataKomuni($komuni_id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button> SUCCESS! Data komuni telah dihapus</div>');
        redirect('administrasi/komuni');
    }

    public function nikah()
    {

        $data['title'] = 'Nikah';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nikah'] = $this->db->where('tgl_nikah >= NOW()')->get('daftar_nikah')->result_array();
        // $data['umat'] = $this->db->get_where('umat')->result_array();


        $this->form_validation->set_rules('nama_', 'Nama pasangan', 'required');
        $this->form_validation->set_rules('alamat_kk', 'Alamat pasanagan', 'required');
        $this->form_validation->set_rules('n_pasangan', 'Nama pasangan', 'required');
        $this->form_validation->set_rules('a_pasangan', 'Alamat pasangan', 'required');
        $this->form_validation->set_rules('n_saksi', 'Nama saksi', 'required');
        $this->form_validation->set_rules('tgl_nikah', 'Tanggal nikah', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/nikah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'n_pasangan' => $this->input->post('n_pasangan'),
                'a_pasangan' => $this->input->post('a_pasangan'),
                'n_saksi' => $this->input->post('n_saksi'),
                'tgl_nikah' => $this->input->post('tgl_nikah')
            ];

            $this->db->insert('nikah', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Tambah data nikah </div>');
            redirect('administrasi/nikah');
        }
    }

    public function editnikah($nikah_id)
    {
        $data['title'] = 'Edit Komuni';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nikah'] = $this->administrasi_model->getNikahByid($nikah_id);

        $this->form_validation->set_rules('n_cal_suami', 'Nama calon suami', 'required');
        $this->form_validation->set_rules('a_cal_suami', 'Alamat calon suami', 'required');
        $this->form_validation->set_rules('n_cal_istri', 'Nama calon istri', 'required');
        $this->form_validation->set_rules('a_cal_istri', 'Alamat calon istri', 'required');
        $this->form_validation->set_rules('n_saksi', 'Nama saksi', 'required');
        $this->form_validation->set_rules('tgl_nikah', 'Tanggal nikah', 'required');
        $this->form_validation->set_rules('tpt_nikah', 'Tempat pernikahan', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/editnikah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->administrasi_model->updatenikah();

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Update data nikah </div>');
            redirect('administrasi/nikah');
        }
    }

    public function detailnikah($nikah)
    {
        $data['title'] = 'Detail Nikah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['nikah'] = $this->administrasi_model->getNikahByid($nikah);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/detailnikah', $data);
        $this->load->view('templates/footer');
    }

    public function deletenikah($nikah_id)
    {

        $this->administrasi_model->deleteDataNikah($nikah_id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button> SUCCESS! Data nikah telah dihapus</div>');
        redirect('administrasi/nikah');
    }

    public function umat()
    {
        $data['title'] = 'Umat';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['umat'] = $this->db->get_where('user')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/umat', $data);
        $this->load->view('templates/footer');
    }

    public function detailumatbykk($umat_id)
    {

        $data['title'] = 'Deatail KK';
        $data['user'] = $this->db->get_where('v_umat', ['email' => $this->session->userdata('email')])->row_array();
        $data['umat'] = $this->administrasi_model->getAnggotaByKK($umat_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('administrasi/anggota', $data);
        $this->load->view('templates/footer');
    }

    public function tambahanggota($umat_id)
    {
        $data['title'] = 'Detail Per';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['umat'] = $this->db->get('umat')->result_array();

        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('st_nikah', 'Status nikah', 'required');
        $this->form_validation->set_rules('jk', 'Jenis kelamin', 'required');
        $this->form_validation->set_rules('tp_lahir', 'Tempat lahir', 'required');
        $this->form_validation->set_rules('tg_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('alamat_kk', 'Alamat', 'required');
        $this->form_validation->set_rules('st_keluarga', 'Status keluarga', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pkerjaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('administrasi/umat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nik_kk' => 1,
                'name' => $this->input->post('name'),
                'st_nikah' => $this->input->post('st_nikah'),
                'jk' => $this->input->post('jk'),
                'tp_lahir' => $this->input->post('tp_lahir'),
                'tg_lahir' => $this->input->post('tg_lahir'),
                'alamat_kk' => $this->input->post('alamat_kk'),
                'st_keluarga' => $this->input->post('st_keluarga'),
                'pekerjaan' => $this->input->post('pekerjaan')
            ];

            $this->db->insert('umat', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Tambah data umat </div>');
            redirect('user/tambahanggota/' . $umat_id);
        }
    }
}
