<?php
class session{
	
	private function __construct(){
		//
	}
	
	public static function isLoggedIn(){
		return isset( $_SESSION[ 'wfow' ]['session']['logged' ] );
	}
	
	public static function isAdmin(){
		return isset( $_SESSION[ 'wfow'][ 'session'][ 'admin' ] );
	}
	
	public static function isUser(){
		return isset( $_SESSION[ 'wfow' ][ 'session' ][ 'user' ]);
	}
	
	public static function setSession( $info = [] ){		
		if( !isset( $info[ 'type' ]) || !isset( $info[ 'type' ]) || !isset( $info[ 'user_id' ]) ){
			return;
		}
		
		$_SESSIONN[ 'wfow']['session']['logged' ] = true;
		$_SESSION[ 'wfow']['session' ]['user_id' ] = $info[ 'user_id' ];
		
		switch( $info[ 'type' ]){
			case 'Admin':
				$_SESSION[ 'wfow' ][ 'session'][ 'admin' ] = true;
				break;
			
			case 'Regular':
				$_SESSION[ 'wfow' ][ 'session' ]['user' ] = true;
				break;
		}
	}
	
	public static function remove(){
		unset( $_SESSION[ 'wfow' ]);
	}
}
?>