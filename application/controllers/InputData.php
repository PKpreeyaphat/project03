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
    
    public function insert()
    {
        $data = array(
            'Subject_id' => $this->input->post('Subject_id'),
            'Subject_name' => $this->input->post('Subject_name'),
            'Subject_thai_name' => $this->input->post('Subject_thai_name'),
            'Subject_credit' => $this->input->post('Subject_credit'),
            'Subject_amount' => $this->input->post('Subject_amount')
        );

        $this->load->model('Subject_Model');
        $result = $this->Subject_Model->insertSubject($data);

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
