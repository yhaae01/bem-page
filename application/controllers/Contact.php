<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Contact';
        $this->load->view('contact/index', $data);
    }
}

/* End of file Contact.php */
