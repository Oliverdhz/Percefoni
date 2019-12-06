<?php
require 'reciclaje/user.php';
require 'reciclaje/user_sesion.php';
$userSession = new UserSession();
$user = new User();
?>
<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="DaRealIndex.php" class="logo">
			<img src="images/icons/logo.png" alt="IMG-LOGO">
		</a>
		<!-- Menu -->
		<div class="wrap_menu">
			<nav class="menu">
				<ul class="main_menu">
					<li>
						<a href="DaRealIndex.php">Home</a>
					</li>
					<li>
						<a href="product.php">Shop</a>
					</li>
					<li class="sale-noti">
						<a href="product.php">Sale</a>
					</li>
					<li>
						<a href="cart.php">Features</a>
					</li>
					<li>
						<a href="blog.php">Blog</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
		<!-- Header Icon -->
		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>
			<span class="linedivide1"></span>
			<div class="header-wrapicon2 snipcart-checkout">
				<img src="images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
				<span class="header-icons-noti snipcart-items-count">0</span>

			
			</div>
		</div>
	</div>