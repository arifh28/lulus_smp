<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Operator extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('OperatorModel');
	}

	public function index(){
		if ($this->session->userdata('tipe')== 'operator') {
			$setting = $this->OperatorModel->get_setting()->row();			
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$data['jml_pengunjung'] = $this->OperatorModel->get_pengunjung()->num_rows();
			$data['jml_masuk_app'] = $this->OperatorModel->get_masuk_app()->num_rows();
			$data['jml_admin'] = $this->OperatorModel->get_admin()->num_rows();
			$data['title'] = "Dashboard";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/welcome'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['siswa'] = $this->OperatorModel->get_siswa()->result();	
			$data['title'] = "Siswa Kelas IX";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function tambah_siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['title'] = "Tambah Siswa";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/tambah_siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function edit_siswa($id_siswa){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;			
			$siswa = $this->OperatorModel->get_where_siswa($id_siswa);	
			$data['nama'] = $siswa->nama;
			$data['password'] = $siswa->password;
			$data['nisn'] = $siswa->nisn;
			$data['nis'] = $siswa->nis;
			$data['kelas'] = $siswa->kelas;
			$data['ttl'] = $siswa->ttl;
			$data['orang_tua'] = $siswa->orang_tua;
			$data['id_siswa'] = $siswa->id_siswa;
			$data['title'] = "Edit Siswa ".$siswa->nama;;
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/edit_siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_tambah_siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data = array(
				  'nama' => $this->input->post('nama'),
				  'nisn' => $this->input->post('nisn'),
				  'nis' => $this->input->post('nis'),
				  'ttl' => $this->input->post('ttl'),
				  'orang_tua' => $this->input->post('orang_tua'),
				  'password' => $this->input->post('password'),
				  'kelas' => $this->input->post('kelas')				  	
			 );

			 if($this->OperatorModel->tambah_siswa($data) == TRUE) {
				  $this->session->set_flashdata('tambah', true);
			 } else {
				  $this->session->set_flashdata('tambah', false);
			 };

			 redirect('operator/siswa');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_edit_siswa($id_siswa){
		if ($this->session->userdata('tipe')== 'operator') {
			$data = array(
				  'nama' => $this->input->post('nama'),
				  'ttl' => $this->input->post('ttl'),
				  'orang_tua' => $this->input->post('orang_tua'),
				  'nisn' => $this->input->post('nisn'),
				  'nis' => $this->input->post('nis'),
				  'password' => $this->input->post('password'),
				  'kelas' => $this->input->post('kelas'),
				  'id_siswa' => $this->input->post('id_siswa')	
			 );

			 if($this->OperatorModel->update_siswa($data, $id_siswa) == TRUE) {
				  $this->session->set_flashdata('edit', true);
			 } else {
				  $this->session->set_flashdata('edit', false);
			 };

			 redirect('operator/siswa');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_hapus_siswa($id_siswa){
		if ($this->session->userdata('tipe')== 'operator') {
			if($this->OperatorModel->hapus_siswa($id_siswa) == TRUE) {
				  $this->session->set_flashdata('hapus', true);
			} else {
				  $this->session->set_flashdata('hapus', false);
			};
			
			redirect('operator/siswa');
			
		} else {
			
			redirect('auth/operator');
		};	
	}
	
	public function import_siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;			
			$data['title'] = "Import Excel Siswa";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/import_siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function upload_siswa(){
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('operator/siswa');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'nisn' => $row['A'],
                                    'nis'      => $row['B'],
                                    'nama'      => $row['C'],
									'kelas'      => $row['D'],
									'password'      => $row['E'],
									'status'      => $row['F'],
									'ttl'      => $row['G'],
									'orang_tua'      => $row['H']									
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('siswa', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('operator/siswa');

        }
    }
	
	//Kelas
	
	public function kelas(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['kelas'] = $this->OperatorModel->get_kelas()->result();	
			$data['title'] = "Kelas IX";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/kelas'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function tambah_kelas(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['title'] = "Tambah Kelas";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/tambah_kelas'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function edit_kelas($id_kelas){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;			
			$kelas = $this->OperatorModel->get_where_kelas($id_kelas);	
			$data['nama_kelas'] = $kelas->nama_kelas;
			$data['id_kelas'] = $kelas->id_kelas;
			$data['title'] = "Edit Kelas ".$kelas->nama_kelas;
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/edit_kelas'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_tambah_kelas(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data = array(
				  'nama_kelas' => $this->input->post('kelas')				  	
			 );

			 if($this->OperatorModel->tambah_kelas($data) == TRUE) {
				  $this->session->set_flashdata('tambah', true);
			 } else {
				  $this->session->set_flashdata('tambah', false);
			 };

			 redirect('operator/kelas');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_edit_kelas($id_kelas){
		if ($this->session->userdata('tipe')== 'operator') {
			$data = array(
				  'nama_kelas' => $this->input->post('kelas')	
			 );

			 if($this->OperatorModel->update_kelas($data, $id_kelas) == TRUE) {
				  $this->session->set_flashdata('edit', true);
			 } else {
				  $this->session->set_flashdata('edit', false);
			 };

			 redirect('operator/kelas');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_hapus_kelas($id_kelas){
		if ($this->session->userdata('tipe')== 'operator') {
			if($this->OperatorModel->hapus_kelas($id_kelas) == TRUE) {
				  $this->session->set_flashdata('hapus', true);
			} else {
				  $this->session->set_flashdata('hapus', false);
			};
			
			redirect('operator/kelas');
			
		} else {
			
			redirect('auth/operator');
		};	
	}
	
	//Nilai Siswa
	
	public function nilai_siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->result();	
			$data['title'] = "Nilai Siswa Kelas IX";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/nilai_siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function tambah_nilai_siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['title'] = "Tambah Siswa";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/tambah_nilai_siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function edit_nilai_siswa($nisn){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;			
			$nilai = $this->OperatorModel->get_where_nilai_siswa($nisn)->row();	
			$data['nama'] = $nilai->nama;
			$data['nisn'] = $nilai->nisn;
			$data['bhs_indo'] = $nilai->bhs_indo;
			$data['bhs_inggris'] = $nilai->bhs_inggris;
			$data['bhs_jawa'] = $nilai->bhs_jawa;
			$data['mtk'] = $nilai->mtk;
			$data['ipa'] = $nilai->ipa;
			$data['ips'] = $nilai->ips;
			$data['penjasorkes'] = $nilai->penjasorkes;
			$data['ppkn'] = $nilai->ppkn;
			$data['seni'] = $nilai->seni;
			$data['pai'] = $nilai->pai;
			$data['prakarya'] = $nilai->prakarya;
			
			$data['title'] = "Edit Siswa ".$nilai->nama;
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/edit_nilai_siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_tambah_nilai_siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data = array(
				'nisn' => $this->input->post('nisn'),
				
				'bhs_indo' => $this->input->post('bhs_indo'),
				'bhs_inggris' => $this->input->post('bhs_inggris'),
				'bhs_jawa' => $this->input->post('bhs_jawa'),
				'mtk' => $this->input->post('mtk'),
				'ipa' => $this->input->post('ipa'),
				'ips' => $this->input->post('ips'),
				'penjasorkes' => $this->input->post('penjasorkes'),
				'ppkn' => $this->input->post('ppkn'),
				'seni' => $this->input->post('seni'),
				'pai' => $this->input->post('pai'),
				'prakarya' => $this->input->post('prakarya')
			 );

			 if($this->OperatorModel->tambah_nilai_siswa($data) == TRUE) {
				  $this->session->set_flashdata('tambah', true);
			 } else {
				  $this->session->set_flashdata('tambah', false);
			 };

			 redirect('operator/nilai_siswa');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_edit_nilai_siswa($nisn){
		if ($this->session->userdata('tipe')== 'operator') {
			$data = array(			  				 
				'bhs_indo' => $this->input->post('bhs_indo'),
				'bhs_inggris' => $this->input->post('bhs_inggris'),
				'bhs_jawa' => $this->input->post('bhs_jawa'),
				'mtk' => $this->input->post('mtk'),
				'ipa' => $this->input->post('ipa'),
				'ips' => $this->input->post('ips'),
				'penjasorkes' => $this->input->post('penjasorkes'),
				'ppkn' => $this->input->post('ppkn'),
				'seni' => $this->input->post('seni'),
				'pai' => $this->input->post('pai'),
				'prakarya' => $this->input->post('prakarya')	
			 );

			 if($this->OperatorModel->update_nilai_siswa($data, $nisn) == TRUE) {
				  $this->session->set_flashdata('edit', true);
			 } else {
				  $this->session->set_flashdata('edit', false);
			 };

			 redirect('operator/nilai_siswa');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_hapus_nilai_siswa($nisn){
		if ($this->session->userdata('tipe')== 'operator') {
			if($this->OperatorModel->hapus_nilai_siswa($nisn) == TRUE) {
				  $this->session->set_flashdata('hapus', true);
			} else {
				  $this->session->set_flashdata('hapus', false);
			};
			
			redirect('operator/nilai_siswa');
			
		} else {
			
			redirect('auth/operator');
		};	
	}
	
	public function import_nilai_siswa(){
		if ($this->session->userdata('tipe')== 'operator') {
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;			
			$data['title'] = "Import Excel Nilai Siswa";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/import_nilai_siswa'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function upload_nilai_siswa(){
        // Load plugin PHPExcel nya
        include APPPATH.'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> '.$this->upload->display_errors().'</div>');
            //redirect halaman
            redirect('operator/siswa');

        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/'.$data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

            $data = array();

            $numrow = 1;
            foreach($sheet as $row){
                            if($numrow > 1){
                                array_push($data, array(
                                    'nisn' => $row['B'],
									'mtk' => $row['C'],
									'ipa' => $row['D'],
                                    'bhs_indo' => $row['E'],
									'bhs_inggris' => $row['F'],
									'pai' => $row['G'],
									'bhs_jawa' => $row['M'],
									'ppkn' => $row['H'],
									'seni' => $row['I'],
									'ips' => $row['J'],
									'prakarya' => $row['K'],
									'penjasorkes' => $row['L']
                                ));
                    }
                $numrow++;
            }
            $this->db->insert_batch('nilai_siswa', $data);
            //delete file from server
            unlink(realpath('excel/'.$data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>');
            //redirect halaman
            redirect('operator/nilai_siswa');

        }
    }
	
	// Setting
	
	public function setting(){
		if ($this->session->userdata('tipe')== 'operator') {
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['nama_kepala_sekolah'] = $setting->nama_kepala_sekolah;
			$data['nbm_kepala_sekolah'] = $setting->nbm_kepala_sekolah;
			$data['waktu_pengumuman'] = $setting->waktu_pengumuman;
			$data['kop'] = $setting->kop;
			$data['no_surat'] = $setting->no_surat;
			$data['pengesahan'] = $setting->pengesahan;
			$data['tanggal_rapat'] = $setting->tanggal_rapat;
			$data['tahun_ajaran'] = $setting->tahun_ajaran;
			$data['tanda_tangan_ks'] = $setting->tanda_tangan_ks;
			$data['stempel_sekolah'] = $setting->stempel_sekolah;
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();			
			$data['title'] = "Pengaturan";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/setting'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php
		} else {
			redirect('auth/operator');
		};	
	}	
	
	public function proses_setting(){
		if ($this->session->userdata('tipe')== 'operator') {
			
            $data = array(
				  'nama_sekolah' => $this->input->post('nama_sekolah'),
				  'nbm_kepala_sekolah' => $this->input->post('nbm_kepala_sekolah'),
				  'waktu_pengumuman' => $this->input->post('pengumuman_tanggal').", ".$this->input->post('pengumuman_waktu'),
				  'no_surat' => $this->input->post('no_surat'),
				  'pengesahan' => $this->input->post('pengesahan'),
				  'tanggal_rapat' => $this->input->post('tanggal_rapat'),
				  'kop' => $this->input->post('kop'),
				  'nama_kepala_sekolah' => $this->input->post('nama_kepala_sekolah'),
				  'tahun_ajaran' => $this->input->post('tahun_ajaran')
            );

			// Jalankan function insert pada model_loker
			$query = $this->OperatorModel->update_setting($data);
			
			redirect('operator/setting');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_setting_logo_sekolah(){
		if ($this->session->userdata('tipe')== 'operator') {
			
			$config['upload_path'] = './assets/back/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $config['max_width'] = 3000;
            $config['max_height'] = 2000;

            $this->load->library('upload', $config);           
			$this->upload->do_upload('file-input_logo');
			
            $data = array(				
				  'logo_sekolah' => $this->upload->data()['file_name']
            );

			// Jalankan function insert pada model_loker
			$query = $this->OperatorModel->update_setting($data);
			
			redirect('operator/setting');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_setting_ttd_ks(){
		if ($this->session->userdata('tipe')== 'operator') {
			
			$config['upload_path'] = './assets/back/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $config['max_width'] = 3000;
            $config['max_height'] = 2000;

            $this->load->library('upload', $config);           
			$this->upload->do_upload('file-input_ttd');
			
            $data = array(				
				  'tanda_tangan_ks' => $this->upload->data()['file_name']
            );

			// Jalankan function insert pada model_loker
			$query = $this->OperatorModel->update_setting($data);
			
			redirect('operator/setting');
			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function proses_setting_stempel(){
		if ($this->session->userdata('tipe')== 'operator') {
			
			$config['upload_path'] = './assets/back/images/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = 2000;
            $config['max_width'] = 3000;
            $config['max_height'] = 2000;

            $this->load->library('upload', $config);           
			$this->upload->do_upload('file-input_stempel');
			
            $data = array(				
				  'stempel_sekolah' => $this->upload->data()['file_name']
            );

			// Jalankan function insert pada model_loker
			$query = $this->OperatorModel->update_setting($data);
			
			redirect('operator/setting');
			
		} else {
			redirect('auth/operator');
		};	
	}		
	
	public function cetak_kartu(){
		if ($this->session->userdata('tipe')== 'operator') {
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;			
			$data['kelas'] = $this->OperatorModel->get_kelas()->result();
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();			
			$data['title'] = "Cetak Kartu";
			$this->load->view('operator/template/header', $data); // Load view login.php
			$this->load->view('operator/cetak_kartu'); // Load view login.php
			$this->load->view('operator/template/footer', $data); // Load view login.php			
		} else {
			redirect('auth/operator');
		};	
	}
	
	public function cetak_kartu_kelas($nama_kelas){
		if ($this->session->userdata('tipe')== 'operator') {
			$setting = $this->OperatorModel->get_setting()->row();
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['logo_sekolah'] = $setting->logo_sekolah;
			$data['waktu_pengumuman'] = $setting->waktu_pengumuman;
			$data['tahun_ajaran'] = $setting->tahun_ajaran;			
			$data['siswa'] = $this->OperatorModel->get_where_siswa_kelas($nama_kelas);	
			$data['jml_siswa'] = $this->OperatorModel->get_siswa()->num_rows();
			$data['jml_nilai_siswa'] = $this->OperatorModel->get_nilai_siswa()->num_rows();			
			$data['title'] = "Cetak Kartu";
			$this->load->view('operator/kartu', $data); // Load view login.php				
		} else {
			redirect('auth/operator');
		};	
	}
	
}
