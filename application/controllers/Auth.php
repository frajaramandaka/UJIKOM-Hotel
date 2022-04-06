<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function Beranda()
	{
		$this->load->view('Beranda');
	}
	public function Login()
    {
        $this->load->view('auth/Login');
    }
	public function Registrasi()
    {
        $this->load->view('auth/Registrasi');
    }
}