<?php
class contactController{
	public $mP = array(
					'name' => '',
					'email' => '',
					'phone'  => '',
					'subject' => '',
					'message'  => '',
	);
	
	public function __construct(){
		if( isset( $_POST[ 'add_registration' ])){
			$this->save();
		}
	}
	
	protected function save(){
		if( !isset( $_POST[ 'add_registration' ])){
			return;
		}
		
		$this->mP = sanitize::filterInputs( 'POST', [
													'name' => FILTER_SANITIZE_STRING,
													'email' => FILTER_SANITIZE_EMAIL,
													'phone' => FILTER_SANITIZE_STRING,
													'subject' => FILTER_SANITIZE_STRING,
													'message' => FILTER_SANITIZE_STRING
											]);
											
		$c = new ContactUs( $this->mP );
		
		$result = $c->add();
		
		if( !$result[ 'success' ]){
			print_r( $result );
			return;
		}
		
		helper::redirect( '/contact-us/success' );
	}
}
?>