	<div class="box-body">
		<h3 class="page-header">X. Actividades de Coordinaciones Efectuadas y Elaboración de Croquis de Local de Aplicación</h3>
	<?php
		$attributes = array('id' => 'frm_sec_10', 'name' => 'frm_sec_10', 'role' => 'form-horizontal' );
		echo form_open('', $attributes);
	?>
			<div class="row form-group">
				<div class="col-sm-3">
					<label>10.1 ¿Se reunieron miembros del equipo de la RA con el comité de Vigilancia de la sede o representantes de la DRE psrs coordinar el proceso de la evaluación?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_1_SINO" name="VC_10_1_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_1_CANT" name="VC_10_1_CANT" placeholder="¿Cuántos?" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="VC_10_1_OBS" name="VC_10_1_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>10.2 ¿Se coordinó con la Policía Nacional del Perú para el dia de la aplicación?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_2_SINO" name="VC_10_2_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="VC_10_2_FECHA" name="VC_10_2_FECHA" placeholder="fecha de presentación de oficio: dd/mm/yyyy" class="form-control" maxlength="10">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>10.3 ¿Se remitió oficio solicitando la presencia de la Fiscalí para el día de la aplicación?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_3_SINO" name="VC_10_3_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="VC_10_3_FECHA" name="VC_10_3_FECHA" placeholder="fecha de presentación de oficio: dd/mm/yyyy" class="form-control" maxlength="10">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>10.4 ¿Se remitió el oficio solicitando el apoyo de ambulacia y paremédicos, para el día de la aplicación al MINSA o ESSALUD, Bomberos?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_4_SINO" name="VC_10_4_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_4_CANT" name="VC_10_4_CANT" placeholder="¿Cuántos?" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="VC_10_4_FECHA" name="VC_10_4_FECHA" placeholder="fecha de presentación de oficio: dd/mm/yyyy" class="form-control" maxlength="10">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>10.5 ¿Verificar si cuenta con la elaboración del Croquis del Local de Aplicación, en formato físico y virtual?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_5_SINO" name="VC_10_5_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="VC_10_5_CANT" name="VC_10_5_CANT" placeholder="¿Cuántos?" class="form-control" maxlength="3">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" id="VC_10_5_OBS" name="VC_10_5_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
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
			
			// Form Seccion 10 //
			$('#frm_sec_10').validate({
					rules : 
					{
						VC_10_1_SINO: 
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VC_10_1_CANT:
						{
							digits: true
						},
						VC_10_2_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VC_10_2_FECHA:
						{
							peruDate: true
						},
						VC_10_3_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VC_10_3_FECHA:
						{
							peruDate: true
						},
						VC_10_4_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VC_10_4_CANT:
						{
							digits: true
						},
						VC_10_4_FECHA:
						{
							peruDate: true
						},
						VC_10_5_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VC_10_5_CANT:
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
						form = $('#frm_sec_10');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 10 }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_coordinadores',
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