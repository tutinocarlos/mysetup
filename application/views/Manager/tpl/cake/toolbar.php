
		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

			<!-- Sidebar mobile toggler -->
			<div class="sidebar-mobile-toggler text-center">
				<a href="#" class="sidebar-mobile-main-toggle">
					<i class="icon-arrow-left8"></i>
				</a>
				Navigation
				<a href="#" class="sidebar-mobile-expand">
					<i class="icon-screen-full"></i>
					<i class="icon-screen-normal"></i>
				</a>
			</div>
			<!-- /sidebar mobile toggler -->


			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-user">
					<div class="card-body">
						<div class="media">
							<div class="mr-3">
								<a href="#"><img src="<?= base_url('static/Manager/global_assets/')?>images/image.png" width="38" height="38" class="rounded-circle" alt=""></a>
							</div>

							<div class="media-body">
								<div class="media-title font-weight-semibold"><?= $user->first_name .','.$user->last_name?></div>
								<div class="font-size-xs opacity-50">
									<i class="icon-pin font-size-sm"></i> &nbsp;<?= $user->id_empresa; ?>
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<a href="#" class="text-white"><i class="icon-cog3"></i></a>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="card card-sidebar-mobile">
					<ul class="nav nav-sidebar" data-nav-type="accordion">

						<!-- Main -->
						<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Escritorio</div> <i class="icon-menu" title="Main"></i></li>
						<li class="nav-item">
							<a href="<?= base_url('Manager')?>" class="nav-link">
								<i class="icon-home4"></i>
								<span>Escritorio</span>
							</a>
						</li>						
						<li class="nav-item">
							<a href="<?= base_url('Manager/Productos')?>" class="nav-link">
								<i class="icon-home4"></i>
								<span>Productos</span>
							</a>
						</li>
						<li class="nav-item nav-item-submenu ">
							<a href="#" class="nav-link"><i class="icon-stack"></i> <span>Productos</span></a>

							<ul class="nav nav-group-sub" data-submenu-title="Starter kit">
								<li class="nav-item"><a href="<?= base_url('Manager/Productos/nuevo')?>" class="nav-link">Nuevo</a></li>					
								<li class="nav-item"><a href="<?= base_url('Manager/Productos')?>" class="nav-link">Listado</a></li>

								<li class="nav-item"><a href="<?= base_url('Manager/Categorias')?>" class="nav-link">Categorias</a></li>
								<li class="nav-item"><a href="../seed/navbar_fixed_both.html" class="nav-link">Both navbars fixed</a></li>
								<li class="nav-item"><a href="../seed/layout_fixed.html" class="nav-link">Fixed layout</a></li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="../full/changelog.html" class="nav-link">
								<i class="icon-list-unordered"></i>
								<span>Changelog</span>
								<span class="badge bg-blue-400 align-self-center ml-auto">2.2</span>
							</a>
						</li>
						<!-- /main -->

					</ul>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->

