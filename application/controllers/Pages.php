<?php
	/**
	* 
	*/
	class Pages extends CI_Controller
	{
		
		public function view ($page = 'welcome_message')
		{
			if (! file_exists(APPATH.'/views/pages/'.$page.'.php')) {
				show_404();
			}

			$data['title'] = ucfirst($pages);
			$this -> load -> view('templates/header',$data);
			$this -> load -> view('pages/'.$page, $data);
			$this -> load -> view('templates/footer',$data);
		}
	}

?>