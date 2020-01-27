<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct(){
        parent::__construct();
        $this->load->model('loginmodel','',TRUE);
    }
	
    public function index(){
        if(isset($_SESSION['ADMIN']['admin_id'])) {
            redirect(base_url('admin/welcome'));
        }
        $data['page_title'] =   "Login Page";
        $this->load->view('common/loginheader');
        $this->load->view('login',$data);
        $this->load->view('common/loginfooter');       
        //$this->session->sess_destroy();
    }

    
	public function getlogin(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_validatelogin');
        if($this->form_validation->run() == FALSE){
            $message    = "Invalid Login Details";
            $this->session->set_flashdata('message', $message);
            //redirect(base_url(''));
            $this->load->view('common/loginheader');
            $this->load->view('login');
            $this->load->view('common/loginfooter');
        }else{
            redirect(base_url('admin/welcome'));
        }

        //$this->load->view('common/loginfooter');
    }
    //Validating user request for login
    public function validatelogin(){
       
        $credentials      =   array(
            "username"=>$this->input->post('username'),
            "password"=>md5($this->input->post('password'))
        );
		
        return $this->loginmodel->getlogin($credentials);
    }
	
	
}