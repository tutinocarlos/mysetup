<!-- Main content -->

<?php

$input_atr = array(
	'class'=>'form-control',
//	'value' => $producto->nombre_producto
);

 ?>
<div class="content-wrapper">
<?php //var_dump($producto);	 ?>
	<!-- Content area -->
	<div class="content">
		<div class="card ">
			<div class="card-header header-elements-inline">
				<h5 class="card-title"><?php echo lang('edit_prod_heading');?></h5>
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

				<?php echo form_open_multipart("Manager/Productos/edit");?>
			
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
							$selec = [];
							foreach($producto->categorias as $dato){
								$selec[] =$dato->id_cateprod_cate;
							}
//						
//						$selec = array(
//						'1'
//						);
//						var_dump($selec);
							$select_atr = array(
								'class'=>'js-example-basic-multiple form-control',
								'multiple'=>'multiple',
								'data-placeholder'=>'Seleccione categorías',
							);
							echo form_dropdown('categorias[]', $options,$selec,$select_atr);
 ?>
							<?php echo form_error('categorias[]','<span class="form-text text-danger">',"</span>");?>
						</div>
					<?php echo form_input('id_producto',$this->form_validation->set_value('id_producto',$producto->id_producto),'readonly');?>
							<div class="form-group ">
							<?php 
//								$input_atr['value'] = $producto->nombre_producto;
 					?>
								<?php echo lang('create_prod_nombre_laabel', 'id_producto');?> <br />
			
								<?php echo form_input('nombre',$this->form_validation->set_value('nombre',$producto->nombre_producto),$input_atr);?>
								<?php echo form_error('nombre','<span class="form-text text-danger">',"</span>");?>
							</div>


							<div class="form-group ">
								<?php echo lang('create_prod_detalle_laabel', 'detalle');?> <br />
					<?php echo form_textarea('detalle',$this->form_validation->set_value('detalle',$producto->detalle_producto),$input_atr);?>
					<?php echo form_error('last_name','<span class="form-text text-danger">',"</span>");?>
							</div>

							<div class="form-group ">
								<?php echo lang('create_prod_importe_label', 'importe');?> <br />
					<?php echo form_input('importe',$this->form_validation->set_value('importe',$producto->importe_producto),$input_atr);?>
					<?php echo form_error('importe','<span class="form-text text-danger">',"</span>");?>
							</div>
						
					</div>
						<div class="col-md-6">
						<div class="col-md-12">
						<div class="card">
							<div class="card-img-actions mx-1 mt-1">
								<img class="card-img img-fluid" src="<?= base_url($producto->url_imagen).'?data='.time()?>" alt="">

							</div>

					</div>
						</div>
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
						'name'=>'editar_producto',
					);
 					?>

					<div class="text-right">
					
					<?php echo form_submit('submit', lang('edit_prod_submit_btn'),$btn_atr);?>

					</div>
				</fieldset>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<!-- /content area -->
	<!-- Footer -->
	<?= $this->footer ?>
	<!-- /footer -->
</div>
<!-- /main content -->