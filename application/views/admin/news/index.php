<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">News</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Qui sotto troverete la lista delle notizie inserite </div>

				<div class="panel-body">

					<? if($news): ?>

					<div class="row marginBottom25 pull-right">
						<div class="col-md-12">
							<a class="btn btn-primary" href="/admin/news/add"> Aggiungi un'articolo </a>
						</div>
					</div>

					<table class="table table-striped">
						<tr>
							<th> ID </th>
							<th> Titolo </th>
							<th> Creato in data </th>
							<th> Ultima modifica </th>
							<th> Stato </th>
							<th> Commenti attivi </th>
						</tr>

						<?php foreach ($news as $n):?>
							<tr>
					            <td><?php echo $n->news_id;?></td>
					            <td><?php echo $n->news_title;?></td>
					            <td><?php echo $n->news_created_on;?></td>
					            <td><?php echo $n->news_modified_on;?></td>
					            <td><?php echo $n->news_status;?></td>
					            <td><?php echo $n->news_comments_status;?></td>

							</tr>
						<?php endforeach;?>
					</table>
					<? else: ?>
						<div class="alert alert-warning" role="alert"> 
							Non sono ancora stati inseriti articoli, <?php echo anchor('admin/news/add', "aggiungi un articolo ora", array('class'=> 'alert-link'))?> !
						</div>
					<? endif;?>
				</div> <!-- ./ panel-body -->
			</div> <!-- ./ panel panel-default -->
		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->

</div> <!-- /#page-wrapper -->


<?php $this->load->view('admin/inc/footer'); ?>