<?php
/* Smarty version 4.3.1, created on 2025-02-24 06:12:28
  from 'app:installinstallComplete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_67bc0dcc0cc781_53561160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fede28f00b62c3a29833ec737ea74ca4df43658' => 
    array (
      0 => 'app:installinstallComplete.tpl',
      1 => 1732910728,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bc0dcc0cc781_53561160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210419047967bc0dcc0c3671_70615840', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_210419047967bc0dcc0c3671_70615840 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_210419047967bc0dcc0c3671_70615840',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.installApplication"),$_smarty_tpl ) );?>

	</h1>

	<div class="app__contentPanel">

		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "loginUrl", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"login"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.installationComplete",'loginUrl'=>$_smarty_tpl->tpl_vars['loginUrl']->value),$_smarty_tpl ) );?>


		<?php if ($_smarty_tpl->tpl_vars['writeConfigFailed']->value) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.overwriteConfigFileInstructions"),$_smarty_tpl ) );?>


			<form class="pkp_form" action="#">
				<p>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"installer.contentsOfConfigFile"),$_smarty_tpl ) );?>
:<br />
				<textarea name="config" cols="80" rows="20" class="textArea" style="font-family: Courier,'Courier New',fixed-width"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['configFileContents']->value ));?>
</textarea>
				</p>
			</form>
		<?php }?>
	</div>
<?php
}
}
/* {/block "page"} */
}
