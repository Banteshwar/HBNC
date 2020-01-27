
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->admin_info      =  $this->common->__check_session();
    $this->load->model('State_district_block_model');
    $this->load->model('Gallery_model');	

}


public function index(){
	// check user permission
	if(!has_admin_permission_layout('VIEW_PHOTO_GALLERY')) { return; }
	$data['page_title'] = 'View Gallery';
    $queryWhere    = array();
   
    $State_ID =  intval(trim($this->input->get('State_ID' )));
    if($_SESSION['ADMIN']['State_ID']  != 0) {
        $State_ID = $_SESSION['ADMIN']['State_ID'];
	}
	
	$District_ID   = intval(trim($this->input->get('District_ID')));
	if($_SESSION['ADMIN']['District_ID'] != 0 ) {
		$District_ID = $_SESSION['ADMIN']['District_ID'];
	}

	if ($State_ID != 0) {
        $queryWhere[] = "where gallery.`State_ID`= $State_ID ";
    }

	if ($District_ID != 0) {
		$queryWhere[] = "  gallery.District_ID= $District_ID";
	}	

//print_r($queryWhere);die;
	$filterArray['WHERE'] = $queryWhere;

	$data['result_list']  = $this->Gallery_model->getGalleryList($filterArray);
  //echo "<pre>";print_r($data['result_list']);die;

        
	
	$data['State_ID']= $State_ID;
	$data['District_ID'] = $District_ID;
	loadLayout('admin/gallery/view_list', $data, 'admin'); 
	
}

public function add_gallery(){
    // check user permission
  //echo "<pre>";print_r($_FILE);die;
	if(!has_admin_permission_layout('ADD_PHOTO_GALLERY')) { return; }
	
	$data['page_title'] = 'Add Image';
	
  //echo "in";die;	
	$State_ID =  intval($this->input->get('State_ID' ));
    if($_SESSION['ADMIN']['State_ID']  != 0) {
        $State_ID = $_SESSION['ADMIN']['State_ID'];
	}
	
	$District_ID   = intval($this->input->get('District_ID'));
	if($_SESSION['ADMIN']['District_ID'] != 0 ) {
		$District_ID = $_SESSION['ADMIN']['District_ID'];
	}
	$data['State_ID'] = $State_ID;
    $data['District_ID'] = $District_ID;
	 
    loadLayout('admin/gallery/add_gallery', $data, 'admin');   	
 
}



private function validate() {
  


        if (empty($_FILES['image']['name']))
        {
            $this->form_validation->set_rules('userfile', 'Document', 'required');
        }
        $publish='';$approve='';
        

          $checkval=$this->input->post('check');
	        if($checkval)
	        {
	        	$chk=$checkval;
	        }
	        else
	        {
	        	$chk=0;
	        }
        if(has_admin_permission('PUBLISH_PHOTO_GALLERY')){
          $publish = $this->input->post('publish');
          if($publish){
            $publish =1;
          }else{
            $publish =0;
          }
        }
        if(has_admin_permission('STATE_APPROVE_PHOTO_GALLERY')) {
          $approve = $this->input->post('approve');
          if($approve){
            $approve =1;
          }else{
            $approve =0;
          }
        }

		$State_ID =  intval($this->input->post('State_ID' ));
		if($_SESSION['ADMIN']['State_ID']  != 0) {
			$State_ID = $_SESSION['ADMIN']['State_ID'];
		}
		
		$District_ID   = intval($this->input->post('District_ID'));
		if($_SESSION['ADMIN']['District_ID'] != 0 ) {
			$District_ID = $_SESSION['ADMIN']['District_ID'];
		}

        
            $requestdata = array(
                "title" 			=> $this->input->post('title'),
                "State_ID" 			=> $State_ID,
                "District_ID" 		=> $District_ID,
                "description" 		=>   $this->input->post('description'),
				        "status" 			=> $chk,
                "publish"      => $publish,
                "approve"      => $approve,
            );


            if ($_FILES['image']['name'] != '') {
                if (!is_dir('download/gallery/')) {
                    mkdir('./download/gallery/', 0777, TRUE);
                }
                $config['upload_path'] = './download/gallery/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
                $config['max_size'] = '10240';
                $config['max_width'] = '0';
                $config['max_height'] = '0';
                $config['remove_spaces'] = true;
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('image')) {
                    
                    $error_msg = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error_msg);
                    return false;
                } else {
                    if ($this->input->post('id') != '') {
                        $this->common->delete("gallery", $this->input->post('id'), "image");
                    }
                    $upload_ques = $this->upload->data();
					           $this->resizeSmallImage($upload_ques['file_name']);
                    $requestdata['image'] = $upload_ques['file_name'];
                }
            }
           // print_r($requestdata);die;
            return $requestdata;
        
    }


