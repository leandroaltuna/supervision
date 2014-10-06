	<div class="box-body">
			<h3 class="page-header">XIV. Cobertura Alcanzada</h3>
	</div>

	<div class="box-body">
		<div class="row">
			<div class="form-group">
				<div class="col-sm-2">
					<label>Local de Aplicación</label>
				</div>
				<div class="col-sm-5">
					<select id="locales_xiv" name="locales_xiv" class="form-control">
						<!-- AJAX -->
					</select>
				</div>
			</div>
		</div>
		<hr>
		<div class="box-body">
			<div class="row">
			<?php
				$attributes = array('id' => 'frm_sec_14', 'name' => 'frm_sec_14', 'role' => 'form-horizontal' );
				echo form_open('', $attributes);
			?>
					<div class="row form-group">
						<div class="col-sm-2">
							<label>Local de Aplicación</label>
						</div>
						<div class="col-sm-6">
							<label>Cobertura Docentes</label>
						</div>
						<div class="col-sm-3">
							<label>Inventario Materiales</label>
						</div>
						<div class="col-sm-2">
							<input type="text" id="Nombre_XIV" name="Nombre_XIV" placeholder="Local de Aplicación" class="form-control" readonly="true">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="T_Aulas" name="T_Aulas" placeholder="Total Aulas" class="form-control" maxlength="4">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="T_Meta" name="T_Meta" placeholder="Meta" class="form-control" maxlength="4">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-2">
							<input type="text" id="T_Docentes_Ingreso" name="T_Docentes_Ingreso" placeholder="Total Docentes(Ingreso Local)" class="form-control" maxlength="4">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-2">
							<input type="text" id="T_Docentes_Aula" name="T_Docentes_Aula" placeholder="Total Docentes(Registro en Aula)" class="form-control" maxlength="4">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-2">
							<input type="text" id="T_Fichas" name="T_Fichas" placeholder="Total fichas opticas registradas" class="form-control" maxlength="4">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-2">
							<input type="text" id="T_Cuadernillos" name="T_Cuadernillos" placeholder="Total fichas opticas registradas" class="form-control" maxlength="4">
							<div class="help-block error"></div>
						</div>
					</div>
					<div class="row form-group">
						<div class="pull-right">
							<button class="btn btn-primary" disabled="true">Guardar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script type="text/javascript">
			$(document).ready(function() {

				$('#locales_xiv').on('change', function() {
					
					$('.text_success').show();
					$('#frm_sec_14')[0].reset();

					codigo = $(this).val();

					post_params['depa'] = '<?php echo $departament->CCDD; ?>';
					post_params['sede'] = '<?php echo $headquarters->Cod_Sede; ?>';
					post_params['codigo'] = codigo;

					nombre_xiv = '';
					if ( codigo != '0' )
					{
						nombre_xiv = $('#locales_xiv option:selected').text();
					}
					$('#Nombre_XIV').val( nombre_xiv );

					boton = $('#frm_sec_14').find(':submit');
					boton.attr('disabled', 'disabled');

					$.ajax({
						url: CI.site_url + '/verificacion_tareas/view_detalle_xiv',
						type: 'POST',
						data: post_params,
						cache: false,
						dataType: 'json',
						success:function(json_data)
						{
							$.each( json_data.COB_ALCANZADA,
									function (fila, valor)
									{
										$('#' + fila).val(valor);
									}
								);

							if ( codigo != '0' ) 
							{ 
								boton.removeAttr('disabled');
							}
							$('.text_success').hide();
						}
					});
				});

				// Form Seccion 14 //
				$('#frm_sec_14').validate({
						rules : 
						{
							Nombre_XIV:
							{
								required: true
							},
							T_Aulas: 
							{
								required: true,
								digits: true
							},
							T_Meta: 
							{
								required: true,
								digits: true
							},
							T_Docentes_Ingreso: 
							{
								required: true,
								digits: true
							},
							T_Docentes_Aula: 
							{
								required: true,
								digits: true
							},
							T_Fichas: 
							{
								required: true,
								digits: true
							},
							T_Cuadernillos: 
							{
								required: true,
								digits: true
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
							form = $('#frm_sec_14');
							var form_data = form.serializeArray();
							var button_form = form.find(':submit');
							button_form.attr('disabled','disabled');
							
							form_data.push( 
								{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
								{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
								{ name: 'codigo', value: $('#locales_xiv').val() },
								{ name: 'seccion', value: 14 }
							);
							
							$.ajax({
								// url: CI.site_url + '/verificacion_tareas/save_cobertura',
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