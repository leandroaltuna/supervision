	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<!-- Escritorio -->
			<?php echo $title; ?>
			<small><!-- Panel de Control --><?php echo $description; ?></small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-dashboard"></i> Inicio
				</a>
			</li>
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</section><!-- /.Content Header -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3>
							Tareas
						</h3>
						<p>
							Formato de Verificación
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-clipboard"></i>
					</div>
					<a href="<?php echo site_url('tareas/formulario/').'/'.$departament.'/'.$headquarters; ?>" class="small-box-footer">
						Ingresar <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
			<div class="col-lg-3 col-xs-6">
				<!-- small box -->
				<div class="small-box bg-green">
					<div class="inner">
						<h3>
							Visitas
						</h3>
						<p>
							Formato de Visitas a Locales
						</p>
					</div>
					<div class="icon">
						<i class="ion ion-document-text	"></i>
					</div>
					<a href="<?php echo site_url('visitas/listar').'/'.$departament.'/'.$headquarters; ?>" class="small-box-footer">
						Ingresar <i class="fa fa-arrow-circle-right"></i>
					</a>
				</div>
			</div><!-- ./col -->
		</div><!-- /.row -->
	</section>