public function GalleryInsert() {

        $requestdata = $this->validate();
        
        if (!empty($requestdata)) {
            if ($this->Gallery_model->insertdata("gallery", $requestdata)) {
                //echo " a";
                $message=array("1",);
				$this->session->set_flashdata('success', "Photo Successfully Added");
            } else {
				 $this->session->set_flashdata('error', $this->db->_error_message());				 
            }
        }
        redirect(base_url("admin/gallery/add_gallery"));
    }


 public function editGallery() {
 
	    /// check user permission
		if(!has_admin_permission_layout('EDIT_PHOTO_GALLERY')) { return; }

        $data['page_title'] = 'Update Image';
		
        $queryWhere[] = "id = ". intval($this->input->get('id'));
		
	    if($_SESSION['ADMIN']['State_ID']  != 0) {
			 $queryWhere[] = " gallery.`State_ID`= ". intval($_SESSION['ADMIN']['State_ID']) ;
		}
		
		if($_SESSION['ADMIN']['District_ID'] != 0 ) {
			$queryWhere[] = "  gallery.District_ID= ".intval($_SESSION['ADMIN']['District_ID']);
		}
		
        $data['row']  = $this->Gallery_model->getGalleryItem($queryWhere);
		if(!$data['row']) {
		  $this->session->set_flashdata('error', "Record not found");
		  redirect(base_url('admin/gallery'));
		}
        $data['State_ID'] = $data['row']['State_ID']; 
		    $data['District_ID'] = $data['row']['District_ID'];  
	   loadLayout('admin/gallery/add_gallery', $data, 'admin'); 
    }

    // Update Gallery
    public function GalleryUpdate() {
        $requestdata = $this->validate();
		
        if ($requestdata) {
		
            if ($this->Gallery_model->updatedata("gallery", $requestdata, array("id" => $this->input->post('id')))) {
                $this->session->set_flashdata('success', "Record Update Successfully");
            } else {                
				$this->session->set_flashdata('error', "Record Update Successfully");
            }
        }
        redirect(base_url('admin/gallery/EditGallery') . '?action=edit&id=' . $this->input->post('id'));
    }

    public function deleteGallery() {
      //echo "in";die;
	     $path = "download/gallery/";
        if ($this->input->get('id')) {

		
			$queryWhere = array("id" => $this->input->get('id'));
			
			if($_SESSION['ADMIN']['State_ID']  != 0) {
				 $queryWhere[] = " gallery.`State_ID`= ". intval($_SESSION['ADMIN']['State_ID']) ;
			}
			
			if($_SESSION['ADMIN']['District_ID'] != 0 ) {
				$queryWhere[] = "  gallery.District_ID= ".intval($_SESSION['ADMIN']['District_ID']);
			}
			
         
            if ( $this->common->deleteImage("gallery", $this->input->get('id'), "image",$path)){
              $this->Gallery_model->deletedata("gallery", $queryWhere);
			     
				 $this->session->set_flashdata('success', "Record Deleted Successfully");			 
 				
            }else{
				$this->session->set_flashdata('error', "Something Wrong to Update data");
            }
        }
        redirect(base_url('admin/gallery'), 'location');
    }


 public function resizeSmallImage($filename){
		
     $config['image_library'] = 'gd2';
	 if (!is_dir('download/small_thumbnail/')) {
        mkdir('./download/small_thumbnail/', 0777, TRUE);
      }
      $source_path 		= './download/gallery/' . $filename;    
      $small_file_path  = './download/small_thumbnail/'; 
      $this->load->library('image_lib', $config);

      $config_img = array(
          'image_library'  => 'gd2',
          'source_image'   => $source_path,
          'new_image' 	   => $small_file_path,
          'maintain_ratio' => TRUE,
          'create_thumb'   => TRUE,
          'thumb_marker'   => '',
          'width' 		   => 250,
          'height'         => 250
      );
		//showData($config_img);die;
      $this->image_lib->initialize($config_img);
      
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
      $this->image_lib->clear();
   }


}
