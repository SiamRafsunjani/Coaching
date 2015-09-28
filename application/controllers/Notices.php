<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notices extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->check_isvalidated();
		$this->load->model('Noticesmodel');
		$this->load->helper('form');
		$this->load->library('form_validation');

	}
	public function index()
	{		
		$this->load->helper('form');
		$data['notices'] = $this->Noticesmodel->get_notices();
		$this->load->view('Noticesview', $data);
	}

	public function notice($noticeID)
	{
		$data['notice'] = $this->Noticesmodel->get_notice($noticeID);
		$this->load->view('Notice', $data);
	}

	public function new_notice()
	{		
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 100000;
		$config['overwrite'] = TRUE;
		
		$this->load->library('upload', $config);

		if(isset($_POST['subject']) || isset($_POST['notice']) || isset($_POST['userfile'])){

			$this->form_validation->set_rules('subject', 'Title', 'required');
			
			if(!isset($_FILES['userfile']) || $_FILES['userfile']['error'] == UPLOAD_ERR_NO_FILE) { 
				$upload['full_path'] = '';
				$upload['file_name'] = '';
			} else {
				if(!$this->upload->do_upload('userfile')){
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('new_notice',$error);
				} else {
					$upload = $this->upload->data();
				}
			}

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('new_notice');	
			} else {
				$data = array(
					'subject' => $_POST['subject'],
					'notice' => $_POST['notice'],
					'date' => date("Y/m/d"),
					'admin_name' => $this->session->userdata('username'),
					'admin_id' => $this->session->userdata('userid'),
					'links' => $upload['full_path'],
					'picture_name' => $upload['file_name']
					);
				/*vd($data);*/
				$this->Noticesmodel->insert_notice($data);
				redirect('index.php/Notices');	
			}
		} else {
			$this->load->view('new_notice');
		}
	}

	public function resize($path,$file)
	{
		$config['image_library']='gd2';
		$config['source_image']=$path;
		$config['create_thumb']=TRUE;
		$config['maintain_ratio']=TRUE;
		$config['width']=150;
		$config['height']=175;
		$config['new_image']='./uplaods/'.$file;

		$this->load->library('image_lib',$config);
		$this->image_lib->resize();		 
	}



	public function editnotice($noticeID)
	{
		$data['success'] = 0;
		if ($_POST) {
			$data = array(
				'subject' => $_POST['subject'],
				'notice' => $_POST['notice']	
				);
			$this->Noticesmodel->update_notice($noticeID,$data);
			$data['success'] = 1;
			redirect('index.php/notices');
		}
		$data['notice'] = $this->Noticesmodel->get_notice($noticeID);
		$this->load->view('Notice_edit', $data);
	}	

	public function deletenotice($noticeID)
	{	
		$data = array(
			'active' => 0
			);
		$this->Noticesmodel->delete_notice($noticeID,$data);
		redirect('index.php/Notices');
	}

	private function check_isvalidated(){

		if(! $this->session->userdata('validated')){

			redirect('index.php/Adminlogin');

		}
	}

	public function do_logout(){

		$this->session->sess_destroy();

		redirect('index.php/Adminlogin');

	}

}