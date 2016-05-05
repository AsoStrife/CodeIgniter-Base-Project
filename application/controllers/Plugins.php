<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plugins extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'file'));
    }

	public function dateTimePicker(){
		$this->load->view('/plugins/datePicker/index');
	}

	public function colorPicker(){
		$this->load->view('/plugins/colorPicker/index');
	}	

	public function bootstrapImageGallery()
	{
		$this->load->view('/plugins/bootstrapImageGallery/index');
	}

	public function justifiedGallery(){
		$this->load->view('plugins/justifiedGallery/index');
	}

	public function jqueryFileUpload()
	{
		$this->load->view('/plugins/jqueryFileUpload/index');
	}

	/****************************/

	public function do_upload() {

        $this->load->library('UploadHandler');

    }
}