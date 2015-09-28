<?php /* Smarty version Smarty-3.1.8, created on 2015-08-27 22:41:18
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\donations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2242955db0b1b32b5f8-63703059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df66ec6a9cb33a6f6d3a89a100e1fd42e09b7e6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\donations.tpl',
      1 => 1440729676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2242955db0b1b32b5f8-63703059',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db0b1b32b5f7_86494521',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db0b1b32b5f7_86494521')) {function content_55db0b1b32b5f7_86494521($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"donationsController",'foldername'=>"admin",'assign'=>"obj"),$_smarty_tpl);?>

<h1>Donations</h1>
<hr>
<div class="row">
	<div class="col-md-12">
		<table id=donationsTable class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
			<thead>
				<th>#</th>
				<th>Name</th>
				<th>Donation</th>
				<th>Date</th>
				<th>Email Updates</th>
				<th>Status</th>
			</thead>
			<tbody>
				<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mDonations) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
					<tr <?php if ($_smarty_tpl->tpl_vars['obj']->value->mDonations[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status']==1){?> class="success"<?php }else{ ?>class="danger"<?php }?>>
						<td><?php echo ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index']+1);?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDonations[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['first'];?>
 <?php echo $_smarty_tpl->tpl_vars['obj']->value->mDonations[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['last'];?>
</td>
						<td>$<?php echo $_smarty_tpl->tpl_vars['obj']->value->mDonations[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['gift_amount'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDonations[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['added_on'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDonations[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['email_updates'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['obj']->value->mDonations[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['status'];?>
</td>
					</tr>
				<?php endfor; endif; ?>
			</tbody>
		</table>
	</div>
</div>

<script>
var donations={
	init:function(){
		this.mTable = $( '#donationsTable' );
		
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
	donations.init();
});
</script><?php }} ?>