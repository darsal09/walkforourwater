{load_presentation_object filename="registrationsController" foldername="admin" assign="obj"}
<div class="row">
	<div class="col-md-12">
		<p></p><a class="btn btn-primary btn-lg" id="addRegistrationButton" href="">+Add Registration</a></p>
        <div style="background-color:#efefef;padding:5px;">
            <form class="filters">
                <h2>Filters</h2>
                <div class="row">
                    <div class="col-md-4">
                        <label>Status</label><br/>
                        <select class="filter form-control" name="status">
                            <option value="">All Statuses</option>
                            <option value="Completed">Completed</option>
                            <option value="Pending">Pending</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Registration Email</label><br/>
                        <select class="filter form-control" name="registrations_email">
                            <option value="">All</option>
                            <option value="Sent">Sent</option>
                            <option value="null">No Email</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Emails</label><br/>
                        <select class="filter form-control" name="emails">
                            <option value="">All Registrations</option>
                            <option value="valid">Valid</option>
                            <option value="invalid">Invalid</option>
                        </select>
                    </div>
                    <p>&nbsp;</p>
                </div>
            </form>
        </div>
        <p>&nbsp;</p>
		<table id="registrationsTable" class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Event</th>
					<th>Date</th>
					<th>Status</th>
					<th>Option</th>
                    <th>Registration Email</th>
                    <th>Updated Email</th>
                    <th>Attended</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>

<div class="modal" id="addRegistrationModal">
  <div class="modal-dialog">
      <form id="addRegistrationForm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add  User Information</h4>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="status">Status</label><br/>
                        <label class="selected" id="active"><input type=radio name="status" value="Active" checked=true style="display:none;"> Active</label>
                        <label class="no-selected" id="inactive"><input type=radio name="status" value="Inactive" style="display:none;"> Inactive</label><br/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="options">What would you like to do?</label><br/>
                        <label class="selected" id="walk"><input type=radio name="options" value="Walking" checked=true style="display:none;"> 3K Walk</label>
                        <label class="no-selected" id="run"><input type=radio name="options" value="Running" style="display:none;"> 5K Run</label><br/>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="first">First Name</label><br/>
						<input type=text name="first" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="last">Last Name</label><br/>
						<input type=text name="last" class="form-control">
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="email">Email</label><br/>
						<input type=text name="email" class="form-control">
					</div>
				</div>
				<div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="phone">Phone</label><br/>
                        <input type=text name="phone" class="form-control">
                    </div>
				</div>
			</div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="address">Address</label><br/>
                        <input type=text name="address" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="city">City</label><br/>
                        <input type=text name="city" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="state">State</label><br/>
                        <input type=text name="state" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="zip">Zip</label><br/>
                        <input type=text name="zip" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="donation">Donation</label><br/>
                        <input type=text name="donation" class="form-control">
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <input type="reset" name="reset" class="btn btn-danger" value="Reset">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveRegistration">Save changes</button>
      </div>
        </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>

<div class="modal" id="editUserModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit  User Information</h4>
      </div>
      <div class="modal-body">
		<form id="editUserForm">
			<input type=hidden name=id value="">
			
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="first">First Name</label><br/>
						<input type=text name="first" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="last">Last Name</label><br/>
						<input type=text name="last" class="form-control" value="">
					</div>
				</div>				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="email">Email</label><br/>
						<input type=text name="email" class="form-control" value="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="status">Status</label><br/>
						<label class="no-selected" id="editUserFormActive"><input type=radio name="status" value="Active" style="display:none;"> Active</label>
						<label class="selected" id="editUserFormInactive"><input type=radio name="status" value="Inactive" checked=true style="display:none;"> Inactive</label><br/>
					</div>
				</div>				
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveEditUser">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  </div>



