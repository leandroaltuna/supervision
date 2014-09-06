	<div class="box-body">
		<h4 class="page-header">II. Verificación del local de la Sede Operativa</h4>
	<?php
		$attributes = array('id' => 'frm_sec_2', 'name' => 'frm_sec_2', 'role' => 'form-horizontal' );
		echo form_open( '', $attributes);
	?>
		<!-- <form role="form"> -->
			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.1 El local de la sede es de uso exclusivo?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_1_SINO" name="A2_2_1_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_1_OBS" name="A2_2_1_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.2 Cuántos ambientes tiene el local de la sede?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_2_TOTAL" name="A2_2_2_TOTAL" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_2_OBS" name="A2_2_2_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.3 Cuántos metros cuadrados tiene el local de la sede?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_3_TOTAL" name="A2_2_3_TOTAL" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_3_OBS" name="A2_2_3_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.4 El espacio del local de la sede es adecuado según el número de personas a laborar?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_4_SINO" name="A2_2_4_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_4_OBS" name="A2_2_4_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.5 El local de la sede cuenta con los servicios básicos (Luz, Agua y Desagüe)?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_5_SINO" name="A2_2_5_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_5_OBS" name="A2_2_5_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.6 El local de la sede cuenta con mobiliario suficiente para el personal? (mes, sillas).</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_6_SINO" name="A2_2_6_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_6_OBS" name="A2_2_6_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.7 La sede cuenta con PC de uso exclusivo destinadas para el proyecto? Cuántas?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_7_SINO" name="A2_2_7_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_7_TOTAL" name="A2_2_7_TOTAL" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<input type="text" id="A2_2_7_OBS" name="A2_2_7_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.8 Cuántas PC están en buen estado?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_8_TOTAL" name="A2_2_8_TOTAL" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_8_OBS" name="A2_2_8_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.9 La sede cuenta con señal de internet?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_9_SINO" name="A2_2_9_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_9_OBS" name="A2_2_9_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.10 Cuál es el ancho de banda de la conexión de internet?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_10_TOTAL" name="A2_2_10_TOTAL" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_10_OBS" name="A2_2_10_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.11 La sede cuenta con impresora multifuncional operativa? Cuántas?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_11_SINO" name="A2_2_11_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_11_TOTAL" name="A2_2_11_TOTAL" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<input type="text" id="A2_2_11_OBS" name="A2_2_11_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.12 La impresora de la sede es de uso exclusivo del proyecto?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_12_SINO" name="A2_2_12_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_12_OBS" name="A2_2_12_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.13 La sede cuenta con teléfono fijo o celular para el proyecto?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_13_SINO" name="A2_2_13_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_13_OBS" name="A2_2_13_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.14 La sede esta implementada con los diagramas operativos? (Flujo de tareas, Nombre del Proyecto, Relación de la RA de la sede).</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_14_SINO" name="A2_2_14_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_14_OBS" name="A2_2_14_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.15 La sede cuenta con los croquis del local de aplicación y ubicación del personal?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A2_2_15_SINO" name="A2_2_15_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A2_2_15_OBS" name="A2_2_15_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="pull-right">
					<button class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>

	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			
			// Form Seccion 2 //
			$('#frm_sec_2').validate({
					rules : 
					{
						A2_2_1_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_2_TOTAL: 
						{
							required: true,
							digits: true
						},
						A2_2_3_TOTAL: 
						{
							required: true,
							digits: true
						},
						A2_2_4_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_5_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_6_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_7_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_7_TOTAL: 
						{
							required: true,
							digits: true
						},
						A2_2_8_TOTAL: 
						{
							required: true,
							digits: true
						},
						A2_2_9_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_10_TOTAL: 
						{
							required: true,
							digits: true
						},
						A2_2_11_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_11_TOTAL: 
						{
							required: true,
							digits: true
						},
						A2_2_12_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_13_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_14_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A2_2_15_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
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
						form = $('#frm_sec_2');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 2 }
						);
						
						$.ajax({
							url: CI.site_url + '/verificacion_tareas/save_actividad',
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
	</script>