<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('inc/header'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
            <p>Bootstrap Image Gallery is an extension to <a href="https://blueimp.github.io/Gallery/">blueimp Gallery</a>, a touch-enabled, responsive and customizable image &amp; video gallery.<br> It displays images and videos in the modal dialog of the <a href="http://getbootstrap.com/">Bootstrap</a> framework, features swipe, mouse and keyboard navigation, transition effects, fullscreen support and on-demand content loading and can be extended to display additional content types.</p>
            <p> Here the <a href="https://github.com/blueimp/Bootstrap-Image-Gallery" target="_blank"> Doc </a> </p> 

            <div id="links">
                <a href="http://screenrant.com/wp-content/uploads/Captain-America-Civil-War-Splashpage-TeamCap-Photo.jpg" title="Photo 1" data-gallery>
                    <img src="http://screenrant.com/wp-content/uploads/Captain-America-Civil-War-Splashpage-TeamCap-Photo.jpg" alt="Photo 1"  width="150">
                </a>

                <a href="http://screenrant.com/wp-content/uploads/Captain-America-Civil-War-Splashpage-TeamCap-Photo.jpg" title="Photo 2" data-gallery>
                    <img src="http://screenrant.com/wp-content/uploads/Captain-America-Civil-War-Splashpage-TeamCap-Photo.jpg" alt="Photo 2"  width="150">
                </a>

                <a href="http://screenrant.com/wp-content/uploads/Captain-America-Civil-War-Splashpage-TeamCap-Photo.jpg" title="Photo 3" data-gallery>
                    <img src="http://screenrant.com/wp-content/uploads/Captain-America-Civil-War-Splashpage-TeamCap-Photo.jpg" alt="Photo 3"  width="150">
                </a>
            </div>

            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
            <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false"> <!-- can be settet also false -->
                <!-- The container for the modal slides -->
                <div class="slides"></div>
                <!-- Controls for the borderless lightbox -->
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="close">×</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                <div class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body next"></div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default pull-left prev">
                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                    Previous
                                </button>
                                <button type="button" class="btn btn-primary next">
                                    Next
                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                </button>
                            </div> <!-- modal-footer -->

                        </div> <!-- ./ modal-content -->
                    </div> <!-- ./ modal-dialog -->
                </div> <!-- ./ modal fade -->
            </div> <!-- ./ blueimp-gallery -->

			<p>Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

		</div> <!-- ./ col-lg-12 -->
	</div> <!-- ./ row -->
</div> <!-- ./ container -->

<?php $this->load->view('inc/footer'); ?>