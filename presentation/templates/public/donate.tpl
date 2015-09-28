{load_presentation_object filename="donateController" foldername="public" assign="obj"}
	<div class="row">
		<div class="col-md-8">
			<form method="POST" id="donateForm">
				<div class="panel panel-default" style="background-color:#FAFAFA;">
					<div  class="panel-heading">
						<h3>Your Gift</h3>
						<p>Proceeds support the <a href="http://www.bronxriver.org/" target="_blank">Bronx River Alliance</a> and Walk for Our Water.</p>
					</div>
					<div class="panel-body">
							<h3>Donation Amount</h3>
							<div>
								<div class="form-group">
										<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:100px;"><input id="donation_amount_10" type="radio" name="giftAmount" class="donation_amount_option amounts" value="10"  /> $10</label> 
										<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:100px;"><input id="donation_amount_25" type="radio" name="giftAmount" class="donation_amount_option amounts" value="25"  /> $25</label> 
										<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:100px;"><input id="donation_amount_50" type="radio" name="giftAmount" class="donation_amount_option amounts" value="50"  /> $50</label> 
										<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:100px;"><input id="donation_amount_100" type="radio" name="giftAmount" class="donation_amount_option amounts" value="100"  /> $100</label>
										<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:100px;"><input id="other_amount" type="radio" name="giftAmount" class="donation_amount_option" value="-1"  /> Other</label>
									<div id="other_amount_div">	
										<label>Other Gift Amount</label><br/>
										<div class="input-group">
										  <span class="input-group-addon">$</span>
										  <input type="text" class="form-control input-small" aria-label="Amount (to the nearest dollar)" id=amount name="amount" value="{$obj->mP['amount']}"/>
										</div>
									</div>
								</div>
							</div>
						<h3>Your Information</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="first_name" class="control-label">First Name</label><br/>
									<input class="form-control" name="first_name" type="text"  value="{$obj->mP[ 'first_name' ]}" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="last_name" class="control-label">Last Name</label><br/>
									<input class="form-control" name="last_name" type="text"  value="{$obj->mP[ 'last_name' ]}" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
									  <div class="form-group">
											<label for="email" class="control-label">Email</label><br/>
											<input class="form-control"  id=email name="email" type="email" value="{$obj->mP[ 'email' ]}" />
									</div>
								<div class="form-group">
								  <label class="checkbox" for="donation_email_opt_in">
										<input name="email_updates" type="hidden" value="0" />
										<input checked="checked" id="donation_email_opt_in" name="emailUpdates" type="checkbox" value="1" /> Send email updates
									</label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  <label for="phone" class="control-label">Phone</label><br/>
								  <input class="form-control" name="phone" type="tel" value="{$obj->mP[ 'phone' ]}"/>
								</div>
							</div>
						</div>	
							<h3>Address Information</h3>
						<div class="row">	
							<div class="col-md-6">
								<div class="form-group">
									<label for="address" class="control-label">Address</label><br/>
									<input class="form-control" name="address" type="text"  value="{$obj->mP[ 'address' ]}" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="city" class="control-label">City</label><br/>
									<input class="form-control" name="city" type="text" value="{$obj->mP[ 'city' ]}" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  <label for="state" class="control-label">State</label><br/>
								  <select class="form-control" name="state">
										<option value="">Select Your State</option>
										<option value="AL">Alabama</option>
										<option value="AK">Alaska</option>
										<option value="AZ">Arizona</option>
										<option value="AR">Arkansas</option>
										<option value="CA">California</option>
										<option value="CO">Colorado</option>
										<option value="CT">Connecticut</option>
										<option value="DE">Delaware</option>
										<option value="DC">District of Columbia</option>
										<option value="FL">Florida</option>
										<option value="GA">Georgia</option>
										<option value="HI">Hawaii</option>
										<option value="ID">Idaho</option>
										<option value="IL">Illinois</option>
										<option value="IN">Indiana</option>
										<option value="IA">Iowa</option>
										<option value="KS">Kansas</option>
										<option value="KY">Kentucky</option>
										<option value="LA">Louisiana</option>
										<option value="ME">Maine</option>
										<option value="MD">Maryland</option>
										<option value="MA">Massachusetts</option>
										<option value="MI">Michigan</option>
										<option value="MN">Minnesota</option>
										<option value="MS">Mississippi</option>
										<option value="MO">Missouri</option>
										<option value="MT">Montana</option>
										<option value="NE">Nebraska</option>
										<option value="NV">Nevada</option>
										<option value="NH">New Hampshire</option>
										<option value="NJ">New Jersey</option>
										<option value="NM">New Mexico</option>
										<option value="NY">New York</option>
										<option value="NC">North Carolina</option>
										<option value="ND">North Dakota</option>
										<option value="OH">Ohio</option>
										<option value="OK">Oklahoma</option>
										<option value="OR">Oregon</option>
										<option value="PA">Pennsylvania</option>
										<option value="RI">Rhode Island</option>
										<option value="SC">South Carolina</option>
										<option value="SD">South Dakota</option>
										<option value="TN">Tennessee</option>
										<option value="TX">Texas</option>
										<option value="UT">Utah</option>
										<option value="VT">Vermont</option>
										<option value="VA">Virginia</option>
										<option value="WA">Washington</option>
										<option value="WV">West Virginia</option>
										<option value="WI">Wisconsin</option>
										<option value="WY">Wyoming</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="street" class="control-label">Zip</label><br/>
									<input class="form-control" name="zip" type="text" value="{$obj->mP[ 'zip' ]}" />
								</div>
							</div>
						</div>
					</div>
					<div class="panel-footer">
						 <input type=button class="btn btn-default btn-lg btn-warning" value="&laquo;Cancel">
						 <input type="submit" class="btn btn-default btn-lg btn-primary" name="submit_donation" value="Donate&raquo;">
					</div>
					<div class=error>
						<h1>Error Message:</h1>
						<div id=error_message>
							<p>
								There are errors in your information. Please go through the red input fields.
							</p>
						</div>
					</div>
				</div>
			</form>			
		</div>
		{include file="public/sideColumn.tpl"}
	</div>
	<div class="modal fade" id="alreadyExistModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">You have already registered!</h4>
      </div>
      <div class="modal-body">
        <p>The email you are using already exist in our system. Please <a href="/sign-in">Login</a>.</p>
      </div>
    </div>
  </div>
