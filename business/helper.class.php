<?php
class helper
{
	private function __construct(){
		
	}
	
	public static function redirect( $link ){
		header( 'Location: '.$link );
		exit;
	}
	
	public static function link( $link, $type = 'http' ){
	   $base = (($type == 'http' || USE_SSL == 'no') ? 'http://' : 'https://') . getenv('SERVER_NAME');

		// If HTTP_SERVER_PORT is defined and different than default
		if ( defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80' && strpos($base, 'https') === false ){
		  // Append server port
		  $base .= ':' . HTTP_SERVER_PORT;
		}

		$link = $base . VIRTUAL_LOCATION .$link;

		return $link;
		
		// Escape html
		//return htmlspecialchars($link, ENT_QUOTES);	
	}

}
?>