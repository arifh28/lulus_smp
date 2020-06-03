<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('UserModel');
	}

	public function index(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('siswa'); // Redirect ke page welcome
		

		$data = array(
			'tanggal' => date('d/m/Y H:i:s') ,
			'ip' => $_SERVER['REMOTE_ADDR'] ,
			'agent' => htmlentities($_SERVER['HTTP_USER_AGENT'])	
		);
    
		$this->db->insert('masuk_web', $data);
		$setting = $this->UserModel->get_setting()->row();			
		$data['nama_sekolah'] = $setting->nama_sekolah;
		$data['waktu_pengumuman'] = $setting->waktu_pengumuman;
		$data['tahun_ajaran'] = $setting->tahun_ajaran;		
		$this->load->view('login', $data); // Load view login.php
	}
	
	public function operator(){
		if($this->session->userdata('authenticated')) // Jika user sudah login (Session authenticated ditemukan)
			redirect('page/welcome'); // Redirect ke page welcome
		
		$setting = $this->UserModel->get_setting()->row();			
		$data['nama_sekolah'] = $setting->nama_sekolah;
		$data['logo_sekolah'] = $setting->logo_sekolah;
		$this->load->view('login_operator', $data); // Load view login.php
	}

	public function login(){
		
			
		$nisn = $this->input->post('nisn'); // Ambil isi dari inputan username pada form login
		$password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

		$user = $this->UserModel->get($nisn); // Panggil fungsi get yang ada di UserModel.php

		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
			redirect('auth'); // Redirect ke halaman login
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
				
				$session = array(
					'authenticated'=>true, // Buat session authenticated dengan value true					
					'nama'=>$user->nama,					
					'kelas'=>$user->kelas,
					'ttl'=>$user->ttl,	
					'orang_tua'=>$user->orang_tua,					
					'nisn'=>$user->nisn,
					'nis'=>$user->nis,					
					'tipe' => "siswa"// Buat session authenticated
				);
				
				$data = array(
					'id_siswa' => $user->id_siswa,
					'ip' => $_SERVER['REMOTE_ADDR'] ,
					'agent' => htmlentities($_SERVER['HTTP_USER_AGENT'])				  
				);
    
				$this->db->insert('login_app', $data);
				
				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect('siswa'); // Redirect ke halaman welcome
			}else{
				$this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
				redirect('auth'); // Redirect ke halaman login
			}
		}
	}
	
	public function login_operator(){
		$username = $this->input->post('username'); // Ambil isi dari inputan username pada form login
		$password = $this->input->post('password'); // Ambil isi dari inputan password pada form login dan encrypt dengan md5

		$user = $this->UserModel->get_operator($username); // Panggil fungsi get yang ada di UserModel.php

		if(empty($user)){ // Jika hasilnya kosong / user tidak ditemukan
			$this->session->set_flashdata('message', 'Username tidak ditemukan'); // Buat session flashdata
			redirect('auth/operator'); // Redirect ke halaman login
		}else{
			if($password == $user->password){ // Jika password yang diinput sama dengan password yang didatabase
				$session = array(
					'authenticated'=>true, // Buat session authenticated dengan value true
					'username'=>$user->username,
					'nama'=>$user->nama,
					'tipe' => "operator"// Buat session authenticated
				);
				
				$this->session->set_userdata($session); // Buat session sesuai $session
				redirect('operator'); // Redirect ke halaman welcome
			}else{
				$this->session->set_flashdata('message', 'Password salah'); // Buat session flashdata
				redirect('auth/operator'); // Redirect ke halaman login
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy(); // Hapus semua session
		redirect('auth'); // Redirect ke halaman login
	}
}
