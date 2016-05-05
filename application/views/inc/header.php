<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>CI Project</title>

		<!-- Bootstrap -->
		<?php echo link_tag('css/bootstrap.min.css'); ?>

		<?php 
			if($this->uri->segment(2) == 'jqueryFileUpload'){
				echo link_tag('css/plugins/jqueryFileUpload/jquery.fileupload.css');
				echo link_tag('css/plugins/jqueryFileUpload/jquery.fileupload-ui.css');
				//echo link_tag('css/plugins/jqueryFileUpload/jquery.fileupload-noscript.css');
				//echo link_tag('css/plugins/jqueryFileUpload/jquery.fileupload-ui-noscript.css');
			}

			if($this->uri->segment(1) == 'plugins'){
				echo link_tag('css/plugins/bootstrapImageGallery/bootstrap-image-gallery.min.css');
				echo link_tag('css/plugins/bootstrapImageGallery/blueimp-gallery.min.css');
				
			}

			if($this->uri->segment(2) == 'justifiedGallery'){
				echo link_tag('css/plugins/justifiedGallery/justifiedGallery.min.css');
			}

			if($this->uri->segment(2) == 'dateTimePicker'){
				echo link_tag('css/plugins/dateTimePicker/bootstrap-datetimepicker.min.css');				
			}

			if($this->uri->segment(2) == 'colorPicker'){
				echo link_tag('css/plugins/colorPicker/bootstrap-colorpicker.min.css');				
			}
		?> 
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	  </head>

	<body>

	<? $this->load->view('inc/top-navbar'); ?>