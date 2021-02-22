
<?php 

if (!isset($_SESSION['usuario'])) {
$usuario = 'nada';
}else{
	
$usuario = 'algo';
}
?>
<!DOCTYPE html>

<html lang="en">

    <head>

        <!-- ==============================================
        Basic Page Needs
        =============================================== -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>Pedidos en linea - .dev</title>

        <meta name="description" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="subject" content="Business, Consulting, Finance, Insurance, Startup and Technology">
        <meta name="author" content="Codings">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="<?= base_url('static')?>/images/favicon.ico">
        <link rel="apple-touch-icon" href="<?= base_url('static/web/feli')?>/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url('static/web/feli')?>/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url('static/web/feli')?>/images/apple-touch-icon-114x114.png">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/vendor/bootstrap.min.css?data=<?= time();?>">
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/vendor/slider.min.css?data=<?= time();?>">
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/main.css?data=<?= time();?>">
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/vendor/icons.min.css?data=<?= time();?>">
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/vendor/icons-fa.min.css?data=<?= time();?>">
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/vendor/animation.min.css?data=<?= time();?>">
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/vendor/gallery.min.css?data=<?= time();?>">
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/vendor/cookie-notice.min.css?data=<?= time();?>">

       
         <!-- ==============================================
        Google reCAPTCHA // Put your site key here
        =============================================== -->
        <script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="<?= base_url('static/web/feli')?>/js/vendor/jquery.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/jquery.easing.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/jquery.inview.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/popper.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/bootstrap.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/ponyfill.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/slider.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/animation.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/progress-radial.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/bricklayer.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/gallery.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/shuffle.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/cookie-notice.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/vendor/particles.min.js?data=<?= time();?>"></script>
        <script src="<?= base_url('static/web/feli')?>/js/main.js?data=<?= time();?>"></script>
        		<script src="<?= base_url('static/')?>js/floating-wpp.min.js?data=<?= time();?>"></script>
        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        
        <link rel="stylesheet" href="<?= base_url('static/web/feli')?>/css/default.css?data=<?= time();?>">
        
				<link rel="stylesheet" href="<?= base_url('static/')?>css/floating-wpp.min.css?data=<?= time();?>">

        <!-- ==============================================
        Theme Color
        =============================================== -->
        <meta name="theme-color" content="#21333e">

        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {
                --header-bg-color: #f9f9f9;
                --nav-item-color: #21333e;
                --hero-bg-color: #f9f9f9;
                
                --section-1-bg-color: #eef4ed;
                --section-2-bg-color: #111117;
                --section-3-bg-color: #ffffff;
                --section-4-bg-color: #111117; --section-4-bg-image: url('<?= base_url('static/web/feli')?>/images/bg-7.jpg');
                --section-5-bg-color: #111117;
                --section-6-bg-color: #ffffff;

                --footer-bg-color: #111117;
            }
        </style>
        
    </head>

    <body class="home" data-base_url="<?= base_url()?>">


        <!-- Preloader -->
        <div id="preloader" data-timeout="2000" class="odd preloader counter">
            <div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">
                <div data-percent="100" class="radial">
                    <span></span>
                </div>
            </div>
        </div>

        <!-- Header -->
        <header id="header">

            <!-- Top Navbar -->
            <nav class="navbar navbar-expand top">
                <div class="container header">

                    <!-- Navbar Items [left] -->
                    <ul class="navbar-nav">
              
                    </ul>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items [right] -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>+1 (305) 1234-5678</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i>hello@example.com</a>
                        </li>
                    </ul>

                    <!-- Navbar Icons -->
                    <ul class="navbar-nav icons">
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="nav-item social">
                            <a href="#" class="nav-link pr-0"><i class="fab fa-linkedin-in"></i></a>
                        </li>
                    </ul>

                </div>
            </nav>

            <!-- Navbar -->
            <nav class="navbar navbar-expand navbar-fixed sub">
                <div class="container header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand light" href="/cakeshop">
                        <span class="brand">
                            <span class="featured">
                                <span class="first">Dulces</span>
                            </span>
                            <span class="last">Pasteles</span>
                        </span>
                        
                        <!-- 
                            Custom Logo
                            <img src="<?= base_url('static/web/feli')?>/images/logo.svg" alt="NEXGEN">
                        -->
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item">
                            <a href="#Pasteleria" class="smooth-anchor nav-link">PASTELERIA</a>
                        </li>
<!--
                        <li class="nav-item">
                            <a href="#insumos" class="smooth-anchor nav-link">INSUMOS</a>
                        </li>