</div>

<script>
var donate = {
	init:function(){
		this.mForm = $( '#donateForm' );
		this.mFormID = 'donateForm';
		this.mErrorDIV = $( '.error' );
		this.mRadioInput = false;
		
		this.mErrors = {
			'first_name':false,
			'last_name':false,
			'address':false,
			'city':false,
			'zip':false,
			'state':false,
			'phone':false,
			'email':false,
			'emailUpdates':false,
			'giftAmount':false,
			'amount':false,
		};
		this.mRequired={
			'first_name':true,
			'last_name':true,
			'address':true,
			'city':true,
			'zip':true,
			'state':true,
			'phone':false,
			'email':true,
			'emailUpdates':true,
			'giftAmount':true,
			'amount':false
			
		};
		this.mValues ={
			'first_name':'',
			'last_name':'',
			'address':'',
			'city':'',
			'zip':'',
			'state':'',
			'phone':'',
			'email':'',
			'emailUpdates':'',
			'giftAmount':'',
			'amount':'',
		}
		this.mErrorDIV.hide();
		this.events();
	},
	
	events:function(){
		$( '#other_amount_div' ).hide();
		this.mForm.on( 'submit', { parent:this}, this.ui.onSubmitClicked);
		this.mForm.on( 'focusout change', 'input, select', { parent:this}, this.ui.onFocusOut);
		$('#other_amount').on( 'click', { parent:this}, this.ui.onOtherAmountClicked );
		$( 'input.amounts' ).on( 'click', { parent:this}, this.ui.onGiftAmountClicked);
		$( '#email' ).on( 'change focusout', { parent:this}, this.ui.onEmailChanged );
	},
	
	ui:{
		onGiftAmountClicked:function( e ){
			$( '#other_amount_div' ).hide();
		},
		
		onOtherAmountClicked:function( e ){
			$( '#other_amount_div' ).show();
		},
		
		onFocusOut:function( e){
			var that = e.data.parent;
		
			that.singleValidate(  this  );
		},
		
		onSubmitClicked:function( e ){
			var that = e.data.parent;
			that.validate()
			
			if( that.hasErrors()){
				e.preventDefault();
			}
		},
		
		onEmailChanged:function( e ){
			var that = e.data.parent;
			that.disableSubmit();
			
			var email =  $( e.currentTarget ).val();
			
			that.emailExist( email );
		}
	},
	
	enableSubmit:function(){
		$( '#submit_registration' ).removeAttr( 'disabled' );
	},
	
	disableSubmit:function(){
		$( '#submit_registration' ).attr( 'disabled', 'disabled' );
	},
	singleValidate:function( element ){
		this.mValues[ element.name ] = element.value;
		
		switch( element.type ){
			case 'text':
			case 'email':
			case 'select-one':
				if( element.value.length < 1 ){
					this.mErrors[ element.name ] = true;
				}else{
					this.mErrors[ element.name ] = false;
				}
				break;
			case 'radio':
				
				if( !$("input[name='"+element.name+"']").is(':checked')){					
					this.mErrors[ element.name ] = true;
				}else{
					this.mErrors[ element.name ] = false;
				}
				break;
		}
		
		if( this.mErrors[ element.name ] ){
			$( element ).closest( 'div.form-group' ).addClass( 'has-error' );
		}else{
			$( element ).closest( 'div.form-group' ).removeClass( 'has-error' );
		}

	},
	validate:function(){
		var elements = this.mForm.find( ':input' );
		var that = this;
		
		$.each( elements, function( index, element ){	
			that.mValues[ element.name ] = element.value;
			
			if( that.mRequired[ element.name ]){
				that.singleValidate( element );
			}
		});
		
		if( this.mValues[ 'giftAmount' ] == -1){
			var amount = parseFloat($( '#amount' ).val() ).toFixed( 2 );
			
			if( amount == 'NaN' || amount < 1 ){
				this.mErrors[ 'giftAmount' ] = true;
				$( '#other_amount' ).closest( 'div.form-group' ).addClass( 'has-error' );
			}else{
				this.mErrors[ 'giftAmount' ] = false;
				$( '#other_amount').closest( 'div.form-group' ).removeClass( 'has-error' );
			}
		}
	},
	
	hasErrors:function(){
		for( var x in this.mErrors ){
			if( this.mErrors[ x ]){
				this.mErrorDIV.show();
				return true;
			}
		}
		this.mErrorDIV.hide();
		return false;
	},
	
	submitForm:function(){		
		this.mForm.submit();
		
	},
	
	isFieldRequired:function( fields ){
		return this.mRequired[ fields ];
	},
	
	emailExist:function( email ){
		var that = this;
		var $el = $( '#email' ).closest( '.form-group' );
		
		$.post( '/api/public/checkEmail.php', 
				{
					email:email,
				},
				function( data){
					data = jQuery.parseJSON( data );
					$el.find( '#email_error' ).remove();
					
					if( !data.success ){
						that.enableSubmit();
						$el.removeClass( 'has-error' );
					}else{
						$el.addClass( 'has-error' );
						$el.append( '<span id=email_error>This email already exist in the database</span>' );
						that.showModal( 'alreadyExistModal' );						
					}
			}
		);
	},
	
	showModal:function( names ){
		$( '#'+names ).modal( 'show' );
	}
	
};

$( function() {
	donate.init();
});
</script>