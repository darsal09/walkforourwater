function hide( ids )
{
	var inputs = document.getElementById( ids );
	
	inputs.style.display = 'none';
}

function register(){	
	
	return false;
	showModal( 'register' );
}

function showModal( ids ){
	$( '#'+ids ).modal( 'show' );
}

function hideModal( ids ){
	$( '#'+ids ).modal( 'hide' );
}

