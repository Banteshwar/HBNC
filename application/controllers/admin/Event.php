
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->admin_info      =  $this->common->__check_session();
     $this->load->model('State_district_block_model');
    $this->load->model('User_model');
    $this->load->model('Event_model');	

}


public function index(){

	// check user permission
	if(!has_admin_permission_layout('VIEW_EVENTS')) { return; }
	$data['page_title'] = 'View Event';
    $queryWhere    = array();
   
    $State_ID =  $this->input->get('State_ID' );
    if($_SESSION['ADMIN']['State_ID']  != 0) {
        $State_ID = intval(trim($_SESSION['ADMIN']['State_ID']));
	}
	
	$District_ID   = intval(trim($this->input->get('District_ID')));
	if($_SESSION['ADMIN']['District_ID'] != 0 ) {
		$District_ID = $_SESSION['ADMIN']['District_ID'];
	}

	if ($State_ID != 0) {
        $queryWhere[] = "where event.`State_ID`= $State_ID ";
    }

	if ($District_ID != 0) {
		$queryWhere[] = "  event.District_ID= $District_ID";
	}	

	$filterArray['WHERE'] = $queryWhere;


	$data['result_list']  = $this->Event_model->geteventList($filterArray);

	$data['State_ID']= $State_ID;
	$data['District_ID'] = $District_ID;
	
	loadLayout('admin/event/view_list', $data, 'admin'); 
}

public function add_event(){
    // check user permission
  if(!has_admin_permission_layout('ADD_EVENT')) { return; }
  
  $data['page_title'] = 'Add Event';
  
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
   
    loadLayout('admin/event/add_event', $data, 'admin');    
 
}

private function validate() {
  //echo "<pre>";print_r($_POST);die;

         $this->form_validation->set_rules('title', 'Title', 'trim|required');
    
        if ($this->form_validation->run() == TRUE) {

            $checkval=$this->input->post('check');
          if($checkval)
          {
            $chk=$checkval;
          }
          else
          {
            $chk=0;
          }
          $publish='';$approve='';
        if(has_admin_permission('PUBLISH_EVENT')) {
          $publish = $this->input->post('publish');
          if($publish){
            $publish =1;
          }else{
            $publish =0;
          }
        }
        if(has_admin_permission('STATE_APPROVE_EVENT')) {
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
                "title"       => $this->input->post('title'),
                "State_ID"      => $State_ID,
                "District_ID"     => $District_ID,
                "description"     => $this->input->post('description'),
                "event_date"    => $this->input->post('event_date'),
                "caption"       => $this->input->post('caption'),
                "status"      => $chk,
                "publish"      => $publish,
                "approve"      => $approve,
            );

//print_r($_FILES);
            if ($_FILES['image']['name'] != '') {
                if (!is_dir('download/event/')) {
                    mkdir('./download/event/', 0777, TRUE);
                }
                $config['upload_path'] = './download/event/';
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
                    $this->session->set_flashdata('error', $error);
                    return false;
                } else {
                    if ($this->input->post('id') != '') {
                        $this->common->delete("event", $this->input->post('id'), "image");
                    }
                    $upload_ques = $this->upload->data();
                     $this->resizeSmallImage($upload_ques['file_name']);
                    $requestdata['image'] = $upload_ques['file_name'];
                }
            }


            return $requestdata;
        } else {
            $error_msg = validation_errors();
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('error', $error_msg);
            return false;
        }
    }


public function eventInsert() {
       $requestdata = $this->validate();

        if (!empty($requestdata)) {
            if ($this->Event_model->insertdata("event", $requestdata)) {
               
                $message=array("1","Photo Successfully Added");
            } else {
                $message=array("0",$this->db->_error_message());
            }
             $this->session->set_flashdata('message', $message);
        }
        redirect(base_url("admin/event"));
    }

 public function editevent() {
  if(!has_admin_permission_layout('EDIT_EVENTS')) { return; }
       $data['page_title'] = 'Update Event';
    
        $queryWhere[] = "id = ". intval($this->input->get('id'));
    
      if($_SESSION['ADMIN']['State_ID']  != 0) {
       $queryWhere[] = " event.`State_ID`= ". intval($_SESSION['ADMIN']['State_ID']) ;
    }
    
    if($_SESSION['ADMIN']['District_ID'] != 0 ) {
      $queryWhere[] = "  event.District_ID= ".intval($_SESSION['ADMIN']['District_ID']);
    }
    
        $data['row']  = $this->Event_model->getEventItem($queryWhere);
    if(!$data['row']) {
      $this->session->set_flashdata('error', "Record not found");
      redirect(base_url('admin/event'));
    }
        $data['State_ID'] = $data['row']['State_ID']; 
        $data['District_ID'] = $data['row']['District_ID'];  
     loadLayout('admin/event/add_event', $data, 'admin'); 
    
    }

    // Update Gallery
    public function EventUpdate() {
        $requestdata = $this->validate();
    
        if ($requestdata) {
          //print_r($requestdata);die;
    
            if ($this->Event_model->updatedata("event", $requestdata, array("id" => $this->input->post('id')))) {
                $this->session->set_flashdata('success', "Record Update Successfully");
            } else {                
        $this->session->set_flashdata('error', "Record Update Successfully");
            }
        }
        redirect(base_url('admin/event/editevent') . '?action=edit&id=' . $this->input->post('id'));
    }
    

    public function deleteevent() {
      $path = "download/event/";
      $raw = $this->input->get_post('id');

        if ($this->input->get_post('id')) {
              if ($raw['image']!=''){
                $this->common->deleteImage("event", $this->input->get_post('id'), "image",$path);
              }
                 $this->Event_model->deletedata("event", array("id" => $this->input->get_post('id')));
                 $this->session->set_flashdata('success', "Record Deleted Successfully");  
            }else{
              $this->session->set_flashdata('error', "Something Wrong to Update data");
            }
        
        redirect(base_url('admin/event'), 'location');
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
