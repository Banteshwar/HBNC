<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Report_model extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getReportList($FYear, $sortkey ='id',$order = 'asc', $limit = false)
    {
        $this->db->select('report.*,
                  ROUND((ASHAs_trained/ASHAs)*100) as ASHA_trained_percentage,
                  ROUND((newborns_visited/Reported_live_birth)*100) as newborns_visited_percentage,
                  ROUND((new_borns_referred/newborns_visited)*100,2) as new_borns_referred_percentage,
                 ');      
        $this->db->from('report');
        $this->db->where('FYear',$FYear);
        if($sortkey =='new_borns_referred_percentage') {
           $this->db->having('new_borns_referred_percentage >= ', 0);         
        }
        $this->db->order_by($sortkey, $order);
      
        if($limit) {
            $this->db->limit($limit);
        }
        $query = $this->db->get(); 
        return  $query->result_array();

    }
    
    public function getReportList_Order_ASHAs($FYear){
       return $this->getReportList($FYear,'ASHAs', 'DESC');
    }
    
    public function getReportList_Order_ASHA_trained_percentage($FYear){
       return $this->getReportList($FYear,'ASHA_trained_percentage', 'DESC');
    }
    public function getReportList_Order_newborns_visited_percentage($FYear){
       return $this->getReportList($FYear,'newborns_visited_percentage', 'DESC');
    }
    public function getReportList_Order_new_borns_referred_percentage($FYear){
       return $this->getReportList($FYear,'new_borns_referred_percentage', 'DESC');
    }
    
     public function getReportTotal($FYear)
    {
        $this->db->select('
                  SUM(ASHAs) as ASHAs_total, 
                  SUM(ASHAs_trained) as ASHAs_trained_total, 
                  SUM(Reported_live_birth) as Reported_live_birth_total,
                  SUM(newborns_visited) as newborns_visited_total,
                  SUM(new_borns_referred) as new_borns_referred_total ');      
        $this->db->from('report');
        $this->db->where('FYear',$FYear);
        $this->db->order_by("id", "asc");
        $query = $this->db->get(); 
        return  $query->row_array();

    }

    public function getReportNational($newbornweek_eventdate_id, $State_ID = 0 ){
    
      $select_items = '';
      $where = '';
      $groupby = '';
	  
	  
		if($State_ID > 0  && $newbornweek_eventdate_id > 0 ) {
				$this->db->select('d.State_ID, 
				s.State_Name,
				d.District_ID,
				d.District_Name,
				nb.advocacy_meetings,
				nb.social_media,
				nb.mass_media,
				nb.iec_display,
				
				nb.newbornweek_eventdate_id,
				nb.newborns_screened,
				nb.newborns_visited_ASHA,
				nb.newborns_visited_ANM,
				nb.mothers_counseled,
				nb.remark,
				nb.status,
				nb.freeze');
				
				
				$this->db->from('m_district d'); 
				$this->db->join('m_state as s','s.State_ID =  d.State_ID ','left'); 			
				$this->db->join('newbornweek as nb','d.District_ID =  nb.District_ID  AND nb.newbornweek_eventdate_id = ' . $newbornweek_eventdate_id, 'left');	
				
				$this->db->group_by("District_ID"); 
				$this->db->where('d.State_ID', $State_ID); 
				$this->db->order_by("District_Name", "asc"); 
		
		}else{

			$this->db->select('d.State_ID, 
				s.State_Name,
				d.District_ID,
				d.District_Name,
				count(distinct d.District_ID) as district_count,
				SUM(IF(nb.advocacy_meetings = "Yes", 1,0)) AS advocacy_yes,
				SUM(IF(nb.advocacy_meetings = "No", 1,0)) AS advocacy_no,
				SUM(IF(nb.advocacy_meetings <> "", 0,1)) AS advocacy_not_fill,

				SUM(IF(nb.social_media = "Yes", 1,0)) AS social_media_yes,
				SUM(IF(nb.social_media = "No", 1,0)) AS social_media_no,
				SUM(IF(nb.social_media <> "", 0,1)) AS social_media_not_fill,

				SUM(IF(nb.mass_media = "Yes", 1,0)) AS mass_media_yes,
				SUM(IF(nb.mass_media = "No", 1,0)) AS mass_media_no,
				SUM(IF(nb.mass_media <> "", 0,1)) AS mass_media_not_fill,

				SUM(IF(nb.iec_display = "Yes", 1,0)) AS iec_display_yes,
				SUM(IF(nb.iec_display = "No", 1,0)) AS iec_display_no,
				SUM(IF(nb.iec_display <> "", 0,1)) AS iec_display_not_fill,

				nb.newbornweek_eventdate_id,
				SUM(nb.newborns_screened) AS newborns_screened,
				SUM(nb.newborns_visited_ASHA) AS newborns_visited_ASHA,
				SUM(nb.newborns_visited_ANM) AS newborns_visited_ANM,
				SUM(nb.mothers_counseled) AS mothers_counseled,
				nb.remark,
				nb.status,
				nb.freeze');
			
			if($newbornweek_eventdate_id > 0 ) {	
				$this->db->from('m_district d'); 
				$this->db->join('m_state as s','s.State_ID =  d.State_ID ','left'); 
				$this->db->join('newbornweek as nb','d.District_ID =  nb.District_ID  AND nb.newbornweek_eventdate_id = ' . $newbornweek_eventdate_id, 'left');	
			}else {
				//$this->db->from('m_district d, newbornweek_eventdates nbe'); 
				$this->db->from('m_district d');
				
				$this->db->join('m_state as s','s.State_ID =  d.State_ID ','left'); 
				$this->db->join('newbornweek as nb','d.District_ID =  nb.District_ID','left'); 
			}

			if($State_ID > 0) {
				$this->db->group_by("District_ID"); 
				$this->db->where('d.State_ID', $State_ID); 
				$this->db->order_by("District_Name", "asc"); 	
			} else {
			
				$this->db->group_by("State_ID"); 
				$this->db->order_by("State_Name", "asc");
			}			

		}

        $query = $this->db->get();
            
        if($query->num_rows()>0)
        {
		    //print_r($this->db->last_query());    

            return $query->result_array();
        }
        else
        {
            return array();
        }

  }
  
    
  

}
