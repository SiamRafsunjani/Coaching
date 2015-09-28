<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branchmodel extends CI_Model {

	public function show_branch()
	{
		$this->db->select('branch_id, branch_name, branch_address, contact_info');
		$this->db->from('branches');
		$this->db->where('branches.active',1);
		return $this->db->get()->result_array();
	}

	public function branch_detail($value)
	{
		$this->db->select('branch_name, branch_address, contact_info');
		$this->db->from('branches');
		$this->db->where('branches.branch_id', $value);
		return $this->db->get()->result_array();	
	}

	public function add($data)
	{
		$this->db->insert('branches',$data);
	}
	

	public function edit($branch_id,$data)
	{
		$this->db->where('branch_id', $branch_id);
		$this->db->update('branches', $data); 
	}
	
	
}