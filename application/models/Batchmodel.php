<?php 
	/**
	* 
	*/
	class Batchmodel extends CI_model
	{
		public function coursedd()
		{
			$this->db->select('program_id, program_name');
			$this->db->from('courses');
			return $this->db->get()->result_array();
		}

		public function branchdd()
		{
			$this->db->select('id, branch_name');
			$this->db->from('branches');
			return $this->db->get()->result_array();	
		}

		public function insertdata()
		{
			$data = array(
				'batch_name' => $this->input->post('name'),
				'program_id' => $this->input->post('courses'),
				'branch_id' => $this->input->post('branch')
				);
			$re = $data['program_id'];
			$this->db->select('number_of_batch');
			$this->db->from('courses');
			$this->db->where('program_id = '.$re.'');
			$result = $this->db->get()->result_array();
			$re1 = $result[0]["number_of_batch"] + 1;
			
			$data1 = array('number_of_batch' => $re1); 

			$this->db->where('program_id = '.$re.'');
			$this->db->update('courses', $data1);

			$this->db->insert('batch', $data);
		}
	}
	?>