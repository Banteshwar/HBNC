<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class AboutUs extends CI_Controller {
	
	
  public function aboutHBNC() {
        $data['page_title'] = "About HBNC";
        $this->load->view('common/front_header');
        $this->load->view('home/about-HBNC', $data);
        $this->load->view('common/front_footer');
    }

    public function aboutHBYC() {
        $data['page_title'] = "About HBNC";
        $this->load->view('common/front_header');
        $this->load->view('home/about-HBYC', $data);
        $this->load->view('common/front_footer');
    }

    
	
	
	
	
}