{load_presentation_object filename="registrantController" foldername="admin" assign="obj"}

<div class="col-md-12" id=registrant>
	<div class="page-header">
		<h1>
			Registrant Information
			<span class="pull-right">
				<a href="{$obj->mLinkToEdit}" class="btn btn-default btn-success edit">Edit&raquo;</a>
				<a href="{$obj->mLinkToDelete}" class="btn btn-default btn-warning delete">Delete&raquo;</a>
			</span>

		</h1>
	</div>
</div>
<div id=spinner style="display:none;">
	<img src="/images/loader.gif">
</div>
<div id=error_message style="display:none;color:red;padding:10px;"> 
</div>
<div class="col-md-12" id=content>
	<div class="form-group">
		<label>Name:</label>
		<span id=first>{$obj->mP[ 'first' ]}</span> <span id=last>{$obj->mP[ 'last' ]}</span>
	</div>
	<div class="form-group">
		<label>Phone:</label>
		<span id=phone>{$obj->mP[ 'phone' ]}</span>
	</div>
	<div class="form-group">
		<label>Email:</label>
		<span id=email>{$obj->mP[ 'email' ]}</span>
	</div>
	<div class="form-group">
		<label>City:</label>
		<span id=city>{$obj->mP[ 'city' ]}</span>
	</div>
	<div class="form-group">
		<label>Zip:</label>
		<span id=zip>{$obj->mP[ 'zip' ]}</span>
	</div>
	<div class="form-group">
		<label>Status:</label>
		<span id=status>{$obj->mP[ 'status' ]}</span>
	</div>
</div>


	<div class="modal fade" id=registrantModal tabindex="-1" role="dialog" aria-labelledby="#addPackageLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						 <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h3 class="modal-title" id="myModalLabel">Edit Registrant Information</h3>
						</div>
						<div class="modal-body">
							<form id=registrantForm>
								<input type=hidden name=id id="id" value="{$obj->mP[ 'register_id' ]}">
								<div class=row>
									<div class=col-md-6>
										<div class="form-group" id="first_error">
											<label>First</label>
											<input type=text name=first class="form-control input-medium" value="{$obj->mP[ 'first' ]}">
										</div>
									</div>
									<div class=col-md-6>
										<div class="form-group" id="last_error">
											<label>Last</label>
											<input type=text name=last class="form-control input-medium" value="{$obj->mP[ 'last' ]}">
										</div>
									</div>
								</div>
								<div class=row>
									<div class=col-md-6>
										<div class="form-group" id="phone_error">
											<label>Phone</label>
											<input type=text name=phone class="form-control input-medium" value="{$obj->mP[ 'phone' ]}">
										</div>
									</div>
									<div class=col-md-6>
										<div class="form-group"  id="email_error">
											<label>Email</label>
											<input type=text name=email class="form-control input-medium" value="{$obj->mP[ 'email' ]}">
										</div>
									</div>
								</div>
								<div class=row>
									<div class=col-md-6>
										<div class="form-group"  id="city_error">
											<label>City</label>
											<input type=text name=city class="form-control input-medium" value="{$obj->mP[ 'city' ]}">
										</div>
									</div>
									<div class=col-md-6>
										<div class="form-group" id="zip_error">
											<label>Zip</label>
											<input type=text name=zip class="form-control input-medium" value="{$obj->mP[ 'zip' ]}">
										</div>
									</div>
								</div>
								<div class=row>
									<div class=col-md-6>
										<div class="form-group" id="status_error">
											<label>Status</label>
											<input type=text name=status class="form-control input-medium" value="{$obj->mP[ 'status' ]}">
										</div>
									</div>
								</div>
								<div class=row>
									<div class=col-md-12>
										<input type=submit class="btn btn-default btn-primary btn-lg" value="Save&raquo;">
										<input type=button class="btn btn-default btn-warning btn-lg cancel" value="Cancel&raquo;">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
	</div>
<script>
var registrant = {
	init:function(){
		this.errors = false;
		this.required = {
						'first':true,
						'last':true,
						'email':true,
						'phone':true,
						'city':true,
						'zip':true,
						'status':true
						};
						
		this.modal = 'registrantModal';
		
		this.el = $( '#registrant' );
		this.form = 'registrantForm';
		
		if( this.el.length == 0){
			return 0;
		}	
		
		this.events();
	},
	
	validate: function(){
		this.errors = false;
		var elements = document.getElementById( this.form ).elements;
		
		for( x in elements ){
			if( this.required[ elements[ x ].name ] && elements[ x ].value == ''){
				this.errors = true;
				this.displayErrors( elements[ x ].name, 'Empty field' );
			}else{
				this.hideErrors( elements[ x ].name );
			}
		}
		return !this.errors;
	},
	hideErrors: function( name ){
		$( '#'+name+'_error' ).removeClass( 'has-error' );
	},
	displayErrors: function( name, message){
		$( '#'+name+'_error' ).addClass( 'has-error' );
		$( '#'+name+'_message' ).html( message );
	},
	displayMessage: function( message ){
		$( '#error_message' ).show();
		$( '#error_message' ).html( '<h3>Error(s):</h3><p>Message: <br/>'+message+'</p>');
	},
	events: function(){		
		this.showModals();
		this.hideModals();
		this.submitForm();
		this.deleteRegistrant();
	},
	show: function(){
		$( '#spinner' ).show();
		$( '#content' ).hide();
	},
	hide: function(){
		hideModal( 'registrantModal' );
		$( '#spinner' ).hide();
		$( '#content' ).show();
		
	},
	submitForm: function(){
		var that = this;		
		
		$( '#'+this.form ).on( 'submit', function( e ){
			e.preventDefault();
			
			if(that.validate() ){
				that.edit();
			}
		} );		
	},
	deleteRegistrant: function(){
		var that = this;
		
		$( '.delete' ).click( function( e ){
			e.preventDefault();
			that.delete();
		});
	},
	showModals: function(){
		var that = this;
		$( '.edit' ).click(function( e ){
			e.preventDefault();
			
			showModal( that.modal );
		});
	},
	hideModals: function( ){
		var that = this;
		$( '.cancel' ).click(function( e ){
			e.preventDefault();
			
			hideModal( that.modal );
		});		
	},
	edit: function(){
		this.show();
		var that = this;
		$.post( '/api/admin/registrants/registrant/edit.php',
			$( '#'+that.form ).serialize(),
			function( data){
				data = jQuery.parseJSON( data );
				
				if( data.success ){
					setTimeout( that.hide, 300 );
				}else{
					that.displayMessage( data.message );
				}
		});
	
	},
	delete: function(){
		var that = this;
		
		if(!confirm( 'Are you sure, you want to delete this registrant?' ) ){
			return;
		}
		this.show();
		
		$.post( '/api/admin/registrants/registrant/delete.php',
			{
				id:$( '#id' ).val()
			},
			function( data ){
				data = jQuery.parseJSON( data );
				
				if( data.success ){
					that.hide();
					that.redirect();
				}else{
					$( '#spinner' ).hide();					
					that.displayMessage( 'Issues with the database' );
				}
				
			});
	},
	redirect: function(){
		window.location.replace( '/admin/registrants/' );
	}
}

$(document).ready( function(){
	registrant.init();	
});
</script>