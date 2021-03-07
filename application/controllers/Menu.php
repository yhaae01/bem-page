<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Menu_model', 'menu');
        is_login();
    }


    public function index()
    {
        $data['title']  = 'Pengelolaan Menu';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['menu']   = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'trim|required', [
            'required'  => 'Menu harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->menu->addMenu();
        }
    }

    public function subMenu()
    {
        $this->load->library('pagination');

        $data['title']  = 'Pengelolaan Submenu';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['subMenu'] = $this->menu->getsubMenu();
        $data['menu']   = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('title', 'Title', 'trim|required', [
            'required'  => 'Title harus diisi!'
        ]);
        $this->form_validation->set_rules('menu_id', 'Menu', 'trim|required', [
            'required'  => 'Menu harus diisi!'
        ]);
        $this->form_validation->set_rules('url', 'Url', 'trim|required', [
            'required'  => 'Url harus diisi!'
        ]);
        $this->form_validation->set_rules('icon', 'Icon', 'trim|required', [
            'required'  => 'Icon harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('menu/submenu', $data);
            $this->load->view('templates/footer');
        } else {
            $this->menu->addSubmenu();
        }
    }

    public function updateMenu($id)
    {
        $this->menu->updateMenu($id);
    }

    public function deleteMenu($id)
    {
        $this->menu->deleteMenu($id);
    }

    public function deleteSubmenu($id)
    {
        $this->menu->deleteSubmenu($id);
    }

    public function updateSubmenu($id)
    {
        $this->menu->updateSubmenu($id);
    }
}

/* End of file Menu.php */
