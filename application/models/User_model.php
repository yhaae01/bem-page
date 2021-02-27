<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function editProfile()
    {
        $name       = $this->input->post('name');
        $username   = $this->input->post('username');

        $this->db->set('name', $name);
        $this->db->where('username', $username);
        $this->db->update('user');
        
        $this->session->set_flashdata('message', 
        '<div class="alert alert-success" role="alert">
        Berhasil diubah!
        </div>');
        redirect('user');
    }

    public function changePassword()
    {
        $data['user']       = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $currentPassword    = $this->input->post('currentpassword');
        $newPassword        = $this->input->post('newpassword1');

        if (!password_verify($currentPassword, $data['user']['password'])) {
            // Kalau password salah
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Oops! Password lama salah.
            </div>');
            redirect('user/changePassword');
        } else {
            if ($currentPassword == $newPassword) {
                // Kalau password lama dan baru sama
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Oops! Password baru tidak boleh sama.
                </div>');
                redirect('user/changePassword');
            } else {
                // Kalau berhasil
                $passwordHash   = password_hash($newPassword, PASSWORD_DEFAULT);

                $this->db->set('password', $passwordHash);
                $this->db->where('username', $this->session->userdata('username'));
                $this->db->update('user');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil! password sudah diubah.
                </div>');
                redirect('user');
            }
        }
    }

}

/* End of file User_model.php */