-->
               <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#cart">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>          <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#sign">
                                <i class="icon-user"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                    <!-- Navbar Action -->
                    <ul class="navbar-nav action">
                        <li class="nav-item ml-3">
                            <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header>


        <!-- Pasteleria -->
        <section id="Pasteleria" class="section-3 showcase blog-grid filter-section projects">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <h2 class="mb-0">Pastelería</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" value="all" checked class="btn-filter-item">
                                    <span>Todo</span>
                                </label>
                                <?php foreach($categorias as $data): ?>
                                
                                <?php if($this->categorias->check($data->id_cate)): ?>
                          
                                <label class="btn">
                                    <input type="radio" value="cate_<?= $data->id_cate ?>" class="btn-filter-item">
                                    <span><?= $data->nombre_cate ?></span>
                                </label>
                                <?php endif; ?>
                                <?php endforeach; ?>
             
                          
                            </div>
                        </div>
                    </div>  
                    <div class="row items filter-items invisible">                       
                     <?php foreach($productos as $data): ?>                                   
                     <?php //for($x=0; $x < 6; $x++): ?>                                   
<?php  
$filtro = '';
?>
<?php foreach($data->categorias as $cate):?>
<?php 
$filtro .= '[cate_'.$cate->id_cateprod_cate.']';

