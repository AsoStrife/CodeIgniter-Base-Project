<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1>Welcome to CodeIgniter start project!</h1>

			<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

			<p>If you would like to edit this page you'll find it located at:</p>
			<code>application/views/welcome_message.php</code>

			<p>The corresponding controller for this page is found at:</p>
			<code>application/controllers/Welcome.php</code>

			<hr>

			<p>	If you are exploring CodeIgniter for the very first time, you should start by reading the 
				<?php echo anchor("http://www.codeigniter.com/user_guide/", "User Guide", 'target="blank"');?>.</p>

			<h2> Backend Plugins </h2>
				<ul>
					<li> <?php echo anchor("http://benedmunds.com/ion_auth/", "Ion Auth User Guide", 'target="blank"');?> to manage users, session and authentication</li>
				</ul>
			
			<h2> Frontend Plugins </h2>
			<p> This project has a common usefull <?php echo anchor("http://getbootstrap.com", "Bootstrap", 'target="blank"');?> plugins presetted to help you to develop your project like: 
				<ul>
					<li> <?php echo anchor("https://github.com/blueimp/Bootstrap-Image-Gallery", "Bootstrap Image Gallery", 'target="blank"');?> to create beautyful galleries for your sites </li>
					<li> <?php echo anchor("http://miromannino.github.io/Justified-Gallery/getting-started/", "Justified Gallery", 'target="blank"');?> to manage thumbnails with Bootstrap Image Gallery</li>
					<li> <?php echo anchor("https://mjolnic.com/bootstrap-colorpicker/", "Color Picker", 'target="blank"');?>, a simple useful color picker for your project</li>
					<li> <?php echo anchor("http://eonasdan.github.io/bootstrap-datetimepicker/", "Date Time Picker", 'target="blank"');?>, Who does not need a date time picker?  </li>
					<li> <?php echo anchor("https://blueimp.github.io/jQuery-File-Upload/", "Jquery File Upload", 'target="blank"');?>, the most powerful, complete and flexible jquery upload plugin than I ever seen.  </li>
				</ul>
			</p>
			


			<?
			if (!$this->ion_auth->logged_in()):?>
				<p>If you want to sign in, click here: <?php echo anchor("auth", "Login", '');?>.</p>
			<? else: ?>
				<p>If you want to create a new user, click here: <?php echo anchor("auth/create_user", "Create user", '');?>.</p>
				<p>If you want to sing out, click here: <?php echo anchor("auth/logout", "Logout", '');?>.</p>
			<? endif;?>

			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>