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
					
					<div class="box-body">
						<div class="alert <?php echo $class_alert; ?> alert-dismissable">
							<i class="fa fa-info"></i>
							<b>Alerta!</b> <?php echo $msg; ?>
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</section>
		</div><!-- /.row -->
	</section>
	<script type="text/javascript">
		$(document).ready(function() {
			
			setInterval(function() {
				window.location.href = "<?php echo site_url('visitas/listar').'/'.$departament.'/'.$headquarters; ?>";
			}, 600);

		})
	</script>