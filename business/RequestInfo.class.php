<?php
class RequestInfo extends orm
{
	protected $mIDParameter = array( 'id' => 'request_info_id');
	protected $mFields 		= array( 'name' => 'name',
									'phone' => 'phone',
									'email' => 'email',
									'subject' => 'subject',
									'message' => 'message',
									);
	protected  $mReq 		= array('name' => true,
									'phone' => true,
									'email' => true,
									'subject' => true,
									'message' => true,
								);
	public $mErrors 		= array(
									'name' => false,
									'phone' => false,
									'email' => false,
									'subject' => false,
									'message' => false,								);
	public $mName;
	public $mEmail;
	public $mPhone;
	public $mSubject;
	public $mMessage;
	public $mTableName = 'request_info';
	
	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'id'])){
		parent::__construct( $mP[ 'id']);
	}
 
		if( isset( $mP[ 'name' ] ) )
			$this->setName( $mP[ 'name' ] );
 
		if( isset( $mP[ 'email' ] ) )
			$this->setEmail( $mP[ 'email' ] );
 
		if( isset( $mP[ 'phone' ] ) )
			$this->setPhone( $mP[ 'phone' ] );
 
		if( isset( $mP[ 'subject' ] ) )
			$this->setSubject( $mP[ 'subject' ] );
 
		if( isset( $mP[ 'message' ] ) )
			$this->setMessage( $mP[ 'message' ] );
 
	
		$this->setStatements();
		$this->checkErrors();
	}
 
	public function setName( $name )
	{
		$this->mName = $name;
	}
 
	public function setEmail( $email )
	{
		$this->mEmail = $email;
	}
 
	public function setPhone( $phone )
	{
		$this->mPhone = $phone;
	}
 
	public function setSubject( $subject )
	{
		$this->mSubject = $subject;
	}
 
	public function setMessage( $message )
	{
		$this->mMessage = $message;
	}
 
	public function getName( )
	{
		return $this->mName;
	}
 
	public function getEmail( )
	{
		return $this->mEmail;
	}
 
	public function getPhone( )
	{
		return $this->mPhone;
	}
 
	public function getSubject( )
	{
		return $this->mSubject;
	}
 
	public function getMessage( )
	{
		return $this->mMessage;
	}
 

}