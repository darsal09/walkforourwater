<?php
include( '../../bootstrap.php' );
	
$id = sanitize::sani( $_GET[ 'id' ], 'INTIGER' );

$packages = openPlaysModel::getPackages( array( ':type' => 'Individual' ) );

$size = sizeof( $packages );

$r = '';						
						for( $i = 0; $i < $size; $i++ )
							$r .= '	<a class=list-group-item href="javascript:studentAddPackage( '.$id.', '.$packages[ $i ][ 'id' ].', '.$packages[ $i ][ 'price' ].', '.$packages[ $i ][ 'amount' ].' );">'.$packages[ $i ][ 'title' ].' - $'.$packages[ $i ][ 'price' ].'.00</a>';
					
$r .= '						</div>
					</div>
				</div>
			</div>';

return print_r(  $r );
?>