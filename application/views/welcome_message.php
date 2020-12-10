<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>MySETUP - hosting Argentina</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- favicon
        ============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('static/')?>images/favicon.ico">

	<!-- Google Fonts
        ============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- All css files are included here
        ============================================ -->
	<!-- Bootstrap CSS
        ============================================ -->
	<link rel="stylesheet" href="<?= base_url('static/')?>css/bootstrap.min.css">

	<!-- This core.css file contents all plugins css file
        ============================================ -->
	<!-- Nice select css
        ============================================ -->
	<link rel="stylesheet" href="<?= base_url('static/')?>css/nice-select.css">
	<!-- This core.css file contents all plugins css file
        ============================================ -->
	<link rel="stylesheet" href="<?= base_url('static/')?>css/core.css">

	<!-- Theme shortcodes/elements style
        ============================================ -->
	<link rel="stylesheet" href="<?= base_url('static/')?>css/shortcode/shortcodes.css">

	<!--  Theme main style
        ============================================ -->
	<link rel="stylesheet" href="<?= base_url('static/')?>style.css">

	<!-- Color CSS
		============================================ -->
	<link rel="stylesheet" href="<?= base_url('static/')?>css/plugins/color.css">

	<!-- Responsive CSS
        ============================================ -->
	<link rel="stylesheet" href="<?= base_url('static/')?>css/responsive.css">
	<link rel="stylesheet" href="<?= base_url('static/')?>css/floating-wpp.min.css">

	<!-- Modernizr JS -->
	<script src="<?= base_url('static/')?>js/vendor/modernizr-2.8.3.min.js"></script>
		<script src="<?= base_url('static/')?>js/vendor/jquery-1.12.4.min.js"></script>
		<script src="<?= base_url('static/')?>js/floating-wpp.min.js"></script>
</head>

