<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:26
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\menu\actions_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43aa95339_22566490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d758e5cb768e0b6d1b32083a53f256bb1d66a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\menu\\actions_menu.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/tools.tpl' => 1,
  ),
),false)) {
function content_66c4b43aa95339_22566490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),));
\Tygh\Languages\Helper::preloadLangVars(array('actions.more'));
if ($_smarty_tpl->tpl_vars['items']->value) {
$_smarty_tpl->_assignInScope('actions_count_threshold_xl', (($tmp = $_smarty_tpl->tpl_vars['config']->value['actions_menu']['count_threshold_xl'] ?? null)===null||$tmp==='' ? 3 ?? null : $tmp));
$_smarty_tpl->_assignInScope('actions_count_threshold_xxl', (($tmp = $_smarty_tpl->tpl_vars['config']->value['actions_menu']['count_threshold_xxl'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('actions_count_threshold_xxxl', (($tmp = $_smarty_tpl->tpl_vars['config']->value['actions_menu']['count_threshold_xxxl'] ?? null)===null||$tmp==='' ? 7 ?? null : $tmp));
$_smarty_tpl->_assignInScope('icon_prefix', "icon-");
$_smarty_tpl->_assignInScope('icon_prefix_length', strlen((string) $_smarty_tpl->tpl_vars['icon_prefix']->value));
$_smarty_tpl->_assignInScope('button_characters_threshold', 30);
$_smarty_tpl->_assignInScope('button_characters_mobile_threshold', 20);
$_smarty_tpl->_assignInScope('actions_menu_btn_group_class', "actions-menu__btn-group");
if (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > $_smarty_tpl->tpl_vars['actions_count_threshold_xxxl']->value) {
} elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > $_smarty_tpl->tpl_vars['actions_count_threshold_xxl']->value) {
$_smarty_tpl->_assignInScope('actions_menu_btn_group_class', "actions-menu__btn-group--xxxl");
} elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > $_smarty_tpl->tpl_vars['actions_count_threshold_xl']->value) {
$_smarty_tpl->_assignInScope('actions_menu_btn_group_class', "actions-menu__btn-group--xxl");
} elseif (smarty_modifier_count($_smarty_tpl->tpl_vars['items']->value) > 0) {
$_smarty_tpl->_assignInScope('actions_menu_btn_group_class', "actions-menu__btn-group--xl");
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'item_key');
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_12_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->_assignInScope('item_text', (($tmp = $_smarty_tpl->tpl_vars['item']->value['text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['item_key']->value) ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_title', (($tmp = $_smarty_tpl->tpl_vars['item']->value['title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_class', "btn actions-menu__btn ".((string)$_smarty_tpl->tpl_vars['item']->value['class'])." ".((string)$_smarty_tpl->tpl_vars['item']->value['meta']));
if ($_smarty_tpl->tpl_vars['item']->iteration > 0) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." actions-menu__btn--visible-xl");
}
if ($_smarty_tpl->tpl_vars['item']->iteration > $_smarty_tpl->tpl_vars['actions_count_threshold_xl']->value) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." actions-menu__btn--visible-xxl");
}
if ($_smarty_tpl->tpl_vars['item']->iteration > $_smarty_tpl->tpl_vars['actions_count_threshold_xxl']->value) {
$_smarty_tpl->_assignInScope('item_class', ((string)$_smarty_tpl->tpl_vars['item_class']->value)." actions-menu__btn--visible-xxxl");
}
if ($_smarty_tpl->tpl_vars['item']->iteration > $_smarty_tpl->tpl_vars['actions_count_threshold_xxxl']->value) {
continue 1;
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "item_text", "item_text_html", null);
if (mb_strlen($_smarty_tpl->tpl_vars['item_text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['button_characters_mobile_threshold']->value) {?><span class="mobile-hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_text']->value, ENT_QUOTES, 'UTF-8');?>
</span><span class="mobile-visible"><?php echo htmlspecialchars((string) (($tmp = (smarty_modifier_truncate($_smarty_tpl->tpl_vars['item']->value['text_mobile'],$_smarty_tpl->tpl_vars['button_characters_mobile_threshold']->value,'...',true,true)) ?? null)===null||$tmp==='' ? (smarty_modifier_truncate($_smarty_tpl->tpl_vars['item_text']->value,$_smarty_tpl->tpl_vars['button_characters_mobile_threshold']->value,'...',true,true)) ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span><?php } else { ?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_text']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (mb_strlen($_smarty_tpl->tpl_vars['item_text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['button_characters_threshold']->value) {
$_smarty_tpl->_assignInScope('item_title', $_smarty_tpl->tpl_vars['item_text']->value);
$_smarty_tpl->_assignInScope('item_text', ((string)(substr($_smarty_tpl->tpl_vars['item_text']->value,0,$_smarty_tpl->tpl_vars['button_characters_threshold']->value)))."...");
}
$_smarty_tpl->_assignInScope('item_icon', '');
if ($_smarty_tpl->tpl_vars['item']->value['icon']) {
$_smarty_tpl->_assignInScope('item_icon', smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['icon']));
if (substr($_smarty_tpl->tpl_vars['item_icon']->value,0,$_smarty_tpl->tpl_vars['icon_prefix_length']->value) !== $_smarty_tpl->tpl_vars['icon_prefix']->value) {
$_smarty_tpl->_assignInScope('item_icon', ((string)$_smarty_tpl->tpl_vars['icon_prefix']->value).((string)$_smarty_tpl->tpl_vars['item_icon']->value));
}
}
if ($_smarty_tpl->tpl_vars['item']->value['wrapper_class']) {?><span class="shift-left shift-right <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['wrapper_class'], ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['type'] ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'href'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['href'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'text'=>$_smarty_tpl->tpl_vars['item_text_html']->value,'title'=>$_smarty_tpl->tpl_vars['item_title']->value,'id'=>($_smarty_tpl->tpl_vars['item']->value['id'] ? ((string)$_smarty_tpl->tpl_vars['item']->value['id'])."_primary" : ''),'class'=>$_smarty_tpl->tpl_vars['item_class']->value,'dispatch'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['dispatch'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'form'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['form'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'method'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['method'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['target'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target_id'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['target_id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'process'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['process'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'onclick'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['onclick'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'raw'=>true,'icon'=>$_smarty_tpl->tpl_vars['item_icon']->value,'icon_first'=>true,'data'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['data'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), true);
if ($_smarty_tpl->tpl_vars['item']->value['wrapper_class']) {?></span><?php }
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_12_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item', false, 'item_key', 'actions', array (
));
$_smarty_tpl->tpl_vars['item']->iteration = 0;
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item_key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_13_saved = $_smarty_tpl->tpl_vars['item'];
$_smarty_tpl->_assignInScope('item_wrapper_class', $_smarty_tpl->tpl_vars['item']->value['wrapper_class']);
if ($_smarty_tpl->tpl_vars['item']->iteration > $_smarty_tpl->tpl_vars['actions_count_threshold_xxxl']->value) {
} elseif ($_smarty_tpl->tpl_vars['item']->iteration > $_smarty_tpl->tpl_vars['actions_count_threshold_xxl']->value) {
$_smarty_tpl->_assignInScope('item_wrapper_class', ((string)$_smarty_tpl->tpl_vars['item_wrapper_class']->value)." actions-menu__dropdown-item--hidden-xxxl");
} elseif ($_smarty_tpl->tpl_vars['item']->iteration > $_smarty_tpl->tpl_vars['actions_count_threshold_xl']->value) {
$_smarty_tpl->_assignInScope('item_wrapper_class', ((string)$_smarty_tpl->tpl_vars['item_wrapper_class']->value)." actions-menu__dropdown-item--hidden-xxl");
} elseif ($_smarty_tpl->tpl_vars['item']->iteration > 0) {
$_smarty_tpl->_assignInScope('item_wrapper_class', ((string)$_smarty_tpl->tpl_vars['item_wrapper_class']->value)." actions-menu__dropdown-item--hidden-xl");
}
$_smarty_tpl->_assignInScope('item_text', (($tmp = $_smarty_tpl->tpl_vars['item']->value['text'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['item_key']->value) ?? null : $tmp));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "item_text", "item_text_html", null);?><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_text']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('item_icon', '');
if ($_smarty_tpl->tpl_vars['item']->value['icon']) {
$_smarty_tpl->_assignInScope('item_icon', smarty_modifier_trim($_smarty_tpl->tpl_vars['item']->value['icon']));
if (substr($_smarty_tpl->tpl_vars['item_icon']->value,0,$_smarty_tpl->tpl_vars['icon_prefix_length']->value) !== $_smarty_tpl->tpl_vars['icon_prefix']->value) {
$_smarty_tpl->_assignInScope('item_icon', ((string)$_smarty_tpl->tpl_vars['icon_prefix']->value).((string)$_smarty_tpl->tpl_vars['item_icon']->value));
}
}?><li class="actions-menu__dropdown-item-wrapper <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_wrapper_class']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['type'] ?? null)===null||$tmp==='' ? "text" ?? null : $tmp),'href'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['href'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'text'=>$_smarty_tpl->tpl_vars['item_text_html']->value,'title'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['title'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'id'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'class'=>"actions-menu__dropdown-item ".((string)$_smarty_tpl->tpl_vars['item']->value['class'])." ".((string)$_smarty_tpl->tpl_vars['item']->value['meta']),'dispatch'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['dispatch'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'form'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['form'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'method'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['method'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['target'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'target_id'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['target_id'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'process'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['process'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'onclick'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['onclick'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp),'raw'=>true,'icon'=>$_smarty_tpl->tpl_vars['item_icon']->value,'icon_first'=>true,'data'=>(($tmp = $_smarty_tpl->tpl_vars['item']->value['data'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp)), true);?>
</li><?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_13_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "link_text_tools_list", null, null);?><span class="actions-menu__link-text"><?php echo $_smarty_tpl->__("actions.more");?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/tools.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_actions'=>true,'tools_list'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'link_text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'link_text_tools_list'),'icon'=>"icon-ellipsis-horizontal",'caret'=>true,'prefix'=>"actions_menu",'tool_meta'=>$_smarty_tpl->tpl_vars['actions_menu_btn_group_class']->value,'override_meta'=>"btn actions-menu__dropdown-toggle"), 0, false);
}
}
}
