<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config['css_basepath'] = 'css';
$config['js_basepath'] = 'js';

$ci =& get_instance();
if($ci->uri->segment(1) == 'admin'): 
	$config['header_css'] = array('admin/bootstrap.min.css', 'admin/metisMenu.min.css', 'admin/sb-admin-2.css', 'admin/font-awesome.min.css');
	$config['header_js']  = array('admin/jquery-1.12.3.min.js', 'admin/bootstrap.min.js', 'admin/metisMenu.min.js', 'admin/sb-admin-2.js');

else: 
	$config['header_css'] = array('bootstrap.min.css', 'custom.css');
	$config['header_js']  = array('jquery-1.12.3.min.js', 'bootstrap.min.js');
endif;