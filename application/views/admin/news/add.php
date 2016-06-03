<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Aggiungi un articolo</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading"> Inserisci le informazioni dell'articolo </div>
				<div class="panel-body">
					<div class="form-group">
						<label for="page_title">Titolo articolo</label>
						<input type="text" class="form-control" id="page_title" placeholder="">
					</div>

					<div class="form-group">
						<label for="page_content">Contenuto</label>
						<div id="summernote"></div>
					</div>
					
					
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-8 -->

		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading"> Pubblica  </div>
				<div class="panel-body">
					<div class="form-group">
						<label for="page_title">Categorie</label>
							<? if($categories): 
								foreach($categories as $category): ?>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="<?=$category->n_category_id;?>">
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
								<input type="radio" name="page_status" id="published" value="published" checked>
									Pubblica
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="page_status" id="draft" value="draft">
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