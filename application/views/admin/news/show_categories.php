<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"> Categorie </h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Qui sotto troverete la lista delle categorie inserite </div>

				<div class="panel-body">
					<?php if(isset($message) && trim($message) != ''): ?>
						<div class="alert alert-danger" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $message;?> 
						</div>
					<? endif;?>

					<? if($categories): ?>
					<table class="table table-striped">
						<tr>
							<th> ID </th>
							<th> Titolo </th>
							<th> Titolo url</th>
							<th> Creato in data </th>
							<th> Ultima modifica </th>
						</tr>

						<?php foreach ($categories as $category):?>
							<tr>
					            <td><?php echo $category->p_category_id;?></td>
					            <td><?php echo $category->p_category_name;?></td>
					            <td><?php echo $category->p_category_url_name;?></td>
					            <td><?php echo $category->p_category_created_on;?></td>
					            <td><?php echo $category->p_category_modified_on;?></td>
							</tr>
						<?php endforeach;?>
					</table>
					<? else: ?>
						<div class="alert alert-warning" role="alert"> 
							Non sono ancora state inseriti categorie, <?php echo anchor('admin/pages/add_category', "aggiungi una categoria ora", array('class'=> 'alert-link'))?> !
						</div>
					<? endif;?>
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>