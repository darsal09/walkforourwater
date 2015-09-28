<?php
class donateSuccessController{
	public $mP;
	protected $mDonateID;
	protected $mAmount;
	protected $mPayPalReceiptID;
	public $mErrors = true;
	
	public function __construct(){
		if( !isset( $_GET[ 'wfow_donate_id' ])){
			helper::redirect( '/donate'  );
		}
		
		$this->mDonateID 		= sanitize::sani( $_GET[ 'wfow_donate_id' ], 'INTIGER' );
		$this->mAmount 			= sanitize::sani( $_GET[ 'wfow_amount' ], 'DECIMAL');
		$this->mPayPalReceiptID = sanitize::sani( $_GET[ 'wfow_paypal_receipt_id' ], 'STRING' );
	}
	public function init(){
		$d = new Donate( array( 'id' => $this->mDonateID ));
		
		
		if( !empty( $this->mPayPalReceiptID )){
			$result = $d->updatePaypal( $this->mPayPalReceiptID );
			$this->mErrors = !$result[ 'success' ];
			if( !$result[ 'success' ]){
				//helper:redirect( 'donates/'.$this->mDonateID.'/fail' );
			}
		}
		
		$result = $d->getName();
		
		$this->mP = $result[ 'result' ];
	}
	
}
?>