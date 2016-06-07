<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> <?php echo lang('deactivate_heading');?> </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="panel panel-default">
					<div class="panel-heading"> <?php echo sprintf(lang('deactivate_subheading'), $user->first_name);?> ?</div>

					<div class="panel-body">

						<?php echo form_open("admin/auth/deactivate/".$user->id);?>

						<div class="radio">
						  	<label>	    
						    	<input type="radio" name="confirm" value="yes" checked>
				  				<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
						  	</label>
						</div>
						<div class="radio">
						  	<label>	    
						    	<input type="radio" name="confirm" value="no">
				  				<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
						  	</label>
						</div>

						<?php echo form_hidden($csrf); ?>
						<?php echo form_hidden(array('id'=>$user->id)); ?>

						<div class="form-group">
							<?php echo form_submit('submit', lang('deactivate_submit_btn'), array("class" => 'btn btn-primary'));?>
						</div>
						
						<?php echo form_close();?>

				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel-default-->

		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->

<?php $this->load->view('admin/inc/footer'); ?>