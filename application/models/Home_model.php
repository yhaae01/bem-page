<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{

    public function getbph()
    {
        return $this->db->get('tb_bph')->result();
    }
}

/* End of file Home_model.php */
