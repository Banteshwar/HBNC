<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ContactUs extends CI_Controller {
	
	
    public function index(){
        $data['page_title']	=	"Countact Us";
        $this->load->view('common/front_header');
        $this->load->view('home/countactus',$data);
        $this->load->view('common/front_footer');
    }

    
	
	
	
	
}