<body data-base_url="<?= base_url()?>">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?= base_url('static/')?>http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!--Main Wrapper Start-->
	<div class="as-mainwrapper">
		<!--Header Area Start-->
		<header id="sticky-header" class="header-area">
			<!-- Header Top Start -->
			<div class="header-top">
				<div class="container">
					<div class="col-md-12">
						<div class="header-top-list">
							<ul class="top-contact-list">
								<li><a href="#">Call Us: +549 11 3118 1453</a></li>
							</ul>
							<div class="social-links invisible">
								<a href="#"><i class="zmdi zmdi-facebook"></i></a>
								<a href="#"><i class="zmdi zmdi-rss"></i></a>
								<a href="#"><i class="zmdi zmdi-google-plus"></i></a>
								<a href="#"><i class="zmdi zmdi-pinterest"></i></a>
								<a href="#"><i class="zmdi zmdi-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Header Top Start -->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-lg-3">
						<div class="logo"><a href="<?= site_url('welcome/index')?>"><img src="<?= base_url('static/')?>images/logo/logo.png" alt="JobHere" class="img-fluid"></a></div>
					</div>
					<div class="col-sm-6 col-lg-9 invisible">
						<div class="pull-right header-menu">
							<nav id="primary-menu">
								<ul class="main-menu text-right">
									<li><a href="index.html">Home</a>
										<ul class="dropdown">
											<li><a href="index.html">Home Version One</a></li>
											<li><a href="index-2.html">Home Version Two</a></li>
											<li><a href="index-3.html">Home Box Layout</a></li>
										</ul>
									</li>
									<li><a href="job-board.html">Jobs</a>
										<ul class="dropdown">
											<li><a href="single-job-post.html">Single Job</a></li>
											<li><a href="job-details.html">Job Details</a></li>
										</ul>
									</li>
									<li><a href="about.html">About</a></li>
									<li><a href="#">Pages</a>
										<ul class="dropdown">
											<li><a href="job-board.html">Job Board</a></li>
											<li><a href="single-job-post.html">Single Job</a></li>
											<li><a href="job-details.html">Job Details</a></li>
											<li><a href="candidates.html">Candidates</a></li>
											<li><a href="resume.html">Resume</a></li>
											<li><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</li>
									<li><a href="blog.html">Blog</a>
										<ul class="dropdown">
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</nav>
							<div class="login-btn">
								<a class="modal-view button" href="#" data-toggle="modal" data-target="#register">Register</a>
								<a class="modal-view button" href="#" data-toggle="modal" data-target="#productModal">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile Menu Area start -->
			<div class="mobile-menu-area invisible">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li><a href="index.html">HOME</a>
											<ul>
												<li><a href="index.html">Home Version One</a></li>
												<li><a href="index-2.html">Home Version Two</a></li>
												<li><a href="index-3.html">Home Box Layout</a></li>
											</ul>
										</li>
										<li><a href="job-board.html">Job</a>
											<ul class="sub-menu">
												<li><a href="single-job-post.html">Single Job</a></li>
												<li><a href="job-details.html">Job Details</a></li>
											</ul>
										</li>
										<li><a href="about.html">About</a></li>
										<li><a href="#">Page</a>
											<ul class="sub-menu">
												<li><a href="job-board.html">Job Board</a></li>
												<li><a href="single-job-post.html">Single Job</a></li>
												<li><a href="job-details.html">Job Details</a></li>
												<li><a href="candidates.html">Candidates</a></li>
												<li><a href="resume.html">Resume</a></li>
												<li><a href="blog.html">Blog Page</a></li>
												<li><a href="blog-details.html">Blog Details</a></li>
												<li><a href="contact.html">Contact</a></li>
											</ul>
										</li>
										<li><a href="blog.html">Blog</a>
											<ul class="sub-menu">
												<li><a href="blog-details.html">Blog Details</a></li>
											</ul>
										</li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile Menu Area end -->
		</header>
		<section id="contratar">
		<div class="search-job-area bg-5">
			<div class="container">
				<div class="row">
					<div class="col-xl-10 col-lg-12 ml-auto mr-auto">
						<div class="job-search-content text-center">
							<h4>Asesoramiento + Seguridad + Soporte </h4>
							<h2>Pago en Pesos Argentinos</h2>
							<form action="#" method="post">
								<div class="form-container">
									<div class="box-select">

										<div class="select">
											<button type="button">Características</button>
										</div>
									</div>

								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-job-post-area ptb-130 ptb-sm-60">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="single-job-content">

							<div class="title"><span>Detalles de Hosting Web</span></div>
							<div class="single-job-form">
								<p>Tenemos el orgullo de ofrecer servicio de web hosting ilimitado con el respaldo de la garantía de 100% de uptime, soporte técnico profesional 24/7, espacio SSD, servidores verdes ultrarrápidos, SSL para su dominio con y sin www totalmente GRATIS! Evite que los navegadores muestre su web como insegura.</p>
							</div>
							<div class="title"><span>Características</span></div>
							<div class="single-job-form">
								<div class="single-info mb-14">
									<span class="mark-icon block pl-27">10 GB de espacio en disco</span>
									<span class="mark-icon block pl-27">1048 GB de trasferencia mensual</span>
									<span class="mark-icon block pl-27">Ilimitadas cuentas de email</span>
									<span class="mark-icon block pl-27">Base de Datos Ilimitadas </span>
									<span class="mark-icon block pl-27">Dominios y Sub-dominios ilimitados</span>
									<span class="mark-icon block pl-27">Certificado SSL gratuito LetsEncrypt</span> <span class="mark-icon block pl-27">Aplicaciones Autoinstalables</span>
									<span class="mark-icon block pl-27">Acceso Cpanel</span> <span class="mark-icon block pl-27">Aplicaciones Autoinstalables</span>
								</div>
							</div>
							<div class="title"><span>Servicios adicionales</span></div>
							<div class="single-job-form">
								<div class="single-info mb-14">
									<span class="number block">Registro y Mantenimiento de Dominios</span>
									<span class="number block">Servicio de Correo electrónico</span>
									<span class="number block">Servicio de Back-Up</span>
								</div>
							</div>
							<div class="title" id="seccion_contratar"><span>Contratar</span></div>
							<style>
								.error{
									color:red;
								}
							</style>
<form action="<?= base_url('contratar')?>"  method="post" id="contact-form">
<?php echo validation_errors(); ?>
<div class="row">
	
    <div class="form-group col-md-4"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Nombre y Apellido </label>
        <input type="text" class="form-control" id="full_name" name="full_name" value="<?php echo set_value('full_name'); ?>">
        <span class="error" id="error_full_name"></span>
    </div>    

    <div class="form-group col-md-4"> <!-- Street 1 -->
        <label for="street1_id" class="control-label">Email</label>
        <input type="text" class="form-control" id="email" name="email"  value="<?php echo set_value('email'); ?>">
        <span class="error" id="error_email"></span>
    </div>                    
                            
    <div class="form-group col-md-4"> <!-- Street 2 -->
        <label for="street2_id" class="control-label">Teléfono</label>
        <input type="text" class=" form-control" id="telefono" name="telefono" value="<?php echo set_value('telefono'); ?>">
        <span class="error" id="error_telefono"></span>
    </div>    
</div>
    <div class="form-group"> <!-- City-->
        <label for="city_id" class="control-label">Plan</label>
        <input type="text" class="form-control" id="plan" name="plan" value="Plan 10 GB full 2040 - Anual" readonly>
        <span class="error" id="error_plan"></span>
    </div>
<div class="row">
<div class="col-md-6">
	
	<div class="form-group ">
    <label class="form-check-label">
      <input id="registro" class="form-check-input" value="requiere_dominio" name="requiero_dominio" type="checkbox"> Requiero registrar dominio
    </label>
</div>
	<div class="form-group ">
    <label class="form-check-label">
      <input id="delegacion" class="form-check-input" value="posee_dominio" name="posee_dominio"  type="checkbox">Ya poseo Dominio
    </label>
    </div>
	<span class="error" id="error_dns"></span>
	
