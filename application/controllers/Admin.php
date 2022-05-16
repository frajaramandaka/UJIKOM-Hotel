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
		$this->load->view('Admin/FasilitasKamar');
	}
	public function FasilitasHotel()
	{
		$this->load->view('Admin/FasilitasHotel');
	}

	public function ubahData()
	{
		$id = $_GET['id'];
		$this->db->where('id_kamar', $id);
		$data['datakamar'] = $this->db->get('tipe_kamar')->result();
		$data['kamar'] = $this->db->get('tipe_kamar')->result();
		
		$this->load->view('Admin/ubahData', $data);
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
}