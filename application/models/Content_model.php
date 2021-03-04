<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Content_model extends CI_Model
{
    public function insertKetuaBph()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => 'ketua'
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

    public function insertWakilBph()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => 'wakil'
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data wakil berhasil ditambahkan.
            </div>'
        );
        redirect('content/bph');
    }

    public function insertAnggota1Bph()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => 'anggota 1'
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data anggota 1 berhasil ditambahkan.
            </div>'
        );
        redirect('content/bph');
    }

    public function insertAnggota2Bph()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => 'anggota 2'
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data anggota 2 berhasil ditambahkan.
            </div>'
        );
        redirect('content/bph');
    }

    public function trunBph()
    {
        $this->db->truncate('tb_bph');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil dihapus.
            </div>'
        );
        redirect('content/bph');
    }
}

/* End of file Content_model.php */
