<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Config extends CI_Controller {
    public function MaxHour(){
        return 'MaxHour';
    }

    public function index()
    {
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Semester_Model');
		$this->load->model('AllSubject_Model');
        $this->load->model('Config_Model');

        $semester = $this->CurrentSemester_Model->getSemester();
        if ($semester != null) {
            $data['subject'] = $this->AllSubject_Model->getSubjectWithCountSection($semester->Semester_ID);
        } else {
            $data['subject'] = null;
        }
        // $last = $this->Semester_Model->Last();
        // if(count($last) > 0){
        //     $last = $last[0];
        //     if($semester->Semester_ID != $last->Semester_ID){
        //         $data = array(
        //             'Semester_ID' => $last->Semester_ID,
        //             'isOpen' => 0
        //         );
        //         $this->CurrentSemester_Model->save($data);
        //         $semester = $this->CurrentSemester_Model->getSemester();
        //     }
        // }
        $maxhour = $this->Config_Model->getConfig($this->MaxHour());
        if(count($maxhour) > 0){
            $data['maxhour'] = $maxhour[0];
        }
        $president = $this->Config_Model->getConfig("president");
        if(count($president) > 0){
            $data['president'] = $president[0];
        }
        $vice_president = $this->Config_Model->getConfig('vice_president');
        if(count($vice_president) > 0){
            $data['vice_president'] = $vice_president[0];
        }
        $labor1 = $this->Config_Model->getConfig('labor1');
        if(count($vice_president) > 0){
            $data['labor1'] = $labor1[0];
        }
        $labor2 = $this->Config_Model->getConfig('labor2');
        if(count($vice_president) > 0){
            $data['labor2'] = $labor2[0];
        }
        $hourlabor = $this->Config_Model->getConfig('hourlabor');
        if(count($vice_president) > 0){
            $data['hourlabor'] = $hourlabor[0];
        }
        $data['semester'] = $semester;
        $data['allsemester'] = $this->Semester_Model->getAllSemester();
        $data['year'] = date("Y");
        $data['month'] = date("m");
        $data['day'] = date("d");
        $this->load->view('config_view', $data);
    }

    public function saveConfigDoc()
    {
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Config_Model');
        $this->load->model('Subject_Model');
        $data = $this->input->post('data');
        foreach ( $data as $key => $value ){
            $save = array(
                'Config_name' => $key,
                'Config_value'=> $value
            );
            $this->Config_Model->save($save);
        }
        //
        $semester = $this->CurrentSemester_Model->getSemester();
        $save = array(
            'Semester_Name' => $semester->Semester_Name,
            'Semester_Year'=> $semester->Semester_Year
        );
        $this->Subject_Model->insertSemester($save);
    }

    public function getQtyTA($subject)
	{
		$this->load->model('StudentWork_Model');
		$this->load->model('CurrentSemester_Model');
        $data1 = array(
            'Subject_id' => $subject,
            'Semester_ID' => $semester = $this->CurrentSemester_Model->getSemester()->Semester_ID,
            'Degree' => "1",
        );
        $data2 = array(
            'Subject_id' => $subject,
            'Semester_ID' => $semester = $this->CurrentSemester_Model->getSemester()->Semester_ID,
            'Degree' => "2",
        );
		if(!isset($data['Semester_ID'])){
			$data['Semester_ID'] = $this->CurrentSemester_Model->getSemester_ID();
		}
        $result1 = $this->StudentWork_Model->countWork($data1);
        $result2 = $this->StudentWork_Model->countWork($data2);
        $json = array('qtyTA1' => $result1, 'qtyTA2' => $result2);
		echo json_encode($json);
	}

    public function updateSubjectAmount($subject, $amount)
    {
        $data = array('Subject_amount' => $amount);
        $this->load->model('Subject_Model');
        $this->Subject_Model->updateAmount($subject, $data);
    }

    public function Doc(){
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Semester_Model');
		$this->load->model('AllSubject_Model');
        $this->load->model('Config_Model');

        $semester = $this->CurrentSemester_Model->getSemester();
        if ($semester != null) {
            $data['subject'] = $this->AllSubject_Model->getSubjectWithCountSection($semester->Semester_ID);
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
        $labor1 = $this->Config_Model->getConfig('labor1');
        if(count($vice_president) > 0){
            $data['labor1'] = $labor1[0];
        }
        $labor2 = $this->Config_Model->getConfig('labor2');
        if(count($vice_president) > 0){
            $data['labor2'] = $labor2[0];
        }
        $hourlabor = $this->Config_Model->getConfig('hourlabor');
        if(count($hourlabor) > 0){
            $data['hourlabor'] = $hourlabor[0];
        }
        $data['semester'] = $semester;
        $data['allsemester'] = $this->Semester_Model->getAllSemester();
        $data['year'] = date("Y");
        $data['month'] = date("m");
        $data['day'] = date("d");
        $this->load->view('manage_doc', $data);
    }

    public function insertSemester()
    {
        $data = array(
            'Semester_Name' => $this->input->post('Semester_Name'),
            'Semester_Year' => $this->input->post('Semester_Year'), 
            'Semester_Start' => $this->input->post('Semester_Start'),
            'Semester_Stop' => $this->input->post('Semester_Stop')
        );

        $this->load->model('Subject_Model');
        $this->Subject_Model->insertSemester($data);
        $result = $this->Subject_Model->getSemester($data)[0];

        if($result){
            echo '<script>alert("เพิ่มปีการศึกษาสำเร็จ");</script>';
        } else {
            echo '<script>alert("มีปีการศึกษานี้ในระบบแล้ว");</script>';
        }

        // index
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Semester_Model');
        $this->load->model('Config_Model');

        $semester = $this->CurrentSemester_Model->getSemester();
        $maxhour = $this->Config_Model->getConfig($this->MaxHour());
        if(count($maxhour) > 0){
            $data['maxhour'] = $maxhour[0];
        }
        $data['semester'] = $semester;
        $data['allsemester'] = $this->Semester_Model->getAllSemester();
        $this->load->view('config_view', $data);
    }
    
    public function OpenRegister()
    {
        $this->load->model('CurrentSemester_Model');
        $this->load->model('Config_Model');
        $this->load->model('Semester_Model');

        $isOpen = $this->input->get('isOpen');
        $maxHour = array( 
            'Config_name' => $this->MaxHour(),
            'Config_value'=> $this->input->get('maxHour')
        );
        $data = array(
            'Semester_ID' => $this->input->get('Semester_ID'),
            'isOpen' => $isOpen
        );

        $this->CurrentSemester_Model->save($data);
        $this->Config_Model->save($maxHour);
    }

    public function upload_file()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['max_filename_increment'] = 1;
        $config['file_name'] = 'student_data';
        $config['max_size'] = '2048';

        if (isset($_FILES['file']['name'])) {
            if (0 < $_FILES['file']['error']) {
                echo 'Error during file upload' . $_FILES['file']['error'];
            } else {
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('file')) {
                    echo $this->upload->display_errors();
                } else {
                    $this->load->library('CSVReader');
                    $studentData = $this->csvreader->parse_file('./uploads/student_data.csv');

                    $this->load->model('Student_Model');

                    if (!isset($studentData[0]["name"])) {
                        $json = array(
                            'status' => 1,
                            'msg' => "นำเข้ารายชื่อนิสิตไม่สำเร็จ กรุณาตรวจสอบไฟล์ CSV อีกครั้ง",
                        );
                    } else {
                        $json = array(
                            'status' => 2,
                            'msg' => "File successfully uploaded",
                            'data' => $studentData,
                        );

                        $this->session->set_userdata('tmp_data', $studentData);
                    }
                }
            }
        } else {
            $json = array(
                'status' => 0,
                'msg' => "กรุณาเลือกไฟล์ CSV ที่ต้องการนำเข้า",
            );
        }
        echo json_encode($json);
    }

    public function confirmData()
    {
        $studentData = $this->session->userdata('tmp_data');

        $this->load->model('Student_Model');
        // $this->Student_Model->deleteAllStudent();

        foreach ($studentData as $student) {

            $id = str_replace(" ", "", $student["ID"]);
            
            $name = trim($student["name"]);
            
            $pivotSpace = strpos($name, " ", 0);
            if($pivotSpace != 0) {
                $firstname = trim(substr($name, 0, $pivotSpace));
                $lastname = trim(substr($name, $pivotSpace));
            } else {
                $pivotSpace2 = strpos($name, "  ", 0);
                $firstname = trim(substr($name, 0, $pivotSpace2));
                $lastname = trim(substr($name, $pivotSpace2));
            }
            

            if ($this->notInArray($id)) {

                $data = array(
                    'Student_id' => $id,
                    'Student_firstname' => $firstname,
                    'Student_lastname' => $lastname
                );
                
                $this->Student_Model->insert($data);
            }
        }

        redirect('Config', 'refresh');
    }

    public function notInArray($studentID)
    {
        $this->load->model('Student_Model');
        $students = $this->Student_Model->getAllStudent();

        $bool = true;

        foreach ($students as $student) {
            if ($studentID == $student->Student_id) {
                $bool = false;
            }
        }

        return $bool;
    }

}

/* End of file Config.php */


?>