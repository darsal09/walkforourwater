<?php /* Smarty version Smarty-3.1.8, created on 2015-11-09 08:42:43
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1022955db098e1fe974-01224426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0c7be88654e305195c7828c50057ebbce1d445c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\main.tpl',
      1 => 1447076561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1022955db098e1fe974-01224426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db098e504078_75531195',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db098e504078_75531195')) {function content_55db098e504078_75531195($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"adminController",'foldername'=>"admin",'assign'=>"obj"),$_smarty_tpl);?>

<!DOCTYPE html>
<html>
  <head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<title>Walk for our Water</title>
		<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
		<link rel="https://cdn.datatables.net/1.10.8/css/jquery.dataTables.min.css">
		<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/styles/thegympark.css">		  
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>		
		<![endif]-->
		<link rel="shortcut icon" type="image/x-icon" href="" />
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	</head>
	<body>
			<?php echo $_smarty_tpl->getSubTemplate ("public/nmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="row" style="background:rgba(88, 151, 251, 0.53); margin-top:-18px;">
				<div class="col-md-3">
					<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboardMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
				<div class="col-md-9" style="background:white;">
					<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['obj']->value->mContent, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
                <div class="foooter">
                    &copy; 2015-<?php echo date('Y');?>

                </div>
            </div>
	</body>
	<script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.8/js/dataTables.bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>		
	<script type="text/javascript" src="/scripts/source.js"></script>
	<script type="text/javascript" src="/scripts/validateForm.js"></script>
</html>
<?php }} ?>