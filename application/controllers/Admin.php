<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function Beranda()
	{
		$this->load->view('Admin/Beranda');
	}
	public function DataKamar()
	{
		$data['datakamar'] = $this->db->get('tipe_kamar')->result();
		$this->load->view('Admin/DataKamar', $data);
	}
	public function FasilitasKamar()
	{
		$data['datafaskamar'] = $this->db->get('fasilitas_kamar')->result();
		$this->load->view('Admin/FasilitasKamar', $data);
	}
	public function FasilitasHotel()
	{
		$data['datafashotel'] = $this->db->get('fasilitas_hotel')->result();
		$this->load->view('Admin/FasilitasHotel', $data);
	}

	public function ubahData()
	{
		$id = $_GET['id'];
		$this->db->where('id_kamar', $id);
		$data['datakamar'] = $this->db->get('tipe_kamar')->result();
		$data['kamar'] = $this->db->get('tipe_kamar')->result();
		
		$this->load->view('Admin/ubahData', $data);
	}
	public function UDfaskamar()
	{
		$id = $_GET['id'];
		$this->db->where('id_faskamar', $id);
		$data['datafaskamar'] = $this->db->get('fasilitas_kamar')->result();
		$data['faskamar'] = $this->db->get('fasilitas_kamar')->result();
		
		$this->load->view('Admin/UDfaskamar', $data);
	}
	public function UDfashotel()
	{
		$id = $_GET['id'];
		$this->db->where('id_fashotel', $id);
		$data['datafashotel'] = $this->db->get('fasilitas_hotel')->result();
		$data['fashotel'] = $this->db->get('fasilitas_hotel')->result();
		
		$this->load->view('Admin/UDfashotel', $data);
	}

	public function storeData()
	{
		// var_dump($_POST);die;
		$data = array(
			'nama_kamar' => $_POST['nama_kamar'],
			'jml_kamar'  => $_POST['jml_kamar'],
			'gambar_tipekamar'  => $_POST['gambar_tipekamar'],
			'harga'  => $_POST['harga'],
			'detail'  => $_POST['detail']
	);
	$this->db->where('id_kamar', $_POST['id_kamar']);
	$this->db->update('tipe_kamar', $data);
	
	redirect('Admin/DataKamar');
	}

	public function storeDatafaskamar()
	{
		// var_dump($_POST);die;
		$data = array(
			'nama_faskamar' => $_POST['nama_faskamar'],
			'gambar_faskamar'  => $_POST['gambar_faskamar'],
			'kategori'  => $_POST['kategori']
	);
	$this->db->where('id_faskamar', $_POST['id_faskamar']);
	$this->db->update('fasilitas_kamar', $data);
	
	redirect('Admin/FasilitasKamar');
	}
	public function storeDatafashotel()
	{
		// var_dump($_POST);die;
		$data = array(
			'nama_fashotel' => $_POST['nama_fashotel'],
			'gambar_fashotel'  => $_POST['gambar_fashotel'],
			'ket_fashotel'  => $_POST['ket_fashotel']
	);
	$this->db->where('id_fashotel', $_POST['id_fashotel']);
	$this->db->update('fasilitas_hotel', $data);
	
	redirect('Admin/FasilitasHotel');
	}
}
	