<?php
class Donate extends orm
{
	protected $mIDParameter = array( 'id' => 'id');
	protected $mFields 		= array( 
									'userID' => 'user_id',
									'phone' => 'phone',
									'status' => 'status',
									'emailUpdates' => 'email_updates',
									'giftAmount' => 'gift_amount',									
									);
									
	protected  $mReq 		= array( 
									'userID' => false,
									'status' => false,
									'emailUpdates' => false,
									'giftAmount' => true,
								);
								
	public $mErrors 		= array();
	public $mStatus;
	public $mPhone;
	public $muserID;
	public $mEmailUpdates;
	public $mGiftAmount;
	public $mTableName = 'donate';

	public function __construct( $mP = array() ){
		if( isset( $mP[ 'id'])){
			parent::__construct( $mP[ 'id']);
		}
 
		if( isset( $mP[ 'phone' ] ) ){
			$this->setPhone( $mP[ 'phone' ] );			
		}
		
		if( isset( $mP[ 'userID' ] ) ){
			$this->setUserID( $mP[ 'userID' ] );			
		}
  
		if( isset( $mP[ 'status' ] ) ){
			$this->setStatus( $mP[ 'status' ] );			
		}
 
		if( isset( $mP[ 'emailUpdates' ] ) ){
			$this->setEmailUpdates( $mP[ 'emailUpdates' ] );			
		}
 
		if( isset( $mP[ 'giftAmount' ] ) ){
			$this->setGiftAmount( $mP[ 'giftAmount' ] );			
		}
 
	
		$this->setStatements();
		$this->checkErrors();
	}
	public function setUserID( $userID ){
		$this->mUserID = $userID;
	}
	 
	public function setStatus( $status ){
		$this->mStatus = $status;
	}
 
	public function setEmailUpdates( $emailUpdates ){
		$this->mEmailUpdates = $emailUpdates;
	}
 
	public function setGiftAmount( $giftAmount ){
		$this->mGiftAmount = $giftAmount;
	}
	
	public function setPhone( $phone ){
		$this->mPhone = $phone;
	}
	
	public function getUserID(){
		return $this->mUserID;
	}
	 
	public function getStatus( ){
		return $this->mStatus;
	}
 
	public function getEmailUpdates( ){
		return $this->mEmailUpdates;
	}
 
	public function getGiftAmount( ){
		return $this->mGiftAmount;
	}
 
	public function getPhone(){
		return $this->mPhone;
	}

	public function add(){
		$result = donationsTable::addDonation( [
												'userID' => $this->getUserID(),
												'phone' => $this->getPhone(),
												'giftAmount' => $this->getGiftAmount(),
												'status' => $this->getStatus(),
												'emailUpdates' => $this->getEmailUpdates(),
												
											] );
											
		if( $result[ 'success' ]){
			$donateID = $this->getLastID();
			
			if( $donateID > 0 ){
				$this->setID( $donateID );
				return [ 
						'success' => true,
						'action' => 'new',
						'result' => $this->getID(),
				];
			}
		}
		
		$message = '';
		if( !$result[ 'success' ]){
			$message = $result[ 'message' ];
		}
		
		return [ 
					'success' => false,
					'action'  => 'error',
					'message' => $message,
				];
	}
	public function updatePaypal( $receiptID ){
		$results = [ 'success' => true, 'message' => 'your information was updated' ];
		try{
			$sql = 'UPDATE '.$this->getTableName().'
					SET status = :status, receipt_id = :receiptID
					WHERE id = :id';
			
			$result =  databaseHandler::Execute( $sql, [ ':id' => $this->getID(),
														':receiptID' => $receiptID,
														':status' => 1
														]);
			
			if( $result < 1 ){
				throw new Exeception( 'We could not update our system with your information' );
			}
		}catch( Exception $e ){
			$results = [ 'success' => false, 'error' => true, 'message' => $e->getMessage() ];
		}
		
		return $results;
	}
	
	public function getName(){
		$sql = 'SELECT
				u.first,
				u.last
				FROM '.$this->getTableName().' d
				INNER JOIN users u on u.user_id = d.user_id
				WHERE d.id = :id';
		return databaseHandler::getRow( $sql, [ ':id' => $this->getID() ]);
	}
}