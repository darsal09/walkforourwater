<?php
	class procedureHandler
	{
		
		
		public static function Execute( $proc, $params )
		{
			return databaseHandler::Execute( self::helper( $proc, $params ), $params );
		}
	
		public static function getOne( $proc, $params )
		{			
			return databaseHandler::getOne( self::helper( $proc, $params ), $params );
		}
		
		public static function getRow( $proc, $params )
		{			
			return databaseHandler::getRow( self::helper( $proc, $params ), $params );
		}
		
		public static function getAll( $proc, $params )
		{
			return databaseHandler::getAll( self::helper( $proc, $params ), $params );
		}
		
		private static function helper( $proc, $params )
		{
			if( empty( $proc ) && empty( $params ) )
				return;
			
			$parameters = '';
			$i = 0;
			$size = sizeof( $params );
			
			foreach( $params AS $parameter => $value )
			{
				$parameters .= $parameter;
				
				if( $i != ( $size - 1 ) )
					$parameters .= ', ';
					
				$i++;
			}
			
			return 'CALL '.$proc.' ( '.$parameters.' )';
		}
	}
?>