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

    public function insertPage($page_title, $page_content, $page_status, $p_category_id){
		$data = array(
						'page_title' 				=> $page_title,
						'page_title_url' 			=> gen_url_name($page_title),
						'page_content'				=> $page_content,
						'page_status'				=> $page_status,
						'p_category_id'				=> $p_category_id,
						'page_created_on' 			=> getDatetime(),
						'page_modified_on'			=> null
					);
		return $this->db->insert('pages', $data);
    }

    public function updatePage($page_id, $page_title, $page_content, $page_status, $p_category_id){
		$data = array(
						'page_title' 			=> $page_title,
						'page_title_url' 		=> gen_url_name($page_title),
						'page_content'			=> $page_content,
						'page_status'			=> $page_status,
						'p_category_id'			=> $p_category_id,
						'page_modified_on' 		=> getDatetime(),
					);

		$this->db->where('page_id', $page_id);
		return $this->db->update('pages', $data);
	}

	public function deletePage($page_id)	{
		return $this->db->delete('pages', array('page_id' => $page_id));
	}
    /**
     * Category query
     */

    public function getOnePCategory($p_category_id){
    	return $this->db
				->select('*')
				->from('p_categories') 
				->where('p_category_id', $p_category_id)
				->get()
				->row();
    }

	public function insertPageCategory($p_category_name){
		$data = array(
						'p_category_name' 			=> $p_category_name,
						'p_category_url_name' 		=> gen_url_name($name),
						'p_category_created_on' 	=> getDatetime(),
						'p_category_modified_on'	=> null
					);

		return $this->db->insert('p_categories', $data);
	}

	public function updatePageCategory($p_category_id, $p_category_name){
		$data = array(
						'p_category_name' 			=> $p_category_name,
						'p_category_url_name' 		=> gen_url_name($p_category_name),
						'p_category_modified_on' 	=> getDatetime(),
					);

		$this->db->where('p_category_id', $p_category_id);
		return $this->db->update('p_categories', $data);
	}

	public function deletePageCategory($p_category_id)	{
		$data = array(
						'p_category_id' 			=> null,
					);

		$this->db->where('p_category_id', $p_category_id);
		$this->db->update('pages', $data);
		
		$this->db->delete('p_categories', array('p_category_id' => $p_category_id));
	}

	public function getOnePageById($page_id){
		return $this->db
				->select('*')
				->from('pages') 
				->where('page_id', $page_id)
				->get()
				->row();
	}
}