<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
        parent::__construct();
        add_css(array('admin/metisMenu.min.css', 'admin/timeline.css', 'admin/sb-admin-2.css' , 'admin/morris.css', 'admin/font-awesome.min.css'));

        //'admin/flot-data.js'
		add_js(array('admin/metisMenu.min.js', 'admin/raphael-min.js', 'admin/morris.min.js', 'admin/morris-data.js', 'admin/sb-admin-2.js'));
    }

	public function index(){
		
		$this->load->view('admin/index');
	}
}