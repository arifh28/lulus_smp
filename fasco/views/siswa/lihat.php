<section class="atas">

<div class="container">

	<div class="row">

		<div class="col-md-6 col-12">

				<p>Yang bertanda tangan di bawah ini, Kepala <?php echo $nama_sekolah; ?> menerangkan bahwa :</p>
<p>Nama 	: <?php echo $this->session->userdata('nama'); ?><br>
Tempat dan Tanggal lahir 	: <?php echo $this->session->userdata('ttl'); ?><br>
Nama Orang tua 	: <?php echo $this->session->userdata('orang_tua'); ?><br>	
NIS 	: 	<?php echo $this->session->userdata('nis'); ?><br>
NISN 	: <?php echo $this->session->userdata('nisn'); ?><br>
Sekolah asal 	: <?php echo $nama_sekolah; ?>	 </p>
<br>
<br>
<p>Yang bersangkutan dinyatakan LULUS berdasarkan hasil Keputusan Rapat Pleno Kelulusan Dewan
Guru <?php echo $nama_sekolah; ?> pada hari <?php echo $tanggal_rapat; ?>.</p>
<p>Surat Keterangan Lulus ini berlaku sementara sampai dengan diterbitkannya Ijazah kepada yang
bersangkutan. Harap menjadikan maklum bagi yang berkepentingan.</p>


<p><?php echo $pengesahan; ?><br>
Kepala Sekolah,<br>
<br>
Ttd<br>
<br>
<?php echo $nama_kepala_sekolah; ?><br>
NIP. <?php echo $nbm_kepala_sekolah; ?></p>


					<a href="<?php echo base_url(); ?>index.php/siswa/cetak_biasa/<?php echo $this->session->userdata('nisn'); ?>" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a>

		</div>		

      

   </div>

   

	

</div>

	

</section>





