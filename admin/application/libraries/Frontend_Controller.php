<?php

/**
* This controller contains functions and data relevant to the front-end of the application. This extends (includes) the global controller found in core/MY_Controller
*/

class Frontend_Controller extends MY_Controller
{	
	function __construct()
	{
		parent::__construct();

		// Fetch module title from config/module_config.php
		$this->data['module_title'] 	= $this->config->item('module_name');

		// Store the user ID of the logged in user
		$this->data['logged_user_id']	= $this->session->userdata('userID');

		// Store the full name of the logged in user
		$this->data['logged_username']	= $this->session->userdata('name'). ' ' .$this->session->userdata('lastName');
	}
}