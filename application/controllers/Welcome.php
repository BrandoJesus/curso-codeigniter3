<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function vistas() {
		$data['title'] = 'For the view';
		$data['lista'] = array('negro', 'blanco', 'azul');
		$this->load->view('vistas', $data);
		$this->load->view('footer');
	}
}
