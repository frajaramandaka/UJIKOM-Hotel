<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function Beranda()
	{
		$this->load->view('Admin/Beranda');
	}
	public function DataKamar()
	{
		$this->load->view('Admin/DataKamar');
	}
	public function FasilitasKamar()
	{
		$this->load->view('Admin/FasilitasKamar');
	}
	public function FasilitasHotel()
	{
		$this->load->view('Admin/FasilitasHotel');
	}
}