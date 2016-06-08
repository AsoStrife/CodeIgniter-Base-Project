<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function __construct() {
        parent::__construct();
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

		$this->load->library('form_validation');

		$this->form_validation->set_rules('page_title', 'titolo', 'required|max_length[128]');
		$this->form_validation->set_rules('page_content', 'contenuto', 'required');
		$this->form_validation->set_rules('p_category_id', 'categoria', 'required');
		$this->form_validation->set_rules('page_status', 'visibilita', 'required|in_list[published,draft]');

		if ($this->form_validation->run() == FALSE){
    		$data['categories'] = $this->pages_model->getAllPagesCategoryMin();
			$this->load->view('admin/pages/add', $data);
		}
		else{
			if( $this->pages_model->insertPage( $this->input->post('page_title'),
												$this->input->post('page_content'),
												$this->input->post('page_status'),
												$this->input->post('p_category_id')
											 ) );
				redirect('/admin/pages/index', 'refresh');
		}
	}

	public function update(){
		if(!$this->input->get('id'))
			redirect('admin/pages/index', 'refresh');

		add_css(array('admin/summernote.css'));
		add_js(array('admin/summernote.min.js'));

		$this->load->library('form_validation');

		$this->form_validation->set_rules('page_title', 'titolo', 'required|max_length[128]');
		$this->form_validation->set_rules('page_content', 'contenuto', 'required');
		$this->form_validation->set_rules('p_category_id', 'categoria', 'required');
		$this->form_validation->set_rules('page_status', 'visibilita', 'required|in_list[published,draft]');

		if ($this->form_validation->run() == FALSE){
			$data['page'] 		= $this->pages_model->getOnePageById( $this->input->get('id'));
    		$data['categories'] = $this->pages_model->getAllPagesCategoryMin();
			$this->load->view('admin/pages/update', $data);
		}
		else{
			if( $this->pages_model->updatePage( $this->input->get('id'),
												$this->input->post('page_title'),
												$this->input->post('page_content'),
												$this->input->post('page_status'),
												$this->input->post('p_category_id')
											 ) )
				redirect('/admin/pages/index', 'refresh');
		}
	}

	public function show_categories(){
		$data['categories'] = $this->pages_model->getAllPagesCategory();
		$this->load->view('admin/pages/show_categories', $data);
	}

	public function add_category(){
		$this->load->library('form_validation');

		$this->form_validation->set_rules('p_category_name', 'categoria', 'required|max_length[128]|is_unique[p_categories.p_category_name]');

		if ($this->form_validation->run() == FALSE){
    		$this->load->view('admin/pages/add_category');
		}
		else{
			if( $this->pages_model->insertPageCategory( $this->input->post('p_category_name') ) );
				redirect('/admin/pages/show_categories', 'refresh');
		}
		
	}

	

}