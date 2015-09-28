{load_presentation_object filename="registerSuccessController" foldername="public" assign="obj"}
<div class="row">
	<div class="col-md-8">
		<div class="panel {if $obj->mErrors}panel-danger{else}panel-success{/if}">
			{if !$obj->mErrors}
				<div class="panel-heading">
					<h2>Registration Completed!</h2>
				</div>
				<div class="panel-body">
					<p>Dear {$obj->mP[ 'first' ]},</p>
					<p>&nbsp;</p>
					<p>Thank you for registering for the walk. We look forward to seeing you on October 3rd, 2015!</p>
					<p>You will be receiving an email with more details from us shortly.</p>
				</div>
			{else}
				<div class="panel-heading">
					<h2>ERROR: Updating Registration</h2>
				</div>
				<div class="panel-body">
					<p>Dear {$obj->mP[ 'first' ]},</p>
					<p>&nbsp;</p>
					<p>I am sorry, it seems that we cannot update your registration at this moment.</p>
				</div>
			
			{/if}
			<div class="panel-footer">
			
			</div>
		</div>
	</div>
	<div class="col-md-4">
	
	</div>
</div>