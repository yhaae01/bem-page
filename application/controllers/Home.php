<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model', 'home');
    }

    public function index()
    {
        $data['title']          = 'BEM-Page';

        $data['bph']            = $this->home->getbph();
        $data['kemenko']        = $this->home->getkemenko();
        $data['kemenag']        = $this->home->getkemenag();
        $data['kemendagri']     = $this->home->getkemendagri();
        $data['kemenkominfo']   = $this->home->getkemenkominfo();
        $data['kemendikbud']   = $this->home->getkemendikbud();
        $data['kemenlu']        = $this->home->getkemenlu();
        $data['kemenor']        = $this->home->getkemenor();

        return $this->load->view('home/index', $data);
    }

    public function index2()
    {
        $data['title']          = 'BEM-Page';

        $data['bph']            = $this->home->getbph();
        $data['kemenko']        = $this->home->getkemenko();
        $data['kemenag']        = $this->home->getkemenag();
        $data['kemendagri']     = $this->home->getkemendagri();
        $data['kemenkominfo']   = $this->home->getkemenkominfo();
        $data['kemendikbud']   = $this->home->getkemendikbud();
        $data['kemenlu']        = $this->home->getkemenlu();
        $data['kemenor']        = $this->home->getkemenor();

        return $this->load->view('home/index2', $data);
    }
}
