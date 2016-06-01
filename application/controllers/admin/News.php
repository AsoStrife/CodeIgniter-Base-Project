<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct() {
        parent::__construct();
		add_css(array('admin/metisMenu.min.css', 'admin/sb-admin-2.css', 'admin/font-awesome.min.css'));
		add_js(array('admin/metisMenu.min.js', 'admin/sb-admin-2.js'));

		// Admin zone is visible only for administrators.
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
			return show_404();

		$this->load->model('news_model');
    }

	public function index(){
		$data['news'] = $this->news_model->getAllNewsForAdminTable();
		$this->load->view('admin/news/index', $data);
	}

	public function add(){
		add_css(array('admin/summernote.css'));
		add_js(array('admin/summernote.min.js'));

		$data['categories'] = $this->news_model->getAllNewsCategoryMin();
		$this->load->view('admin/news/add', $data);
	}

	public function add_category(){
		$this->load->view('admin/news/add_category');
	}

	public function show_categories(){
		$data['categories'] = $this->news_model->getAllNewsCategory();
		$this->load->view('admin/news/show_categories', $data);
	}

}