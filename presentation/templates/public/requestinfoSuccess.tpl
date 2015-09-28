{load_presentation_object filename="requestInfoSuccessController" foldername="public" assign="obj"}
<div class="col-md-12" id="requestInfoSuccess">
	<div class="page-header">
		<h2>Request Information</h2>
	</div>
</div>
	<div class="col-md-12">
		<div class="panel panel-default">
			<div  class="panel-heading">
				<h3 class="panel-title"">Success</h3>
			</div>
			<div class="panel-body">
				<p>
					Dear {$obj->mP[ 'name' ]},<br/>
					Your request has been submitted. Thanks for your interest in our program. We will get back to you ASAP.
				</p>
			</div>			
		</div>
	</div>
