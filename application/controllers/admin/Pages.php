<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
        parent::__construct();
		add_css(array('admin/metisMenu.min.css', 'admin/sb-admin-2.css', 'admin/font-awesome.min.css'));
		add_js(array('admin/metisMenu.min.js', 'admin/sb-admin-2.js'));

		// Admin zone is visible only for administrators.
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
			return show_404();

		$this->load->model('pages_model');
    }

	public function index(){
		$data['pages'] = $this->pages_model->getAllNewsForAdminTable();
		$this->load->view('admin/pages/index', $data);
	}

	public function add(){
		add_css(array('admin/summernote.css'));
		add_js(array('admin/summernote.min.js'));

		$data['categories'] = $this->pages_model->getAllPagesCategoryMin();
		$this->load->view('admin/pages/add', $data);
	}

	public function show_categories(){
		$data['categories'] = $this->pages_model->getAllPagesCategory();
		$this->load->view('admin/pages/show_category', $data);
	}

	public function add_category(){
		$this->load->view('admin/pages/add_categories');
	}

	

}