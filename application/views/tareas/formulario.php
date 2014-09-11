	<style type="text/css">
		input{
			text-transform: uppercase;
		}
	</style>
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
				<a href="<?php echo site_url('escritorio/opciones').'/'.$departament->CCDD.'/'.$headquarters->Cod_Sede; ?>">
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
									<input type="text" class="form-control" id="Departamento" name="Departamento" readonly="true" value="<?php echo $departament->Departamento; ?>">
								</div>
								<div class="col-sm-2">
									<label for="user_fullname">Apellidos y Nombres del Supervisor Nacional</label>	
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="user_fullname" name="user_fullname" readonly="true" value="<?php echo $user->last_name.', '.$user->first_name; ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-sm-2">
									<label for="Nombre_Sede">Sede</label>
								</div>
								<div class="col-sm-3">
									<input type="text" class="form-control" id="Nombre_Sede" name="Nombre_Sede" readonly="true" value="<?php echo $headquarters->Nombre_Sede; ?>">
								</div>
								<!-- <div class="col-sm-2">
									<label for="fecha_verificacion">Fecha</label>
								</div>
								<div class="col-sm-1">
									<input type="text" class="form-control" id="fecha_verificacion" name="fecha_verificacion" value="">
								</div> -->
							</div>
						</div>
					</div>
					<!-- Custom Tabs -->
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab">Sección I</a></li>
							<li><a href="#tab_2" data-toggle="tab">Sección II</a></li>
							<li><a href="#tab_3" data-toggle="tab">Sección III</a></li>
							<li><a href="#tab_4" data-toggle="tab">Sección IV</a></li>
							<li><a href="#tab_5" data-toggle="tab">Sección V</a></li>
							<li><a href="#tab_6" data-toggle="tab">Sección VI</a></li>
							<li><a href="#tab_7" data-toggle="tab">Sección VII</a></li>
							<li><a href="#tab_8" data-toggle="tab">Sección VIII</a></li>
							<li><a href="#tab_9" data-toggle="tab">Sección IX</a></li>
							<li><a href="#tab_10" data-toggle="tab">Sección X</a></li>
							<li><a href="#tab_11" data-toggle="tab">Sección XI</a></li>
							<li><a href="#tab_12" data-toggle="tab">Sección XII</a></li>
							<li><a href="#tab_13" data-toggle="tab">Sección XIII</a></li>
							<li><a href="#tab_14" data-toggle="tab">Sección XIV</a></li>
						</ul>
						<div class="tab-content">
							<!-- tab-pane -->
							<div class="tab-pane active" id="tab_1">
								<?php $this->load->view('tareas/secciones/seccion_i'); ?>
							</div>
							<div class="tab-pane" id="tab_2">
								<?php $this->load->view('tareas/secciones/seccion_ii'); ?>
							</div>
							<div class="tab-pane" id="tab_3">
								<?php $this->load->view('tareas/secciones/seccion_iii'); ?>
							</div>
							<div class="tab-pane" id="tab_4">
								<?php $this->load->view('tareas/secciones/seccion_iv'); ?>
							</div>
							<div class="tab-pane" id="tab_5">
								<?php $this->load->view('tareas/secciones/seccion_v'); ?>
							</div>
							<div class="tab-pane" id="tab_6">
								<?php $this->load->view('tareas/secciones/seccion_vi'); ?>
							</div>
							<div class="tab-pane" id="tab_7">
								<?php $this->load->view('tareas/secciones/seccion_vii'); ?>
							</div>
							<div class="tab-pane" id="tab_8">
								<?php $this->load->view('tareas/secciones/seccion_viii'); ?>
							</div>
							<div class="tab-pane" id="tab_9">
								<?php $this->load->view('tareas/secciones/seccion_ix'); ?>
							</div>
							<div class="tab-pane" id="tab_10">
								<?php $this->load->view('tareas/secciones/seccion_x'); ?>
							</div>
							<div class="tab-pane" id="tab_11">
								<?php $this->load->view('tareas/secciones/seccion_xi'); ?>
							</div>
							<div class="tab-pane" id="tab_12">
								<?php $this->load->view('tareas/secciones/seccion_xii'); ?>
							</div>
							<div class="tab-pane" id="tab_13">
								<?php $this->load->view('tareas/secciones/seccion_xiii'); ?>
							</div>
							<div class="tab-pane" id="tab_14">
								<?php $this->load->view('tareas/secciones/seccion_xiv'); ?>
							</div>
							<!-- /.tab-pane -->
						</div><!-- /.tab-content -->
					</div><!-- nav-tabs-custom -->
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section>

	<script type="text/javascript">
		$(document).ready(function() {
			
			load_cmb_locales();
			view_verificacion_tareas();

		});

		function load_cmb_locales()
		{
			depa = '<?php echo $departament->CCDD; ?>';
			sede = '<?php echo $headquarters->Cod_Sede; ?>';

			post_params['depa'] = depa;
			post_params['sede'] = sede;

			$.ajax({
				url: CI.site_url + '/verificacion_tareas/get_local',
				type: 'POST',
				// data: { depa:depa, sede:sede },
				data: post_params,
				cache: false,
				dataType: 'json',
				success:function(json_data)
				{
					var code_html = '<option value="0">Seleccione...</option>';
					$.each( json_data.detalle,
							function (i, datos)
							{
								code_html += '<option value="' + datos.Id + '">' + datos.Nombre + '</option>';
							}
						);
					$('#locales_iv').html( code_html );
					$('#locales_xiii').html( code_html );
					$('#locales_xiv').html( code_html );
				}
			});
		}

		function view_verificacion_tareas()
		{
			$('.text_success').show();

			post_params['depa'] = '<?php echo $departament->CCDD; ?>';
			post_params['sede'] = '<?php echo $headquarters->Cod_Sede; ?>';

			$.ajax({
				url: CI.site_url + '/verificacion_tareas/view',
				type: 'POST',
				// data: {depa: '<?php echo $departament->CCDD; ?>', sede: '<?php echo $headquarters->Cod_Sede; ?>'},
				data: post_params,
				dataType: 'json',
				success: function(json_data) 
				{
					$.each( json_data.ACTIVIDAD,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.AVANCE_PERSONAL,
							function (fila, valor)
							{
								$('input[name=' + fila + ']').val( valor );
							}
						);

					$('.calculo_uno').trigger('change');

					$.each( json_data.CAP_IV,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.LOCALES_CAPACITACION_PRESELECCION,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.V_EXAMEN_PRE,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.V_CURSO_CAPA,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.V_COORDINACIONES,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.V_PRUEBA_EQUIPOS,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.V_SIMULACRO,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.CAP_XIII,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$('.text_success').hide();
				}
			});
		}

	</script>