<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Event_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

     public function geteventList($filterArray){
		
		$queryWhere = $filterArray['WHERE'];
		
		$query    	= "select event.*,
		m_state.State_ID,m_state.State_Name,m_district.District_ID,m_district.District_Name from event

		left join m_state on  m_state.State_ID = event.State_ID
		left join m_district on  m_district.District_ID = event.District_ID 
		" . implode(' AND ', $queryWhere) . " ";

		$query = $this->db->query($query); 

		return  $query->result_array();

	}


	public function geteventListforfront(){
		
		$query    	= "select * from event where status=1 and approve=1 and publish=1";

		$query = $this->db->query($query); 

		return  $query->result_array();

	}
	// get info for already edit
	public function insertdata($tbl_name,$value){
        if($this->db->insert($tbl_name, $value)){
            return true;
        }else{
            return false;
        }
    }
	
	//Fetch
	public function fetchwhere($tbl_name,$andwherecondition="",$orwherecondition="",$type="",$order_by=""){
        $this->db->select('*');
        $this->db->from($tbl_name);
        if($andwherecondition!=''){
            foreach($andwherecondition as $key=>$value){
                $this->db->where($key, $value);
            }
        }
        if($orwherecondition!=''){
            foreach($orwherecondition as $key=>$value){
                $this->db->or_where($key, $value);
            }
        }
        $query = $this->db->get();
        if($query->num_rows()>0){
            if($type!=''){
                return $query->row_array();
            }else{
                return $query->result_array();
            }
        }else{
            return false;
        }
		 
    }
     public function getEventItem($filterArray){
		
		 $query    	= "select *  from event
		WHERE  " . implode(' AND ', $filterArray) . " ";
        //echo $query;die;
		$query = $this->db->query($query); 

		return  $query->row_array();

	}
	
	//Update
	 public function updatedata($tbl_name,$values,$condition=""){
        if($condition!=''){
            foreach($condition as $key=>$value){
                $this->db->where($key, $value);
            }
        }
        $this->db->update($tbl_name ,$values);
        return true;
    }
	
	 //Delete
    public function deletedata($tbl_name,$condition=""){
        if($condition!=''){
            foreach($condition as $key=>$value){
                $this->db->where($key, $value);
            }
        }
        $this->db->delete($tbl_name);
        return true;
    }
	
	//Status Active
	public function active($id){
		$this->db->set('status','1');
		$this->db->where('id',$id);
		
		if($this->db->update("event")){	
			return true;
		}else{
		   return true;
		}
    }

	//Status InActive
	public function inactive($id){
		$this->db->set('status','0');
		$this->db->set('publish','0');
		$this->db->where('id',$id);
		
		if($this->db->update("event")){	
			return true;
		}else{
		   return true;
		}
    }	
	
	//Status Publish
	public function publish($id){
		$this->db->set('publish','1');
		$this->db->where('id',$id);
		
		if($this->db->update("event")){	
			return true;
		}else{
		   return true;
		}
    }

	//Status Un Publish
	public function unpublish($id){
		$this->db->set('publish','0');
		$this->db->where('id',$id);
		
		if($this->db->update("gallery")){	
			return true;
		}else{
		   return true;
		}
    }
	
	//Check Status
	public function checkStatus($id){
		 
		$this->db->select('*');
		$this->db->from("gallery");
		$this->db->where('id',$id);
		$query = $this->db->get();
		
		if($query->num_rows()>0){
			return $query->row_array();
		} else{
			return false;
		}
    }
	
	public function getNINDetails($nin) {
        $query = $this->db->query("select
                          hf.NIN_2_HFI,
                          hf.HFI_Name,
                          hf.State_ID,
                          hf.District_ID,
                          hf.HFI_Type,
                          hf.confirmed_flag,
                          hf.verified_flag,
                          hf.house_number,
                          hf.street,
                          hf.landmark,
                          hf.locality,
                          hf.pincode,
                          hf.landline_number,
                          hf.in_charge_mobile,
                          hf.email,
                          hf.latitude,
                          hf.longitude,
                          hf.altitude,
                          hf.region_indicator,
                          hf.operational_Status,
                          hf.ownership_authority,
                          hf.Created_On,
                          pcm.PHC_CHC_Type,
                          s.State_Name,
                          d.District_Name,
                          t.Taluka_Name,
                          da.aspirational,
                          b.Block_Name
                          from " . TB_HMIS_HEALTH_FACILITIES . " hf
                          Left join " . TB_PHC_CSC_MSTER . " pcm on hf.HFI_Type=pcm.PHC_CHC_ID
                          Left join " . TB_M_STATES . " s on hf.State_ID=s.State_ID
                          Left join " . TB_M_DISTRICTS . " d on hf.District_ID=d.District_ID
                          Left join " . TB_M_ASPIRATIONAL_DISTRIC . " da on d.District_ID=da.District_ID
                          Left join " . TB_M_TALUKA . " t on hf.Taluka_ID=t.Taluka_ID
                          Left join " . TB_M_HEALTHBLOCKS . " b on hf.HealthBlock_ID=b.Block_ID  WHERE hf.NIN_2_HFI=" . $nin);

       $record  =  $query->row_array();
	   return $record;
    }
	
	//Fetch Video Gallery For Front
	public function record_count_video(){
        $sql    =   $this->db->query("select * from `gallery` where status='1' and publish='1' and type='2'");
        return $sql->num_rows();
    }
    public function fetch_data_video($limit, $start,$stateID,$districtID){
        $query  =   "select * from `gallery` where 1  ";
        
		 if($stateID!=''){
           $query  .= " and State_ID='".$stateID."'";
         
		 }if($districtID!='' &&  $districtID!='0' ){
           $query  .= " and District_ID='".$districtID."'";
         }
		
		$query   .= " and status='1' and publish='1' and type='2' order by id desc";
		if($start!==0){
            $query  .=   " limit $start , $limit";
        }else{
            $query  .=   " limit $limit";
        }
		
        $sql    =   $this->db->query($query);
        return $sql->result_array();
    }
	
	//Fetch Photo Gallery For Front
	  public function record_count_photo(){
      $sql    =   $this->db->query("select * from `gallery` where status='1' and publish='1' and type='1'");
      return $sql->num_rows();
    }


	
	public function fetch_data_photo($stateID,$districtID){
		
      $query  =   "select * from `gallery` where 1  ";
        
		  if($stateID!='' && $stateID!='0'){
        $query  .= " and State_ID='".$stateID."' ";
         
		  }
      if($districtID!='' &&  $districtID!='0' ){
        $query  .= " and District_ID='".$districtID."' ";
      }

    	 $query_total=$query." and status='1'" ;
	 
	    $limitquery=limit_frontend('40'); 
		
		
		
		$query   .= " and status='1' order by id desc $limitquery"; 
		  
		   $query = $this->db->query($query);
        
	 
       $result_array_row = $query->result_array();
	   
	   $query_total=$this->db->query($query_total);
	   
	  
        $fondRow = $query_total->num_rows(); 
	
        //$fondRow = $query->num_rows();
        $result_array = array('result' => $result_array_row, 'total' => $fondRow);
		//echo $this->db->last_query();die;
        return $result_array;
    }


	public function fetchdataexceptid($NinID,$id){
		$where  =  "NIN_2_HFI='".$NinID."' and id!='".$id."' and type=1"; 
		$this->db->select('*');
		$this->db->from("gallery");
		
		$this->db->where($where);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		} else{
			return false;
		}
    }
	 
       
  

}
