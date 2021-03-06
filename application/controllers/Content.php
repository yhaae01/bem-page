<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Content_model', 'content');
        $this->load->library('form_validation');
    }

    public function bph()
    {
        $data['title'] = 'Badan Pengurus Harian';
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_bph')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/bph', $data);
        $this->load->view('templates/footer');
    }

    public function insertBph()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'bph_' . time();
        $config['upload_path'] = './assets/img/bph/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Badan Pengurus Harian';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/bph', $data);
            $this->load->view('templates/footer');
        } else {
            if (!$this->upload->do_upload('image')) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                    Oops! Terjadi suatu kesalahan.
                    </div>'
                );
            } else {
                $this->content->insertBph();
            }
        }
    }

    public function editBph()
    {
        $data['title']  = 'Badan Pengurus Harian';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('content/bph', $data);
            $this->load->view('templates/footer');
        } else {
            // jika ada gambar yang di upload
            $uploadImage = $_FILES['image']['name'];

            if ($uploadImage) {
                $nama = 'bph_' . time();
                $config['upload_path'] = './assets/img/bph/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']  = '2000';
                $config['max_width']  = '2000';
                $config['max_height']  = '2000';
                $config['file_name'] = $nama;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) { // ngambil dari name img
                    $oldImage = $data['tb_bph']['image']; // ngambil dari data diatas, tabel user field image
                    if ($oldImage != 'default.png') {
                        unlink(FCPATH . 'assets/img/bph/' . $oldImage);
                    }
                    $newImage = $this->upload->data('file_name');
                    $this->db->set('image', $newImage);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            // hanya ubah nama
            $this->content->editBph();
        }
    }

    public function deleteBph($id)
    {
        $this->content->deleteBph($id);
    }

    public function kemenko()
    {
        $data['title'] = 'Kementrian Ekonomi';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenko', $data);
        $this->load->view('templates/footer');
    }

    public function kemenag()
    {
        $data['title'] = 'Kementrian Agama';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenag', $data);
        $this->load->view('templates/footer');
    }

    public function kemenor()
    {
        $data['title'] = 'Kementrian Olahraga';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenor', $data);
        $this->load->view('templates/footer');
    }

    public function kemendagri()
    {
        $data['title'] = 'Kementrian Dalam Negeri';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemendagri', $data);
        $this->load->view('templates/footer');
    }

    public function kemendikbud()
    {
        $data['title'] = 'Kementrian Pendidikan & Budaya';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemendikbud', $data);
        $this->load->view('templates/footer');
    }

    public function kemenlu()
    {
        $data['title'] = 'Kementrian Luar Negeri';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenlu', $data);
        $this->load->view('templates/footer');
    }

    public function kemenkominfo()
    {
        $data['title'] = 'Kementrian Komunikasi & Informatika';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenkominfo', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Content.php */
