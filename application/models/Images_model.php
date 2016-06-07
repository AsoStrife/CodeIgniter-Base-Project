<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Images_model extends CI_Model
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
				->from('images') 			
				->get()
				->result();
	}

    public function getOneImageById($id){
    	return $this->db
				->select('*')
				->from('images')
				->where('image_id', $id)		
				->get()
				->row();
    }	

    public function getOneImageByName($name){
    	return $this->db
				->select('*')
				->from('images')
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
            if($this->db->insert('images', $data))
            	return $this->db->insert_id();
           	else
           		return false;
    }

    public function deleteOneImageByID($id){
    	if($this->db->delete('images', array('image_id' => $id)))
    		return true;
    	else return false;
    }

    public function deleteOneImageByName($name){
    	if($this->db->delete('images', array('image_name' => $name)))
    		return true;
    	else return false;
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

    public function getGalleries($gallery_status){ 
    	if($gallery_status != 'published' && $gallery_status != 'draft') //security check
    		return false;

		return $this->db
				->select('*')
				->from('galleries') 
				->where('gallery_status', $gallery_status)		
				->get()
				->result();
    }

    public function getOneGallery($gallery_id){  
		return $this->db
				->select('*')
				->from('galleries') 
				->where('gallery_id', $gallery_id)			
				->get()
				->row();
    }
    public function addGallery($gallery_name, $gallery_status, $gallery_image_image_id){
    	if($gallery_status != 'published' && $gallery_status != 'draft') //security check
    		$gallery_status = 'draft';

    	$data = array(	'gallery_name'          	=> $gallery_name,
	                    'gallery_status'        => $gallery_status,
	                    'gallery_created_on' 	=> getDatetime(),
	                    'gallery_modified_on' 	=> null
	                  );

    	//create gallery
    	if($this->db->insert('galleries', $data)){
	        $gallery_id =  $this->db->insert_id();
	        if($gallery_image_image_id){
				foreach($gallery_image_image_id as $photoid){
					//Add all photo into gallery
					if(!$this->db->insert('gallery_image', array('gallery_image_gallery_id' => $gallery_id, 'gallery_image_image_id' => $photoid)))
						return false;
		        }
			}
			return true;
		}
		else return false; 
    }

    public function updateGallery($gallery_id, $gallery_name, $gallery_status, $gallery_image_image_id){
    	if($gallery_status != 'published' && $gallery_status != 'draft') //security check
    		$gallery_status = 'draft';

    	$data = array(	'gallery_name'          => $gallery_name,
	                    'gallery_status'        => $gallery_status,
	                    'gallery_modified_on' 	=> getDatetime()
	                  );

    	$this->db->where('gallery_id', $gallery_id);
    	if(!$this->db->update('galleries', $data)) //upadate gallery table info
    		return false; 

    	if(!$this->db->delete('gallery_image', array('gallery_image_gallery_id' => $gallery_id))) //delete all gallery_image relation
    		return false;  

    	if($gallery_image_image_id){
	    	foreach($gallery_image_image_id as $photoid){
	        	//Add all photo into gallery
	        	if(!$this->db->insert('gallery_image', array('gallery_image_gallery_id' => $gallery_id, 'gallery_image_image_id' => $photoid)))
	        		return false;
	        }
	    }
        
        return true; // All query ok!
    }

    public function deleteOneGallery($id){
    	return $this->db->delete('gallery_image', array('gallery_id' => $id));
    }

    /**
     * Gallery_image 
     */

    public function getOneGalleryWithImage($gallery_id){
    	return $this->db
				->select('*')
				->from('gallery_image') 	
				->join('galleries', 'gallery_image.gallery_image_gallery_id = galleries.gallery_id', 'left')		
				->join('images', 'gallery_image.gallery_image_image_id = images.image_id', 'left')	
				->where('gallery_image_gallery_id', $gallery_id)	
				->get()
				->result();
    }

    public function isInGallery($gallery_id, $image_id){
    	if( $this->db->select('*')->from('gallery_image')->where('gallery_image_gallery_id', $gallery_id)->where('gallery_image_image_id', $image_id)
				->get()->row()
				)
    		return true; //image is in gallery
    	else return false; 
    }
}