	<div class="box-body">
		<h3 class="page-header">I. Actividades de presentación y coordinación</h3>
	<?php
		$attributes = array('id' => 'frm_sec_1', 'name' => 'frm_sec_1', 'role' => 'form-horizontal' );
		echo form_open('', $attributes);
	?>
		<!-- <form id="frm_sec_1" role="form-horizontal"> -->
			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.1 Presentación con el Director Departamental.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A1_1_1_SINO" name="A1_1_1_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A1_1_1__OBS" name="A1_1_1__OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.2 Presentación con el(la) Coordinador(a) de Sede.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A1_1_2_SINO" name="A1_1_2_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A1_1_2_OBS" name="A1_1_2_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.3 Reunión de Coordinación con la RA de la sede departamental.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A1_1_3_SINO" name="A1_1_3_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A1_1_3_OBS" name="A1_1_3_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.4 Estuvo completa la RA en la reunión de Coordinación?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A1_1_4_SINO" name="A1_1_4_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A1_1_4_OBS" name="A1_1_4_OBS" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.5 Se detectó algún problema en la sede asignada?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="A1_1_5_SINO" name="A1_1_5_SINO" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="A1_1_5_OBS" name="A1_1_5_OBS" placeholder="Observaciones" class="form-control">
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
			
			// Form Seccion 1 //
			$('#frm_sec_1').validate({
					rules : 
					{
						A1_1_1_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A1_1_2_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A1_1_3_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A1_1_4_SINO: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						A1_1_5_SINO: 
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
						form = $('#frm_sec_1');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');

						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 1 }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_actividad',
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