<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plugins extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'file'));
    }

	public function dateTimePicker(){
		add_css(array('plugins/dateTimePicker/bootstrap-datetimepicker.min.css'));
		add_js(array('moment.min.js', 'plugins/dateTimePicker/bootstrap-datetimepicker.min.js'));
		$this->load->view('plugins/datePicker/index');
	}

	public function colorPicker(){
		add_css(array('plugins/colorPicker/bootstrap-colorpicker.min.css'));
		add_js(array('plugins/colorPicker/bootstrap-colorpicker.min.js'));
		$this->load->view('plugins/colorPicker/index');
	}	

	public function bootstrapImageGallery()
	{
		add_css(array('plugins/bootstrapImageGallery/bootstrap-image-gallery.min.css', 'plugins/bootstrapImageGallery/blueimp-gallery.min.css' ));
		add_js(array('plugins/bootstrapImageGallery/jquery.blueimp-gallery.min.js', 'plugins/bootstrapImageGallery/bootstrap-image-gallery.min.js'));

		$this->load->view('plugins/bootstrapImageGallery/index');
	}

	public function justifiedGallery(){
		add_css(array('plugins/justifiedGallery/justifiedGallery.min.css'));
		add_js(array('plugins/justifiedGallery/jquery.justifiedGallery.min.js'));

		$this->load->view('plugins/justifiedGallery/index');
	}


	public function jqueryFileUpload()
	{
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

		$this->load->view('/plugins/jqueryFileUpload/index');
	}

	public function jqueryFileUploadHandler() {

        $this->load->library('UploadHandler');
  
    }

    public function loaderAssets(){
		$this->load->view('plugins/loaderAssets/index');
	}
}