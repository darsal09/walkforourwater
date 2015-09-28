<?php
//SITE_ROOT contains the full path to the last man standing
define( 'SITE_ROOT', dirname( dirname( __FILE__ ) ) );

//Application directories
define( 'PRESENTATION_DIR', SITE_ROOT.'/presentation' );
define( 'BUSINESS_DIR', SITE_ROOT.'/business' );

//Setting needed to configure the Smarty template engine
define( 'SMARTY_DIR', SITE_ROOT.'/libs/Smarty/' );
define( 'TEMPLATE_DIR', PRESENTATION_DIR.'/templates' );
define( 'COMPILE_DIR', PRESENTATION_DIR.'/templates_c' );
define( 'CONFIG_DIR', SITE_ROOT.'/include/configs' );

// Server HTTP port (can omit if the default 80 is used)
define('HTTP_SERVER_PORT', '80');
/* Name of the virtual directory the site runs in, for example:
   '/tshirtshop/' if the site runs at http://www.example.com/tshirtshop/
   '/' if the site runs at http://www.example.com/ */

if( $_SERVER[ 'SERVER_NAME' ] == "localhost" )	 
	define('VIRTUAL_LOCATION', '/walkforourwater/');
else
	define( 'VIRTUAL_LOCATION', '/' );

//These should be true while developing the web site
define( 'IS_WARNING_FATAL', true );
define( 'DEBUGGING', true );

//the error types to be reported
define( 'ERROR_TYPES', E_ALL );

//setting about mailing the error message to admin
define( 'SEND_ERROR_MAIL', false );
define( 'ADMIN_ERROR_MAIL', 'darsal09@yahoo.com' );
define( 'SENDMAIL_FROM', 'inter09@terra.com' );
ini_set( 'sendmail_from', SENDMAIL_FROM );

//By default we don't log errors to file
define( 'LOG_ERRORS', false );
define( 'LOG_ERRORS_FILE', SITE_ROOT.'\erros_log.txt' );
define( 'SITE_GENERIC_ERROR_MESSAGE', '<h1>tgp Testing Errors!</h1>' );

if( isset( $_SERVER[ 'APPLICATION_ENV' ] ) && $_SERVER[ 'APPLICATION_ENV' ] == "development" )
{
	define( 'DB_PERSISTENCY', 'false' );
	define( 'DB_SERVER', 'localhost' );
	define( 'DB_USERNAME', 'root' );
	define( 'DB_PASSWORD', '' );
	define( 'DB_DATABASE', 'thewalk' );
	define( 'PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE );
}
else
{
	define( 'DB_PERSISTENCY', 'false' );
	define( 'DB_SERVER', 'db488426204.db.1and1.com' );
	define( 'DB_USERNAME', 'dbo488426204' );
	define( 'DB_PASSWORD', 'Soccer09!' );
	define( 'DB_DATABASE', 'db488426204' );
	define( 'PDO_DSN', 'mysql:host=' . DB_SERVER . ';dbname=' . DB_DATABASE );
}
//user log in and points
define( 'LMS_EMAIL', 'darsal09@yahoo.com' );
define( 'LMS_PSWD', 'soccer09' );
define( 'LMS_TYPE', 'A' );
?>