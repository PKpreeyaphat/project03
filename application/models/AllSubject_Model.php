<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class AllSubject_Model extends CI_Model {

    public function getSubject()
    {
        $query = $this->db->get('Subject');
        return $query->result();
    }

}

/* End of file AllSubject_Model.php */


?>