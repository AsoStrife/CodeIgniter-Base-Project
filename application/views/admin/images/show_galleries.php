<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header"> Gallerie fotografiche </h1>
		</div>
	</div>

	<?php echo form_open('/admin/images/show_galleries'); ?>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Qui sotto troverete la lista delle gallerie inserite </div>

				<div class="panel-body">
					
					<div class="row marginBottom25 pull-right">
						<div class="col-md-12">
							<a class="btn btn-primary" href="/admin/images/add_gallery"> Aggiungi galleria </a>

							<? if($galleries): ?>
								<button type="submit" class="btn btn-warning"> Elimina gallerie selezionate </button>
							<? endif;?>
						</div>
					</div>

					<? if($galleries): ?>

					<div class="row">
						<div class="col-md-12">
							<? if(validation_errors()): ?>
									<div class="alert alert-danger" role="alert"> Devi selezionare almeno una galleria da cancellare </div>
								<? endif;?>

							<table class="table table-striped table-bordered table-hover">
								<tr>
									<th>  </th>
									<th> ID </th>
									<th> Nome galleria </th>
									<th> Creato in data </th>
									<th> Ultima modifica </th>
									<th> Visibilità </th>
									<th> Operazione </th>
								</tr>

								<?php foreach ($galleries as $gallery):?>
									<tr>
										<td> <input type="checkbox" name="selected_galleries[]" value="<?=$gallery->gallery_id;?>" /> </td>
										<td><?php echo $gallery->gallery_id;?></td>
										<td><?php echo $gallery->gallery_name;?></td>
										<td><?php echo $gallery->gallery_created_on;?></td>
										<td><?php echo $gallery->gallery_modified_on;?></td>
										<td>
											<?php 
												if($gallery->gallery_status == 'published')
													echo '<span class="label label-success">' . 'Pubblica' .'</span>';
												else
													echo '<span class="label label-warning">' . 'Bozza' .'</span>';
											?>												
										</td>
										<td> 
											<div class="btn-group" role="group">
												<a class="btn btn-default btn-sm" href="/admin/images/update_gallery?id=<?php echo $gallery->gallery_id;?>"> Modifica </a>
											</div>
										</td>
									</tr>
								<?php endforeach;?>
							</table>
						</div>
					</div>

					<? else: ?>
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-warning" role="alert"> 
									Non sono ancora state inserite gallerie, <?php echo anchor('admin/images/add_gallery', "aggiungi una galleria ora", array('class'=> 'alert-link'))?> !
								</div>
							</div>
						</div>
					<? endif;?>
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->
	<?php form_close(); ?>


</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>