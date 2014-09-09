	<div class="box-body">

		<h4 class="page-header">VI. Verificación del examen de preselección nivel 2</h4>
	<?php
		$attributes = array('id' => 'frm_sec_6', 'name' => 'frm_sec_6', 'role' => 'form-horizontal' );
		echo form_open('', $attributes);
	?>
			<div class="row form-group">
				<div class="col-sm-3">
					<label>6.1 Cuántos postulantes preseleccionados tuvieron por cada cargo?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N2_6_1_TOTAL" name="N2_6_1_TOTAL" placeholder="Nro Total" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N2_6_1_T_CORD" name="N2_6_1_T_CORD" placeholder="Total de Coordinadores de local" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N2_6_1_T_ACL" name="N2_6_1_T_ACL" placeholder="Total ACL" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N2_6_1_OBS" name="N2_6_1_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>6.2 Cuántos postulantes por cargo cumplen con el perfil solicitado?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N2_6_2_TOTAL" name="N2_6_2_TOTAL" placeholder="Nro Total" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N2_6_2_T_CORD" name="N2_6_2_T_CORD" placeholder="Total de Coordinadores de local" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="N2_6_2_T_ACL" name="N2_6_2_T_ACL" placeholder="Total ACL" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N2_6_2_OBS" name="N2_6_2_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>6.3 Se remitió a la sede central el formato con el personal preseleccionado?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N2_6_3_SINO" name="N2_6_3_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N2_6_3_OBS" name="N2_6_3_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>6.4 La evaluación se realizó siguiendo los procedimientos establecidos por el MINEDU?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N2_6_4_SINO" name="N2_6_4_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N2_6_4_OBS" name="N2_6_4_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>6.5 Se envió a la sede central el formato con la relación del personal seleccionado para el curso de capacitación nivel 2?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="N2_6_5_SINO" name="N2_6_5_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="N2_6_5_OBS" name="N2_6_5_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
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
			
			// Form Seccion 6 //
			$('#frm_sec_6').validate({
					rules : 
					{
						N2_6_1_TOTAL: 
						{
							required: true,
							digits: true
						},
						N2_6_1_T_CORD: 
						{
							required: true,
							digits: true
						},
						N2_6_1_T_ACL: 
						{
							required: true,
							digits: true
						},
						N2_6_2_TOTAL:
						{
							required: true,
							digits: true	
						},
						N2_6_2_T_CORD:
						{
							required: true,
							digits: true	
						},
						N2_6_2_T_ACL:
						{
							required: true,
							digits: true	
						},
						N2_6_3_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						N2_6_4_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						N2_6_5_SINO:
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
						$('.text_success').show();
						form = $('#frm_sec_6');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 6 }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_examen_pre',
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