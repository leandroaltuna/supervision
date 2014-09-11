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
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Reporte Nacional</h3>
					</div><!-- /.box-header -->
					<div class="box-body table-responsive">
						<table id="example2" name="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th rowspan="2">Departamento</th>
									<th rowspan="2">Locales</th>
									<th rowspan="2">Visitados</th>
									<th rowspan="2">%</th>
									<th colspan="6">Accesibilidad al Local de Aplicación</th>
									<th colspan="6">Aulas Disponibles (Incluye Aulas de Contingencia)</th>
									<th colspan="4">Tamaño de Aulas (TDR)</th>
									<th colspan="6">Estado Mobiliario</th>
									<th colspan="6">Puertas de Ingreo al Local</th>
									<th colspan="4">Servicios Higienicos</th>
									<th colspan="6">Estado de Infraestructura</th>
									<th colspan="4">Especificaciones Técnicas (TDR MINEDU)</th>
								</tr>
								<tr>
									<th>Fácil</th>
									<th>%</th>
									<th>Difícil</th>
									<th>%</th>
									<th>Lejos de Ciudad</th>
									<th>%</th>
									<th>Mayor a Programada</th>
									<th>%</th>
									<th>Igual a Programada</th>
									<th>%</th>
									<th>Menor a Programada</th>
									<th>%</th>
									<th>Adecuadas</th>
									<th>%</th>
									<th>No Adecuadas</th>
									<th>%</th>
									<th>Buen Estado</th>
									<th>%</th>
									<th>Regular Estado</th>
									<th>%</th>
									<th>No Recomendables</th>
									<th>%</th>
									<th>Tiene mas de 02</th>
									<th>%</th>
									<th>Tiene 02</th>
									<th>%</th>
									<th>Tiene solo 01</th>
									<th>%</th>
									<th>Adecuados y Limpios</th>
									<th>%</th>
									<th>No Adecuados</th>
									<th>%</th>
									<th>Buen Estado</th>
									<th>%</th>
									<th>Con Deterioro</th>
									<th>%</th>
									<th>No Recomendable</th>
									<th>%</th>
									<th>SI</th>
									<th>%</th>
									<th>NO</th>
									<th>%</th>
								</tr>
							</thead>
							<tbody>
							</tbody>
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
	<script src="<?php echo base_url('js/plugins/datatables/dataTables.fixedColumns.js'); ?>" type="text/javascript"></script>
	<style type="text/css">
		td.highlight {
			font-weight: bold;
			color: blue;
		}
	</style>

	<script type="text/javascript">
		$(function() {

			load_departament();

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
						table_sede.fnReloadAjax();
					}
				}
			);

			var table_sede = $("#example1").dataTable({
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

			var table_nacional = $("#example2").dataTable({
				sProcessing  : true,
				aoColumns: [
					{ mData: "Departamento" },
					{ mData: "Total_Locales" },
					{ mData: "Total_Visitados" },
					{ mData: "Total_P_Visitados" },
					{ mData: "Accesibilidad_1" },
					{ mData: "Accesibilidad_P_1" },
					{ mData: "Accesibilidad_2" },
					{ mData: "Accesibilidad_P_2" },
					{ mData: "Accesibilidad_3" },
					{ mData: "Accesibilidad_P_3" },
					{ mData: "Disponibilidad_1" },
					{ mData: "Disponibilidad_P_1" },
					{ mData: "Disponibilidad_2" },
					{ mData: "Disponibilidad_P_2" },
					{ mData: "Disponibilidad_3" },
					{ mData: "Disponibilidad_P_3" },
					{ mData: "Tamanio_1" },
					{ mData: "Tamanio_P_1" },
					{ mData: "Tamanio_2" },
					{ mData: "Tamanio_P_2" },
					{ mData: "Mobiliario_1" },
					{ mData: "Mobiliario_P_1" },
					{ mData: "Mobiliario_2" },
					{ mData: "Mobiliario_P_2" },
					{ mData: "Mobiliario_3" },
					{ mData: "Mobiliario_P_3" },
					{ mData: "Puertas_1" },
					{ mData: "Puertas_P_1" },
					{ mData: "Puertas_2" },
					{ mData: "Puertas_P_2" },
					{ mData: "Puertas_3" },
					{ mData: "Puertas_P_3" },
					{ mData: "SSHH_1" },
					{ mData: "SSHH_P_1" },
					{ mData: "SSHH_2" },
					{ mData: "SSHH_P_2" },
					{ mData: "Infraestructura_1" },
					{ mData: "Infraestructura_P_1" },
					{ mData: "Infraestructura_2" },
					{ mData: "Infraestructura_P_2" },
					{ mData: "Infraestructura_3" },
					{ mData: "Infraestructura_P_3" },
					{ mData: "Especificaciones_1" },
					{ mData: "Especificaciones_P_1" },
					{ mData: "Especificaciones_2" },
					{ mData: "Especificaciones_P_2" }
				],
				sAjaxSource  : CI.site_url + '/reportes/view_visitas_nacional',
				"fnServerData": function ( sSource, aoData, fnCallback ) {
					/* Add some extra data to the sender */
					// aoData.push( { "name": "depa", "value": $('#departamento').val() } );
					// aoData.push( { "name": "sede", "value": $('#sede').val() } );
					$.getJSON( sSource, aoData, function(json) { 
						/* Do whatever additional processing you want on the callback, then tell DataTables */
						fnCallback(json);
					});
				},
				iDisplayLength: 25,
				sScrollX: "100%",
				aoColumnDefs: [
					{ 
						"aTargets": [6, 8, 12, 14, 18, 22, 24, 28, 30, 34, 38, 40, 44], 
						"fnCreatedCell": function (nTd, sData, oData, iRow, iCol) {
							if (sData >'0') {
								$(nTd).css('font-weight', 'bold').css('background-color', '#FFBABA').css('color', '#D8000C');
							}
							// else 
							// { 
							// 	$(nTd).css('background-color', '#DFF2BF').css('color', '#4F8A10').css('font-weight', 'bold'); 
							// }
						}
					}
				]
			});

			new $.fn.dataTable.FixedColumns( table_nacional );
		});

	

		function load_departament()
		{
			$.ajax({
				url: CI.site_url + '/ubigeo/all_departament',
				type: 'POST',
				cache: false,
				data: post_params,
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
			post_params['codigo'] = codigo;
			$.ajax({
				url: CI.site_url + '/ubigeo/headquarters_by_departament',
				type: 'POST',
				data: post_params,
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