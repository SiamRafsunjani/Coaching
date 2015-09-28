<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	function __construct(){
		parent::__construct();
	}


	public function index($msg = NULL)
	{
		$this->load->helper(array('form', 'url'));
		$data['msg'] = $msg;
		$this->load->view('Admin_login', $data);
		
	}


	public function process(){
		$this->load->library('bcrypt');
		$this->load->model('Adminmodel');
		$result = $this->Adminmodel->validate();
		
		if(! $result){
			$msg = '<font color=red>Invalid username and/or password.</font><br />';
			$this->index($msg);
		} else {
			redirect('index.php/Admin');
		}
	}
}
?>