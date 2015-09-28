<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programmodel extends CI_Model {

	public function get_programs()
	{
		$this->db->select('program_id, program_name, start_date, end_date');
		$this->db->from('programs');
		$this->db->where('active', 1);
		return $this->db->get()->result_array();
	}

	public function get_program_edit($program_id)
	{
		$this->db->select('program_name, start_date, end_date');
		$this->db->from('programs');
		$this->db->where('programs.program_id', $program_id);
		return $this->db->get()->result_array();
	}

	public function add($data)
	{
		$this->db->insert('programs', $data);
	}
	
	public function edit($program_id,$data)
	{
		$this->db->where('program_id', $program_id);
		$this->db->update('programs', $data);
	}
	
}
