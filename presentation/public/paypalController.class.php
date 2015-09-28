<?php
class paypalController{
	protected $_mID;
	protected $_mRoute;
	protected $_mStatus  = 'cancel';
	
	public function __construct(){
		if( !isset( $_GET[ 'wfow_id' ])){
			helper::redirect( '/');
		}
		$this->_mRoute 		= sanitize::sani( $_GET[ 'wfow_route' ], 'STRING' );
		$this->_mID 		= sanitize::sani( $_GET[ 'wfow_id' ], 'INTIGER' );
		$this->_mStatus 	= sanitize::sani( $_GET[ 'wfow_status' ], 'STRING' );
		$this->_mAmount 	= sanitize::sani( $_GET[ 'wfow_amount' ], 'FLOAT' );
		$this->_mPaypalReceiptID = sanitize::sani( $_GET[ 'wfow_paypal_receipt_id' ], 'STRING' );
		
		if( $this->_mStatus === "Completed"){
			$this->_mStatus = 'success';
		}else{
			$this->_mStatus = 'cancel';
		}
		
		$link =  '/'.strtolower( $this->_mRoute ).'s/'.$this->_mID.'/'.$this->_mStatus.'/'.$this->_mAmount.'/paypals/'.$this->_mPaypalReceiptID;
		helper::redirect( $link );
	}
}
?>