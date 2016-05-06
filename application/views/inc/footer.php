		<?php echo get_js(); ?>


		<?php  if($this->uri->segment(2) == 'jqueryFileUpload'): ?>
			<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
			<!--[if (gte IE 8)&(lt IE 10)]>
			<script src="assets/js/fileupload/cors/jquery.xdr-transport.js"></script>
			<![endif]-->
			<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
			<!--[if (gte IE 8)&(lt IE 10)]>
			<script src="assets/js/fileupload/cors/jquery.xdr-transport.js"></script>
			<![endif]-->
						
		<?php endif; ?>

		<?php  if($this->uri->segment(2) == 'justifiedGallery'): ?>
			<script> $("#mygallery").justifiedGallery(); </script>
		<?php endif; ?>

		<?php  if($this->uri->segment(2) == 'dateTimePicker'): ?>
			<script type="text/javascript">
	             $('#datetimepicker1').datetimepicker();
	        </script>
		<?php endif; ?>

		<?php  if($this->uri->segment(2) == 'colorPicker'): ?>
			<script> $('#cp2').colorpicker(); </script>
		<?php endif; ?>


	</body>
</html>