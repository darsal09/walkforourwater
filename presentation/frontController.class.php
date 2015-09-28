<?php
class frontController{	
	public function __construct(){
		if( isset( $_GET[ 'actoin' ] ) || isset( $_GET[ 'folder' ]) ){
			if( isset( $_GET[ 'folder'] ) ){
				$this->mContent = $_GET[ 'folder' ].'/main.tpl';
			}else{
				$this->mContent = 'public/nmain.tpl';				
			}
		}else{
			$this->mContent = 'public/nmain.tpl';
		}
	}
}
?>