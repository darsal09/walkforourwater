<?php
class Event extends orm
{
	protected $mIDParameter = array( 'id' => 'event_id');
	protected $mFields 		= array( );
	protected  $mReq 		= array();
	public $mErrors 		= array();
	public $mTitle;
	public $mTableName = 'events';
	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'id'])){
		parent::__construct( $mP[ 'id']);
	}
 
		if( isset( $mP[ 'title' ] ) )
			$this->setTitle( $mP[ 'title' ] );
 
	
		$this->setStatements();
		$this->checkErrors();
	}
 
	public function setTitle( $title )
	{
		$this->mTitle = $title;
	}
 
	public function getTitle( )
	{
		return $this->mTitle;
	}
 

}