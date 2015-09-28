<?php /* Smarty version Smarty-3.1.8, created on 2015-08-23 21:11:21
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\nmain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2952255da6f3923e381-53097482%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12520abad3e9088de13f3f2338e50905238337af' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\nmain.tpl',
      1 => 1440275297,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2952255da6f3923e381-53097482',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55da6f3929bf84_32553347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55da6f3929bf84_32553347')) {function content_55da6f3929bf84_32553347($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"frontController",'assign'=>"obj"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mContent, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>