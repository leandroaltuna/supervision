	<div class="box-body">
		<h3 class="page-header">IV. Verificación de la Consecución de Locales de Aplicación</h3>
		<form role="form-horizontal">
			<div class="row form-group">
				<div class="col-sm-2">
					<label>Sede</label>
				</div>
				<div class="col-sm-3">
					<input type="text" id="IV_SEDE" name="IV_SEDE" class="form-control" value="<?php echo $headquarters->Nombre_Sede; ?>" readonly="true">
				</div>
				<div class="col-sm-3">
					<label>Total Aulas Requeridas</label>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Total Locales Visitados</label>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<label>Total Locales cumplen condiciones según TDR</label>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="pull-right">
					<button class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>
	</div>
	
	<div class="box-body">
		<div class="row">
			<div class="form-group">
				<div class="col-sm-2">
					<label>LOCALES</label>
				</div>
				<div class="col-sm-5">
					<select id="locales_iv" name="locales_iv" class="form-control">
						<!-- AJAX -->
					</select>
				</div>
			</div>
		</div>
		<hr>
		<div class="box-body">
			<div class="row">
			<?php
				$attributes = array('id' => 'frm_sec_4', 'name' => 'frm_sec_4' );
				echo form_open('', $attributes);
			?>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>Nombre Local de Aplicación</label>
							</div>
							<div class="col-sm-5">
								<input type="text" id="Nombre" name="Nombre" class="form-control" value="" readonly="">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>Dirección</label>
							</div>
							<div class="col-sm-5">
								<input type="text" id="Direccion" name="Direccion" class="form-control" value="" readonly="">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.1 Cuántas aulas se van a utilizar durante la aplicación?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_1_TOTAL" name="C_4_1_TOTAL" placeholder="Nro Total" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_1_OBS" name="C_4_1_OBS" placeholder="Observaciones" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.2 Cuántas aulas cumplen con las condiciones estipuladas: tamaño, mobiliario adecuado, electricidad?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_2_TOTAL" name="C_4_2_TOTAL" placeholder="Nro Total" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_2_OBS" name="C_4_2_OBS" placeholder="Observaciones" class="form-control">
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.3 Cuántos SSHH se van a utilizar durante la aplicación?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_3_TOTAL" name="C_4_3_TOTAL" placeholder="Nro Total" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-3">
								<input type="text" id="C_4_3_OBS_V" name="C_4_3_OBS_V" placeholder="Obs. Varones" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-3">
								<input type="text" id="C_4_3_OBS_M" name="C_4_3_OBS_M" placeholder="Obs. Mujeres" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.4 Cuántos SSHH se encuentran en buenas condiciones?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_4_TOTAL" name="C_4_4_TOTAL" placeholder="Nro Total" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-3">
								<input type="text" id="C_4_4_OBS_V" name="C_4_4_OBS_V" placeholder="Obs. Varones" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-3">
								<input type="text" id="C_4_4_OBS_M" name="C_4_4_OBS_M" placeholder="Obs. Mujeres" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.5 Cuántos pabellones se van a utilizar durante la aplicación (incluir centro de acopio)?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_5_TOTAL" name="C_4_5_TOTAL" placeholder="Nro Total" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_5_OBS" name="C_4_5_OBS" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.6 El local cuenta con un cerco perimétrico?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_6_SINO" name="C_4_6_SINO" placeholder="Si(1) / No(2)" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_6_OBS" name="C_4_6_OBS" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.7 Cuántas puertas de ingreso tiene el local de aplicación?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_7_TOTAL" name="C_4_7_TOTAL" placeholder="Nro Total" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_7_OBS" name="C_4_7_OBS" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.8 El local cuenta con rampa de acceso?(casos de discapacidad).</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_8_SINO" name="C_4_8_SINO" placeholder="Si(1) / No(2)" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_8_OBS" name="C_4_8_OBS" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.9 El local cuenta con accesos internos seguros?(escalera, pasadizos).</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_9_SINO" name="C_4_9_SINO" placeholder="Si(1) / No(2)" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_9_OBS" name="C_4_9_OBS" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.10 El local cuenta con señal wifi?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_10_SINO" name="C_4_10_SINO" placeholder="Si(1) / No(2)" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_10_OBS" name="C_4_10_OBS" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.11 Cuál es el ancho de banda de la señal de internet?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_11_TOTAL" name="C_4_11_TOTAL" placeholder="Nro Total" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_11_OBS" name="C_4_11_OBS" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.12 El local es de uso exclusivo que no interfiere con la aplicación de la evaluación?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_12_SINO" name="C_4_12_SINO" placeholder="Si(1) / No(2)" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_12" name="C_4_12" placeholder="Institución con que comparte el local" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.13 El lugar para realizar el escaneado de control de ingreso a los profesores tiene las condiciones necesarias para el óptimo funcionamiento de los equipos?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_13_SINO" name="C_4_13_SINO" placeholder="Si(1) / No(2)" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_13" name="C_4_13" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-sm-3">
								<label>4.14 El lugar designado como centro de acopio es seguro y tiene fácil acceso para el acondicionamiento del material?.</label>
							</div>
							<div class="col-sm-2">
								<input type="text" id="C_4_14_SINO" name="C_4_14_SINO" placeholder="Si(1) / No(2)" class="form-control">
								<div class="help-block error"></div>
							</div>
							<div class="col-sm-4">
								<input type="text" id="C_4_14" name="C_4_14" placeholder="Observaciones" class="form-control">
								<div class="help-block error"></div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="pull-right">
								<button class="btn btn-primary">Guardar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			
			load_cmb_iv();

			$('#locales_iv').on('change', function() {
				
				depa = '<?php echo $departament->CCDD; ?>';
				sede = '<?php echo $headquarters->Cod_Sede; ?>';
				codigo = $(this).val();

				$.ajax({
					url: CI.site_url + '/verificacion_tareas/view_detalle_iv',
					type: 'POST',
					data: { depa:depa, sede:sede, codigo:codigo },
					cache: false,
					dataType: 'json',
					success:function(json_data)
					{
						$.each( json_data.DetalleIV,
								function (fila, valor)
								{
									$('#' + fila).val(valor);
								}
							);
					}
				});
			});

			// Form Seccion 4 //
			$('#frm_sec_4').validate({
					rules : 
					{
						Nombre: 
						{
							required: true
						},
						C_4_1_TOTAL: 
						{
							required: true,
							digits: true
						},
						C_4_2_TOTAL:
						{
							required: true,
							digits: true	
						},
						C_4_3_TOTAL:
						{
							required: true,
							digits: true	
						},
						C_4_4_TOTAL:
						{
							required: true,
							digits: true	
						},
						C_4_5_TOTAL:
						{
							required: true,
							digits: true
						},
						C_4_6_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						C_4_7_TOTAL:
						{
							required: true,
							digits: true	
						},
						C_4_8_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]	
						},
						C_4_9_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]	
						},
						C_4_10_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]	
						},
						C_4_11_TOTAL:
						{
							required: true,
							digits: true
						},
						C_4_12_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						C_4_13_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						C_4_14_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						}
					},
					messages : 
					{

					},
					errorPlacement: function(error, element) {
						$(element).next().after(error);
					},
					invalidHandler: function(form, validator) {
						var errors = validator.numberOfInvalids();
						if (errors) {
							var message = errors == 1
							? 'Por favor corrige estos errores:\n'
							: 'Por favor corrige los ' + errors + ' errores.\n';
							var errors = "";
							if (validator.errorList.length > 0) {
								for (x=0;x<validator.errorList.length;x++) {
									errors += "\n\u25CF " + validator.errorList[x].message;
								}
							}
							alert(message + errors);
						}
						validator.focusInvalid();
					},
					submitHandler: function(form)
					{
						form = $('#frm_sec_4');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'codigo', value: $('#locales_iv').val() }
						);
						
						$.ajax({
							url: CI.site_url + '/verificacion_tareas/save_detalle_verificacion',
							type: 'POST',
							data: form_data,
							dataType: 'json',
							success: function(json) {
								$('.text_success').hide();
								alert(json.msg);
								if (json.estado)
								{
									button_form.removeAttr('disabled');
								}
							}
						});
					}
				}
			);


		});

		function load_cmb_iv()
		{
			depa = '<?php echo $departament->CCDD; ?>';
			sede = '<?php echo $headquarters->Cod_Sede; ?>';

			$.ajax({
				url: CI.site_url + '/verificacion_tareas/get_local',
				type: 'POST',
				data: { depa:depa, sede:sede },
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
				}
			});
		}

	</script>