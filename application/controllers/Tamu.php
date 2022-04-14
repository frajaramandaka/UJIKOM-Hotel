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
        $data['datapesanan']=$this->db->get('pemesanan')->result();
        $this->load->view('Tamu/History',$data);
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
    public function Riwayat()
    {
        $this->load->view('Tamu/Riwayat');
    }

    public function KirimData()
    {
        $query = $this->db->get('tipe_kamar')->result();
        // var_dump($query);die;
        $total_harga = $_POST['jml_kamar']*$query[0]->harga;
        $data = array(
            'nama_pemesan' => $_POST['nama_pemesan'],
            'id_kamar' => $_POST['id_kamar'],
            'tgl_cekin' => $_POST['tgl_cekin'],
            'tgl_cekout' => $_POST['tgl_cekout'],
            'jml_kamar' => $_POST['jml_kamar'],
            'nama_tamu' => $_POST['nama_tamu'],
            'email' => $_POST['email'],
            'no_hp' => $_POST['no_hp']
        );
        $this->db->insert('pemesanan',$data);
        redirect('Tamu/History');
    }
}