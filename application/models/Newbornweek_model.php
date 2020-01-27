<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Newbornweek_model extends CI_Model{
    

    public function getDistricts_withdata($newbornweek_eventdate_id, $State_ID){
       // echo "asda";die;
        
        $this->db->select('d.State_ID, d.District_ID, d.District_Name, nb.newbornweek_eventdate_id, nb.advocacy_meetings, nb.social_media, nb.mass_media, nb.iec_display, nb.newborns_screened, nb.newborns_visited_ASHA, nb.newborns_visited_ANM, nb.mothers_counseled, nb.remark, nb.status, nb.freeze');
        $this->db->from('m_district d'); 
        $this->db->join('newbornweek as nb','d.District_ID =  nb.District_ID AND nb.newbornweek_eventdate_id= ' . $newbornweek_eventdate_id ,'left');   
        
        $this->db->where('d.State_ID', $State_ID);   
		$this->db->order_by('d.District_Name ', 'ASC' ); 
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

    
    public function get_newbornweek_eventdates(){
       // echo "asda";die;
        
        $this->db->select('date_id,date_text');
        $this->db->from('newbornweek_eventdates'); 

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
	
	public function get_newbornweek_date($date_id){
       // echo "asda";die;
        
        $this->db->select('date_id,date_text');
        $this->db->from('newbornweek_eventdates'); 
		$this->db->where('date_id',$date_id); 
        $query = $this->db->get();
       
         return $query->row_array();
        
    }


}
