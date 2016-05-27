<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct() {
        parent::__construct();
        /* Tests 
        add_css(array('admin/metisMenu.min.css', 'admin/timeline.css', 'admin/sb-admin-2.css' , 'admin/morris.css', 'admin/font-awesome.min.css'));
		add_js(array('admin/metisMenu.min.js', 'admin/raphael-min.js', 'admin/morris.min.js', 'admin/morris-data.js', 'admin/sb-admin-2.js'));
		*/

		add_css(array('admin/metisMenu.min.css', 'admin/sb-admin-2.css', 'admin/font-awesome.min.css'));
		add_js(array('admin/metisMenu.min.js', 'admin/sb-admin-2.js'));

		// Admin zone is visible only for administrators.
		if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
			return show_404();
		
		if(!$this->uri->segment(2))
			redirect('/admin/pages/index');
    }

	public function index(){
		$this->load->view('admin/news/index');
	}

}