<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class OperatorModel extends CI_Model {
    
    
	// SISWA ------------ SISWA //
	public function get_siswa(){        
        $result = $this->db->get('siswa'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	public function get_where_siswa($id_siswa){
        $this->db->where('id_siswa', $id_siswa); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('siswa')->row(); // Untuk mengeksekusi dan mengambil data hasil query		
		
        return $result;
    }
	
	public function get_where_siswa_kelas($nama_kelas){
        $this->db->where('kelas', $nama_kelas); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('siswa')->result(); // Untuk mengeksekusi dan mengambil data hasil query		
		
		//$result = $this->db->query("SELECT * FROM siswa WHERE kelas = ".$nama_kelas."");
        return $result;
    }
	
	public function tambah_siswa($data) {
		$this->db->insert('siswa', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_siswa($data, $id_siswa){
		$this->db->update('siswa', $data, array('id_siswa' => $id_siswa));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function hapus_siswa($id_siswa) {
		$this->db->delete('siswa', array('id_siswa' => $id_siswa));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	// KELAS ------------ KELAS //
	public function get_kelas(){        
        $result = $this->db->get('kelas'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	public function get_where_kelas($id_kelas){
        $this->db->where('id_kelas', $id_kelas); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('kelas')->row(); // Untuk mengeksekusi dan mengambil data hasil query		
		
        return $result;
    }
	
	public function tambah_kelas($data) {
		$this->db->insert('kelas', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_kelas($data, $id_kelas){
		$this->db->update('kelas', $data, array('id_kelas' => $id_kelas));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function hapus_kelas($id_kelas) {
		$this->db->delete('kelas', array('id_kelas' => $id_kelas));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	// NILAI SISWA ------------ NILAI SISWA //
	public function get_nilai_siswa(){        
        
		$result = $this->db->query("SELECT a.nisn, a.mtk, a.bhs_indo, a.bhs_inggris, a.ipa, a.ips, a.penjasorkes, a.seni, a.pai, a.ppkn, a.prakarya, b.nama, b.kelas FROM nilai_siswa a LEFT JOIN siswa b ON a.nisn=b.nisn");
        return $result;
    }
	
	public function get_where_nilai_siswa($nisn){
        
		$result = $this->db->query("SELECT a.nisn, a.mtk, a.bhs_indo, a.bhs_inggris, a.bhs_jawa, a.ipa, a.ips, a.penjasorkes, a.seni, a.pai, a.ppkn, a.prakarya, b.nama, b.kelas FROM nilai_siswa a LEFT JOIN siswa b ON a.nisn=b.nisn WHERE a.nisn = ".$nisn."");
        return $result;
    }
	
	public function tambah_nilai_siswa($data) {
		$this->db->insert('nilai_siswa', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}

	public function update_nilai_siswa($data, $nisn){
		$this->db->update('nilai_siswa', $data, array('nisn' => $nisn));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	public function hapus_nilai_siswa($nisn) {
		$this->db->delete('nilai_siswa', array('nisn' => $nisn));
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
	// PENGUNJUNG ------------ PENGUNJUNG //
	public function get_pengunjung(){        
        $result = $this->db->get('masuk_web'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	// MASUK APP ------------ MASUK APP //	
	public function get_masuk_app(){        
        $result = $this->db->get('login_app'); // Untuk mengeksekusi dan mengambil data hasil query
        return $result;
    }
	
	// ADMIN ------------ ADMIN //	
	public function get_admin(){
       $result = $this->db->get('admin'); // Untuk mengeksekusi dan mengambil data hasil query
		return $result;
    }
	
	// SETTING ------------ SETTING //	
	public function get_setting(){
       $result = $this->db->get('setting'); // Untuk mengeksekusi dan mengambil data hasil query
		return $result;
    }
	
	public function update_setting($data){
		$this->db->update('setting', $data);
		return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
	}
	
}
