<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

    <div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> <?php echo lang('change_password_heading');?> </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading"> <?php echo lang('change_password_heading');?> </div>

					<div class="panel-body">
						<?php echo form_open("admin/auth/change_password");?>

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
							<?php echo form_submit('submit', lang('change_password_submit_btn'), array("class" => 'btn btn-primary'));?>
						</div>

						<?php echo form_close();?>

					</div> <!-- ./ panel-body -->
				</div> <!-- ./ panel panel-default -->

			</div> <!-- ./ col-lg-12 -->
		</div> <!-- ./ row -->

	</div> <!-- #/ page-wrapper -->

<?php $this->load->view('inc/footer'); ?>
