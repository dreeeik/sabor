<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once 'vendor/autoload.php';

class Welcome extends CI_Controller {

	
	public function index()
	{
            $this->load->view('welcome_message');  
	}
}
