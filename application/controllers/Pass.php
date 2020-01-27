<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pass extends CI_Controller {
	
	 function __construct()
    {
        parent::__construct();
        //$this->admin_info      =  $this->common->__check_session();
      //  $this->load->model('State_district_block_model');   
       //$this->load->model('Settings_model'); 
        $this->load->helper('form');
       // $this->load->library('round');
    }

     

    public function index()
    {

     $query = " SELECT m.*,s.* FROM m_district m left join m_state s on s.State_ID=m.State_ID";
    $query = $this->db->query($query);
    $result = $query->result_array();

    $fp = fopen('./download/pass.csv', 'wb');    
    foreach($result as $d){
      $userName = '';
      $tmp = strtolower(trim($d['State_Char_Code']));
      $str = str_replace(" ","_",strtolower(trim(preg_replace('/\s*\([^)]*\)/', '', $d['District_Name']))))."_".$tmp;
      $ps = $this->randomPassword();

      $userName = $d['State_ID'].",".$d['State_Name'].",".$d['District_ID'].",".$d['District_Name'].",".$str.",".$str."@nhp.gov.in".",".$ps.",".md5($ps);
      //echo $userName."<br>";
      $val = explode(",", $userName); 
      fputcsv($fp, $val);   
    }
    fclose($fp);
   } 







   function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

     
  }