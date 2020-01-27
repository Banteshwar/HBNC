<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Documents extends CI_Controller {
	
	
    public function DocHBNC() {
        $data['page_title'] = "HBNC Program";
        $this->load->view('common/front_header');
        $this->load->view('home/HBNCprogram', $data);
        $this->load->view('common/front_footer');
    }

    public function DocHBYC() {
        $data['page_title'] = "HBYC Program";
        $this->load->view('common/front_header');
        $this->load->view('home/HBYCprogram', $data);
        $this->load->view('common/front_footer');
    }

    
	
	
	
	
}