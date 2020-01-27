<?php  

class Newbornweek extends CI_Controller 
{   
    function __construct()
    {
        parent::__construct();
        $this->admin_info      =  $this->common->__check_session();
        $this->load->model('State_district_block_model');   
        $this->load->model('newbornweek_model');  
        $this->load->helper('form');
    }

     

    public function index()
    {

      // check user permission
      if(!has_admin_permission_layout('EDIT_NEW_BORN')) { return; }

      $data['page_title'] = 'New Born Week';
          
      $State_ID =  intval(trim($this->input->get('State_ID' )));
      if($_SESSION['ADMIN']['State_ID']  != 0) {
        $State_ID = $_SESSION['ADMIN']['State_ID'];
      }
          
      $newbornweek_eventdate_id =  intval(trim($this->input->get('newbornweek_eventdate_id' ))); 
      
      $data['newbornweek_eventdates'] = $this->newbornweek_model->get_newbornweek_eventdates();
   	  
       $data['district_list'] = array();
	   
       if($State_ID  != 0  && $newbornweek_eventdate_id > 0 ) {//for state user
             $data['district_list'] = $this->newbornweek_model->getDistricts_withdata($newbornweek_eventdate_id, $State_ID); 
        } 
        // this for listing in table
       
      
      $data['newbornweek_eventdate_id']= $newbornweek_eventdate_id;  
      $data['State_ID']= $State_ID;
      loadLayout('admin/newbornweek', $data, 'admin');
             
     
        
    }
    
    
    
     public function newbornweek_save() //for save,update and freeze
    { 
          // check user permission
       if(!has_admin_permission_layout('EDIT_NEW_BORN')) { return; }
        
        $this->load->library('session');      
        
       $newbornweek_eventdate_id =  intval(trim($this->input->post('newbornweek_eventdate_id' ))); 
    
		  $this->db->trans_start();



        foreach($_POST['distId'] as $dist_id){
          $K=array();
          $k=array(
                'District_ID'=>$dist_id,               
                'advocacy_meetings'=>$this->security->xss_clean($_POST['advocacy_meetings_'.$dist_id]),
                'social_media'=>$this->security->xss_clean($_POST['social_media_'.$dist_id]),
                'mass_media'=>$this->security->xss_clean($_POST['mass_media_'.$dist_id]),
                'iec_display'=>$this->security->xss_clean($_POST['iec_display_'.$dist_id]),                
                'remark'=>$this->security->xss_clean($_POST['remark_'.$dist_id])
              );
          if($this->security->xss_clean($_POST['newborns_screened_'.$dist_id]) == ''){
              $k['newborns_screened'] = NULL;
          }else {
              $k['newborns_screened'] =  intval(trim($this->security->xss_clean($_POST['newborns_screened_'.$dist_id])));
          }
          if($this->security->xss_clean($_POST['mothers_counseled_'.$dist_id]) == ''){
              $k['mothers_counseled'] = NULL;
          }else {
              $k['mothers_counseled'] =  intval(trim($this->security->xss_clean($_POST['mothers_counseled_'.$dist_id])));
          }
          if($this->security->xss_clean($_POST['newborns_visited_ANM_'.$dist_id]) == ''){
              $k['newborns_visited_ANM'] = NULL;
          }else {
              $k['newborns_visited_ANM'] =  intval(trim($this->security->xss_clean($_POST['newborns_visited_ANM_'.$dist_id])));
          }
          if($this->security->xss_clean($_POST['newborns_visited_ASHA_'.$dist_id]) == ''){
              $k['newborns_visited_ASHA'] = NULL;
          }else {
              $k['newborns_visited_ASHA'] =  intval(trim($this->security->xss_clean($_POST['newborns_visited_ASHA_'.$dist_id])));
          }
                  
          // if user click on final submit set the freze button on.
          if(isset($_POST['final_submit'])){
               $k['freeze'] = '1';
          }

          $query= $this->db->get_where('newbornweek',array('District_ID'=>$k['District_ID'],'newbornweek_eventdate_id' => $newbornweek_eventdate_id));
		  
          $row =$query->row_array();
		            
          if(isset($row['freeze']) && $row['freeze'] == 1) {
            continue;  // if row is already freezed,  user cannot update data
          }
       
          if($row)
          {
            
            $this->db->where('District_ID',$k['District_ID']);
            $this->db->where('newbornweek_eventdate_id', $newbornweek_eventdate_id);
            $success_flag = $this->db->update('newbornweek', $k);
          }
          else
          {


            $k['newbornweek_eventdate_id'] = $newbornweek_eventdate_id;
            $success_flag =  $this->db->insert('newbornweek',$k);
          }
        }
		$this->db->trans_complete();

		
		if ($this->db->trans_status() === FALSE)
		{	
			$this->session->set_flashdata('error', 'An error occured while saving data!');
		}else {
		  
			$this->session->set_flashdata('success', 'Data Saved Successfully!');			
		}
           
        redirect( $_SERVER['HTTP_REFERER']);    

    }
  }

    
