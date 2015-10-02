<?php /* Smarty version Smarty-3.1.8, created on 2015-10-01 23:22:55
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\dashboardMenu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2292255db098e634b78-04204328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5163383e2552be3ded911739eb76a9cd43dd38c3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\dashboardMenu.tpl',
      1 => 1443756174,
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
	<a href="/admin/events">Events</a>
	<a href="/admin/users">Users</a>
	<a href="/admin/registrations">Registrations</a>
	<a href="/admin/donations">Donations</a>
	<a href="/admin/supporters">Supporters</a>
	<a href="/admin/contacts">Contact Messages</a>
	<a href="/log-off">Logoff</a>
</div><?php }} ?>