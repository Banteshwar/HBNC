<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class IEC extends CI_Controller {
	
	

	public function iecVideo(){
        $data['page_title']	=	"Saturation Report";
        $this->load->view('common/front_header');
        $this->load->view('home/iecVideo',$data);
        $this->load->view('common/front_footer');
    }
    
    public function iecDocumentary(){
        $data['page_title']	=	"Saturation Report";
        $this->load->view('common/front_header');
        $this->load->view('home/iecDocumentary',$data);
        $this->load->view('common/front_footer');
    }
    
     public function iecPrint(){
        $data['page_title']	=	"Saturation Report";
        $this->load->view('common/front_header');
        $this->load->view('home/iecPrint',$data);
        $this->load->view('common/front_footer');
    }

    
	
	
	
	
}