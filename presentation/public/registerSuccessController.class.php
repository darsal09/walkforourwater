<?php
class registerSuccessController{
	public $mP;
	public $mRegisterID;
	public $mAmount;
	public $mPayPalReceiptID = '';
	
	public function __construct(){
		if( isset( $_GET[ 'wfow_registration_id'] )){
			$this->mRegisterID = sanitize::sani( $_GET[ 'wfow_registration_id'], 'INTIGER' );			
		}
		
		if( isset( $_GET[ 'wfow_amount' ] ) ){
			$this->mAmount = sanitize::sani( $_GET[ 'wfow_amount' ], 'DECIMAL' );
		}
		
		if( isset( $_GET[ 'wfow_paypal_receipt_id'] )){
			$this->mPayPalReceiptID = sanitize::sani( $_GET[ 'wfow_paypal_receipt_id'], 'STRING' );			
		}
		
		if( isset( $_GET[ 'status' ])){
			$this->mStatus = 'Completed';
		}
	}
	
	public function init(){
		$r  = new Register([ 'id' => $this->mRegisterID ]);
		$result = [];
		if( !empty( $this->mPayPalReceiptID )){
			$result = $r->updateRegistrationFromPaypal([
				'status' => 'Completed',
				'amount' => $this->mAmount,
				'prID' => $this->mPayPalReceiptID,
			]);				
		}else if( isset( $_GET[ 'status' ]) ){
			$result = $r->updateStatus( 'Completed' );
		}
		$this->mErrors = !$result[ 'success' ];			
		
		
		$result = $r->getName( );
		
		$this->mP = $result[ 'result' ];		
	}
	
}
?>