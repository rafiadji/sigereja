<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("informasi_model");


        is_logged_in();
    }

    public function index()
    {

        $data['title'] = 'Tambah Info';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengumuman'] = $this->db->get('pengumuman')->result_array();

        $this->form_validation->set_rules('judul_pengumuman', 'Judul Pengumuman', 'required');
        $this->form_validation->set_rules('tanggal_pengumuman', 'Tanggal pengumuman', 'required');
        $this->form_validation->set_rules('isi_pengumuman', 'Isi pengumuman', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('informasi/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul_pengumuman' => $this->input->post('judul_pengumuman'),
                'tanggal_pengumuman' => $this->input->post('tanggal_pengumuman'),
                'isi_pengumuman' => $this->input->post('isi_pengumuman'),
            ];

            $this->db->insert('pengumuman', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Tambah pengumuman </div>');
            redirect('informasi');
        }
    }
    public function detail($pengumuman_id)
    {
        $data['title'] = 'Detail pengumuman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengumuman'] = $this->informasi_model->getPengumumanById($pengumuman_id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('informasi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function delete($pengumuman_id)
    {

        $this->informasi_model->deletePengumuman($pengumuman_id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button> SUCCESS! Pengumuman telah dihapus</div>');
        redirect('informasi');
    }
}
