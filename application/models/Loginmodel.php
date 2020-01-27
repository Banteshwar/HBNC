<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class loginmodel extends CI_Model{
   
    public function getlogin($credentials){
        $this->db->select('*');
        $this->db->from("tbl_admin_login");
        $this->db->where('username = ' . "'" . $credentials['username']. "'");
        $this->db->where('password = ' . "'" . $credentials['password'] . "'");
        $this->db->where('status = ' . "'" . 1 . "'");
        $this->db->limit(1);
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            $row            =   $query->row_array();
            $update_array   =   array(
                "last_login"    =>  $row['login'],
                "login"         =>  date("Y-m-d H:i:s")
            );
            //var_dump($update_array);die;
            $this->db->update("tbl_admin_login",$update_array);
            $this->db->where("admin_id",$row['admin_id']);
            $session_array = array(
                'admin_id' => $row['admin_id'],
                'role_id' => $row['role_id'],
                'State_ID' => $row['State_ID'],
                'District_ID' => $row['District_ID']
            );

           
            $this->session->set_userdata('ADMIN', $session_array);
            return true;
        }else{
            return false;
        }
    }
    public function mysettings($id){
        $this->db->select('*');
        $this->db->from('tbl_admin_login');
        $this->db->where('id = ' . "'" . $id. "'");
        $this->db->limit(1);
        $query = $this->db->get();
        if($query->num_rows() == 1){
            return $query->row_array();
        }else{
            return false;
        }
    }
    public function updateinfo($data,$id,$tbl_name){
        $this->db->where('id', $id);
        $this->db->update($tbl_name ,$data);
        return true;
    }
   
	
	
}
?>