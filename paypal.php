<?php
		$item_number = urldecode( $_GET[ 'item_number' ]);
		list( $type, $ItemNumber ) = explode( '-', $item_number );
		$TX 		= urlencode($_GET[ 'tx' ]  ); // receipt number given by paypal
		$statement 	= urlencode( $_GET[ 'st' ] ); //Completed or not
		$amount 	= urlencode( intval( urldecode( $_GET[ 'amt' ] ) ) );
//		$CC 		= $_GET[ 'cc' ];
//		$CM 		= $_GET[ 'cm' ];			
		$type = strtolower( $type );
		$link = "paypals/$type/$ItemNumber/$amount/$statement/$TX";
		
		header( "Location:$link"  );
		
//		paypal/Registration/8/1/Completed/9Y656775213960134
		exit;
?>