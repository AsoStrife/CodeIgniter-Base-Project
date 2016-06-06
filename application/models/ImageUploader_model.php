<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ImageUploader_model extends CI_Model
{
	function __construct(){
		parent::__construct();
		$ci = get_instance();
		$ci->load->helper('query_helper');
	}

	/**
	 * Images
	 */

	public function getAllImages(){  
		return $this->db
				->select('*')
				->from('uploaded_images') 			
				->get()
				->result();
	}

    public function getOneImageById($id){
    	return $this->db
				->select('*')
				->from('uploaded_images')
				->where('image_id', $id)		
				->get()
				->row();
    }	

    public function getOneImageByName($name){
    	return $this->db
				->select('*')
				->from('uploaded_images')
				->where('image_id', $id)		
				->get()
				->row();
    }

    /**
      * @return int (last insert_id() )
     */
    public function addOneImage($image_name, $image_size, $image_type, $image_title, $image_description, $image_url, $image_thumbnail_url){
    		$data = array(
                    'image_name'			=> $image_name,
                    'image_size'			=> $image_size,
                    'image_type'			=> $image_type,
                    'image_title'			=> $image_title,
                    'image_description'		=> $image_description,
                    'image_url'				=> $image_url,
                    'image_thumbnail_url'	=> $image_thumbnail_url,
            );
            $this->db->insert('uploaded_images', $data);
            return $this->db->insert_id();
    }

    public function deleteOneImageByID($id){
    	$this->db->delete('uploaded_images', array('image_id' => $id));
    }

    public function deleteOneImageByName($name){
    	$this->db->delete('uploaded_images', array('image_name' => $name));
    }

    /**
     * Galleries 
     */

    public function getAllGalleries(){  
		return $this->db
				->select('*')
				->from('galleries') 			
				->get()
				->result();
    }

    public function addGallery($gallery_name, $gallery_status, $gallery_image_image_id){
    	$data = array(	'gallery_name'          	=> $gallery_name,
		                    'gallery_status'        => $gallery_status,
		                    'gallery_created_on' 	=> getDatetime(),
		                    'gallery_modified_on' 	=> null
		                  );
    	//create gallery
    	if($this->db->insert('galleries', $data)){
	        $id_gallery =  $this->db->insert_id();
	        foreach($gallery_image_image_id as $photoid){
	        	//Add all photo into gallery
	        	$this->db->insert('gallery_image', array('gallery_image_gallery_id' => $id_gallery, 'gallery_image_image_id' => $photoid));
	        }
	        return true;
	    }
	    else return false; 
    }

    public function deleteOneGallery($id){
    	return $this->db->delete('galleries', array('gallery_id' => $id));
    }

    /**
     * Gallery_image 
     */

    public function getOneGalleryWithImage($gallery_id){
    	return $this->db
				->select('*')
				->from('gallery_image') 	
				->join('galleries', 'gallery_image.gallery_image_gallery_id = galleries.gallery_id', 'left')		
				->join('uploaded_images', 'gallery_image.gallery_image_image_id = uploaded_images.image_id', 'left')	
				->where('gallery_image_gallery_id', $gallery_id)	
				->get()
				->result();
    }
}