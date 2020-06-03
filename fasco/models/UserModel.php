<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {
    
    public function get($nisn){
        $this->db->where('nisn', $nisn); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('siswa')->row(); // Untuk mengeksekusi dan mengambil data hasil query		
		
        return $result;
    }
	
	public function get_operator($username){
        $this->db->where('username', $username); // Untuk menambahkan Where Clause : username='$username'
        $result = $this->db->get('admin')->row(); // Untuk mengeksekusi dan mengambil data hasil query

        return $result;
    }
	
	public function get_setting(){
       $result = $this->db->get('setting'); // Untuk mengeksekusi dan mengambil data hasil query
		return $result;
    }
}
