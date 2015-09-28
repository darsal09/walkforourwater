<?php /* Smarty version Smarty-3.1.8, created on 2015-09-23 15:53:13
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2748855f70593b90f07-96205050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c96f2a7c1fc42ba37cd9bee99f9443245f14b2b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\messages.tpl',
      1 => 1443036108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2748855f70593b90f07-96205050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55f70593bc3b88_32897830',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f70593bc3b88_32897830')) {function content_55f70593bc3b88_32897830($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"messagesController",'foldername'=>"admin",'assign'=>"obj"),$_smarty_tpl);?>

<h1>Messages</h1>
<table id="messagesTable" class="display" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Date Sent</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
</table>

<script>
var messages={
	init:function(){
		this.mTable = $( '#messagesTable' ).DataTable({
			"ajax": "/api/admin/contacts/all.php",
			"columns": [
				{ "data": "id" },
				{ "data": "name" },
				{ "data": "email" },
				{ "data": "phone" },
				{ "data": "added_on",  render:function( added_on, type, row ){
														return added_on;
											}
				}
			]
		});
		
		this.events();
	},
	events:function(){
		$('#messagesTable tbody').on('click', 'tr', { parent:this}, this.ui.onDetailClicked );
	},
	ui:{
		onDetailClicked:function ( e ) {
				var tr = $(this).closest('tr');
				var row = e.data.parent.mTable.row( tr );
		 
				if( row.child.isShown() ){
					// This row is already open - close it
					row.child.hide();
					tr.removeClass('shown');
				}else{
					// Open this row
					row.child( e.data.parent.displayMessage(row.data()) ).show();
					tr.addClass('shown');
				}
			}
	},
	displayMessage:function ( d ) {
		// `d` is the original data object for the row
		return '<div style="padding:20px;"><div class="panel panel-default"><div class="panel-heading"><h3 class=title>Message</h3></div><div class="panel-body">'+d.message.replace(/\r\n|\n|\r/g, '<br />')+'</div></div></div>';
	}
	
};

$( function(){
	messages.init();
});
</script><?php }} ?>