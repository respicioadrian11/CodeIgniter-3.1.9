<!DOCTYPE html>
	

	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Travel Admin</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS

			============================================= -->
			<link rel="stylesheet" href="<?= base_url('assets/css/sweetalert.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/sweetalert2.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/linearicons.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css')?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/magnific-popup.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/jquery-ui.css') ?>">				
			<link rel="stylesheet" href="<?= base_url('assets/css/nice-select.css') ?>">							
			<link rel="stylesheet" href="<?= base_url('assets/css/animate.min.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.css') ?>">				
			<link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/text.css') ?>">
			<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-animation.css') ?>">							
			<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome-animation.min.css') ?>">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
		</head>
	<body>
		
<div class="container-fullwidth main-menu-admin">
	<div class="row align-items-center justify-content-between d-flex">
		<div id="logo">
			<a href="<?= base_url('admin/adminhome')?>"><img src="<?= base_url('assets/img/logo.png')?>" alt="" title="" /></a>
		</div>
  	<nav id="nav-menu-container">
				<ul class="nav-menu">
				  <li><a href="<?= base_url('admin/adminhome')?>">Dashboard</a></li>
				  <li><a href="<?= base_url('admin/chartCon')?>">Charts</a></li>
				  <li><a href="#">Gallery</a></li>
				  <li><a href="#">Guests</a></li>
				  <li><a href="#">Reservations</a></li>
				  <li><a href="<?= base_url('admin/flights')?>">flights</a></li>
				  <li><a href="#">Services</a></li>
				  <li class="menu-has-children"><a href="#"><?= $this->session->userdata('adminemail');?></a>
						<ul>
						  <li><a href="#">Edit Profile</a></li>
						  <li><a href="#">Promo</a></li>
						  <li><a href="<?= base_url('login/admin_logout') ?>">LogOut</a></li>
						</ul>
					</li>					    
				</ul>
			</nav><!-- #nav-menu-container -->		
		</div>
	</div>
