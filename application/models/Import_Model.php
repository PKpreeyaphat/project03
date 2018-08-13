<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Import_Model extends CI_Model {

    public function insert($data)
    {
        $this->db->trans_start();
        $this->db->insert('Section', $data);
        $this->db->trans_complete();
    }

    public function getAllSection($id)
    {
        $this->db->join('Room', 'Room.Room_id = Section.Room_id', 'left');
        $this->db->order_by('Section_id', 'ASC');
        $this->db->where('Subject_id', $id);
        $query = $this->db->get('Section');
        return $query->result();
    }

    public function getAllSectionBySemester($id, $semester_id)
    {
        $this->db->join('Room', 'Room.Room_id = Section.Room_id', 'left');
        $this->db->order_by('Section_id', 'ASC');
        $this->db->where('Subject_id', $id);
        $this->db->where('Semester_ID', $semester_id);
        $query = $this->db->get('Section');
        return $query->result();
    }

    public function getSection($subjectID, $semesterID, $sectionID)
    {
        $this->db->where('Subject_id', $subjectID);
        $this->db->where('Semester_ID', $semesterID);
        $this->db->where('Section_id', $sectionID);
        $query = $this->db->get('Section');
        return $query->result()[0];
    }

    public function deleteAllSection()
    {
        $this->db->query("DELETE FROM Section WHERE 1");
    }

}

/* End Page1_Model.php */

?>
