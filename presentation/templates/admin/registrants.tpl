{load_presentation_object filename="registrantsController" foldername=admin assign="obj"}
<div class=row>
	<div class=col-md-12>
		<div class=table-responsive>
			<table id=myTable class='display' width=100%>
				<thead>
					<tr>
						<th>Name</th>
						<th>Phone</th>
						<th>Email</th>
						<th>City</th>
						<th>Zip</th>
						<th>Payment Status</th>
						<th>Options</th>
					</tr>
				</thead>
				<tbody>
					{section name=i loop=$obj->mP}
						<tr>
							<td><a href="/admin/registrants/{$obj->mP[ i ].register_id}">{$obj->mP[ i ].first} {$obj->mP[ i ].last}</a></td>
							<td>{$obj->mP[ i ].phone}</td>
							<td>{$obj->mP[ i ].email}</td>
							<td>{$obj->mP[ i ].city}</td>
							<td>{$obj->mP[ i ].zip}</td>
							<td>{$obj->mP[ i ].status}</td>
							<td><a href="" onClick="return changeStatus();">Change Status</a> :: <a href="">Remove</a> :: <a href="">Request payment</a>
						</tr>
					{/section}
				</tbody>
			</table>
		</div>	
	</div>
</div>

	<div class="modal fade" id=changeStatus tabindex="-1" role="dialog" aria-labelledby="#addPackageLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						 <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h3 class="modal-title" id="myModalLabel">Add Package To Student</h3>
							<p>Please select one of the following packages</p>
						</div>
						<div class=modal-content>
							
						</div>
					</div>
				</div>
	</div>
<script>
	$(document).ready(function(){
		$('#myTable').DataTable();
	});
	
	function changeStatus(){
		showModal( 'changeStatus' );
		return false;
	}
</script>