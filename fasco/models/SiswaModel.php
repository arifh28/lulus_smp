<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SiswaModel extends CI_Model {
    
    public function get_setting(){
       $result = $this->db->get('setting'); // Untuk mengeksekusi dan mengambil data hasil query
		return $result;
    }
	
	public function get_where_siswa($nisn){
        
		$result = $this->db->query("SELECT * FROM siswa WHERE nisn = ".$nisn."");
        return $result;
    }
	
	public function get_where_nilai_siswa($nisn){
        
		$result = $this->db->query("SELECT a.nisn, a.mtk, a.bhs_indo, a.bhs_inggris, a.bhs_jawa, a.ipa, a.ips, a.penjasorkes, a.seni, a.pai, a.ppkn, a.prakarya, b.nama, b.kelas, b.nisn, b.nis, b.status FROM nilai_siswa a LEFT JOIN siswa b ON a.nisn=b.nisn WHERE a.nisn = ".$nisn."");
        return $result;
    }
	
}
