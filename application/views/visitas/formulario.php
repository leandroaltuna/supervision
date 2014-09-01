	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			<!-- Escritorio -->
			<?php echo $title; ?>
			<small><!-- Panel de Control --><?php echo $description; ?></small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url(); ?>">
					<i class="fa fa-dashboard"></i> Inicio
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('escritorio/opciones').'/'.$departament.'/'.$headquarters; ?>">
					<i class="fa fa-dashboard"></i> Menu
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('visitas/listar').'/'.$departament.'/'.$headquarters; ?>">
					<i class="fa fa-dashboard"></i> Lista
				</a>
			</li>
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</section><!-- /.Content Header -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<section class="col-lg-12">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Formato de Visitas a Locales de Aplicacion</h3>
					</div><!-- /.box-header -->
					<!-- form start -->
					<?php 
						$attr = array('id' => 'formato');
						echo form_open_multipart("visitas/save", $attr);
					?>
						<div class="box-body">
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<label for="departamento">Departamento</label>	
									</div>
									<div class="col-lg-4">
										<input type="text" class="form-control" id="Departamento" name="Departamento" readonly="true" value="">
									</div>
									<div class="col-lg-2">
										<label for="CCDD">Codigo</label>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="CCDD" name="CCDD" readonly="true" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<label for="sede">Sede</label>	
									</div>
									<div class="col-lg-4">
										<input type="text" class="form-control" id="Nombre_Sede" name="Nombre_Sede" readonly="true" value="">
									</div>
									<div class="col-lg-2">
										<label for="Cod_Sede">Codigo</label>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Cod_Sede" name="Cod_Sede" readonly="true" value="">
									</div>
								</div>
							</div>
							
							<h4 class="page-header"> I. Datos de la Aplicacion</h4>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<label for="Nombre">Nombre</label>	
									</div>
									<div class="col-lg-4">
										<input type="text" class="form-control" id="Nombre" name="Nombre" maxlength="80">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-2">
										<label for="nro_aplicacion">Nro</label>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="nro_aplicacion" name="nro_aplicacion" readonly="true">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<label for="Direccion">Direccion</label>	
									</div>
									<div class="col-lg-4">
										<input type="text" class="form-control" id="Direccion" name="Direccion" maxlength="50">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-2">
										<label for="Telefono_Institucion">Telefono de la Institucion</label>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Telefono_Institucion" name="Telefono_Institucion" maxlength="9">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<h4 class="page-header"> II. Datos del Director y/o Administrador del Local</h4>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<label for="Nombres_Apellidos">Nombre y Apellidos</label>	
									</div>
									<div class="col-lg-4">
										<input type="text" class="form-control" id="Nombres_Apellidos" name="Nombres_Apellidos" maxlength="50">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-2">
										<label for="Telefono_Director">Telefono</label>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Telefono_Director" name="Telefono_Director" maxlength="9">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<label for="Persona_Coordinar">Persona con quien coordino en ausencia del director</label>	
									</div>
									<div class="col-lg-4">
										<input type="text" class="form-control" id="Persona_Coordinar" name="Persona_Coordinar" maxlength="50">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>

							<h4 class="page-header"> III. Datos del Local de Aplicacion</h4>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<label for="Accesibilidad">Accesibilidad al Local de Aplicacion</label>
										<span class="help-block">1.Facil.</span>
										<span class="help-block">2.Dificultad en el acceso.</span>
										<span class="help-block">3.Lejos de la ciudad</span>
									</div>
									<div class="col-lg-3">
										<label for="Disponibilidad">Aulas Disponibles (Incluye Aula de Contigencia)</label>
										<span class="help-block">1.Mayor a la cantidad programada.</span>
										<span class="help-block">2.Igual a la cantidad programada.</span>
										<span class="help-block">3.Menor a la cantidad programada</span>
									</div>
									<div class="col-lg-2">
										<label for="Tamanio">Tamaño de las Aulas segun TDR</label>
										<span class="help-block">1.Adecuadas segun TDR.</span>
										<span class="help-block">2.No adecuadas segun TDR.</span>
									</div>
									<div class="col-lg-2">
										<label for="Mobiliario">Estado del Mobiliario (Carpetas)</label>
										<span class="help-block">1.En buen estado.</span>
										<span class="help-block">2.Carpetas en regular estado (algunas deterioradas).</span>
										<span class="help-block">3.No recomendable para el proceso.</span>
									</div>
									<div class="col-lg-2">
										<label for="Puertas">Puertas de Ingreso al Local de Aplicacion</label>
										<span class="help-block">1.Tiene mas de 02 puertas de ingreso.</span>
										<span class="help-block">2.Tiene 02 puertas de ingreso.</span>
										<span class="help-block">3.Tiene solo 01 puerta de ingreso.</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Accesibilidad" name="Accesibilidad" maxlength="1">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Disponibilidad" name="Disponibilidad" maxlength="1">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-1">
										<input type="text" class="form-control" id="Cantidad_Disponible" name="Cantidad_Disponible" maxlength="3">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Tamanio" name="Tamanio" maxlength="1">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Mobiliario" name="Mobiliario" maxlength="1">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Puertas" name="Puertas" maxlength="1">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-3">
										<label for="Servicios_Higienicos">Servicios Higienicos</label>
										<span class="help-block">1.Adecuados y limpios (damas y varones).</span>
										<span class="help-block">2.No adecuados (baño en mal estado, falta limpieza).</span>
									</div>
									<div class="col-lg-3">
										<label for="Infraestructura">Estado de la Infraestructura del Local</label>
										<span class="help-block">1.En buen estado.</span>
										<span class="help-block">2.Con deterioro en algunos ambientes.</span>
										<span class="help-block">3.No recomendable.</span>
									</div>
									<div class="col-lg-3">
										<label for="Especificaciones_Tecnicas">El Local de Aplicacion cumple con todas las Especificaciones Tecnicas (TDR MINEDU)</label>
										<span class="help-block">1.SI.</span>
										<span class="help-block">2.NO.</span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-3">
										<input type="text" class="form-control" id="Servicios_Higienicos" name="Servicios_Higienicos" maxlength="1">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-3">
										<input type="text" class="form-control" id="Infraestructura" name="Infraestructura" maxlength="1">
										<div class="help-block error"></div>
									</div>
									<div class="col-lg-3">
										<input type="text" class="form-control" id="Especificaciones_Tecnicas" name="Especificaciones_Tecnicas" maxlength="1">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>


							<h4 class="page-header"> IV. Ruta de Acceso</h4>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-4">
										<label for="Referencia_Llegada">Referencia de llegada al Local de Aplicacion</label>	
									</div>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="Referencia_Llegada" name="Referencia_Llegada" maxlength="50">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-4">
										<label for="Transporte">Tipo de Transporte Utilizado</label>	
									</div>
									<div class="col-lg-6">
										<input type="text" class="form-control" id="Transporte" name="Transporte" maxlength="50">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-4">
										<label for="Tiempo_Llegada">Tiempo de llegada al Local de Aplicacion desde el Local Operativo</label>
										<span>( en minutos )</span>
									</div>
									<div class="col-lg-2">
										<input type="text" class="form-control" id="Tiempo_Llegada" name="Tiempo_Llegada" maxlength="3">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-lg-4">
										<label for="Imagen">Bosquejo de llegada al Local de Aplicacion</label>
										<span>( Maximo 2MB )</span>
									</div>
									<div class="col-lg-2">
										<input type="file" id="Imagen" name="Imagen" class="Imagen">
										<div class="help-block error"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div id="bosquejo" name="bosquejo" class="col-lg-10"></div><!-- AJAX -->
								</div>
							</div>
						</div><!-- /.box-body -->

						<div class="box-footer">
							<div class="footer-button">
								<button type="submit" id="grabar" name="grabar" class="btn btn-primary">Grabar</button>
							</div>
						</div>
					</form>
				</div><!-- /.box -->
			</section>
		</div><!-- /.row -->
	</section>
	
	<!-- page script -->
	<script type="text/javascript">
		$(document).ready(function () {

			load_page();

			// Form FORMATO //
			$('#formato').validate({
					rules : 
					{
						Nombre: 
						{
							required: true
						},
						Direccion: 
						{
							required: true
						},
						Telefono_Institucion: 
						{
							required: true,
							digits: true
						},
						Nombres_Apellidos: 
						{
							required: true
						},
						Telefono_Director: 
						{
							required: true,
							digits: true
						},
						Persona_Coordinar: 
						{
							required: true
						},
						Accesibilidad: 
						{
							required: true,
							digits: true,
							range:[1,3]
						},
						Disponibilidad: 
						{
							required: true,
							digits: true,
							range:[1,3]
						},
						Cantidad_Disponible: 
						{
							required: true,
							digits: true
						},
						Tamanio: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						Mobiliario: 
						{
							required: true,
							digits: true,
							range:[1,3]
						},
						Puertas: 
						{
							required: true,
							digits: true,
							range:[1,3]
						},
						Servicios_Higienicos: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						Infraestructura: 
						{
							required: true,
							digits: true,
							range:[1,3]
						},
						Especificaciones_Tecnicas: 
						{
							required: true,
							digits: true,
							range:[1,2]
						},
						Referencia_Llegada: 
						{
							required: true
						},
						Transporte: 
						{
							required: true
						},
						Tiempo_Llegada: 
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
						event.preventDefault();
						var new_form = new FormData($('#formato')[0]);
						
						var button_form = $('#formato').find(':submit');
						button_form.attr('disabled','disabled');
						
						$.ajax({
							url: CI.site_url + '/visitas/save',
							type: 'POST',
							data: new_form,
							contentType: false,
							processData: false,
						});
					}
				}
			);

		});

		function load_page () 
		{
			codigo = '<?php echo $Cod_Formato ?>';
			depa = '<?php echo $departament ?>';
			sede = '<?php echo $headquarters ?>';

			$.validator.addClassRules('Imagen', {
				required: true
			});

			$.ajax({
				url: CI.site_url + '/visitas/view',
				type: 'POST',
				data: { id:codigo, CCDD:depa, Cod_Sede:sede },
				cache: false,
				dataType: 'json',
				success:function(json_data)
				{
					$.each( json_data.departament,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.headquarters,
							function (fila, valor)
							{
								$('#' + fila).val( valor );
							}
						);

					$.each( json_data.local,
							function (fila, valor)
							{
								if ( fila == 'Id' )
								{
									$('#nro_aplicacion').val( valor );
								}
								else
								{
									$('#' + fila).val( valor );	
								}
							}
						);

					$.each( json_data.contenido,
							function (fila, valor)
							{
								valor = ( valor ==  null ) ? '' : valor;
								if ( fila != 'Imagen' )
								{
									if ( fila == 'id' ) { $('#nro_aplicacion').val(valor); }
									$('#' + fila).val( valor );
								}
								else if ( fila == 'Imagen')
								{
									if ( valor != '')
									{
										code_html = '<img src="' + CI.base_url + 'uploads/' + valor + '" class="img-thumbnail" />';
										$('#bosquejo').html( code_html );
										$.validator.addClassRules('Imagen', {});
									}
								}
							}
						);
				}
			});
		}

	</script> 