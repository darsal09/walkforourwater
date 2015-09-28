<?php
class users extends orm
{
	protected $mIDParameter = array( 'id' => 'user_id');
	protected $mFields 		= array(
									'first' => 'first',
									'last' => 'last',
									'email' => 'email',
									'password' => 'password',
									'type' => 'type',
									'status' => 'status',
									);
	protected  $mReq 		= array(
									'first' => true,
									'last' => true,
									'email' => true,
									'password' => true,
									'type' => false,
									'status' => false,
								);
	public $mErrors 		= array(
									'first' => false,
									'last' => false,
									'email' => false,
									'password' => false,
									'type' => false,
									'status' => false
									);
	public $mEmail;
	public $mPassword;
	public $mType = 'Register';
	public $mStatus = 'Inactive';
	public $mTableName = 'users';
	
	public function __construct( $mP = array() ){
		if( isset( $mP[ 'id'])){
			parent::__construct( $mP[ 'id']);
		}
		
		if( isset( $mP[ 'first'])){
			$this->setFirst( $mP[ 'first' ]);
		}
		
		if( isset( $mP[ 'last' ])){
			$this->setLast( $mP[ 'last' ]);
		}
		
		if( isset( $mP[ 'email' ] ) ){
			$this->setEmail( $mP[ 'email' ] );
		}
		
		if( isset( $mP[ 'password' ] ) ){
			$this->setPassword( $mP[ 'password' ] );
		}else{
			$this->setRandomizePassword();
		}
		
		if( isset( $mP[ 'type' ] ) ){
			$this->setType( $mP[ 'type' ] );
		}
		
		if( isset( $mP[ 'status' ] ) ){
			$this->setStatus( $mP[ 'status' ] );
		}
		if( count( $mP ) > 1 && !isset( $mP[ 'email'])){
			$this->setStatements();
			$this->checkErrors();
		}
	}
	
	public function setFirst( $first ){
		$this->mFirst = $first;
	}
	
	public function setLast( $last ){
		$this->mLast = $last;
	}
	
	public function setEmail( $email ){
		$this->mEmail = $email;
	}
 
	public function setPassword( $password ){
		$this->mPassword = $password;
	}
 
	public function setType( $type ){
		$this->mType = $type;
	}
 
	public function setStatus( $status ){
		$this->mStatus = $status;
	}
	
	public function getFirst(){
		return $this->mFirst;
	}
	
	public function getLast(){
		return $this->mLast;
	}
	
	public function getEmail( ){
		return $this->mEmail;
	}
 
	public function getPassword( ){
		return $this->mPassword;
	}
 
	public function getType( ){
		return $this->mType;
	}
 
	public function getStatus( ){
		return $this->mStatus;
	}
	
	public function setRandomizePassword(){
		$p = new password();
		$salt = $p->getSalt();
		$password = $p->getPassword();
		$hashed = crypt( $password, $salt );
		
		$this->setPassword(  $hashed );
	}	
	
	public function exist(){
		$userID = usersTable::userExist( $this->getEmail() );
		
		if( $this->getID() > 0 || $userID > 0 ){
			$this->setID( $userID );
			return true;			
		}
		
		return false;
	}
	
	public function add(){
		if( $this->exist() ){
			return [ 'success' => false, 'action'  => 'exist', 'result' => $this->getID(), 'message' => 'user already exist'];
		}
		
		$result = usersTable::addUser( [ 'first' => $this->getFirst(),
								'last' => $this->getLast(),
								'email' => $this->getEmail(),
								'password' => $this->getPassword(),
								'type' => $this->getType(),
								'status' => $this->getStatus(),
							]);
							
		$userID = $this->getLastID();
		
		if( $userID > 0 ){
			$this->setID( $userID );
			return [ 'success' => true, 'action' => 'new', 'result' => $this->getID(), 'message' => 'user added' ];
		}
		
		return [ 'success' => false, 'action' => 'error' ];
	}
	
	public function get(){
		try{
			$sql = 'SELECT *
					FROM users';
					
			$all = databaseHandler::getAll( $sql );
			
			if( count( $all ) == 0 ){
				throw new Exception( 'there are no users' );
			}
			
			return [ 'success' => true, 'message' => 'we got the users', 'result' => $all ];
		}catch( Exception $e){
			return [ 'success' => false, 'message' => $e->getMessage() ];
		}
	}
	
	public function save(){
		
	}
	
	public function update(){
		$result = usersTable::updateUser( [
											'first' => $this->getFirst(),
											'last' => $this->getLast(),
											'email' => $this->getEmail(),
											'status' => $this->getStatus(),
											'id' => $this->getID(),
										]);		
		return $result;
	}
	
	public function getAll(){
		return usersTable::getAll();
	}
}