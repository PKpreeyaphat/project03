<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HomeStudent extends CI_Controller
{

    public function index()
    {
        $this->load->model('CurrentSemester_Model');
        $Student_id = $this->session->userdata('user_id');
        $Semester = $this->CurrentSemester_Model->getSemester();
        $this->load->model('AllSubject_Model');
        if ($Semester != null) {
            $data['subject'] = $this->AllSubject_Model->getUnRegister($Student_id, $Semester->Semester_ID);
            $data['semester'] = $Semester;
        } else {
            $data['subject'] = null;
            $data['semester'] = null;
        }
        $this->load->view('home_student', $data);
    }

    public function SelectSubject()
    {
        $Subject_id = $this->input->post('id');
        $this->session->Subject_id = $Subject_id;
        $this->session->Semester_ID = $this->CurrentSemester_Model->getSemester_ID();
    }

    public function logout()
    {
        $this->session->sess_destroy();

        redirect('Login');

    }

}

/* End of file HomeStudent.php */
