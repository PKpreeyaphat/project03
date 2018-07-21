<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

    public function index()
    {
        $this->load->model('AllSubject_Model');
        $data['subject'] = $this->AllSubject_Model->getSubject();
        $this->load->view('home_admin', $data);
    }

    public function Students()
    {
        $this->load->model('AllSubject_Model');
        $subject = $this->input->post('subject_id');
        $students = $this->AllSubject_Model->getRegisterStudentBySubject($subject);
        echo json_encode($students);
    }

    public function updateStatus($studentID, $status)
    {
        $data = array('status' => $status);
        $this->load->model('AllSubject_Model');
        $students = $this->AllSubject_Model->updateStatus($studentID, $data);
        redirect('HomeAdmin','refresh');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }

}

/* End of file Page1.php */

?>
