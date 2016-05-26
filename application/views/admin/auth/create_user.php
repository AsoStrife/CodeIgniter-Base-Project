<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>
	
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> <?php echo lang('create_user_heading');?> </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading"> <?php echo lang('create_user_subheading');?> </div>

					<div class="panel-body">

						<?php echo form_open("admin/auth/create_user");?>

						<?php if(isset($message) && trim($message) != ''): ?>
							<div class="alert alert-danger" role="alert"> 
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<?php echo $message;?> 
							</div>
						<? endif;?>        

     
			          	<div class="form-group <? if(form_error('first_name')) echo 'has-error'?>">
			                <label for="first_name" class="control-label"> <?php echo lang('create_user_fname_label', 'first_name');?> </label>
			                  <?php echo form_input($first_name);?>
			                <span class="help-block"> <?php echo form_error('first_name'); ?> </span>
			          	</div>

			     
			          	<div class="form-group <? if(form_error('last_name')) echo 'has-error'?>">
			                <label for="last_name" class="control-label"> <?php echo lang('create_user_lname_label', 'last_name');?> </label>
			                  <?php echo form_input($last_name);?>
			                <span class="help-block"> <?php echo form_error('last_name'); ?> </span>
			          	</div>
			          	
			          	<div class="form-group <? if(form_error('company')) echo 'has-error'?>">
			                <label for="company" class="control-label"> <?php echo lang('create_user_company_label', 'company');?> </label>
			                  <?php echo form_input($company);?>
			                <span class="help-block"> <?php echo form_error('company'); ?> </span>
			          	</div>

			          	<div class="form-group <? if(form_error('email')) echo 'has-error'?>">
			                <label for="email" class="control-label"> <?php echo lang('create_user_email_label', 'email');?> </label>
			                  <?php echo form_input($email);?>
			                <span class="help-block"> <?php echo form_error('email'); ?> </span>
			          	</div>

			          	<div class="form-group <? if(form_error('phone')) echo 'has-error'?>">
			                <label for="phone" class="control-label"> <?php echo lang('create_user_phone_label', 'phone');?> </label>
			                  <?php echo form_input($phone);?>
			                <span class="help-block"> <?php echo form_error('phone'); ?> </span>
			          	</div>

			          	<div class="form-group <? if(form_error('password')) echo 'has-error'?>">
			                <label for="password" class="control-label"> <?php echo lang('create_user_password_label', 'password');?> </label>
			                  <?php echo form_input($password);?>
			                <span class="help-block"> <?php echo form_error('password'); ?> </span>
			          	</div>


			          	<div class="form-group <? if(form_error('password_confirm')) echo 'has-error'?>">
			                <label for="password_confirm" class="control-label"> <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> </label>
			                  <?php echo form_input($password_confirm);?>
			                <span class="help-block"> <?php echo form_error('password_confirm'); ?> </span>
			          	</div>

						<div class="form-group">
							<?php echo form_submit('submit', lang('create_user_submit_btn'), array("class" => 'btn btn-primary'));?>
						</div>
			               
			         <?php echo form_close();?>
     		
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel-default-->

		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->


<?php $this->load->view('admin/inc/footer'); ?>
