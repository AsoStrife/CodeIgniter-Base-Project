<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{
	public function countAllInseredNews()
	{
		return $this->db
				->select('news_id')
				->from('news') 
				->count_all_results();
	}

	public function countAllInseredPages()
	{
		return $this->db
				->select('page_id')
				->from('pages') 
				->count_all_results();
	}

	public function countAllInseredImages()
	{
		return $this->db
				->select('image_id')
				->from('images') 
				->count_all_results();
	}

	public function countAllSignedUsers()
	{
		return $this->db
				->select('id')
				->from('users') 
				->count_all_results();
	}
}