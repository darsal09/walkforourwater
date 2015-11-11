<?php /* Smarty version Smarty-3.1.8, created on 2015-11-09 08:40:42
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\dashboardMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2292255db098e634b78-04204328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5163383e2552be3ded911739eb76a9cd43dd38c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\dashboardMenu.tpl',
      1 => 1447076440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2292255db098e634b78-04204328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db098e6389f1_21159316',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db098e6389f1_21159316')) {function content_55db098e6389f1_21159316($_smarty_tpl) {?><div class="admin_menu">
    <a href="/admin"><div>Admin</div></a>
	<a href="/admin/events"><div>Events</div></a>
	<a href="/admin/users"><div>Users</div></a>
	<a href="/admin/registrations"><div>Registrations</div></a>
	<a href="/admin/donations"><div>Donations</div></a>
	<a href="/admin/supporters"><div>Supporters</div></a>
	<a href="/admin/contacts"><div>Contact Messages</div></a>
	<a href="/log-off"><div>Logoff</div></a>
</div><?php }} ?>