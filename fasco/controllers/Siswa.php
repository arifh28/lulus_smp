<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->library('pdf');
		$this->load->model('SiswaModel');
	}

	public function index(){
		if ($this->session->userdata('tipe')== 'siswa') {
			$data['title'] = "Beranda";
			$setting = $this->SiswaModel->get_setting()->row();			
			$data['waktu_pengumuman'] = $setting->waktu_pengumuman;
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['nama_kepala_sekolah'] = $setting->nama_kepala_sekolah;
			$data['tanggal_rapat'] = $setting->tanggal_rapat;
			$this->load->view('siswa/template/header', $data); // Load view login.php
			$this->load->view('siswa/welcome'); // Load view login.php
			$this->load->view('siswa/template/footer');
		} else {
			redirect('auth');
		};
	}
	
	public function lihat_pengumuman(){
		if ($this->session->userdata('tipe')== 'siswa') {
			$data['title'] = "Beranda";
			$setting = $this->SiswaModel->get_setting()->row();			
			$data['waktu_pengumuman'] = $setting->waktu_pengumuman;
			$data['nama_sekolah'] = $setting->nama_sekolah;
			$data['nama_kepala_sekolah'] = $setting->nama_kepala_sekolah;
			$data['tanggal_rapat'] = $setting->tanggal_rapat;
			$this->load->view('siswa/template/header', $data); // Load view login.php
			$this->load->view('siswa/lihat'); // Load view login.php
			$this->load->view('siswa/template/footer');
		} else {
			redirect('auth');
		};
	}
	
	public function cetak_biasa($nisn) {
		if ($this->session->userdata('tipe')== 'siswa') {
			
			$nilai_siswa = $this->SiswaModel->get_where_siswa($nisn)->row();
			$nama = $nilai_siswa->nama;
			$nisn = $nilai_siswa->nisn;
			$nis = $nilai_siswa->nis;	
			$ttl = $nilai_siswa->ttl;	
			$orang_tua = $nilai_siswa->orang_tua;			
			$status = $nilai_siswa->status;
			
			$setting = $this->SiswaModel->get_setting()->row();			
			$kop = $setting->kop;
			$logo_sekolah = $setting->logo_sekolah;
			$nama_sekolah = $setting->nama_sekolah;
			$stempel_sekolah = $setting->stempel_sekolah;
			$tanda_tangan_ks = $setting->tanda_tangan_ks;
			$nama_kepala_sekolah = $setting->nama_kepala_sekolah;
			$no_surat = $setting->no_surat;
			$nbm_kepala_sekolah = $setting->nbm_kepala_sekolah;
			$pengesahan = $setting->pengesahan;
			$tanggal_rapat = $setting->tanggal_rapat;
			
			$pdf = new TCPDF('P', 'mm',  'A4', true, 'UTF-8', false);
			$pdf->setPrintFooter(false);
			$pdf->setPrintHeader(false);
			$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
			$pdf->AddPage('');
						
			$pdf->SetFont('');
	 
			$tabel = '
				<table cellpadding="2" cellspacing="2">
					
					<tr>
					  <td width="520" align="center">'.$kop.'</td>
					 </tr>
					 <hr>
					<tr>
					  <td width="30" align="center"></td>
					  
					  <td width="400" align="center">
						 
					  </td>
					  
					  <td width="30" align="left"></td>					  
					 </tr>
					 
					<tr>
					  <td width="20" align="center"></td>
					  
					  <td width="480" align="center">
						<p style="font-size: 14pt; text-decoration: underline; font-weight: bolder; ">SURAT KETERANGAN LULUS</p>  
					  </td>
					  
					  <td width="20" align="left"></td>					  
					 </tr>
					 <tr>
					  <td width="20" align="center"></td>
					  
					  <td width="480" align="center">
						<p style="font-size: 10pt; ">Nomor : '.$no_surat.'</p>  
					  </td>
					  
					  <td width="20" align="left"></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"></td>
					  
					  <td width="400" align="center">
						 
					  </td>
					  
					  <td width="30" align="left"></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="400" align="left">						
						<p style="font-size: 10pt; ">Yang bertanda tangan dibawah ini kepala '.$nama_sekolah.' menerangkan bahwa : </p>						
					  </td>
					  					  
					 </tr>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 10pt; ">Nama  </p>						
					  </td>
					  <td width="10" align="center">:</td>					  
					  <td width="280" align="left">
						<p style="font-size: 10pt; "> '.$nama.' </p>
					  </td>					  
					 </tr>
					  
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 10pt; ">Tempat, Tanggal Lahir  </p>						
					  </td>
					  <td width="10" align="center">:</td>					  
					  <td width="280" align="left"><p style="font-size: 10pt; "> '.$ttl.'</p></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 10pt; ">Nama Orang Tua  </p>						
					  </td>
					  <td width="10" align="center">:</td>					  
					  <td width="280" align="left"><p style="font-size: 10pt; "> '.$orang_tua.'</p></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 10pt; ">NIS  </p>						
					  </td>
					  <td width="10" align="center">:</td>
					  <td width="280" align="left"><p style="font-size: 10pt; "> '.$nis.'</p></td>					  
					 </tr>
					 					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 10pt; ">NISN  </p>						
					  </td>
					  <td width="10" align="center">:</td>
					  <td width="280" align="left"><p style="font-size: 10pt; "> '.$nisn.'</p></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 10pt; ">Sekolah Asal  </p>						
					  </td>
					  <td width="10" align="center">:</td>
					  <td width="280" align="left"><p style="font-size: 10pt; "> '.$nama_sekolah.'</p></td>					  
					 </tr>
					  
					 <tr>
					  <td width="30"></td>
					  <td width="450">						
						<p style="font-size: 10pt; ">Yang bersangkutan dinyatakan </p>						
					  </td>					  				  
					 </tr>
					 <tr>
					  <td width="30"></td>
					  <td width="450">						
						<p style="font-size: 22pt; font-weight: bolder;">'.$status.'</p>						
					  </td>					  				  
					 </tr>
					 <tr>
					  <td width="30"></td>
					  <td width="450">						
						<p style="font-size: 10pt;">berdasarkan hasil Keputusan Rapat Pleno Kelulusan Dewan Guru '.$nama_sekolah.' 
						pada hari '.$tanggal_rapat.'.</p>						
					  </td>					  				  
					 </tr>
				</table>

				 
				<table cellpadding="1" cellspacing="1">
					 <tr>
					  <td width="30"></td>
					  <td width="450">											
					  </td>		  
					</tr>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 10pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 10pt; ">'.$pengesahan.'</p>
					  </td>					  
					 </tr>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 10pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 10pt; ">Mengetahui, </p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 10pt; "></p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 10pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 10pt; ">Kepala Sekolah,</p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 10pt; "></p>
					  </td>
					  <td width="200" align="left">
						<br/><br/>ttd<br/>
					  </td>					  
					 </tr>
					  
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 10pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 10pt; text-decoration: underline;font-weight: bold;">'.$nama_kepala_sekolah.'</p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 10pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 10pt; font-weight: bold;">NIP. '.$nbm_kepala_sekolah.'</p>
					  </td>					  
					 </tr>
					 
					 
				 </table>
				

			';
			$pdf->writeHTML($tabel);
			$pdf->Output('skl-'.$nama.'.pdf', 'I');
		} else {
			redirect('auth');
		};
	}		
	
	public function cetak_nilai($nisn) {
		if ($this->session->userdata('tipe')== 'siswa') {
			
			$nilai_siswa = $this->SiswaModel->get_where_nilai_siswa($nisn)->row();
			$nama = $nilai_siswa->nama;
			$nisn = $nilai_siswa->nisn;
			$nis = $nilai_siswa->nis;
			$mtk = $nilai_siswa->mtk;
			$bhs_indo = $nilai_siswa->bhs_indo;
			$ipa = $nilai_siswa->ipa;
			$bhs_inggris = $nilai_siswa->bhs_inggris;
			$pai = $nilai_siswa->pai;
			$ips = $nilai_siswa->ips;
			$ppkn = $nilai_siswa->ppkn;
			$bhs_jawa = $nilai_siswa->bhs_jawa;
			$seni = $nilai_siswa->seni;
			$prakarya = $nilai_siswa->prakarya;
			$penjasorkes = $nilai_siswa->penjasorkes;
			$kelas = $nilai_siswa->kelas;
			$status = $nilai_siswa->status;
			
			$setting = $this->SiswaModel->get_setting()->row();			
			$kop = $setting->kop;
			$logo_sekolah = $setting->logo_sekolah;
			$nama_sekolah = $setting->nama_sekolah;
			$stempel_sekolah = $setting->stempel_sekolah;
			$tanda_tangan_ks = $setting->tanda_tangan_ks;
			$nama_kepala_sekolah = $setting->nama_kepala_sekolah;
			$alamat = $setting->alamat;
			$no_surat = $setting->no_surat;
			$pengesahan = $setting->pengesahan;
			
			$pdf = new TCPDF('P', 'mm', array('210','330'), true, 'UTF-8', false);
			$pdf->setPrintFooter(false);
			$pdf->setPrintHeader(false);
			$pdf->SetAutoPageBreak(true, PDF_MARGIN_BOTTOM);
			$pdf->AddPage('');
						
			$pdf->SetFont('');
	 
			$tabel = '
				<style>
					h1 {
						color: black;
						font-family: sans-serif;
						font-size: 16pt;
						text-align:center;
						padding-left: 250px;						
					}
					
					div.test {
						color: #fff;
						background-color: #000080;
						font-family: helvetica;
						font-size: 10pt;						
						text-align: center;
					}
				</style>
				<h1 class="title">'.$yayasan1.'<br>
				'.$yayasan2.'<br>
				'.$nama_sekolah.'</h1>
				<p style="text-align:center;">'.$alamat.'</p>
				<hr>
				<table>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">
						<br>
						<p style="font-size: 8pt; ">Nomor Pendaftaran : </p>						
					  </td>
					  <td width="140" align="center"></td>
					  <td width="80" align="center"></td>
					  <td width="80" align="center"></td>
					  <td width="45" align="center"></td>
					 </tr>
					 <tr>
					  <td width="30" align="center"></td>
					  <td width="140" rowspan="6"><p style="font-size: 24pt; ">'.$nama.'</p></td>
					  <td width="140"></td>
					  <td width="80"></td>
					  <td width="80"></td>
					  <td align="center" width="45"></td>
					 </tr>
					 
				 </table>
				 
				<br/>
				<br/>
				<br/>
				
				

				<table cellpadding="2" cellspacing="2">
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="400" align="left">						
						<p style="font-size: 12pt; ">Berikut ini bukti pendaftaran dari calon peserta didik : </p>						
					  </td>
					  					  
					 </tr>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Nama  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; "> '.$nama.' </p>
					  </td>					  
					 </tr>
					  
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Tempat, Tanggal Lahir  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left"><p style="font-size: 12pt; "> '.$nisn.'</p></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Alamat  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left"><p style="font-size: 12pt; "> '.$nis.'</p></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Nama Ayah  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left"><p style="font-size: 12pt; "> '.$nisn.'</p></td>					  
					 </tr>
					 					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Asal Sekolah  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left"><p style="font-size: 12pt; "> '.$mtk.'</p></td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Nomor Handphone  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left"><p style="font-size: 12pt; "> '.$ipa.'</p></td>					  
					 </tr>
					 
				 </table>
				 <br/>
				 <br/>
				 <table cellpadding="2" cellspacing="2">
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="400" align="left">						
						<p style="font-size: 12pt; ">Diharapkan untuk bisa hadir pada : </p>						
					  </td>
					  					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Hari  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; "> Rabu - Kamis </p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Tanggal  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; "> 8 - 9 Juli 2020 </p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Pukul  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; "> 08.00 s.d selesai</p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Tempat  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="350" align="left">
						<p style="font-size: 12pt; "> GOR SMP Muhammadiyah Plus Cimanggu </p>
					  </td>					  
					 </tr>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; ">Acara  </p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "> : </p>
					  </td>
					  <td width="350" align="left">
						<p style="font-size: 12pt; ">1. Pembagian Bahan Seragam SMP (jika belum)<br>2. Test Baca Alquran<br>3. Pengumuman tentang FORTASI </p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="450" align="center" bgcolor="#FF0000" color="#FFF">						
						<p style="font-size: 12pt; ">Kegiatan ini akan dilaksanakan jika pemberlakuan <i>physical distancing Covid-19</i> sudah dicabut. </p>						
					  </td>
					  				  
					 </tr>

					<tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="450" align="center">						
							<br/>					
					  </td>		  
					 </tr>		
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="450" align="center" bgcolor="#000080" color="#FFF">						
						<p>Silahkan catat <b>username</b> dan <b>password</b> berikut ini jika pada pembelajaran hari pertama masih diberlakukan <i>physical distancing Covid-19</i> (belum boleh masuk sekolah) atau pun untuk pembelajaran online:
						</p><p style="font-size: 14pt">Username : <b>'.$pai.'</b> dan Password : <b>'.$ppkn.'</b></p>						
					  </td>		  
					 </tr>
					 
					 
					 
				 </table>
				<br/>
				<br/>

				<table cellpadding="1" cellspacing="1">
					 
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; "> Mengetahui, </p>
					  </td>					  
					 </tr>
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
						<p style="font-size: 12pt; "></p>						
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; "> Kepala Sekolah,</p>
					  </td>					  
					 </tr>
					 
					 
					 
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="450" align="center" ><br/><br/><br/>						
						</td>					  				  
					 </tr>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; text-decoration: underline;"> Rakhmat Efendi, S. Ag</p>
					  </td>					  
					 </tr>
					 <tr>
					  <td width="30" align="center"><b></b></td>
					  <td width="140" align="left">						
											
					  </td>
					  <td width="10" align="center"></td>
					  <td width="80" align="right">
						<p style="font-size: 12pt; "></p>
					  </td>
					  <td width="200" align="left">
						<p style="font-size: 12pt; "> <b>NBM. 968 069</i> </p>
					  </td>					  
					 </tr>
					 
					 
				 </table>
				

			';
			$pdf->writeHTML($tabel);
			$pdf->Output('file-pdf-codeigniter.pdf', 'I');
		} else {
			redirect('auth');
		};
	}		
	
}
