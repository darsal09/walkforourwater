<?php
class loginController{
	public $mP = [ 
					'email' => '', 
					'password' => ''
				];
	public $mErrors = [
						'email' => false,
						'password' => false,
					];
					
	public $mRequired = [
							'email' => true,
							'password' => true,
						];
						
	public function __construct(){
		if( isset( $_POST[ 'wfow_login' ])){
			$this->login();
		}
	}
	
	public function login(){
		$this->mP = sanitize::filterInputs( 'POST', [
														'email' => FILTER_SANITIZE_EMAIL,
														'password' => FILTER_SANITIZE_STRING, 
													]);
		$login = new  User( $this->mP );
		
		if( !$login->isValid()){
			return;
		}
		
		$user->login();
	}
	
}
?>