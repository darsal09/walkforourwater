<?php
class forgotPasswordController{
	
	public function __construct(){
		
		if( isset( $_POST[ 'wfow_send_request' ])){
			$this->sendRequest();
		}
	}
	
	public function init(){
		
	}
	
	public function sendRequest(){
		if( !isset( $_POST[ 'wfow_send_request' ])){
			return;
		}
		
		$email = sanitize::sani( $_POST[ 'wfow_email' ], 'EMAIL' );
		
		if( empty( $this->mP ) || strlen( $email ) == 0 ){
			echo 'There are errors in your parameters<br/>';
			return;
		}
		try{
			
			$fp = forgotPasswordModel( [ 'email' => $email]);
			
			if( !$fp->sendMail() ){
				echo '<p>There were errors with your email. We could not sent you the forgot password request to change your password.</p>';
				return;
			}
			
			helper::redirect( '/password/forgot/sent' );
		}catch( Exception $e){
			echo '<p>'.$e->getMessage().'</p>';
		}
	}
	
}
?>