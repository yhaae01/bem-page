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
        $data['title'] = 'Tambah Artikel';
        $data['user']  = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('gallery/createArticle', $data);
        $this->load->view('templates/footer');
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
