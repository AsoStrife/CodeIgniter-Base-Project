<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pagine</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Qui sotto troverete la lista delle pagine inserite </div>

				<div class="panel-body">
					<?php if(isset($message) && trim($message) != ''): ?>
						<div class="alert alert-danger" role="alert"> 
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<?php echo $message;?> 
						</div>
					<? endif;?>

					<? if($pages): ?>
					<table class="table table-striped">
						<tr>
							<th> ID </th>
							<th> Titolo </th>
							<th> Creato in data </th>
							<th> Ultima modifica </th>
							<th> Stato </th>
							<th> Commenti attivi </th>
						</tr>

						<?php foreach ($pages as $page):?>
							<tr>
					            <td><?php echo $page->id;?></td>
					            <td><?php echo $page->news_title;?></td>
					            <td><?php echo $page->news_created_on;?></td>
					            <td><?php echo $page->news_modified_on;?></td>
					            <td><?php echo $page->news_status;?></td>
					            <td><?php echo $page->news_comments_status;?></td>

							</tr>
						<?php endforeach;?>
					</table>
					<? else: ?>
						<div class="alert alert-warning" role="alert"> 
							Non sono ancora state inseriti pagine, <?php echo anchor('admin/pages/add', "aggiungi una pagina ora", array('class'=> 'alert-link'))?> !
						</div>
					<? endif;?>
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>