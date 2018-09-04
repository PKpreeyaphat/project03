<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AdminRegister extends CI_Controller {

    public function index($id)
    {
        $this->load->model('Student_Model');
        $this->load->model('AllSubject_Model');
        $this->load->model('CurrentSemester_Model');

        $data['student'] = $this->Student_Model->getAllStudent();
        $data['subject'] = $this->AllSubject_Model->getSubjectById($id);
        $data['semester'] = $this->CurrentSemester_Model->getSemester();
        $data['allsubject'] = $this->AllSubject_Model->getSubject();
        
        $this->load->view('admin_register', $data);
    }

    public function getStudent(){
        $this->load->model('Student_Model');
        $data = $this->input->post('data');
        if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
        }
        $rs = $this->Student_Model->getGradeSubject($data["Student_id"],$data['Subject_id'],$data['Semester_ID']);
        if(count($rs) > 0){
            $student = $rs[0];
            echo json_encode($student);
        }
    }

    public function getRegister()
    {
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Student_Model');
        $data = $this->input->post('data');
        if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
        }
        
        $register = $this->Student_Model->getRegisterList($data["Student_id"],$data['Subject_id'],$data['Semester_ID']);
        echo json_encode($register);
    }

}

/* End of file AllSubject.php */



?>