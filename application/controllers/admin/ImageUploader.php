<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImageUploader extends CI_Controller {

	public function __construct() {
        parent::__construct();

		add_css(array('admin/metisMenu.min.css', 'admin/sb-admin-2.css', 'admin/font-awesome.min.css'));
		add_js(array('admin/metisMenu.min.js', 'admin/sb-admin-2.js'));

		// Admin zone is visible only for administrators.
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
			return show_404();
    }

	public function index(){
		add_css(array('plugins/bootstrapImageGallery/bootstrap-image-gallery.min.css', 'plugins/bootstrapImageGallery/blueimp-gallery.min.css' ));
		add_css(array('plugins/jqueryFileUpload/jquery.fileupload.css', 'plugins/jqueryFileUpload/jquery.fileupload-ui.css'));
		add_js(array(	'plugins/jqueryFileUpload/vendor/jquery.ui.widget.js',
						'plugins/jqueryFileUpload/tmpl.min.js', 			// The Templates plugin is included to render the upload/download listings
						'plugins/jqueryFileUpload/load-image.all.min.js', 	// The Load Image plugin is included for the preview images and image resizing functionality
						'plugins/jqueryFileUpload/canvas-to-blob.min.js', 	// The Canvas to Blob plugin is included for image resizing functionality
						'plugins/jqueryFileUpload/jquery.iframe-transport.js',
						'plugins/jqueryFileUpload/jquery.fileupload.js', 
						'plugins/jqueryFileUpload/jquery.fileupload-process.js',
						'plugins/jqueryFileUpload/jquery.fileupload-image.js', 
						'plugins/jqueryFileUpload/jquery.fileupload-audio.js',
						'plugins/jqueryFileUpload/jquery.fileupload-video.js', 
						'plugins/jqueryFileUpload/jquery.fileupload-validate.js',
						'plugins/jqueryFileUpload/jquery.fileupload-ui.js', 
						'plugins/jqueryFileUpload/main.js',
					));

		$this->load->view('admin/imageUploader/index');
	}

	public function imageUploaderHandler() {
        $this->load->library('UploadHandler');
    }
}