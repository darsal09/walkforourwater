<?php /* Smarty version Smarty-3.1.8, created on 2015-08-27 23:00:56
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\supporters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2152255db0b1ce953f0-86074000%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ee377fcd5d54cfa56ddd5b86ecc97c19be1024' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\supporters.tpl',
      1 => 1440730854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2152255db0b1ce953f0-86074000',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db0b1ce99270_99264721',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db0b1ce99270_99264721')) {function content_55db0b1ce99270_99264721($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"supportersController",'foldername'=>"admin",'assign'=>"obj"),$_smarty_tpl);?>

<h1>Supporters</h1>
<hr>
<div class="row">
	<div class="col-md-12">
		<table id="supportersTable" class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>District</th>
				<th>Type</th>
				<th>link</th>
				<th>Image</th>
			</thead>
			<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mSupporters) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['i']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['i']['total']);
?>
					<tr>
						<td><?php echo ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mSupporters[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['first'];?>
 <?php echo $_smarty_tpl->tpl_vars['obj']->value->mSupporters[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['last'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mSupporters[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['district'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mSupporters[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['type'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mSupporters[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['link'];?>
</td>
						<td><img src="<?php echo $_smarty_tpl->tpl_vars['obj']->value->mSupporters[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['image'];?>
" width=200></td>
					</tr>
				<?php endfor; endif; ?>
			</tbody>
		</table>
	</div>
</div>

<script>
var supporters={
	init:function(){
		this.mTable = $( '#supportersTable' );
		
		this.mTable.DataTable({
			columnDefs: [ {
				targets: [ 0 ],
				orderData: [ 0, 1 ]
			}, {
				targets: [ 1 ],
				orderData: [ 1, 0 ]
			}, {
				targets: [ 4 ],
				orderData: [ 4, 0 ]
			} ]
		});
	}
};
$( function(){
	supporters.init();
});
</script><?php }} ?>