<?php
class Registrant extends orm
{
	protected $mTableName = 'registration';
	protected $mIDParameter = array( 'id' => 'register_id');
	protected $mFields 		= array( 
									'first' => 'first',
									'last' => 'last',
									'email' => 'email',
									'phone' => 'phone',
									'city' => 'city',
									'zip' => 'zip',
									'status' => 'status',
									);
	protected  $mReq 		= array();
	public $mErrors 		= array();
	public $mFirst;
	public $mLast;
	public $mEmail;
	public $mPhone;
	public $mCity;
	public $mZip;
	public $mStatus;

	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'id'])){
			parent::__construct( $mP[ 'id' ]);
		}
		
		if( isset( $mP[ 'first'])){
			$this->setFirst( $mP[ 'first' ]);
		}
		
		if( isset( $mP[ 'last'])){
			$this->setLast( $mP[ 'last' ]);
		}
		
		if( isset( $mP[ 'email'])){
			$this->setEmail( $mP[ 'email' ]);
		}

		if( isset( $mP[ 'phone'])){
			$this->setPhone( $mP[ 'phone' ]);
		}
		
		if( isset( $mP[ 'city'])){
			$this->setCity( $mP[ 'city' ]);
		}
		
		if( isset( $mP[ 'zip'])){
			$this->setZip( $mP[ 'zip' ]);
		}

		if( isset( $mP[ 'status'])){
			$this->setStatus( $mP[ 'status' ]);
		}

		$this->setStatements();
		$this->checkErrors();
	}
 
	public function setFirst( $first )
	{
		$this->mFirst = $first;
	}
 
	public function setLast( $last )
	{
		$this->mLast = $last;
	}
 
	public function setEmail( $email )
	{
		$this->mEmail = $email;
	}
 
	public function setPhone( $phone )
	{
		$this->mPhone = $phone;
	}
 
	public function setCity( $city )
	{
		$this->mCity = $city;
	}
 
	public function setZip( $zip )
	{
		$this->mZip = $zip;
	}
 
	public function setStatus( $status )
	{
		$this->mStatus = $status;
	}
 
	public function getFirst( )
	{
		return $this->mFirst;
	}
 
	public function getLast( )
	{
		return $this->mLast;
	}
 
	public function getEmail( )
	{
		return $this->mEmail;
	}
 
	public function getPhone( )
	{
		return $this->mPhone;
	}
 
	public function getCity( )
	{
		return $this->mCity;
	}
 
	public function getZip( )
	{
		return $this->mZip;
	}
 
	public function getStatus( )
	{
		return $this->mStatus;
	}
	
 	public function exist()
	{
		$sql = 'SELECT register_id 
				FROM '.$this->getTableName().'
				WHERE register_id = :id';
		
		return databaseHandler::getOne( $sql, array( ':id' => $this->getID() ));
		
		if( $result < 1 ){
			return false;
		}
		
		return true;
	}

	public function get()
	{
		$sql = 'SELECT *
				FROM registration
				WHERE register_id =  :id';
		
		return databaseHandler::getRow( $sql, array( ':id' => $this->getID() ));
	}
	
}