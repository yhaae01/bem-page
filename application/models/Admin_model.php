<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    public function regis()
    {
        $data = [
            'name'          => htmlspecialchars($this->input->post('name', true)),
            'username'      => htmlspecialchars($this->input->post('username', true)),
            'image'         => 'default.png',
            'password'      => password_hash("1234", PASSWORD_DEFAULT), // Password default 1234
            'role_id'       => 2,
            'is_active'     => 1,
            'date_created'  => time()
        ];

        $this->db->insert('user', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Berhasil! Akun sudah dibuat.
        </div>'
        );
        redirect('admin/manageUser');
    }

    public function getUserWhere($where = null)
    {
        return $this->db->get_where('user', $where);
    }

    public function deleteUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Berhasil! Akun sudah dihapus.
        </div>'
        );
        redirect('admin/manageUser');
    }

    public function addRole()
    {
        $data = [
            'role'  => $this->input->post('role')
        ];

        $this->db->insert('user_role', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil! Role sudah ditambah.
        </div>');
        redirect('admin/role');
    }

    public function deleteRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Berhasil! Role sudah dihapus.
        </div>');
        redirect('admin/role');
    }

    public function updateRole($id)
    {
        $role   = $this->input->post('role');

        $data = [
            'role' => $role
        ];

        $this->db->where('id', $id);
        $this->db->update('user_role', $data);

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Berhasil! Role sudah diubah.
        </div>'
        );
        redirect('admin/role');
    }
}

/* End of file Admin_model.php */
