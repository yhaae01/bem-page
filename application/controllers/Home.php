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
        $data['title']  = 'BEM-Page';
        $data['bph']    = $this->home->getbph();

        return $this->load->view('home/index', $data);
    }
}
