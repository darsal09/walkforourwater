<?php /* Smarty version Smarty-3.1.8, created on 2015-09-01 22:58:21
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\public\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:682655da6f40338386-71052713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8989521bfb9f4116873b8e05903e17b31a926100' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\public\\register.tpl',
      1 => 1441162699,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '682655da6f40338386-71052713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55da6f40557308_75945541',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55da6f40557308_75945541')) {function content_55da6f40557308_75945541($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"registerController",'foldername'=>"public",'assign'=>"obj"),$_smarty_tpl);?>

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
										<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['first'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['first']){?>has-error<?php }?>">
											<label>First Name</label>
											<input type=text name=first class=form-control placeholder="enter first name" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['first'];?>
">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['last'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['last']){?>has-error<?php }?>">
											<label>Last Name</label>
											<input type=text name=last class=form-control placeholder="enter last name" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['last'];?>
">
										</div>
									</div>
								</div>
								<div class=row>
									<div class="col-md-6">
										<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['email'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['email']){?>has-error<?php }?>">
											<label>Email</label>
											<input type=email name=email class=form-control placeholder="enter email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['email'];?>
">
										</div>
									</div>				
									<div class="col-md-6">
										<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['phone'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['phone']){?>has-error<?php }?>">
											<label>Phone</label>
											<input type=text name=phone class=form-control placeholder="enter phone number" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['phone'];?>
">
										</div>
									</div>
								</div>
								<div class=row>
									<div class="col-md-6">
										<div class="form-group  <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['address'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['address']){?>has-error<?php }?>">
											<label>Address</label>
											<input type=text name=address class=form-control placeholder="enter address" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['address'];?>
">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group  <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['city'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['city']){?>has-error<?php }?>">
											<label>City</label>
											<input type=text name=city class=form-control placeholder="enter city" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['city'];?>
">
										</div>
									</div>
							</div>
								<div class=row>
									<div class="col-md-6">
										<div class="form-group  <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['state'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['state']){?>has-error<?php }?>">
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
										<div class="form-group  <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['zip'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['zip']){?>has-error<?php }?>">
											<label>Zip</label>
											<input type=text name=zip class=form-control placeholder="enter zip" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['zip'];?>
">
										</div>
									</div>
							</div>
							<div class=row>
									<div class="col-md-6">
										<div class="form-group  <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['country'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['country']){?>has-error<?php }?>">
											<label>Country</label>
											<input type=text name=country class=form-control placeholder="enter country" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['country'];?>
">
										</div>
									</div>
							</div>
							<div class=row>
									<div class=col-md-12>
										<div class="form-group <?php if (isset($_smarty_tpl->tpl_vars['obj']->value->mE['options'])&&$_smarty_tpl->tpl_vars['obj']->value->mE['options']){?>has-error<?php }?>">
											<h3>I would like to do the </h3>
											<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:150px;"><input type="radio" name=options value="Walking" <?php if ($_smarty_tpl->tpl_vars['obj']->value->mP['options']=="Walking"){?>checked<?php }?> > 3K Walk </label> 
											<label style="color:white;font-size:17px;background-color:blue;padding:10px; margin:5px; width:150px;"><input type="radio" name=options value="Running" <?php if ($_smarty_tpl->tpl_vars['obj']->value->mP['options']=="Running"){?>checked<?php }?> > 5K Run</label>
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
		<?php echo $_smarty_tpl->getSubTemplate ("public/sideColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
</script><?php }} ?>