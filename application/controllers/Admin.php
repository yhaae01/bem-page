<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->library('form_validation');
        $this->load->model('Admin_model', 'admin');
    }

    public function index()
    {
        $data['title']  = 'Dashboard';
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function manageUser()
    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['users']  = $this->db->get_where('user', ['role_id' => 2])->result_array();

        $this->form_validation->set_rules('name', 'Nama', 'trim|required',[
            'required'      => 'Nama harus diisi!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]',[
            'required'      => 'Email harus diisi!',
            'valid_email'   => 'Format E-mail tidak sesuai!',
            'is_unique'     => 'Email sudah digunakan!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[6]|matches[password2]',[
            'required'      => 'Password harus diisi!',
            'min_length'    => 'Password minimal 6 karakter!',
            'matches'       => 'Password tidak sama!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');
        
        if ($this->form_validation->run() == FALSE) {
            $data['title']  = 'Kelola User';
            
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/manage_user', $data);
            $this->load->view('templates/footer');
        } else {
            $this->admin->regis();
        }
    }

    public function deleteUser($id)
    {
        $this->admin->deleteUser($id);
    }

    public function role()
    {
        $data['title']  = 'Role';
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role']   = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'trim|required',[
            'required'  => 'Role harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->admin->addRole();
        }
    }

    public function deleteRole($id)
    {
        $this->admin->deleteRole($id);
    }

    public function updateRole($id)
    {
        $this->admin->updateRole($id);
    }

    public function roleaccess($role_id)
    {
        $data['title']  = 'Akses Role';
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role']   = $this->db->get_where('user_role', ['id' => $role_id])->row_array();
        
        $this->db->where('id !='. 1);
        $data['menu']   = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role_access', $data);
        $this->load->view('templates/footer');
    }

    public function changeaccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_accessmenu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_accessmenu', $data);
        } else {
            $this->db->delete('user_accessmenu', $data);
        }

        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil ubah role!
        </div>');
    }

}

/* End of file Admin.php */

?>