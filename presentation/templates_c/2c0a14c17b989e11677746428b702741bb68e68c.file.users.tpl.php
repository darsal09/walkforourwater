<?php /* Smarty version Smarty-3.1.8, created on 2015-09-28 12:47:41
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1594355db0b13cb8af7-51779690%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c0a14c17b989e11677746428b702741bb68e68c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\users.tpl',
      1 => 1443458851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1594355db0b13cb8af7-51779690',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db0b13cb8af1_60126707',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db0b13cb8af1_60126707')) {function content_55db0b13cb8af1_60126707($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"usersController",'foldername'=>"admin",'assign'=>"obj"),$_smarty_tpl);?>

	<div class="row">
		<div class="col-md-12">
			<p>
				<button class="btn btn-default btn-primary btn-lg" id="addUserButton">+Add User&raquo;</button>
			</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">			
			<table id=usersTable class="table responsive no-wrap table-striped table-bordered table-hover table-responsive">
				<thead>
					<th>#</th>
					<th>First</th>
					<th>Last</th>
					<th>Email</th>
                    <th>Type</th>
                    <th>Status</th>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
<div class="modal" id="addUserModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add  User Information</h4>
      </div>
      <div class="modal-body">
		<form id="addUserForm">
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
						<label class="control-label" for="status">Status</label><br/>
						<label class="no-selected" id="active"><input type=radio name="status" value="Active" style="display:none;"> Active</label>
						<label class="selected" id="inactive"><input type=radio name="status" value="Inactive" checked=true style="display:none;"> Inactive</label><br/>
					</div>
				</div>				
			</div>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveUser">Save changes</button>
      </div>
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
var users ={
	init:function(){
		this.mTable = $( '#usersTable' );
		
		this.mTable.DataTable({
			responsive: true
		});		
		this.loadUsers();
		this.events();
	},
	events:function(){
		$( '#addUserButton' ).on( 'click', { parent:this}, this.ui.onAddUserClicked);
		this.mTable.on( 'click', 'tbody tr', { parent:this}, this.ui.onRowClicked);
        editUser.events();
        addUser.events();
	},
	ui:{
		onRowClicked:function( e ){
			var row = e.data.parent.mTable.DataTable().row( this ).data();

			editUser.init( {
				'id':row.user_id,
				'first':row.first,
				'last':row.last,
				'email':row.email,
				'status':row.status.toLowerCase()
			}, this );
		},
		onAddUserClicked:function(e){
			e.preventDefault();
			addUser.init();
		}
	},
	loadUsers:function(){
        if ($.fn.dataTable.isDataTable(this.mTable.selector)) {
            dtable = this.mTable.DataTable();
            dtable.destroy();
        }

		this.mTable.DataTable({
			"ajax":"/api/admin/users/all.php",
            "columns": [
                { "data": "user_id", 'className':'more_info'},
                { "data": "first"},
                { "data": "last" },
                { "data": "email"},
                { "data": "type"},
                { 'data':'status', 'render':function( status, type, row ){
                    return status;
                }}
            ]
		});
		
	},
	getUser:function( user ){
		var result = {};
		
		for( var x in user ){
			result[ user[ x ].name] = user[ x ].value;
		}
		
		return result;
	}
};

var addUser = {
	init:function(){
		validateForm.init( 'addUserForm', {
							'first':true,
							'last':true,
							'email':true,
							'status':true,
							'type':true
							});		
		showModal( 'addUserModal' );
	},
	events:function(){
		$( '#saveUser' ).on( 'click', { parent:this}, this.ui.onSaveUserClicked);
		$( '#active' ).on( 'click',  { parent:this}, this.ui.onLabelSelected);
		$( '#inactive' ).on( 'click',  { parent:this}, this.ui.onLabelUnselected);	
	},
	ui:{
		onSaveUserClicked:function( e ){
			e.preventDefault();

			if( !validateForm.validate() ){
				console.log( 'information did not validate' );
				return;
			}			
			e.data.parent.save();
		},
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
		}
	},
	save:function(){
		var that = this;
		
		$.post( '/api/admin/users/add.php',
				$( '#addUserForm' ).serialize(),
				function( data ){
					data = jQuery.parseJSON( data );
					
					if( data.success ){
						hideModal( 'addUserModal' );
						 var t = $('#usersTable').DataTable();
						 var user = that.getUser( $( '#addUserForm' ).serializeArray() );
						 var index = parseInt( t.data().length ) + 1;
						t.row.add( [index, user.first, user.last, user.email ]   ).draw();
						//t.rowReordering({ iGroupingColumnIndex: 1 });
						t.fnSort( [ [1,'asc'], [2,'asc'] ] );
					}else{
						alert( data.message );
					}
				});
	}


}

var editUser={
	init:function( row, event ){
		this.mModal = $( '#editUserModal' );
		this.mForm = $( '#editUserForm' );
		this.mRowEvent = event;
		this.loadUser( row );
		this.type={
			'active':'selected',
			'inactive':'no-selected'
		};
		
		this.validateForm = validateForm;
		this.validateForm.init( 'editUserForm', {
			'first':true,
			'last':true,
			'email':true,
			'status':true,
			'id':true
		});
        this.mModal.modal( 'show' );
	},
	events:function(){
		$( '#saveEditUser' ).on( 'click', { parent:this}, this.ui.onFormSubmitClicked);
		$( '#editUserFormActive' ).on( 'click',  { parent:this}, this.ui.onLabelSelected);
		$( '#editUserFormInactive' ).on( 'click',  { parent:this}, this.ui.onLabelUnselected);
	},
	ui:{
		onFormSubmitClicked:function( e ){
			e.preventDefault();
			
			if( !e.data.parent.validateForm.validate() ){
				console.log( 'form not validated' );
				return;
			}
			
			e.data.parent.saveUser();
		},
		
		onLabelSelected:function( e ){
			$( this ).removeClass( 'selected' );
			$( this ).addClass( 'selected'  );
			$( '#editUserFormInactive' ).removeClass( 'selected' );
			$( '#editUserFormInactive' ).addClass( 'no-selected' );
		},
		
		onLabelUnselected:function( e ){
			$( this ).removeClass( 'selected' );
			$( this ).addClass( 'selected'  );
			$( '#editUserFormActive' ).removeClass( 'selected' );
			$( '#editUserFormActive' ).addClass( 'no-selected' );
		}
	
	},
	loadUser:function( row ){
		var active  = $( '#editUserFormActive' );
		var inactive = $( '#editUserFormInactive' );
		
		if( row.status == 'active' ){
			active.addClass( 'selected' );
			active.removeClass( 'no-selected' );
			inactive.removeClass( 'selected');
			$("#editUserForm input[name=status][value='Active']").attr("checked", true)
			$("#editUserForm input[name=status][value='Inactive']").attr("checked", false)
		}else{
			inactive.addClass( 'selected' );
			inactive.removeClass( 'no-selected' );
			active.removeClass( 'selected' );
			$("#editUserForm input[name=status][value='Inactive']").attr("checked", true)
			$("#editUserForm input[name=status][value='Active']").attr("checked", false)
		}
		
		$.each( row, function( field, value ){
			$('#editUserForm input[name='+field+']').val( value );
			
		})
	},
	saveUser:function(){
		var that = this;
		$.post( '/api/admin/users/update.php',
				$( '#editUserForm' ).serializeArray(),
				function( data ){
					data = jQuery.parseJSON( data );
					
					if( data.success ){
						that.mModal.modal( 'hide' );
						$( that.mRowEvent  ).addClass( 'active' );
						$( that.mRowEvent ).removeClass( 'warning' );
                        users.loadUsers();
					}else{
						alert( data.message );
					}
				}
		);
	}
	
};
$(function(){
	users.init();
});


</script><?php }} ?>