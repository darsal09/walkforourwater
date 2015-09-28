<?php
class user{
	public $mIsValid = false;
	public $mEmail;
	protected $mPassowrd;
	private $mEncryptedPassword;
	
	public function __construct( $mP ){
		if( isset( $mP[ 'email' ])){
			$this->setEmail( $mP[ 'email' ] );
		}
		
		if( isset( $mP[ 'password' ])){
			$this->setPassword( $mP[ 'password' ] );
		}
	}
	
	public function setEmail( $email ){
		$this->mEmail = $email;
	}
	
	protected function setPassword( $password ){
		$p = new password( [ 'password' => $password ] );
		
		$this->mPassword = $password;
		$this->mEncryptedPassword = symmetricCrypt::Encrypt( $password );
	}
	
	public function getEmail(){
		return $this->mEmail;
	}
	
	protected function getPassword(){
		return $this->mPassword;
	}
	
	protected function getEncryptedPassword(){
		return $this->mEncryptedPassword;
	}
	
	public function isRegister( $mP ){
		$sql = 'CALL wfow_user_is_register( :email, :password )';
		
		return databaseHandler::Execute( $sql, $mP ); 
	}
	
	public static function create( $mP )
	{
		if( self::isLoggedIn() )
			return self::getId();
		
		if( self::exist( array( ':uEmail' => $mP[ ':uEmail' ] ) ) > 0 )
		{
			echo '<p class=error>The email <b style="color:green;">'.$mP[ ':uEmail' ].'</b> already exist in our system. <br/>Please click <a href="'.Link::Build( 'sign-in' ).'">here</a> to login</p>';
			return -1;
		}
		
		$mP[ ':pswd' ] = self::createTempPassword();
		
		$sql = 'INSERT INTO
				tgp_users( uEmail, uPswd, addedOn )
				VALUES( :uEmail, :pswd, NOW() )';
		
		databaseHandler::Execute( $sql, $mP );
		
		return databaseHandler::getOne( 'SELECT LAST_INSERT_ID()' );
	}
	
	public static function exist( $mP )
	{
		$sql = 'SELECT id
				FROM tgp_users
				WHERE uEmail = :uEmail';
		
		return databaseHandler::getOne( $sql, $mP );
	}
	
	public static function signUp( $name, $email, $pswd )
	{		
		if( !self::logIn( $email, $pswd ) )
		{
			$pswd1 = symmetricCrypt::Encrypt( $pswd );
			
			$sql = 'CALL tgp_create_user( :name, :email, :pswd )';
			$params = array( ':name' => $name, ':email' => $email, ':pswd' => $pswd1 );
		
			if( databaseHandler::Execute( $sql, $params ) )
				return self::logIn( $email, $pswd );
		}
		
		return false;
	}
		
	public function logIn(){		
		$sql = 'SELECT
				*
				FROM users
				WHERE email = :email';
		
		$loginResult = databaseHandler::getRow( $sql, [ ':email' => $this->getEmail()] );

		if( !$loginResult[ 'success' ] ){
			return false;
		}
		
		$result = $loginResult[ 'result' ];
		
		if( $result[ 'password' ] != crypt( $this->getPassword(), $result[ 'password' ] ) ){
			return false;
		}
		
		session::setSession( $result );
				
//		$this->updateLastLogin();
			
		return true;
	}
	
	private static function updateLastLogin(){
		if( self::isLoggedIn() ){			
			databaseHandler::Execute( 'CALL tgp_user_last_login( :userID )', ['userID' => self::getId()] );
		}
	}
	
	public static function isLoggedIn(){
		if( isset( $_SESSION[ 'tgp_login' ]  ) ){
			return true;			
		}
			
		return false;
	}
	
	public static function isAdmin()
	{
		if ( self::whatType() == "A" ){
			return true;			
		}
			
		return false;
	}
	
	public static function isRegular()
	{
		if( self::whatType() == "R" ){
			return true;			
		}
			
		return false;
	}
	
	public static function isEmployee()
	{
		if( self::whatType() == "E" ){
			return true;			
		}
		
		return false;
	}
	
	public static function isIT()
	{
		if( self::whatType() == "I" ){
			return true;			
		}
			
		return false;
	}
	
	public static function isRegistered(){
		if( self::isRegular() ){			
			return databaseHandler::getOne( 'CALL tgp_user_has_membership( :userID )', [':userID' => self::getId()] );
		}
		
		return 0;
	}
	
	public static function hasDonated(){			
		return databaseHandler::getAll( 'CALL tgp_user_has_kids( :userID )', [':userID' => self::getId()] );
	}
	
	public static function getKids()
	{
		if( !self::isRegular() )
			return array();
			
		$sql = 'SELECT *
				FROM tgp_family
				WHERE user_id = :uID AND ( type = "Son" OR type = "Daughter" )';
		
		return databaseHandler::getAlL( $sql, array( ':uID' => self::getId() ) );
	}
	
	public static function hasFamily()
	{
		if( self::isRegular() )
		{
			$sql = 'CALL tgp_user_has_family( :userID )';
			$params = array( ':userID' => self::getId() );
			
			return databaseHandler::getAll( $sql, $params );
		}
		
		return 0;
	}
	
	public static function whatMembership()
	{
		if( self::isRegular() && self::hasMembership() )
		{
			$sql = 'CALL tgp_user_membership_type( :userID )';
			$params = array( ':userID' => self::getId() );
			
			return databaseHandler::getRow( $sql, $params );
		}
		
		return "";
	}
	
	public static function getId()
	{
		if( self::isLoggedIn() )
			return intval( $_SESSION[ 'tgp_id' ] );
			
		return 0;
	}
	
	public static function getName()
	{
		if( self::isLoggedIn() )
			return $_SESSION[ 'tgp_name' ];
		
		return '';
	}
	public static function whatType()
	{
		if( self::isLoggedIn() )
			return $_SESSION[ 'tgp_type' ];
		
		return '';
	}
	public static function logOff()
	{
		if( self::isLoggedIn() )
		{
			unset( $_SESSION[ 'tgp_login' ] );
			unset( $_SESSION[ 'tgp_id' ] );
			unset( $_SESSION[ 'tgp_type' ] );
			unset( $_SESSION[ 'tgp_email' ] );
			unset( $_SESSION[ 'tgp_name' ] );
			
			return true;
		}
		
		return false;
	}
	
	public static function createTempPassword()
	{
		$pswd = new password();
		
		return symmetricCrypt::Encrypt( $pswd->getString() );
	}
	
	public static function get( $mP )
	{
		
		$sql = 'SELECT tu.*
				FROM tgp_family tf
				INNER JOIN tgp_users tu ON tu.id = tf.user_id
				WHERE tf.id = :sID';
		
		$r = databaseHandler::getRow( $sql, $mP );
				
		$r[ 'uPswd' ] = symmetricCrypt::Decrypt( $r[ 'uPswd' ] );
		
		return $r;
	}
	
	public static function getUserID( $mP )
	{
		$sql = 'SELECT user_id
				FROM tgp_family
				WHERE id = :sID';
		
		$pdo = new PDOHandler( array( 'sql' => $sql, 'parameter' => $mP ) );
		
		return $pdo->getOne();
	}
}