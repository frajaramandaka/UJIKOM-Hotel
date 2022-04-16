<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {
	public function Beranda()
	{
		$this->load->view('Resepsionis/Beranda');
	}
}