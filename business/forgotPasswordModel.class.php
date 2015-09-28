<?php
class forgotPasswordModel{
	public $mEmail;
	
	public $mRequired = [
			'email' => true,
	];
	
	public $mErrors = [
			'email' => false,
	];
	
	public function __construct( $mP = [] ){
		if( isset( $mP[ 'email' ])){
			$this->setEmail( $mP[ 'email' ] );
		}
		
		$this->mError = $this->checkErrors();
	}
	
	public function setEmail( $email ){
		$this->mEmail = $email;
	}
	
	public function getEmail(){
		return $this->mEmail;
	}
	
	public function checkErrors(){
		foreach( $this->mRequired AS $field => $value ){
			$param = 'm'.ucfirst( $field );
			
			if( $value && empty( $this->$param)){
				$this->mErrors[ $field ] = true;
			}
		}
		
		return in_array( true, $this->mErrors );
	}
	
	public function hasErrors(){
		return $this->mError;
	}
	
	public function sendEmail(){
		if( $this->hasErrors() ){
			return false;
		}
		
		$user = usersTable::getByEmail();
		
		return mail( $this->getMail(), emailMessages::forgotPasswordSubject(), emailMessages::forgotPassword(), emailMessages::header( [ 'email' => $this->getEmail ]) );
	}
}
?>