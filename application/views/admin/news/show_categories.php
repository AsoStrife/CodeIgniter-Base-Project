<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"> Categorie </h1>
		</div>
	</div>

	<?php echo form_open('/admin/news/show_categories'); ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Qui sotto troverete la lista delle categorie inserite </div>

				<div class="panel-body">

					<div class="row marginBottom25 pull-right">
						<div class="col-md-12">
							<a class="btn btn-primary" href="/admin/news/add_category"> Aggiungi categoria </a>
						
							<? if($categories): ?>
								<button type="submit" class="btn btn-warning"> Elimina categorie selezionate </button>
							<? endif;?>
						</div>
					</div>

					<? if($categories): ?>
						<div class="row">
							<div class="col-md-12">
								<? if(validation_errors()): ?>
									<div class="alert alert-danger" role="alert"> Devi selezionare almeno una galleria da cancellare </div>
								<? endif;?>
							
								<table class="table table-striped table-bordered table-hover">
									<tr>
										<th> </th>
										<th> ID </th>
										<th> Titolo </th>
										<th> Titolo url</th>
										<th> Creato in data </th>
										<th> Ultima modifica </th>
										<th> Operazioni </th>
									</tr>

									<?php foreach ($categories as $category):?>
										<tr>
											<td> <input type="checkbox" name="selected_categories[]" value="<?=$category->n_category_id;?>" /> </td>
								            <td><?php echo $category->n_category_id;?></td>
								            <td><?php echo $category->n_category_name;?></td>
								            <td><?php echo $category->n_category_url_name;?></td>
								            <td><?php echo $category->n_category_created_on;?></td>
								            <td><?php echo $category->n_category_modified_on;?></td>
								            <td> <a href="/admin/news/update_category?id=<?=$category->n_category_id;?>" class="btn btn-default"> Modifica </a> </td>
										</tr>
									<?php endforeach;?>
								</table>
							</div> <!-- /. col-md-12 -->
						</div> <!-- /. row -->								
					<? else: ?>
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-warning" role="alert"> 
									Non sono ancora state inseriti categorie, <?php echo anchor('admin/pages/add_category', "aggiungi una categoria ora", array('class'=> 'alert-link'))?> !
								</div>
							</div>
						</div>
					<? endif;?>
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->
	<? form_close();?>
</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>