{load_presentation_object filename="forgotPasswordController" foldername="public" assign="obj"}
<div class="row">
	<div class="col-md-6">
		<form method=post>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Forgot password</h2>
				</div>
				<div class="panel-body">
					<div class="form-group">
						<label for="wfow_email" class="control-label">Email</label><br/>
						<input type="text" name="wfow_email" class="form-control">
					</div>
				</div>
				<div class="panel-footer">
					<div class="form-group">
						<input type="submit" name="wfow_send_request" value="Change Password&raquo;" class="btn btn-primary">
						<input type="button" class="btn btn-warning cancel pull-right" value="Cancel">
					</div>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-6">
	
	</div>
</div>