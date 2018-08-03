<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class DetailData extends CI_Controller {

    public function index()
    {
        $this->load->model('Page2_Model');
        $this->load->model('Room_Model');
        $this->load->model('Semester_Model');
        $data['semester'] = $this->Semester_Model->getAllSemester();
        $data['room'] = $this->Room_Model->getAllRoom();
        $data['subject'] = $this->Page2_Model->getAllSubject();
        $this->load->view('detail_data', $data);
    }

    public function save()
    { 
        $this->load->model('Section_Model');
        $time = $this->input->post('Section_time');
        $time = explode('-', $time);
        $data = array(
            'Subject_id' => $this->input->post('Subject_id'),
            'Section_name' => $this->input->post('Section_name'),
            'Room_id' => $this->input->post('Room_id'),
            'Semester_ID' => $this->input->post('Semester_ID'),
            'Section_id' => $this->input->post('Section_id'),
            'Section_day' => $this->input->post('Section_day'),
            'Section_start_time' => $time[0],
            'Section_end_time' => $time[1],
            'Teacher_fullname' => $this->input->post('Teacher_fullname'),
            'Section_student_quantity' => $this->input->post('Section_student_quantity')
        );
        $result = $this->Section_Model->insertSection($data);
        if($result){
            echo '<script>alert("เพิ่มรายวิชาสำเร็จ");</script>';
        } else {
            echo '<script>alert("มีรายวิชานี้ในระบบแล้ว");window.history.go(-1);</script>';
        }
        redirect('ImportData/index/'.$data['Subject_id'].'/'.$data['Semester_ID'], 'refresh');
    }



}

/* End of file Controllername.php */


?>
  