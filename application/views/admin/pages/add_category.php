<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Aggiungi categoria</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">
			<div class="panel panel-default">
				<div class="panel-heading"> Inserisci le informazioni della categoria </div>
				<div class="panel-body">
					<div class="form-group">
						<label for="p_category_name">Nome categoria</label>
						<input type="text" class="form-control" id="p_category_name" placeholder="">
					</div>
				</div> <!-- ./ panel-body -->
				<div class="panel-footer"> <button class="btn btn-primary">Salva </button>  </div>

			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-8 -->
	</div> <!-- ./ row -->
</div> <!-- /#page-wrapper -->

<?php $this->load->view('admin/inc/footer'); ?>