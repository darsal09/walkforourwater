<?php
class registerEmail extends controller
{
	public function __construct(){
		if( !isset( $_GET[ 'receipt_id' ])){
			helper::redirect( '/register' );
		}
		
		$this->mReceiptID = sanitize::sani( $_GET[ 'receipt_id' ], 'INTIGER' );
		
		
	}
	public function init(){
		$receipt = new Receipt( array( 'id' => $this->mReceiptID ) );
		
		if( $receipt->exist() ){
			if( $receipt->sendEmail() ){
				helper::redirect( '/register/success' );
			}else{
				echo 'We could not send the email';
			}
			
			
		}
		
	}
	
}
?>