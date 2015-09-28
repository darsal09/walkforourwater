<?php
class Register extends orm
{
	protected $mTableName = 'registration';
	protected $mIDParameter = array( 'id' => 'register_id' );
	public $mFields = array( 
								'userID' => 'user_id',
								'phone' => 'phone',
								'type' => 'type',
								'cost' => 'cost',
								'status' => 'status',
							);
	public $mReq = array( 
							'userID' => true,
							'phone' => true,
							'type' => true,
							'cost' => true,
							'status' => true,
							);
	public $mErrors = array();
	
	public $mPhone;
	public $mType;
	public $mCost;
	public $mStatus = 'Pending';
	public $mUserID;
	public $mEventID;
	
	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'id' ])){
			parent::__construct( $mP[ 'id' ]);
		}
		
		if( isset( $mP[ 'userID'])){
			$this->setUserID( $mP[ 'userID']);
		}
		
		if( isset( $mP[ 'phone' ] ) )
			$this->setPhone( $mP[ 'phone' ] ); 
		
		if( isset( $mP[ 'type' ])){
			$this->setType( $mP[ 'type' ]);
		}
		if( isset( $mP[ 'cost' ])){
			$this->setCost( $mP[ 'cost' ]);
		}
		if( isset( $mP[ 'status' ])){
			$this->setStatus( $mP[ 'status' ]);
		}
		if( isset( $mP[ 'eventID'])){
			$this->setEventID( $mP[ 'eventID'  ]);
		}
		
		$this->setStatements();
		$this->checkErrors();
	}
	
	public function setUserID( $userID ){
		$this->mUserID = $userID;
	}
	
	public function setPhone( $phone ){
		$this->mPhone = $phone;
	}
  
	public function setType( $type ){
		$this->mType = $type;
	}
 
	public function setCost( $cost ){
		$this->mCost = $cost;
	}
	
	public function setStatus( $status ){
		$this->mStatus = $status;
	}
	
	public function setEventID( $eventID ){
		$this->mEventID = $eventID;
	}
		
	public function getUserID(){
		return $this->mUserID;
	}
	
	public function getPhone( ){
		return $this->mPhone;
	}
 
	public function getType( ){
		return $this->mType;
	}
 
	public function getCost(){
		return $this->mCost;
	}
	
	public function getStatus(){
		return $this->mStatus;
	}
	
	public function getEventID(){
		return $this->mEventID;
	}
		
	public function updateRegistrationFromPaypal( $mP ){
		return registrationsTable::updateRegistrationFromPaypal( [
																	'status' => $mP[ 'status' ],
																	'prID' => $mP[ 'prID' ],
																	'registerID' => $this->getID(),
																]);
	}
	
	public function getName( ){
		$sql = 'SELECT
				u.first,
				u.last
				FROM '.$this->getTableName().' r
				INNER JOIN users u on u.user_id = r.user_id
				WHERE r.register_id = :id';
		return databaseHandler::getRow( $sql, [ ':id' => $this->getID() ]);
	}	
	
	public function updateStatus( $status ){
		
		return registrationsTable::updateStatus( [ 
													'status' => $status,
													'registerID' => $this->getID(),
													]);
			
	}

	public function exist(){
		$registrationID = registrationsTable::registrationExist( [ 'user_id' => $this->getUserID(), 'event_id' => $this->getEventID()]);
				
		if( $this->getID() > 0 || $registrationID > 0){
			$this->setID( $registrationID );
			return true;
		}
		
		return false;
	}
	
	public function add(){
		if( $this->exist() ){
			return [ 'success' => false, 'action' => 'exist', 'result' => $this->getID(), 'message'=> 'user is already registered for this event' ];
		}
		
		$result = registrationsTable::addRegistration( [
														'phone' => $this->getPhone(),
														'userID' => $this->getUserID(),
														'eventID' => $this->getEventID(),
														'status' => $this->getStatus(),
														'type' => $this->getType(),
														'cost' => $this->getCost(),
													]);
		if( $result[ 'success' ]){
			$registrationID = registrationsTable::getLastID();
			if( $registrationID > 0 ){
				$this->setID( $registrationID );
				return [ 'success' => true, 'action' => 'new', 'result' => $this->getID(), 'message' => 'Registration added' ];
			}
		}
		
		$message = '';
		
		if( !$result[ 'success' ]){
			$message = $result[ 'message' ];
		}
		
		return [ 'success' => false, 'action' => 'error', 'message' => $message ];
	}
	
}