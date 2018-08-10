 <?php

defined('BASEPATH') or exit('No direct script access allowed');

class InputData extends CI_Controller
{

    public function index()
    {
        $this->load->view('input_data');
    }

    public function Semester()
    {
        $this->load->view('input_semester');
    }

    public function insertSemester()
    {
        $data = array(
            'Semester_Name' => $this->input->post('Semester_Name'),
            'Semester_Year' => $this->input->post('Semester_Year'), 
            'Semester_Start' => $this->input->post('Semester_Start'),
            'Semester_Stop' => $this->input->post('Semester_Stop')
        );

        $this->load->model('Page2_Model');
        $this->Page2_Model->insertSemester($data);
        $result = $this->Page2_Model->getSemester($data)[0];

        if($result){
            echo '<script>alert("เพิ่มปีการศึกษาสำเร็จ");</script>';
        } else {
            echo '<script>alert("มีปีการศึกษานี้ในระบบแล้ว");</script>';
        }

        redirect('AllSubject', 'refresh');
    }

    public function insert()
    {
        $data = array(
            'Subject_id' => $this->input->post('Subject_id'),
            'Subject_name' => $this->input->post('Subject_name')
        );

        $this->load->model('Page2_Model');
        $result = $this->Page2_Model->insertSubject($data);

        if($result){
            echo '<script>alert("เพิ่มรายวิชาสำเร็จ");</script>';
        } else {
            echo '<script>alert("มีรายวิชานี้ในระบบแล้ว");</script>';
        }

        redirect('AllSubject', 'refresh');
    }

    public function goBack()
    {
        redirect('AllSubject','location');
    }

}

/* End of file Controllername.php */
