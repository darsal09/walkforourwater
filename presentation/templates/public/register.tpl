{load_presentation_object filename="registerController" foldername="public" assign="obj"}
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div  class="panel-heading">
					<h3>Registration</h3>
				</div>
				<div class="panel-body" style="background-color:#FAFAFA;">
					<h3>Your Information</h3>
					<hr>					
						<form method=post role=form id=registrationForm >
								<div class=row>
									<div class="col-md-6">
										<div class="form-group {if isset( $obj->mE[ 'first' ] ) && $obj->mE[ 'first' ]}has-error{/if}">
											<label>First Name</label>
											<input type=text name=first class=form-control placeholder="enter first name" value="{$obj->mP[ 'first' ]}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group {if isset( $obj->mE[ 'last' ] ) && $obj->mE['last']}has-error{/if}">
											<label>Last Name</label>
											<input type=text name=last class=form-control placeholder="enter last name" value="{$obj->mP[ 'last' ]}">
										</div>
									</div>
								</div>
								<div class=row>
									<div class="col-md-6">
										<div class="form-group {if isset( $obj->mE[ 'email' ] ) && $obj->mE[ 'email' ]}has-error{/if}">
											<label>Email</label>
											<input type=email name=email class=form-control placeholder="enter email" id="email" value="{$obj->mP[ 'email' ]}">
										</div>
									</div>				
									<div class="col-md-6">
										<div class="form-group {if isset( $obj->mE[ 'phone' ] ) && $obj->mE[ 'phone' ]}has-error{/if}">
											<label>Phone</label>
											<input type=text name=phone class=form-control placeholder="enter phone number" value="{$obj->mP[ 'phone' ]}">
										</div>
									</div>
								</div>
								<div class=row>
									<div class="col-md-6">
										<div class="form-group  {if isset( $obj->mE[ 'address' ] ) && $obj->mE[ 'address' ]}has-error{/if}">
											<label>Address</label>
											<input type=text name=address class=form-control placeholder="enter address" value="{$obj->mP[ 'address' ]}">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group  {if isset( $obj->mE[ 'city' ] ) && $obj->mE[ 'city']}has-error{/if}">
											<label>City</label>
											<input type=text name=city class=form-control placeholder="enter city" value="{$obj->mP[ 'city' ]}">
										</div>
									</div>
							</div>
								<div class=row>
									<div class="col-md-6">
										<div class="form-group  {if isset( $obj->mE[ 'state' ] ) && $obj->mE[ 'state']}has-error{/if}">
											<label>State</label>
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
										<option value="NY" selected>New York</option>
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
										<div class="form-group  {if isset( $obj->mE[ 'zip' ] ) && $obj->mE[ 'zip' ]}has-error{/if}">
											<label>Zip</label>
											<input type=text name=zip class=form-control placeholder="enter zip" value="{$obj->mP[ 'zip' ]}">
										</div>
									</div>
							</div>
							<div class=row>
									<div class="col-md-6">
										<div class="form-group  {if isset( $obj->mE[ 'country' ] ) && $obj->mE[ 'country' ]}has-error{/if}">
											<label>Country</label>
											<input type=text name=country class=form-control placeholder="enter country" value="{$obj->mP[ 'country' ]}">
										</div>
									</div>
							</div>
							<div class=row>
									<div class=col-md-12>
										<div class="form-group {if isset( $obj->mE[ 'options' ] ) && $obj->mE[ 'options' ]}has-error{/if}">
											<h3>I would like to do the </h3>
											<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:150px;"><input type="radio" name=options value="Walking" {if $obj->mP[ 'options' ] == "Walking"}checked{/if} > 3K Walk </label> 
											<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:150px;"><input type="radio" name=options value="Running" {if $obj->mP[ 'options' ] == "Running"}checked{/if} > 5K Run</label>
										</div>
									</div>
							</div>
							<h3 style="line-height:2">Registration Type</h3>
							<div class="form-group red">
								<label style="font-size:15px;padding:3px; "><input type=radio name=donation_amount value="5"> Standard Registration - $5.00 donation </label><br/>
								<label style="font-size:15px;padding:3px; "><input type=radio name=donation_amount value="10"> $10 donation - includes 2 raffle tickets </label><br/>
								<label style="font-size:15px;padding:3px; "><input type=radio id="other" name="donation_amount" value="-1"> Donate a different amount</label><br/>
								<span id=your_own_amount>$<input type=text id=other_amount name=other_amount><br/></span>
								<label style="font-size:15px;padding:3px; "><input type=radio name="donation_amount" value="0"> I don't want to make a donation at this time</label>								
							</div>
							<p>&nbsp;</p>
					<h3>Waiver and Release of Liability</h3>
					<div class="form=group">
						<p>
							<textarea class="form-control" style="height:100px;">I acknowledge that my participation in the Walk for Our Water involves risk I hereby release and hold harmless all individuals associated with the event. I certify that I am physically fit to participate in the event and understand that there are risks involved. I hereby give my permission to the media to use my name and photograph.</textarea>
						</p>
						<input type=checkbox id=waiver value="waiver"> Accept
					</div>
				</div>			
				<div class="panel-footer">
					<div class=form-group>
						<input type=submit name=add_registration id="submit_registration" class="btn btn-default btn-primary btn-lg" value="Register Me&raquo;">
						<input type=button class="btn btn-default btn-warning btn-lg pull-right" value="Cancel">
						<br/>
						<p id="redirect" style="color:blue;background:white;padding:5px;font-weight:bold;clear:both;">
							Note: You will be sent to paypal to complete your registration. 
						</p>
					</div>
				</div>
			</div>
				</form>
			
			<div class="errors" style="display:none;color:red;">
				<h1>Error Message:</h1>
				<div id=error_message>
					<p>
						There are errors in your information. Please fill out all fields in red.
					</p>
				</div>
				<p>&nbsp;</p>
			</div>
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
	
	<script type="text/javascript">
		var registration = {
			init:function(){
				this.mRequired = {
					'first':true,
					'last':true,
					'phone':true,
					'email':true,
					'address':true,
					'city':true,
					'zip':true,
					'state':true,
					'options':true
				};
				
				this.mErrors = {
					'first':false,
					'last':false,
					'phone':false,
					'email':true,
					'address':false,
					'city':false,
					'zip':false,
					'state':false,
					'options':false,
					'donation':true
				};
				
				$( '#your_own_amount' ).hide();
				$( '#redirect' ).hide();
				
				this.disableSubmit();
				this.events();
			},
			
			events:function(){
			
				$( '#registrationForm' ).on( 'submit', { parent:this}, this.ui.onSubmitForm);
				$( '#registrationForm' ).on( 'focusout', 'input', { parent:this}, this.ui.onInputChanged);
				$( "input[name='donation_amount']" ).on( 'click', { parent:this}, this.ui.onOtherClicked);
				$( '#email' ).on( 'change', { parent:this}, this.ui.onEmailChanged );
				$( '#waiver').on( 'click', { parent:this}, this.ui.onWaiverClicked);
			},
			
			ui:{
				onWaiverClicked:function( e ){
					if( $( '#waiver' ).is( ':checked' ) ) {
						e.data.parent.enableSubmit();
					}else{
						e.data.parent.disableSubmit();
					}
				},
				onSubmitForm:function(e){
					var that = e.data.parent;
					
					if( !that.validate() ){
						e.preventDefault();
						console.log( 'no validation' );
						return;
					}
				},
				
				onInputChanged:function( e ){
					e.data.parent.singleElementValidation( this );
				},
				
				onOtherClicked:function( e ){
					var amount = $( "input[ name='donation_amount']:checked").val();
					if( amount == -1 ){
						$( '#your_own_amount' ).show();					
					}else{						
						$( '#your_own_amount' ).hide();
					}
					
					if( amount == 0){
						$( '#redirect' ).hide();
					}else{
						$( '#redirect' ).show();
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
			
			validate:function(){
				var that = this;
				var flag = true;
				var elements = document.getElementById( 'registrationForm' ).elements;
				
				$.each(elements, function( index, element ){
					if( !that. singleElementValidation( element ) ){
						flag = false;
					}
				});
				
				if( !this.validateDonation() ){
					flag = false;
				}
			
				return flag;						
			},
			singleElementValidation:function( element ){
				var flag = true;
				
				if( this.mRequired[ element.name ] && element.value == '' ){
					flag = false;
					$( element ).closest( '.form-group' ).addClass( 'has-error' ) ;
				}else{
					$( element ).closest( '.form-group' ).removeClass( 'has-error' );
				}
				
				return flag;
			},
			
			validateDonation:function(){
				var flag = true;
				
				if( !$("input[name='donation_amount']").is(':checked') ){
					flag = false;
					$( "input[name='donation_amount']" ).closest( '.form-group' ).addClass( 'has-error' );
				}else{
					if( $( "input[ name='donation_amount']:checked").val() == -1 ){
						var amount = parseInt( $( '#other_amount' ).val(), 10 );
						
						if( isNaN( amount ) || amount < 1 ){							
							flag = false;
							$( "input[name='donation_amount']" ).closest( '.form-group' ).addClass( 'has-error' );
						}else{
							$( "input[name='donation_amount']" ).closest( '.form-group' ).removeClass( 'has-error' );
						}
					}else{
						$( "input[name='donation_amount']" ).closest( '.form-group' ).removeClass( 'has-error' );
					}
				}				
				return flag;
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
							
							if( !data.success ){
								$el.removeClass( 'has-error' );
								$el.find( '#email_exist' ).remove();
								
							}else{
								$el.addClass( 'has-error' );
								$el.append( '<span id=email_exist>This email already exist in our system</span>' );
								$( '#alreadyExistModal' ).modal( 'show' );
							}
					}
				);
			}
		};
	$( function( ){
		registration.init();
	});
</script>