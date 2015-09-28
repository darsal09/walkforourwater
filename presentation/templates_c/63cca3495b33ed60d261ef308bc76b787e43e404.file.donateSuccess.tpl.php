<?php /* Smarty version Smarty-3.1.8, created on 2015-09-12 05:07:29
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\public\donateSuccess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1728155de7d2ddf42b7-88258837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63cca3495b33ed60d261ef308bc76b787e43e404' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\public\\donateSuccess.tpl',
      1 => 1442048844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1728155de7d2ddf42b7-88258837',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55de7d2de46338_78670179',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55de7d2de46338_78670179')) {function content_55de7d2de46338_78670179($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"donateSuccessController",'foldername'=>"public",'assign'=>"obj"),$_smarty_tpl);?>

<div class="row">
	<div class="col-md-8">
		<div class="panel <?php if (!$_smarty_tpl->tpl_vars['obj']->value->mErrors){?>panel-success<?php }else{ ?>panel-danger<?php }?>">
			<?php if (!$_smarty_tpl->tpl_vars['obj']->value->mErrors){?>
				<div class="panel-heading">
					<h2>Thank you for your donation</h2>
				</div>
				<div class="panel-body">
					<p>Dear <?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['first'];?>
,</p>
					<p>
						Thank you for donating to the Walk!  Your contribution is helping us to keep our water clean and safe. 
					</p>
				</div>
			<?php }else{ ?>
				<div class="panel-heading">
					<h2>ERROR: Updating Registration</h2>
				</div>
				<div class="panel-body">
					<p>Dear <?php echo $_smarty_tpl->tpl_vars['obj']->value->mP['first'];?>
,</p>
					<p>
						I am sorry, we can not update your donation information in our system.
					</p>
				</div>
			
			<?php }?>
			<div class="panel-footer">
			
			</div>
		</div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("public/sideColumn.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div><?php }} ?>