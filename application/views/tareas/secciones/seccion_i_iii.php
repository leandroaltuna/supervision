	<div class="box-body">
		<h3 class="page-header">I. Actividades de presentación y coordinación</h3>
	<?php
		$attributes = array('id' => 'frm_sec_1', 'name' => 'frm_sec_1', 'role' => 'form-horizontal' );
		echo form_open('verificacion_tareas', $attributes);
	?>
		<!-- <form id="frm_sec_1" role="form-horizontal"> -->
			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.1 Presentación con el Director Departamental.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.2 Presentación con el(la) Coordinador(a) de Sede.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.3 Reunión de Coordinación con la RA de la sede departamental.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.4 Estuvo completa la RA en la reunión de Coordinación?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>1.5 Se detectó algún problema en la sede asignada?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="pull-right">
					<button class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>
	
		<h4 class="page-header">II. Verificación del local de la Sede Operativa</h4>
	<?php
		$attributes = array('id' => 'frm_sec_2', 'name' => 'frm_sec_2', 'role' => 'form-horizontal' );
		echo form_open('verificacion_tareas', $attributes);
	?>
		<!-- <form role="form"> -->
			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.1 El local de la sede es de uso exclusivo?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.2 Cuántos ambientes tiene el local de la sede?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.3 Cuántos metros cuadrados tiene el local de la sede?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.4 El espacio del local de la sede es adecuado según el número de personas a laborar?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.5 El local de la sede cuenta con los servicios básicos (Luz, Agua y Desagüe)?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.6 El local de la sede cuenta con mobiliario suficiente para el personal? (mes, sillas).</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.7 La sede cuenta con PC de uso exclusivo destinadas para el proyecto? Cuántas?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.8 Cuántas PC están en buen estado?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.9 La sede cuenta con señal de internet?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.10 Cuál es el ancho de banda de la conexión de internet?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.11 La sede cuenta con impresora multifuncional operativa? Cuántas?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Nro Total" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.12 La impresora de la sede es de uso exclusivo del proyecto?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.13 La sede cuenta con teléfono fijo o celular para el proyecto?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.14 La sede esta implementada con los diagramas operativos? (Flujo de tareas, Nombre del Proyecto, Relación de la RA de la sede).</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-3">
					<label>2.15 La sede cuenta con los croquis del local de aplicación y ubicación del personal?.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="Si(1) / No(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-4">
					<input type="text" placeholder="Observaciones" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="pull-right">
					<button class="btn btn-primary">Guardar</button>
				</div>
			</div>
		</form>

		<h4 class="page-header">III. Verificación del avance de la selección de personal</h4>
	<?php
		$attributes = array('id' => 'frm_sec_3', 'name' => 'frm_sec_3', 'role' => 'form-horizontal' );
		echo form_open('verificacion_tareas', $attributes);
	?>
		<!-- <form role="form"> -->
			<div class="row form-group">
				<div class="col-sm-2">
					<label>Coordinador de Sede.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Coordinador Lider del Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Coordinador de Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(3)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(4) = (3)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(5)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(6)=(5)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(7)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(8)=(7)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Asistente de Coordinador de Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(3)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(4) = (3)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(5)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(6)=(5)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(7)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(8)=(7)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Aplicador.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(3)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(4) = (3)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(5)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(6)=(5)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(7)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(8)=(7)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Orientador.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(3)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(4) = (3)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(5)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(6)=(5)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(7)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(8)=(7)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Informatico de Local.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(3)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(4) = (3)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(5)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(6)=(5)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(7)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(8)=(7)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Operador Informatico.</label>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(3)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(4) = (3)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(5)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(6)=(5)*100/(2)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-1">
					<input type="text" placeholder="(7)" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-2">
					<input type="text" placeholder="(8)=(7)*100/(2)" class="form-control">
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
			
			// Form Seccion 1 //
			$('#frm_sec_1').validate({
					rules : 
					{
						// Nombre: 
						// {
						// 	required: true
						// },
						// Direccion: 
						// {
						// 	required: true
						// },
						// Telefono_Institucion: 
						// {
						// 	required: true,
						// 	digits: true
						// },
						// Nombres_Apellidos: 
						// {
						// 	required: true
						// },
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
						var form_data = form.serialize();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						$.ajax({
							url: CI.site_url + '/verificacion_tareas/save_sec_1',
							type: 'POST',
							data: form_data,
						});
					}
				}
			);


			// Form Seccion 2 //
			$('#frm_sec_2').validate({
					rules : 
					{
						
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
						var form_data = form.serialize();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						$.ajax({
							url: CI.site_url + '/verificacion_tareas/save_sec_2',
							type: 'POST',
							data: form_data,
						});
					}
				}
			);


			// Form Seccion 3 //
			$('#frm_sec_3').validate({
					rules : 
					{
						
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
						var form_data = form.serialize();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						$.ajax({
							url: CI.site_url + '/verificacion_tareas/save_sec_3',
							type: 'POST',
							data: form_data,
						});
					}
				}
			);


		});
	</script>