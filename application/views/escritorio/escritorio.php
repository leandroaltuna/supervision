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
			<section class="col-lg-12">
				<div class="box box-solid">
					<div class="box-header">
						<h3 class="box-title">Departamentos con sedes</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
						<div class="box-group" id="accordion">
							<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
							<!-- ajax -->
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</section>
			
		</div><!-- /.row -->
	</section>
	<script type="text/javascript">
		$(function() {

			load_page();

		});

		function load_page()
		{
			$.ajax({
				url: CI.site_url + '/ubigeo/user_departamento',
				type: 'POST',
				cache: false,
				dataType: 'json',
				success:function(json_data)
				{
					var code_html = '';

					$.each( json_data.departament,
							function (i, datos)
							{
								code_html += '<div class="panel box box-success">' +
												'<div class="box-header">' +
													'<h4 class="box-title">' +
														'<a data-toggle="collapse" data-parent="#accordion" href="#collapse' + datos.CCDD + '">' +
															datos.Departamento +
														'</a>' +
													'</h4>' +
												'</div>' +
												'<div id="collapse' + datos.CCDD + '" class="panel-collapse collapse">' +
													'<div class="box-body">' +
														'<ul id="items_' + datos.CCDD + '">' +
														'</ul>' +
													'</div>' +
												'</div>' +
											'</div>';
							}
						);

					$('#accordion').html( code_html );

					$.each( json_data.headquarters,
							function (i, datos)
							{
								code_html = '<li>' +
												'<a href="' + CI.site_url + '/escritorio/opciones/' + datos.CCDD + '/' + datos.Cod_Sede + '">' + datos.Nombre_Sede + '</a>' +
											'</li>';

								$('#items_' + datos.CCDD ).append( code_html );

							}
						);

				}
			});
		}

	</script>