<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pagine</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-8">
			<div class="panel panel-default">
				<div class="panel-heading"> Inserisci le informazioni della pagina </div>
				<div class="panel-body">
					<div class="form-group">
						<label for="page_title">Titolo pagina</label>
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
						<label for="page_title">Categoria</label>
							<select class="form-control">
								<option value="0">Nessuna</option>
								<? foreach($categories as $category): ?>
									<option value="<?=$category->p_category_id;?>"><?=$category->p_category_name;?></option>
								<? endforeach;?> 						  
							</select>
					</div>
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

				</div> <!-- ./ panel-body -->
				<div class="panel-footer"> <button class="btn btn-primary">Salva </button>  </div>
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->

	</div> <!-- ./ row -->

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>