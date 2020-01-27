<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Event_model');	
        
    }

     public function index() {
        $data['page_title'] =   "Events";
		
        $filterArray = array();
        $data['rows']  = $this->Event_model->geteventListforfront();
         
		loadLayout('events', $data);

    }

    
   
    

    
}