?>
<?php endforeach;?>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='"<?= $filtro ?>"'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?= base_url($data->url_imagen)?>" alt="<?= $data->nombre_producto ?>">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                 <a href="#" class="primary-color" data-toggle="modal" data-target="#agregar" data-id="<?= $data->id_producto?>"><i class="fas fa-cart-plus fa-2x"></i>
                                       </a>
                                        <a href="#" class="primary-color" data-toggle="modal" data-target="#agregar" data-id="<?= $data->id_producto?>">
                                            <h4><?= $data->nombre_producto ?></h4>
                                            <p ><?= $data->detalle_producto ?></p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right "></i></a>
                            </div>
                        </div>            
       
                     <?php //endfor;?>                                   
                     <?php endforeach;?>                                   

                        <div class="col-1 filter-sizer"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services -->
        <section id="services" class="section-1 offers featured" style="display:none">
            <div class="container">
                <div class="row intro">
                    <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                        <span class="pre-title m-auto ml-md-0">Our business areas</span>
                        <h2>Excellence in <span class="featured"><span>Services</span></span></h2>
                       
                    </div>
                </div>
        <!-- insumos -->
        <section id="insumos" class="section-3 showcase blog-grid filter-section projects" style="display:none;">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <span class="pre-title">We do more for everyone</span>
                            <h2 class="mb-0">Actions & <span class="featured"><span>Projects</span></span></h2>
                        </div>
                    </div>
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" value="all" checked class="btn-filter-item">
                                    <span>All</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="institutional" class="btn-filter-item">
                                    <span>Institutional</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="social" class="btn-filter-item">
                                    <span>Social</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="events" class="btn-filter-item">
                                    <span>Events</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="innovation" class="btn-filter-item">
                                    <span>Innovation</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="environment" class="btn-filter-item">
                                    <span>Environment</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="technology" class="btn-filter-item">
                                    <span>Technology</span>
                                </label>
                            </div>
                        </div>
                    </div>                    
                    <div class="row items filter-items">                       
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","social","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?= base_url('static/web/feli')?>/images/project-1.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Academic professional program in social media</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>            
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["institutional","events","environment"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?= base_url('static/web/feli')?>/images/project-2.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>President's speech at the annual meeting</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>     
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["environment","institutional","social"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?= base_url('static/web/feli')?>/images/project-3.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>International business trip in Shanghai</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","events","innovation"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?= base_url('static/web/feli')?>/images/project-4.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Technology workshop with education theme</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["social","environment","events"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?= base_url('static/web/feli')?>/images/project-5.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Donation of clothes and food to the partner NGO</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","institutional","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?= base_url('static/web/feli')?>/images/project-6.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Confraternization of the procurement team</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                                <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-1 filter-sizer"></div>
                    </div>
                </div>
            </div>
        </section>
            </div>
        </section>


        <!-- Contact -->
        <section id="contact" class="section-6 form contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                        <div class="row intro">
                            <div class="col-12 p-0">
                                <span class="pre-title m-0">Envía un Mensaje</span>
                                <h2><span class="featured"><span>Consultas</span></span></h2>
                                <p>Te responderemos al la brevedad.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 p-0">
                                <form action="php/form.php" id="nexgen-simple-form" class="nexgen-simple-form">
                                    <input type="hidden" name="section" value="nexgen_form">

<!--                                    <input type="hidden" name="reCAPTCHA">-->
                                    <!-- Remove this field if you want to disable recaptcha -->

                                    <div class="row form-group-margin">
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="text" name="name" class="form-control field-name" placeholder="Nombre">
                                        </div>
                                        <div class="col-12 col-md-6 m-0 p-2 input-group">
                                            <input type="email" name="email" class="form-control field-email" placeholder="Email">
                                        </div>
                    
                                        <div class="col-12 m-0 p-2 input-group">
                                            <textarea name="message" class="form-control field-message" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="col-12 col-12 m-0 p-2 input-group">
                                            <span class="form-alert"></span>
                                        </div>
                                        <div class="col-12 input-group m-0 p-2">
                                            <a class="btn primary-button">ENVIAR</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="contacts">
                            <h4><a class="navbar-brand light" href="/feli">
                        <span class="brand">
                            <span class="featured">
                                <span class="first">Dulces</span>
                            </span>
                            <span class="last">Pasteles</span>
                        </span>
                        
                        <!-- 
                            Custom Logo
                            <img src="http://mysetup.local/static/web/feli/images/logo.svg" alt="NEXGEN">
                        -->
                    </a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <p>Praesent diam lacus, dapibus sed imperdiet consectetur.</p>
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-phone-alt mr-2"></i>
                                        +1 (305) 1234-5678
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-envelope mr-2"></i>
                                        hello@example.com
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-map-marker-alt mr-2"></i>
                                        Main Avenue, 987
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW MAP</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Footer -->
        <footer>

         

            <!-- Copyright -->
            <section id="copyright" class="p-3 odd copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                            <p>texto</p>
                            <!--
                                Suggestion: Replace the text above with a description of your website.
                             -->
                        </div>
                        <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                            <p>© 2020 </p>
                        </div>
                    </div>
                </div>
            </section>

        </footer>

        <!-- Modal [search] -->
        <div id="cart" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
																	<div class="col-12 p-0">
																		<h3>Tus datos</h3>
																		<div class="row">
																			<div class="col-12 p-0 input-group">
																				<input name="nombre" id="nombre" type="text" class="form-control" placeholder="Enter Keywords">
																			</div>				
																			<div class="col-12 p-0 input-group">
																				<input name="email" id="email" type="email" class="form-control" placeholder="Enter Keywords">
																			</div>
																			<div class="col-12">
																				<span id="error_data"></span>
																			</div>
																			<div class="col-12 col-md-4 p-0 input-group align-self-center">
                                        <button id="continuar" class="btn primary-button">Guardar</button>
                                    </div>
																		</div>
																		
																	</div>
                                    <div class="col-12 p-0">
                                        <h3>Tu pedido</h3>
                                        <div class="badges row"></div>
                                    </div>
                                </div>
                     
                                <div class="row">
                                    <div class="col-12 col-md-8  p-0 input-group align-self-center">
                                        <button id="enviar" class="btn success-button">Enviar por whatsapp</button>
                                    </div>     
                                       <div class="col-12 col-md-8  p-0 input-group align-self-center">
                                        <button id="enviar2" class="btn success-button">Enviar por email</button>
                                    </div>
                                    <div class="col-12 col-md-4 p-0 input-group align-self-center">
                                        <button data-dismiss="modal" id="" class="btn primary-button">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('auth/login')?>" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Sign In</h2>
                                        <p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal" data-target="#register">Register now</a>.</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input name="identity" type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <button class="btn primary-button">INGRESAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [register] -->
        <div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form action="/" class="row">
                            <div class="col-12 p-0 align-self-center">
                                <div class="row">
                                    <div class="col-12 p-0 pb-3">
                                        <h2>Tus datos</h2>
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group">
                                        <input name="nombre" type="text" class="form-control" placeholder="Nombre" required>
                                    </div>
                                    <div class="col-12 p-0 input-group">
                                        <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 p-0 input-group align-self-center">
                                        <a id="add_name" class="btn primary-button">CONTINUAR</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [map] -->
        <div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header absolute" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body p-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.123073808986!2d12.490042215441486!3d41.89021017922119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f61b6532013ad%3A0x28f1c82e908503c4!2sColiseu!5e0!3m2!1spt-BR!2sbr!4v1594148229878!5m2!1spt-BR!2sbr" width="600" height="450" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="fas fa-arrow-up"></i>
            </a>
        </div>        
        	<div id="myDiv"></div>
        		<script >

			$('#myDiv').floatingWhatsApp({
				phone: '5491131181453',
				headerTitle: 'Pedidos por Whatsapp!', //Popup Title
				popupMessage: 'Hola espero tu pedido !!', //Popup Message
				showPopup: true, //Enables popup display
				buttonImage: '<img src="'+$("body").data('base_url')+'/static/images/icons/whatsapp.svg" />', //Button Image
				//headerColor: 'crimson', //Custom header color
				//backgroundColor: 'crimson', //Custom background button color
				position: "left" //Position: left | right
			});
	
	</script>
      
        
        <!-- ==============================================
        Particles
        =============================================== -->
        <script>
//            particles('space', 'particles-1');
        </script>

    </body>
</html>