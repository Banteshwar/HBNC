<?php

//echo 'this is testing by bs'; die;
/** filter replay array based on key replacement */
function filter_array_replace($base, $replace){
	$final_array = array();
	foreach($base as $key => $value){
		if(key_exists($key, $replace)){
			$final_array[$key] = $replace[$key];
		}else {
			$final_array[$key] =$base[$key];
		}
	}
	return $final_array;
}

$set_config = array('state_list_dislay' => true,'state_defat'=>'amit');

$config = array(
			'state_list_dislay' => false,
			'state_default' => '',
			'state_name' =>'State',
			'state_required' =>false,
			'district_list_dislay' => false,
			'district_default' => '',
			'district_name' =>'District',
			'district_required' =>false,
			'block_list_dislay' => false,
			'block_default' => '',
			'block_name' =>'Blcok',
			'block_required' =>false
		);	

print_r(filter_array_replace($config, $set_config));