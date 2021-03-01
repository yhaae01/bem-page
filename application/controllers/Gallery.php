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
        $data['title'] = 'Kegiatan Terbaru';
        $this->load->view('gallery/article', $data);
    }

    public function proker()
    {
        $data['title'] = 'Program Kerja';
        $this->load->view('gallery/proker', $data);
    }
}

/* End of file Gallery.php */
