<?php
//Reference Smarty Library

require_once SMARTY_DIR . 'Smarty.class.php';

/* class that extends Smarty, used to process and display Smarty files */

class Application extends Smarty
{
	//class constructor
	public function __construct()
	{
		//call Smarty's constructor
		parent::__construct();
		
		//change the default template directories
		$this->template_dir = TEMPLATE_DIR;
		$this->compile_dir = COMPILE_DIR;
		$this->config_dir = CONFIG_DIR;
		$this->setPluginsDir( array( SMARTY_DIR.'plugins', PRESENTATION_DIR.'/smarty_plugins' ) );
	}
	
}
?>