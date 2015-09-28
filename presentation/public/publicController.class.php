<?php
class publicController
{
	public $mTitle;
	public $mContent = "public/nfeature.tpl";
	public $mLinkToCss;
	public $mLinkToLogo;
	public $mLinkToJS;
	public $mLinkToImages;
	public $mEditNewsletter = false;
	
	public $mCategoryFile = "categories.tpl";
	public $mShowQuickLinks = true;
	public $mIsAdmin;
	
	public function __construct()
	{		
		$this->mTitle = 'Walk for Our Water';	

		$this->mLinkToCss 		= Link::Build( 'styles/thegympark.css' );
		$this->mLinkToLogo 		= Link::Build( 'images/gp_symbol.png' );
		$this->mLinkToJS 		= Link::Build( 'scripts' );
		$this->mLinkToImages 	= Link::Build( 'images' );
		
		if( isset( $_GET[ 'action' ] ) ){
			$this->mContent = 'public/'.$_GET[ 'action' ].'.tpl';
		}
		
		$this->mIsAdmin = user::isAdmin();
		
		if(  $this->mContent === "addNewsletter" )
			$this->mEditNewsletter = true;
	}
}
?>