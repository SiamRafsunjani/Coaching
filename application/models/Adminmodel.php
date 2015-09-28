<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
	
	public function branchdd(){
		$this->db->select('branch_id, branch_name');
		$this->db->from('branches');
		return $this->db->get()->result_array();	
	}	

	public function get_admins()
	{
		$this->db->select('id AS Admin_id, name AS Admin_name, address AS Address, email, branch_id AS Branch');
		$this->db->from('admins');
		$this->db->where('active', 1);
		return $this->db->get()->result_array();
	}

	public function insert_admin($data)
	{	
		$this->db->insert('admins', $data);
	}

	public function edit_admin($admin_id, $info)
	{
		$this->db->where('id', $admin_id);
		$this->db->update('admins', $info); 
	}

	public function admin_detail($admin_id)
	{
		$this->db->select('id AS Admin_id, name AS Admin_name, address AS Address, email, branch_id AS Branch, phone, username');
		$this->db->from('admins');
		$this->db->where('admins.id',$admin_id);
		return $this->db->get()->result_array();         
	}

	public function validate()
	{	
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$this->db->select();
		$this->db->from('admins');
		$result = $this->db->get()->result_array();

		foreach ($result as $key => $value) {			
			$user = $value['username'];
			$pass = $value['password'];
			$id = $value['id'];			

			if($user === $username && $this->bcrypt->check_password($password,$pass) === TRUE && $value['active'] == 1){
				$data = array(
					'username' => $user,
					'userid' => $id, 
					'validated' => true
					);
				$this->session->set_userdata($data);
				return true;
			} 
		}
		return false;
	}


}

/* End of file AddAdminmodel.php */
/* Location: ./application/models/AddAdminmodel.php */ ?>