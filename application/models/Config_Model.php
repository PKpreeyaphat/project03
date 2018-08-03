<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Config_Model extends CI_Model {

    public function insert($data)
    {
        $this->db->insert('Config', $data);
    }

    public function save($data)
    {
        if(count($this->getConfig($data['Config_name'])) == 0){
            $this->insert($data);
        }
        else{
            $this->db->where('Config_name', $data['Config_name']);
            $this->db->update('Config', $data);
        }
    }

    public function getHour()
    {
        $sel = $this->getConfig('MaxHour');
        if(count($sel) > 0){
            return $sel[0]->Config_value;
        }
        return 99;
    }

    public function getConfig($name)
    {
        $this->db->where('Config_name', $name);
        $query = $this->db->get('Config');
        return $query->result();
    }

}

/* End Config_Model.php */

?>
