<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:29
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\menu\main_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43d8617b4_49719209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdb6cd92a4a43f5a3719628e9d42c41a422825a6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\menu\\main_menu.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/menu/main_menu.tpl' => 2,
    'tygh:views/block_manager/frontend_render/block.tpl' => 1,
    'tygh:components/menu/add_item.tpl' => 1,
  ),
),false)) {
function content_66c4b43d8617b4_49719209 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'menu_attrs' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cscart\\var\\cache\\templates\\backend\\cdb6cd92a4a43f5a3719628e9d42c41a422825a6_2.tygh.main_menu.tpl.php',
    'uid' => 'cdb6cd92a4a43f5a3719628e9d42c41a422825a6',
    'call_name' => 'smarty_template_function_menu_attrs_174044976566c4b43d7d3413_27891810',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('admin_menu.edit_item_title'));
if ($_smarty_tpl->tpl_vars['navigation']->value['static']['central'] || $_smarty_tpl->tpl_vars['navigation']->value['static']['top']) {
$_smarty_tpl->_assignInScope('default_menu_item_icon', "file_alt");
$_smarty_tpl->_assignInScope('selected_id_path', ((string)$_smarty_tpl->tpl_vars['navigation']->value['selected_tab'])."/".((string)$_smarty_tpl->tpl_vars['navigation']->value['subsection']));
$_smarty_tpl->_assignInScope('level', (($tmp = $_smarty_tpl->tpl_vars['level']->value ?? null)===null||$tmp==='' ? 1 ?? null : $tmp));
$_smarty_tpl->_assignInScope('prefix', (($tmp = $_smarty_tpl->tpl_vars['prefix']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('suffix', (($tmp = $_smarty_tpl->tpl_vars['suffix']->value ?? null)===null||$tmp==='' ? "1" ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_title_limit', 15);?>     <?php $_smarty_tpl->_assignInScope('show_collapse_default', (($tmp = $_smarty_tpl->tpl_vars['show_collapse_default']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('attrs_wrapper', (isset($_smarty_tpl->tpl_vars['item_parent']->value['attrs']['wrapper'])) ? (array_merge($_smarty_tpl->tpl_vars['attrs_wrapper']->value,$_smarty_tpl->tpl_vars['item_parent']->value['attrs']['wrapper'])) : ((($tmp = $_smarty_tpl->tpl_vars['attrs_wrapper']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp)));
if (!(isset($_smarty_tpl->tpl_vars['item_parent']->value['attrs']['wrapper']))) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['item_parent']) ? $_smarty_tpl->tpl_vars['item_parent']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['attrs']['wrapper'] = array();
$_smarty_tpl->_assignInScope('item_parent', $_tmp_array);
}?><div class="accordion main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
" <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['attrs_wrapper']->value), true);?>
 id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'item_key');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_26_saved = $_smarty_tpl->tpl_vars['item'];
if ($_smarty_tpl->tpl_vars['item']->value['status'] === smarty_modifier_enum("ObjectStatuses::DISABLED") && !$_smarty_tpl->tpl_vars['item']->value['is_show']) {
continue 1;
}
$_smarty_tpl->_assignInScope('selected_item', $_smarty_tpl->tpl_vars['level']->value === 1 ? ($_smarty_tpl->tpl_vars['item_key']->value === $_smarty_tpl->tpl_vars['navigation']->value['selected_tab']) : ($_smarty_tpl->tpl_vars['item_key_parent']->value === $_smarty_tpl->tpl_vars['navigation']->value['selected_tab'] && $_smarty_tpl->tpl_vars['item_key']->value === $_smarty_tpl->tpl_vars['navigation']->value['subsection']));
$_smarty_tpl->_assignInScope('item_title', (($tmp = $_smarty_tpl->tpl_vars['item']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['item_key']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_icon', (($tmp = $_smarty_tpl->tpl_vars['item']->value['icon'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_menu_item_icon']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_show_first_link', false);
$_smarty_tpl->_assignInScope('item_title_length', mb_strlen($_smarty_tpl->tpl_vars['item_title']->value, 'UTF-8'));
if ($_smarty_tpl->tpl_vars['item']->value['items']) {
$_smarty_tpl->_assignInScope('first_item_key', key($_smarty_tpl->tpl_vars['item']->value['items']));
$_smarty_tpl->_assignInScope('first_item', $_smarty_tpl->tpl_vars['item']->value['items'][$_smarty_tpl->tpl_vars['first_item_key']->value]);
$_smarty_tpl->_assignInScope('is_show_first_link', ($_smarty_tpl->tpl_vars['level']->value === 1 && $_smarty_tpl->tpl_vars['first_item']->value && $_smarty_tpl->tpl_vars['first_item']->value['type'] !== "button" && $_smarty_tpl->tpl_vars['first_item']->value['href'] && $_smarty_tpl->tpl_vars['first_item']->value['new_window'] !== smarty_modifier_enum("YesNo::YES") && (!$_smarty_tpl->tpl_vars['first_item']->value['attrs'] || ($_smarty_tpl->tpl_vars['first_item']->value['attrs'] && $_smarty_tpl->tpl_vars['first_item']->value['attrs']['class_href'] && !strstr($_smarty_tpl->tpl_vars['first_item']->value['attrs']['class_href'],"cm-dialog-opener")))));
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "main_menu_link_icon", null, null);
$_smarty_tpl->_assignInScope('icon_active_class', $_smarty_tpl->tpl_vars['selected_item']->value ? "main-menu-".((string)$_smarty_tpl->tpl_vars['level']->value)."__icon--active" : '');?><span class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-icon"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>$_smarty_tpl->tpl_vars['item_icon']->value,'class'=>"main-menu-".((string)$_smarty_tpl->tpl_vars['level']->value)."__icon ".((string)$_smarty_tpl->tpl_vars['icon_active_class']->value)),$_smarty_tpl);?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "main_menu_item", null, null);?><div class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__item <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['items'] || $_smarty_tpl->tpl_vars['item']->value['subitems'] || $_smarty_tpl->tpl_vars['item']->value['is_accordion']) {?>accordion-group<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['attrs']['class'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['item']->value['attrs']['main']), true);?>
><?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === "title_divider") {?><div><div class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link--title-divider <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['item']->value['attrs']['href']), true);?>
><?php if ($_smarty_tpl->tpl_vars['level']->value === 1) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_menu_link_icon');
}?><span class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-content"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_title']->value, ENT_QUOTES, 'UTF-8');?>
</span></div></div><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === "divider") {?><div><div class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__divider"></div></div><?php } elseif ($_smarty_tpl->tpl_vars['item']->value['items'] || $_smarty_tpl->tpl_vars['item']->value['subitems'] || $_smarty_tpl->tpl_vars['item']->value['is_accordion']) {?><div class="accordion-heading main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__accordion-heading"><?php if ($_smarty_tpl->tpl_vars['level']->value === 1 && $_smarty_tpl->tpl_vars['is_show_first_link']->value) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['first_item']->value['href']), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link--icon <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['first_item']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['first_item']->value['attrs']['href']), true);?>
><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_menu_link_icon');?>
</a><?php }?><a href="#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->iteration, ENT_QUOTES, 'UTF-8');?>
_body" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="accordion-toggle main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link cm-no-ajax <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['selected_item']->value) {?>main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__toggle--active <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['is_show_first_link']->value) {?>main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link--with-icon <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['new_window'] === smarty_modifier_enum("YesNo::YES")) {?>target="_blank" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>data-toggle="collapse" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
data-parent="#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item_title_length']->value > $_smarty_tpl->tpl_vars['item_title_limit']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['item']->value['attrs']['href']), true);?>
><?php if ($_smarty_tpl->tpl_vars['level']->value === 1 && !$_smarty_tpl->tpl_vars['is_show_first_link']->value) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_menu_link_icon');
}?><span class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-content <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['selected_item']->value) {?>main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-content--active <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item_title_length']->value > $_smarty_tpl->tpl_vars['item_title_limit']->value+5) {?>main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-content--long <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_title']->value, ENT_QUOTES, 'UTF-8');?>
</span></a></div><div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
_main_menu_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->iteration, ENT_QUOTES, 'UTF-8');?>
_body" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="accordion-body collapse main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__accordion-body <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['show_collapse_default']->value) {?>collapse--overflow-default<?php }?> <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['selected_item']->value) {?>in<?php }?>"><div class="accordion-inner main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__accordion-inner"><?php $_smarty_tpl->_subTemplateRender("tygh:components/menu/main_menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['items'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['item']->value['subitems'] ?? null : $tmp),'level'=>$_smarty_tpl->tpl_vars['level']->value+1,'suffix'=>((string)$_smarty_tpl->tpl_vars['suffix']->value)."_".((string)$_smarty_tpl->tpl_vars['item']->iteration),'item_parent'=>$_smarty_tpl->tpl_vars['item']->value,'item_key_parent'=>$_smarty_tpl->tpl_vars['item_key']->value), 0, true);
?></div></div><?php } else { ?><div class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-wrapper"><?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === "button") {?><button <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
} else { ?><a href="<?php if ($_smarty_tpl->tpl_vars['item']->value['href']) {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_key']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item']->value['id_path']) {?>id="<?php echo htmlspecialchars((string) smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['id_path'],"/","_"),".","_"), ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['selected_item']->value) {?>main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link--active <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['attrs']['class_href'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['new_window'] === smarty_modifier_enum("YesNo::YES")) {?>target="_blank" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item_title_length']->value > $_smarty_tpl->tpl_vars['item_title_limit']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'menu_attrs', array('attrs'=>$_smarty_tpl->tpl_vars['item']->value['attrs']['href']), true);?>
><?php if ($_smarty_tpl->tpl_vars['level']->value === 1) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_menu_link_icon');
}?><span class="main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-content <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['selected_item']->value) {?>main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-content--active <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['item_title_length']->value > $_smarty_tpl->tpl_vars['item_title_limit']->value+5) {?>main-menu-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
__link-content--long <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_title']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === "button") {?></button><?php } else { ?></a><?php }?></div><?php }?></div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('extra_params_block', $_smarty_tpl->tpl_vars['level']->value === 1 ? array('id_path'=>$_smarty_tpl->tpl_vars['item']->value['id_path'],'menu_level'=>1) : array('id_path'=>$_smarty_tpl->tpl_vars['item']->value['id_path']));
ob_start();
echo $_smarty_tpl->__("admin_menu.edit_item_title");
$_prefixVariable24=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'main_menu_item'),'block'=>$_smarty_tpl->tpl_vars['item']->value,'is_clearfix'=>false,'location_data'=>$_smarty_tpl->tpl_vars['location_data']->value,'snapping_id'=>$_smarty_tpl->tpl_vars['item']->value['id_path'],'object_type'=>"menu_item",'parent_grid'=>array('location_id'=>$_smarty_tpl->tpl_vars['item']->value['section']),'suffix'=>$_smarty_tpl->tpl_vars['id']->value,'popup_title'=>$_prefixVariable24.": ".((string)(smarty_modifier_truncate($_smarty_tpl->tpl_vars['item_title']->value,100))),'show_delete'=>!$_smarty_tpl->tpl_vars['item']->value['is_main'],'is_popup'=>true,'block_menu_compact'=>true,'return_url'=>rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']),'extra_params'=>$_smarty_tpl->tpl_vars['extra_params_block']->value,'is_editing_allowed'=>$_smarty_tpl->tpl_vars['item']->value['is_editing_allowed']), 0, true);
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_26_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('extra_params_add', $_smarty_tpl->tpl_vars['level']->value === 1 ? array('id_path'=>0,'menu_level'=>1) : array('id_path'=>$_smarty_tpl->tpl_vars['item']->value['id_path']));
$_smarty_tpl->_subTemplateRender("tygh:components/menu/add_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('menu_name'=>(($tmp = $_smarty_tpl->tpl_vars['item_parent']->value['title'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['item_key_parent']->value) ?? null : $tmp),'id'=>$_smarty_tpl->tpl_vars['item_key_parent']->value,'has_items'=>($_smarty_tpl->tpl_vars['item_parent']->value['items'] || $_smarty_tpl->tpl_vars['item_parent']->value['subitems']),'extra_params'=>$_smarty_tpl->tpl_vars['extra_params_add']->value,'is_subitem'=>($_smarty_tpl->tpl_vars['item_parent']->value['items'] || $_smarty_tpl->tpl_vars['item_parent']->value['subitems'])), 0, false);
?></div><?php }
}
/* smarty_template_function_menu_attrs_174044976566c4b43d7d3413_27891810 */
if (!function_exists('smarty_template_function_menu_attrs_174044976566c4b43d7d3413_27891810')) {
function smarty_template_function_menu_attrs_174044976566c4b43d7d3413_27891810(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('attrs'=>array()), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attrs']->value, 'value', false, 'attr');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attr']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attr']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}}
/*/ smarty_template_function_menu_attrs_174044976566c4b43d7d3413_27891810 */
}
