<!-- Main content -->

<?php
//
//
//var_dump($categorias);

$input_atr = array(
	'class'=>'form-control'
);

 ?>
 
 <style>
	 select2-selection__choice{
		 
	 }

</style>
<div class="content-wrapper">


	<!-- Content area -->
	<div class="content">
		<div class="card ">
			<div class="card-header header-elements-inline">
				<h5 class="card-title"><?php echo lang('create_prod_heading');?></h5>
				<div class="header-elements">
					<div class="list-icons">
						<a class="list-icons-item" data-action="collapse"></a>
<!--
						<a class="list-icons-item" data-action="reload"></a>
						<a class="list-icons-item" data-action="remove"></a>
-->
					</div>
				</div>
			</div>

			<div class="card-body">

				<?php echo form_open_multipart("Manager/Productos/nuevo");?>
				

				<fieldset>
		
					<div class="row">
						<legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> <?php echo lang('create_prod_subheading');?></legend>
						
						
					<div class="col-md-6">

						<div class="form-group">
						<?php echo 'Seleccione categorias';?> <br />
<!--
							<select class="js-example-basic-multiple form-control" name="categorias[]" multiple="multiple">
								<option value="AL">Alabama</option>
								<option value="WY">Wyoming</option>
							</select>
-->
						<?php  
							$options =[];
							foreach($categorias as $data){
								$options[$data->id_cate]=$data->nombre_cate;
							}
							$sele =array(
								'1',
								'2',
							);
							$select_atr = array(
								'class'=>'js-example-basic-multiple form-control',
								'multiple'=>'multiple',
								'data-placeholder'=>'Seleccione categorías',
							);
							echo form_dropdown('categorias[]', $options,set_select('categorias'),$select_atr);
 ?>
							<?php echo form_error('categorias[]','<span class="form-text text-danger">',"</span>");?>
						</div>
							<div class="form-group ">
								<?php echo lang('create_prod_nombre_laabel', 'nombre');?> <br />
								<?php echo form_input('nombre',$this->form_validation->set_value('nombre'),$input_atr);?>
								<?php echo form_error('nombre','<span class="form-text text-danger">',"</span>");?>
							</div>


							<div class="form-group ">
								<?php echo lang('create_prod_detalle_laabel', 'detalle');?> <br />
					<?php echo form_textarea('detalle',$this->form_validation->set_value('detalle'),$input_atr);?>
					<?php echo form_error('detalle','<span class="form-text text-danger">',"</span>");?>
							</div>

							<div class="form-group ">
								<?php echo lang('create_prod_importe_label', 'importe');?> <br />
					<?php echo form_input('importe',$this->form_validation->set_value('importe'),$input_atr);?>
					<?php echo form_error('importe','<span class="form-text text-danger">',"</span>");?>
							</div>
						
					</div>
					

					<?php if(isset($producto->url_imagen)): ?>
				<div class="col-md-6">
						<div class="card col-md-12">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="<?= base_url($producto->url_imagen)?>" alt="">

							</div>

					</div>
						</div>
				<?php endif; ?>
				<div class="col-md-6">
						<div class="col-md-12">
							<?php echo lang('create_prod_imagen_label', 'file');?> <br />
							<input class="form-group" type="file" name="file" id="file" size="20" value="<?php echo  set_value('file', 'file');?>"/>
							<?php echo form_error('file','<span class="form-text text-danger">',"</span>");?>
						</div>

					</div>

					</div>

				<?php 
					$btn_atr = array(
						'class'=>'btn btn-primary',
					);
 					?>
					<div class="text-right">
					
					<?php echo form_submit('submit', lang('create_prod_submit_btn'),$btn_atr);?>

					</div>
				</fieldset>
				<?php echo form_close();?>
			</div>
			
		</div>





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
							
							<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center invisible">
								<span><i class="icon-comment mr-2"></i> 382</span>

								<div class="mt-2 mt-sm-0">
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<span class="text-muted ml-1">(49)</span>
								</div>
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