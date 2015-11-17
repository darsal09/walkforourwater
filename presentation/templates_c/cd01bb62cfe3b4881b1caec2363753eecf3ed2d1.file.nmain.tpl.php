<?php /* Smarty version Smarty-3.1.8, created on 2015-11-15 21:54:14
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\public\nmain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1795555da6f392ab983-62721838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd01bb62cfe3b4881b1caec2363753eecf3ed2d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\public\\nmain.tpl',
      1 => 1447076519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1795555da6f392ab983-62721838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55da6f392e6304_71971710',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55da6f392e6304_71971710')) {function content_55da6f392e6304_71971710($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"publicController",'foldername'=>"public",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<title>Walk for our Water</title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> 
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>		
		<![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="" />
		<script type="text/javascript" src="/bootstrap/js/jquery-1.11.2.min.js"></script>
		<!--<script src="https://use.fonticons.com/94093d18.js"></script> //-->
		<link rel="stylesheet" href="/styles/thegympark.css">		  
	</head>
	<body>
		<div class="container">
			<?php echo $_smarty_tpl->getSubTemplate ("public/nmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mContent, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<div style="background:#3a3a3a;padding:20px;">
				<?php echo $_smarty_tpl->getSubTemplate ("public/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
	</body>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/scripts/source.js"></script>
</html>
<?php }} ?>