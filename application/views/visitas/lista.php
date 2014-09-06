	<?php 
		$dep = $departament->CCDD;
		$sede = $headquarters->Cod_Sede;

		$nombre_dep = $departament->Departamento;
		$nombre_sede = $headquarters->Nombre_Sede;
	?>
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
				<a href="<?php echo site_url('escritorio/opciones').'/'.$dep.'/'.$sede; ?>">
					<i class="fa fa-dashboard"></i> Menu
				</a>
			</li>
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</section><!-- /.Content Header -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<section class="col-lg-10">
				<!-- TO DO List -->
				<div class="box">
					<div class="box-header">
						<i class="ion ion-clipboard"></i>
						<h3 class="box-title">Lista de Formatos ( <?php echo $nombre_dep.' / '.$nombre_sede; ?> )</h3>
						<!-- <div class="box-tools pull-right">
							<a href="<?php #echo site_url('formatos/formato').'/'.$dep.'/'.$sede; ?>" class="btn btn-default pull-right">
								<i class="fa fa-plus"></i> Agregar Formato
							</a>
						</div> -->
					</div><!-- /.box-header -->
					<div class="box-body table-responsive">
						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nro</th>
									<th>Nombre</th>
									<th>Direccion</th>
								</tr>
							</thead>
							<tbody>
							<!-- ajax -->
							</tbody>
							<!-- <tfoot>
								<tr>
									<th>Nro</th>
									<th>Nombre</th>
									<th>Direccion</th>
								</tr>
							</tfoot> -->
						</table>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</section>
		</div><!-- /.row -->
	</section>
	<!-- DATA TABES SCRIPT -->
	<script src="<?php echo base_url('js/plugins/datatables/jquery.dataTables.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('js/plugins/datatables/dataTables.bootstrap.js'); ?>" type="text/javascript"></script>

	<!-- page script -->
	<script type="text/javascript">
		$(function() {

			$("#example1").dataTable({
				// bProcessing  : true,
				sProcessing  : true,
				// bServerSide  : true,
				aoColumns: [
					{ mData: "id",
					  mRender: function (data, type, full) {
							return '<a href="' + CI.site_url +'/visitas/formulario/'+ full['CCDD'] + '/' + full['Cod_Sede'] + '/' + full['id'] + '">'+data[0]+'</a>';
						},
					  sWidth: "5%"
					},
					{ mData: "Nombre", sWidth: "45%" },
					{ mData: "Direccion", sWidth: "50%" }
				],
				sAjaxSource  : CI.site_url + '/visitas/view_all',
				"fnServerData": function ( sSource, aoData, fnCallback ) {
					/* Add some extra data to the sender */
					aoData.push( { "name": "dep", "value": '<?php echo $dep; ?>' } );
					aoData.push( { "name": "sede", "value": '<?php echo $sede; ?>' } );
					$.getJSON( sSource, aoData, function () { 
						/* Do whatever additional processing you want on the callback, then tell DataTables */
					}).done(function(json){
						fnCallback(json);
					}).fail(function(xhr, err){
						var responseTitle= $(xhr.responseText).filter('title').get(0);
						alert($(responseTitle).text() + "\n" + formatErrorMessage(xhr, err) );
					});
				},
				// bAutoWidth: false,
				// aoColumns : [
				// 	{ sWidth: '2%' },
				// 	{ sWidth: '50%' },
				// 	{ sWidth: '50%' },
				// ]
			});

		});

	</script>