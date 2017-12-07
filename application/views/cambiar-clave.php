<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYA - Cambiar contraseña</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
<link rel="stylesheet" href="<?= base_url() ?>/assets/css/colors/orange.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">


<!-- Header Container
================================================== -->
<?php require("globals/menu.php") ?>
<!-- Header Container / End -->
<br/><br/>

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Cambiar Contraseña</h2>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<div class="row">


		<!-- Widget -->
		<div class="col-md-4">
			<div class="sidebar left">

				<div class="my-account-nav-container">
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Account</li>
						<li><a href="my-profile.html"><i class="sl sl-icon-user"></i> My Profile</a></li>
						<li><a href="my-bookmarks.html"><i class="sl sl-icon-star"></i> Bookmarked Listings</a></li>
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Manage Listings</li>
						<li><a href="my-properties.html"><i class="sl sl-icon-docs"></i> My Properties</a></li>
						<li><a href="submit-property.html"><i class="sl sl-icon-action-redo"></i> Submit New Property</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="change-password.html"  class="current"><i class="sl sl-icon-lock"></i> Change Password</a></li>
						<li><a href="#"><i class="sl sl-icon-power"></i> Log Out</a></li>
					</ul>

				</div>

			</div>
		</div>

		<div class="col-md-8">
			<div class="row">
				<div class="col-md-6  my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Cambiar Contraseña</h4>

					<label>Contraseña Actual</label>
					<input type="password">

					<label>Nueva Contraseña</label>
					<input type="password">

					<label>Repetir Nueva Contraseña</label>
					<input type="password">

					<a href="submit-property.html" class="margin-top-20 button">Guardar Cambios</a>
				</div>

				<div class="col-md-6">
					<div class="notification notice">
						<p>Tu contraseña debe tener por lo menos 8 caracteres para que sea segura.</p>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>


<!-- Footer
================================================== -->
<?php require("globals/footer.php") ?>
<!-- Footer / End -->


<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>


<!-- Scripts
================================================== -->
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/chosen.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/rangeSlider.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/sticky-kit.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/masonry.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/tooltips.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>/assets/scripts/custom.js"></script>


</div>
<!-- Wrapper / End -->


</body>
</html>