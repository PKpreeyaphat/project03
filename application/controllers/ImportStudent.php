<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ImportStudent extends CI_Controller
{

    public function index()
    {
        $this->load->model('AllSubject_Model');
        $this->load->model('Semester_Model');
        $data['subject'] = $this->AllSubject_Model->getSubject();
        $data['semester'] = $this->Semester_Model->getAllSemester();
        $this->load->view('import_student', $data);
    }

    // public function updateStatus($studentID, $status)
    // {
    //     $data = array('status' => $status);
    //     $this->load->model('AllSubject_Model');
    //     $students = $this->AllSubject_Model->updateStatus($studentID, $data);
    //     redirect('ImportStudent','refresh');
    // }

    public function Students()
    {
        $this->load->model('AllSubject_Model');
        $this->load->model('Semester_Model');
        $subject = $this->input->post('subject_id');
        $semester = $this->input->post('semester_id');
        $students = $this->AllSubject_Model->getRegisterStudentApprovedBySubject($subject, $semester);
        echo json_encode($students);
    }

    public function getStudentInfo($subject, $semester, $studentID)
    {
        $this->load->model('Student_Model');
        echo json_encode($this->Student_Model->getStudentByID($subject, $semester, $studentID)[0]);
    }

}

/* End of file ImportStudent.php */