</div>
<div class="col-md-6">
	
		<div class="form-group "> <!-- City-->
        <label for="city_id" class="control-label">Dominio</label>
        <input type="text" class="form-control" id="dominio" name="dominio"  value="<?php echo set_value('dominio'); ?>" >
    </div>
    <span class="error" id="error_dominio"></span> 
</div>
  </div> 
    <hr>
    <div class="form-group"> <!-- Submit Button -->
        <button id="enviar_contrato"  type="submit" class="btn btn-primary">Enviar !</button>
    </div>     
   <p class="form-messege"></p> 
</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		</section>
		<!-- End of Footer area -->
	</div>
	<!--End of Main Wrapper Area-->

	<!--Start of Login Form-->
	<div id="quickview-login">
		<!-- Modal -->
		<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
					</div>
					<div class="modal-body">
						<div class="form-pop-up-content ptb-60 pl-60 0">
							<div class="area-title text-center mb-43">
								<img src="<?= base_url('static/')?>images/logo/logo.png" alt="jobhere">
							</div>
							<form method="post" action="#">
								<div class="form-box">
									<input type="text" name="username" placeholder="Email" class="mb-14">
									<input type="password" name="pass" placeholder="Password">
								</div>
								<div class="fix ptb-30">
									<span class="remember pull-left"><input class="p-0 pull-left" type="checkbox">Remember Me</span>
									<span class="pull-right"><a href="#">Forget Password?</a></span>
								</div>
								<div class="text-center">
									<button type="submit" class="text-uppercase">Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End of Login Form-->
	<!--Start of Login Form-->
	<div id="quickview-register">
		<!-- Modal -->
		<div class="modal fade" id="register" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
					</div>
					<div class="modal-body">
						<div class="form-pop-up-content ptb-60 pl-60 0">
							<div class="area-title text-center mb-43">
								<img src="<?= base_url('static/')?>images/logo/logo.png" alt="jobhere">
							</div>
							<form method="post" action="#">
								<div class="form-box box2">
									<input type="text" name="firstname" placeholder="First Name" class="mb-14">
									<input type="text" name="lastname" placeholder="Last Name">
								</div>
								<div class="form-box">
									<input type="email" name="emailnew" placeholder="Email" class="mb-14">
									<input type="password" name="pass" placeholder="Password">
								</div>
								<div class="fix ptb-30">
									<span class="remember pull-left"><input class="p-0 pull-left" type="checkbox">Remember Me</span>
								</div>
								<div class="text-center">
									<button id="" type="submit" class="text-uppercase">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End of Login Form-->
	<div id="myDiv"></div>
	<script >

			$('#myDiv').floatingWhatsApp({
				phone: '5491131181453',
				headerTitle: 'Contacto mediante Whatsapp!', //Popup Title
				popupMessage: 'Hola en que puedo ayudarte?', //Popup Message
				showPopup: true, //Enables popup display
				buttonImage: '<img src="'+$("body").data('base_url')+'/static/images/icons/whatsapp.svg" />', //Button Image
				//headerColor: 'crimson', //Custom header color
				//backgroundColor: 'crimson', //Custom background button color
				position: "right" //Position: left | right
			});
	
	</script>

	<!-- jquery latest version
		========================================================= -->


	<!-- Bootstrap framework js
		========================================================= -->
	<script src="<?= base_url('static/')?>js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

	<!-- Owl Carousel js
        ========================================================= -->
	<script src="<?= base_url('static/')?>js/owl.carousel.min.js"></script>

	<!-- Jquery nice select js 
        ========================================================= -->
	<script src="<?= base_url('static/')?>js/jquery.nice-select.min.js"></script>

	<!-- nivo slider js
		========================================================= -->
	<script src="<?= base_url('static/')?>lib/nivo-slider/js/jquery.nivo.slider.js"></script>
	<script src="<?= base_url('static/')?>lib/nivo-slider/home.js"></script>

	<!-- Js plugins included in this file
		========================================================= -->
	<script src="<?= base_url('static/')?>js/plugins.js"></script>

	<!-- Video Player JS
		========================================================= -->
	<script src="<?= base_url('static/')?>js/jquery.mb.YTPlayer.js"></script>

	<!-- AJax Mail JS
		========================================================= -->
	<script src="<?= base_url('static/')?>js/ajax-mail.js"></script>

	<!-- Mail Chimp JS
		========================================================= -->
	<script src="<?= base_url('static/')?>js/jquery.ajaxchimp.min.js"></script>

	<!-- Waypoint Js
		========================================================= -->
	<script src="<?= base_url('static/')?>js/waypoints.min.js"></script>

	<!-- Main js file contents all jQuery plugins activation
		========================================================= -->
	<script src="<?= base_url('static/')?>js/main.js"></script>


</body>

</html>