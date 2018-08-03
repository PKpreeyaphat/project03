<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page2_Model extends CI_Model
{

    public function insertSubject($data)
    {
        $insert = $this->db->insert('Subject', $data);
        return $insert;
    }

    public function getSemester($data)
    {
        $this->db->where('Semester_Name', $data['Semester_Name']);
        $this->db->where('Semester_Year', $data['Semester_Year']);
        $query = $this->db->get('Semester');
        return $query->result();
    }

    public function insertSemester($data)
    {
        $sel = $this->getSemester($data);
        if(count($sel) == 0){
            $insert = $this->db->insert('Semester', $data);
            return $insert;
        }
        else{
            $this->db->where('Semester_Name', $data['Semester_Name']);
            $this->db->where('Semester_Year', $data['Semester_Year']);
            $update = $this->db->update('Semester', $data);
            return $update;
        }
    }

    public function getAllSubject()
    {
        $res = $this->db->get('Subject');
        return $res->result();
    }

    public function getSubjectByID($id)
    {
        $this->db->where('Subject_id', $id);
        $query = $this->db->get('Subject');
        return $query->result();        
    }

    public function deleteAllSubject()
    {
        $this->db->query("DELETE FROM Subject WHERE 1");
    }

}

/* End of file Page2_Model.php */
