<!-- Main content -->

<?php

echo '<pre>';
//var_dump($productos[0]->categorias);
echo '</pre>';

$input_atr = array(
	'class'=>'form-control'
);

 ?>
<div class="content-wrapper">


	<!-- Content area -->
<div class="content">

<div class="row">
<style>
.imagen_producto {
	height: 150px;
	background-size: cover;
	background-repeat: no-repeat;
	
}		
</style>
<?php if(isset($productos)): ?>
<?php	foreach($productos as $data): ?>
<div class="col-md-4">
	<div class="card">
							<div class="card-img-actions mx-1 mt-1">
							<div class="imagen_producto" style="background-image: url('<?= base_url($data->url_imagen) ?>')"></div>
<!--								<img class="card-img img-fluid" src="<?= base_url($data->url_imagen) ?>" alt="">-->
								<div class="card-img-actions-overlay card-img">
									<a href="<?= base_url($data->url_imagen)?>" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round" data-popup="lightbox">
										<i class="icon-plus3"></i>
									</a>

									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>

							<div class="card-body">
								<div class="mb-3">
									<h6 class="d-flex font-weight-semibold flex-nowrap mb-0">
										<a href="#" class="text-default mr-2"><?= $data->nombre_producto?></a>
										<span class="text-success ml-auto">$ <?= $data->importe_producto?></span>
									</h6>

<!--									<span>By <a href="#">Eugene Kopyov</a></span>-->
								</div>

								<?= $data->detalle_producto?>
							</div>

							<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
								<a href="<?= base_url('Manager/Productos/edit/'.$this->encryption->encode($data->id_producto)); ?>" class="btn bg-blue "><b><i class="icon-pencil3"></i></b> </a>
								<button type="button" class="btn btn-danger "><b><i class="icon-trash"></i></b> </button>
							
							</div>				
							
							<div class="card-footer d-sm-flex   ">
<?php	foreach($data->categorias as $dato): ?>
					<span class="badge badge-flat border-success text-success-600 m-1"><?= $dato->nombre_cate?></span>
<?php	endforeach; ?>
							</div>
						</div>
</div>
<?php	endforeach; ?>
<?php	endif; ?>
	
</div>

</div>
	<!-- /content area -->
	<!-- Footer -->
	<?= $this->footer ?>
	<!-- /footer -->
</div>
<!-- /main content -->