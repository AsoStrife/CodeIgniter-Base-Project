<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"> Gallerie fotografiche </h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Qui sotto troverete la lista delle gallerie inserite </div>

				<div class="panel-body">
					
					<div class="row marginBottom25 pull-right">
						<div class="col-md-12">
							<a class="btn btn-primary" href="/admin/images/upload"> Carica foto </a>
							<? if($images): ?>
								<a class="btn btn-warning" href="/admin/images/delete_images"> Elimina foto selezionate </a>
							<? endif;?>
						</div>
					</div>

					<? if($images): ?>
					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th>  </th>
							<th>  </th>
							<th> ID </th>
							<th> Titolo </th>
							<th> Descrizione </th>
							<th> Nome </th>
							<th> Dimensione </th>
							<th> Tipo </th>
							<th> Operazioni </th>
						</tr>

						<?php foreach ($images as $image):?>
							<tr>
								<td> <input type="checkbox" value="<?= $image->image_id;?>" name="selected_images[]"> </td>
								<td> <img src="<?=$image->image_thumbnail_url;?>" class="img-responsive" width="50"/></td>
								<td><?php echo $image->image_id;?></td>
								<td><?php echo $image->image_title;?></td>
								<td><?php echo $image->image_description;?></td>
								<td><?php echo $image->image_name;?></td>
								<td><?php echo formatSizeUnits($image->image_size);?></td>
								<td><?php echo $image->image_type;?></td>
								
								<td> 
									<div class="btn-group" role="group">
										<a class="btn btn-default btn-sm" href="/admin/images/update_image?id=<?php echo $image->image_id;?>"> Modifica </a>
									</div>
								</td>
							</tr>
						<?php endforeach;?>
					</table>
					<? else: ?>
						<div class="alert alert-warning" role="alert"> 
							Non sono ancora state caricate foto, <?php echo anchor('admin/images/upload', "carica delle foto ora", array('class'=> 'alert-link'))?> !
						</div>
					<? endif;?>
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>