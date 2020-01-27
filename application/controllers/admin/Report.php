<?php  

class Report extends CI_Controller 
{   

    function __construct()
    {
        parent::__construct();
        $this->admin_info      =  $this->common->__check_session();
        
        $this->load->model('Report_model');
         $this->load->model('newbornweek_model');         
        $this->load->helper('form');
       	$this->load->library('session');
    }
    
    public function index()
    {

    }
	
	public function newbornweek()
    {
		//if(!has_admin_permission_layout('REPORT_TARGET')) { return; }
		       
        $State_ID = intval($this->input->get('State_ID'));
        if($_SESSION['ADMIN']['State_ID']  != 0) {
			$State_ID = $_SESSION['ADMIN']['State_ID'];
		}
		$District_ID = intval($this->input->get('District_ID'));
		if($_SESSION['ADMIN']['District_ID'] != 0 ) {
			$District_ID = $_SESSION['ADMIN']['District_ID'];
		}
		  
        $data['State_ID'] = $State_ID;
        $data['District_ID'] = $District_ID;
		  
		$newbornweek_eventdate_id =  intval(trim($this->input->get('newbornweek_eventdate_id' ))); 
        $data['newbornweek_eventdate_id']= $newbornweek_eventdate_id;  

        $data['newbornweek_eventdates'] = $this->newbornweek_model->get_newbornweek_eventdates();
      

		if($State_ID !=0 ){

			$data['data_rows']=$this->Report_model->getReportNational($newbornweek_eventdate_id,$State_ID);
			if($newbornweek_eventdate_id > 0 ) {
				loadLayout('admin/report/state', $data, 'admin');
			}else {
				loadLayout('admin/report/state_all_dates', $data, 'admin');
			}
		}else {
		
			$data['data_rows'] = $this->Report_model->getReportNational($newbornweek_eventdate_id);
			loadLayout('admin/report/national', $data, 'admin');		
		}
		
    }
	
	
	
   
    
}
