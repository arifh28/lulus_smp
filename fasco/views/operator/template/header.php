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

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>assets/back/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>assets/back/vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
    <script src="<?php echo base_url(); ?>assets/back/vendor/ckeditor/ckeditor.js"></script>
	
	<!-- Main CSS-->
    <link href="<?php echo base_url(); ?>assets/back/css/theme.css" rel="stylesheet" media="all">

</head>

<body>
    <div class="page-wrapper">
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar2">
            <div class="logo">
                <a href="#">
                    <img src="<?php echo base_url(); ?>assets/back/images/icon/logo-white.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar2__content js-scrollbar1">
                <div class="account2">
                    <div class="image img-cir img-120">
                        <img src="<?php echo base_url(); ?>assets/back/images/<?php echo $logo_sekolah; ?>" alt="John Doe" />
                    </div>
                    <h4 class="name"><?php echo $this->session->userdata('nama'); ?></h4>
                    <a href="<?php echo base_url(); ?>index.php/auth/logout">Log Out</a>
                </div>
                <nav class="navbar-sidebar2">
                    <ul class="list-unstyled navbar__list">
					
						<li>
                            <a href="<?php echo base_url(); ?>index.php/operator">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
						
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/operator/siswa">
                                <i class="fas fa-users"></i>Siswa</a>
                            <span class="inbox-num"><?php echo $jml_siswa; ?></span>
                        </li>
						
						<li>
                            <a href="<?php echo base_url(); ?>index.php/operator/nilai_siswa">
                                <i class="fas fa-file-text"></i>Nilai Siswa</a>
								<span class="inbox-num"><?php echo $jml_nilai_siswa; ?></span>		
                        </li>
						
						<li>
                            <a href="<?php echo base_url(); ?>index.php/operator/kelas">
                                <i class="fas fa-home"></i>Kelas</a>										
                        </li>
						
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/operator/setting">
                                <i class="fas fa-gear"></i>Pengaturan</a>
                        </li>
						
						<li>
                            <a href="<?php echo base_url(); ?>index.php/operator/cetak_kartu">
									<i class="fas fa-print"></i>Cetak Kartu Login</a>
                        </li>
						
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
		
		

        <!-- PAGE CONTAINER-->
        <div class="page-container2">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop2">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap2">
                            <div class="logo d-block d-lg-none">
                                <a href="#">
                                    <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                </a>
                            </div>
                            <div class="header-button2">
                                <div class="header-button-item js-item-menu">
                                    <i class="zmdi zmdi-search"></i>
                                    <div class="search-dropdown js-dropdown">
                                        <form action="">
                                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Search for datas &amp; reports..." />
                                            <span class="search-dropdown__icon">
                                                <i class="zmdi zmdi-search"></i>
                                            </span>
                                        </form>
                                    </div>
                                </div>                                
                                <div class="header-button-item mr-0 js-sidebar-btn">
                                    <i class="zmdi zmdi-menu"></i>
                                </div>
                                <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-settings"></i>Setting</a>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- END HEADER DESKTOP-->