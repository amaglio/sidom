<?php
if (!defined( 'BASEPATH')) exit('No direct script access allowed'); 

class Chequear
{
	 	
	public function check_login()
	{	
		$CI =& get_instance(); 
 
 
        if( strtolower($CI->uri->segment(1)) == 'administrador' )
        {
        	if($CI->session->userdata('sidom_id') == false)
				redirect(base_url('index.php/login/index'));
        	 
        } 


	}
}
/*
/end hooks/home.php
*/