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
					
					<div class="row marginBottom25">
						<div class="col-md-12">
							<a class="btn btn-primary pull-right" href="/admin/imageUploader/add_gallery"> Aggiungi galleria </a>
						</div>
					</div>

					<? if($galleries): ?>
					<table class="table table-striped">
						<tr>
							<th> ID </th>
							<th> Nome galleria </th>
							<th> Creato in data </th>
							<th> Ultima modifica </th>
							<th> Visibilità </th>
						</tr>

						<?php foreach ($galleries as $gallery):?>
							<tr>
					            <td><?php echo $gallery->gallery_id;?></td>
					            <td><?php echo $gallery->gallery_name;?></td>
					            <td><?php echo $gallery->gallery_created_on;?></td>
					            <td><?php echo $gallery->gallery_modified_on;?></td>
					            <td><?php echo $gallery->gallery_status;?></td>
							</tr>
						<?php endforeach;?>
					</table>
					<? else: ?>
						<div class="alert alert-warning" role="alert"> 
							Non sono ancora state inserite gallerie, <?php echo anchor('admin/imageUploader/add_gallery', "aggiungi una galleria ora", array('class'=> 'alert-link'))?> !
						</div>
					<? endif;?>
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>