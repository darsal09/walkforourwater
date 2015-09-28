<?php
class Link
{
	public static function Build( $link, $type = 'http' )
	{
	   $base = (($type == 'http' || USE_SSL == 'no') ? 'http://' : 'https://') .
				getenv('SERVER_NAME');

		// If HTTP_SERVER_PORT is defined and different than default
		if ( defined('HTTP_SERVER_PORT') && HTTP_SERVER_PORT != '80' &&
			strpos($base, 'https') === false )
		{
		  // Append server port
		  $base .= ':' . HTTP_SERVER_PORT;
		}

		$link = $base . VIRTUAL_LOCATION .$link;

		return $link;
		
		// Escape html
		//return htmlspecialchars($link, ENT_QUOTES);	
	}
	
	public static function toIndex( $page = 1 )
	{
		$link = '';

		if ($page > 1)
			$link .= 'page-' . $page . '/';

		return self::Build( $link );
	}
}
?>