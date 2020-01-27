<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class State_district_block_model extends CI_Model{

    public function getStates(){
        	
        $this->db->select('*');
        $this->db->from('m_state');
        $this->db->order_by("State_Name", "asc");
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result_array();

        }
        else
        {
            return false;
        }
    }
	/* get detail of state based on State_ID */
    public function getState($State_ID){
        
        $this->db->select('*');
        $this->db->from('m_state');       
        $this->db->where('State_ID',$State_ID);      
        $query = $this->db->get();            
        if($query->num_rows()>0)
        {
            return  $query->row_array();
        }
        else
        {
            return array();
        }
    }
	public function getStateName($State_ID){
		$state_array  = $this->getState($State_ID);
		if(!empty($state_array))
        {           
			return $state_array['State_Name'];
        }
		return '';
	}
	
	/* check if State_ID is correct */
    public function is_state_exists($State_ID) {
	
        $state_array  = $this->getState($State_ID);       
        if(!empty($state_array))
        {           
			return true;
        }
        else
        {
            return false;
        }
    }
	
  /* gel list of districts */
    public function getDistricts($State_ID){
    	
        $this->db->select('*');
        $this->db->from('m_district');
        $this->db->where('State_ID',$State_ID);  
        $this->db->order_by("District_Name", "ASC");
        $query = $this->db->get();
            
        //echo $this->db->last_query(); die;
        if($query->num_rows()>0)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }

    public function getDistrict($District_ID){
        
        $this->db->select('*');
        $this->db->from('m_district');       
        $this->db->where('District_ID',$District_ID);      
      
        $query = $this->db->get();
            
        //echo $this->db->last_query(); die;
        if($query->num_rows()>0)
        {
            return  $query->row_array();
        }
        else
        {
            return array();
        }
    }
	public function getDistrictName($District_ID){
		$district_array  = $this->getDistrict($District_ID);
		if(!empty($district_array))
        {           
			return $district_array['District_Name'];
        }
		return '';
	}
	
    public function is_district_exists($District_ID){
        
        $district_array  = $this->getDistrict($District_ID);       
        if(!empty($district_array))
        {           
			return true;
        }
        else
        {
            return false;
        }
    }

    public function getBlocks($District_ID){
        $this->db->select('*');
        $this->db->from('m_block');
        $this->db->order_by("Block_Name", "asc");
        $this->db->where("District_ID",$District_ID);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result_array();
        }
        else
        {
            return array();
        }
    }
	
	
	public function getBlock($Block_ID){
        
        $this->db->select('*');
        $this->db->from('m_block');       
        $this->db->where('Block_ID',$Block_ID);      
        $query = $this->db->get();            
        if($query->num_rows()>0)
        {
            return  $query->row_array();
        }
        else
        {
            return array();
        }
    }

	public function getBlockName($Block_ID){
		$block_array  = $this->getBlock($Block_ID);
		if(!empty($block_array))
        {           
			return $block_array['Block_Name'];
        }
		return '';
	}
	
	
    public function is_block_exists($Block_ID){
        
        $block_array  = $this->getBlock($Block_ID);       
        if(!empty($block_array))
        {           
			return true;
        }
        else
        {
            return false;
        }
    }


}