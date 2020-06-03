<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title><?php echo $title; ?></title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>assets/back/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>assets/back/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

<style>

@media print {

}

@page {
  size: 12in 19in;
  size: portrait;
}

@page :left {
	margin: 2cm;
}

@page :right {
	margin: 2cm;
}

.kartu {
	display: flex;
	flex-direction: row;
	justify-content: flex-start;
	margin: 4px 0;
	height: 300px;
}

.kartu_kiri {
	border-left: 2px #000 solid;
	border-top: 2px #000 solid;
	border-bottom: 2px #000 solid;
	width: 50%;
	padding: 10px;
}

.kartu_kanan {
	border-right: 2px #000 solid;
	border-top: 2px #000 solid;
	border-bottom: 2px #000 solid;
	width: 50%;
	padding: 10px;
}

.item:nth-child(5) .kartu,
.item:nth-child(10) .kartu,
.item:nth-child(15) .kartu,
.item:nth-child(20) .kartu,
.item:nth-child(25) .kartu,
.item:nth-child(30) .kartu {
	margin: 0 0 25px 0;
}

.fa-exclamation-triangle {
	font-size: 36px;
	color: red;
	margin: 7px 0 0 0;
}

.peringatan {
	margin-bottom: 0 !important;
	font-size: 12px;
}

.kartu_kiri p {
	margin-bottom: 0 !important;
}

</style>

</head>

<body>
	<div class="container-fluid">

			
		<?php foreach ($siswa as $s){ ?>
			<div class="item">
				<div class="kartu">
					<div class="kartu_kiri">
						<h5>KARTU LOGIN KELULUSAN SISWA<br>
						<?php echo $nama_sekolah ?><br>
						TAHUN PELAJARAN <?php echo $tahun_ajaran ?></h5>
						<hr>
						<p>NAMA : <strong><?php echo $s->nama; ?></strong><br>
						KELAS : <strong><?php echo $s->kelas; ?></strong><br> 
						NISN : <strong><?php echo $s->nisn; ?></strong><br> 
						PASSWORD : <strong><?php echo $s->password; ?></strong></p>
						<div class="alert alert-info" role="alert">						  
							<p class="mb-0">Website kelulusan : <strong><?php echo base_url(); ?></strong></p>
						</div>
					</div>
					<div class="kartu_kanan">
						<h5>KARTU LOGIN KELULUSAN SISWA<br>
						<?php echo $nama_sekolah ?><br>
						TAHUN PELAJARAN <?php echo $tahun_ajaran ?></h5>
						<hr>
						<p>Silahkan Login pada waktu setelah ini <br><?php echo $waktu_pengumuman ?>.</p>
						<br>

						<div class="alert alert-danger" role="alert">						  
							<div class="row">
								<div class="col-md-2 col-2">
									<i class="fas fa-exclamation-triangle"></i>
								</div>
								<div class="col-md-10 col-10">
									<p class="peringatan">RAYAKAN KELULUSAN DENGAN HAL BERMANFAAT.<br>
									JANGAN CORET-CORET SERAGAMMU, SUMBANGKAN KEPADA YANG MEMBUTUHKAN.</p>
								</div>
							</div>						  
						</div>
					</div>
				</div>
			</div>				
		<?php } ; ?>

	</div>												
</body>
</html>											
                                          