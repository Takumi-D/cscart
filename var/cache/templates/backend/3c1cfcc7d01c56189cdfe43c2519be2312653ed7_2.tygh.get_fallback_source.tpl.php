<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:27
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\icons\get_fallback_source.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43b1043b0_69629244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c1cfcc7d01c56189cdfe43c2519be2312653ed7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\icons\\get_fallback_source.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43b1043b0_69629244 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.unset_key.php','function'=>'smarty_modifier_unset_key',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "get_fallback_source", null, null);
$_smarty_tpl->_assignInScope('icon_prefix', "icon-");
$_smarty_tpl->_assignInScope('icon_prefix_length', strlen((string) $_smarty_tpl->tpl_vars['icon_prefix']->value));
$_smarty_tpl->_assignInScope('config', \Tygh\Registry::get('config'));
$_smarty_tpl->_assignInScope('design_backend', fn_get_rel_dir($_smarty_tpl->tpl_vars['config']->value['dir']['design_backend']));
if ($_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->_assignInScope('class_array', smarty_modifier_explode(" ",$_smarty_tpl->tpl_vars['class']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class_array']->value, 'class_item', true, 'class_index');
$_smarty_tpl->tpl_vars['class_item']->iteration = 0;
$_smarty_tpl->tpl_vars['class_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['class_index']->value => $_smarty_tpl->tpl_vars['class_item']->value) {
$_smarty_tpl->tpl_vars['class_item']->do_else = false;
$_smarty_tpl->tpl_vars['class_item']->iteration++;
$_smarty_tpl->tpl_vars['class_item']->last = $_smarty_tpl->tpl_vars['class_item']->iteration === $_smarty_tpl->tpl_vars['class_item']->total;
$__foreach_class_item_15_saved = $_smarty_tpl->tpl_vars['class_item'];
$_smarty_tpl->_assignInScope('icon_path', "icons/icon-".((string)(smarty_modifier_replace($_smarty_tpl->tpl_vars['class_item']->value,'_','-'))).".svg");
if (substr($_smarty_tpl->tpl_vars['class_item']->value,0,$_smarty_tpl->tpl_vars['icon_prefix_length']->value) === $_smarty_tpl->tpl_vars['icon_prefix']->value) {
$_smarty_tpl->_assignInScope('class_array', smarty_modifier_unset_key($_smarty_tpl->tpl_vars['class_array']->value,$_smarty_tpl->tpl_vars['class_index']->value));
$_smarty_tpl->_assignInScope('source', smarty_modifier_replace(substr($_smarty_tpl->tpl_vars['class_item']->value,$_smarty_tpl->tpl_vars['icon_prefix_length']->value),"-","_"));
} elseif (!strpos($_smarty_tpl->tpl_vars['class_item']->value,"-") && file_exists(((string)$_smarty_tpl->tpl_vars['design_backend']->value)."templates/".((string)$_smarty_tpl->tpl_vars['icon_path']->value))) {
$_smarty_tpl->_assignInScope('class_array', smarty_modifier_unset_key($_smarty_tpl->tpl_vars['class_array']->value,$_smarty_tpl->tpl_vars['class_index']->value));
$_smarty_tpl->_assignInScope('source', $_smarty_tpl->tpl_vars['class_item']->value);
}
if ($_smarty_tpl->tpl_vars['class_item']->last) {
$_smarty_tpl->_assignInScope('class', implode(" ",($_smarty_tpl->tpl_vars['class_array']->value)));
}
$_smarty_tpl->tpl_vars['class_item'] = $__foreach_class_item_15_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['source']->value && (substr($_smarty_tpl->tpl_vars['source']->value,0,$_smarty_tpl->tpl_vars['icon_prefix_length']->value)) === $_smarty_tpl->tpl_vars['icon_prefix']->value) {
$_smarty_tpl->_assignInScope('source', substr($_smarty_tpl->tpl_vars['source']->value,$_smarty_tpl->tpl_vars['icon_prefix_length']->value));
}
$_smarty_tpl->_assignInScope('source', $_smarty_tpl->tpl_vars['source']->value ,false ,2);
$_smarty_tpl->_assignInScope('class', $_smarty_tpl->tpl_vars['class']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
