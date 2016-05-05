<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User {

	/*
	
	[id] => 1
	[ip_address] 				=> 2130706433
	[username] 					=> administrator
	[password] 					=> 09170458406a81700c6694e38fdac5308f913779
	[salt] 						=> 9462e8eee0
	[email] 					=> admin@admin.com
	[activation_code] 			=> 
	[forgotten_password_code] 	=> 
	[remember_code]				=> 
	[created_on] 				=> 1268889823
	[last_login] 				=> 1325302690
	[active] 					=> 1
	[first_name] 				=> Admin
	[last_name]					=> Istrator
	[company] 					=> 
	[phone] 					=> 0
	
	*/
	
	public function __construct()
	{
		$CI =& get_instance();
		
		$CI->load->library('ion_auth');
		
		if( $CI->ion_auth->logged_in() ){
			foreach ($CI->ion_auth->user()->row(0) as $key => $value)
			{
				$this->$key = $value;
			}
		}
		// full name
		if ($this->logged())
		if ($this->first_name && $this->last_name) $this->full_name = $this->first_name.' '.$this->last_name;
		else $this->full_name = $this->email;
		
		/* return page */
		$this->return_page = current_url();
		$CI->session->set_flashdata('return_page', $this->return_page);
	}
	
	public function return_page()
	{
		$CI =& get_instance();
		
		if($this->return_page == $CI->session->flashdata('return_page'))
		{
			return '/';
		}
		else 
		{
			return $CI->session->flashdata('return_page');
		}
	}
		
	public function logged()
	{
		$CI =& get_instance();
		return $CI->ion_auth->logged_in();
	}
	
	public function admin()
	{
		$CI =& get_instance();
		return $CI->ion_auth->is_admin();
	}
	

}