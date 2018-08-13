<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class AllSubject_Model extends CI_Model {

    public function getSubject()
    {
        $query = $this->db->get('Subject');
        return $query->result();
    }

    public function getSubjectWithCountSection($semester_id)
    {
        $query_str = "SELECT sub.*, 
        (select IFNULL(SUM(case when sec.Section_id != 4 then 1 else 0 end),0) from Section sec where sec.Semester_ID = ? AND sec.Subject_id = sub.Subject_id) as GroupNomal ,
        (select IFNULL(SUM(case when sec.Section_id = 4 then 1 else 0 end),0) from Section sec where sec.Semester_ID = ? AND sec.Subject_id = sub.Subject_id) as GroupSpecial
        FROM `Subject` sub";
        $query = $this->db->query($query_str, array($semester_id, $semester_id));
        return $query->result();
    }

    public function getUnRegister($student_id, $semester_id)
    {
        $query_str = "SELECT sj.Subject_id, sj.Subject_name, reg.Student_id
            from Subject sj LEFT JOIN Register reg ON sj.Subject_id = reg.Subject_id AND reg.Student_id = ? 
            AND Semester_ID = ?
            GROUP BY sj.Subject_id, sj.Subject_name, reg.Student_id";
        $query = $this->db->query($query_str, array($student_id, $semester_id));
        return $query->result();
    }

    public function getStudent($subject_id)
    {
        $query_str="SELECT stu.* FROM Student stu NATURAL JOIN Register reg
            WHERE reg.Subject_id = ?
            GROUP BY stu.Student_id, stu.Student_firstname, stu.Student_lastname, stu.Student_grade,
            stu.Student_email,stu.Student_tel";
        $query = $this->db->query($query_str, array($subject_id));
        return $query->result();
    }

    public function getRegisterStudentBySubject($subject_id, $semester_id)
    {
        $this->db->join('Student', 'Student.Student_id = RegisterSubject.Student_id', 'left');
        $this->db->where('Subject_id', $subject_id);
        $this->db->where('Semester_ID', $semester_id);
        $this->db->where('Status', 0);
        $query = $this->db->get('RegisterSubject');
        return $query->result();
    }

    public function getRegisterStudentApprovedBySubject($subject_id, $semester_id)
    {
        $this->db->join('Student', 'Student.Student_id = RegisterSubject.Student_id', 'left');
        $this->db->where('Subject_id', $subject_id);
        $this->db->where('Semester_ID', $semester_id);
        $this->db->where('Status', 1);
        $query = $this->db->get('RegisterSubject');
        return $query->result();
    }

    public function updateStatus($studentID, $data, $semester_id)
    {
        $this->db->where('Student_id', $studentID);
        $this->db->where('Semester_ID', $semester_id);
        $this->db->update('RegisterSubject', $data);
    }

    public function getSubjectById($id)
    {
        $query = $this->db->where('Subject_id', $id);
        $query = $this->db->get('Subject');
        $result = $query->result();
        return (count($result) == 1)? $result[0] : null;
    }

}

/* End of file AllSubject_Model.php */


?>