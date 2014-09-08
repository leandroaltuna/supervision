	<div class="box-body">
		<h4 class="page-header">III. Verificación del avance de la selección de personal</h4>
	<?php
		$attributes = array('id' => 'frm_sec_3', 'name' => 'frm_sec_3', 'role' => 'form-horizontal' );
		echo form_open('', $attributes);
	?>
		<!-- <form role="form"> -->
			<div class="row form-group">
				<div class="col-sm-2">
					<label>Coordinador de Sede.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="Coor_Sede_PEA_Programada" name="Coor_Sede_PEA_Programada" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Coordinador Lider del Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="Coor_LiderLocal_PEA_Programada" name="Coor_LiderLocal_PEA_Programada" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Coordinador de Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="programada_1" name="Coor_Local_PEA_Programada" placeholder="(2)" class="form-control calculo_uno calculo_dos calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="preseleccionada_1" name="Coor_Local_PEA_PreSeleccionada" placeholder="(3)" class="form-control calculo_uno">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="preseleccionada_p_1" name="preseleccionada_p_1" placeholder="(4) = (3)*100/(2)" class="form-control preseleccion">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="capacitar_1" name="Coor_Local_PEA_aCapacitar" placeholder="(5)" class="form-control  calculo_dos">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="capacitar_p_1" name="capacitar_p_1" placeholder="(6)=(5)*100/(2)" class="form-control capacitar">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="seleccionada_1" name="Coor_Local_PEA_Seleccionada" placeholder="(7)" class="form-control calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="seleccionada_p_1" name="seleccionada_p_1" placeholder="(8)=(7)*100/(2)" class="form-control seleccionada">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Asistente de Coordinador de Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="programada_2" name="Asist_CoordLocal_PEA_Programada" placeholder="(2)" class="form-control calculo_uno calculo_dos calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="preseleccionada_2" name="Asist_CoordLocal_PEA_PreSeleccionada" placeholder="(3)" class="form-control calculo_uno">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="preseleccionada_p_2" name="preseleccionada_p_2" placeholder="(4) = (3)*100/(2)" class="form-control preseleccion">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="capacitar_2" name="Asist_CoordLocal_PEA_aCapacitar" placeholder="(5)" class="form-control calculo_dos">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="capacitar_p_2" name="capacitar_p_2" placeholder="(6)=(5)*100/(2)" class="form-control capacitar">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="seleccionada_2" name="Asist_CoordLocal_PEA_Seleccionada" placeholder="(7)" class="form-control calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="seleccionada_p_2" name="seleccionada_p_2" placeholder="(8)=(7)*100/(2)" class="form-control seleccionada">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Aplicador.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="programada_3" name="Aplicador_PEA_Programada" placeholder="(2)" class="form-control calculo_uno calculo_dos calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="preseleccionada_3" name="Aplicador_PEA_PreSeleccionada" placeholder="(3)" class="form-control calculo_uno">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="preseleccionada_p_3" name="preseleccionada_p_3" placeholder="(4) = (3)*100/(2)" class="form-control preseleccion">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="capacitar_3" name="Aplicador_PEA_aCapacitar" placeholder="(5)" class="form-control calculo_dos">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="capacitar_p_3" name="capacitar_p_3" placeholder="(6)=(5)*100/(2)" class="form-control capacitar">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="seleccionada_3" name="Aplicador_PEA_Seleccionada" placeholder="(7)" class="form-control calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="seleccionada_p_3" name="seleccionada_p_3" placeholder="(8)=(7)*100/(2)" class="form-control seleccionada">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Orientador.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="programada_4" name="Orientador_PEA_Programada" placeholder="(2)" class="form-control calculo_uno calculo_dos calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="preseleccionada_4" name="Orientador_PEA_PreSeleccionada" placeholder="(3)" class="form-control calculo_uno">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="preseleccionada_p_4" name="preseleccionada_p_4" placeholder="(4) = (3)*100/(2)" class="form-control preseleccion">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="capacitar_4" name="Orientador_PEA_aCapacitar" placeholder="(5)" class="form-control  calculo_dos">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="capacitar_p_4" name="capacitar_p_4" placeholder="(6)=(5)*100/(2)" class="form-control capacitar">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="seleccionada_4" name="Orientador_PEA_Seleccionada" placeholder="(7)" class="form-control calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="seleccionada_p_4" name="seleccionada_p_4" placeholder="(8)=(7)*100/(2)" class="form-control seleccionada">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Informatico de Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="programada_5" name="Informatico_Local_PEA_Programada" placeholder="(2)" class="form-control calculo_uno calculo_dos calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="preseleccionada_5" name="Informatico_Local_PEA_PreSeleccionada" placeholder="(3)" class="form-control calculo_uno">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="preseleccionada_p_5" name="preseleccionada_p_5" placeholder="(4) = (3)*100/(2)" class="form-control preseleccion">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="capacitar_5" name="Informatico_Local_PEA_aCapacitar" placeholder="(5)" class="form-control calculo_dos">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="capacitar_p_5" name="capacitar_p_5" placeholder="(6)=(5)*100/(2)" class="form-control capacitar">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="seleccionada_5" name="Informatico_Local_PEA_Seleccionada" placeholder="(7)" class="form-control calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="seleccionada_p_5" name="seleccionada_p_5" placeholder="(8)=(7)*100/(2)" class="form-control seleccionada">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Operador Informatico.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="programada_6" name="Operador_Informatico_PEA_Programada" placeholder="(2)" class="form-control calculo_uno calculo_dos calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="preseleccionada_6" name="Operador_Informatico_PEA_PreSeleccionada" placeholder="(3)" class="form-control calculo_uno">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="preseleccionada_p_6" name="preseleccionada_p_6" placeholder="(4) = (3)*100/(2)" class="form-control preseleccion">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="capacitar_6" name="Operador_Informatico_PEA_aCapacitar" placeholder="(5)" class="form-control calculo_dos">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="capacitar_p_6" name="capacitar_p_6" placeholder="(6)=(5)*100/(2)" class="form-control capacitar">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" id="seleccionada_6" name="Operador_Informatico_PEA_Seleccionada" placeholder="(7)" class="form-control calculo_tres">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" id="seleccionada_p_6" name="seleccionada_p_6" placeholder="(8)=(7)*100/(2)" class="form-control seleccionada">
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

			$('.preseleccion, .capacitar, .seleccionada').attr('readonly', 'readonly');

			$('.calculo_uno').on('change', function (){
				
				campo = $(this);
				cod =  campo.attr('id');
				array = cod.split('_');

				valor_uno = $('#programada_' + array[1]).val();
				valor_dos = $('#preseleccionada_' + array[1]).val();

				valor_uno = ( valor_uno.trim() != '' ) ? valor_uno : 0;
				valor_dos = ( valor_dos.trim() != '' ) ? valor_dos : 0;

				porcentaje = 0;
				if ( valor_uno != 0 )
				{
					porcentaje = parseInt(valor_dos) * 100 / parseInt(valor_uno);
				}

				$('#preseleccionada_p_' + array[1]).val( porcentaje.toFixed(2) );

			});

			$('.calculo_dos').on('change', function (){
				
				campo = $(this);
				cod =  campo.attr('id');
				array = cod.split('_');

				valor_uno = $('#programada_' + array[1]).val();
				valor_dos = $('#capacitar_' + array[1]).val();

				valor_uno = ( valor_uno.trim() != '' ) ? valor_uno : 0;
				valor_dos = ( valor_dos.trim() != '' ) ? valor_dos : 0;

				porcentaje = 0;
				if ( valor_uno != 0 )
				{
					porcentaje = parseInt(valor_dos) * 100 / parseInt(valor_uno);
				}

				$('#capacitar_p_' + array[1]).val( porcentaje.toFixed(2) );

			});

			$('.calculo_tres').on('change', function (){
				
				campo = $(this);
				cod =  campo.attr('id');
				array = cod.split('_');

				valor_uno = $('#programada_' + array[1]).val();
				valor_dos = $('#seleccionada_' + array[1]).val();

				valor_uno = ( valor_uno.trim() != '' ) ? valor_uno : 0;
				valor_dos = ( valor_dos.trim() != '' ) ? valor_dos : 0;

				porcentaje = 0;
				if ( valor_uno != 0 )
				{
					porcentaje = parseInt(valor_dos) * 100 / parseInt(valor_uno);
				}

				$('#seleccionada_p_' + array[1]).val( porcentaje.toFixed(2) );

			});

			// Form Seccion 3 //
			$('#frm_sec_3').validate({
					rules : 
					{
						Coor_Sede_PEA_Programada: 
						{
							digits: true
						},
						Coor_LiderLocal_PEA_Programada: 
						{
							digits: true
						},
						Coor_Local_PEA_Programada: 
						{
							digits: true
						},
						Coor_Local_PEA_PreSeleccionada: 
						{
							digits: true
						},
						Coor_Local_PEA_aCapacitar: 
						{
							digits: true
						},
						Coor_Local_PEA_Seleccionada: 
						{
							digits: true
						},
						Asist_CoordLocal_PEA_Programada: 
						{
							digits: true
						},
						Asist_CoordLocal_PEA_PreSeleccionada: 
						{
							digits: true
						},
						Asist_CoordLocal_PEA_aCapacitar: 
						{
							digits: true
						},
						Asist_CoordLocal_PEA_Seleccionada: 
						{
							digits: true
						},
						Aplicador_PEA_Programada: 
						{
							digits: true
						},
						Aplicador_PEA_PreSeleccionada: 
						{
							digits: true
						},
						Aplicador_PEA_aCapacitar: 
						{
							digits: true
						},
						Aplicador_PEA_Seleccionada: 
						{
							digits: true
						},
						Orientador_PEA_Programada: 
						{
							digits: true
						},
						Orientador_PEA_PreSeleccionada: 
						{
							digits: true
						},
						Orientador_PEA_aCapacitar: 
						{
							digits: true
						},
						Orientador_PEA_Seleccionada: 
						{
							digits: true
						},
						Informatico_Local_PEA_Programada: 
						{
							digits: true
						},
						Informatico_Local_PEA_PreSeleccionada: 
						{
							digits: true
						},
						Informatico_Local_PEA_aCapacitar: 
						{
							digits: true
						},
						Informatico_Local_PEA_Seleccionada: 
						{
							digits: true
						},
						Operador_Informatico_PEA_Programada: 
						{
							digits: true
						},
						Operador_Informatico_PEA_PreSeleccionada: 
						{
							digits: true
						},
						Operador_Informatico_PEA_aCapacitar: 
						{
							digits: true
						},
						Operador_Informatico_PEA_Seleccionada: 
						{
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
						form = $('#frm_sec_3');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 3 }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_avance_personal',
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