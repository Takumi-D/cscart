<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:26
  from 'C:\xampp\htdocs\cscart\design\backend\templates\top_bar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43acd2e82_16548889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70732e848e49432052b827359ac23b12aa0fb960' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\top_bar.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/mobile_menu.tpl' => 1,
    'tygh:components/menu/logo_menu.tpl' => 1,
    'tygh:components/menu/storefront_menu.tpl' => 1,
    'tygh:components/menu/search_menu.tpl' => 1,
    'tygh:components/menu/notification_menu.tpl' => 1,
    'tygh:components/menu/user_menu.tpl' => 1,
  ),
),false)) {
function content_66c4b43acd2e82_16548889 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
$_smarty_tpl->_assignInScope('scroll_header', (($tmp = $_smarty_tpl->tpl_vars['config']->value['scroll_header'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
<div class="top-bar <?php if ($_smarty_tpl->tpl_vars['scroll_header']->value) {?>top-bar--scroll-header<?php }?>" id="top_bar">
    <div class="top-bar__inner
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed'] || $_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>top-bar__inner--disabled<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['scroll_header']->value) {?>top-bar__inner--scroll-header<?php }?>"
        data-ca-top-bar="inner"
    >
        <div class="top-bar__left" id="top_bar_left">
            <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/mobile_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/logo_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/storefront_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!--top_bar_left--></div>

        <div class="top-bar__search" id="top_bar_search">
            <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/search_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!--top_bar_search--></div>

        <div class="top-bar__right" id="top_bar_right">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:top_bar_right"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:top_bar_right"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/notification_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/user_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:top_bar_right"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--top_bar_right--></div>
    </div>
<!--top_bar--></div>
<?php }
}
