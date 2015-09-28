<?php
class Paypal extends orm
{
	protected $mIDParameter = array( 'id' => 'id');
	protected $mFields = array();
	protected $mReq = array( 'amount' => true, 'receiptID' => true );
	public $mErrors = array();
	
	public $mAmount;
	public $mCurrencyCode = 'USD';
	public $mPayPalURL = 'https://www.paypal.com/xclick/business=vincenzamarie@gmail.com';
//	public $mPayPalURL = 'https://sandbox.paypal.com/xclick/business=darsal09@yahoo.com';

	public $mReturnUrl = 'http://www.walkforourwater.org/paypal.php';
	public $mCancelUrl = 'http://www.walkforourwater.org/cancel.php';
	public $mNotifyUrl = 'http://www.walkforourwater.org/my_ipn.php';
	public $mDate = 'Saturday Oct. 03 at 10am';
	public $mReceiptID;
	public $mTitle;
	public $mTableName 	= 'registration';
	public $mType 		= 'Registration';
	public $mEmail;
	public $mAddress;
	public $mCity;
	public $mState;
	public $mZip;
	public $mCountry	= 'US';
	public $mFirstName;
	public $mLastName;
	
	public function __construct( $mP = array() )
	{
		if( isset( $mP[ 'type' ])){
			$this->setType( $mP[ 'type' ]);
		}
		
		if( isset( $mP[ 'amount' ] ) )
			$this->setAmount( $mP[ 'amount' ] );
 
		if( isset( $mP[ 'currencyCode' ] ) )
			$this->setCurrencyCode( $mP[ 'currencyCode' ] );
 
		if( isset( $mP[ 'returnUrl' ] ) )
			$this->setReturnUrl( $mP[ 'returnUrl' ] );
 
		if( isset( $mP[ 'cancelUrl' ] ) )
			$this->setCancelUrl( $mP[ 'cancelUrl' ] );
 
		if( isset( $mP[ 'notifyUrl' ] ) )
			$this->setNotifyUrl( $mP[ 'notifyUrl' ] );
 
		if( isset( $mP[ 'receiptID' ] ) ){
			$this->mReturnUrl .= '/'.$mP[ 'receiptID' ];
			
			$this->setReceiptID( $mP[ 'receiptID' ] );
		}
			$this->setTitle( 'Walk For Our Water: '.$this->getDate().' '.$this->getType().' #'.$this->getReceiptID() );
		
		$this->setStatements();
		$this->checkErrors();
	}
	public function setType( $type ){
		$this->mType = $type;
	}
	
	public function setAmount( $amount )
	{
		$this->mAmount = $amount;
	}
 
	public function setCurrencyCode( $currencyCode )
	{
		$this->mCurrencyCode = $currencyCode;
	}
 
	public function setReturnUrl( $returnUrl )
	{
		$this->mReturnUrl = $returnUrl;
	}
 
	public function setCancelUrl( $cancelUrl )
	{
		$this->mCancelUrl = $cancelUrl;
	}
 
	public function setNotifyUrl( $notifyUrl )
	{
		$this->mNotifyUrl = $notifyUrl;
	}
 
	public function setReceiptID( $receiptID )
	{
		$this->mReceiptID = $receiptID;
	}
 
	public function setTitle( $title )
	{
		$this->mTitle = $title;
	}
	public function getType(){
		return $this->mType;
	}
	public function getAmount( )
	{
		return $this->mAmount;
	}
 
	public function getCurrencyCode( )
	{
		return $this->mCurrencyCode;
	}
 
	public function getReturnUrl( )
	{
		return $this->mReturnUrl;
	}
 
	public function getCancelUrl( )
	{
		return $this->mCancelUrl;
	}
 
	public function getNotifyUrl( )
	{
		return $this->mNotifyUrl;
	}
 
	public function getReceiptID( )
	{
		return $this->mReceiptID;
	}
 
	public function getTitle( )
	{
		return $this->mTitle;
	}
 
	public function getDate()
	{
		return $this->mDate;
	}
	
	public function getFirstName(){
		return $this->mFirstName;
	}
	
	public function getLastName(){
		return $this->mLastName;
	}
	
	public function getAddress(){
		return $this->mAddress;
	}
	
	public function getCity(){
		return $this->mCity;
	}
	
	public function getZip(){
		return $this->mZip;
	}
	
	public function getState(){
		return $this->mState;
	}
	public function getCountry(){
		return $this->mCountry;
	}
	
	public function getEmail(){
		return $this->mEmail;
	}
	
	public function send()
	{						
		$this->mPayPalURL .= '&item_name = '.urlencode( $this->getTitle() ).
					'&item_number='.$this->getType().'-'.$this->getReceiptID().
					'&amount='.$this->getAmount().
					'&code='.$this->getCurrencyCode().
					'&return='.$this->getReturnUrl().
					'&cancel='.$this->getCancelUrl().
					'&first_name='.$this->getFirstName().
					'&last_name='.$this->getLastName().
					'&address1='.$this->getAddress().
					'&city='.$this->getCity().
					'&zip='.$this->getZip().
					'&state='.$this->getState().
					'&country='.$this->getCountry().
					'&email='.$this->getEmail().
					'&notify='.$this->getNotifyUrl();
					
		header( 'Location:'.$this->mPayPalURL );		
	}

}