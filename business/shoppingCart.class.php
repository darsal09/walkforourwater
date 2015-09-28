<?php
class shoppingCart
{
	private static $_mCartID;
	
	
	private function __construct()
	{
		//
	}
	private static function setCartID()
	{
		if( self::$_mCartID == '' )
		{
			if( isset( $_SESSION[ 'tgp_shopping_cart_id' ] ) )				
				self::$_mCartID = $_SESSION[ 'tgp_shopping_cart_id' ];
			else if( isset( $_COOKIE[ 'tgp_shopping_cart_id' ] ) )
			{
				self::$_mCartID = $_COOKIE[ 'tgp_shopping_cart_id' ];
				
				$_SESSION[ 'tgp_shopping_cart_id' ] = self::$_mCartID;
			}
			else
			{				
				if( user::isLoggedIn() )
					self::$_mCartID = symmetricCrypt::Encrypt( user::getId() );
				else
					self::$_mCartID = md5( uniqid( rand(), true ) );
				
				$_SESSION[ 'tgp_shopping_cart_id' ] = self::$_mCartID;
				
				setcookie( 'tgp_shopping_cart_id', self::$_mCartID, ( time() + 86400 ) );
			}
		}
	}
	public static function addClass( $classID, $classType, $classPackage )
	{				
		$sql = 'CALL tgp_shopping_cart_add_class( :classID, :cartID, :classType, :classPackage )';
		$params = array( ':classID' => $classID, ':cartID' => self::getCartID(), ':classType' => $classType, ':classPackage' => $classPackage );
		
		return databaseHandler::Execute( $sql, $params );
		
	}
	public static function updateClass( $shopping_cart_id, $classID, $classType, $classPackage, $classQuantity )
	{
		$sql = 'CALL tgp_shopping_cart_update_class( :shoppingCartID, :classID, :classType, :classPackage, :classQuantity, :userID )';
		$params = array( ':shoppingCartID' => $shopping_cart_id, ':classID' => $classID, ':classType' => $classType, ':classPackage' => $classPackage, ':classQuantity' => $classQuantity, ':userID' => self::$_mCartID );
		
		return databaseHandler::Execute( $sql, $params );		
	}
	public static function removeClass( $shopping_cart_id, $classID )
	{
		$sql = 'CALL tgp_shopping_cart_remove_class( :shopping_cart_id, :classID, :userID )';
		$params = array( ':shoppingCartID' => $shipping_cart_id, ':classID' => $classID, ':userID' => self::$_mCartID );
		
		return databaseHandler::Execute( $sql, $params );
	}
	public static function isEmpty( )
	{		
		if( sizeof( $_SESSION[ 'classes' ] ) > 0 )
			return false;
			
		return true;
	}
	public static function viewCart()
	{
		$ids =  self::getIDs();
		echo $ids.'<br/>';
		return catalog::getSpecificClasses( $ids );
	}
	private static function getIDs()
	{
		$ids = "";
		
		for( $i = 0; $i < sizeof( $_SESSION[ 'classes' ] ); $i++ )
			$ids[ $i ] = $_SESSION[ 'classes' ][ $i ][ 'class_id' ];
			
		return implode( ', ', $ids );
	}
	private static function getID()
	{
		if( !isset( self::$_mCartID ) )
			self::setCartID();
		
		return self::$_mCartID;
	}
}