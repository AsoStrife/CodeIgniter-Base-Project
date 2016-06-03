<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Aggiungi un articolo</h1>
		</div>
	</div>

	<?php echo form_open('/admin/news/add'); ?>

		<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading"> Inserisci le informazioni dell'articolo </div>
				<div class="panel-body">
				 <?php echo  validation_errors(); ?>
					<div class="form-group <? if(form_error('news_title')) echo 'has-error'; ?>">
						<label for="news_title">Titolo articolo</label>
						<input type="text" class="form-control" id="news_title" name="news_title" value="<?php echo set_value('news_title');?>">
						<span id="helpBlock_page_title" class="help-block"> <?php echo form_error('news_title'); ?> </span>
					</div>

					<div class="form-group">
						<label for="news_content">Contenuto</label>
						<span id="helpBlock_news_content" class="help-block"> <?php echo form_error('news_content'); ?> </span>
						<textarea id="summernote" name="news_content"><?php echo set_value('news_content');?></textarea>
					</div>
					
					
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-8 -->

		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading"> Pubblica  </div>
				<div class="panel-body">
					<div class="form-group">
						<label for="news_categories">Categorie</label>
							<? if($categories): 
								foreach($categories as $category): ?>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="news_categories[]" value="<?=$category->n_category_id;?>">
											<?=$category->n_category_name;?>
										</label>
									</div>	
							<? endforeach;
								else: 
									echo '<div class="alert alert-warning"> Non è stata inserita alcuna categoria </div>';
								endif;?> 						  
					</div> <!-- ./form-group -->

					<hr>

					<div class="form-group">
						<label for="page_title">Visibilità</label>
						<div class="radio">
							<label>
								<input type="radio" name="news_status" id="published" value="published" checked>
									Pubblica
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="news_status" id="draft" value="draft">
									Bozza
							</label>
						</div>
					</div> <!-- ./form-group -->

					<hr>

					<div class="form-group">
						<label for="news_comments_status">Commenti attivi?</label>
						<div class="radio">
							<label>
								<input type="radio" name="news_comments_status" id="true" value="1" checked>
									Si
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="news_comments_status" id="false" value="0">
									No
							</label>
						</div>
					</div> <!-- ./form-group -->

				</div> <!-- ./ panel-body -->
				<div class="panel-footer"> <button class="btn btn-primary">Salva </button>  </div>
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->

	</div> <!-- ./ row -->

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>