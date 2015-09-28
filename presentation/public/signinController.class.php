<?php
class signinController extends controller{
	public $mRequired = [
				'email' => true,
				'password' => true,
	];
	public $mP = [
        'email' => '',
        'password' => '',
    ];
	public $mLoginFail = 0;
	
	public function __construct(){
		if( user::isLoggedIn() ){
			helper:redirect( '/my-dashboard' );
		}
		
		if( isset( $_POST[ 'wfow_signin' ] ) ){
			$this->login();
		}		
	}
	
	public function login(){
		if( !isset( $_POST[ 'wfow_signin' ]) ){
			return;
		}
		
		$this->mLoginFail = intval( $_POST[ 'wfow_login_fail' ] );
		$this->mLoginFail++;
		
		$this->mP = sanitize::filterInputs( 'POST', [
														'email' => FILTER_SANITIZE_EMAIL,
														'password' => FILTER_SANITIZE_STRING,
											] );
		
		if( $this->hasErrors( $this->mP, $this->mErrors ) ){
			echo 'There are errors in your log in information';
			return;
		}
		
		$user = new user( $this->mP );
		
		if( !$user->logIn() ){
			return;
		}
		
		helper::redirect( '/my-dashboard' );
	}
}
?>