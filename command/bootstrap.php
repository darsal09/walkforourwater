<?php

require_once '../include/config.php';


function my_autoload( $class )
{
	require_once $class.'.class.php';
}

spl_autoload_register( 'my_autoload' );


?>