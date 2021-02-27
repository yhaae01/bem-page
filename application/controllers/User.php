<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('User_model', 'user');
        
    }

    public function index()
    {
        $data['title']  = 'My Profile';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title']  = 'Edit Profile';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $this->form_validation->set_rules('name', 'Nama', 'trim|required',[
            'required' => 'Nama harus diisi!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer');
        } else {
            // jika ada gambar yang di upload
            $uploadImage = $_FILES['image']['name'];

            if ($uploadImage) {
                $config['upload_path']      = './assets/img/profile/';
                $config['allowed_types']    = 'gif|jpg|png';
                $config['max_size']         = '2048';

                $this->load->library('upload', $config);
                
                if ($this->upload->do_upload('image')) { // ngambil dari name img
                    $oldImage = $data['user']['image']; // ngambil dari data diatas, tabel user field image
                    if ($oldImage != 'default.png') {
                        unlink(FCPATH . 'assets/img/profile/' . $oldImage);
                    }
                    $newImage = $this->upload->data('file_name');
                    $this->db->set('image', $newImage);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            // hanya ubah nama
            $this->user->editProfile();
        }
    }

    public function changepassword()
    {
        $data['title']  = 'Ubah Password';
        $data['user']   = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $this->form_validation->set_rules('currentpassword', 'Current Password', 'trim|required');
        $this->form_validation->set_rules('newpassword1', 'New Password', 'trim|required|min_length[6]|matches[newpassword2]');
        $this->form_validation->set_rules('newpassword2', 'New Password', 'trim|required|min_length[6]|matches[newpassword1]');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/change_password', $data);
            $this->load->view('templates/footer');
        } else {
            $this->user->changePassword();
        }
    }

}

/* End of file User.php */
