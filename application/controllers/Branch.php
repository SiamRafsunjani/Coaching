<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->check_isvalidated();
		$this->load->model('Branchmodel');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['branches'] = $this->Branchmodel->show_branch();
		$this->load->view('Branchs',$data);

	}
	
	public function add_branch()
	{	
		$this->form_validation->set_rules('branch', 'Branch', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('contact', 'Contact info', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{   
			$this->load->view('Add_branch');		
		}    
		else
		{      
			$data = array(
				'branch_name' => $this->input->post('branch'),
				'branch_address' => $this->input->post('address'),
				'contact_info' => $this->input->post('contact'),
				);
			$this->Branchmodel->add($data);
			redirect('index.php/branch');
		}

	}
	
	public function edit_branch($branch_id)
	{
		$this->form_validation->set_rules('branch', 'Branch', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('contact', 'Contact info', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{   
			$data['branch_info'] = $this->Branchmodel->branch_detail($branch_id);
			$this->load->view('Edit_branch', $data);	

		}    
		else
		{      
			$data = array(
				'branch_name' => $this->input->post('branch'),
				'branch_address' => $this->input->post('address'),
				'contact_info' => $this->input->post('contact'),
				);

			$this->Branchmodel->edit($branch_id, $data);
			redirect('index.php/branch');
		}

	}
	
	public function delete_branch($branch_id)
	{
		$data = array(
			'active' => 0
			);
		$this->Branchmodel->edit($branch_id, $data);
		redirect('index.php/branch');
	}


	private function check_isvalidated(){

		if(! $this->session->userdata('validated')){

			redirect('index.php/Adminlogin');
		}
	}

}

/* End of file branchs.php */
/* Location: ./application/controllers/branchs.php */