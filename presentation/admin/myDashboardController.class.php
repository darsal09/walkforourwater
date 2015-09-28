<?php
class myDashboardController{
	public $mRegistrations;
	public $mUsers;
	public $mDonations;
	public $mEvents;
	
	public function __construct(){
		
		if( !session::isAdmin() ){
			helper::redirect( '/sign-in');
		}
	}
	
	public function init(){
		$this->mRegistrantions = registrationsTable::getAll();
		$this->mUsers = usersTable::getAll();	
		$this->mEvents = eventsTable::getAll();		
		$this->mDonations = donationsTable::getAll();
	}
}
?>