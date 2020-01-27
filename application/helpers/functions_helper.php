<?php

/**
 * get state Name based on State Id
 * @param type $stateId
 * @return type
 */
function getStatesName($State_ID) {
	$CI =& get_instance();
    $CI->load->model('State_district_block_model');
	return $CI->State_district_block_model->getStateName($State_ID);
	
}


/**
 *
 * @param type $District_ID
 * @return String District Name
 */
// get all Distric Name
function getDistrictName($District_ID) {
    $CI =& get_instance();
    $CI->load->model('State_district_block_model');
	return $CI->State_district_block_model->getDistrictName($District_ID);
}

/**
 *
 * @param type $blockId
 * @return String Block Name
 */
// get all Distric Name
function getBlockName($Block_ID) {
   
    $CI =& get_instance();
    $CI->load->model('State_district_block_model');
	return $CI->State_district_block_model->getBlock($Block_ID);
}

// get all states list order by State Name
function getStatesList($emptyFirstRow = false) {
    
	$CI =& get_instance();
	
	$CI->load->model('State_district_block_model');
	$rows = $CI->State_district_block_model->getStates();
	
	$states = array();
	
    if ($emptyFirstRow) {
        $states['0'] = '-- Select a State --';
    }	
	
	foreach ($rows as $row)
	{
			$states[$row['State_ID']] = $row['State_Name'];
	}
    return $states;
	
}

/**
 *
 * @param type $blockId
 * @return String Block Name
 */
// get all Distric Name
function get_newbornweek_date($date_id) {
   
    $CI =& get_instance();
    $CI->load->model('Newbornweek_model');
	$row =  $CI->Newbornweek_model->get_newbornweek_date($date_id);
	return isset($row['date_text']) ? $row['date_text'] : '';
}

// get all district list order by Distric Name
function getDistrictList($State_ID, $emptyFirstRow = false) {
  
   $CI =& get_instance();
	
	$CI->load->model('State_district_block_model');
	$rows = $CI->State_district_block_model->getDistricts($State_ID);
	
    $districts = array();
    if ($emptyFirstRow) {
        $districts['0'] = '-- Select a District --';
    }
	
	foreach ($rows as $row) {
		$districts[$row['District_ID']] = $row['District_Name'];
	}
	
    return $districts;
}


// get all states list order by Health Block Name
function getblockList( $District_ID, $emptyFirstRow = false) {
    $CI =& get_instance();
	
	$CI->load->model('State_district_block_model');
	$rows = $CI->State_district_block_model->getBlocks($District_ID);
	
    $Blocks = array();
    if ($emptyFirstRow) {
        $Blocks['0'] = '-- Select a Block  --';
    }
	
	foreach ($rows  as $row ) {
            $Blocks[$row['Block_ID']] = $row['Block_Name'];
    }
		
    return $Blocks;
}


function get_admin_detail($admin_id) {
       $CI =& get_instance();

        $query = " SELECT  tbl_admin_login.*, m_role.role_name,  m_state.*, m_district.*
        FROM  tbl_admin_login 
        left join m_role on tbl_admin_login.role_id=m_role.role_id 
        left join m_state  on tbl_admin_login.State_ID =  m_state.State_ID
        left join  m_district   on tbl_admin_login.District_ID =   m_district.District_ID
        where tbl_admin_login.admin_id = '" . $admin_id . "'   ";
      
        $query = $CI->db->query($query);
        return   $query->row_array();

}


function isDistrict_belongToState($districtId, $stateId) {
       $CI =& get_instance();

         $query = 'SELECT count(*) as cnt FROM  ' . TB_M_DISTRICTS
            . ' WHERE  State_ID = '.$stateId.' and District_ID = '.$districtId;
      
        $query = $CI->db->query($query);
        return   $query->row_array();

}



function ASHA_training_percentage_color($percentage){
    if($percentage === NULL){
        return 'not_reported';
    }
    if($percentage < 75  ){
        return 'red';
    }
    if($percentage < 90  ){
        return 'yellow';
    }
        return 'green';
}


function ASHA_training_percentage_map_color($percentage){
    if($percentage === NULL){
        return '#f4b084';
    }
    if($percentage < 75  ){
        return '#ff0000';
    }
    if($percentage < 90  ){
        return '#ffff00';
    }
        return '#92d050';
}


function newborn_referred_percentage_color($percentage){

    if($percentage === NULL){
        return 'not_reported';
    }
    if($percentage < 2  ){
        return 'red';
    }
    if($percentage < 5  ){
        return 'yellow';
    }
        return 'green';
}

function newborn_percentage_color($percentage){

     if($percentage === NULL){
        return 'not_reported';
    }
    if($percentage < 40  ){
        return 'red';
    }
    if($percentage < 60  ){
        return 'yellow';
    }
        return 'green';
}

function newborn_percentage_map_color($percentage){
    if($percentage === NULL){
        return '#f4b084';
    }
    if($percentage < 40  ){
        return '#ff0000';
    }
    if($percentage < 60  ){
        return '#ffff00';
    }
        return '#92d050';
}
