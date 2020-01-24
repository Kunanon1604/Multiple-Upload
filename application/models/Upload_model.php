<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function upload($uploadData){

     $query = $this->db->insert_batch('upload',$uploadData);
     
    }
	

}

/* End of file Upload.php */
/* Location: ./application/models/Upload.php */