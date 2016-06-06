<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImageUploader extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('imageUploader_model');
		// Admin zone is visible only for administrators.
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
			return show_404();
    }

    public function add_gallery(){
    	add_css(array('plugins/justifiedGallery/justifiedGallery.min.css'));
		add_js(array('plugins/justifiedGallery/jquery.justifiedGallery.min.js', 'admin/imageUploader_addGallery.js'));

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('gallery_name', 'titolo', 'required|max_length[128]');
		$this->form_validation->set_rules('gallery_status', 'visibilita', 'required|in_list[published,draft]');

		if ($this->form_validation->run() == FALSE){
    		$data['images'] = $this->imageUploader_model->getAllImages();
			$this->load->view('admin/imageUploader/add_gallery', $data);
		}
		else{
			if($this->imageUploader_model->addGallery($this->input->post('gallery_name'), $this->input->post('gallery_status'), $this->input->post('gallery_image_image_id')))
				redirect('admin/imageUploader/show_galleries', 'refresh');
		}
    	
    }

    public function show_galleries(){
    	$data['galleries'] = $this->imageUploader_model->getAllGalleries();
    	$this->load->view('admin/imageUploader/show_galleries', $data);
    }

	public function upload(){
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

		$this->load->view('admin/imageUploader/upload');
	}

	public function imageUploaderHandler() {
        $this->load->library('UploadHandler');
    }
}