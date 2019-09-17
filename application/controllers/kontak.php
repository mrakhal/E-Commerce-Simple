<?php
class kontak extends CI_Controller{
	public function index(){
  	//Load View
		$data['main_content'] = 'kontak';
		$this->load->view('layouts/main', $data);
	}
}
