<?php /* Smarty version Smarty-3.1.8, created on 2015-09-12 03:07:00
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\public\registerSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2251955de578c6b0cb4-43085023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63005559c08bfc19d84ce9d3c2908d90eb925685' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\public\\registerSuccess.tpl',
      1 => 1442041617,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2251955de578c6b0cb4-43085023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55de578c823e30_90775366',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55de578c823e30_90775366')) {function content_55de578c823e30_90775366($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"registerSuccessController",'foldername'=>"public",'assign'=>"obj"),$_smarty_tpl);?>

<div class="row">
	<div class="col-md-8">
		<div class="panel <?php if ($_smarty_tpl->tpl_vars['obj']->value->mErrors){?>panel-danger<?php }else{ ?>panel-success<?php }?>">
			<?php if (!$_smarty_tpl->tpl_vars['obj']->value->mErrors){?>
				<div class="panel-heading">
					<h2>Registration Completed!</h2>
				</div>
				<div class="panel-body">
					<p>Dear <?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['first'];?>
,</p>
					<p>&nbsp;</p>
					<p>Thank you for registering for the walk. We look forward to seeing you on October 3rd, 2015!</p>
					<p>You will be receiving an email with more details from us shortly.</p>
				</div>
			<?php }else{ ?>
				<div class="panel-heading">
					<h2>ERROR: Updating Registration</h2>
				</div>
				<div class="panel-body">
					<p>Dear <?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['first'];?>
,</p>
					<p>&nbsp;</p>
					<p>I am sorry, it seems that we cannot update your registration at this moment.</p>
				</div>
			
			<?php }?>
			<div class="panel-footer">
			
			</div>
		</div>
	</div>
	<div class="col-md-4">
	
	</div>
</div><?php }} ?>