<?php
class donateController{
	public $mP = [
					'first_name' => '',
					'last_name' => '',
					'phone' => '',
					'email' => '',
					'address' => '',
					'city' => '',
					'zip' => '',
					'state' => '',
					'emailUpdates' => true,
					'giftAmount' => '',
					'amount' => '',
					
				];
	public $mRequired = [
					'first_name' => true,
					'last_name' => true,
					'phone' => false,
					'email' => true,
					'address' => true,
					'city' => true,
					'zip' => true,
					'state' => true,
					'emailUpdates' => true,
					'giftAmount' => true,
					'amount' => false,
				];			
				
	public $mErrors = [
						'first_name' => false,
						'last_name' => false,
						'phone' => false,
						'email'  => false,
						'address' => false,
						'city' => false,
						'zip' => false,
						'state' => false,
						'emailUpdates' => false,
						'giftAmount' => false,
						'amount' => false,
					];
	public function __construct(){
		if( isset( $_POST[ 'submit_donation' ] ) ){
			$this->saveDonation();
		}
		
	}
	
	public function saveDonation(){
		$this->mP['first' ] = sanitize::sani( $_POST[ 'first_name'], 'STRING');
		$lname =  sanitize::sani( $_POST[ 'last_name'], 'STRING' );
		
		$this->mP = sanitize::filterInputs( 'POST', array(
												'first_name' => FILTER_SANITIZE_STRING,
												'last_name' => FILTER_SANITIZE_STRING,
												'phone' => FILTER_SANITIZE_STRING,
												'email' => FILTER_SANITIZE_STRING,
												'address' => FILTER_SANITIZE_STRING,
												'city' => FILTER_SANITIZE_STRING,
												'zip' => FILTER_SANITIZE_STRING,
												'state' => FILTER_SANITIZE_STRING,
												'emailUpdates' => FILTER_SANITIZE_NUMBER_INT,
												'giftAmount' => FILTER_SANITIZE_NUMBER_INT,
												'amount' => FILTER_SANITIZE_NUMBER_INT,
											));
											
		$this->mP[ 'giftAmount' ] = $this->mP[ 'giftAmount']==-1?$this->mP[ 'amount']:$this->mP[ 'giftAmount'];

		if( $this->hasErrors() ){
			echo 'There are errors:<br/>';
			print_r( $this->mErrors);
			print_r( $this->mP );
			return;
		}
		$user = new users( [
						'first' => $this->mP[ 'first_name' ],
						'last' => $this->mP[ 'last_name' ],
						'email' => $this->mP[ 'email' ],
						'type' => 'Regular',
						'status' => 'Active',
					]);
					
		$result = $user->add();
		
		if( !$result[ 'success' ] && $user->getID() < 1){
			echo '<p>ERROR:<br/>'.$result[ 'message' ].'</p>';
			return;
		}
		
		if( $result[ 'action' ] == 'new' ){			
			$address = new Address([
								'userID' => $user->getID(),
								'address' => $this->mP[ 'address' ],
								'city' => $this->mP[ 'city'],
								'zip' => $this->mP[ 'zip' ],
								'state' => $this->mP[ 'state' ],
								'country' => 'USA',
							]);
			
			$result = $address->add();
		}
		
		$d = new Donate([
					'userID' => $user->getID(),
					'phone' => $this->mP[ 'phone' ],
					'status' => 0,
					'emailUpdates' => $this->mP[ 'emailUpdates' ],
					'giftAmount' => $this->mP[ 'giftAmount' ],
		]);
		
		$result = $d->add();
		
		if( ( $result[ 'success' ] || $d->getID() > 0 ) && $this->mP[ 'giftAmount' ] > 0.00 ){
			$p = new Paypal([
				'type' => 'Donation',
				'amount' => $this->mP[ 'giftAmount' ],
				'receiptID' => $d->getID(),
			]);
			$p->send();
		}else{
			echo 'There are errors<br/>';
			echo $result[ 'message' ].'<br/>';
		}
	}
	
	public function hasErrors(){
		foreach( $this->mP AS $field => $value ){
			if( $this->mRequired[ $field ] && empty( $value ) ){
				$this->mErrors[ $field ] = true;
			}
		}
		
		return in_array( true, $this->mErrors );
	}
}
?>