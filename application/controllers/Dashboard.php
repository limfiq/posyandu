<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

//route dashboard menu master
	public function index()
	{
		$this->load->view('inc/header');
		$this->load->view('page/index');
		$this->load->view('inc/footer');	
	}
	
	public function profil()
	{
		$this->load->view('inc/header');
		$this->load->view('page/profil');
		$this->load->view('inc/footer');
	}
	public function anggota()
	{
		$this->load->view('inc/header');
		$this->load->view('page/anggota');
		$this->load->view('inc/footer');
	}
	public function petugas()
	{
		$this->load->view('inc/header');
		$this->load->view('page/petugas');
		$this->load->view('inc/footer');	
	}
	public function vaksin()
	{
		$this->load->view('inc/header');
		$this->load->view('page/vaksin');
		$this->load->view('inc/footer');	
	}
	public function imunisasi()
	{
		$this->load->view('inc/header');
		$this->load->view('page/imunisasi');
		$this->load->view('inc/footer');	
	}

//route dashboard menu transaksi
	public function periksa()
	{
		$this->load->view('inc/header');
		$this->load->view('page/periksa');
		$this->load->view('inc/footer');	
	}
	public function berivaksin()
	{
		$this->load->view('inc/header');
		$this->load->view('page/berivaksin');
		$this->load->view('inc/footer');	
	}
	public function beriimunisasi()
	{
		$this->load->view('inc/header');
		$this->load->view('page/beriimunisasi');
		$this->load->view('inc/footer');	
	}
	public function jadwal()
	{
		$this->load->view('inc/header');
		$this->load->view('page/jadwal');
		$this->load->view('inc/footer');	
	}
}
