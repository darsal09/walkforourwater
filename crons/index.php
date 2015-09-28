<?php
	session_start();
	
	require_once dirname( dirname( __FILE__ ) ).'/include/config.php';
	
	require_once PRESENTATION_DIR.'/link.class.php';
	
	function  my_autoload( $class ) 
	{
		require_once BUSINESS_DIR.'/'.$class.'.class.php';
	}

	spl_autoload_register( 'my_autoload' );

?>