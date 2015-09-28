<?php
class fileHandler
{
	protected $_mName;
	private $mFile;
	public $mInformation;
	
	public function create()
	{
		if( file_exists( BUSINESS_DIR.'/'.$this->_mName.'.class.php' ) )
		{
			echo 'File '.$this->_mName.' exists';
			
			return false;
		}
			
		$this->open();
		$this->write();		
	}
	
	private function open()
	{
		if( is_null( $this->mFile ) )
				$this->mFile = fopen( BUSINESS_DIR.'/'.$this->_mName.'.class.php', 'w' ) or die( 'cannot create file' );
	}
	
	private function write()
	{
		fwrite( $this->mFile, $this->mInformation );

	}
}
?>