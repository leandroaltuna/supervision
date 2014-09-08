	<div class="box-body">

		<h4 class="page-header">VII. Verificación del examen de preselección nivel 3</h4>
	<?php
		$attributes = array('id' => 'frm_sec_7', 'name' => 'frm_sec_7', 'role' => 'form-horizontal' );
		echo form_open('', $attributes);
	?>
			<div class="row form-group">
				<div class="col-sm-3">
					<label>7.1 Cuántos postulantes preseleccionados tuvieron por cada cargo?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N3_7_1_TOTAL" name="N3_7_1_TOTAL" placeholder="Nro Total" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N3_7_1_T_APLI" name="N3_7_1_T_APLI" placeholder="Total de Aplicadores" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N3_7_1_T_ORIE" name="N3_7_1_T_ORIE" placeholder="Total de Orientadores" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N3_7_1_T_OBS" name="N3_7_1_T_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>7.2 Cuántos postulantes por cargo cumplen con el perfil solicitado?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N3_7_2_TOTAL" name="N3_7_2_TOTAL" placeholder="Nro Total" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N3_7_2_T_APLI" name="N3_7_2_T_APLI" placeholder="Total de Aplicadores" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N3_7_2_T_ORIE" name="N3_7_2_T_ORIE" placeholder="Total de Orientadores" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N3_7_2_T_OBS" name="N3_7_2_T_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>7.3 Se remitió a la sede central el formato con el personal preseleccionado?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N3_7_3_SINO" name="N3_7_3_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N3_7_3_OBS" name="N3_7_3_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>7.4 La evaluación se realizó siguiendo los procedimientos establecidos por el MINEDU?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N3_7_4_SINO" name="N3_7_4_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N3_7_4_OBS" name="N3_7_4_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>7.5 Se envió a la sede central el formato con la relación del personal seleccionado para el curso de capacitación nivel 3?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N3_7_5_SINO" name="N3_7_5_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N3_7_5_OBS" name="N3_7_5_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
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
			
			// Form Seccion 7 //
			$('#frm_sec_7').validate({
					rules : 
					{
						N3_7_1_TOTAL: 
						{
							required: true,
							digits: true
						},
						N3_7_1_T_APLI: 
						{
							required: true,
							digits: true
						},
						N3_7_1_T_ORIE: 
						{
							required: true,
							digits: true
						},
						N3_7_2_TOTAL:
						{
							required: true,
							digits: true
						},
						N3_7_2_T_APLI:
						{
							required: true,
							digits: true
						},
						N3_7_2_T_ORIE:
						{
							required: true,
							digits: true
						},
						N3_7_3_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						N3_7_4_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						N3_7_5_SINO:
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
						form = $('#frm_sec_7');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 7 }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_examen_pre',
							url: CI.site_url + '/verificacion_tareas/save_episodios',
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