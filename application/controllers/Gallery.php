<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends MY_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->table = "gallery";


    }

    public function index(){
		$data['page_title'] =   "Photo Gallery";
     
       
        $State_ID =  intval(trim($this->input->get('State_ID')));       
        $District_ID   = intval(trim($this->input->get('District_ID')));
       
        $queryWhere[]= " status = 1 and publish=1 and approve=1";
        if ($State_ID != 0) 
        {   
			$queryWhere[] = " State_ID= ". $State_ID;
        }  
        if ($District_ID != 0) {              
            $queryWhere[] = " District_ID= ". $District_ID;
        } 
		
        if (count($queryWhere) == 0) 
        {
                $queryWhere[] = 1;
        }  

        $filterArray['WHERE'] = $queryWhere;

        $data['State_ID'] = $State_ID;
        $data['District_ID'] = $District_ID ;
        $data['result']=$this->Gallery_model->getPhotos($filterArray);
		loadLayout('front_gallery', $data);
		
		
    }

}
