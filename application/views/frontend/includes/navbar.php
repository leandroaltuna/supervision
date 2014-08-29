		<!-- header logo: style can be found in header.less -->
		<header class="header">
			<a href="<?php echo base_url(); ?>" class="logo">
				<!-- Add the class icon to your logo image or logo icon to add the margining -->
				Formatos de Visitas
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li id="alert_messages" name="alert_messages" class="dropdown messages-menu">
							<!-- AJAX -->
						</li>
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="glyphicon glyphicon-user"></i>
								<span><?php echo $user->first_name; ?> <i class="caret"></i></span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header bg-light-blue">
									<img src="<?php echo base_url('img').'/'.$user->image; ?>" class="img-circle" alt="User Image" />
									<p>
										<?php echo $user->first_name.' '.$user->last_name; ?> - <?php echo $user->company; ?>
										<!-- <small>Member since Nov. 2012</small> -->
									</p>
								</li>
								<!-- Menu Body -->
								<!-- <li class="user-body">
									<div class="col-xs-4 text-center">
										<a href="#">Followers</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Sales</a>
									</div>
									<div class="col-xs-4 text-center">
										<a href="#">Friends</a>
									</div>
								</li> -->
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										<a href="<?php echo site_url('auth/change_password'); ?>" class="btn btn-default btn-flat">Cambiar Clave</a>
									</div>
									<div class="pull-right">
										<a href="<?php echo site_url('auth/logout'); ?>" class="btn btn-default btn-flat">Salir</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>