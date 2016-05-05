<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
            <p> This is a <strong>JQuery plugin</strong> that allows you to create an <strong>high quality justified gallery</strong> of images. <br> A common problem, for people who create sites, is to create an elegant image gallery that manages the various sizes of thumbnails. <strong>Flickr and Google+</strong> manage this situation in an  xcellent way, the purpose of this plugin is to give you the power of those solutions, with a new professional and open source plugin. </p>
            <p> Here the <a href="http://miromannino.github.io/Justified-Gallery/getting-started/" target="_blank"> Doc </a> </p>

            <div id="mygallery" >
                <a href="https://placehold.it/350x150">
                    <img alt="Title 1" src="https://placehold.it/350x150"/>
                </a>
                
                <a href="https://placehold.it/350x150">
                    <img alt="Title 2" src="https://placehold.it/350x150"/>
                </a>

                <a href="https://placehold.it/350x350">
                    <img alt="Title 2" src="https://placehold.it/350x350"/>
                </a>

                <a href="https://placehold.it/550x420">
                    <img alt="Title 2" src="https://placehold.it/550x420"/>
                </a>

                <a href="https://placehold.it/120x600">
                    <img alt="Title 2" src="https://placehold.it/120x600"/>
                </a>

                <a href="https://placehold.it/1920x1080">
                    <img alt="Title 2" src="https://placehold.it/1920x1080"/>
                </a>
                <!-- other images... -->
            </div>
            


			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>
