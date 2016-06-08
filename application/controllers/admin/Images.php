<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('images_model');
		// Admin zone is visible only for administrators.
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
			return show_404();
    }

    /**
     * Images Method
     */
    public function show_images(){
    	$this->load->helper('sizeUnits_helper');

    	$this->load->library('form_validation');
		$this->form_validation->set_rules('selected_images[]', 'foto', 'required');

    	if ($this->form_validation->run() == FALSE){
			$data['images'] = $this->images_model->getAllImages();
			$this->load->view('admin/images/show_images', $data);
		}
		else{
			if($this->input->post('selected_images')){
				
				foreach($this->input->post('selected_images') as $selected_image){

					if($img	= $this->images_model->getImageNameById($selected_image)){
						$this->images_model->deleteOneImageByID( $selected_image );	
						@unlink(FCPATH.'uploads/'.$img->image_name);
						@unlink(FCPATH.'uploads/thumbnail/'.$img->image_name);
					}
				}	
			}
			redirect('/admin/images/show_images', 'refresh');
		}
    }

    public function update_image(){
		if(!$this->input->get('id'))
			redirect('admin/images/show_images', 'refresh');

		add_css(array('plugins/justifiedGallery/justifiedGallery.min.css'));
		add_js(array('plugins/justifiedGallery/jquery.justifiedGallery.min.js', 'admin/images_addGallery.js'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('image_title', 'titolo', 'alpha_numeric_spaces');
		$this->form_validation->set_rules('image_description', 'descrizione', 'alpha_numeric_spaces');

		if ($this->form_validation->run() == FALSE){
			$data['image'] 		= $this->images_model->getOneImageById( $this->input->get('id'));

			if($data['image'])
				$this->load->view('admin/images/update_image', $data);
			else
				redirect('admin/images/show_images', 'refresh');
		}
		else{
			if($this->images_model->updateImage($this->input->get('id'), $this->input->post('image_title'), $this->input->post('image_description')))
				redirect('admin/images/show_images', 'refresh');
		}
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

		$this->load->view('admin/images/upload');
	}

	public function imageUploaderHandler() {
        $this->load->library('UploadHandler');
    }

    /**
     * Gallery method
     */

    public function show_galleries(){
    	$this->load->library('form_validation');
		$this->form_validation->set_rules('selected_galleries[]', 'gallerie', 'required');

    	if ($this->form_validation->run() == FALSE){
			$data['galleries'] = $this->images_model->getAllGalleries();
			$this->load->view('admin/images/show_galleries', $data);
		}
		else{
			if($this->input->post('selected_galleries')){
				//print_r($this->input->post('selected_galleries'));
				$this->images_model->deleteMultipleGalleries( $this->input->post('selected_galleries') );
			}
			redirect('/admin/images/show_galleries', 'refresh');
		}
	}

	public function add_gallery(){
		add_css(array('plugins/justifiedGallery/justifiedGallery.min.css'));
		add_js(array('plugins/justifiedGallery/jquery.justifiedGallery.min.js', 'admin/Images_addGallery.js'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('gallery_name', 'titolo', 'required|max_length[128]');
		$this->form_validation->set_rules('gallery_status', 'visibilita', 'required|in_list[published,draft]');

		if ($this->form_validation->run() == FALSE){
			$data['images'] = $this->images_model->getAllImages();
			$this->load->view('admin/images/add_gallery', $data);
		}
		else{
			if($this->images_model->addGallery($this->input->post('gallery_name'), $this->input->post('gallery_status'), $this->input->post('gallery_image_image_id')))
				redirect('admin/images/show_galleries', 'refresh');
		}
	
	}

	public function update_gallery(){
		if(!$this->input->get('id'))
			redirect('admin/images/show_galleries', 'refresh');

		add_css(array('plugins/justifiedGallery/justifiedGallery.min.css'));
		add_js(array('plugins/justifiedGallery/jquery.justifiedGallery.min.js', 'admin/images_addGallery.js'));

		$this->load->library('form_validation');
		$this->form_validation->set_rules('gallery_name', 'titolo', 'required|max_length[128]');
		$this->form_validation->set_rules('gallery_status', 'visibilita', 'required|in_list[published,draft]');

		if ($this->form_validation->run() == FALSE){
			$data['images'] 		= $this->images_model->getAllImages();
			$data['gallery'] 		= $this->images_model->getOneGallery( $this->input->get('id') );
			$data['image_gallery']	= $this->images_model->getOneGalleryWithImage( $this->input->get('id') );

			if($data['gallery'])
				$this->load->view('admin/images/update_gallery', $data);
			else
				redirect('admin/images/show_galleries', 'refresh');
		}
		else{
			if($this->images_model->updateGallery($this->input->get('id'), $this->input->post('gallery_name'), $this->input->post('gallery_status'), $this->input->post('gallery_image_image_id')))
				redirect('admin/images/show_galleries', 'refresh');
		}
	
	}


	
}