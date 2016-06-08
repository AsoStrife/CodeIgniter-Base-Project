<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Modifica pagina</h1>
		</div>
	</div>

	<?php echo form_open('/admin/pages/update?id='.$this->input->get('id')); ?>

	<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading"> Modifica le informazioni della pagina </div>
				<div class="panel-body">
					<div class="form-group <? if(form_error('page_title')) echo 'has-error'; ?>">
						<label for="page_title">Titolo pagina</label>
						<input type="text" class="form-control" id="page_title" name="page_title" 
							value="<?php if(set_value('page_title') != null) echo set_value('page_title'); else echo $page->page_title;?>">
						<span id="helpBlock_page_title" class="help-block"> <?php echo form_error('page_title'); ?> </span>
					</div>

					<div class="form-group">
						<label for="page_content">Contenuto</label>
						<span id="helpBlock_page_content" class="help-block"> <?php echo form_error('page_content'); ?> </span>
						<textarea id="summernote" name="page_content">
							<?php if(set_value('page_content') != null) echo set_value('page_content'); else echo $page->page_content;?>				
						</textarea>
					</div>
					
					
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-8 -->

		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading"> Pubblica  </div>
				<div class="panel-body">
					<div class="form-group">
						<label for="p_category_id">Categoria</label>
							<select class="form-control" name="p_category_id">
								<option value="NULL">Nessuna</option>
								<? foreach($categories as $category): ?>
									<option value="<?=$category->p_category_id;?>" <? if($page->p_category_id == $category->p_category_id) echo 'selected';?>>
										<?=$category->p_category_name;?>
									</option>
								<? endforeach;?> 						  
							</select>
					</div>
					
					<hr>
					<div class="form-group">
						<label for="page_status">Visibilità</label>
						<div class="radio">
							<label>
								<input type="radio" name="page_status" id="published" value="published" <? if($page->page_status == 'published') echo 'checked';?>>
									Pubblica
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="page_status" id="draft" value="draft" <? if($page->page_status == 'draft') echo 'checked';?>>
									Bozza
							</label>
						</div>
					</div>
				</div> <!-- ./ panel-body -->
				<div class="panel-footer"> <button class="btn btn-primary">Salva </button>  </div>
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-4 -->

	</div> <!-- ./ row -->

	<?php echo form_close(); ?>

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>