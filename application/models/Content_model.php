<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Content_model extends CI_Model
{
    public function insertKetuaBph()
    {
        $gambar = $this->upload->data();

        $data = [
            'nm_ketua' => $this->input->post('nm_ketua'),
            'img_ketua' => $gambar['file_name']
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan.
            </div>'
        );
        redirect('content/bph');
    }

    public function insertWakilBph()
    {
        $gambar = $this->upload->data();

        $data = [
            'nm_wakil' => $this->input->post('nm_wakil'),
            'img_wakil' => $gambar['file_name']
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan.
            </div>'
        );
        redirect('content/bph');
    }

    public function insertAnggota1Bph()
    {
        $gambar = $this->upload->data();

        $data = [
            'nm_anggota1' => $this->input->post('nm_anggota1'),
            'img_anggota1' => $gambar['file_name']
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan.
            </div>'
        );
        redirect('content/bph');
    }

    public function insertAnggota2Bph()
    {
        $gambar = $this->upload->data();

        $data = [
            'nm_anggota2' => $this->input->post('nm_anggota2'),
            'img_anggota2' => $gambar['file_name']
        ];

        $this->db->insert('tb_bph', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan.
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
