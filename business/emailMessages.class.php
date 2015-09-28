<?php
class emailMessages{
	
	private function __construct(){
		
	}
	
	public static function getHeader(){
		return '';
		
	}
	
	public static function incompleteRegistration( $data ){
		$eventID 		= $data[ 'event_id' ];
		$startTime		= $data[ 'startTime' ];
		$name  			= $data[ 'first' ];
		$location 		= 'the Allerton Ballfields in the Bronx Park';
		$mapLink 		= 'https://www.google.com/maps/dir/40.8699483,-73.8760044/40.8699402,-73.875865/@40.8691633,-73.8761385,18z';
		$facebookLink 	= 'https://www.facebook.com/walkforourwater?ref=hl';
		
		return  'Dear '.$name.',<br/>
				<p>We noticed you started to register for <a href="">Walk For Our Water</a>. It looks like you did not complete your payment. </p>
				<p>Please go back to our <a href="walkforourwater.org/sign-in">website</a> login and finish your registration</p>
				';
	}
	
	public static function newRegistration( $data = [] ){
		$eventID 		= $data[ 'event_id' ];
		$startTime		= $data[ 'startTime' ];
		$name  			= $data[ 'first' ];
		$location 		= 'the Allerton Ballfields in the Bronx Park';
		$mapLink 		= 'https://www.google.com/maps/dir/40.8699483,-73.8760044/40.8699402,-73.875865/@40.8691633,-73.8761385,18z';
		$facebookLink 	= 'https://www.facebook.com/walkforourwater?ref=hl';
		
		$result = '	<h3>Dear '.$name.',</h3>
							<p style="font-size:17px;">
								Thank you so much for registering for the Walk for Our Water!!
							</p>
							<p>
								Please arrive at 9:30am on October 3, to sign in and claim your raffle tickets. 
								The Walk starts at the entrance to '.$location.' promptly at '.$startTime. '
								See the <a href="https://walkforourwater.org/events/'.$eventID.'/schedule" target="_blank">event schedule</a> for more information.
							</p>
							<!-- Callout Panel -->
							<p style="padding:15px; background-color:#ECF8FF; margin-bottom: 15px;">
								<a href="https://walkforourwater.org/events/'.$eventID.'/directions" target="_blank">Click here</a> for details on how to get to '.$location.'. 
								Click <a href="'.$mapLink.'" target="_blank">link to map</a>.
								We\'ll be in touch with an update before the event. In the meantime, check out our <a href="'.$facebookLink.'" target="_blank">FB page </a>.
							</p><!-- /Callout Panel -->											
							<p>
								We look forward to seeing you on October 3rd!
							</p>
							<p>
								Sincerely, Nicole and the Walk for Our Water Team
							</p>';
							
		return $result;
	}
	
	public static function newDonation( $name, $amount ){
		return 'Dear '.$name.',<br/>
					<p>Thank you for your donation. Your $'.$amount.' will help keep the bronx river clean.</p>
				';
	}
	
}


?>