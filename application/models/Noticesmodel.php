<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticesmodel extends CI_Model {

	public function get_notices()
	{
		$this->db->select();
		$this->db->from('notices');
		$this->db->where('active',1);
		return $query = $this->db->get()->result_array();
	}
	
	public function get_notice($noticeID)
	{
		$this->db->select();
		$this->db->from('notices');
		$this->db->where(array('active'=>1, 'notice_id'=>$noticeID));
		return $query = $this->db->get()->first_row('array');
	}

	public function insert_notice($data)
	{
		$this->db->insert('notices', $data);
	}

	public function update_notice($noticeID,$data)
	{
		$this->db->where('notice_id',$noticeID);
		$this->db->update('notices', $data);
	}

	public function delete_notice($noticeID,$data)
	{	
		$this->db->where('notice_id', $noticeID);
		$this->db->update('notices', $data);
	}
}

/* End of file Noticesmodel.php */
/* Location: ./application/models/Noticesmodel.php */