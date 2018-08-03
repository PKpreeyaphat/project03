<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class StudentWork extends CI_Controller {

    public function index()
    {
		$this->load->model('AllSubject_Model');
        $data['subject'] = $this->AllSubject_Model->getSubject();
        $this->load->view('student_work', $data);
    }

}

/* End of file StudentWork.php */
?>