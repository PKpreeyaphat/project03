<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class HomeStudent extends CI_Controller {

    public function index()
    {
        
        $this->load->view('home_student');

    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('Login');
        
    }


}

/* End of file HomeStudent.php */


?>

