<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('user');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required'      => 'Email tidak boleh kosong!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required'      => 'Password tidak boleh kosong!'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $data['title']  = "Login Page";

            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $user       = $this->db->get_where('user', ['username' => $username])->row_array();

        // Jika user ada
        if ($user) {
            // Jika user aktif
            if ($user['is_active'] == 1) {
                // Cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username'  => $user['username'],
                        'role_id'   => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    // Cek role
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else {
                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata(
                        'message',
                        '<div class="alert alert-danger" role="alert">
                    Oops! Password salah.
                    </div>'
                    );
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-danger" role="alert">
                Oops! Akun tidak aktif. Silahkan hubungi admin.
                </div>'
                );
                redirect('auth');
            }
        } else {
            //Tidak ada user
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-danger" role="alert">
            Oops! Akun tidak terdaftar.
            </div>'
            );
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Berhasil logout!
            </div>'
        );
        redirect('auth');
    }

    public function block()
    {
        $data['title'] = 'Akses ditolak!';

        $this->load->view('templates/header', $data);
        $this->load->view('auth/block');
        $this->load->view('templates/footer');
    }
}

/* End of file Auth.php */
