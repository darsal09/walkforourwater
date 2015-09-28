{load_presentation_object filename="supportersController" foldername="admin" assign="obj"}
<h1>Supporters</h1>
<hr>
<div class="row">
	<div class="col-md-12">
		<table id="supportersTable" class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>District</th>
				<th>Type</th>
				<th>link</th>
				<th>Image</th>
			</thead>
			<tbody>
				{section name=i loop=$obj->mSupporters}
					<tr>
						<td>{( $smarty.section.i.index + 1)}</td>
						<td>{$obj->mSupporters[ i ][ 'first' ]} {$obj->mSupporters[ i ][ 'last' ]}</td>
						<td>{$obj->mSupporters[ i ][ 'district' ]}</td>
						<td>{$obj->mSupporters[ i ][ 'type' ]}</td>
						<td>{$obj->mSupporters[ i ][ 'link' ]}</td>
						<td><img src="{$obj->mSupporters[ i ][ 'image' ]}" width=200></td>
					</tr>
				{/section}
			</tbody>
		</table>
	</div>
</div>

<script>
var supporters={
	init:function(){
		this.mTable = $( '#supportersTable' );
		
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
	supporters.init();
});
</script>