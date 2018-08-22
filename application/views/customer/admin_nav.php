<div class="row align-items-center justify-content-between d-flex">
		<div id="logo">
			<a href="<?= base_url('admin/adminhome')?>"><img src="<?= base_url('assets/img/logo.png')?>" alt="" title="" /></a>
		</div>
  	<nav id="nav-menu-container">
				<ul class="nav-menu">
				  <li><a href="<?= base_url('admin/adminhome')?>">Dashboard</a></li>
				  <li><a href="#">Charts</a></li>
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