<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			
			<?php echo form_open("auth/login");?>
			

			<div class="form-group">
				<h1><?php echo lang('login_heading');?></h1>
				<p><?php echo lang('login_subheading');?></p>
			</div>

			<?php if(isset($message) && trim($message) != ''): ?>
				<div class="alert alert-danger" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $message;?> 
				</div>
			<? endif;?>

			<div class="form-group <? if(form_error('identity')) echo 'has-error'?>">
				<label for="identity" class="control-label"> <?php echo lang('login_identity_label', 'identity');?> </label>
				<?php echo form_input($identity);?>
				<span class="help-block"> <?php echo form_error('identity'); ?> </span>
			</div>

			<div class="form-group <? if(form_error('password')) echo 'has-error'?>">
				<label for="password" class="control-label"> <?php echo lang('login_password_label', 'password');?> </label>
				<?php echo form_input($password);?>
				<span class="help-block"> <?php echo form_error('password'); ?> </span>
			</div>

			<div class="checkbox">
			    <label>
			    	<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> <?php echo lang('login_remember_label');?>
			    </label>
			  </div>

			<div class="form-group">
				<?php echo form_submit('submit', lang('login_submit_btn'), array("class" => 'btn btn-default'));?>
			</div>

			<?php echo form_close();?>

			<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>