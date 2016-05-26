<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/">Ci Project</a>
					</div>


					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li> <?php echo anchor('admin', "Admin")?> </li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Components <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li> <?php echo anchor('auth', 'Ion auth')?> </li>
									<li class="divider"></li>
									<li> <?php echo anchor('plugins/bootstrapImageGallery', "Bootstrap Image Gallery")?> </li>
									<li> <?php echo anchor('plugins/justifiedGallery', "Justified Gallery")?> </li>
									<li> <?php echo anchor('plugins/dateTimePicker', "DateTime Picker")?> </li>
									<li> <?php echo anchor('plugins/colorPicker', "Color Picker")?> </li>
									<li> <?php echo anchor('plugins/jqueryFileUpload', "Jquery File Upload")?> </li>
									<li class="divider"></li>
									<li> <?php echo anchor('plugins/loaderAssets', "Loader helper")?> </li>
								</ul>
							</li>
						</ul>
						<?php if ($this->ion_auth->logged_in()): ?>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<?=$this->user->full_name; ?>
									 <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="<?php echo base_url('auth/edit_user')  .'/'. $this->user->id; ?>">Modifica Profilo</a></li>
										<li role="separator" class="divider"></li>
										<li><a href="<?php echo base_url('auth/logout')?>"> Logout </a></li>
		          					</ul>
								</li>
							</ul>
						<? else: ?>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo base_url('admin/auth/login')?>"> Login </a></li>
							</ul>
						<? endif; ?>
					</div><!-- ./ navbar-collapse -->
				</div><!-- ./ container-fluid -->

			</nav>
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->