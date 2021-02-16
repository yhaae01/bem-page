<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Content_model extends CI_Model {

    public function getVisi()
    {
        return $this->db->get_where('konten', ['id_konten' => 1])->result();
    }
    public function getMisi()
    {
        return $this->db->get_where('konten', ['id_konten' => 2])->result();
    }

}

/* End of file Content_model.php */

?>