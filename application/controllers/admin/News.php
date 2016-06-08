<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct() {
        parent::__construct();

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

		$this->load->library('form_validation');

		$this->form_validation->set_rules('news_title', 'titolo', 'required|max_length[128]');
		$this->form_validation->set_rules('news_content', 'contenuto', 'required');
		$this->form_validation->set_rules('news_categories', 'categoria', '');
		$this->form_validation->set_rules('news_status', 'visibilità', 'required|in_list[published,draft]');
		$this->form_validation->set_rules('news_comments_status', 'commenti attivi', 'required');

		if ($this->form_validation->run() == FALSE){
    		$data['categories'] = $this->news_model->getAllNewsCategoryMin();
			$this->load->view('admin/news/add', $data);
		}
		else{
			if( $this->news_model->insertNews( $this->input->post('news_title'),
												$this->input->post('news_content'),
												$this->input->post('news_status'),
												$this->input->post('news_comments_status'),
												$this->input->post('news_categories')
											 ) );
				redirect('/admin/news/index', 'refresh');
		}
	}

	public function update(){
		if(!$this->input->get('id'))
			redirect('admin/pages/index', 'refresh');

		add_css(array('admin/summernote.css'));
		add_js(array('admin/summernote.min.js'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('news_title', 'titolo', 'required|max_length[128]');
		$this->form_validation->set_rules('news_content', 'contenuto', 'required');
		$this->form_validation->set_rules('news_categories', 'categoria', '');
		$this->form_validation->set_rules('news_status', 'visibilità', 'required|in_list[published,draft]');
		$this->form_validation->set_rules('news_comments_status', 'commenti attivi', 'required');

		if ($this->form_validation->run() == FALSE){
			$data['news'] 				= $this->news_model->getOneNewsById( $this->input->get('id'));
    		$data['categories'] 		= $this->news_model->getAllNewsCategoryMin();
    		$data['news_categories']	= $this->news_model->getNewsCategoriesByNewsId( $this->input->get('id'));
			$this->load->view('admin/news/update', $data);
		}
		else{
			if( $this->news_model->updateNews( $this->input->get('id'),
												$this->input->post('news_title'),
												$this->input->post('news_content'),
												$this->input->post('news_status'),
												$this->input->post('news_comments_status'),
												$this->input->post('news_categories')
											 ) )
				redirect('/admin/news/index', 'refresh');
		}
	}

	public function add_category(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('n_category_name', 'categoria', 'required|max_length[128]|is_unique[n_categories.n_category_name]');

		if ($this->form_validation->run() == FALSE){
    		$this->load->view('admin/news/add_category');
		}
		else{
			if( $this->news_model->insertNCategory( $this->input->post('n_category_name') ) );
				redirect('/admin/news/show_categories', 'refresh');
		}
		
	}

	public function show_categories(){
		$data['categories'] = $this->news_model->getAllNewsCategory();
		$this->load->view('admin/news/show_categories', $data);
	}

}