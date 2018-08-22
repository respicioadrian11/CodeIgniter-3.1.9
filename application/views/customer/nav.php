<!-- <div class="header-top">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-sm-6 col-6 header-top-left">
			  <ul>
			  	<li><a href="#">Visit Us</a></li>
			  	<li><a href="#">Buy Tickets</a></li>
			  </ul>			
			</div> -->
		<!-- 	<div class="col-lg-6 col-sm-6 col-6 header-top-right">
				<div class="header-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div> -->
	<!-- 	</div>			  					
	</div>
</div> -->
<div class="container-fullwidth main-menu">
<div class="row align-items-center justify-content-between d-flex">
	<div id="logo">
		<a href="<?= base_url('home')?>"><img src="<?= base_url('assets/img/logo.png')?>" alt="" title="" /></a>
	</div>
	<nav id="nav-menu-container">
		<ul class="nav-menu">
			<li><a href="<?= base_url('home')?>">Home</a></li>
			<li><a href="<?= base_url('about') ?>">About</a></li>
			<li><a href="<?= base_url('packages')?>">Packages</a></li>
			<li><a href="<?= base_url('hotel')?>">Hotels</a></li>
			<li><a href="<?= base_url('insurence')?>">Insurance</a></li>        					          		          
			<li><a href="<?= base_url('contact')?>">Contact</a></li>
			<li class="menu-has-children"><a href="#"><?= $this->session->userdata('email');?></a>
				<ul>
					<li><a href="#">Edit Profile</a></li>
					<li><a href="<?= base_url('login/logout') ?>">LogOut</a></li>
				</ul>
			</li>					    
		</ul>
	</nav><!-- #nav-menu-container -->		
</div>
</div>