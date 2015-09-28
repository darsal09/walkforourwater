<?php
/*
	This file updates the student class's information. Like Full 18 weeks, first 9 weeks, last 9 weeks
	when switching from a full, first or last, the following variables change:
	startDate, endDate, price, classPart to accomplish that we need the following information as well
	studentID, classID, and classStudentID
*/

include( '../../../../../bootstrap.php' );

$Req 	= array( 'studentID' 		=> true, 
				'classID' 			=> true, 
				'classStudentID'  	=> true, 
				'startDate' 		=> true, 
				'endDate' 			=> true, 
				'classPart' 		=> true,
				'price' 			=> true );
				
$mP = sanitize::filterInputs( 'POST', array( 'studentID' 		=> FILTER_SANITIZE_NUMBER_INT,
											'classID' 			=> FILTER_SANITIZE_NUMBER_INT,
											'classStudentID' 	=> FILTER_SANITIZE_NUMBER_INT,
											'startDate'			=> FILTER_SANITIZE_STRING,
											'endDate' 			=> FILTER_SANITIZE_STRING,
											'classPart' 		=> FILTER_SANITIZE_STRING ) );
			
			

?>