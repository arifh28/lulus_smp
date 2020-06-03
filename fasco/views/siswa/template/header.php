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
	<title><?php echo $title; ?> </title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/css/line-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/css/imagehover.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/siswa/css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>

<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Pengumuman Kelulusan</h3>
            </div>

            <ul class="list-unstyled components">
                <p><?php echo $this->session->userdata('nama'); ?></p>
                
				<?php if($waktu_pengumuman >= date('M d Y, h:i:s')) { ?>
					
				<?php } elseif ( $waktu_pengumuman <= date('M d Y, h:i:s') ) { ?>
				
				<li>
                    <a href="#">Nilai</a>
                </li>
                
                <li>
                    <a href="#">Coret coret online</a>
                </li>
				
                <li>
                    <a href="#">Pesan ke Admin</a>
                </li>
				
				<?php }; ?>
                
            </ul>

            <ul class="list-unstyled CTAs">
                
                <li>
                    <a href="<?php echo base_url(); ?>index.php/auth/logout" class="article">Keluar</a>
                </li>
				
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Menu</span>
                    </button>
                    <p>Pengumuman Kelulusan</p>
                    
                </div>
            </nav>