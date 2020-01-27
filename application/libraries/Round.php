<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Round{
    
    function __construct(){
		
		$CI	=& get_instance();
		
	}

    public function getroundList(){
        $CI =& get_instance();
        $CI->db->select('*');
        $CI->db->from('m_round');
        $CI->db->order_by("sort_order", "asc");

        $query = $CI->db->get();
        if($query->num_rows() >= 1){
            return $query->result_array();
        }else{
            return false;
        }
    }
    

    public function setDefaultRound(){
       $_SESSION['ROUND_CHOICE'] = 1;
    }

    public function setRound($round_id){
       $_SESSION['ROUND_CHOICE'] = $round_id;
    }
    
    public function getRound(){

       if(isset($_SESSION['ROUND_CHOICE'])) {
        return $_SESSION['ROUND_CHOICE'];
       }

       // set default round choice and return back
       $this->setDefaultRound();
       return $_SESSION['ROUND_CHOICE'];
    }
    
   
	
}