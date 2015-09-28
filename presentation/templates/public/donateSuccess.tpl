{load_presentation_object filename="donateSuccessController" foldername="public" assign="obj"}
<div class="row">
	<div class="col-md-8">
		<div class="panel {if !$obj->mErrors}panel-success{else}panel-danger{/if}">
			{if !$obj->mErrors}
				<div class="panel-heading">
					<h2>Thank you for your donation</h2>
				</div>
				<div class="panel-body">
					<p>Dear {$obj->mP[ 'first' ]},</p>
					<p>
						Thank you for donating to the Walk!  Your contribution is helping us to keep our water clean and safe. 
					</p>
				</div>
			{else}
				<div class="panel-heading">
					<h2>ERROR: Updating Registration</h2>
				</div>
				<div class="panel-body">
					<p>Dear {$obj->mP[ 'first' ]},</p>
					<p>
						I am sorry, we can not update your donation information in our system.
					</p>
				</div>
			
			{/if}
			<div class="panel-footer">
			
			</div>
		</div>
	</div>
	{include file="public/sideColumn.tpl"}
</div>