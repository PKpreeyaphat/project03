<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AllSubject extends CI_Controller {

    public function index()
    {
        $this->load->model('AllSubject_Model');
        $this->load->model('CurrentSemester_Model');
        $Semester = $this->CurrentSemester_Model->getSemester();
        if ($Semester != null) {
            $data['semester'] = $Semester;
        } else {
            $data['semester'] = null;
        }
        $data['subject'] = $this->AllSubject_Model->getSubject();
        $this->load->view('all_subject', $data);

    }

}

/* End of file AllSubject.php */



?>