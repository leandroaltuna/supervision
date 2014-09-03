	<div class="box-body">
		<h3 class="page-header">IV. Verificación de la Consecución de Locales de Aplicación</h3>
		<form role="form-horizontal">
			<div class="row form-group">
				<div class="col-sm-2">
					<label>Sede</label>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control" value="" readonly="true">
				</div>
				<div class="col-sm-3">
					<label>Total Aulas Requeridas</label>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="row form-group">
				<div class="col-sm-2">
					<label>Total Locales Visitados</label>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control">
					<div class="help-block error"></div>
				</div>
				<div class="col-sm-3">
					<label>Total Locales cumplen condiciones según TDR</label>
				</div>
				<div class="col-sm-3">
					<input type="text" class="form-control">
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
		<div class="box-group" id="accordion">
			<!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
			<!-- <div class="panel box box-success">
				<div class="box-header">
					<h4 class="box-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							Verificación de local de aplicación propuesta 1:
						</a>
					</h4>
				</div>
				<div id="collapseOne" class="panel-collapse collapse in">
					<div class="box-body">
						<form role="form">
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>Nombre Local de Aplicación</label>
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" value="" readonly="">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>Dirección</label>
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" value="" readonly="">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.1 Cuántas aulas se van a utilizar durante la aplicación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.2 Cuántas aulas cumplen con las condiciones estipuladas: tamaño, mobiliario adecuado, electricidad?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.3 Cuántos SSHH se van a utilizar durante la aplicación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Varones" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Mujeres" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.4 Cuántos SSHH se encuentran en buenas condiciones?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Varones" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Mujeres" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.5 Cuántos pabellones se van a utilizar durante la aplicación (incluir centro de acopio)?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.6 El local cuenta con un cerco perimétrico?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.7 Cuántas puertas de ingreso tiene el local de aplicación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.8 El local cuenta con rampa de acceso?(casos de discapacidad).</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.9 El local cuenta con accesos internos seguros?(escalera, pasadizos).</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.10 El local cuenta con señal wifi?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.11 Cuál es el ancho de banda de la señal de internet?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.12 El local es de uso exclusivo que no interfiere con la aplicación de la evaluación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Institución con que comparte el local" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.13 El lugar para realizar el escaneado de control de ingreso a los profesores tiene las condiciones necesarias para el óptimo funcionamiento de los equipos?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.14 El lugar designado como centro de acopio es seguro y tiene fácil acceso para el acondicionamiento del material?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="pull-right">
										<button class="btn btn-primary">Guardar</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="panel box box-success">
				<div class="box-header">
					<h4 class="box-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							Verificación de local de aplicación propuesta 2:
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse">
					<div class="box-body">
						<form>
							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>Nombre Local de Aplicación</label>
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" value="" readonly="">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>Dirección</label>
									</div>
									<div class="col-sm-5">
										<input type="text" class="form-control" value="" readonly="">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.1 Cuántas aulas se van a utilizar durante la aplicación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.2 Cuántas aulas cumplen con las condiciones estipuladas: tamaño, mobiliario adecuado, electricidad?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.3 Cuántos SSHH se van a utilizar durante la aplicación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Varones" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Mujeres" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.4 Cuántos SSHH se encuentran en buenas condiciones?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Varones" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-3">
										<input type="text" placeholder="Obs. Mujeres" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.5 Cuántos pabellones se van a utilizar durante la aplicación (incluir centro de acopio)?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.6 El local cuenta con un cerco perimétrico?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.7 Cuántas puertas de ingreso tiene el local de aplicación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.8 El local cuenta con rampa de acceso?(casos de discapacidad).</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.9 El local cuenta con accesos internos seguros?(escalera, pasadizos).</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.10 El local cuenta con señal wifi?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.11 Cuál es el ancho de banda de la señal de internet?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Nro Total" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.12 El local es de uso exclusivo que no interfiere con la aplicación de la evaluación?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Institución con que comparte el local" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.13 El lugar para realizar el escaneado de control de ingreso a los profesores tiene las condiciones necesarias para el óptimo funcionamiento de los equipos?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="col-sm-3">
										<label>4.14 El lugar designado como centro de acopio es seguro y tiene fácil acceso para el acondicionamiento del material?.</label>
									</div>
									<div class="col-sm-2">
										<input type="text" placeholder="Si(1) / No(2)" class="form-control">
										<div class="help-block error"></div>
									</div>
									<div class="col-sm-4">
										<input type="text" placeholder="Observaciones" class="form-control">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="row">
									<div class="pull-right">
										<button class="btn btn-primary">Guardar</button>
									</div>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			load_page();
		});

		function load_page()
		{
			dep = '<?php echo $departament; ?>';
			sede = '<?php echo $headquarters; ?>';

			$.ajax({
				url: CI.site_url + '/verificacion_tareas/view_detalle',
				type: 'POST',
				data: { dep:dep, sede:sede },
				cache: false,
				dataType: 'json',
				success:function(json_data)
				{
					var code_html = '';
					$.each( json_data.detalle,
							function (i, datos)
							{
								code_html = '' +
								'<div class="panel box box-success">' +
									'<div class="box-header">' +
										'<h4 class="box-title">' +
											'<a data-toggle="collapse" data-parent="#accordion" href="#collapse' + i + '">' +
												'Verificación de local de aplicación propuesta ' + (i + 1) + ':' +
											'</a>' +
										'</h4>' +
									'</div>' +
									'<div id="collapse' + i + '" class="panel-collapse collapse">' +
										'<div class="box-body">' +
											'<form id="' + i + '" role="form">' +
												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>Nombre Local de Aplicación</label>' +
														'</div>' +
														'<div class="col-sm-5">' +
															'<input type="text" class="form-control" value="" readonly="">' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>Dirección</label>' +
														'</div>' +
														'<div class="col-sm-5">' +
															'<input type="text" class="form-control" value="" readonly="">' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.1 Cuántas aulas se van a utilizar durante la aplicación?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Nro Total" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.2 Cuántas aulas cumplen con las condiciones estipuladas: tamaño, mobiliario adecuado, electricidad?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Nro Total" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.3 Cuántos SSHH se van a utilizar durante la aplicación?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Nro Total" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-3">' +
															'<input type="text" placeholder="Obs. Varones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-3">' +
															'<input type="text" placeholder="Obs. Mujeres" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.4 Cuántos SSHH se encuentran en buenas condiciones?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Nro Total" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-3">' +
															'<input type="text" placeholder="Obs. Varones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-3">' +
															'<input type="text" placeholder="Obs. Mujeres" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.5 Cuántos pabellones se van a utilizar durante la aplicación (incluir centro de acopio)?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Nro Total" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.6 El local cuenta con un cerco perimétrico?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Si(1) / No(2)" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.7 Cuántas puertas de ingreso tiene el local de aplicación?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Nro Total" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.8 El local cuenta con rampa de acceso?(casos de discapacidad).</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Si(1) / No(2)" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.9 El local cuenta con accesos internos seguros?(escalera, pasadizos).</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Si(1) / No(2)" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.10 El local cuenta con señal wifi?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Si(1) / No(2)" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.11 Cuál es el ancho de banda de la señal de internet?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Nro Total" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.12 El local es de uso exclusivo que no interfiere con la aplicación de la evaluación?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Si(1) / No(2)" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Institución con que comparte el local" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.13 El lugar para realizar el escaneado de control de ingreso a los profesores tiene las condiciones necesarias para el óptimo funcionamiento de los equipos?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Si(1) / No(2)" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="col-sm-3">' +
															'<label>4.14 El lugar designado como centro de acopio es seguro y tiene fácil acceso para el acondicionamiento del material?.</label>' +
														'</div>' +
														'<div class="col-sm-2">' +
															'<input type="text" placeholder="Si(1) / No(2)" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
														'<div class="col-sm-4">' +
															'<input type="text" placeholder="Observaciones" class="form-control">' +
															'<div class="help-block error"></div>' +
														'</div>' +
													'</div>' +
												'</div>' +

												'<div class="form-group">' +
													'<div class="row">' +
														'<div class="pull-right">' +
															'<button class="btn btn-primary">Guardar</button>' +
														'</div>' +
													'</div>' +
												'</div>' +
											'</form>' +
										'</div>' +
									'</div>' +
								'</div>';

								$('#accordion').append( code_html );
							}
						);
				}
			});
		}

	</script>