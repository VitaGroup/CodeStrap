<?php
class User_M extends CI_Model
{
	function login($_userID)
	{
		$userID = (int)$_userID;

		if((isset($userID)) && ((is_numeric($userID)) || (is_int($userID))))
		{
		  $this->db->select('*');
		  $this->db->from('Test_Users');
		  $this->db->where('userID', $userID);
		  $this->db->where('activeCode', 'A');
		    
		  $query = $this->db->get();
		  $row = $query->row_array();
		  
		  if($row['userID'] == $_userID)
		  {
		    $row = $query->row_array();
		    
		    // Destroy an old session if it exists
		    $this->session->sess_destroy();
		    
		    // Create a brand new session
		    $this->session->sess_create();
		    
		    // Set the session data
		    $this->session->set_userdata($row);
		    
		    // Set logged in to true
		    $this->session->set_userdata(array('loggedIn' => true));
		    
		    return true;
		  }
		  else
		  {
		    return false;
		  }
		}
		else
		{
		  return false;
		} 
	}
}