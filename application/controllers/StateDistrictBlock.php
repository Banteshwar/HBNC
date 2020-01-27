<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class StateDistrictBlock extends CI_Controller {
	
	function __construct()
    {
        parent::__construct();
        $this->load->model('State_district_block_model');	
    }
	
    public function index(){
	  return;
    }
	
    public function statelist_options() 
	{
      $result = $this->State_district_block_model->getStates();    
      $options ='';
      foreach( $result as $row){
		 $options .='<option value="' . $row['State_ID'] . '">' . $row['State_Name']. '</option>';
      }
      echo $options;
    }
	

	public function districtlist_options($State_ID) 
	{
	
	  $this->load->model('State_district_block_model');	
      $result = $this->State_district_block_model->getDistricts($State_ID);
	  
      $options ='';
      foreach( $result as $row){
		 $options .='<option value="' . $row['District_ID'] . '">' . $row['District_Name']. '</option>';
      }
       echo $options;
    }
	
	public function blocklist_options($District_ID) 
	{
      $result = $this->State_district_block_model->getBlocks($District_ID);
      $options ='';
      foreach( $result as $row){
		 $options .='<option value="' . $row['Block_ID'] . '">' . $row['Block_Name']. '</option>';
      }
       echo $options;
    }	
	
}