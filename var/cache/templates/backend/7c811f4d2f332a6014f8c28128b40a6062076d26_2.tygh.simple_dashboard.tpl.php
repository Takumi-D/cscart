<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:37
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\index\components\simple_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4452de550_79358904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c811f4d2f332a6014f8c28128b40a6062076d26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\index\\components\\simple_dashboard.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl' => 5,
    'tygh:views/index/components/todo_section/todo_section.tpl' => 1,
    'tygh:views/index/components/analytics_section/analytics_section.tpl' => 1,
    'tygh:common/daterange_picker.tpl' => 1,
  ),
),false)) {
function content_66c4b4452de550_79358904 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:simple_dashboard"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:simple_dashboard"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="simple-dashboard"
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
            data-ca-block-manager="main"
            data-ca-block-manager-has-layout="0"
        <?php }?>
    id="simple_dashboard">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:simple_dashboard_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:simple_dashboard_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->tpl_vars['custom_blocks_data']->value[smarty_modifier_enum("CustomBlockSections::TOP_PANEL")],'section'=>smarty_modifier_enum("CustomBlockSections::TOP_PANEL"),'type'=>smarty_modifier_enum("CustomBlockTypes::BLOCK")), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/todo_section/todo_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->tpl_vars['custom_blocks_data']->value[smarty_modifier_enum("CustomBlockSections::HEADER")],'section'=>smarty_modifier_enum("CustomBlockSections::HEADER"),'type'=>smarty_modifier_enum("CustomBlockTypes::BLOCK")), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->tpl_vars['custom_blocks_data']->value[smarty_modifier_enum("CustomBlockSections::ONBOARDING")],'section'=>smarty_modifier_enum("CustomBlockSections::ONBOARDING"),'type'=>smarty_modifier_enum("CustomBlockTypes::BLOCK")), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->tpl_vars['custom_blocks_data']->value[smarty_modifier_enum("CustomBlockSections::CONTENT")],'section'=>smarty_modifier_enum("CustomBlockSections::CONTENT"),'type'=>smarty_modifier_enum("CustomBlockTypes::BLOCK")), 0, true);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/analytics_section/analytics_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/custom_blocks_section/custom_blocks_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_section'=>$_smarty_tpl->tpl_vars['custom_blocks_data']->value[smarty_modifier_enum("CustomBlockSections::FOOTER")],'section'=>smarty_modifier_enum("CustomBlockSections::FOOTER"),'type'=>smarty_modifier_enum("CustomBlockTypes::BLOCK")), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:simple_dashboard_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--simple_dashboard--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:simple_dashboard"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons", null, null);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/daterange_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"dashboard_date_picker",'extra_class'=>"nav__actions-dashboard-date-picker pull-right",'data_url'=>fn_url("index.index?storefront_id=".((string)$_smarty_tpl->tpl_vars['storefront_id']->value)),'data_event'=>"ce.dashboard.daterange_picker",'result_ids'=>"simple_dashboard",'start_date'=>$_smarty_tpl->tpl_vars['time_from']->value,'end_date'=>$_smarty_tpl->tpl_vars['time_to']->value,'linked_calendars'=>false), 0, false);
?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard/daterange_picker.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
