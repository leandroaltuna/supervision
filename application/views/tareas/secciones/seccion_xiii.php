	<div class="box-body">
		<h3 class="page-header">XIII. Verificación del Dia de La Aplicación</h3>
	<?php
		$attributes = array('id' => 'frm_sec_13', 'name' => 'frm_sec_13', 'role' => 'form-horizontal' );
		echo form_open('', $attributes);
	?>
			<div class="row form-group">
				<div class="col-sm-3">
					<label>13.1 ¿Cuántos locales verifico el dia de la aplicación?</label>
				</div>
				<div class="col-sm-1">
					<input type="text" id="Cantidad_Locales_Verificados" name="Cantidad_Locales_Verificados" placeholder="¿Cuántos?" class="form-control" maxlength="2">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-5">
					<input type="text" id="Locales_Verificados_Observacion" name="Locales_Verificados_Observacion" placeholder="Observaciones" class="form-control" maxlength="200">
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

	<div class="box-body">
		<div class="row">
			<div class="form-group">
				<div class="col-sm-2">
					<label>Local de Aplicación</label>
				</div>
				<div class="col-sm-5">
					<select id="locales_xiii" name="locales_xiii" class="form-control">
						<!-- AJAX -->
					</select>
				</div>
			</div>
		</div>
		<hr>
		<div class="box-body">
			<div class="row">
			<?php
				$attributes = array('id' => 'frm_sec_13_a', 'name' => 'frm_sec_13_a', 'role' => 'form-horizontal' );
				echo form_open('', $attributes);
			?>
					<div class="form-group">
						<div class="box-header">
							<h4 class="box-title">Durante la Aplicación</h4>
						</div>
						<div class="row">
							<div class="col-sm-3">
								<label>Nombre Local de Aplicación</label>
							</div>
							<div class="col-sm-6">
								<input type="text" id="Nombre_XIII" name="Nombre_XIII" class="form-control" readonly="true">
							</div>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.2 ¿El material MINEDU llego dentro de la hora establecida?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_2_SINO" name="VA_13_2_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_2_OBS" name="VA_13_2_OBS" placeholder="Anote la Hora de Llegada. HH:MM" class="form-control" maxlength="5">
							<div class="help-block error"></div>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.3 ¿El local de aplicación cuenta con resguardo policial?¿Cuántos efectivos?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_3_SINO" name="VA_13_3_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_3_C" name="VA_13_3_C" placeholder="¿Cuántos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_3_OBS" name="VA_13_3_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.4 ¿El local de aplicación cuenta con ambulancia?¿Cuántas?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_4_SINO" name="VA_13_4_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_4_C" name="VA_13_4_C" placeholder="¿Cuántos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_4_OBS" name="VA_13_4_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.5 ¿Falto algún miembro de la RA en la hora establecida?¿Cuántos?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_5_SINO" name="VA_13_5_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_5_C" name="VA_13_5_C" placeholder="¿Cuántos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_5_OBS" name="VA_13_5_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.6 ¿Se tuvo que reemplazar algún miembro de la RA?¿Cuántos?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_6_SINO" name="VA_13_6_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_6_C" name="VA_13_6_C" placeholder="¿Cuántos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_6_OBS" name="VA_13_6_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.7 ¿El material MINEDU llego en forma completa?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_7_SINO" name="VA_13_7_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_7_OBS" name="VA_13_7_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.8 ¿Se realizo la ambientación de las aulas en la hora establecida por los Áplicadores?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_8_SINO" name="VA_13_8_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_8_OBS" name="VA_13_8_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.9 ¿Los ACL hicieron la verificación respectiva de la ambientación del aula de sus aplicadores?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_9_SINO" name="VA_13_9_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_9_OBS" name="VA_13_9_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.10 ¿Se tuvo la presencia del fiscal en el local de aplicación?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_10_SINO" name="VA_13_10_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_10_OBS_NOM" name="VA_13_10_OBS_NOM" placeholder="ANOTE NOMBRES Y APELLIDOS DEL FISCAL" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.11 ¿Se tuvo la presencia de Veedores autorizados en el local de aplicación?¿Cuántos?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_11_SINO" name="VA_13_11_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_11_C" name="VA_13_11_C" placeholder="¿Cuantos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_11_OBS_1" name="VA_13_11_OBS_1" placeholder="Nombre y Cargo del Veedor 1" class="form-control" maxlength="200">
							<input type="text" id="VA_13_11_OBS_2" name="VA_13_11_OBS_2" placeholder="Nombre y Cargo del Veedor 2" class="form-control" maxlength="200">
							<input type="text" id="VA_13_11_OBS_3" name="VA_13_11_OBS_3" placeholder="Nombre y Cargo del Veedor 3" class="form-control" maxlength="200">
							<input type="text" id="VA_13_11_OBS_4" name="VA_13_11_OBS_4" placeholder="Nombre y Cargo del Veedor 4" class="form-control" maxlength="200">
						</div>
					</div>


					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.12 ¿El control de ingreso se desarrollo con toda normalidad?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_12_SINO" name="VA_13_12_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_12_OBS" name="VA_13_12_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.13 ¿Se verifico que la información del total de profesores que ingresaron al local de aplicación sea enviada	a la sede central y que  este al 100% de recepción?¿Cuántos docentes se registraron?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_13_SINO" name="VA_13_13_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_13_C" name="VA_13_13_C" placeholder="¿Cuántos?" class="form-control" maxlength="200">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_13_OBS" name="VA_13_13_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.14 ¿El ACL con los operadores informáticos realizaron el registro en aula en la hora establecida?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_14_SINO" name="VA_13_14_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_14_OBS" name="VA_13_14_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.15 ¿Se verifico que la información del total de profesores registrados en aula sea enviada a la sede central y que este al 100% de recepción?¿Cuántos docentes se registraron en aula?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_15_SINO" name="VA_13_15_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_15_C" name="VA_13_15_C" placeholder="¿Cuántos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_15_OBS" name="VA_13_15_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.16 ¿Se cumplieron todos los procedimientos establecidos durante el desarrollo de la evaluación en el local de aplicación?¿Cuántos docentes se registraron?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_16_SINO" name="VA_13_16_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="VA_13_16_OBS" name="VA_13_16_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.17 ¿Se presentó algún incidente que afecto el normal desarrollo de la evaluación en el local de aplicación(plagio,suplantación,etc)?¿Cuántos?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_17_SINO" name="VA_13_17_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_17_C" name="VA_13_17_C" placeholder="¿Cuántos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_17_OBS" name="VA_13_17_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.18 ¿Se presentó algún incidente de salud con el algún docente durante la aplicación donde fue necesaria la atención médica?¿Cuántos?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_18_SINO" name="VA_13_18_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-1">
							<input type="text" id="VA_13_18_C" name="VA_13_18_C" placeholder="¿Cuántos?" class="form-control" maxlength="2">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-4">
							<input type="text" id="VA_13_18_OBS" name="VA_13_18_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="pull-right">
								<button class="btn btn-primary" disabled="true">Guardar</button>
							</div>
						</div>
					</div>
				</form>
			<?php
				$attributes = array('id' => 'frm_sec_13_b', 'name' => 'frm_sec_13_b', 'role' => 'form-horizontal' );
				echo form_open('', $attributes);
			?>
					<div class="form-group">
						<div class="box-header">
							<h4 class="box-title">Despues de la Aplicación</h4>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.19 ¿Se verificó que se realice el inventario de los instrumentos(cuadernillos y fichas) en aulas?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_19_SINO" name="DA_13_19_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_19_OBS" name="DA_13_19_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.20 ¿Se verificó que la información enviada del inventario de los instrumentos(cuadernillos y fichas) llegue a la sede central al 100%?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_20_SINO" name="DA_13_20_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_20_OBS" name="DA_13_20_OBS" placeholder="Observaciones" class="form-control"maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.21 ¿Se supervisó que los ACL lacren los sobres después de confirmar la recepción de la información a la sede central?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_21_SINO" name="DA_13_21_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_21_OBS" name="DA_13_21_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.22 ¿Se veirificó que los ACL entreguen la documentación completa(2 sobres oor aula) al Coordinador de local en el centro de acopio?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_22_SINO" name="DA_13_22_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_22_OBS" name="DA_13_22_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.23 ¿Se verificó que los cuadernillos estén completos y sean embalados en el centro de acopio?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_23_SINO" name="DA_13_23_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_23_OBS" name="DA_13_23_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.24 ¿Se verificó que el sobre 1(ficha de respuestas) de todas las aulas fue entregado al recaudador del Banco de la Nación?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_24_SINO" name="DA_13_24_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_24_OBS_H" name="DA_13_24_OBS_H" placeholder="Anote Hora de Entrega. HH:MM " class="form-control" maxlength="5">
							<div class="help-block error"></div>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.25 ¿Se verificó la entrega y contenido del sobre 2 de todas las aulas del Coordinador de Local al Supervisór Nacional?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_25_SINO" name="DA_13_25_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_25_OBS" name="DA_13_25_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="row form-group">
						<div class="col-sm-3">
							<label>13.26 ¿Se verificó que el localde aplicación se deje en óptimas condiciones?</label>
						</div>
						<div class="col-sm-1">
							<input type="text" id="DA_13_26_SINO" name="DA_13_26_SINO" placeholder="Si(1) / No(2)" class="form-control" maxlength="1">
							<div class="help-block error"></div>
						</div>
						<div class="col-sm-5">
							<input type="text" id="DA_13_26_OBS" name="DA_13_26_OBS" placeholder="Observaciones" class="form-control" maxlength="200">
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="pull-right">
								<button class="btn btn-primary" disabled="true">Guardar</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		
	</div>
	<script type="text/javascript">
		$(document).ready(function() {

			$('#locales_xiii').on('change', function() {
				
				$('#frm_sec_13_a')[0].reset();
				$('#frm_sec_13_b')[0].reset();

				depa = '<?php echo $departament->CCDD; ?>';
				sede = '<?php echo $headquarters->Cod_Sede; ?>';
				codigo = $(this).val();

				nombre_xiii = '';
				if ( codigo != '0' )
				{
					nombre_xiii = $('#locales_xiii option:selected').text();
				}
				$('#Nombre_XIII').val( nombre_xiii );

				boton_a = $('#frm_sec_13_a').find(':submit');
				boton_b = $('#frm_sec_13_b').find(':submit');
				boton_a.attr('disabled', 'disabled');
				boton_b.attr('disabled', 'disabled');

				$.ajax({
					url: CI.site_url + '/verificacion_tareas/view_detalle_xiii',
					type: 'POST',
					data: { depa:depa, sede:sede, codigo:codigo },
					cache: false,
					dataType: 'json',
					success:function(json_data)
					{
						$.each( json_data.DetalleXIII_a,
								function (fila, valor)
								{
									$('#' + fila).val(valor);
								}
							);

						$.each( json_data.DetalleXIII_b,
								function (fila, valor)
								{
									$('#' + fila).val(valor);
								}
							);

						if ( codigo != '0' ) 
						{ 
							boton_a.removeAttr('disabled');
							boton_b.removeAttr('disabled');
						}
					}
				});
			});


			// Form Seccion 13 Head //
			$('#frm_sec_13').validate({
					rules : 
					{
						Cantidad_Locales_Verificados:
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
						form = $('#frm_sec_13');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'seccion', value: 13 }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_trece',
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


			// Form Seccion 13-a //
			$('#frm_sec_13_a').validate({
					rules : 
					{
						Nombre_XIII:
						{
							required: true
						},
						VA_13_2_SINO: 
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_2_OBS:
						{
							required: true,
							hora: true
						},
						VA_13_3_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]	
						},
						VA_13_3_C:
						{
							digits: true
						},
						VA_13_4_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]	
						},
						VA_13_4_C:
						{
							digits: true
						},
						VA_13_5_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]	
						},
						VA_13_5_C:
						{
							digits: true
						},
						VA_13_6_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]	
						},
						VA_13_6_C:
						{
							digits: true
						},
						VA_13_7_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_8_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_9_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_10_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_11_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_11_C:
						{
							digits: true
						},
						VA_13_12_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_13_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_13_C:
						{
							digits: true
						},
						VA_13_14_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_15_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_15_C:
						{
							digits: true
						},
						VA_13_16_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_17_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_17_C:
						{
							digits: true
						},
						VA_13_18_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						VA_13_18_C:
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
						form = $('#frm_sec_13_a');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'codigo', value: $('#locales_xiii').val() },
							{ name: 'seccion', value: '13a' }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_dia_cero',
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


			// Form Seccion 13-b //
			$('#frm_sec_13_b').validate({
					rules : 
					{
						DA_13_19_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						DA_13_20_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						DA_13_21_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						DA_13_22_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						DA_13_23_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						DA_13_24_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						DA_13_24_OBS_H:
						{
							required: true,
							hora: true
						},
						DA_13_25_SINO:
						{
							required: true,
							digits: true,
							range: [1,2]
						},
						DA_13_26_SINO:
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
						form = $('#frm_sec_13_b');
						var form_data = form.serializeArray();
						var button_form = form.find(':submit');
						button_form.attr('disabled','disabled');
						
						form_data.push( 
							{ name: 'depa', value: '<?php echo $departament->CCDD; ?>' },
							{ name: 'sede', value: '<?php echo $headquarters->Cod_Sede; ?>' },
							{ name: 'codigo', value: $('#locales_xiii').val() },
							{ name: 'seccion', value: '13b' }
						);
						
						$.ajax({
							// url: CI.site_url + '/verificacion_tareas/save_despues_diacero',
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