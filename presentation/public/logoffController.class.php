<?php
class logoffController{
	public function __construct(){
		session::remove();
		
		helper::redirect( '/' );
	}
}
?>