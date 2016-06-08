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

					<div class="row marginBottom25">
						<div class="col-md-12">
							<a class="btn btn-primary pull-right" href="/admin/news/add"> Aggiungi un'articolo </a>
						</div>
					</div>

					<? if($news): ?>

					<table class="table table-striped table-bordered table-hover">
						<tr>
							<th> ID </th>
							<th> Titolo </th>
							<th> Creato in data </th>
							<th> Ultima modifica </th>
							<th> Stato </th>
							<th> Commenti attivi </th>
							<th> Operazioni </th>
						</tr>

						<?php foreach ($news as $n):?>
							<tr>
					            <td><?php echo $n->news_id;?></td>
					            <td><?php echo $n->news_title;?></td>
					            <td><?php echo $n->news_created_on;?></td>
					            <td><?php echo $n->news_modified_on;?></td>
					            <td> 
					            	<?php 
										if($n->news_status == 'published')
											echo '<span class="label label-success">' . 'Pubblica' .'</span>';
										else
											echo '<span class="label label-warning">' . 'Bozza' .'</span>';
									?>
								</td>
					            <td>
					            	<?php echo $n->news_comments_status == true ? '<span class="label label-success"> Si </span>' : '<span class="label label-warning"> No </span>';?>
					            </td>
					            <td> <a href="/admin/news/update?id=<?=$n->news_id;?>" class="btn btn-default"> Modifica </a> </td>
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