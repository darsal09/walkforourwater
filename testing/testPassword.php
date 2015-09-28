<?php
include( 'index.php' );
//define( 'HASH_PREFIX', 'my favorite sport' );
$p = new password([ 'password' => 'Soccer09!']);

$salt = $p->getSalt();
$password = $p->getPassword();
$cost = $p->getCost();

echo 'Password: '.$password.'</p>';

$hashed = crypt( $password );//, $salt );

echo '<p>Hashed: '.$hashed.'</p>';
echo '<p>Result: '.crypt( $password, $hashed ).'</p>';
if ( $hashed === crypt('Soccer09!', $hashed ) ) {
  echo '<p>The password is good</p>';
}else{
	echo 'The Passowr is not good</p>';
}
?>