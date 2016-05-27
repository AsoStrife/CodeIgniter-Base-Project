<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plugins extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'file'));
    }

	public function dateTimePicker(){
		add_css(array('plugins/dateTimePicker/bootstrap-datetimepicker.min.css'));
		add_js(array('admin/moment.min.js', 'plugins/dateTimePicker/bootstrap-datetimepicker.min.js'));
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

    public function loaderAssets(){
		$this->load->view('plugins/loaderAssets/index');
	}
}