<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Modifica categoria</h1>
		</div>
	</div>

	<?php echo form_open('/admin/pages/update_category?id='.$this->input->get('id')); ?>

	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading"> Inserisci le informazioni della categoria </div>
				<div class="panel-body">
					<div class="form-group <? if(form_error('p_category_name')) echo 'has-error'; ?>">
						<label for="p_category_name">Nome categoria</label>
						<input type="text" class="form-control" name="p_category_name" id="p_category_name" 
							value="<?php if(set_value('p_category_name') != null) echo set_value('p_category_name'); else echo $category->p_category_name;?>">	
						<span id="helpBlock_p_category_name" class="help-block"> <?php echo form_error('p_category_name'); ?> </span>
					</div>
				</div> <!-- ./ panel-body -->
				<div class="panel-footer"> <button class="btn btn-primary" type="submit">Salva </button>  </div>

			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-8 -->
	</div> <!-- ./ row -->

	<?php echo form_close();?>

</div> <!-- /#page-wrapper -->

<?php $this->load->view('admin/inc/footer'); ?>