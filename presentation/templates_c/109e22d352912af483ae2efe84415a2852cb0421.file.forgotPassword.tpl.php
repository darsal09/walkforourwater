<?php /* Smarty version Smarty-3.1.8, created on 2015-09-01 21:58:11
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\public\forgotPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3104055e65345635d84-52623587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '109e22d352912af483ae2efe84415a2852cb0421' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\public\\forgotPassword.tpl',
      1 => 1441159088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3104055e65345635d84-52623587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55e6534567c282_58768930',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e6534567c282_58768930')) {function content_55e6534567c282_58768930($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"forgotPasswordController",'foldername'=>"public",'assign'=>"obj"),$_smarty_tpl);?>

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
</div><?php }} ?>