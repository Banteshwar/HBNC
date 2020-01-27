<?php  

class HBYCReport extends CI_Controller 
{   

 function __construct()
    {
        parent::__construct();
        $this->admin_info      =  $this->common->__check_session();
    }
   public function index()
    {
      $data = null;
      loadLayout('admin/HBYC-Report', $data, 'admin');

    }
    
   
    
   
    
}
