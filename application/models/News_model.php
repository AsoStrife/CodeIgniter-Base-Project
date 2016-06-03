<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_Model extends CI_Model
{
	function __construct(){
		parent::__construct();
		$ci = get_instance();
		$ci->load->helper('query_helper');
	}
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

	/**
	 * Insert, update, delete
	 */
	public function insertNews($title, $content, $status, $news_comments_status){
		$data = array(
						'news_title' 				=> $title,
						'news_url_title' 			=> gen_url_name($title),
						'news_content'				=> $content,
						'news_status'				=> $status,
						'news_comments_status'		=> $news_comments_status,
						'news_created_on' 			=> getDatetime(),
						'news_modified_on'			=> null
					);
		return $this->db->insert('news', $data);
    }

    public function updateNews($id, $title, $content, $status, $news_comments_status){
		$data = array(
						'news_title' 				=> $title,
						'news_url_title' 			=> gen_url_name($title),
						'news_content'				=> $content,
						'news_status'				=> $status,
						'news_comments_status'		=> $news_comments_status,	
						'news_modified_on'			=> getDatetime()
					);

		$this->db->where('news_id', $id);
		return $this->db->update('news', $data);
	}

	public function deleteNews($id)	{
		return $this->db->delete('news', array('news_id' => $id));
	}

    /**
     * Category query
     */

	public function insertNCategory($name){
		$data = array(
						'n_category_name' 			=> $name,
						'n_category_url_name' 		=> gen_url_name($name),
						'n_category_created_on' 	=> getDatetime(),
						'n_category_modified_on'	=> null
					);

		return $this->db->insert('n_categories', $data);
	}

	public function updateNCategory($id, $name){
		$data = array(
						'n_category_name' 			=> $name,
						'n_category_url_name' 		=> gen_url_name($name),
						'n_category_modified_on' 	=> getDatetime(),
					);

		$this->db->where('n_category_id', $id);
		return $this->db->update('n_categories', $data);
	}

	public function deleteNCategory($id)	{
		return $this->db->delete('n_categories', array('n_category_id' => $id));
	}

	/**
     * News_Category query
     */

	public function insertNews_Category($news_id, $category_id){
		$data = array(
						'news_categories_news_id' 			=> $news_id,
						'news_categories_category_id' 		=> $category_id
					);

		return $this->db->insert('news_categories', $data);
	}

	public function deleteNews_Category($id)	{
		return $this->db->delete('news_categories', array('news_categories_id' => $id));
	}
}