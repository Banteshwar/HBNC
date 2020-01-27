<?php

function loadLayout($page = null, $data = null, $type = null) {
    $layout = & get_instance();
    if ($type == 'admin') {
        $layout->load->view('common/header',$data);
		$layout->load->view('common/sidebar',$data);
		$layout->load->view('common/profile_header',$data);
        $layout->load->view($page, $data);
        $layout->load->view('common/footer',$data);
    } else if ($type == 'public') {
        $layout->load->view('common/front_header',$data);
        $layout->load->view($page, $data);
        $layout->load->view('common/front_footer',$data);
    } else if ($type == 'popup') {
        $layout->load->view($page, $data);
      } else {
        $layout->load->view('common/front_header',$data);
        $layout->load->view($page, $data);
        $layout->load->view('common/front_footer',$data);
    }
}

// check if user has permission return true otherwise stop further script execution
function has_admin_permission_layout($permission_name, $type = ''){

	if($type == '' ) {
		$type = 'admin';
	}	
	if(!has_admin_permission($permission_name)) {
		if ($type == 'admin') {
		  loadLayout('common/admin_permission_denied', null , $type);
		}
		if ($type == 'popup') {
		  loadLayout('common/admin_permission_denied', null , $type); 
		}
		
		 return false;
    }	
    return true;

}

function jdecrypt() {

    require_once APPPATH . 'third_party/jcryption/sqAES.php';
    require_once APPPATH . 'third_party/jcryption/JCryption.php';
    return JCryption::decrypt();
}



if (!function_exists('generate_password')) {
    function generate_password($length = 20)
    {
        /*$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#' .
        $str = '';
        $max = strlen($chars) - 1;

        for ($i=0; $i < $length; $i++) {
            $str .= $chars[random_int(0, $max)];
        }

        return $str;*/
		
		
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#';
		$str="";
		for($i=0;$i<$length;$i++){
		$str.=substr($chars,mt_rand(0,strlen($chars)-1),1);
		}
		return $str;
    }
}