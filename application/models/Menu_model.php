<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model {

    public function getSubMenu()
    {
        $query = "SELECT `user_submenu`.*, `user_menu`.`menu`
                    FROM `user_submenu` JOIN `user_menu`
                      ON `user_submenu`.`menu_id` = `user_menu`.`id`
                ";
        
        return $this->db->query($query)->result_array();
    }

    public function addMenu()
    {
        $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil! Menu sudah ditambah.
        </div>');
        redirect('menu');
    }

    public function updateMenu($id)
    {
        $menu   = $this->input->post('menu');
        
        $this->db->set('menu', $menu);
        $this->db->where('id', $id);
        $this->db->update('user_menu');
        
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil! Menu sudah diubah.
        </div>');
        redirect('menu');
    }

    public function deleteMenu($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil! Menu sudah dihapus.
        </div>');
        redirect('menu');
    }

    public function addSubmenu()
    {
        $data = [
            'title'     => $this->input->post('title'),
            'menu_id'   => $this->input->post('menu_id'),
            'url'       => $this->input->post('url'),
            'icon'      => $this->input->post('icon'),
            'is_active' => $this->input->post('is_active')
        ];

        $this->db->insert('user_submenu', $data);
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil! Submenu sudah ditambah.
        </div>');
        redirect('menu/submenu');
    }

    public function updateSubmenu($id)
    {
        $title      = $this->input->post('title');
        $menu_id    = $this->input->post('menu_id');
        $url        = $this->input->post('url');
        $icon       = $this->input->post('icon');
        $is_active  = $this->input->post('is_active');

        $data = [
            'title'     => $title,
            'menu_id'   => $menu_id,
            'url'       => $url,
            'icon'      => $icon,
            'is_active' => $is_active
        ];
        
        $this->db->where('id', $id);
        $this->db->update('user_submenu', $data);
        
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil! Submenu sudah diubah.
        </div>');
        redirect('menu/submenu');
    }

    public function deleteSubmenu($id)
    {
        $this->db->delete('user_submenu', ['id' => $id]);
        
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil! Submenu sudah dihapus.
        </div>');
        redirect('menu/subMenu');
    }

}

/* End of file Menu_model.php */
