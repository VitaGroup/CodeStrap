<?php

/**
* This controller contains functions and data relevant to the whole application
*/

class MY_Controller extends CI_Controller {
	
	public $data = array();
		function __construct() {
			parent::__construct();
			$this->data['errors'] = array();
			$this->data['meta_title'] = "Vita CodeStrap";
		}
}