<?php
class myDashboard{	
	public function __construct(){		
		if( session::isLoggedIn() ){
			helper::redirect( '/');
		}
		
		if( session::isAdmin() ){
			helper::redirect( '/admin' );
		}
		
		if( session::isUser() ){
			helper::redirect( '/user' );			
		}
		
		helper::redirect( '/' );
	}
}
?>