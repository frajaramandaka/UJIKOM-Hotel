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
    public function RegisterData()
	{
		
		$data = array(
        'username'      => $_POST['username'],
        'password'      => $_POST['password'],
        'nama' 	        => $_POST['nama'],
        'level' 	        => $_POST['level'],
        'jenis_kelamin' => $_POST['jenis_kelamin'],
        'tgl_lahir'   => $_POST['tgl_lahir'],
        'nowa' 	        => $_POST['nowa']
    	);

		$this->db->insert('login', $data);
		redirect('Auth/Login');
	}
    public function Cekuser()
	{
		
        // var_dump($_POST);die;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$login = $this->db->get('login')->result();
		if (empty($login)) {
			redirect('Auth/Login');
		}
		$_SESSION['user'] = $login[0];
		$this->Leveling();
	}
    public function Leveling()
	{
		if ($_SESSION['user']->level == "tamu") {
			redirect('Tamu/Beranda');
		}
		if ($_SESSION['user']->level == "admin") {
			redirect('Admin/Beranda');
		}
		if ($_SESSION['user']->level == "resepsionis") {
			redirect('Resepsionis/Beranda');
		}
	}
    public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Tamu/Beranda');
    }
}