<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentWork extends CI_Controller {

    public function index()
    {
		$this->load->model('AllSubject_Model');
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Config_Model');

        $data['semester'] = $this->CurrentSemester_Model->getSemester();
        if ($data['semester'] != null) {
            $data['subject'] = $this->AllSubject_Model->getSubjectWithCountSection($data['semester']->Semester_ID);
        } else {
            $data['subject'] = null;
        }
        $president = $this->Config_Model->getConfig("president");
        if(count($president) > 0){
            $data['president'] = $president[0];
        }
        $vice_president = $this->Config_Model->getConfig('vice_president');
        if(count($vice_president) > 0){
            $data['vice_president'] = $vice_president[0];
        }
        $data['year'] = date("Y");
        $data['month'] = date("m");
        $data['day'] = date("d");
        $this->load->view('student_work', $data);
    }

}

/* End of file StudentWork.php */
?>