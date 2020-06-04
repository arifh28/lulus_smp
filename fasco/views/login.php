<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="theme-color" content="#ee6e73">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ee6e73" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PENGUMUMAN KELULUSAN SMP | SISWA</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/login/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/login/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/login/css/dark/neumorph-full-dark.css">	
	
	<!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <meta name="msapplication-config" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->

</head>
<body>
	<div class="sidenav">
         <div class="login-main-text">
            <h2>Pengumuman <br> Kelulusan</h2>
			<div class="np-divider-fat"></div>
            <p><?php echo $nama_sekolah; ?><br>
			Tahun Pelajaran <?php echo $tahun_ajaran; ?></p>
			<p id="demo" style="font-size:30px"></p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12 col-12">
            <div class="login-form">
               <form method="post" action="<?php echo base_url(); ?>index.php/auth/login">
					
                  <div class="np-form-group form-group">
                     <label>NISN Siswa</label>
                     <input type="text" class="np-form-element np-text-accent form-control" name="nisn" placeholder="NISN">
                  </div>
                  <div class="np-form-group form-group">
                     <label>Password</label>
                     <input type="password" class="np-form-element np-text-accent form-control" name="password" placeholder="Password">
                  </div>
                  <button type="submit" class="np-element np-hover np-square-md">Login</button>                  
               </form>
            </div>
         </div>
      </div>	  
	  

<script src="<?php echo base_url(); ?>assets/siswa/login/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/siswa/login/js/bootstrap.min.js"></script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $waktu_pengumuman; ?>").getTime();

// Update the count down every 1 second
var countdownfunction = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
  
  // Find the distance between now an the count down date
  var distance = countDownDate - now;
  
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + " hari, " + hours + " jam, "
  + minutes + " menit, " + seconds + " detik. ";
  
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(countdownfunction);
    document.getElementById("demo").innerHTML = "";
  }
}, 1000);
</script>
</body>
</html>