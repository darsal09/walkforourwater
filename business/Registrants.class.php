<?php
class Registrants extends orm
{
	
	protected $mFields 		= array();
	protected  $mReq 		= array();
	public $mErrors 		= array();
	protected $mTableName = 'users';
	public  $mStart = 0;
	public $mEnd = null;
	
	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'start'  ])){
			$this->setStart( $mP[ 'start' ]);
		}
		
		if( isset( $mP[ 'end'  ])){
			$this->setEnd( $mP[ 'end' ]);
		}

	}
	
	public function setStart( $start )
	{
		$this->mStart = $start;
	}
	
	public function setEnd( $end )
	{
		$this->mEnd = $end;
	}
	
	public function getStart()
	{
		return $this->mStart;
	}
	
	public function getEnd(){
		return $this->mEnd;
	}
		
	public function get(){
		$start = $this->getStart();
		$end = $this->getEnd();
		
		$sql = 'SELECT * 
				FROM '.$this->getTableName().' u
				INNER JOIN registration r on r.user_id = u.user_id
				ORDER BY u.first, u.last';
		
		return databaseHandler::getAll( $sql );
	}
}