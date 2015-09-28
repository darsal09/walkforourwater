<?php
class ContactUs extends orm
{
	protected $mIDParameter = array( 'id' => 'id');
	protected $mFields 		= array(
									'name' => 'name',
									'phone' => 'phone',
									'email' => 'email',
									'subject' => 'subject',
									'message'=> 'message',
									);
	protected  $mReq 		= array(
									'name' => true,
									'phone'  => false,
									'email' => true,
									'subject' => true,
									'message' => true
								);
	public $mErrors 		= array();
	public $mName;
	public $mPhone;
	public $mEmail;
	public $mSubject;
	public $mMessage;
	
	public $mTableName = 'contact_us';

	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'id'])){
		parent::__construct( $mP[ 'id']);
	}
 
		if( isset( $mP[ 'name' ] ) )
			$this->setName( $mP[ 'name' ] );
 
		if( isset( $mP[ 'phone' ] ) )
			$this->setPhone( $mP[ 'phone' ] );
 
		if( isset( $mP[ 'email' ] ) )
			$this->setEmail( $mP[ 'email' ] );
 
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
 
	public function setPhone( $phone )
	{
		$this->mPhone = $phone;
	}
 
	public function setEmail( $email )
	{
		$this->mEmail = $email;
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
 
	public function getPhone( )
	{
		return $this->mPhone;
	}
 
	public function getEmail( )
	{
		return $this->mEmail;
	}
 
	public function getSubject( )
	{
		return $this->mSubject;
	}
 
	public function getMessage( )
	{
		return $this->mMessage;
	}

	public function add(){
		return contactUsTable::addMessage( [ 
										'name' => $this->getName(),
										'phone' => $this->getPhone(),
										'email' => $this->getEmail(),
										'subject' => $this->getSubject(),
										'message' => $this->getMessage(),
									]);
	}

}