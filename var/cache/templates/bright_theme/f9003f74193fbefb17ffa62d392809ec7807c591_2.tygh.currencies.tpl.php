<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:55
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\blocks\currencies.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41b4260a7_68386885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9003f74193fbefb17ffa62d392809ec7807c591' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\blocks\\currencies.tpl',
      1 => 1724167137,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 4,
  ),
),false)) {
function content_66c4b41b4260a7_68386885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['currencies']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
<div id="currencies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('uid', uniqid());?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value > 0 && smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value) <= $_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-currencies hidden-phone hidden-tablet">
            <?php if ($_smarty_tpl->tpl_vars['text']->value) {?><div class="ty-currencies__txt"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
:</div><?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency', false, 'code');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency=".((string)$_smarty_tpl->tpl_vars['code']->value))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-currencies__item <?php if ($_smarty_tpl->tpl_vars['secondary_currency']->value == $_smarty_tpl->tpl_vars['code']->value) {?>ty-currencies__active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['format']->value == "name") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
)<?php } else {
echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];
}?></a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="visible-phone visible-tablet ty-select-wrapper"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0, false);
?></div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value == "name") {?>
            <?php $_smarty_tpl->_assignInScope('key_name', "description");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('key_name', '');?>
        <?php }?>
        <div class="ty-select-wrapper"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0, true);
?></div>
    <?php }?>
<!--currencies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/currencies.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/currencies.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['currencies']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
<div id="currencies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('uid', uniqid());?>
    <?php if ($_smarty_tpl->tpl_vars['dropdown_limit']->value > 0 && smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value) <= $_smarty_tpl->tpl_vars['dropdown_limit']->value) {?>
        <div class="ty-currencies hidden-phone hidden-tablet">
            <?php if ($_smarty_tpl->tpl_vars['text']->value) {?><div class="ty-currencies__txt"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
:</div><?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency', false, 'code');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
                <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency=".((string)$_smarty_tpl->tpl_vars['code']->value))), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-currencies__item <?php if ($_smarty_tpl->tpl_vars['secondary_currency']->value == $_smarty_tpl->tpl_vars['code']->value) {?>ty-currencies__active<?php }?>"><?php if ($_smarty_tpl->tpl_vars['format']->value == "name") {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;(<?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];?>
)<?php } else {
echo $_smarty_tpl->tpl_vars['currency']->value['symbol'];
}?></a>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <div class="visible-phone visible-tablet ty-select-wrapper"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0, true);
?></div>
    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['format']->value == "name") {?>
            <?php $_smarty_tpl->_assignInScope('key_name', "description");?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('key_name', '');?>
        <?php }?>
        <div class="ty-select-wrapper"><?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'suffix'=>"currency_".((string)$_smarty_tpl->tpl_vars['uid']->value),'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>$_smarty_tpl->tpl_vars['key_name']->value), 0, true);
?></div>
    <?php }?>
<!--currencies_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
