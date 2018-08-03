<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ImportStudent extends CI_Controller
{

    public function index()
    {
        $this->load->model('AllSubject_Model');
        $this->load->model('Semester_Model');
        $data['students'] = $this->AllSubject_Model->getRegisterStudentApprovedBySubject('88510159', $this->Semester_Model->Last()[0]->Semester_ID);
        $this->load->view('import_student', $data);
    }

    // public function updateStatus($studentID, $status)
    // {
    //     $data = array('status' => $status);
    //     $this->load->model('AllSubject_Model');
    //     $students = $this->AllSubject_Model->updateStatus($studentID, $data);
    //     redirect('ImportStudent','refresh');
    // }

    public function getStudentInfo($id)
    {
        $this->load->model('Student_Model');
        echo json_encode($this->Student_Model->getStudentByID($id)[0]);
    }

}

/* End of file ImportStudent.php */
