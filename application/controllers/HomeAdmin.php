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
        $this->load->model('Semester_Model');
        $subject = $this->input->post('subject_id');
        $students = $this->AllSubject_Model->getRegisterStudentBySubject($subject, $this->Semester_Model->Last()[0]->Semester_ID);
        echo json_encode($students);
    }

    public function updateStatus($studentID, $status)
    {
        $data = array('status' => $status);
        $this->load->model('AllSubject_Model');
        $students = $this->AllSubject_Model->updateStatus($studentID, $data, $this->Semester_Model->Last()[0]->Semester_ID);
        redirect('HomeAdmin','refresh');
    }

    public function updateStatus_r()
    {
        $data_r = $this->input->post('data');
        for($i = 0; $i < count($data_r); $i++){
            $studentID = $data_r[$i]['Student_id'];
            $data = array('status' => $data_r[$i]['status']);
            $this->load->model('AllSubject_Model');
            $students = $this->AllSubject_Model->updateStatus($studentID, $data, $this->Semester_Model->Last()[0]->Semester_ID);
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }

}

/* End of file Page1.php */

?>
