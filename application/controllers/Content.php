<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Content extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Content_model', 'content');
    }

    public function bph()
    {
        $data['title'] = 'Badan Pengurus Harian';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/bph', $data);
        $this->load->view('templates/footer');
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
