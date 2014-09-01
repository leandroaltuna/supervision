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
			<li class="active"><?php echo $title; ?></li>
		</ol>
	</section><!-- /.Content Header -->
	<section class="content">
		<!-- Small boxes (Stat box) -->
		<div class="row">
			<div class="col-md-6">
				<!-- Custom Tabs -->
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
						<li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							Dropdown <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
								<li role="presentation" class="divider"></li>
								<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
							</ul>
						</li>
						<li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
					</ul>
					<div class="tab-content">
					<div class="tab-pane active" id="tab_1">
					<b>How to use:</b>
					<p>Exactly like the original bootstrap tabs except you should use
					the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
					A wonderful serenity has taken possession of my entire soul,
					like these sweet mornings of spring which I enjoy with my whole heart.
					I am alone, and feel the charm of existence in this spot,
					which was created for the bliss of souls like mine. I am so happy,
					my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
					that I neglect my talents. I should be incapable of drawing a single stroke
					at the present moment; and yet I feel that I never was a greater artist than now.
					</div><!-- /.tab-pane -->
					<div class="tab-pane" id="tab_2">
					The European languages are members of the same family. Their separate existence is a myth.
					For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
					in their grammar, their pronunciation and their most common words. Everyone realizes why a
					new common language would be desirable: one could refuse to pay expensive translators. To
					achieve this, it would be necessary to have uniform grammar, pronunciation and more common
					words. If several languages coalesce, the grammar of the resulting language is more simple
					and regular than that of the individual languages.
					</div><!-- /.tab-pane -->
					</div><!-- /.tab-content -->
				</div><!-- nav-tabs-custom -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</section>