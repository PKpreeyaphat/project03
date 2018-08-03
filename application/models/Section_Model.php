<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Section_Model extends CI_Model {

    public function insertSection($data)
    {
      return $this->db->insert('Section', $data);
    }

    public function getTime($data)
    {
        $this->db->where('Section.Subject_id', $data['Subject_id']);
        $this->db->where('Section.Semester_ID', $data['Semester_ID']);
        if(isset($data['Room_id']) && $data['Room_id'] != 'All'){
            $this->db->where('Section.Room_id', $data['Room_id']);
        }
        $res = $this->db->get('Section');
        return $res->result();
    }

    public function getSectionByID($id)
    {
        $this->db->join('Subject', 'Subject.Subject_id = Section.Subject_id', 'left');
        $this->db->where('Subject.Subject_id', $id);
        $res = $this->db->get('Section');
        return $res->result();
    }
    
    public function getRegisterSubject($data)
    {
        $this->db->select('*, 
            (select (select Config_value from Config where Config_name = "MaxHour") - COUNT(*) * 2 
            from StudentWork_tmp tmp 
            inner join Section on Section.Section_id = tmp.Section_id AND Section.Subject_id = tmp.Subject_id
            where tmp.Student_id = Student.Student_id AND Section.Semester_ID = RegisterSubject.Semester_ID) 
            AS RemainHour
        ');
        $this->db->join('Student', 'Student.Student_id = RegisterSubject.Student_id');
        $this->db->where('RegisterSubject.Subject_id', $data['Subject_id']);
        $this->db->where('RegisterSubject.Semester_ID', $data['Semester_ID']);
        $this->db->where('RegisterSubject.Status', '1');
        $res = $this->db->get('RegisterSubject');
        return $res->result();
    }

    public function getStudent($data)
    {
        $this->db->join('Student', 'Student.Student_id = RegisterSubject.Student_id');
        $this->db->where('RegisterSubject.Subject_id', $data['Subject_id']);
        $this->db->where('RegisterSubject.Semester_ID', $data['Semester_ID']);
        $res = $this->db->get('RegisterSubject');
        return $res->result();
    }

    public function getRoom($id, $semester_id)
    {
        $this->db->select('Section.Room_id, Room.Room_name, Room.Room_qty');
        $this->db->join('Room', 'Room.Room_id = Section.Room_id');
        $this->db->where('Section.Subject_id', $id);
        $this->db->where('Section.Semester_ID', $semester_id);
        $this->db->group_by('Section.Room_id,Room.Room_qty'); 
        $this->db->order_by('Section.Room_id'); 
        $res = $this->db->get('Section');
        return $res->result();
    }


}

/* End of file Section_Model.php */


?>