<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('form');
	}

	public function multiple_upload()
	{

		if(isset($_FILES['filename']) && !empty($_FILES['filename']['name'])) {
		    $filesCount = count($_FILES['filename']['name']);
			    for($i = 0; $i < $filesCount; $i++){
			    $_FILES['file']['name']  = $_FILES['filename']['name'][$i];
			    $_FILES['file']['type']  = $_FILES['filename']['type'][$i];
			    $_FILES['file']['tmp_name'] = $_FILES['filename']['tmp_name'][$i];
			    $_FILES['file']['error']    = $_FILES['filename']['error'][$i];
			    $_FILES['file']['size']     = $_FILES['filename']['size'][$i];

			    $config['upload_path'] = './upload/'; 
			    $config['allowed_types'] = 'jpg|jpeg|png|JPEG|JPG|PNG';

			    $this->load->library('upload', $config);
			    $this->upload->initialize($config);

		        if($this->upload->do_upload('file')){
		             $fileData = $this->upload->data();
		             $uploadData[$i]['filedata'] = $fileData['file_name'];
		        }
     		}

		    if(!empty($uploadData)){
		          $this->load->model('Upload_model'); //import class model
		          $result = $this->Upload_model->upload($uploadData);
		          echo "Files uploaded successfully.";
		          
		    }else{
	   			  echo "Not file upload";
	   			  exit;
   			}
   		}
	}

}

/* End of file Upload.php */
/* Location: ./application/controllers/Upload.php */