<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct(){
		parent::__construct();
		/*echo CI_VERSION;
		echo "this is in welcome controller";*/
		//$this->load->driver('cache',array('adapter'=>'apc','backup'=>'file'));
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('string');
		$this->load->helper('email');
        //$this->output->cache(10);

	}

	/*public function catche(){
		$this->load->driver('catch',array('adapter'=>'apc','backup'=>'file'));
	}*/
	public function index()
	{
		//test();
		valid_email($mail = "surendra");exit;
		//echo random_element(array(1,2,3));exit;
		//echo $this->email->hello();exit;
		//echo random_string('alnum', 16);exit;
        //$this->session->sess_expiration="320";
		//$this->load->view('welcome_message');
        /*$this->load->helper('html');
		echo "surendra";
		echo br(10);
		echo "pal";
		$url = "https://www.wisdomimg.com/india/jobsboard/images/logo.png";
		echo img($url);*/
		//$this->CI = & get_instance();
		//echo "<pre>";
		//print_r($this->CI);
		$this->load->helper('test1');
		echo get_help();	
		$this->load->view('welcome_message');

	}

	public function surendra($num){
		echo "ndsjkvcndjk";
	  
       echo $num;
       echo "hdfbdhcf";
       $this->load->view('hello');
	}

	public function get_session(){
		echo '<pre>';
		print_r($this->session->userdata());
	}



/*	public function _remap($method)
{
        if ($method === 'some_method')
        {
                $this->$method();
        }
        else
        {
                $this->default_method();
        }
}*/
}
