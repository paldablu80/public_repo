<?php


class Pre_controller extends CI_Controller{

	public function Prefunction($params){
       echo "hello this pre function";
       echo "<pre>";
       print_r($params);
	}
}

?>