<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {
	public function Beranda()
	{
		$this->load->view('Tamu/Beranda');
	}
    public function CaraPesan()
    {
        $this->load->view('Tamu/CaraPesan');
    }
    public function History()
    {
        $this->load->view('Tamu/History');
    }
    public function Kamar()
    {
        $this->load->view('Tamu/Kamar');
    }
    public function PesanKamar()
    {
        $this->load->view('Tamu/PesanKamar');
    }
    public function FasilitasKamar()
    {
        $this->load->view('Tamu/FasilitasKamar');
    }
    public function FasilitasHotel()
    {
        $this->load->view('Tamu/FasilitasHotel');
    }
}