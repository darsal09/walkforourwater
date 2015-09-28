<?php
class emailTemplates{
	
	private function __construct(){
		
	}
	
	public static function header(){
		$header = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head>
					<!-- If you delete this meta tag, Half Life 3 will never be released. -->
					<meta name="viewport" content="width=device-width" />

					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
					<title>Walk For Our Water Emails</title>
					</head>
					 
					<body bgcolor="#FFFFFF" style="margin:0; padding:0;">

					<!-- HEADER -->
					<table width="100%" bgcolor="#EFEFEF">
						<tr>
							<td></td>
							<td class="header container" >				
								<div  style="padding:15px; max-width:600px; margin:0 auto; display:block;">
									<table>
										<tr>
											<td><img style="max-width:100%;" src="https://walkforourwater.org/images/walkforourwaterlogo.png" /></td>
										</tr>
									</table>
								</div>
							</td>
							<td></td>
						</tr>
					</table><!-- /HEADER -->';
		return $header;
	}
	
	public static function body( $message){		
		$result = '					<!-- BODY -->
					<table width="100%">
						<tr>
							<td></td>
							<td style="display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;" bgcolor="#FFFFFF">
								<div style="padding:15px; max-width:600px; margin:0 auto; display:block;">
									<table>
										<tr>
											<td>';
													$result .= $message;
		$result .= '						</td>
								</tr>
							</table>
						</div><!-- /content -->
					</td>
					<td></td>
				</tr>
			</table><!-- /BODY -->';
		
		return $result;
	}
	
	public static function footer( $links = []){
		$facebookLink 	= 'https://www.facebook.com/walkforourwater?ref=hl';
		$twitterLink 	= 'https://twitter.com/@Walk4OurWater';
		$instagramLink 	= 'http://instagram.com/walkforourwater';
		$emailLink 		= 'info@walkforourwater.org';
		$phone 			= '(646) 450-6257';
		
		$footer = '			<!-- FOOTER -->
			<table style="width: 100%; clear:both!important;">
				<tr>
					<td></td>
					<td style="display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;" bgcolor="#FFFFFF">
							<!-- content -->
							<div style="padding:15px; max-width:600px; margin:0 auto; display:block;">
									<!-- social & contact -->
									<table style="background-color:#ebebeb;" width="100%">
										<tr>
											<td>
												
												<!-- column 1 -->
												<table align="left" style="width:270px; float:left; overflow:hidden;padding:3px;margin-right:8px;">
													<tr>
														<td>																
															<h5 class="">Connect with Us:</h5>
															<p style="text-align:center;">
																<a href="'.$facebookLink.'" style="display:block; color:white; width:100%; margin-bottom:3px; padding:5px; background-color: #3B5998!important;">Facebook</a> 
																<a href="'.$twitterLink.'" style="display:block; color:white; width:100%; margin-bottom:3px; padding:5px; background-color: #1daced!important;">Twitter</a> 
																<a href="'.$instagramLink.'" style="display:block; color:white; width:100%; margin-bottom:3px; padding:5px; background-color: #DB4A39!important;">Instagram</a></p>
														</td>
													</tr>
												</table><!-- /column 1 -->	
												
												<!-- column 2 -->
												<table align="left" style="width:270px; float:left; overflow:hidden padding:3px;margin-left:8px;">
													<tr>
														<td>				
															<h5>Contact Info:</h5>												
															<p>
																Phone: <strong>'.$phone.'</strong><br/>
																Email: <strong><a href="emailto:'.$emailLink.'">info@walkforourwater.org</a></strong>
															</p>
							
														</td>
													</tr>
												</table><!-- /column 2 -->
												
												<span style="clear:both;"></span>	
											</td>
										</tr>
									</table><!-- /social & contact -->
							<table>
							<tr>
								<td align="center">
									<p>
										<a href="#">Terms</a> |
										<a href="#">Privacy</a> |
										<a href="#"><unsubscribe>Unsubscribe</unsubscribe></a>
									</p>
								</td>
							</tr>
						</table>
							</div><!-- /content -->
					</td>
					<td></td>
				</tr>
			</table><!-- /FOOTER -->
			</body>
			</html>';
		
		return $footer;
	}
	
	
	
	
}
?>