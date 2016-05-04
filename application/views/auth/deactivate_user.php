<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">

		<?php echo form_open("auth/deactivate/".$user->id);?>
		<div class="form-group">
			<h1><?php echo lang('deactivate_heading');?></h1>
			<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
		</div>
		<?/*
		<p>
			<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
			<input type="radio" name="confirm" value="yes" checked="checked" />
			<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
			<input type="radio" name="confirm" value="no" />
		</p>
		*/?>

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
			<?php echo form_submit('submit', lang('deactivate_submit_btn'), array("class" => 'btn btn-default'));?>
		</div>
		
		<?php echo form_close();?>

		</div> <!-- ./ col-lg-4 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>