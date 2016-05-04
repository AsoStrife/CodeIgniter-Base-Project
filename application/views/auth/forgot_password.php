<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-4">

			<?php echo form_open("auth/forgot_password");?>

			<div class="form-group">
				<h1><?php echo lang('forgot_password_heading');?></h1>
				<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
			</div>

			<?php if(isset($message) && trim($message) != ''): ?>
				<div class="alert alert-danger" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $message;?> 
				</div>
			<? endif;?>

		    <div class="form-group <? if(form_error('identity')) echo 'has-error'?>">
				<label for="identity" class="control-label"> 
					<?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?>
				</label>
				<?php echo form_input($identity);?>
				<span class="help-block"> <?php echo form_error('identity'); ?> </span>
			</div>

			<div class="form-group">
				<?php echo form_submit('submit', lang('forgot_password_submit_btn'), array("class" => 'btn btn-default'));?>
			</div>
			<?php echo form_close();?>

		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>