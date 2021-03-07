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

    public function deleteBph($id)
    {
        $prevImage  = $this->db->get_where('tb_bph', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/bph/' . $prevImage);
        }
        $this->content->deleteBph($id);
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

    public function kemenko()
    {
        $data['title'] = 'Kementrian Ekonomi';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_kemenko')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenko', $data);
        $this->load->view('templates/footer');
    }

    public function insertkemenko()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'kemenko_' . time();
        $config['upload_path'] = './assets/img/kemenko/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kementerian Ekonomi';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/kemenko', $data);
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
                $this->content->insertKemenko();
            }
        }
    }

    public function deleteKemenko($id)
    {
        $prevImage  = $this->db->get_where('tb_kemenko', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kemenko/' . $prevImage);
        }
        $this->content->deleteKemenko($id);
    }

    public function kemenag()
    {
        $data['title'] = 'Kementrian Agama';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_kemenag')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenag', $data);
        $this->load->view('templates/footer');
    }

    public function insertkemenag()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'kemenag_' . time();
        $config['upload_path'] = './assets/img/kemenag/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kementerian Dalam Negeri';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/kemenag', $data);
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
                $this->content->insertkemenag();
            }
        }
    }

    public function deletekemenag($id)
    {
        $prevImage  = $this->db->get_where('tb_kemenag', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kemenag/' . $prevImage);
        }
        $this->content->deletekemenag($id);
    }

    public function kemenor()
    {
        $data['title'] = 'Kementrian Olahraga';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_kemenor')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenor', $data);
        $this->load->view('templates/footer');
    }

    public function insertkemenor()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'kemenor_' . time();
        $config['upload_path'] = './assets/img/kemenor/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kementerian Olahraga';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/kemenor', $data);
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
                $this->content->insertkemenor();
            }
        }
    }

    public function deletekemenor($id)
    {
        $prevImage  = $this->db->get_where('tb_kemenor', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kemenor/' . $prevImage);
        }
        $this->content->deletekemenor($id);
    }

    public function kemendagri()
    {
        $data['title'] = 'Kementrian Dalam Negeri';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_kemendagri')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemendagri', $data);
        $this->load->view('templates/footer');
    }

    public function insertkemendagri()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'kemendagri_' . time();
        $config['upload_path'] = './assets/img/kemendagri/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kementerian Dalam Negeri';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/kemendagri', $data);
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
                $this->content->insertkemendagri();
            }
        }
    }

    public function deletekemendagri($id)
    {
        $prevImage  = $this->db->get_where('tb_kemendagri', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kemendagri/' . $prevImage);
        }
        $this->content->deletekemendagri($id);
    }

    public function kemendikbud()
    {
        $data['title'] = 'Kementrian Pendidikan & Budaya';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_kemendikbud')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemendikbud', $data);
        $this->load->view('templates/footer');
    }

    public function insertkemendikbud()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'kemendikbud_' . time();
        $config['upload_path'] = './assets/img/kemendikbud/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kementerian Pendidikan & Budaya';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/kemendikbud', $data);
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
                $this->content->insertkemendikbud();
            }
        }
    }

    public function deletekemendikbud($id)
    {
        $prevImage  = $this->db->get_where('tb_kemendikbud', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kemendikbud/' . $prevImage);
        }
        $this->content->deletekemendikbud($id);
    }

    public function kemenlu()
    {
        $data['title'] = 'Kementrian Luar Negeri';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_kemenlu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenlu', $data);
        $this->load->view('templates/footer');
    }

    public function insertkemenlu()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'kemenlu_' . time();
        $config['upload_path'] = './assets/img/kemenlu/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kementerian Pendidikan & Budaya';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/kemenlu', $data);
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
                $this->content->insertkemenlu();
            }
        }
    }

    public function deletekemenlu($id)
    {
        $prevImage  = $this->db->get_where('tb_kemenlu', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kemenlu/' . $prevImage);
        }
        $this->content->deletekemenlu($id);
    }

    public function kemenkominfo()
    {
        $data['title'] = 'Kementrian Komunikasi & Informatika';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->db->get('tb_kemenkominfo')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/kemenkominfo', $data);
        $this->load->view('templates/footer');
    }

    public function insertkemenkominfo()
    {
        $this->form_validation->set_rules('name', 'Nama', 'trim|required', [
            'required' => 'Nama harus diisi!'
        ]);

        $nama = 'kemenkominfo_' . time();
        $config['upload_path'] = './assets/img/kemenkominfo/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '2000';
        $config['max_width']  = '2000';
        $config['max_height']  = '2000';
        $config['file_name'] = $nama;

        $this->load->library('upload', $config);

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Kementerian Pendidikan & Budaya';
            $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('home/kemenkominfo', $data);
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
                $this->content->insertkemenkominfo();
            }
        }
    }

    public function deletekemenkominfo($id)
    {
        $prevImage  = $this->db->get_where('tb_kemenkominfo', ['id' => $id])->row_array()['image'];

        // delete previous image
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/kemenkominfo/' . $prevImage);
        }
        $this->content->deletekemenkominfo($id);
    }
}

/* End of file Content.php */
