<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("User_model");

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }
    public function edit()
    {
        $data['title'] = 'Edit Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required|trim');
        $this->form_validation->set_rules('nik', 'NIK', 'required|trim');
        $this->form_validation->set_rules('alamat_kk', 'Alamat', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $nik = $this->input->post('nik');
            $alamat_kk = $this->input->post('alamat_kk');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {

                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->dispay_errors();
                }
            }

            $this->db->set('name', $name);
            $this->db->set('alamat_kk', $alamat_kk);
            $this->db->set('nik', $nik);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button> Update profil  BERHASIL!</div>');
            redirect('user');
        }
    }

    public function registrasinikah($user_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Daftar Baptis';
        $data['users'] = $this->User_model->getUmatById($user_id);

        $this->form_validation->set_rules('id_peserta', 'Peserta', 'required');
        $this->form_validation->set_rules('n_pasangan', 'Nama Pasangan', 'required');
        $this->form_validation->set_rules('a_pasangan', 'Alamat Pasangan', 'required');
        $this->form_validation->set_rules('n_saksi', 'Nama Saksi', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/umat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'user_id' => $this->input->post('id_peserta'),
                'n_pasangan' => $this->input->post('n_pasangan'),
                'a_pasangan' => $this->input->post('a_pasangan'),
                'n_saksi' => $this->input->post('n_saksi')
            ];

            $this->db->insert('nikah', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Pendaftaran Pernikahan </div>');

            redirect('user/detailumatbykk/' . $user_id);
        }
    }

    public function registrasibaptis($user_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Daftar Baptis';
        $data['users'] = $this->User_model->getUmatById($user_id);

        $this->form_validation->set_rules('id_peserta', 'Peserta', 'required');
        $this->form_validation->set_rules('kat_baptis', 'Kategori Baptis', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/umat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'user_id' => $this->input->post('id_peserta'),
                'kat_baptis' => $this->input->post('kat_baptis')
            ];

            $this->db->insert('baptis', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Pendaftaran Peserta Baptis </div>');

            redirect('user/detailumatbykk/' . $user_id);
        }
    }

    public function info()
    {
        $data['title'] = 'Info Paroki';

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengumuman'] = $this->db->get('pengumuman')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/info', $data);
        $this->load->view('templates/footer');
    }

    public function tambahanggota($user_id)
    {
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title'] = 'Detail Keluarga';
        $data['users'] = $this->User_model->getUmatById($user_id);

        $this->form_validation->set_rules('nik', 'NIK', 'required');
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('st_nikah', 'Status nikah', 'required');
        $this->form_validation->set_rules('jk', 'Jenis kelamin', 'required');
        $this->form_validation->set_rules('tpt_lahir', 'Tempat lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal lahir', 'required');
        $this->form_validation->set_rules('alamat_kk', 'Alamat', 'required');
        $this->form_validation->set_rules('st_keluarga', 'Status keluarga', 'required');
        $this->form_validation->set_rules('pekerjaan', 'Pkerjaan', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/umat', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'nik_kk' => $user_id, //user_id == nik_kk
                'name' => $this->input->post('name'),
                'st_nikah' => $this->input->post('st_nikah'),
                'jk' => $this->input->post('jk'),
                'tpt_lahir' => $this->input->post('tpt_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'alamat_kk' => $this->input->post('alamat_kk'),
                'st_keluarga' => $this->input->post('st_keluarga'),
                'pekerjaan' => $this->input->post('pekerjaan')
            ];

            $this->db->insert('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>SUCCESS! Tambah data umat </div>');

            redirect('user/detailumatbykk/' . $user_id);
        }
    }

    public function detailumatbykk($user_id)
    {

        $data['title'] = 'Detail Keluarga';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users'] = $this->User_model->getUmatById($user_id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/umat', $data);
        $this->load->view('templates/footer');
    }

    public function deleteumat($user_id)
    {
        $data['users'] = $this->User_model->getUmatById($user_id);
        $this->User_model->deletUmatById($user_id);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button> SUCCESS! Anggota keluarga  telah dihapus</div>');
        redirect('user');
    }
    public function detail($pengumuman_id)
    {
        $data['title'] = 'Detail info';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pengumuman'] = $this->User_model->getPengumumanById($pengumuman_id);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/detail', $data);
        $this->load->view('templates/footer');
    }
}
