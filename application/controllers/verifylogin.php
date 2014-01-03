<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('users');
	}

	function index(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'trim|htmlspecialchars|stripslashes|xss_clean|callback_check_email|callback_check_email_exist');
		$this->form_validation->set_rules('password', 'Password', 'trim|htmlspecialchars|stripslashes|xss_clean|callback_check_password');
		if ($this->form_validation->run() == TRUE){
			$email=$this->input->post('email');
			$this->session->set_userdata('email', $email);
			$this->session->set_userdata('logged_in', 1);
			$role=$this->users->get_role($email);
			$this->session->set_userdata('role', $role);
			
			if($role==2){
				redirect('adm', 'refresh');
			}elseif($role==1){
				redirect('prodaja', 'refresh');
			}else{
				redirect('main', 'refresh');
			}
		}
		else{
                        $this->form_validation->set_message('check_email', 'Invalid email!');
			$this->load->view('login');
		}
	}
	
	function check_email(){
		$email = $this->input->post('email');
		if(preg_match("/^([a-zA-Z0-9_\.-]+)@([a-zA-Z0-9\.-]+)\.([a-zA-Z\.]{2,5})$/",$email)){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_email', 'Invalid email!');
			return FALSE;
		}
	}
	function check_email_exist(){
		$email = $this->input->post('email');
		//query the database
		$result = $this->users->email($email);
		if($result != 0){
			return TRUE;
		}else{
			$this->form_validation->set_message('check_email_exist','Email does not exist!');
			return FALSE;
		}
	}
	
	function check_password(){
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$result = $this->users->check_password($email,$password);
		$active = $this->users->check_active($email);
		$result_email = $this->users->email($email);
		if(preg_match("/^[a-zA-Z0-9]{3,20}$/",$password) && $result && $active==1){
			return TRUE;
		}elseif($result_email == 0){
			return TRUE;
		}elseif($active==0){
			$this->form_validation->set_message('check_password', 'Your account has been disabled!');
			return FALSE;
		}else{
			$this->form_validation->set_message('check_password', 'Wrong password!');
			return FALSE;
		}
	}	
}

?>