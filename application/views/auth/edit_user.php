<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-4">

			<?php echo form_open(uri_string());?>

			<div class="form-group">
				<h1><?php echo lang('edit_user_heading');?></h1>
				<p><?php echo lang('edit_user_subheading');?></p>
			</div>

			<?php if(isset($message) && trim($message) != ''): ?>
				<div class="alert alert-danger" role="alert"> 
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<?php echo $message;?> 
				</div>
			<? endif;?> 

			<div class="form-group <? if(form_error('first_name')) echo 'has-error'?>">
				<label for="first_name" class="control-label"> <?php echo lang('edit_user_fname_label', 'first_name');?> </label>
					<?php echo form_input($first_name);?>
				<span class="help-block"> <?php echo form_error('first_name'); ?> </span>
			</div>

			<div class="form-group <? if(form_error('last_name')) echo 'has-error'?>">
				<label for="last_name" class="control-label"> <?php echo lang('edit_user_lname_label', 'last_name');?> </label>
					<?php echo form_input($last_name);?>
				<span class="help-block"> <?php echo form_error('last_name'); ?> </span>
			</div>

			<div class="form-group <? if(form_error('company')) echo 'has-error'?>">
				<label for="company" class="control-label"> <?php echo lang('edit_user_company_label', 'company');?> </label>
					<?php echo form_input($company);?>
				<span class="help-block"> <?php echo form_error('company'); ?> </span>
			</div>

			<div class="form-group <? if(form_error('phone')) echo 'has-error'?>">
				<label for="phone" class="control-label"> <?php echo lang('edit_user_phone_label', 'phone');?> </label>
					<?php echo form_input($phone);?>
				<span class="help-block"> <?php echo form_error('phone'); ?> </span>
			</div>

			<div class="form-group <? if(form_error('password')) echo 'has-error'?>">
				<label for="password" class="control-label"> <?php echo lang('edit_user_password_label', 'password');?> </label>
					<?php echo form_input($password);?>
				<span class="help-block"> <?php echo form_error('password'); ?> </span>
			</div>

			<div class="form-group <? if(form_error('password_confirm')) echo 'has-error'?>">
				<label for="password_confirm" class="control-label"> <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?> </label>
					<?php echo form_input($password_confirm);?>
				<span class="help-block"> <?php echo form_error('password_confirm'); ?> </span>
			</div>

			<?php if ($this->ion_auth->is_admin()): ?>
				<div class="form-group">
					<h3><?php echo lang('edit_user_groups_heading');?></h3>
				</div>

				<div class="checkbox">
				<?php foreach ($groups as $group):?>
						
					<?php
						$gID=$group['id'];
						$checked = null;
						$item = null;
						foreach($currentGroups as $grp) {
							if ($gID == $grp->id) {
								$checked= ' checked="checked"';
								break;
							}
						}
	              	?>
					<label>
						<input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
	              		<?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
	              	</label>
	          <?php endforeach?>
	          </div><!-- ./checkbox -->

			<?php endif; ?>

			<?php echo form_hidden('id', $user->id);?>
			<?php echo form_hidden($csrf); ?>

      		<div class="form-group">
				<?php echo form_submit('submit', lang('edit_user_submit_btn'), array("class" => 'btn btn-default'));?>
			</div>

			<?php echo form_close();?>
		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>