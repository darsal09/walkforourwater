<?php
//This class writes the class in the business directory together with fileHandler

class createClass extends fileHandler
{
	public $mInfo;
	public $mMembers;
	public $mSetters;
	public $mGetters;
	
	public function __construct( $mP = array() )
	{
		$this->mInfo = $mP[ 'members' ];
		
		if( isset( $mP[ 'name' ] ) )
			$this->setName( $mP[ 'name' ] );
		$this->mConditions[] = 'if( isset( $mP[ \'id\'])){
		parent::__construct( $mP[ \'id\']);
	}';
									
		foreach( $mP[ 'members' ]  AS $field )
		{
			$this->mMembers[] = 'public $m'.ucfirst( $field  ).';';
			$this->mConditions[] = 'if( isset( $mP[ \''.$field.'\' ] ) )
			$this->set'.ucfirst( $field ).'( $mP[ \''.$field.'\' ] );';
		
			$this->mSetters[]= 'public function set'.ucfirst( $field ).'( $'.$field.' )
	{
		$this->m'.ucfirst( $field ).' = $'.$field.';
	}';
			$this->mGetters[]= 'public function get'.ucfirst( $field ).'( )
	{
		return $this->m'.ucfirst( $field ).';
	}';
			
		}
		
		
	}
	
	public function setName( $name )
	{
		$this->_mName = $name;
	}
	
	public function getName()
	{
		return $this->_mName;
	}
	/*
		This function creates the file with the class on it
	*/
	public function writeClass()
	{
		$this->mInformation = '<?php
class '.$this->_mName.' extends orm
{'.PHP_EOL;
	$this->mInformation .= '	protected $mIDParameter = array( \'id\' => \'id\');'.PHP_EOL;
	$this->mInformation .= '	protected $mFields 		= array();'.PHP_EOL;
	$this->mInformation .= '	protected  $mReq 		= array();'.PHP_EOL;
	$this->mInformation .= '	public $mErrors 		= array();'.PHP_EOL;
							
	foreach( $this->mMembers AS $value )
	{
		$this->mInformation .= '	'.$value.PHP_EOL;
	}
		
	$this->mInformation .= '
	public function __construct( $mP = array() )
	{'.PHP_EOL;
	
	foreach( $this->mConditions AS $value )
	{
		$this->mInformation .= '		'.$value.PHP_EOL.' '.PHP_EOL;
	}
	
	$this->mInformation .= '	
		$this->setStatements();
		$this->checkErrors();
	}'.PHP_EOL.' '.PHP_EOL;
	
	foreach( $this->mSetters AS $value )
	{
		$this->mInformation .= '	'.$value.PHP_EOL.' '.PHP_EOL;
	}
		
	foreach( $this->mGetters AS $value )
	{
		$this->mInformation .= '	'.$value.PHP_EOL.' '.PHP_EOL;
	}
	
	$this->mInformation .= '
}';
/*
	$this->mInformation .= 'public function getArray()
	{
		return array( ';
	for( $i = 0; $i < sizeof( $this->mInfo ); $i++ )
	{
		$this->mInformation .= '\':'.$this->mInfo[ $i ].'\'';
		
		if( $i < ( sizeof( $this->mInfo ) - 1 ) )
			$this->mInformation  .= '=> $this->get, ';
	}
	$this->mInformation .= '
	}';
*/	
		$this->create();
	}
	
}
?>