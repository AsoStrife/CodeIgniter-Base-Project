<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-4">

			<?php echo form_open("auth/change_password");?>

				<div class="form-group">
					<h1><?php echo lang('change_password_heading');?></h1>
				</div>

                <?php if(isset($message) && trim($message) != ''): ?>
					<div class="alert alert-danger" role="alert"> 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php echo $message;?> 
					</div>
				<? endif;?>
                 
				<div class="form-group <? if(form_error('old_password')) echo 'has-error'?>">
					<label for="old_password" class="control-label"> <?php echo lang('change_password_old_password_label', 'old_password');?> </label>
					<?php echo form_input($old_password);?>
					<span class="help-block"> <?php echo form_error('old_password'); ?> </span>
				</div>

				<div class="form-group <? if(form_error('new_password')) echo 'has-error'?>">
					<label for="new_password" class="control-label"> <?php echo lang('change_password_new_password_label', 'new_password');?> </label>
					<?php echo form_input($new_password);?>
					<span class="help-block"> <?php echo form_error('new_password'); ?> </span>
				</div>

				<div class="form-group <? if(form_error('new_password_confirm')) echo 'has-error'?>">
					<label for="new_password_confirm" class="control-label"> <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> </label>
					<?php echo form_input($new_password_confirm);?>
					<span class="help-block"> <?php echo form_error('new_password_confirm'); ?> </span>
				</div>	


				<?php echo form_input($user_id);?>

				<div class="form-group">
					<?php echo form_submit('submit', lang('change_password_submit_btn'), array("class" => 'btn btn-default'));?>
				</div>

			<?php echo form_close();?>

		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>
