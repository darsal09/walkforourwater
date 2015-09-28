<?php
class registerController extends controller{
	
	public $mP= array( 'first' => '',
						'last' => '',
						'email' => '',
						'phone'  => '',
						'address' => '',
						'city' => '',
						'zip' => '',
						'state' => '',
						'country' => 'USA',
						'donation' => '',
						'options' => '',
						);
	public $mErrors = [];
	
	public function __construct(){
	
		if( isset( $_POST[ 'add_registration' ])){
			$this->add();
		}	
	}
	
	public function add(){
		$this->mP = sanitize::filterInputs('POST', [ 
														'first' 	=> FILTER_SANITIZE_STRING,
														'last'  	=> FILTER_SANITIZE_STRING,
														'email' 	=> FILTER_VALIDATE_EMAIL,
														'phone' 	=> FILTER_SANITIZE_STRING,
														'address' 	=> FILTER_SANITIZE_STRING,
														'city' 		=> FILTER_SANITIZE_STRING,
														'state' 	=> FILTER_SANITIZE_STRING,
														'zip' 		=> FILTER_SANITIZE_STRING,			
														'country' 	=> FILTER_SANITIZE_STRING,			
														'options' 	=> FILTER_SANITIZE_STRING,
														'donation_amount' 		=> FILTER_SANITIZE_NUMBER_FLOAT,
													]);
													
		if( $this->mP[ 'donation_amount' ] == -1 ){
			$this->mP[ 'donation_amount' ] = sanitize::sani( $_POST[ 'other_amount' ], 'DECIMAL' );
		}
		
		$user = new users( [
						'first' => $this->mP[ 'first' ],
						'last' => $this->mP[ 'last' ],
						'email' => $this->mP[ 'email' ],
						'type' => 'Regular',
					]);
					
		$result = $user->add();
		
//		print_r( $user->getID() );
		
		if( !$result[ 'success' ] && $user->getID() < 1){
			echo '<p>ERROR - Adding User: <br/>'.$result[ 'message' ].'</p>';
			return;
		}

		if( $result[ 'action' ] == 'new'){
			$address = new Address([
								'userID' => $user->getID(),
								'address' => $this->mP[ 'address' ],
								'city' => $this->mP[ 'city'],
								'zip' => $this->mP[ 'zip' ],
								'state' => $this->mP[ 'state' ],
								'country' => $this->mP[ 'country' ],
							]);
			
			$result = $address->save();
		}

		
		$register = new Register( [
									'userID' 	=> $user->getID(),
									'phone' 	=> $this->mP[ 'phone' ],
									'type' 		=> $this->mP[ 'options' ],
									'cost' 		=> $this->mP[ 'donation_amount' ],
									'eventID' 	=> 1,
								] );
		
		$result = $register->save();
		if( ( $result[ 'success' ] || $register->getID() > 0 ) && $this->mP[ 'donation_amount' ] > 0.00  ){
			$paypal = new Paypal( array( 'amount' => $this->mP[ 'donation_amount' ], 'receiptID' => $register->getID() ));	
			$paypal->send();
		}else{
			helper::redirect( '/registrations/'.$register->getID().'/success' );
		}		
	}
}
?>