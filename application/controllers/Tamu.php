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
    public function DataPesanan()
    {
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
        $data['datapesanan']=$this->db->get('')->result();
        $this->load->view('Tamu/DataPesanan',$data);
    }
    public function Kamar()
    {
        $this->load->view('Tamu/Kamar');
    }
    public function PesanKamar()
    {
        $this->load->view('Tamu/PesanKamar');
    }
    public function Cetak()
    {
        $id=$_GET['id'];
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
        $this->db->where('id_pemesanan', $id);
        $data['datariwayat']=$this->db->get('')->result();
        $this->load->view('Tamu/Cetak', $data);
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
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('tipe_kamar', 'tipe_kamar.id_kamar = pemesanan.id_kamar');
        $this->db->where('status', 'checkout');
        $data['datariwayat']=$this->db->get('')->result();
        // foreach ($data['datariwayat'] as  $value) {
        //     $this->db->where('id_pemesanan', $value->id_pemesanan);
        //     $data['harga'] = "Rp " . number_format($value->harga,2,',','.');
        //     var_dump($data['harga']);die;       
        //     if (!empty($data['harga'])) {
        //     }
        // }
        return $this->load->view('Tamu/Riwayat', $data);        
    }

    public function KirimData()
    {
        $query = $this->db->get('tipe_kamar')->result();
        $total_harga = $_POST['jml_kamar']*$query[0]->harga;
        $data = array(
            'nama_pemesan' => $_POST['nama_pemesan'],
            'id_kamar' => $_POST['id_kamar'],
            'tgl_cekin' => $_POST['tgl_cekin'],
            'tgl_cekout' => $_POST['tgl_cekout'],
            'jmlh_kamar' => $_POST['jmlh_kamar'],
            'nama_tamu' => $_POST['nama_tamu'],
            'email' => $_POST['email'],
            'no_hp' => $_POST['no_hp'],
            'KodReff' => $_POST['KodReff'].date('ymd').date('Dis')  
        );
        $this->db->insert('pemesanan',$data);
        redirect('Tamu/DataPesanan');
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

    function rupiah($angka){
	
        
     
    }

    
}