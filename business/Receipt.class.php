<?php
class Receipt extends orm
{
	protected $mIDParameter = array( 'id' => 'id');
	protected $mFields 		= array();
	protected  $mReq 		= array();
	public $mErrors 		= array();
	public $mId;

	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'id'])){
			parent::__construct( $mP[ 'id']);
		}
 
		if( isset( $mP[ 'id' ] ) )
			$this->setId( $mP[ 'id' ] );
 
	
		$this->setStatements();
		$this->checkErrors();
	}
 
	public function setId( $id )
	{
		$this->mId = $id;
	}
 
	public function getId( )
	{
		return $this->mId;
	}

	public function sendEmail(){
		$result = mail( 'darsal09@yahoo.com', 'testing', 'testing to make sure it works' );
		
		return $result;
	}

}