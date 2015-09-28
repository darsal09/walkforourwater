<?php 	

//include the utility files
	require_once dirname( dirname( __FILE__ ) ).'/include/config.php';

function  my_autoload( $class ) 
{
	require_once BUSINESS_DIR.'/'.$class.'.class.php';
}

spl_autoload_register( 'my_autoload' );
	

?>