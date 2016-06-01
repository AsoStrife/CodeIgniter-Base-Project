<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_Model extends CI_Model
{
	public function getAllNewsForAdminTable()
    {
       
   	    return $this->db
   	    		->select('news_id, news_created_on, news_modified_on, news_title, news_status, news_comments_status')
   				->from('news') 
   				->get()
   				->result();
    }

    public function getAllNewsCategoryMin(){
		return $this->db
				->select('n_category_id, n_category_name')
				->from('n_categories') 
				->get()
				->result();
    }
    public function getAllNewsCategory(){
    	return $this->db
   	    		->select('*')
   				->from('n_categories') 
   				->get()
   				->result();
    }
}