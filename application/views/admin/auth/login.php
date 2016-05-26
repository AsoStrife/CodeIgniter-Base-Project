<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('admin/inc/header'); ?>

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"> <?php echo lang('login_heading');?> </h3>
                    </div>
                    <div class="panel-body">

                    	<?php if(isset($message) && trim($message) != ''): ?>
							<div class="alert alert-danger" role="alert"> 
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<?php echo $message;?> 
							</div>
						<? endif;?>

                        <?php echo form_open("auth/login");?>
                            <fieldset>
                                <div class="form-group <? if(form_error('identity')) echo 'has-error'?>">
									<label for="identity" class="control-label"> <?php echo lang('login_identity_label', 'identity');?> </label>
									<?php echo form_input($identity);?>
									<span class="help-block"> <?php echo form_error('identity'); ?> </span>
								</div>

                                <div class="form-group <? if(form_error('password')) echo 'has-error'?>">
									<label for="password" class="control-label"> <?php echo lang('login_password_label', 'password');?> </label>
									<?php echo form_input($password);?>
									<span class="help-block"> <?php echo form_error('password'); ?> </span>
								</div>

								<div class="checkbox">
									<label>
										<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> <?php echo lang('login_remember_label');?>
									</label>
								</div>
                                <!-- Change this to a button or input when using this as a form -->
                                <?php echo form_submit('submit', lang('login_submit_btn'), array("class" => 'btn btn-primary btn-block'));?>
                                
                            </fieldset>
                        <?php echo form_close();?>
                    </div> <!-- ./ panel-body -->
                    <div class="panel-footer"><a href="/admin/auth/forgot_password"><?php echo lang('login_forgot_password');?></a></div>
                </div> <!-- ./login panel-->

            </div> <!-- ./col-md-4 -->
        </div> <!-- ./ row -->
    </div> <!-- ./container -->
<?php $this->load->view('admin/inc/footer'); ?>