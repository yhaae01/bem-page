<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Gallery';
        $this->load->view('gallery/index', $data);
    }

    public function article()
    {
        $data['title'] = 'Artikel';
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['articles'] = $this->db->get('tb_article')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gallery/dataArticle', $data);
        $this->load->view('templates/footer');
    }

    public function createArticle()
    {
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('title', 'Judul', 'trim|required');
        $this->form_validation->set_rules('content', 'Isi Konten', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Artikel';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('gallery/createArticle', $data);
            $this->load->view('templates/footer');
        } else {
            $article['title'] = $this->input->post('title');
            $article['content'] = $this->input->post('content');
            $article['url'] = $this->input->post('url');
            date_default_timezone_set('Asia/Jakarta');
            $article['date'] = date('Y-m-d H:i:s');
            $article['author'] = $data['user']['id'];

            $config['allowed_types'] = 'gif|jpg|png|svg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/cover/';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) {
                var_dump('gagal');
                die;
            } else {
                $article['cover'] = $this->upload->data()['file_name'];
            }

            $this->db->insert('tb_article', $article);
            $this->session->set_flashdata('message', '<div class="alert alert-success">Tambah Article berhasil</div>');
            redirect('gallery/article');
        }
    }

    public function ubah()
    {
        $id = $this->input->get('id');
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = $this->db->get_where('tb_article', ['id' => $id])->row_array();

        $this->form_validation->set_rules('title', 'Judul', 'trim|required');
        $this->form_validation->set_rules('content', 'Isi Konten', 'trim|required');
        $this->form_validation->set_rules('url', 'Url', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Artikel';

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('gallery/editArticle', $data);
            $this->load->view('templates/footer');
        } else {
            $title = $this->input->post('title');
            $content = $this->input->post('content');
            $url = $this->input->post('url');
            date_default_timezone_set('Asia/Jakarta');
            $date = date('Y-m-d H:i:s');


            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png|svg';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/cover/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['data']['cover'];
                    if ($old_image != NULL) {
                        unlink(FCPATH . '/assets/img/cover/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');

                    $this->db->set('cover', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->db->set('title', $title);
            $this->db->set('content', $content);
            $this->db->set('url', $url);
            $this->db->set('date', $date);
            $this->db->where('id', $id);
            $this->db->update('tb_article');

            $this->session->set_flashdata('message', '<div class="alert alert-success">Ubah artikel berhasil</div>');
            redirect('gallery/article');
        }
    }

    public function hapus()
    {
        $id = $this->input->get('id');
        $prevImage  = $this->db->get_where('tb_article', ['id' => $id])->row_array()['cover'];
        if ($prevImage != 'default.jpg') {
            unlink(FCPATH . 'assets/img/cover/' . $prevImage);
        }
        $this->db->where('id', $id);
        $this->db->delete('tb_article');

        $this->session->set_flashdata('message', '<div class="alert alert-success">Hapus artikel berhasil</div>');
        redirect('gallery/article');
    }

    public function tampilArticle()
    {
        $data['title'] = 'Kegiatan Terbaru';
        $this->load->view('gallery/article', $data);
    }

    public function tampilProker()
    {
        $data['title'] = 'Program Kerja';
        $this->load->view('gallery/proker', $data);
    }
}

/* End of file Gallery.php */
