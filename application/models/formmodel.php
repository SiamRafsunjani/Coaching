<?php 

class Formmodel extends CI_model
{	
	public function programs()
	{
		$this->db->select();
		$this->db->from('courses');
		$this->db->where('active',1);

		return $this->db->get()->result_array();
	}	

	public function dropdown(){

		$this->db->select('id,branch_name');
		$this->db->from('branches');
		return $this->db->get()->result_array();
	}

	public function insertdata(){
		$data = array(
			'program_name' => $this->input->post('program'), 
			'start_date' => $this->input->post('startdate'),
			'end_date' => $this->input->post('enddate'),
			'fee' => $this->input->post('fee'),
			'pay_sturcture' => $this->input->post('paystructure')
			);
		$this->db->insert('courses', $data); 
	}

	public function Course_Detail($Course_Detail)
	{
		$this->db->select('courses.program_id AS `Courses_program_id`,courses.program_name AS `Courses_program_name`,courses.start_date AS `Courses_start_date`, courses.end_date AS `Courses_End_date`,courses.number_of_batchs AS `Courses_Number_of_batches`,courses.active_students AS `Courses_Active_students`, courses.globally_enrolled AS `Courses_Globally_enrolled`,courses.pay_sturcture AS `Courses_Pay_structure`,courses.fee AS `Courses_fee`,batch.branch_id AS `Batch_branch_id` , batch.student_number AS `Batch_available_student` , batch.batch_id AS `Batch_ID`,batch.batch_name AS `Batch_name`, ');
		$this->db->from('courses');
		$this->db->where('courses.program_id',$Course_Detail);
		$this->db->join('batch', 'batch.program_id = courses.program_id', 'left outer');
		return $this->db->get()->result_array();
	}

	public function Get_student_detail($Course_Detail)
	{
		$this->db->select('student_table.id AS `Student_ID`, student_table.student_name AS `Student_name`,student_table.address AS `Student_address`,student_table.instrituition AS `Student_Instritution`,student_table.branch_id AS `Student_Branch_id`,student_table.batch_id AS `Student_batch_id`,student_table.student_id AS `Student_academic_id`');
		$this->db->from('student_table');
		$this->db->where('student_table.program_id',$Course_Detail);
		return $this->db->get()->result_array();
	}

	public function Get_subjects()
	{
		$this->db->select('subject_id,subject_name');
		$this->db->from('subjects');
		$this->db->where('active',1);
		return $this->db->get()->result_array();
	}

	public function insert_subjects()
	{	
		$this->db->select('program_id,program_name');
		$this->db->from('courses');
		$this->db->where('program_name',$_POST['program']);
		$result = $this->db->get()->result_array();

		foreach($_POST['subjects'] as $key => $value) {
			$this->db->select('subject_name,subject_id');
			$this->db->from('subjects');
			$this->db->where('subject_id',$value);
			$subject = $this->db->get()->result_array();

			$data = array(
				'subject_id' => $value,
				'program_id' => $result[0]['program_id'],
				'subject_name' => $subject[0]['subject_name']
				);
			$this->db->insert('course_subjects', $data); 

		} 
	}
}

//student_table.id AS `Student_ID`, student_table.student_name AS `Student_name`,student_table.address AS `Student_address`,student_table.instrituition AS `Student_Instritution`,student_table.branch_id AS `Student_Branch_id`,student_table.batch_id AS `Student_batch_id`,student_table.student_id AS `Student_academic_id`
?>