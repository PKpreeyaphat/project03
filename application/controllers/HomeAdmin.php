<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class HomeAdmin extends CI_Controller {

    public function index()
    {
        
        $this->load->view('home_admin');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        
        redirect('Login');
        
    }

}

/* End of file Page1.php */

?>
