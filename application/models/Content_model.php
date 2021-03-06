<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Content_model extends CI_Model
{
    public function insertBph()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/bph');
    }

    public function editBph()
    {
        $id         = $this->input->post('id');
        $name       = $this->input->post('name');
        $position   = $this->input->post('position');

        $this->db->set('name', $name);
        $this->db->set('position', $position);
        $this->db->where('id', $id);
        $this->db->update('tb_bph');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
        Berhasil diubah!
        </div>'
        );
        redirect('content/bph');
    }

    public function deleteBph($id)
    {
        $this->db->delete('tb_bph', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/bph');
    }
}

/* End of file Content_model.php */
