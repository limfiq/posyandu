<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('auth/login');
		$this->load->view('inc/footer');
		
	}
	public function register()
	{
		$data['title']="Login | SimPos";
		$this->load->view('inc/header',$data);
		$this->load->view('auth/register');
		$this->load->view('inc/footer');
		
	}
}
