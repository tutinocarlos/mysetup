<?php 

$input_atr ='';


?>
<!-- Main content -->
<div class="content-wrapper">

	<!-- Page header -->
	<div class="page-header page-header-light" style="display:none">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex ">
				<h4><span class="font-weight-semibold">Usuarios</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="d-flex justify-content-center">
					<a href="<?= base_url('manager/usuarios/nuevo')?>" class="btn btn-light btn-float text-default"><i class="icon-user-plus "></i><span>Nuevo</span></a>
				</div>
			</div>
		</div>

		<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline d-none">
			<div class="d-flex">
				<div class="breadcrumb">
					<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
					<a href="#" class="breadcrumb-item">Link</a>
					<span class="breadcrumb-item active">Current</span>
				</div>

				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

			<div class="header-elements d-none">
				<div class="breadcrumb justify-content-center">
					<a href="#" class="breadcrumb-elements-item">
						Link
					</a>

					<div class="breadcrumb-elements-item dropdown p-0">
						<a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
							Dropdown
						</a>

						<div class="dropdown-menu dropdown-menu-right">
							<a href="#" class="dropdown-item">Action</a>
							<a href="#" class="dropdown-item">Another action</a>
							<a href="#" class="dropdown-item">One more action</a>
							<div class="dropdown-divider"></div>
							<a href="#" class="dropdown-item">Separate action</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->

	<!-- Content area -->
	<div class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<?php echo form_open("Manager/Categorias/grabar");?>
						<div class="form-group">
							<label>Nombre categoría:</label>
							<input name="nombre_cate" type="text" class="form-control" placeholder="">
							<?php echo form_error('nombre_cate','<span class="form-text text-danger">',"</span>");?>
						</div>
						<div class="text-right">
							<button type="submit" name="botonSubmit"class="btn btn-primary">Enviar<i class="icon-paperplane ml-2"></i></button>
						</div>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div id="list_cate"></div>
			</div>

		</div>
	</div>
	<!-- /content area -->
	<!-- Footer -->
	<?= $this->footer ?>
	<!-- /footer -->
</div>
<!-- /main content -->