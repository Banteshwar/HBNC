<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Traning extends CI_Controller {
	
	
    public function traningModule() {
        $data['page_title'] = "HBYC Traning";
        $this->load->view('common/front_header');
        $this->load->view('home/traning-module', $data);
        $this->load->view('common/front_footer');
    }
    
    public function traningASHA() {
        $data['page_title'] = "HBYC Traning";
        $this->load->view('common/front_header');
        $this->load->view('home/traningASHA', $data);
        $this->load->view('common/front_footer');
    }


    
	
	
	
	
}