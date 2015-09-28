<?php
	session_start();
	
	error_reporting(E_ALL | E_STRICT);		
	
	date_default_timezone_set('America/New_York');	
	
//include the utility files
require_once 'include/config.php';


//load the application page template
require_once PRESENTATION_DIR.'/application.class.php';
require_once PRESENTATION_DIR.'/link.class.php';

function  my_autoload( $class ) 
{
	require_once BUSINESS_DIR.'/'.$class.'.class.php';
}

spl_autoload_register( 'my_autoload' );

//set the error handler
//errorHandler::setHandler();

//load smarty template file
$app = new Application();

$app->display( 'nmain.tpl' );

databaseHandler::Close();

?>
