<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:29
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\menu\get_block_manager_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43d5822a8_05454758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55a9430f3f3488b64a817b3ae140252a43e84c87' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\menu\\get_block_manager_data.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43d5822a8_05454758 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
if ((defined('BLOCK_MANAGER_MODE') ? constant('BLOCK_MANAGER_MODE') : null)) {?>
    <?php $_smarty_tpl->_assignInScope('block_manager_attrs', array("data-ca-block-manager"=>"main","data-ca-block-manager-has-layout"=>0,"data-ca-block-manager-dispatch"=>"custom_menu","data-ca-block-manager-blocks-place"=>"true","data-ca-block-manager-grid-id"=>"header_main_menu"));?>
    <?php $_smarty_tpl->_assignInScope('attrs_wrapper', $_smarty_tpl->tpl_vars['block_manager_attrs']->value);?>

    <?php $_smarty_tpl->_assignInScope('show_collapse_default', false);?>
    <?php $_smarty_tpl->_assignInScope('main_menu_primary_class', "cs-main-menu__primary--block-manager");?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'item_key');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_23_saved = $_smarty_tpl->tpl_vars['item'];
?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['wrapper']["data-ca-block-manager-blocks-place"] = "true";
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['wrapper']["data-ca-block-manager-grid-id"] = "main_menu_1_".((string)$_smarty_tpl->tpl_vars['item']->iteration);
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['is_show'] = true;
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>

        <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] !== "title_divider" && $_smarty_tpl->tpl_vars['item']->value['type'] !== "divider") {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['href']["data-ca-menu"] = "mainMenuLink";
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['href']["data-ca-menu-id-path"] = $_smarty_tpl->tpl_vars['item']->value['id_path'];
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") && $_smarty_tpl->tpl_vars['item']->value['root_hidden']) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['class_href'] = ((string)$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['class_href'])." main-menu-1__link--root-hidden";
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") && $_smarty_tpl->tpl_vars['item']->value['hidden_by_permissions']) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['class_href'] = ((string)$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item_key']->value]['attrs']['class_href'])." main-menu-1__link--hidden-by-permissions";
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['is_custom']) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['is_accordion'] = true;
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
            <?php }?>
        <?php }?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['items'], 'item_2', false, 'item_key_2');
$_smarty_tpl->tpl_vars['item_2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_key_2']->value => $_smarty_tpl->tpl_vars['item_2']->value) {
$_smarty_tpl->tpl_vars['item_2']->do_else = false;
?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['items'][$_smarty_tpl->tpl_vars['item_key_2']->value]['is_show'] = true;
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>

            <?php if ($_smarty_tpl->tpl_vars['item_2']->value['type'] !== "title_divider" && $_smarty_tpl->tpl_vars['item_2']->value['type'] !== "divider") {?>
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") && $_smarty_tpl->tpl_vars['item_2']->value['root_hidden']) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['items'][$_smarty_tpl->tpl_vars['item_key_2']->value]['attrs']['class_href'] = ((string)$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item_key']->value]['items'][$_smarty_tpl->tpl_vars['item_key_2']->value]['attrs']['class_href'])." main-menu-2__link--root-hidden";
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") && $_smarty_tpl->tpl_vars['item_2']->value['hidden_by_permissions']) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['items']) ? $_smarty_tpl->tpl_vars['items']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[$_smarty_tpl->tpl_vars['item_key']->value]['items'][$_smarty_tpl->tpl_vars['item_key_2']->value]['attrs']['class_href'] = ((string)$_smarty_tpl->tpl_vars['items']->value[$_smarty_tpl->tpl_vars['item_key']->value]['items'][$_smarty_tpl->tpl_vars['item_key_2']->value]['attrs']['class_href'])." main-menu-2__link--hidden-by-permissions";
$_smarty_tpl->_assignInScope('items', $_tmp_array);?>
                <?php }?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_23_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_assignInScope('items', $_smarty_tpl->tpl_vars['items']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('attrs_wrapper', $_smarty_tpl->tpl_vars['attrs_wrapper']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('show_collapse_default', $_smarty_tpl->tpl_vars['show_collapse_default']->value ,false ,2);?>
    <?php $_smarty_tpl->_assignInScope('main_menu_primary_class', $_smarty_tpl->tpl_vars['main_menu_primary_class']->value ,false ,2);
}
}
}
