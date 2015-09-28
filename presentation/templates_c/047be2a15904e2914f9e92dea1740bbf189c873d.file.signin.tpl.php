<?php /* Smarty version Smarty-3.1.8, created on 2015-09-23 14:56:21
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\public\signin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2152855db098e951974-19162405%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '047be2a15904e2914f9e92dea1740bbf189c873d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\public\\signin.tpl',
      1 => 1443034577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2152855db098e951974-19162405',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db098ea66ef7_16884847',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db098ea66ef7_16884847')) {function content_55db098ea66ef7_16884847($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"signinController",'foldername'=>"public",'assign'=>"obj"),$_smarty_tpl);?>

<div class="row">
	<div class="col-md-12 login">
		<div class="col-md-6">
			<form method=post id=loginForm>
				<input type="hidden" name="wfow_login_fail" value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mLoginFail;?>
">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3>Login</h3>
					</div>
					<div class="panel-footer">
						<?php if ($_smarty_tpl->tpl_vars['obj']->value->mLoginFail>0){?>
							<p style="color:red;">The email and password combination you entered does not exist in our system.</p>
							<p>To get a new password click <a class="btn" href="/password/forgot">Forgot Password</a></p>
						<?php }?>
						<div class="form-group">
							<label class="control-label">Email</label><br/>
							<input type=email name=email class="form-control"  value="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['email'];?>
"/>
						</div>
						<div class="form-group">
							<label class="control-label">Password</label><br/>
							<input type=password name=password class="form-control" />
						</div>
						<input type=button class="btn btn-default btn-lg btn-warning cancel" value="Cancel">
						<input type=submit class="btn btn-default btn-lg btn-primary" name="wfow_signin" value="Login&raquo;">
						<span class="pull-right"><a href="/password/forgot">Forgot Password</a>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<div class="panel">
				<div class="panel-heading">
					
				</div>
				<div class="panel-body">
					<p>You can log in to manage your account.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
var login={
	init:function(){
		this.page = $( '.login' );
		this.loginForm = $( '#loginForm' );
		this.required  = {
			'email':true,
			'password':true
		};
		this.mErrors ={
			'email':false,
			'password':false
		};
		this.events();
		
	},
	events:function(){
		this.page.on( 'click', 'input.cancel', { parent:this}, this.ui.onCancelClicked);
		this.page.on( 'click', 'input[ type=submit]', { parent:this}, this.ui.onFormSubmit);
	},
	ui:{
		onCancelClicked:function( e ){
			window.location = '/';
		},
		
		onFormSubmit:function( e ){
			var elements = document.getElementById( 'loginForm' ).elements;
			
			if( !e.data.parent.validate( elements ) ){
			e.preventDefault();
				console.log( 'it does not validate' );
			}			
		}
	},
	
	hasErrors:function(){
		for( var x in this.mErrors ){
			if( this.mErrors[ x ]){
				return true;
			}
		}
		
		return false;
	},
	
	validate:function( elements ){
		var flag = true;
		var that = this;
		$.each( elements, function( i, element ){
			if( that.required[ element.name ] && element.value.length == 0 ){
				that.mErrors[ element.name ] = true;
				$( element ).closest('.form-group' ).addClass( 'has-error' );
				flag = false;
			}else{
				$( element ).closest( '.form-group' ).removeClass( 'has-error' );
			}
		});
		
		return flag;
	}
};


$( function(){
	login.init();
});
</script><?php }} ?>