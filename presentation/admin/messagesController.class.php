<?php
class messagesController{
	public $mMessages;

	public function __construct(){
		$this->mMessages = [];
	}
	public function init(){
		$messageResults = contactUsTable::getMessages();
		
		if( $messageResults[ 'success' ]){
			$this->mMessages = $messageResults[ 'result' ];			
		}
		
	}
}
?>