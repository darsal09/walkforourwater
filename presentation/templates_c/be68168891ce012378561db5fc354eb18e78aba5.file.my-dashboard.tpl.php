<?php /* Smarty version Smarty-3.1.8, created on 2015-09-03 20:07:23
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\my-dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2354755db098e64c271-37167022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be68168891ce012378561db5fc354eb18e78aba5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\my-dashboard.tpl',
      1 => 1441325239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2354755db098e64c271-37167022',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db098e6bd6f5_43352672',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db098e6bd6f5_43352672')) {function content_55db098e6bd6f5_43352672($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>'myDashboardController','foldername'=>'admin','assign'=>"obj"),$_smarty_tpl);?>

<div class=12>
	<div class="col-md-4">
		<div style="background-color:red;padding:10px;margin:2px;font-size:18px;">
			<div>
				<h3>Registrations</h3>
				<p>
					x New Registration(s)
				</p>
			</div>
			<div>
				<a href="/admin/registrations">View All</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div style="background-color:green;padding:10px;margin:2px;font-size:18px;">
			<div>
				<h3>Donations</h3>
				<p>
					x new Donations(s)
				</p>
			</div>
			<div>
				<a href="/admin/donations">View All</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div style="background-color:silver;padding:10px;margin:2px;font-size:18px;">
			<div>
				<h3>Events</h3>
				<p>
					Coming Event:
				</p>
			</div>
			<div>
				<a href="/admin/events">View All</a>
			</div>
		</div>
	</div>
</div>
<div class=12>
	<div class="col-md-4">
		<div style="background-color:orange;padding:10px;margin:2px;font-size:18px;">
			<div>
				<h3>Supporters</h3>
				<p>
					x New Supporter(s)
				</p>
			</div>
			<div>
				<a href="/admin/supporters">View All</a>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div style="background-color:blue;padding:10px;margin:2px;font-size:18px;">
			<div>
				<h3>Users</h3>
				<p>
					x new User(s)
				</p>
			</div>
			<div>
				<a href="/admin/users">View All</a>
			</div>
		</div>
	</div>
</div>
<p>&nbsp;</p>
<?php }} ?>