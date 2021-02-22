<!-- Main content -->

<?php

$input_atr = array(
	'class'=>'form-control'
);

 ?>
<div class="content-wrapper">
<div class="page-header page-header-light">
		<div class="page-header-content header-elements-md-inline">
			<div class="page-title d-flex ">
				<h4><span class="font-weight-semibold">Usuarios</span></h4>
				<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
			</div>

<div class="header-elements d-none">
						<div class="d-flex justify-content-center">
							<a href="<?= base_url('Manager/Usuarios')?>" class="btn btn-light btn-float text-default"><i class="icon-users"></i><span>Usuarios</span></a>
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

	<!-- Content area -->
	<div class="content">
		<div class="card">
			<div class="card-header header-elements-inline">
				<h5 class="card-title"><?php echo lang('create_user_heading');?></h5>
				<div class="header-elements">
					<div class="list-icons">
						<a class="list-icons-item" data-action="collapse"></a>
						<a class="list-icons-item" data-action="reload"></a>
						<a class="list-icons-item" data-action="remove"></a>
					</div>
				</div>
			</div>

			<div class="card-body">

				
				
				<?php echo form_open("Manager/Usuarios/nuevo");?>
			
				<fieldset>
					<div class="row">
						<legend class="font-weight-semibold"><i class="icon-reading mr-2"></i> <?php echo lang('create_user_subheading');?></legend>

							<div class="form-group col-md-4">
								<?php echo lang('create_user_fname_label', 'first_name');?> <br />
								<?php echo form_input($first_name,$this->form_validation->set_value('first_name'),$input_atr);?>
								<?php echo form_error('first_name','<span class="form-text text-danger">',"</span>");?>
							</div>


							<div class="form-group col-md-4">
								<?php echo lang('create_user_lname_label', 'last_name');?> <br />
					<?php echo form_input($last_name,$this->form_validation->set_value('last_name'),$input_atr);?>
					<?php echo form_error('last_name','<span class="form-text text-danger">',"</span>");?>
							</div>
							<div class="form-group col-md-4">
								<?php echo lang('create_user_email_label', 'email');?> <br />
								<?php echo form_input($email,$this->form_validation->set_value('email'),$input_atr);?>
								<?php echo form_error('email','<span class="form-text text-danger">',"</span>");?>
							</div>

							<div class="form-group col-md-4">
								<?php echo lang('create_user_password_label', 'password');?> <br />
					<?php echo form_input($password,$this->form_validation->set_value('password'),$input_atr);?>
						<?php echo form_error('password','<span class="form-text text-danger">',"</span>");?>
							</div>					
							<div class="form-group col-md-4">
					<?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
				<?php echo form_input($password_confirm,$this->form_validation->set_value('password_confirm'),$input_atr);?>
						<?php echo form_error('password_confirm','<span class="form-text text-danger">',"</span>");?>
							</div>
					</div>

				<?php 
					$btn_atr = array(
						'class'=>'btn btn-primary',
						
					);
 					?>
					<div class="text-right">
					
					<?php echo form_submit('submit', lang('create_user_submit_btn'),$btn_atr);?>

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