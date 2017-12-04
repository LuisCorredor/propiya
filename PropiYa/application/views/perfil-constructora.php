<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>PropiYA - Mi Cuenta</title>
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



<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Mi Cuenta</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs">
					<ul>
						<li></li>
					</ul>
				</nav>

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
						<li class="sub-nav-title">Administrar Cuenta</li>
						<li><a href="perfil" class="current"><i class="sl sl-icon-user"></i> Mi Cuenta</a></li>
						<li><a href="favoritos"><i class="sl sl-icon-star"></i> Listado de Favoritos</a></li>
						<li><a href="verificar"><i class="sl sl-icon-check"></i> Verificar Constructora</a></li>
					</ul>
					
					<ul class="my-account-nav">
						<li class="sub-nav-title">Proyectos</li>
						<li><a href="publicaciones"><i class="sl sl-icon-docs"></i> Mis Publicaciones</a></li>
						<li><a href="publicar"><i class="sl sl-icon-action-redo"></i> Publicar Proyecto</a></li>
					</ul>

					<ul class="my-account-nav">
						<li><a href="seguridad"><i class="sl sl-icon-lock"></i> Cambiar Contrase&ntilde;a</a></li>
						<li><a href="acceso/cerrar"><i class="sl sl-icon-power"></i> Cerrar Sesi&oacute;n</a></li>
					</ul>

				</div>

			</div>
		</div>

		<div class="col-md-8">
			<div class="row">


				<div class="col-md-8 my-profile">
					<h4 class="margin-top-0 margin-bottom-30">Mi Cuenta</h4>

					<label>Nombre y Apellido</label>
					<input value="Juan Agust&iacute;n Greve" type="text">

					<label>Nombre de la Constructora</label>
					<input value="Constructora de Rafaela" type="text">

					<label>Tel&eacute;fonos de Contacto</label>
					<input value="(123) 123-456" type="text">

					<label>Correo Electr&oacute;nico</label>
					<input value="jennie@example.com" type="text">


					<h4 class="margin-top-50 margin-bottom-25">Acerca de la Construcotra</h4>
					<textarea name="about" id="about" cols="30" rows="10">Maecenas quis consequat libero, a feugiat eros. Nunc ut lacinia tortor morbi ultricies laoreet ullamcorper phasellus semper</textarea>
				

					<h4 class="margin-top-50 margin-bottom-0">Red Social</h4>

					<label><i class="fa fa-twitter"></i> Twitter</label>
					<input value="https://www.twitter.com/" type="text">

					<label><i class="fa fa-facebook-square"></i> Facebook</label>
					<input value="https://www.facebook.com/" type="text">

					<label><i class="fa fa-google-plus"></i> Google+</label>
					<input value="https://www.google.com/" type="text">

					<label><i class="fa fa-linkedin"></i> Linkedin</label>
					<input value="https://www.linkedin.com/" type="text">


					<button class="button margin-top-20 margin-bottom-20">Guardar Cambios</button>
				</div>

				<div class="col-md-4">
					<!-- Avatar -->
					<div class="edit-profile-photo">
						<img src="<?= base_url() ?>/assets/images/agent-02.jpg" alt="">
						<div class="change-photo-btn">
							<div class="photoUpload">
							    <span><i class="fa fa-upload"></i> Actualizar Foto</span>
							    <input type="file" class="upload" />
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>

	</div>
</div>


<?php include("globals/footer.php"); ?>


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