<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_Model extends CI_Model
{
	public function getAllNewsForAdminTable()
    {  
		return $this->db
				->select('page_id, page_created_on, page_modified_on, page_title, page_status')
				->from('pages') 
				->get()
				->result();
    }

    public function getAllPagesCategoryMin(){
		return $this->db
				->select('p_category_id, p_category_name')
				->from('p_categories') 
				->get()
				->result();
    }
    public function getAllPagesCategory(){
    	return $this->db
   	    		->select('*')
   				->from('p_categories') 
   				->get()
   				->result();
    }
}