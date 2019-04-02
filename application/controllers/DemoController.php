<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DemoController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('security');
	}

	public function index(){

		echo "index";
		$this->security->xss_clean($data);

	}
	public function getcontent(){
		echo "getcontent";

	}
	public function showcontent(){
		echo "showcontent";

	} 

	public function _remap(){
		echo "redemp";
	}

	public function _output()
	{
	        echo "output";
	}

	public function _utility()
	{
	        echo "_utility";
	}
}


?>