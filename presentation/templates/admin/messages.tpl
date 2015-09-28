{load_presentation_object filename="messagesController" foldername="admin" assign="obj"}
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
</script>