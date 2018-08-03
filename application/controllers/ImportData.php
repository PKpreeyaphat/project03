<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ImportData extends CI_Controller
{
    public function index($id, $semester_id = null)
    {
        $this->load->model('Import_Model');
        $this->load->model('Semester_Model');
        $this->load->model('CurrentSemester_Model');
        if(!isset($semester_id) || $semester_id == null){
            $semester_id = $this->CurrentSemester_Model->getSemester_ID();
        }
        $data['Subject_id'] = $id;
        $data['Semester_ID'] = $semester_id;
        $data['section'] = $this->Import_Model->getAllSectionBySemester($id, $semester_id);
        $data['semester'] = $this->Semester_Model->getAllSemester();
        $this->load->view('import_data', $data);
    }

    public function getSectionInfo($id)
    {
        $this->load->model('Import_Model');
        echo json_encode($this->Import_Model->getSection($id));
    }

    public function uploadFile()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['overwrite'] = true;
        $config['max_filename_increment'] = 1;
        $config['file_name'] = 'subject_data';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('excel_file')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('import_data', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->library('CSVReader');
            $csvData = $this->csvreader->parse_file('./uploads/subject_data.csv');

            if (!isset($csvData[0]["Section"])) {
                echo '<script>alert("นำเข้ารายวิชาไม่สำเร็จ กรุณาตรวจสอบไฟล์ CSV อีกครั้ง");</script>';
                redirect('AllSubject', 'refresh');
            }

            $this->load->model('Import_Model');
            $this->load->model('Page2_Model');
            $this->load->model('Room_Model');
            $this->load->model('Semester_Model');

            if (sizeof($this->Room_Model->getAllRoom()) == 0){
                echo '<script>alert("กรุณานำเข้าห้องปฏิบัติการก่อน!!");</script>';
                redirect('ImportRoom', 'refresh');
            }

            $data = array(
                'Semester_Name' => $this->input->post('Semester_Name'),
                'Semester_Year' => $this->input->post('Semester_Year'), 
                'Semester_Start' => $this->input->post('Semester_Start'),
                'Semester_Stop' => $this->input->post('Semester_Stop'), 
            );
    
            $this->load->model('Page2_Model');
            $this->Page2_Model->insertSemester($data);
            $result = $this->Page2_Model->getSemester($data)[0];

            $data = array(
                'Semester_ID' => $result->Semester_ID,
                'isOpen' => '0'
            );
    
            $this->CurrentSemester_Model->save($data);

            foreach ($csvData as $row) {

                if (sizeof($this->Page2_Model->getSubjectByID($row["ID"])) == 0){
                    $data = array(
                        'Subject_id' => $row["ID"],
                        'Subject_name' => substr($row["Subject"], 0, 45),
                    );

                    $this->Page2_Model->insertSubject($data);
                }

                $pivotNewLine = strpos($row["Day"], "\n", 0);

                $firstDay = trim(substr($row["Day"], 0, $pivotNewLine));
                $secondDay = trim(substr($row["Day"], $pivotNewLine));

                $pivotNewLine = strpos($row["Time"], "\n", 0);

                $firstStatement = trim(substr($row["Time"], 0, $pivotNewLine));

                $pivotSpace = strpos($firstStatement, " ", 0);
                $firstRoom = trim(substr($firstStatement, $pivotSpace));
                $firstTime = trim(substr($firstStatement, 0, $pivotSpace));

                $pivotMinus = strpos($firstTime, "-", 0);
                $firstStartTime = trim(substr($firstTime, 0, $pivotMinus));
                $firstEndTime = trim(substr($firstTime, $pivotMinus + 1));

                $secondStatement = trim(substr($row["Time"], $pivotNewLine));

                $pivotSpace = strpos($secondStatement, " ", 0);
                $secondRoom = trim(substr($secondStatement, $pivotSpace));
                $secondTime = trim(substr($secondStatement, 0, $pivotSpace));

                $pivotMinus = strpos($secondTime, "-", 0);
                $secondStartTime = trim(substr($secondTime, 0, $pivotMinus));
                $secondEndTime = trim(substr($secondTime, $pivotMinus + 1));

                $pivotComma = strpos($row["Teacher"], ",", 0);
                if($pivotComma === false){
                    $teacher = trim($row["Teacher"]);
                } else {
                    $teacher = trim(substr($row["Teacher"], $pivotComma + 1));
                }

                if (sizeof($room = $this->Room_Model->getRoomByName($firstRoom)) > 0) {
                    $data = array(
                        'Subject_id' => $row["ID"],
                        'Section_id' => $row["Section"],
                        'Semester_ID' => $this->Semester_Model->Last()[0]->Semester_ID,
                        'Section_name' => substr($row["Subject"], 45),
                        'Section_student_quantity' => $row["Student"],
                        'Section_day' => $firstDay,
                        'Section_start_time' => $firstStartTime,
                        'Section_end_time' => $firstEndTime,
                        'Teacher_fullname' => $teacher,
                        'Room_id' => $room[0]->Room_id
                    );

                    $this->Import_Model->insert($data);
                }
                
                if (sizeof($room = $this->Room_Model->getRoomByName($secondRoom)) > 0) {
                    $data = array(
                        'Subject_id' => $row["ID"],
                        'Section_id' => $row["Section"],
                        'Semester_ID' => $this->Semester_Model->Last()[0]->Semester_ID,
                        'Section_name' => substr($row["Subject"], 45),
                        'Section_student_quantity' => $row["Student"],
                        'Section_day' => $secondDay,
                        'Section_start_time' => $secondStartTime,
                        'Section_end_time' => $secondEndTime,
                        'Teacher_fullname' => $teacher,
                        'Room_id' => $room[0]->Room_id
                    );

                    $this->Import_Model->insert($data);
                }
            }

            redirect('ImportData/index/'.$row["ID"],'refresh');
        }

    }

}

/* End of file ImportData.php */
