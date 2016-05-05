		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url('js/jquery-1.12.3.min.js')?>"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>

		<?php  if($this->uri->segment(1) == 'plugins'): ?>
			<script src="<?php echo base_url('js/plugins/bootstrapImageGallery/jquery.blueimp-gallery.min.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/bootstrapImageGallery/bootstrap-image-gallery.min.js')?>"></script>			
		<?php endif; ?>

		<?php  if($this->uri->segment(2) == 'jqueryFileUpload'): ?>
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/vendor/jquery.ui.widget.js')?>"></script>
			
			<!-- The Templates plugin is included to render the upload/download listings -->
			<script src="https://blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
			<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
			<script src="https://blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
			<!-- The Canvas to Blob plugin is included for image resizing functionality -->
			<script src="https://blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>

			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.iframe-transport.js')?>"></script>

			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.fileupload.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.fileupload-process.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.fileupload-image.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.fileupload-audio.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.fileupload-video.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.fileupload-validate.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/jquery.fileupload-ui.js')?>"></script>
			
			<script src="<?php echo base_url('js/plugins/jqueryFileUpload/main.js')?>"></script>

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
			<script src="<?php echo base_url('js/plugins/justifiedGallery/jquery.justifiedGallery.min.js')?>"></script>
			<script> $("#mygallery").justifiedGallery(); </script>
		<?php endif; ?>

		<?php  if($this->uri->segment(2) == 'dateTimePicker'): ?>
			<script src="<?php echo base_url('js/moment.min.js')?>"></script>
			<script src="<?php echo base_url('js/plugins/dateTimePicker/bootstrap-datetimepicker.min.js')?>"></script>
			<script type="text/javascript">
	             $('#datetimepicker1').datetimepicker();
	        </script>
		<?php endif; ?>

		<?php  if($this->uri->segment(2) == 'colorPicker'): ?>
			<script src="<?php echo base_url('js/plugins/colorPicker/bootstrap-colorpicker.min.js')?>"></script>
			<script> $('#cp2').colorpicker(); </script>
		<?php endif; ?>


	</body>
</html>