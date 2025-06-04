<?php
/* Smarty version 4.3.1, created on 2025-06-04 19:29:50
  from 'app:useruserGroups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6840828e695567_61880748',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c96cbedb7b9e807e82b36410d639fd41f8f32c2c' => 
    array (
      0 => 'app:useruserGroups.tpl',
      1 => 1749057646,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:user/userGroupSelfRegistration.tpl' => 2,
    'app:controllers/extrasOnDemand.tpl' => 1,
  ),
),false)) {
function content_6840828e695567_61880748 (Smarty_Internal_Template $_smarty_tpl) {
$_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"userGroups",'title'=>"user.roles",'class'=>'border'));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"userGroups",'title'=>"user.roles",'class'=>'border'), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "userGroupSectionLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"user.register.registerAs",'contextName'=>$_smarty_tpl->tpl_vars['currentContext']->value->getLocalizedName()),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('label'=>$_smarty_tpl->tpl_vars['userGroupSectionLabel']->value,'translate'=>false,'list'=>true));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['userGroupSectionLabel']->value,'translate'=>false,'list'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<?php $_smarty_tpl->_subTemplateRender("app:user/userGroupSelfRegistration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context'=>$_smarty_tpl->tpl_vars['currentContext']->value,'authorUserGroups'=>$_smarty_tpl->tpl_vars['authorUserGroups']->value,'reviewerUserGroups'=>$_smarty_tpl->tpl_vars['reviewerUserGroups']->value,'readerUserGroups'=>$_smarty_tpl->tpl_vars['readerUserGroups']->value), 0, false);
?>
		<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('label'=>$_smarty_tpl->tpl_vars['userGroupSectionLabel']->value,'translate'=>false,'list'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php }?>

	<?php if ($_smarty_tpl->tpl_vars['showOtherContexts']->value) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "otherContextContent", null);?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['contexts']->value, 'context');
$_smarty_tpl->tpl_vars['context']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['context']->value) {
$_smarty_tpl->tpl_vars['context']->do_else = false;
?>
				<?php if (!$_smarty_tpl->tpl_vars['currentContext']->value || $_smarty_tpl->tpl_vars['context']->value->getId() != $_smarty_tpl->tpl_vars['currentContext']->value->getId()) {?>
				<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>$_smarty_tpl->tpl_vars['context']->value->getLocalizedName(),'list'=>true,'translate'=>false));
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>$_smarty_tpl->tpl_vars['context']->value->getLocalizedName(),'list'=>true,'translate'=>false), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
					<?php $_smarty_tpl->_subTemplateRender("app:user/userGroupSelfRegistration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context'=>$_smarty_tpl->tpl_vars['context']->value,'authorUserGroups'=>$_smarty_tpl->tpl_vars['authorUserGroups']->value,'reviewerUserGroups'=>$_smarty_tpl->tpl_vars['reviewerUserGroups']->value), 0, true);
?>
				<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array('title'=>$_smarty_tpl->tpl_vars['context']->value->getLocalizedName(),'list'=>true,'translate'=>false), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

		<?php if ($_smarty_tpl->tpl_vars['currentContext']->value) {?>
			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<div id="userGroupExtraFormFields" class="pkp_user_group_other_contexts">
					<?php $_smarty_tpl->_subTemplateRender("app:controllers/extrasOnDemand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"userGroupExtras",'widgetWrapper'=>"#userGroupExtraFormFields",'moreDetailsText'=>"user.profile.form.showOtherContexts",'lessDetailsText'=>"user.profile.form.hideOtherContexts",'extraContent'=>$_smarty_tpl->tpl_vars['otherContextContent']->value), 0, false);
?>
				</div>
			<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } else { ?>
			<?php echo $_smarty_tpl->tpl_vars['otherContextContent']->value;?>

		<?php }?>
	<?php }?>

	<?php $_block_plugin5 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin5, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('for'=>"interests"));
$_block_repeat=true;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"interests"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"interests",'id'=>"interests",'interests'=>$_smarty_tpl->tpl_vars['interests']->value,'label'=>"user.interests"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin5->smartyFBVFormSection(array('for'=>"interests"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"userGroups",'title'=>"user.roles",'class'=>'border'), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
