<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resepsionis extends CI_Controller {
	public function Beranda()
	{
		$this->load->view('Resepsionis/Beranda');
	}
	public function DataFasilitas()
	{
		$this->load->view('Resepsionis/DataFasilitas');
	}
	public function DataPesanan()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
        $this->db->where('status', 'checkin');

        $data['datapesanan']=$this->db->get('')->result();
        $this->load->view('Resepsionis/DataPesanan',$data);
    }
	public function Riwayat()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
        $this->db->where('status', 'checkout');
        $data['datariwayat']=$this->db->get('')->result();
        // var_dump($data['datapesanan']);die;
        $this->load->view('Resepsionis/Riwayat', $data);
	}
	public function UbahStatus()
    {
        $status =$_GET['status'];
        $id =$_GET['id'];
        $data = array(
            'status' => $status
        );
        $this->db->where('id_pemesanan', $id);
        $this->db->update('pemesanan', $data);
        redirect('Tamu/Riwayat', ['status' => $status]);
	}
}