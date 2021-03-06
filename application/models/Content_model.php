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

    public function insertkemenag()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_kemenag', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/kemenag');
    }

    public function deletekemenag($id)
    {
        $this->db->delete('tb_kemenag', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/kemenag');
    }

    public function insertKemenko()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_kemenko', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/kemenko');
    }

    public function deleteKemenko($id)
    {
        $this->db->delete('tb_kemenko', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/kemenko');
    }

    public function insertkemenor()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_kemenor', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/kemenor');
    }

    public function deletekemenor($id)
    {
        $this->db->delete('tb_kemenor', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/kemenor');
    }

    public function insertkemendagri()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_kemendagri', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/kemendagri');
    }

    public function deletekemendagri($id)
    {
        $this->db->delete('tb_kemendagri', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/kemendagri');
    }

    public function insertkemendikbud()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_kemendikbud', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/kemendikbud');
    }

    public function deletekemendikbud($id)
    {
        $this->db->delete('tb_kemendikbud', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/kemendikbud');
    }

    public function insertkemenlu()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_kemenlu', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/kemenlu');
    }

    public function deletekemenlu($id)
    {
        $this->db->delete('tb_kemenlu', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/kemenlu');
    }

    public function insertkemenkominfo()
    {
        $gambar = $this->upload->data();

        $data = [
            'name' => $this->input->post('name'),
            'image' => $gambar['file_name'],
            'position' => $this->input->post('position')
        ];

        $this->db->insert('tb_kemenkominfo', $data);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            Data ketua berhasil ditambahkan.
            </div>'
        );
        redirect('content/kemenkominfo');
    }

    public function deletekemenkominfo($id)
    {
        $this->db->delete('tb_kemenkominfo', ['id' => $id]);
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
            User berhasil dihapus.
            </div>'
        );
        redirect('content/kemenkominfo');
    }
}

/* End of file Content_model.php */
