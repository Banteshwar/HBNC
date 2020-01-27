<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('Event_model');  
        $this->load->model('report_model');
        
    }
	
	public function index()
	{
	
            
	$data['page_title']	=	"Home Page";
        $FYear = $this->input->get('FYear', TRUE);
        if( $FYear == '') {
             $FYear ='2018-19';
        }
        $data['report_total'] = $this->report_model->getReportTotal($FYear);        
             
        $data['ASHAs_in_place'] = $this->report_model->getReportList_Order_ASHAs($FYear);
        $data['ASHA_trained_percentage'] = $this->report_model->getReportList_Order_ASHA_trained_percentage($FYear);
        $data['newborns_visited_percentage'] = $this->report_model->getReportList_Order_newborns_visited_percentage($FYear);
        $data['new_borns_referred_percentage'] = $this->report_model->getReportList_Order_new_borns_referred_percentage($FYear);
        
       
        $data['event'] = $this->Event_model->geteventListforfront();
        
        
        $this->load->view('common/front_header');
        $this->load->view('home/index',$data);
        $this->load->view('common/front_footer');
        

	}
	
	
	/* public function event()
	{
	$data['page_title']	=	"Event";
        $this->load->view('common/front_header');
        $this->load->view('home/event',$data);
        $this->load->view('common/front_footer');

	} */
	
	public function sitemap()
	{
	$data['page_title']	=	"Sitemap";
        $this->load->view('common/front_header');
        $this->load->view('home/sitemap',$data);
        $this->load->view('common/front_footer');

	}
	
	
	
	
	public function page()
	{
		$this->load->view('page/page');
	}

	
	
}
