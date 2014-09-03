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
			<li>
				<a href="<?php echo site_url('escritorio/opciones').'/'.$departament.'/'.$headquarters; ?>">
					<i class="fa fa-dashboard"></i> Menu
				</a>
			</li>
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</section><!-- /.Content Header -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-lg-12">
				<div class="box box-primary">
					<div class="box-body">
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label for="Departamento">Departamento</label>	
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="Departamento" name="Departamento" readonly="true" value="">
								</div>
								<div class="col-sm-2">
									<label for="user_fullname">Apellidos y Nombres del Supervisor Nacional</label>	
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="user_fullname" name="user_fullname" readonly="true" value="">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label for="Nombre_Sede">Sede</label>
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="Nombre_Sede" name="Nombre_Sede" readonly="true" value="">
								</div>
								<div class="col-sm-2">
									<label for="fecha_verificacion">Fecha</label>
								</div>
								<div class="col-sm-1">
									<input type="text" class="form-control" id="fecha_verificacion" name="fecha_verificacion" value="">
								</div>
							</div>
						</div>
					</div>
					<!-- Custom Tabs -->
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Sección I - III</a></li>
							<li><a href="#tab_2" data-toggle="tab">Sección IV</a></li>
							<li><a href="#tab_3" data-toggle="tab">Sección V - IX</a></li>
							<li><a href="#tab_4" data-toggle="tab">Sección X - XII</a></li>
							<li><a href="#tab_5" data-toggle="tab">Sección XIII</a></li>
							<li><a href="#tab_6" data-toggle="tab">Sección XIV</a></li>
						</ul>
						<div class="tab-content">
							<!-- tab-pane -->
							<div class="tab-pane active" id="tab_1">
								<?php $this->load->view('tareas/secciones/seccion_i_iii'); ?>
							</div>
							<div class="tab-pane" id="tab_2">
								<?php $this->load->view('tareas/secciones/seccion_iv'); ?>
							</div>
							<div class="tab-pane" id="tab_3">
								<?php $this->load->view('tareas/secciones/seccion_v_ix'); ?>
							</div>
							<div class="tab-pane" id="tab_4">
								<?php #$this->load->view('tareas/secciones/seccion_v_vi'); ?>
							</div>
							<div class="tab-pane" id="tab_5">
								<?php #$this->load->view('tareas/secciones/seccion_v_vi'); ?>
							</div>
							<div class="tab-pane" id="tab_6">
								<?php #$this->load->view('tareas/secciones/seccion_v_vi'); ?>
							</div>
							<!-- /.tab-pane -->
						</div><!-- /.tab-content -->
					</div><!-- nav-tabs-custom -->
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section>