<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-6">
            <p> Fancy and customizable colorpicker plugin for Twitter Bootstrap. Originally written by @eyecon and maintained by @mjolnic and the Github community. </p>
            <p> Here the <a href="https://mjolnic.com/bootstrap-colorpicker/" target="_blank"> Doc </a> </p>

            <div id="cp2" class="input-group colorpicker-component"> 
                <input type="text" value="#3759d1" class="form-control" /> 
                <span class="input-group-addon"><i></i></span> 
            </div> 


			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

		</div> <!-- ./ col-lg-6 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>
