<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login_form');
	}	
	
	public  function checklogin() {
		$user = trim($this->input->post('Username'));
		$pass = trim($this->input->post('Password'));
		if($user=="" || $pass==""){
			redirect('Login');
		}else{
        //---------------------------------------------------------
			define ("AD_ENABLED", 1, true);
			define ("AD_SERVER", "10.4.1.82", true);
			define ("AD_BASEDN", "ou=People,dc=buu,dc=ac,dc=th", true);
			define ("AD_FILTER", "(cn=XUID)", true);
			return ($x =  $this->check_with_ad($user, $pass));
        //---------------------------------------------------------
		}

	}

	public function check_with_ad ($user, $key) {

		$retval = 0;
		$vlan_no = 1;
		$network_id = 0;
		$ad = @ldap_connect("ldap://" . AD_SERVER);
		if ($ad && $user != "" && $key != "") {
			ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);
			$retval = 0;
			if (@ldap_bind($ad,"$user@buu.ac.th","$key")) {
				$filter = preg_replace("/XUID/", "$user", AD_FILTER);
				$result = ldap_search($ad, AD_BASEDN, $filter);
				$entries = ldap_get_entries($ad, $result);
				if (($split_index = strrpos($entries[0]['displayname'][0], ' ')) === FALSE){
					$name['firstname'] = $entries[0]['displayname'][0];
				}else{
					$name['firstname'] = substr($entries[0]['displayname'][0], 0,$split_index);
					$name['lastname'] = substr($entries[0]['displayname'][0], $split_index);
				}

				#---------------Check------------#    
				$this->session->set_userdata('user_id',$entries[0]["cn"][0]);
				$this->session->set_userdata('fullname', $entries[0]['displayname'][0]);
				$this->session->set_userdata('email',$entries[0]["description"][0]);

				$id = $entries[0]["cn"][0];

				$retval = 0;

				if(is_numeric($id)){
					$this->load->model('Student_Model');
					$result = $this->Student_Model->checkStudent($id);
					if (sizeof($result) > 0) {
						$this->load->model('Login_Model');
						$data = array(
							'User_name' => $user,
							'User_password' => md5($key),
							'User_fullname' => $this->session->userdata('fullname'),
							'User_email' => $this->session->userdata('email')
						);
						$this->Login_Model->insertUser($data);
						redirect('HomeStudent');
					} else {
						$this->session->sess_destroy();
						$retval = 0;
					}
				}else{
					redirect('HomeAdmin');
				}
				#---------------End Check------------#

			}
			ldap_unbind($ad);
			if ($retval == 0) {
				$Username = $user;
				$Password = md5($key);
				$this->load->model('Login_Model');
				$data['query'] = $this->Login_Model->checkUser($Username, $Password);
				foreach ($data['query'] as $row) {
					if($row->User_name == $Username && $row->User_password == $Password){
						$this->session->set_userdata('user_id', $row->User_name);
						$this->session->set_userdata('fullname', $row->User_fullname);
						$this->session->set_userdata('email', $row->User_email);

						if(is_numeric($Username)){
							redirect('HomeStudent');
						}else{
							redirect('HomeAdmin');
						}
						
					}else{
						redirect('Login');
					}
				}
				redirect('Login');
			}

		}
		return $retval;
	}




}
