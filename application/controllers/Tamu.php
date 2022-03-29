<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
	public function Beranda()
	{
		$this->load->view('Beranda');
	}
    public function CaraPesan()
    {
        $this->load->view('CaraPesan');
    }
    public function History()
    {
        $this->load->view('History');
    }
    public function Kamar()
    {
        $this->load->view('Kamar');
    }
    public function PesanKamar()
    {
        $this->load->view('PesanKamar');
    }
    public function Login()
    {
        $this->load->view('Login');
    }
    public function FasilitasKamar()
    {
        $this->load->view('FasilitasKamar');
    }
    public function FasilitasHotel()
    {
        $this->load->view('FasilitasHotel');
    }
}