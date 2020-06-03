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