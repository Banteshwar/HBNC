<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Report extends CI_Controller {
	
    public function __construct() {
        parent::__construct();
        $this->load->model('report_model');
    }
	
    public function index(){
        $data['page_title'] = "Report";
        $FYear = $this->input->get('FYear', TRUE);
        if( $FYear == '') {
             $FYear ='2018-19';
        }
        $data['FYear'] = $FYear;
        $data['report_list'] = $this->report_model->getReportList( $FYear);
        $data['report_total'] = $this->report_model->getReportTotal( $FYear);
        $this->load->view('common/front_header');
        $this->load->view('home/report',$data);
        $this->load->view('common/front_footer');
    }
	
	
    
	
	
	
	
}