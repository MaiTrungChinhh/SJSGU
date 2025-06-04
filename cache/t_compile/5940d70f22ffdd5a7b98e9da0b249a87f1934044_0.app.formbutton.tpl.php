<?php
/* Smarty version 4.3.1, created on 2025-06-04 19:27:22
  from 'app:formbutton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_684081faef1fa4_92416975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5940d70f22ffdd5a7b98e9da0b249a87f1934044' => 
    array (
      0 => 'app:formbutton.tpl',
      1 => 1749057646,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_684081faef1fa4_92416975 (Smarty_Internal_Template $_smarty_tpl) {
?><button class="pkp_button <?php echo $_smarty_tpl->tpl_vars['FBV_class']->value;?>
" type="<?php echo $_smarty_tpl->tpl_vars['FBV_type']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['FBV_disabled']->value) {?> disabled="disabled"<?php }?> <?php echo $_smarty_tpl->tpl_vars['FBV_buttonParams']->value;?>
><?php if ($_smarty_tpl->tpl_vars['FBV_translate']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['FBV_label']->value),$_smarty_tpl ) );
} else {
echo $_smarty_tpl->tpl_vars['FBV_label']->value;
}?></button>
<?php }
}
