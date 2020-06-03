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
	<title>PENGUMUMAN KELULUSAN SMP | OPERATOR</title>	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/login/css/bootstrap.min.css">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/back/login/css/style.css">	
	
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
<div class="container">
	<div class="row text-center mb-4">
		<div class="col-md-12">
		    <h4>PENGUMUMAN KELULUSAN SMP</h4>
		    <small><?php echo $nama_sekolah; ?></small>
		</div>
	</div>
	<div class="row text-center">
	    <div class="col-md-6 offset-md-3">
	        <div class="card">
	            <div class="card-body">
	                <div class="login-img">
	                    <img src="<?php echo base_url(); ?>assets/back/images/<?php echo $logo_sekolah; ?>" width="100px">
	                </div>
	                <div class="login-title">
	                    <h4>Log In Operator</h4>
	                </div>
	                <div class="login-form mt-4">
	                    <form method="post" action="<?php echo base_url(); ?>index.php/auth/login_operator">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                              <input name="username" placeholder="Username" class="form-control" type="text">
                            </div>
                            <div class="form-group col-md-12">
                              <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
						
                        <div class="form-row">
                            <button type="submit" class="btn btn-danger btn-block">Submit</button>
                        </div>
                    </form>
	                </div>
	                
	            </div>
	        </div>
	    </div>
	</div>
</div>
	
<script src="<?php echo base_url(); ?>assets/login/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/login/js/bootstrap.min.js"></script>
</body>
</html>