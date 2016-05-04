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

				<p>If you are exploring Ion Auth for the very first time, you should start by reading the 
				<?php echo anchor("http://benedmunds.com/ion_auth/", "Ion Auth User Guide", 'target="blank"');?>.</p>
				
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