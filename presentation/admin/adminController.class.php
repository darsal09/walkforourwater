<?php
class adminController
{
	public $mTitle;
	public $mContent = "admin/my-dashboard.tpl";
	public $mLinkToCss;
	public $mLinkToLogo;
	public $mLinkToJS;
	public $mLinkToImages;
	
	public function __construct(){		
		$this->mTitle = 'Walk for Our Water';	

		$this->mLinkToCss 		= Link::Build( 'styles/thegympark.css' );
		$this->mLinkToLogo 		= Link::Build( 'images/gp_symbol.png' );
		$this->mLinkToJS 		= Link::Build( 'scripts' );
		$this->mLinkToImages 	= Link::Build( 'images' );
		
		if( isset( $_GET[ 'action' ] ) ){
			$this->mContent = 'admin/'.$_GET[ 'action' ].'.tpl';
		}
		
		$this->mIsAdmin = user::isAdmin();		
	}
}
?>