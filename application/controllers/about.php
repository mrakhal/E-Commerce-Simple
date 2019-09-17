<?php
class about extends CI_Controller{
	public function index(){
  	//Load View
		$data['main_content'] = 'about';
		$this->load->view('layouts/main', $data);
	}
}
