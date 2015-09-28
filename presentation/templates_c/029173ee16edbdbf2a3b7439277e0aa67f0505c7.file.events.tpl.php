<?php /* Smarty version Smarty-3.1.8, created on 2015-08-27 23:03:21
         compiled from "C:\xampp\htdocs\walkforourwater/presentation/templates\admin\events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:961755db0a3c60da71-35807969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '029173ee16edbdbf2a3b7439277e0aa67f0505c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\walkforourwater/presentation/templates\\admin\\events.tpl',
      1 => 1440729519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '961755db0a3c60da71-35807969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_55db0a3c60da74_40328762',
  'variables' => 
  array (
    'obj' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55db0a3c60da74_40328762')) {function content_55db0a3c60da74_40328762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_load_presentation_object')) include 'C:\\xampp\\htdocs\\walkforourwater/presentation/smarty_plugins\\function.load_presentation_object.php';
?><?php echo smarty_function_load_presentation_object(array('filename'=>"eventsController",'foldername'=>"admin",'assign'=>"obj"),$_smarty_tpl);?>

	<h1>Events</h1>	
	<hr>
	<table id="my-events" class="table table-striped table-bordered table-hover table-responsive" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Date</th>
				<th>Time</th>
				<th>Options</th>
			</tr>
		</thead>
		<tbody>
		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['i'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['i']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['name'] = 'i';
$_smarty_tpl->tpl_vars['smarty']->value['section']['i']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['obj']->value->mEvents) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<td>
					<?php echo ($_smarty_tpl->getVariable('smarty')->value['section']['i']['index'])+1;?>

				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEvents[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['title'];?>

				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEvents[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['date'];?>

				</td>
				<td>
					<?php echo $_smarty_tpl->tpl_vars['obj']->value->mEvents[$_smarty_tpl->getVariable('smarty')->value['section']['i']['index']]['time'];?>

				</td>
				<td>
					<a href="">Edit</a>
				</td>
			</tr>
		<?php endfor; endif; ?>
		</tbody>
		<tfooter>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Date</th>
				<th>Time</th>
				<th>Options</th>
			</tr>
		</tfooter>
	</table>
	
<script>
var events = {
	init:function(){
		this.mTable = $( '#my-events' );
		
		this.loadEvents();
		
		this.event();
	},
	event:function(){
		
	},
	
	ui:{
		
	},
	
	loadEvents:function(){
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

$( function( ){
	events.init();
})
</script><?php }} ?>