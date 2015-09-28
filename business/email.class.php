<?php
class email{
	public $mTo;
	public $mFrom;
	public $mMessage;
	public $mSubject;
	public $mType;
	public $mHeader;
	
	public function __construct( $mP ){
		if( isset( $mP[ 'to' ])){
			$this->setTo( $mP[ 'to' ] );
		}
		
		if( isset( $mP[ 'from' ])){
			$this->setFrom( $mP[ 'from' ] );
		}
		
		if( isset( $mP[ 'subject' ])){
			$this->setSubject( $mP[ 'subject' ]);
		}
		
		if( isset( $mP[ 'message' ])){
			$this->setMessage( $mP[ 'message' ]);
		}
		
		if( isset( $mP[ 'header' ])){
			$this->setHeader( $mP[ 'header' ]);
		}		
	}
}
?>