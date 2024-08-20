<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:29
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\menu\get_primary_items.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43d30fc45_21968878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23d6e37ece8b17f8218811be73c22e8a29c5f1cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\menu\\get_primary_items.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/get_additional_items.tpl' => 1,
    'tygh:components/menu/get_block_manager_data.tpl' => 1,
  ),
),false)) {
function content_66c4b43d30fc45_21968878 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('home'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "get_items", null, null);?>
    <?php $_smarty_tpl->_assignInScope('additional_items', array());?>
        <?php $_smarty_tpl->_assignInScope('navigation_home', array('home'=>array('title'=>$_smarty_tpl->__("home"),'position'=>10,'icon'=>"icon-home",'href'=>"index.index",'id_path'=>"home",'active'=>($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "index" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] === "index"))));?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/get_additional_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
        <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['navigation']->value['static']['central']);?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('items', array_merge(array_merge($_smarty_tpl->tpl_vars['navigation_home']->value,((($tmp = $_smarty_tpl->tpl_vars['navigation']->value['static']['central'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp))),$_smarty_tpl->tpl_vars['additional_items']->value));?>
    <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/get_block_manager_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php $_smarty_tpl->_assignInScope('primary_items', $_smarty_tpl->tpl_vars['items']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('attrs_wrapper', $_smarty_tpl->tpl_vars['attrs_wrapper']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_collapse_default', $_smarty_tpl->tpl_vars['show_collapse_default']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('main_menu_primary_class', $_smarty_tpl->tpl_vars['main_menu_primary_class']->value ,false ,2);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
