<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:29
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\menu\get_additional_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43d438978_23229419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'caee3f0ef69143295dedf2028f80dd0d283e81fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\menu\\get_additional_items.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43d438978_23229419 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('quick_menu','edit','quick_menu'));
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) !== "vendor") {?>
        <?php $_smarty_tpl->_assignInScope('enable_quick_menu', (($tmp = $_smarty_tpl->tpl_vars['config']->value['enable_quick_menu'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['enable_quick_menu']->value) {?>
        <?php $_smarty_tpl->_assignInScope('quick_menu_items', array('quick_menu'=>array('type'=>"divider",'position'=>900,'id_path'=>"quick_menu_divider"),'quick_menu_title'=>array('title'=>$_smarty_tpl->__("quick_menu"),'type'=>"title_divider",'position'=>901,'icon'=>"star_empty",'id_path'=>"quick_menu_title")));?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quick_menu']->value, 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['quick_menu_items']) ? $_smarty_tpl->tpl_vars['quick_menu_items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[mb_strtolower($_smarty_tpl->tpl_vars['sect']->value['section']['name'], 'UTF-8')] = array('type'=>"title_divider",'position'=>$_smarty_tpl->tpl_vars['sect']->value['section']['id'],'id_path'=>"quick_menu_divider",'title'=>$_smarty_tpl->tpl_vars['sect']->value['section']['name'],'icon'=>'angle_right');
$_smarty_tpl->_assignInScope('quick_menu_items', $_tmp_array);?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sect']->value['subsection'], 'subsect');
$_smarty_tpl->tpl_vars['subsect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsect']->value) {
$_smarty_tpl->tpl_vars['subsect']->do_else = false;
?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['quick_menu_items']) ? $_smarty_tpl->tpl_vars['quick_menu_items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[((string)(mb_strtolower($_smarty_tpl->tpl_vars['sect']->value['section']['name'], 'UTF-8')))."_".((string)$_smarty_tpl->tpl_vars['subsect']->value['menu_id'])] = array('title'=>$_smarty_tpl->tpl_vars['subsect']->value['name'],'position'=>$_smarty_tpl->tpl_vars['subsect']->value['position'],'href'=>$_smarty_tpl->tpl_vars['subsect']->value['url'],'id_path'=>"quick_menu_".((string)$_smarty_tpl->tpl_vars['subsect']->value['menu_id']),'attrs'=>array('class_href'=>"main-menu-1__link--regular main-menu-1__link--quick-link"),'icon'=>'minus');
$_smarty_tpl->_assignInScope('quick_menu_items', $_tmp_array);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['quick_menu_items']) ? $_smarty_tpl->tpl_vars['quick_menu_items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = array('position'=>999,'id_path'=>"opener_quick_menu_edit",'title'=>$_smarty_tpl->__("edit"),'attrs'=>array('class_href'=>"main-menu-1__link--regular cm-dialog-opener",'href'=>array("data-ca-target-id"=>"content_quick_menu_edit","data-ca-dialog-title"=>$_smarty_tpl->__("quick_menu"))),'icon'=>'edit');
$_smarty_tpl->_assignInScope('quick_menu_items', $_tmp_array);?>

        <?php $_smarty_tpl->_assignInScope('additional_items', $_smarty_tpl->tpl_vars['quick_menu_items']->value ,false ,2);?>
    <?php }
}
}
}
