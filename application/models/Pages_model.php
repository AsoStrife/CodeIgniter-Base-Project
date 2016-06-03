<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_Model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
        $ci = get_instance();
		$ci->load->helper('query_helper');
    }
			
	/**
	 * Page model 
	 */

	public function getAllNewsForAdminTable()
    {  
		return $this->db
				->select('page_id, page_created_on, page_modified_on, page_title, page_status, p_category_name')
				->from('pages') 
				->join('p_categories', 'pages.p_category_id = p_categories.p_category_id', 'left')
				->get()
				->result();
    }

    public function getAllPagesCategoryMin(){
		return $this->db
				->select('p_category_id, p_category_name')
				->from('p_categories') 
				->where('p_category_id >', 0)
				->get()
				->result();
    }
    public function getAllPagesCategory(){
    	return $this->db
   	    		->select('*')
   				->from('p_categories') 
   				->where('p_category_id >', 0)
   				->get()
   				->result();
    }

    /**
	 * Insert, update, delete
	 */

    public function insertPage($title, $content, $status, $category_id){
		$data = array(
						'page_title' 				=> $title,
						'page_title_url' 			=> gen_url_name($title),
						'page_content'				=> $content,
						'page_status'				=> $status,
						'p_category_id'				=> $category_id,
						'page_created_on' 			=> getDatetime(),
						'page_modified_on'			=> null
					);
		return $this->db->insert('pages', $data);
    }

    public function updatePage($id, $title, $content, $status, $category_id){
		$data = array(
						'page_title' 			=> $title,
						'page_title_url' 			=> gen_url_name($title),
						'page_content'				=> $content,
						'page_status'				=> $status,
						'page_category_id'			=> $category_id,
						'page_modified_on' 			=> getDatetime(),
					);

		$this->db->where('page_id', $id);
		return $this->db->update('pages', $data);
	}

	public function deletePage($id)	{
		return $this->db->delete('pages', array('page_id' => $id));
	}
    /**
     * Category query
     */

	public function insertPageCategory($name){
		$data = array(
						'p_category_name' 			=> $name,
						'p_category_url_name' 		=> gen_url_name($name),
						'p_category_created_on' 	=> getDatetime(),
						'p_category_modified_on'	=> null
					);

		return $this->db->insert('p_categories', $data);
	}

	public function updatePageCategory($id, $name){
		$data = array(
						'p_category_name' 			=> $name,
						'p_category_url_name' 		=> gen_url_name($name),
						'p_category_modified_on' 	=> getDatetime(),
					);

		$this->db->where('p_category_id', $id);
		return $this->db->update('p_categories', $data);
	}

	public function deletePageCategory($id)	{
		return $this->db->delete('p_categories', array('p_category_id' => $id));
	}
}