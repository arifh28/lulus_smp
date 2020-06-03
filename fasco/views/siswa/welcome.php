<section class="atas">

<div class="container">

	<div class="row">

		<div class="col-md-6 col-12">

				<?php if($waktu_pengumuman >= date('M d Y, h:i:s')) { ?>

					<p id="demo" style="color: #75bce5;"></p>

				<?php } elseif ( $waktu_pengumuman <= date('M d Y, h:i:s') ) { ?>

					<p>Yang bertanda tangan di bawah ini, Kepala Sekolah Menengah Pertama Muhammadiyah Cimanggu menerangkan bahwa :</p>
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


<p>Cimanggu, 5 Juni 2020<br>
Kepala Sekolah,<br>
<br>
Ttd<br>
<br>
<?php echo $nama_kepala_sekolah; ?><br>
NIP. -</p>


					<a href="<?php echo base_url(); ?>index.php/siswa/cetak_biasa/<?php echo $this->session->userdata('nisn'); ?>" class="btn btn-sm btn-info"><i class="fas fa-download"></i> Download</a>

				<?php }; ?>
		</div>		

      

   </div>

   

	

</div>

	

</section>





