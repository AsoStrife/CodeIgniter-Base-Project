<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Aggiungi categoria</h1>
		</div>
	</div>

	<?php echo form_open('/admin/news/add_category'); ?>

	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading"> Inserisci le informazioni della categoria </div>
				<div class="panel-body">
					<div class="form-group <? if(form_error('n_category_name')) echo 'has-error'; ?>">
						<label for="n_category_name">Nome categoria</label>
						<input type="text" class="form-control" name="n_category_name" id="n_category_name" value="<?php echo set_value('n_category_name');?>">	
						<span id="helpBlock_p_category_name" class="help-block"> <?php echo form_error('n_category_name'); ?> </span>
					</div>
				</div> <!-- ./ panel-body -->
				<div class="panel-footer"> <button class="btn btn-primary">Salva </button>  </div>

			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-8 -->
	</div> <!-- ./ row -->

	<?php echo form_close();?>

</div> <!-- /#page-wrapper -->

<?php $this->load->view('admin/inc/footer'); ?>