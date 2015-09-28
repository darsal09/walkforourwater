{load_presentation_object filename="requestInfoController" foldername="public" assign="obj"}
	<div class="col-md-12" id=requestInfo>
		<div class="page-header">
			<h1 class="page-title">Request Information</h1>
		</div>
	</div>
	<div class="col-md-8">
		<div class="panel panel-default">
			<div  class="panel-heading">
				<h3 class="panel-title"">Your Information</h3>
			</div>
			<div class="panel-body">
				<p>All the fields are required.</p>
				
						<form method=post role=form id=requestInfoForm>
							<div class=form-group>
								<div class=row>
									<div class="col-md-4 {if isset( $obj->mE[ 'name' ] ) && $obj->mE[ 'name' ]}has-error{/if}" id=fg_name>
										<label>Name</label>
										<input type=text name=name class=form-control placeholder="enter name" value="{$obj->mP[ 'name' ]}">
										<span id=name_error></span>
									</div>
									<div class="col-md-4 {if isset( $obj->mE[ 'phone' ] ) && $obj->mE[ 'phone' ]}has-error{/if}" id=fg_phone>
										<label>Phone</label>
										<input type=text name=phone class=form-control placeholder="enter phone number" value="{$obj->mP[ 'phone' ]}">
										<span id=phone_error></span>
									</div>				
									<div class="col-md-4 {if isset( $obj->mE[ 'email' ] ) && $obj->mE[ 'email' ]}has-error{/if}" id=fg_email>
										<label>Email</label>
										<input type=text name=email class=form-control placeholder="enter email" value="{$obj->mP[ 'email' ]}">
										<span id=email_error></span>
									</div>
								</div>
							</div>
							<div class=form-group>
								<div class=row>
									<div class="col-md-12 {if isset( $obj->mE[ 'subject' ] ) && $obj->mE[ 'subject' ]}has-error{/if}"  id=fg_subject>
										<label>Subject</label>
										<input type=text name=subject class=form-control placeholder="enter subject" value="{$obj->mP[ 'subject' ]}">
										<span id=subject_error></span>
									</div>
								</div>
							</div>
							<div class=form>
								<div class=row>
									<div class="col-md-12 {if isset( $obj->mE[ 'message' ] ) && $obj->mE[ 'message' ]}has-error{/if}" id=fg_message>
										<label>Message:</label>
										<textarea name=message class="form-control input-medium" placeholder="write your questions or about the information you want us to provide">{$obj->mP[ 'message' ]}</textarea>
										<span id=message_error></span>
									</div>
								</div>
							</div>
			</div>			
			<div class="panel-footer">
							<div class=form-group>
								<input type=submit name=add_registration class="btn btn-default btn-primary btn-lg" value="Register Me&raquo;">
							</div>				
			</div>
		</div>
		</form>
			<div class=error style="display:none;color:red;">
				<h1>Error Message:</h1>
				<div id=error_message>
					<p>
						There are errors in your input. Please fill out all fields in red.
					</p>
				</div> 
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			</div>
	</div>
	{include file="sideColumn.tpl"}
<script>
	var requestInfo={
					init:function(){
						this.el = $( '#requestInfo' );
						this.required = {
										'name':true,
										'email':true,
										'phone':false,
										'subject':true,
										'message':true
										};
						
						if( this.el.length == 0){
							console.log( 'element to define this page does not exist' );
							return 0;
						}
						
						this.events();
					},
					validate: function(){
						var flag = true;
						var elements = document.getElementById( 'requestInfoForm' ).elements;
												
						for( x in elements ){
							if( this.required[ elements[ x].name ] && elements[ x ].value == '' ){
								flag = false;
								$( '#fg_'+elements[ x ].name ).addClass( 'has-error' );
							}else{
								$( '#fg_'+elements[ x ].name ).removeClass( 'has-error' );
							}
						}

						return flag;
					},
					displayMessage: function( message ){
						var element = $( '#error_message' );
						
						element.show();
						element.html( '<p>&nbsp;</p>'+message );
						
					},
					events:function(){
						var that = this;
						
						$('#requestInfoForm' ).on( 'submit', function( e ){							
							e.preventDefault();
							
							if( !that.validate() ){
								e.preventDefault();	
								that.displayMessage( 'Please fill out all the field in red' );
								return 0;
							}
							
							that.submitForm();
						});
					},
					submitForm:function(){
						var that = this;
						
						$.post('/request-infos',
								$('#requestInfoForm' ).serialize(),
								 function( data ){
									console.log( data );
							})
							.fail( function( jqXHR, textStatus){
								console.log( textStatus );
							});
					}
					
	}
	$(document ).ready( function(){
		requestInfo.init();
	});
</script>
