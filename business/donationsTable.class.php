<?php
class donationsTable{
	private function __construct(){
		
	}
	
	public static function getAll(){
		$sql = 'SELECT
					d.register_id,
					u.first,
					u.last,
					d.added_on AS date,
					d.status,
					d.type,
					e.title
				FROM donate d
				LEFT JOIN users u on u.user_id = d.user_id
				LEFT JOIN events e on e.event_id = d.event_id
				ORDER BY d.added_on, d.modefied_on DESC';
		return databaseHandler::getAll( $sql );
	}
	
	public static function addDonation( $data ){
		$sql = 'INSERT INTO
				donate( user_id, status, phone, email_updates, gift_amount )
				VALUES( :userID, :status, :phone, :emailUpdates, :giftAmount )';
		
		return databaseHandler::Execute( $sql, [ 
												':userID' => $data[ 'userID' ],
												':status' => $data[ 'status' ],
												':phone' => $data[ 'phone' ],
												':emailUpdates' => $data[ 'emailUpdates' ],
												':giftAmount' => $data[ 'giftAmount' ],
											]);
	}
		
}
?>