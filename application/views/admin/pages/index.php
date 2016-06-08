<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div id="page-wrapper">
        
    <div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pagine</h1>
		</div>
	</div>

	<?php echo form_open('/admin/pages/index'); ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading"> Qui sotto troverete la lista delle pagine inserite </div>

				<div class="panel-body">		

					<div class="row marginBottom25 pull-right">
						<div class="col-md-12">
							<a class="btn btn-primary" href="/admin/pages/add"> Aggiungi una pagina </a>
							<? if($pages): ?>
								<button type="submit" class="btn btn-warning"> Elimina pagine selezionate </button>
							<? endif;?>
						</div>
					</div>
					
					<? if($pages): ?>
						<div class="row">
							<div class="col-md-12">
								<table class="table table-striped table-bordered table-hover">
									<tr>
										<th>  </th>
										<th> ID </th>
										<th> Titolo </th>
										<th> Creato in data </th>
										<th> Ultima modifica </th>
										<th> Stato </th>
										<th> Categoria </th>
										<th> Operazioni </th>
									</tr>

									<?php foreach ($pages as $page):?>
										<tr>
											<td> <input type="checkbox" name="selected_pages[]" value="<?=$page->page_id;?>" /> </td>
								            <td><?php echo $page->page_id;?></td>
								            <td><?php echo $page->page_title;?></td>
								            <td><?php echo $page->page_created_on;?></td>
								            <td><?php echo $page->page_modified_on;?></td>
								            <td> 
								            	<?php 
													if($page->page_status == 'published')
														echo '<span class="label label-success">' . 'Pubblica' .'</span>';
													else
														echo '<span class="label label-warning">' . 'Bozza' .'</span>';
												?>
											</td>
								            <td><?php echo $page->p_category_name == null ? 'Nessuna' : $page->p_category_name;?></td>
								            <td> <a href="/admin/pages/update?id=<?=$page->page_id;?>" class="btn btn-default"> Modifica </a> </td>
										</tr>
									<?php endforeach;?>
								</table>
							</div> <!-- /. col-md-12 -->
						</div> <!-- /. row -->								
					<? else: ?>
						<div class="row">
							<div class="col-md-12">
								<div class="alert alert-warning" role="alert"> 
									Non sono ancora state inseriti pagine, <?php echo anchor('admin/pages/add', "aggiungi una pagina ora", array('class'=> 'alert-link'))?> !
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