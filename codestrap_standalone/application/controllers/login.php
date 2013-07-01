<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Frontend_Controller {

 function __construct()
 {
   parent::__construct();
   	$this->load->library('form_validation');
	$this->load->model('user_m');
	$this->load->library('session');
 }



 function index()
 {
 	if ($this->session->userdata('loggedIn') == TRUE)
 	{
 		$this->home();
 	}
 	else
 	{
 		$this->load->view('login', $this->data);
 	}
 }

 	public function submit() 
	{
		if ($this->_login_submit_validate() === FALSE)
		{
			$this->index();
			return false;
		}
		else
		{
			$this->data['logged_user'] = 'Hello';

			$this->home();			
		}
	}
	
	private function _login_submit_validate()
	{
		$this->form_validation->set_rules('userID', 'User ID', 'trim|required|numeric|callback_authenticate');
		$this->form_validation->set_message('authenticate', 'Invalid Preceda Number. Please try again or contact L&D for assistance.');

		
		return $this->form_validation->run();
	}

	public function authenticate()
	{	
		if($this->user_m->login($this->input->post('userID')))
		{
			return TRUE;
		}
		return FALSE;
	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}

	public function home()
	{
		$this->load->view('home', $this->data);
	}


}