
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

        <!-- Modal [sign] -->
        <div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        <i class="icon-close fas fa-arrow-right"></i>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?= base_url('auth/login')?>" class="row">
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
			$("#sign").modal("show");			
							
	</script>
      
        
        <!-- ==============================================
        Particles
        =============================================== -->
        <script>
//            particles('space', 'particles-1');
        </script>

    </body>
</html>