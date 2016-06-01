    </div> <!-- /#wrapper on header.php-->

	<?php echo get_js(); ?>

	<? if($this->uri->segment(3) == 'add'): ?>
		<script>
			$(document).ready(function() {
			    $('#summernote').summernote({
			    	height: 300,                 // set editor height
					minHeight: 250,
			    });
			});
		</script>
	<? endif;?>
	</body>
</html>