<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Content_model', 'content');
    }

    public function visimisi()
    {
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title']  = 'Visi Misi';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('content/visimisi', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file Content.php */

?>