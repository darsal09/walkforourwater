{load_presentation_object filename="eventsController" foldername="admin" assign="obj"}
	<h1>Events</h1>	
	<hr>
	<table id="my-events" class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Date</th>
				<th>Time</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
		{section name=i loop=$obj->mEvents}
			<tr>
				<td>
					{( $smarty.section.i.index)+1}
				</td>
				<td>
					{$obj->mEvents[ i ][ 'title']}
				</td>
				<td>
					{$obj->mEvents[ i ][ 'date' ]}
				</td>
				<td>
					{$obj->mEvents[ i ][ 'time' ]}
				</td>
				<td>
					<a href="">Edit</a>
				</td>
			</tr>
		{/section}
		</tbody>
		<tfooter>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Date</th>
				<th>Time</th>
				<th>Options</th>
			</tr>
		</tfooter>
	</table>
	
<script>
var events = {
	init:function(){
		this.mTable = $( '#my-events' );
		
		this.loadEvents();
		
		this.event();
	},
	event:function(){
		
	},
	
	ui:{
		
	},
	
	loadEvents:function(){
		this.mTable.DataTable({
			columnDefs: [ {
				targets: [ 0 ],
				orderData: [ 0, 1 ]
			}, {
				targets: [ 1 ],
				orderData: [ 1, 0 ]
			}, {
				targets: [ 4 ],
				orderData: [ 4, 0 ]
			} ]
		});
	}
	
	
};

$( function( ){
	events.init();
})
</script>