<script>
var registrations={
	init:function(){
		this.mTable = $( '#registrationsTable' );

        this.loadTable();
		this.events();
	},
	events:function(){
		$( '#addRegistrationButton' ).on( 'click', { parent:this}, this.ui.onAddRegistrationButtonClicked);
		//this.mTable.on( 'click', 'tbody tr', { parent:this}, this.ui.onEditClicked);
        this.mTable.on('click', 'tbody tr td.more_info', { parent:this}, this.ui.onDetailClicked );
        this.mTable.on('click', 'A#updateStatus', { parent:this}, this.ui.onCompletedClicked );
        this.mTable.on('click', 'A#sendEmail', { parent:this}, this.ui.onSendEmailClicked );
        this.mTable.on('click', 'A.resend_email', { parent:this}, this.ui.onResendEmailClicked );
        this.mTable.on('click', 'A#sendUpdateEmail', { parent:this}, this.ui.onSendUpdateEmailClicked );
        this.mTable.on('click', 'A.resendUpdateEmail', { parent:this}, this.ui.onResendUpdateEmailClicked );
        this.mTable.on('click', 'A.attended', { parent:this}, this.ui.onAttendedClicked );
        $( '.filters').on( 'change', 'SELECT.filter', { parent:this}, this.ui.onFilterChange );
    },
	ui:{
        onAttendedClicked:function( e ){
            e.preventDefault();
            e.data.parent.attended( $( this).data( 'rid' ), $( this).data( 'uid' ) );
        },
        onSendUpdateEmailClicked:function( e ){
            e.preventDefault();
            e.data.parent.sendUpdateEmail( $( this).data( 'rid' ), $( this).data( 'uid' ) );
        },
        onResendUpdateEmailClicked:function( e ){
            e.preventDefault();
            e.data.parent.resendUpdateEmail( $( this).data( 'rid' ), $( this).data( 'uid' ) );
        },
        onFilterChange:function( e ){
            e.data.parent.loadTable();
        },
        onResendEmailClicked:function( e ){
            e.preventDefault();
            e.data.parent.resendEmail( $( this).data( 'rid' ), $( this).data( 'uid' ) );
        },
        onSendEmailClicked:function( e ){
            e.preventDefault();
            e.data.parent.sendEmail( $( this).data( 'rid' ), $( this).data( 'uid' ) );
        },
        onCompletedClicked:function( e ){
            e.preventDefault();
            e.data.parent.completed( $( this).data( 'rid' ), $( this).data( 'uid' ));

        },
        onDetailClicked:function(e ){
            var tr = $(this).closest('tr');
            var row = e.data.parent.mTable.DataTable().row( tr );

            if( row.length == 0 ){
                return;
            }

            if( row.child.isShown() ){
                // This row is already open - close it
                row.child.hide();
                $( this ).removeClass('shown');
            }else{
                // Open this row
                row.child( e.data.parent.displayMessage( row.data()) ).show();
                $(this).addClass('shown');
            }
        },
		onEditClicked:function( e ){
			var row = e.data.parent.mTable.DataTable().row( this ).data();
			var type = 'active';

			if( $( this ).hasClass( 'warning' )){
				type = 'inactive';
			}
			
			editRegistration.init( {
				'id':row[0],
				'first':row[ 1],
				'last':row[ 2],
				'email':row[ 3 ],
				'type':type
			}, this );
		},
		onAddRegistrationButtonClicked:function( e ){
			e.preventDefault();
			addRegistration.init();
		}
	},
    displayMessage:function ( d ) {
        return '<div class="row"><div class="col-md-12"><div class="col-md-3">Paypal Number: '+ d.paypal_receipt_id+'</div><div class="col-md-3">Donation: $'+ d.donation+'</div><div class="col-md-3"><a href="#" data-rID="'+ d.register_id+'" data-uID="'+ d.user_id+'" class="btn btn-primary attended">Attended</a></div></div></div>';
    },
    loadTable:function(){
        if ($.fn.dataTable.isDataTable(this.mTable.selector)) {
            dtable = this.mTable.DataTable();
            dtable.destroy();
        }

        this.mTable.DataTable({
            "ajax": {
                "url": "/api/admin/registrations/all.php",
                "type": 'POST',
                "data":{
                    filters:$( '.filters').serializeArray()
                }
            },
            "columns": [
                { "data": "register_id", 'className':'more_info'},

                { "data": "first", render:function( first, type, row ){
                        return row.first+' '+row.last;
                    }
                },
                { "data": "title" },
                { "data": "date",  render:function( dates, type, row ){
                        return dates;
                    }
                },
                { "data":"status", render:function( status, type, row ){
                    var inputs = status;

                    if( status == 'Pending' ){
                        inputs = '<a href="#" data-rID="'+row.register_id+'" data-uID="'+row.user_id+'" id="updateStatus" title="click to update the registration to completed">'+status+'</a>';
                    }
                    return inputs;
                }},
                { "data":"type"},
                { "data": "emailed", 'render':function( rID, type, row ){
                    var inputs = 'Sent';

                    if( rID == null ){
                        inputs = '<a href="#" id="sendEmail" data-uID="'+row.user_id+'" data-rID="'+row.register_id+'">Send</a>';
                    }
                    if( rID != null ){
                        inputs += ' :: <a href="#" class="resend_email" data-rID="'+row.register_id+'" data-uID="'+row.user_id+'">Re-send</a>';
                    }
                    return inputs;
                }},
                {
                    'data':'updated',
                    'render':function( updated, type, row ){
                        var inputs = 'Sent';

                        if( updated == null ){
                            inputs = '<a href="#" id="sendUpdateEmail" data-uID="'+row.user_id+'" data-rID="'+row.register_id+'">Send</a>';
                        }
                        inputs += ' :: <a href="#" class="resendUpdateEmail" data-rID="'+row.register_id+'" data-uID="'+row.user_id+'">Re-send</a>';

                        return inputs;
                    }
                }
            ]
        });
    },
    completed:function( rID, uID ){
        $.post('/api/admin/registrations/registrant/completed.php',
               {
                'register_id':rID,
                 'user_id':uID
               },
                function( data ){
                    if( data.success){
                        registrations.loadTable();
                    }else {
                        alert(data.message);
                    }
                },
                "json");
    },
    sendEmail:function( rID, uID ){
        $.post('/api/admin/registrations/registrant/sendEmail.php',
                {
                    'user_id':uID,
                    'register_id':rID
                },
                function( data ){
                    if( data.success ){
                        registrations.loadTable();
                    }else{
                        alert( data.message );
                    }
                },
                'json'
        );
    },
    resendEmail:function( rID, uID ){
        $.post('/api/admin/registrations/registrant/sendEmail.php',
                {
                    'user_id':uID,
                    'register_id':rID
                },
                function( data ){
                    alert( data.message );
                },
                'json'
        );

    },
    sendUpdateEmail:function( rID, uID ){
        $.post('/api/admin/registrations/registrant/sendUpdateEmail.php',
                {
                    'user_id':uID,
                    'register_id':rID
                },
                function( data ){
                    if( data.success ){
                        registrations.loadTable();
                    }else{
                        alert( data.message );
                    }
                },
                'json'
        );
    },
    resendUpdateEmail:function( rID, uID ){
        $.post('/api/admin/registrations/registrant/sendUpdateEmail.php',
                {
                    'user_id':uID,
                    'register_id':rID
                },
                function( data ){
                    alert( data.message );
                },
                'json'
        );
    }


};

