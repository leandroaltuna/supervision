	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<!-- Escritorio -->
			<?php echo $title; ?>
			<small><!-- Panel de Control --><?php echo $description; ?></small>
		</h1>
	</section><!-- /.Content Header -->
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Reporte por Departamento y Sede</h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive">
						<div class="row">
							<div class="col-xs-3">
								<div class="form-group">
									<label>Departamento</label>
									<select id="departamento" name="departamento" class="form-control">
										<option value="0">Seleccione...</option>
										<!-- AJAX -->
									</select>
								</div>
							</div>
							<div class="col-xs-3">
								<div class="form-group">
									<label>Sedes</label>
									<select id="sede" name="sede" class="form-control">
										<option value="0">Seleccione...</option>
										<!-- AJAX -->
									</select>
								</div>
							</div>
						</div>
						<hr>
						<table id="example1" name="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Locales de Aplicación</th>
									<th>Accesibilidad al Local</th>
									<th>Aulas Disponibles</th>
									<th>Tamaño de las Aulas (TDR)</th>
									<th>Estado del Mobilario</th>
									<th>Puertas de Ingreso al Local</th>
									<th>Servicios Higienicos</th>
									<th>Estado de la Infraestructura</th>
									<th>Especificaciones Técnicas (TDR MINEDU)</th>
									<th>Fecha de Visita</th>
								</tr>
							</thead>
							<tbody>
								
							</tbody>
							<!-- <tfoot>
								<tr>
									<th>Rendering engine</th>
									<th>Browser</th>
									<th>Platform(s)</th>
									<th>Engine version</th>
									<th>CSS grade</th>
								</tr>
							</tfoot> -->
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
		</div>
	</section>
	<!-- DATA TABES SCRIPT -->

	<script src="<?php echo base_url('js/plugins/datatables/jquery.dataTables.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('js/plugins/datatables/dataTables.bootstrap.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('js/plugins/datatables/fnReloadAjax.js'); ?>" type="text/javascript"></script>

	<script type="text/javascript">
		$(function() {

			load_departament();

			var table = $("#example1").dataTable({
				sProcessing  : true,
				aoColumns: [
					{ mData: "Nombre" },
					{ mData: "Accesibilidad" },
					{ mData: "Disponibilidad" },
					{ mData: "Tamanio" },
					{ mData: "Mobiliario" },
					{ mData: "Puertas" },
					{ mData: "Servicios_Higienicos" },
					{ mData: "Infraestructura" },
					{ mData: "Especificaciones_Tecnicas" },
					{ mData: "Fecha_Visita" }
				],
				sAjaxSource  : CI.site_url + '/reportes/view_visitas_sede',
				"fnServerData": function ( sSource, aoData, fnCallback ) {
					/* Add some extra data to the sender */
					aoData.push( { "name": "depa", "value": $('#departamento').val() } );
					aoData.push( { "name": "sede", "value": $('#sede').val() } );
					$.getJSON( sSource, aoData, function(json) { 
						/* Do whatever additional processing you want on the callback, then tell DataTables */
						fnCallback(json);
					});
				}
			});

			$('#departamento').on(
				{
					change : function()
					{
						var codigo = $(this).val();
						load_headquarters( codigo );
					}
				}
			);

			$('#sede').on(
				{
					change : function()
					{
						table.fnReloadAjax();
					}
				}
			);

		});

		function load_departament()
		{
			$.ajax({
				url: CI.site_url + '/ubigeo/all_departament',
				type: 'POST',
				cache: false,
				dataType: 'json',
				success:function(json_data)
				{
					var code_html = '<option value="0">Seleccione...</option>';
					$.each( json_data.departament,
							function (i, datos)
							{
								code_html += '<option value="' + datos.CCDD + '">' + datos.Departamento + '</option>';
								
							}
						);

					$('#departamento').html( code_html );
				}
			});
		}

		function load_headquarters( codigo )
		{
			$.ajax({
				url: CI.site_url + '/ubigeo/headquarters_by_departament',
				type: 'POST',
				data: {codigo:codigo},
				cache: false,
				dataType: 'json',
				success:function(json_data)
				{
					var code_html = '<option value="0">Seleccione...</option>';
					$.each( json_data.headquarters,
							function (i, datos)
							{
								code_html += '<option value="' + datos.Cod_Sede + '">' + datos.Nombre_Sede + '</option>';
								
							}
						);

					$('#sede').html( code_html );
				}
			});
		}

	</script>