<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

    public function index()
    {
		$this->load->model("Table_Model");
		$this->load->model('AllSubject_Model');
		$this->load->model('CurrentSemester_Model');
        $Semester = $this->CurrentSemester_Model->getSemester();
        if ($Semester != null) {
            $data['semester'] = $Semester;
        } else {
            $data['semester'] = null;
        }
        $data['subject'] = $this->AllSubject_Model->getSubject();
    	$data['getRoom'] = $this->Table_Model->getRoom();
        $this->load->view('table_data',$data);
        
	}

	public function saveTmptoWork()
	{
		$this->load->model('StudentWork_Model');
		$data = $this->input->post('data');
		$this->StudentWork_Model->tmp2Work($data);
	}

	public function loadStudentWork_tmp()
	{
		$this->load->model('StudentWork_Model');
		$this->load->model('CurrentSemester_Model');
		$data = $this->input->post('data');
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
		$rs = $this->StudentWork_Model->getWork_tmp($data);
		echo json_encode($rs);
	}

	public function loadStudentWork()
	{
		$this->load->model('StudentWork_Model');
		$this->load->model('CurrentSemester_Model');
		$data = $this->input->post('data');
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
		$rs = $this->StudentWork_Model->getWork($data);
		echo json_encode($rs);
	}

	public function saveStudentWork_tmp()
	{
		$this->load->model('StudentWork_Model');
		$this->load->model('Config_Model');
		
		$response = array('isError' => false, 'Message' => '');

		$data = $this->input->post('data');
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
		$stu_hour = $this->StudentWork_Model->getHour($data['Student_id'], $data['Semester_ID']);
		$num = $this->StudentWork_Model->getNumStudent($data['Subject_id'], $data['Section_id'], $data['Semester_ID']);
		$maxhour = $this->Config_Model->getHour();
		if($num >= 2){
			$response['isError'] = true; 
			$response['Message'] = 'จำนวน TA เกินที่กำหนด'; 
		}
		else if($stu_hour >= $maxhour){
			$response['isError'] = true; 
			$response['Message'] = 'ชั่วโมงการทำงานเกินที่กำหนด'; 
		}
		else{
			unset($data['Semester_ID']);
			$this->StudentWork_Model->save_tmp($data);
		}
		echo json_encode($response);
	}

	public function removeStudentWork_tmp()
	{
		$this->load->model('StudentWork_Model');
		$data = $this->input->post('data');
		$this->StudentWork_Model->delete_tmp($data);
	}

	public function loadSection()
	{
		$this->load->model('Section_Model');
		$data = $this->input->post('data');
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
		$rs = $this->Section_Model->getTime($data);
		echo json_encode($rs);
	}

	public function loadFreeTime()
	{
		$this->load->model('Register_Model');
		$data = $this->input->post('data');
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
		$rs = $this->Register_Model->getFreeTime($data);
		echo json_encode($rs);
	}

	public function loadRoom()
	{
		$this->load->model('Section_Model');
		$data = $this->input->post('data');
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
		$rs = $this->Section_Model->getRoom($data['id'], $data['Semester_ID']);
		echo json_encode($rs);
	}
	
	public function loadStudent()
	{
		$this->load->model('CurrentSemester_Model');
		$this->load->model('Section_Model');
		$data = $this->input->post('data');
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
		$rs = $this->Section_Model->getRegisterSubject($data);
		echo json_encode($rs);
	}

    public function loadTable(){
    	//วันเวลาของแต่ละวิชาที่ใช้ห้องนี้
    	//รายชื่อนิสิต
    	
    	$RoomID = $this->input->post('Room_id');
    	$this->load->model('Table_Model');
    	$data['Room'] = $this->Table_Model->getRoomByID($RoomID);
    	if($data['Room'] != null){
    		$this->load->view("loadTable_View");	
    	}else{?>
    		<h3><center>ไม่มีข้อมูลห้องเรียน</center></h3>
<?php 	}    	
    }

}

/* End of file Page4.php */

//$this->load->view('page4_data');
?>

