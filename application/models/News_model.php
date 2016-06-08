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

	public function insertNews($news_title, $news_content, $news_status, $news_comments_status, $news_categories){
		$data = array(
						'news_title' 				=> $news_title,
						'news_url_title' 			=> gen_url_name($news_title),
						'news_content'				=> $news_content,
						'news_status'				=> $news_status,
						'news_comments_status'		=> $news_comments_status,
						'news_created_on' 			=> getDatetime(),
						'news_modified_on'			=> null
					);

		$this->db->insert('news', $data);

		if( $lastInseredID = $this->db->insert_id() ){

			foreach ($news_categories as $category) {
				$this->db->insert('news_categories', array(
														'news_categories_news_id' 		=> $lastInseredID,
														'news_categories_category_id'	=> $category
														)
								);
			}
			return $lastInseredID;
		}
		else return false;

    }

    public function updateNews($news_id, $news_title, $news_content, $news_status, $news_comments_status, $news_categories){
		$data = array(
						'news_title' 				=> $news_title,
						'news_url_title' 			=> gen_url_name($news_title),
						'news_content'				=> $news_content,
						'news_status'				=> $news_status,
						'news_comments_status'		=> $news_comments_status,
						'news_modified_on'			=> getDatetime()
					);

		$this->db->where('news_id', $news_id);

		$this->db->update('news', $data);

		if(!$this->db->delete('news_categories', array('news_categories_news_id' => $news_id))) //delete all news_category relation
    		return false;  

    	if($news_categories){
	    	foreach ($news_categories as $category) {
				if(!$this->db->insert('news_categories', array( 'news_categories_news_id' 		=> $news_id, 'news_categories_category_id'	=> $category )))
					return false;
			}
		}
		return true;
	}

	public function deleteNews($id)	{
		return $this->db->delete('news', array('news_id' => $id));
	}

	public function getOneNewsById($news_id){
		return $this->db
				->select('*')
				->from('news') 
				->where('news_id', $news_id)
				->get()
				->row();
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

	public function updateNCategory($n_category_id, $n_category_name){
		$data = array(
						'n_category_name' 			=> $n_category_name,
						'n_category_url_name' 		=> gen_url_name($n_category_name),
						'n_category_modified_on' 	=> getDatetime(),
					);

		$this->db->where('n_category_id', $n_category_id);
		return $this->db->update('n_categories', $data);
	}

	public function deleteNCategory($n_category_id)	{
		return $this->db->delete('n_categories', array('n_category_id' => $n_category_id));
	}

	/**
     * News_Category query
     */

	public function insertNews_Category($news_categories_news_id, $news_categories_category_id){
		$data = array(
						'news_categories_news_id' 			=> $news_categories_news_id,
						'news_categories_category_id' 		=> $news_categories_category_id
					);

		return $this->db->insert('news_categories', $data);
	}

	public function deleteNews_Category($news_categories_id)	{
		return $this->db->delete('news_categories', array('news_categories_id' => $news_categories_id));
	}

	public function getNewsCategoriesByNewsId($news_categories_news_id){
		return $this->db
				->select('news_categories_category_id')
				->from('news_categories') 
				->where('news_categories_news_id', $news_categories_news_id)
				->get()
				->result();
	}
}