<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentWork_Model extends CI_Model {

    public function insert_tmp($data)
    {
        $this->db->insert('StudentWork_tmp', $data);
    }

    public function insert($data)
    {
        $this->db->insert('StudentWork', $data);
    }

    public function getNumStudent($subject_id, $section_id, $semester)
    {
        $sql = "SELECT count(*) as Total FROM `Section` a 
                INNER JOIN StudentWork_tmp b on a.Subject_id = b.Subject_id AND a.Section_id = b.Section_id
                WHERE b.Subject_id = ? and b.Section_id = ? and Semester_ID = ?";
                $res = $this->db->query($sql, array($subject_id, $section_id, $semester));
        return $res->result()[0]->Total;
    }

    public function getHour($student, $semester)
    {
        $sql = "SELECT count(*) * 2 as TotalHour FROM `Section` a 
            INNER JOIN StudentWork_tmp tmp ON a.Section_id = tmp.Section_id AND a.Subject_id = tmp.Subject_id
            where tmp.Student_id = ? and a.Semester_ID = ?";
        $res = $this->db->query($sql, array($student, $semester));
        return $res->result()[0]->TotalHour;
    }

    public function tmp2Work($data)
    {
        $select_tmp = $this->getWork_tmp($data);
        // clear
        $this->deleteBySubject($data);
        foreach($select_tmp as $row){
            $insert = array(
                'sw_Section_id' => $row->Section_id,
                'sw_Student_id' => $row->Student_id,
                'sw_Subject_id' => $row->Subject_id,
            );
            $this->insert($insert);
        }
    }

    public function getWork_tmp($data)
    {
        $this->db->join('Section', 'Section.Section_id = StudentWork_tmp.Section_id AND 
                    StudentWork_tmp.Subject_id = Section.Subject_id');
        $this->db->join('Room', 'Room.Room_id = Section.Room_id');
        $this->db->join('Student', 'Student.Student_id = StudentWork_tmp.Student_id');
        $this->db->where('Section.Subject_id', $data['Subject_id']);
        $this->db->where('Section.Semester_ID', $data['Semester_ID']);
        $res = $this->db->get('StudentWork_tmp');
        return $res->result();
    }

    public function getWork($data)
    {
        $this->db->join('Section', 'Section.Section_id = sw_Section_id AND 
                    Section.Subject_id = sw_Subject_id');
        $this->db->join('Room', 'Room.Room_id = Section.Room_id');
        $this->db->join('Student', 'Student.Student_id = StudentWork.sw_Student_id');
        $this->db->join('RegisterSubject', 'RegisterSubject.Student_id = Student.Student_id AND 
                    RegisterSubject.Subject_id = sw_Subject_id AND RegisterSubject.Semester_ID = Section.Semester_ID');
        $this->db->where('Section.Subject_id', $data['Subject_id']);
        $this->db->where('Section.Semester_ID', $data['Semester_ID']);
        if(isset($data['Degree'])){
            $this->db->where('RegisterSubject.Degree', $data['Degree']);
        }
        $res = $this->db->get('StudentWork');
        return $res->result();
    }

    public function countWork($data)
    {
        $this->db->join('RegisterSubject', 'RegisterSubject.Student_id = sw_Student_id');
        $this->db->where('RegisterSubject.Subject_id', $data['Subject_id']);
        $this->db->where('RegisterSubject.Semester_ID', $data['Semester_ID']);
        $this->db->where('RegisterSubject.Degree', $data['Degree']);
        $res = $this->db->get('StudentWork');
        return count($res->result());
    }

    public function delete_tmp($data)
    {
        $this->db->where('Student_id', $data['Student_id']);
        $this->db->where('Section_id', $data['Section_id']);
        $this->db->where('Subject_id', $data['Subject_id']);
        $res = $this->db->delete('StudentWork_tmp');
    }

    public function delete($data)
    {
        $this->db->where('sw_Student_id', $data['sw_Student_id']);
        $this->db->where('sw_Section_id', $data['sw_Section_id']);
        $this->db->where('sw_Subject_id', $data['sw_Subject_id']);
        $res = $this->db->delete('StudentWork');
    }

    public function deleteBySubject($data)
    {
        $this->db->where('sw_Subject_id', $data['Subject_id']);
        $res = $this->db->delete('StudentWork');
    }

    public function get_tmp($data)
    {
        $this->db->where('Student_id', $data['Student_id']);
        $this->db->where('Section_id', $data['Section_id']);
        $this->db->where('Subject_id', $data['Subject_id']);
        $res = $this->db->get('StudentWork_tmp');
        return $res->result();
    }

    public function get($data)
    {
        $this->db->where('sw_Student_id', $data['Student_id']);
        $this->db->where('sw_Section_id', $data['Section_id']);
        $this->db->where('sw_Subject_id', $data['Subject_id']);
        $res = $this->db->get('StudentWork');
        return $res->result();
    }

    public function save_tmp($data)
    {
        $select = $this->get_tmp($data);
        if(count($select) == 0){
            $this->insert_tmp($data);
        }
    }

    public function save($data)
    {
        $select = $this->get($data);
        if(count($select) == 0){
            $this->insert($data);
        }
    }



}

/* End of file StudentWork_tmp.php */


?>