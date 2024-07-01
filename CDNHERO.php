<?php
// Load CDNHERO Code
include 'cdnhero/script.php';

// Define class
class CDNHERO extends ProductModule
{
	function __construct(){
		$this->_name = __CLASS__;
		parent::__construct();
	}


	public function configuration()
	{
		$action             = isset($_GET["action"]) ? $_GET["action"] : false;
		$action             = Filter::letters_numbers($action);

		$vars = [
			'm_name'        => $this->_name,
			'area_link'     => $this->area_link,
			'lang'          => $this->lang,
			'config'        => $this->config,
		];
		return $this->get_page("configuration".($action ? "-".$action : ''),$vars);
	}

}