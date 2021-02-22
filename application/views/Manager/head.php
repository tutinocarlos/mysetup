<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url('static/Manager/global_assets/')?>css/icons/icomoon/styles.min.css?xtg=<?= time()?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('static/Manager/assets/')?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('static/Manager/assets/')?>css/bootstrap_limitless.min.css?xtg=<?= time()?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('static/Manager/assets/')?>css/layout.min.css?xtg=<?= time()?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('static/Manager/assets/')?>css/components.min.css?xtg=<?= time()?>" rel="stylesheet" type="text/css">
	<link href="<?= base_url('static/Manager/assets/')?>css/colors.min.css?xtg=<?= time()?>" rel="stylesheet" type="text/css">

<!--	/PRINCIPALES -->

	<!-- /global stylesheets -->
	<!-- Core JS files -->
	<script src="<?= base_url('static/Manager/global_assets/')?>js/main/jquery.min.js?xtg=<?= time()?>"></script>
	<script src="<?= base_url('static/Manager/global_assets/')?>js/main/bootstrap.bundle.min.js?xtg=<?= time()?>"></script>
	<script src="<?= base_url('static/Manager/global_assets/')?>js/plugins/loaders/blockui.min.js?xtg=<?= time()?>"></script>
	<script src="<?= base_url('static/Manager/global_assets/js/plugins/forms/selects/select2.min.js')?>?xtg=<?= time()?>"></script>
	<script src="<?= base_url('static/Manager/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')?>?xtg=<?= time()?>"></script>
	<script src="<?= base_url('static/Manager/global_assets/js/plugins/forms/styling/uniform.min.js')?>?xtg=<?= time()?>" ></script>
	<script src="<?= base_url('static/Manager/global_assets/js/plugins/loaders/blockui.min.js')?>?xtg=<?= time()?>" ></script>
	<!-- /core JS files -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<!-- MY_controllers CSS -->
<?php  
	/*
	CARGA DINAMICA DE CSS PROPIOS DE CADA PAGINA
	*/
		if(is_array ($this->css_datatable )){

			foreach($this->css_datatable as $data){

				echo '<link href="'.base_url().$data.'?ver='.time().' rel="stylesheet" type="text/css">';
			}

		}	
	/*
	CARGA DINAMICA DE SCRIPTS PROPIOS DE CADA PAGINA
	*/
		if(is_array ($scripts )){

			foreach($scripts as $data){

				echo '<script src="'.base_url().$data.'?ver='.time().'"></script>';
			}
		}		
		if(is_array ($script)){

			foreach($script as $data){

				echo '<script src="'.base_url().$data.'?ver='.time().'"></script>';
			}
		}
 ?>
 
	<!-- /MY_controllers CSS y js -->

		<link href="<?= base_url('static/Manager/global_assets/js/plugins/toastr/')?>toastr.min.css?xtg=<?= time()?>" rel="stylesheet" type="text/css">
	<script src="<?= base_url('static/Manager/global_assets/js/plugins/toastr/')?>toastr.js?xtg=<?= time()?>"></script>
		<script src="<?= base_url('static/Manager/global_assets/js/plugins/media/')?>fancybox.min.js?xtg=<?= time()?>"></script>
	
	
	<!-- Theme JS files -->
	<script src="<?= base_url('static/Manager/assets/')?>js/app.js?xtg=<?= time()?>"></script>
	<!-- /theme JS files -->
	<script src="<?= base_url('static/Manager/global_assets/')?>js/demo_pages/form_layouts.js?xtg=<?= time()?>"></script>
</head>


<body data-base_url="<?= base_url();?>">

	<!-- Main navbar -->
	<div class="navbar navbar-expand-md navbar-dark">
		<div class="navbar-brand">
			<a href="../full/index.html" class="d-inline-block">
				<img src="<?= base_url('static/Manager/global_assets/')?>images/logo_light.png" alt="">
			</a>
		</div>

		<div class="d-md-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-tree5"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-paragraph-justify3"></i>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="navbar-mobile">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="#" class="navbar-nav-link"><?= $this->user->app?></a>
				</li>

				<li class="nav-item dropdown">
					<a href="#" class="navbar-nav-link">
						<i class="icon-bell2"></i>
						<span class="d-md-none ml-2">Notifications</span>
						<span class="badge badge-mark border-white ml-auto ml-md-0"></span>
					</a>					
				</li>

				<li class="nav-item dropdown dropdown-user">
					<a href="#" class="navbar-nav-link d-flex align-items-center dropdown-toggle" data-toggle="dropdown">
						<img src="<?= base_url('static/Manager/global_assets/')?>images/image.png" class="rounded-circle mr-2" height="34" alt="">
						<span><?= $user->first_name?></span>
					</a>

					<div class="dropdown-menu dropdown-menu-right">
						<a href="#" class="dropdown-item"><i class="icon-user-plus"></i> Mi perfíl</a>
						<a href="#" class="dropdown-item"><i class="icon-coins"></i> </a>
						<a href="#" class="dropdown-item"><i class="icon-comment-discussion"></i> Messages <span class="badge badge-pill bg-blue ml-auto">58</span></a>
						<div class="dropdown-divider"></div>
						<a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
						<a href="<?= base_url('logout')?>" class="dropdown-item"><i class="icon-switch2"></i>Salir</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">
	<?= $tollbar;?>