<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> <?php echo lang('create_group_heading');?> </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading"> <?php echo lang('create_group_subheading');?> </div>

					<div class="panel-body">

						<?php echo form_open("auth/create_group");?>


							<?php if(isset($message) && trim($message) != ''): ?>
								<div class="alert alert-danger" role="alert"> 
									<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<?php echo $message;?> 
								</div>
							<? endif;?>


							<div class="form-group <? if(form_error('group_name')) echo 'has-error'?>">
								<label for="group_name" class="control-label"> <?php echo lang('create_group_name_label', 'group_name');?> </label>
								<?php echo form_input($group_name);?>
								<span class="help-block"> <?php echo form_error('group_name'); ?> </span>
							</div>	

							<div class="form-group <? if(form_error('description')) echo 'has-error'?>">
								<label for="description" class="control-label"> <?php echo lang('create_group_desc_label', 'description');?> </label>
								<?php echo form_input($description);?>
								<span class="help-block"> <?php echo form_error('description'); ?> </span>
							</div>	

							<div class="form-group">
								<?php echo form_submit('submit', lang('create_group_submit_btn'), array("class" => 'btn btn-primary'));?>
							</div>

						<?php echo form_close();?>

				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel-default-->

		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->

<?php $this->load->view('admin/inc/footer'); ?>