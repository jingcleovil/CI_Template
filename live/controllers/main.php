<?php
class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}	
	  
	public function index()
	{             
		$this->load->view('default');
	}

	public function h($type='',$group='')
	{
		$this->minify->outputByGroup($type,$group); 
	}
	
	public function x()
	{
		
	}
}
?>
