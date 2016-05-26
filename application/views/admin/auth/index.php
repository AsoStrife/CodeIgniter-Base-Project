<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

    <div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"> <?php echo lang('index_heading');?> </h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"> <?php echo lang('index_subheading');?> </div>

					<div class="panel-body">
						<?php if(isset($message) && trim($message) != ''): ?>
							<div class="alert alert-danger" role="alert"> 
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<?php echo $message;?> 
							</div>
						<? endif;?>

						<div class="row marginBottom25 pull-right">
							<div class="col-md-12">
								<a class="btn btn-primary" href="/admin/auth/create_user"> Aggiungi utente </a>
								<a class="btn btn-primary" href="/admin/auth/create_group"> Aggiungi gruppo </a>
							</div>
						</div>

						<table class="table table-striped table-bordered table-hover">
							<tr>
								<th><?php echo lang('index_fname_th');?></th>
								<th><?php echo lang('index_lname_th');?></th>
								<th><?php echo lang('index_email_th');?></th>
								<th><?php echo lang('index_groups_th');?></th>
								<th><?php echo lang('index_status_th');?></th>
								<th><?php echo lang('index_action_th');?></th>
							</tr>

							<?php foreach ($users as $user):?>
								<tr>
						            <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
						            <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
						            <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
									<td>
										<?php foreach ($user->groups as $group):?>
											<?php echo anchor("/admin/auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
						                <?php endforeach?>
									</td>
									<td><?php echo ($user->active) ? anchor("/admin/auth/deactivate/".$user->id, lang('index_active_link')) : anchor("/admin/auth/activate/". $user->id, lang('index_inactive_link'));?></td>
									<td><?php echo anchor("/admin/auth/edit_user/".$user->id, 'Edit') ;?></td>
								</tr>
							<?php endforeach;?>
						</table>

					</div> <!-- ./ panel-body -->
				</div> <!-- ./ panel panel-default -->

			</div> <!-- ./ col-lg-12 -->
		</div> <!-- ./ row -->

	</div> <!-- #/ page-wrapper -->

<?php $this->load->view('inc/footer'); ?>