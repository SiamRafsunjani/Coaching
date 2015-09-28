<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Program extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_isvalidated();
		$this->load->model('Programmodel');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

	}

	public function index( )
	{
		$data['program_detail'] = $this->Programmodel->get_programs(); 
		$this->load->view('Programs', $data);
	}	

	public function add()
	{
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('end_date', 'End date', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('Add_program');
		}
		else
		{
			$data = array(
				'program_name' => $this->input->post('name') ,
				'start_date' => $this->input->post('start_date') ,
				'end_date' => $this->input->post('end_date') 				
				);
			vd($data);
			$this->Programmodel->add($data);
			redirect('index.php/program');
		}

	}

	public function edit( $program_id )
	{
		$this->form_validation->set_rules('name', 'Username', 'required');
		$this->form_validation->set_rules('end_date', 'End date', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['program_detail'] = $this->Programmodel->get_program_edit($program_id);
			$this->load->view('Edit_program', $data);
		}
		else
		{
			$edit_info = array(
				'program_name' => $this->input->post('name') ,
				'start_date' => $this->input->post('start_date') ,
				'end_date' => $this->input->post('end_date') 				
				);
			$this->Programmodel->edit($program_id ,$edit_info);
			redirect('index.php/program');
		}
		
	}

	public function delete( $program_id )
	{
		$delete_info = array(
			'active' => 0				
			);
		$this->Programmodel->edit($program_id ,$delete_info);
		redirect('index.php/program');
	}

	private function check_isvalidated(){

		if(! $this->session->userdata('validated')){

			redirect('index.php/Adminlogin');
		}
	}
}

