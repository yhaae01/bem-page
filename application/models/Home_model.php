<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function getbph()
    {
        return $this->db->get('tb_bph')->result();
    }

    public function getkemenko()
    {
        return $this->db->get('tb_kemenko')->result();
    }

    public function getkemenag()
    {
        return $this->db->get('tb_kemenag')->result();
    }

    public function getkemendagri()
    {
        return $this->db->get('tb_kemendagri')->result();
    }

    public function getkemendikbud()
    {
        return $this->db->get('tb_kemendikbud')->result();
    }

    public function getkemenkominfo()
    {
        return $this->db->get('tb_kemenkominfo')->result();
    }

    public function getkemenlu()
    {
        return $this->db->get('tb_kemenlu')->result();
    }

    public function getkemenor()
    {
        return $this->db->get('tb_kemenor')->result();
    }
}

/* End of file Home_model.php */
