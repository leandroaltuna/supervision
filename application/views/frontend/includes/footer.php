		
		<!-- jQuery UI 1.10.3 -->
		<script src="<?php echo base_url('js/jquery-ui-1.10.3.min.js'); ?>" type="text/javascript"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url('js/bootstrap.min.js'); ?>" type="text/javascript"></script>
		
		<!-- iCheck -->
		<script src="<?php echo base_url('js/plugins/iCheck/icheck.min.js'); ?>" type="text/javascript"></script>

		<!-- Admin App -->
		<script src="<?php echo base_url('js/Admin/app.js'); ?>" type="text/javascript"></script>

		<!-- Admin dashboard -->
		<script src="<?php echo base_url('js/Admin/dashboard.js'); ?>" type="text/javascript"></script>

		<!-- Admin for demo purposes -->
		<script src="<?php echo base_url('js/Admin/demo.js'); ?>" type="text/javascript"></script>

		<script type="text/javascript">
			(function($, window, document)
			{
				
				$(function() 
				{
					// the DOM is ready

					$(window).keydown(function(event){

						if(event.keyCode == 13) {
							event.preventDefault();
							return false;
						}

					});
					
				});
				
			}(window.jQuery, window, document));
		</script>

	</body>
</html>