var addRegistration={
	init:function(){
		this.mModal = $( '#addRegistrationModal' );
		this.mFomValidator = validateForm;
        this.mForm = $( '#addRegistrationForm' );
		this.mModal.modal( 'show' );
        this.offEvents();
		this.events();
	},
	offEvents:function(){
        $( '#saveRegistration').off( 'click');
    },
	events:function(){
	    $( '#saveRegistration').on( 'click', { parent:this}, this.ui.onSaveRegistrationClicked);
        $( '#saveUser' ).on( 'click', { parent:this}, this.ui.onSaveUserClicked);
        $( '#active' ).on( 'click',  { parent:this}, this.ui.onLabelSelected);
        $( '#inactive' ).on( 'click',  { parent:this}, this.ui.onLabelUnselected);
        $( '#walk' ).on( 'click',  { parent:this}, this.ui.onWalkSelected);
        $( '#run' ).on( 'click',  { parent:this}, this.ui.onRunSelected);

    },
	ui:{
        onLabelSelected:function( e ){
            $( this ).removeClass( 'selected' );
            $( this ).addClass( 'selected'  );
            $( '#inactive' ).removeClass( 'selected' );
            $( '#inactive' ).addClass( 'no-selected' );
        },
        onLabelUnselected:function( e ){
            $( this ).removeClass( 'selected' );
            $( this ).addClass( 'selected'  );
            $( '#active' ).removeClass( 'selected' );
            $( '#active' ).addClass( 'no-selected' );
        },
        onWalkSelected:function( e ){
            $( this ).removeClass( 'selected' );
            $( this ).addClass( 'selected'  );
            $( '#run' ).removeClass( 'selected' );
            $( '#run' ).addClass( 'no-selected' );
        },
        onRunSelected:function( e ){
            $( this ).removeClass( 'selected' );
            $( this ).addClass( 'selected'  );
            $( '#walk' ).removeClass( 'selected' );
            $( '#walk' ).addClass( 'no-selected' );
        },
        onSaveRegistrationClicked:function( e ){
            e.preventDefault();

            e.data.parent.saveRegistration();
        },
		onUsersChanged:function( e ){
            if( $( this).val() == "new" ){
                console.log( 'show users information to enter' );
            }
        }
	},

	getUsers:function(){
		var userSelect = $( '#addRegistrationFormUsers');
		$.post('/api/admin/users/all.php',
				{},
				function( data ){
					if( data.success ){
						var result = [];
						var users = data.result;
						for( var x in users ){
							var user = users[ x ];
							result[x] = { id:user.user_id, text:user.first+' '+user.last};
							//userSelect.append( '<option value="'+user.user_id+'">'+user.first+' '+user.last+'</option>' );
						}
						$( '.users' ).select2({
							data:result
						});
					}else{
						alert( data.message );
					}
				},
                'json'
			);
	},
    saveRegistration:function(){
        var that = this;

        $.post('/api/admin/registrations/registrant/add.php',
                that.mForm.serialize(),
                function( data ) {
                    if( data.success ){
                        registrations.loadTable();
                    }
                    alert( data.message );
                },
                "json");
    }

};

var editRegistration={
	init:function( registration ){
		this.mModal = $( '#editRegistrationModal' );
		this.mRegistration = registration;
		this.mModal.modal( 'show' );
		this.events();
	},
	events:function(){
	
	},
	ui:{
		
	}
	
}

$( function(){
	registrations.init();
});
</script>