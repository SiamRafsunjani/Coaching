<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_isvalidated();
		$this->load->model('Progrmamodel');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	public function index( )
	{

	}

	public function add_subject()
	{

	}

	public function update_subject( $program_id )
	{

	}

	public function delete_subject( $program_id )
	{

	}

	private function check_isvalidated(){

		if(! $this->session->userdata('validated')){

			redirect('index.php/Adminlogin');
		}
	}
}