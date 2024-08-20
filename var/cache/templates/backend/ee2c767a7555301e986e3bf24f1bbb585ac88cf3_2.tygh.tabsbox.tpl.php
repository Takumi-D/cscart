<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:40
  from 'C:\xampp\htdocs\cscart\design\backend\templates\common\tabsbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b44824f0e8_02821255',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee2c767a7555301e986e3bf24f1bbb585ac88cf3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\tabsbox.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b44824f0e8_02821255 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.empty_tabs.php','function'=>'smarty_modifier_empty_tabs',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['active_tab']->value) {
$_smarty_tpl->_assignInScope('active_tab', $_REQUEST['selected_section']);
}
$_smarty_tpl->_assignInScope('empty_tab_ids', smarty_modifier_empty_tabs($_smarty_tpl->tpl_vars['content']->value,$_smarty_tpl->tpl_vars['navigation']->value['tabs']));
$_smarty_tpl->_assignInScope('show_tabs_navigation', (($tmp = $_smarty_tpl->tpl_vars['show_tabs_navigation']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('tabs_count', 0);
$_smarty_tpl->_assignInScope('has_ajax_tab', false);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['tabs'], 'navigation_tab', false, 'navigation_tab_key');
$_smarty_tpl->tpl_vars['navigation_tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['navigation_tab_key']->value => $_smarty_tpl->tpl_vars['navigation_tab']->value) {
$_smarty_tpl->tpl_vars['navigation_tab']->do_else = false;
if ($_smarty_tpl->tpl_vars['navigation_tab']->value['ajax']) {
$_smarty_tpl->_assignInScope('has_ajax_tab', true);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['empty_tab_ids']->value, 'empty_tab_id');
$_smarty_tpl->tpl_vars['empty_tab_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['empty_tab_id']->value) {
$_smarty_tpl->tpl_vars['empty_tab_id']->do_else = false;
if ($_smarty_tpl->tpl_vars['navigation_tab_key']->value === $_smarty_tpl->tpl_vars['empty_tab_id']->value) {
$_smarty_tpl->_assignInScope('tabs_count', $_smarty_tpl->tpl_vars['tabs_count']->value+1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('is_show_tab_items', ($_smarty_tpl->tpl_vars['navigation']->value['tabs'] && ($_smarty_tpl->tpl_vars['has_ajax_tab']->value || (smarty_modifier_count($_smarty_tpl->tpl_vars['navigation']->value['tabs'])-$_smarty_tpl->tpl_vars['tabs_count']->value) > 1)));
$_smarty_tpl->_assignInScope('enable_fill', (($tmp = $_smarty_tpl->tpl_vars['enable_fill']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['navigation']->value['tabs']) {
$_smarty_tpl->_assignInScope('with_conf', false);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tab_items", null, null);?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['tabs'], 'tab', false, 'key');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <?php if ((!$_smarty_tpl->tpl_vars['tabs_section']->value || $_smarty_tpl->tpl_vars['tabs_section']->value == $_smarty_tpl->tpl_vars['tab']->value['section']) && ($_smarty_tpl->tpl_vars['tab']->value['hidden'] || !smarty_modifier_in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['empty_tab_ids']->value))) {?>
        <li id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_suffix']->value, ENT_QUOTES, 'UTF-8');?>
" class="<?php if ($_smarty_tpl->tpl_vars['tab']->value['hidden'] == smarty_modifier_enum("YesNo::YES")) {?>hidden <?php }
if ($_smarty_tpl->tpl_vars['tab']->value['js']) {?>cm-js<?php } elseif ($_smarty_tpl->tpl_vars['tab']->value['ajax']) {?>cm-js cm-ajax<?php if ($_smarty_tpl->tpl_vars['tab']->value['ajax_onclick']) {?> cm-ajax-onclick<?php }
}
if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {?> active<?php }?> <?php if ($_smarty_tpl->tpl_vars['tab']->value['properties']) {?>extra-tab<?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['active_tab']->value) {
echo $_smarty_tpl->tpl_vars['active_tab_extra']->value;
}?>

            <?php if ($_smarty_tpl->tpl_vars['tab']->value['properties']) {?>
                <?php $_smarty_tpl->_assignInScope('with_conf', true);?>
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"dialog",'class'=>"cm-ajax-force hand icon-cog",'title'=>$_smarty_tpl->tpl_vars['tab']->value['properties']['title'],'target_id'=>"content_properties_".((string)$_smarty_tpl->tpl_vars['key']->value).((string)$_smarty_tpl->tpl_vars['id_suffix']->value),'href'=>$_smarty_tpl->tpl_vars['tab']->value['properties']['href']), true);?>

            <?php }?>

            <a <?php if ($_smarty_tpl->tpl_vars['tab']->value['href']) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['tab']->value['href']), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tab']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tabs_navigation", 'tabs_navigation', null);?>
<div class="cm-j-tabs<?php if ($_smarty_tpl->tpl_vars['track']->value) {?> cm-track<?php }?> tabs <?php if (!$_smarty_tpl->tpl_vars['is_show_tab_items']->value) {?>hidden<?php }?> <?php if ($_smarty_tpl->tpl_vars['with_conf']->value) {?>tabs-with-conf<?php }?> <?php if ($_smarty_tpl->tpl_vars['enable_fill']->value) {?>tabs--enable-fill<?php }?> tabs--count-<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['navigation']->value['tabs']), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_tabs']->value, ENT_QUOTES, 'UTF-8');?>
">
    <ul class="nav nav-tabs">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tab_items');?>

    </ul>
</div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['show_tabs_navigation']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tabs_navigation');?>

<?php }?>
<div class="cm-tabs-content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php } else { ?>
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
if (!$_smarty_tpl->tpl_vars['show_tabs_navigation']->value) {?>
        <?php $_smarty_tpl->_assignInScope('tabs_navigation', $_smarty_tpl->tpl_vars['tabs_navigation']->value ,false ,2);
}
}
}
