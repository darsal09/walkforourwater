<?php
class Address extends orm
{
	protected $mIDParameter = array( 'id' => 'id');
	protected $mFields 		= array(
									'userID' 	=> 'user_id',
									'address' 	=> 'address',
									'city' 		=> 'city',
									'zip' 		=> 'zip',
									'state' 	=> 'state',
									'country'  	=> 'country',
									);
									
	protected  $mReq 		= array( 
									'userID' 	=> true,
									'address' 	=> true,
									'city' 		=> true,
									'zip' 		=> true,
									'state' 	=> true,
									'country' 	=> false,
									);
	public $mErrors 		= array(
									'userID' 	=> false,
									'address' 	=> false,
									'city' 		=> false,
									'zip' 		=> false,
									'state' 	=> false,
									'country' 	=> false,

									);
	public $mUserID;
	public $mAddress;
	public $mCity;
	public $mZip;
	public $mState;
	public $mCountry;
	public $mTableName = 'address';
	public function __construct( $mP = array() ){
		if( isset( $mP[ 'id'])){
			parent::__construct( $mP[ 'id']);
		}
		
		if( isset( $mP[ 'userID' ])){
			$this->setUserID( $mP[ 'userID' ]);
		}
		
		if( isset( $mP[ 'address' ] ) )
			$this->setAddress( $mP[ 'address' ] );
 
		if( isset( $mP[ 'city' ] ) )
			$this->setCity( $mP[ 'city' ] );
 
		if( isset( $mP[ 'zip' ] ) )
			$this->setZip( $mP[ 'zip' ] );
 
		if( isset( $mP[ 'state' ] ) )
			$this->setState( $mP[ 'state' ] );
 
		if( isset( $mP[ 'country' ] ) )
			$this->setCountry( $mP[ 'country' ] );
	
		$this->setStatements();
		$this->checkErrors();
	}
 
	public function setUserID( $userID ){
		$this->mUserID = $userID;
	}
	
	public function setAddress( $address ){
		$this->mAddress = $address;
	}
 
	public function setCity( $city ){
		$this->mCity = $city;
	}
 
	public function setZip( $zip ){
		$this->mZip = $zip;
	}
 
	public function setState( $state ){
		$this->mState = $state;
	}
 
	public function setCountry( $country ){
		$this->mCountry = $country;
	}
 
	public function getUserID(){
		return $this->mUserID;
	}
	
	public function getAddress( ){
		return $this->mAddress;
	}
 
	public function getCity( ){
		return $this->mCity;
	}
 
	public function getZip( ){
		return $this->mZip;
	}
 
	public function getState( ){
		return $this->mState;
	}
 
	public function getCountry( ){
		return $this->mCountry;
	}

    public function add(){
        return addressesTable::add([
            'address'  => $this->getAddress(),
            'city' => $this->getCity(),
            'state' => $this->getState(),
            'zip' => $this->getZip(),
            'country' => $this->getCountry(),
            'userID' => $this->getUserID(),
        ]);
    }

    public function exist(){

    }

}