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
						<h3 class="box-title">Lista de Formatos</h3>
						<!-- <div class="box-tools pull-right">
							<a href="<?php #echo site_url('formatos/formato').'/'.$departament.'/'.$headquarters; ?>" class="btn btn-default pull-right">
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

			// load_page();

			$("#example1").dataTable({
				// bProcessing  : true,
				sProcessing  : true,
				// bServerSide  : true,
				aoColumns: [
					{ mData: "id",
					  mRender: function (data, type, full) {
							return '<a href="' + CI.site_url +'/formatos/formato/'+ full['CCDD'] + '/' + full['Cod_Sede'] + '/' + full['id'] + '">'+data[0]+'</a>';
						},
					  sWidth: "5%"
					},
					{ mData: "Nombre", sWidth: "45%" },
					{ mData: "Direccion", sWidth: "50%" }
				],
				sAjaxSource  : CI.site_url + '/formatos/view_all_format',
				"fnServerData": function ( sSource, aoData, fnCallback ) {
					/* Add some extra data to the sender */
					aoData.push( { "name": "dep", "value": '<?php echo $departament; ?>' } );
					aoData.push( { "name": "sede", "value": '<?php echo $headquarters; ?>' } );
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


			// $('#datatables').dataTable({
			// 	bProcessing  : true,
			// 	sProcessing  : true,
			// 	bServerSide  : true,
			// 	sAjaxSource  : '/results/load-results',
			// 	"fnServerData": function ( sSource, aoData, fnCallback ) {
			// 		/* Add some extra data to the sender */
			// 		aoData.push( { "name": "quizid", "value": quizid } );
			// 		aoData.push( { "name": "question_id", "value": question_id } );
			// 		$.getJSON( sSource, aoData, function () { 
			// 			/* Do whatever additional processing you want on the callback, then tell DataTables */
			// 		}).done(function(json){
			// 			fnCallback(json);
			// 		}).fail(function(xhr, err){
			// 			var responseTitle= $(xhr.responseText).filter('title').get(0);
			// 			alert($(responseTitle).text() + "\n" + formatErrorMessage(xhr, err) );
			// 		});
			// 	},
			// });





		});

		// function load_page()
		// {
		// 	dep = '<?php echo $departament; ?>';
		// 	sede = '<?php echo $headquarters; ?>';

		// 	$.ajax({
		// 		url: CI.site_url + '/formatos/view_all_format',
		// 		type: 'POST',
		// 		data: { dep:dep, sede:sede },
		// 		cache: false,
		// 		dataType: 'json',
		// 		success:function(json_data)
		// 		{
		// 			var code_html = '';
		// 			$.each( json_data.contenido,
		// 					function (i, datos)
		// 					{
		// 						code_html += '<tr>' +
		// 										'<td>' +
		// 											'<a href="' + CI.site_url +'/formatos/formato/'+ datos.CCDD + '/' + datos.Cod_Sede + '/' + datos.id + '">' +
		// 												datos.id +
		// 											'</a>' +
		// 										'</td>' +
		// 										'<td>' +
		// 											'<span class="text text-light-blue">' + datos.Nombre + '</span>' +
		// 										'</td>' +
		// 										'<td>' +
		// 											'<span class="text text-light-blue">' + datos.Direccion + '</span>' +
		// 										'</td>' +
		// 									'</tr>';
		// 					}
		// 				);
					
		// 			if ( code_html != '' ) { $('#example1 > tbody').empty(); }
		// 			$('#example1 > tbody').html( code_html );

		// 		}
		// 	});
		// }

	</script>