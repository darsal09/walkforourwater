<?php

class sanitize
{	
	
	public static function san( $P, $filters )
	{
		foreach( $P AS $p => $v )
		{
			echo $p.' = '.$v.'<br/>';
		}
	}
	
	public static function sani( $p, $type )
	{
		switch( $type )
		{
			case 'STRING':
				return filter_var( $p, FILTER_SANITIZE_STRING );
				break;
				
			case 'EMAIL':
				return filter_var( $p, FILTER_SANITIZE_EMAIL );
				break;
				
			case 'INTIGER':
				return filter_var( $p, FILTER_SANITIZE_NUMBER_INT );
				break;
				
			case 'FLOAT':
			case 'DOUBLE':
			case 'DECIMAL':
				return filter_var( $p, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION );
				break;
										
			default:
				break;
		}
		
		return;
	}
	public static function validate( $p, $type )
	{
		switch( $type )
		{
			case 'INTIGER':
				return filter_var( $p, FILTER_VALIDATE_INT );
				break;
				
			case 'EMAIL':
				return filter_var( $p, FILTER_VALIDATE_EMAIL );
				break;
				
			default:
				break;
		}
		
		return;
	}
	public static function validation( $values, $filters ){
		$results = array();
		
		foreach( $values AS $field => $value  ){
			$results[ $field ] = self::validate( $value, $filters[ $field ]);
			
		}
		
		return $results;
		
	}
	
	public static function data( $var, array $filters   )
	{
		if( sizeof( $filters ) < 1 )
			return;
			
		if( $filters[ 0 ] == 'sanitize' )
			$var = filter_var( $var, FILTER_SANITIZE_STRING );
		
		if( $filters[ 0 ] == 'validate' )
			$var = filter_var( $var, FILTER_SANITIZE_STRING );
			
		if( sizeof( $filters ) == 1 )
			return $var;
		
		if( $filters[ 1 ] == 'sanitize' )
			$var = filter_var( $var, FILTER_SANITIZE_STRING );
		
	}
	
	public static function matchDates( $input, $separator )
	{

		//return preg_match( [0-9]{2}
	}
	
	public static function time( $value )
	{
		if( empty( $value ) )
			return '';
			
		$value = trim( filter_var( $value, FILTER_SANITIZE_STRING ) );
				
		if( strlen( $value ) > 7 && strlen( $value ) < 6 )
			return '';
		
		list( $hour, $rest ) = explode( ':', $value );
		
		$ampm = substr( $rest, 2 );
		$minute = substr( $rest, 0, 2 );
		
		if( ( $ampm != "pm" && $ampm != "am" ) )
			return '';
		
		
		if( $ampm == "pm" )
			$hour = intval( $hour ) + 12;
		else
			$hour = '0'.$hour;
			
		
		return $hour.':'.$minute.':00';
	}
	
	public static function date( $value )
	{	
		if( empty( $value ) )
			return '';

		$value = preg_replace("([^0-9/])", "", $value );				
		
		$value = trim( filter_var( $value, FILTER_SANITIZE_STRING ) );
		
		list( $month, $day, $year ) = explode( '/', $value );
		
		if( empty( $month ) || empty( $day ) || empty( $year ) || !checkdate( $month, $day, $year ) )
			return '';
		
		return $month.'/'.$day.'/'.$year;
	}
	
	public static function checkForEmptyVariables( $params )
	{
		foreach( $params AS $param => $value )
			if( empty( $value ) )
				return true;
		
		return false;
	}
	
	public static function matchWeekdayWithDate( $wday, $date )
	{
		if( $wday != date( 'l', strtotime( $date ) ) )
			return false;
			
		return true;
	}
	
	public static function trim_value(&$value)
	{
		$value = trim($value);    // this removes whitespace and related characters from the beginning and end of the string
	}
	
	public static function trim( $type )
	{
		switch( $type )
		{
			case 'POST':
				array_filter( $_POST, 'sanitize::trim_value' );    // the data in $_POST is trimmed
				break;
			
			case 'GET':
				array_filter( $_POST, 'self::trim_value');    // the data in $_POST is trimmed
				break;
			
			default:
				echo '<p class=error>The Type: '.$type.' does not exist in our list.</p>';
		}
	}
	
	public static function filterInputs( $type, $mP )
	{		
		switch( $type )
		{
			case 'GET':
				return filter_input_array( INPUT_GET, $mP );
			
			case 'POST':
				return filter_input_array( INPUT_POST, $mP );
			
			default:
				echo '<p class=error>Only two inputs are being filter. GET AND POST and you inputted '.$type.', which is not filtering.<br/>';
		
		}
		
		return array( );
	}

	/*
		this function goes through all the $mP fields
		checks to see if that field is required if it is required then make sure that it is not empty
		if it is empty set the error to true
	*/
	
	public static function hasErrors( $mP, $mReq, $mErrors )
	{
		foreach( $mP AS $field => $value )
		{
			if( isset( $mReq[ $field ] ) && empty( $value ) && $mReq[ $field ] )
				$mErrors[ $field ] = true;
		}
		
		return $mErrors;
	}
	
	/*
		this function check to see that a group of fields is at least one of them has information
		if one of them information then it returns true,
		otherwise it returns false
	*/
	
	public static function hasErrorsOptions( $mP, $mReq, $mErrors, $fields )
	{
		$flag = false;
		
		foreach( $mReq AS $field )
		{
			if( !empty( $mP[ $field ] ) )
				$flag = true;
		}
		
		if( !$flag )
			$mErrors[ $fields ] = true;
		
		return $mErrors;
	}
}
?>