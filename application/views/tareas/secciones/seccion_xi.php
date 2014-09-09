	<div class="box-body">
	
		<h4 class="page-header">XI. Verificación de la Prueba de Equipos</h4>
	<?php
		$attributes = array('id' => 'frm_sec_11', 'name' => 'frm_sec_11', 'role' => 'form-horizontal' );
		echo form_open('', $attributes);
	?>
			<div class="row form-group">
				<div class="col-sm-3">
					<label>11.1 ¿Cuántos equipos llegaron a la sede?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_1_T" name="VP_11_1_T" placeholder="Tablet" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_1_S" name="VP_11_1_S" placeholder="Scanner" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_1_M" name="VP_11_1_M" placeholder="Módem" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<input type="text" id="VP_11_1_OBS" name="VP_11_1_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
					<div class="help-block error"></div>
				</div>
			</div>
			<div class="row form-group">
				<div class="col-sm-3">
					<label>11.2 ¿Cuántos equipos están operativos?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_2_T" name="VP_11_2_T" placeholder="Tablet" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_2_S" name="VP_11_2_S" placeholder="Scanner" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_2_M" name="VP_11_2_M" placeholder="Módem" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<input type="text" id="VP_11_2_OBS" name="VP_11_2_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>11.3 ¿Cuántos pruebas de equipos se efectuaron?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_3_TOTAL" name="VP_11_3_TOTAL" placeholder="Nro Total" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-5">
					<input type="text" id="VP_11_3_OBS" name="VP_11_3_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>11.4 ¿Cuántos pruebas de equipos se efectuaron en el mismo local de aplicación?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_4_TOTAL" name="VP_11_4_TOTAL" placeholder="Nro Total" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-5">
					<input type="text" id="VP_11_4_OBS" name="VP_11_4_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>11.5 ¿Hubo algún problema o falla en los equipos durante las pruebas de equipos?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_5_SINO" name="VP_11_5_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_5_TOTAL" name="VP_11_5_TOTAL" placeholder="Nro Total" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="VP_11_5_OBS" name="VP_11_5_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>11.6 ¿La recepción de información fue al 100% durante las pruebas de equipos?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_6_SINO" name="VP_11_6_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VP_11_6_TOTAL" name="VP_11_6_TOTAL" placeholder="Nro Total" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="VP_11_6_OBS" name="VP_11_6_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
					<div class="help-block error"></div>
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
			
			// Form Seccion 11 //
			$('#frm_sec_11').validate({
					rules : 
					{
						VP_11_1_T: 
						{
							required: true,
							digits: true
						},
						VP_11_1_S:
						{
							required: true,
							digits: true
						},
						VP_11_1_M:
						{
							required: true,
							digits: true
						},
						VP_11_2_T:
						{
							required: true,
							digits: true
						},
						VP_11_2_S:
						{
							required: true,
							digits: true
						},
						VP_11_2_M:
						{
							required: true,
							digits: true
						},
						VP_11_3_TOTAL:
						{
							required: true,
							digits: true
						},
						VP_11_4_TOTAL:
						{
							required: true,
							digits: true
						},
						VP_11_5_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VP_11_5_TOTAL:
						{
							digits: true
						},
						VP_11_6_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VP_11_6_TOTAL:
						{
							digits: true
						},
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
						$('.text_success').show();
						form = $('#frm_sec_11');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 11 }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_prueba_equipos',
							url: CI.site_url + '/verificacion_tareas/save_episodios',
							type: 'POST',
							data: form_data,
							dataType: 'json',
							success: function(json) {
								alert(json.msg);
								if (json.estado)
								{
									button_form.removeAttr('disabled');
								}
								$('.text_success').hide();
							}
						});
					}
				}
			);

		});

	</script>