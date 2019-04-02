<?php


class Display_override extends CI_Controller{

	public function taking(){
       // $smileys = $this->config->load('smileys');
		$smileys = $this->load->helper('smiley');
		$this->CI = & get_instance();
		$content = $this->CI->output->get_output();
		//echo "in taking";


		/*echo "<pre>";
		print_r($smileys);exit;*/

		$content = str_replace("CodeIgniter","code",$content);
		echo $content;
	}
}

?>