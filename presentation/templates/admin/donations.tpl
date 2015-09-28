{load_presentation_object filename="donationsController" foldername="admin" assign="obj"}
<h1>Donations</h1>
<hr>
<div class="row">
	<div class="col-md-12">
		<table id=donationsTable class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Donation</th>
				<th>Date</th>
				<th>Email Updates</th>
				<th>Status</th>
			</thead>
			<tbody>
				{section name=i loop=$obj->mDonations}
					<tr {if $obj->mDonations[ i ][ 'status' ] == 1} class="success"{else}class="danger"{/if}>
						<td>{($smarty.section.i.index + 1)}</td>
						<td>{$obj->mDonations[ i ][ 'first' ]} {$obj->mDonations[ i ][ 'last' ]}</td>
						<td>${$obj->mDonations[ i ][ 'gift_amount' ]}</td>
						<td>{$obj->mDonations[ i ][ 'added_on' ]}</td>
						<td>{$obj->mDonations[ i ][ 'email_updates']}</td>
						<td>{$obj->mDonations[ i ][ 'status' ]}</td>
					</tr>
				{/section}
			</tbody>
		</table>
	</div>
</div>

<script>
var donations={
	init:function(){
		this.mTable = $( '#donationsTable' );
		
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

$( function(){
	donations.init();
});
</script>