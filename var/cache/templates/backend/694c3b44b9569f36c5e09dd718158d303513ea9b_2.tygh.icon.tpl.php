<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:26
  from 'C:\xampp\htdocs\cscart\design\backend\templates\common\icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43aeb1e21_60320815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '694c3b44b9569f36c5e09dd718158d303513ea9b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\icon.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/icons/get_fallback_source.tpl' => 1,
  ),
),false)) {
function content_66c4b43aeb1e21_60320815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
$_smarty_tpl->_subTemplateRender("tygh:components/icons/get_fallback_source.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>$_smarty_tpl->tpl_vars['class']->value,'source'=>$_smarty_tpl->tpl_vars['source']->value), 0, false);
$_smarty_tpl->_assignInScope('show_icon', $_smarty_tpl->tpl_vars['show_icon']->value === false ? false : (($tmp = $_smarty_tpl->tpl_vars['show_icon']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_icon']->value && $_smarty_tpl->tpl_vars['source']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "icon_process", null, null);
$_smarty_tpl->_assignInScope('accessibility_label', (($tmp = $_smarty_tpl->tpl_vars['accessibility_label']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['icon_text']->value ?? null : $tmp));
$_smarty_tpl->_assignInScope('render', (($tmp = $_smarty_tpl->tpl_vars['render']->value ?? null)===null||$tmp==='' ? "inline" ?? null : $tmp));
$_smarty_tpl->_assignInScope('icon_path', '');
$_smarty_tpl->_assignInScope('type', '');
$_smarty_tpl->_assignInScope('svg_open_tag', "<svg ");
$_smarty_tpl->_assignInScope('svg_close_tag', "</svg>");
$_smarty_tpl->_assignInScope('addons_path', "addons/");
$_smarty_tpl->_assignInScope('available_tones', array("base","muted","warning","error","interactive","info","success","primary","text_warning","text_error","text_info","text_success"));
$_smarty_tpl->_assignInScope('tone', smarty_modifier_in_array($_smarty_tpl->tpl_vars['tone']->value,$_smarty_tpl->tpl_vars['available_tones']->value) ? $_smarty_tpl->tpl_vars['tone']->value : false);
$_smarty_tpl->_assignInScope('is_source_is_type', (!(strstr($_smarty_tpl->tpl_vars['source']->value,$_smarty_tpl->tpl_vars['svg_open_tag']->value)) || !(strstr($_smarty_tpl->tpl_vars['source']->value,$_smarty_tpl->tpl_vars['svg_close_tag']->value))));
$_smarty_tpl->_assignInScope('config', \Tygh\Registry::get('config'));
$_smarty_tpl->_assignInScope('design_backend', fn_get_rel_dir($_smarty_tpl->tpl_vars['config']->value['dir']['design_backend']));
if ($_smarty_tpl->tpl_vars['is_source_is_type']->value) {
$_smarty_tpl->_assignInScope('type', $_smarty_tpl->tpl_vars['source']->value);
$_smarty_tpl->_assignInScope('icon_path', substr($_smarty_tpl->tpl_vars['type']->value,0,(mb_strlen($_smarty_tpl->tpl_vars['addons_path']->value, 'UTF-8'))) === $_smarty_tpl->tpl_vars['addons_path']->value ? $_smarty_tpl->tpl_vars['type']->value : "icons/".((string)$_smarty_tpl->tpl_vars['type']->value).".svg");
if (file_exists(((string)$_smarty_tpl->tpl_vars['design_backend']->value)."templates/".((string)$_smarty_tpl->tpl_vars['icon_path']->value))) {
echo smarty_function_include_ext(array('file'=>((string)$_smarty_tpl->tpl_vars['design_backend']->value)."templates/".((string)$_smarty_tpl->tpl_vars['icon_path']->value),'assign'=>"source"),$_smarty_tpl);
} else {
$_smarty_tpl->_assignInScope('show_icon', false);
}
}
if ($_smarty_tpl->tpl_vars['render']->value !== "img_data") {
$_smarty_tpl->_assignInScope('source', smarty_modifier_replace($_smarty_tpl->tpl_vars['source']->value," xmlns=\"http://www.w3.org/2000/svg\"",''));
$_smarty_tpl->_assignInScope('source', smarty_modifier_replace($_smarty_tpl->tpl_vars['source']->value,"<svg ","<svg class=\"cs-icon__svg\" focusable=\"false\" aria-hidden=\"true\" "));
if ($_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->_assignInScope('source', smarty_modifier_replace($_smarty_tpl->tpl_vars['source']->value,"<svg ","<svg fill=\"".((string)$_smarty_tpl->tpl_vars['color']->value)."\" "));
} elseif ($_smarty_tpl->tpl_vars['color']->value !== false) {
$_smarty_tpl->_assignInScope('source', smarty_modifier_replace($_smarty_tpl->tpl_vars['source']->value,"<svg ","<svg fill=\"currentColor\" "));
}
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['show_icon']->value) {?><span <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
class="cs-icon<?php if ($_smarty_tpl->tpl_vars['type']->value) {?> cs-icon--type-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['type']->value,"_","-"), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['tone']->value) {?> cs-icon--tone-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['tone']->value,"_","-"), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['tone']->value || $_smarty_tpl->tpl_vars['color']->value) {?> cs-icon--apply-color<?php }
if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['data']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_value', false, 'data_name');
$_smarty_tpl->tpl_vars['data_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_name']->value => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->do_else = false;
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>><span class="cs-icon__hidden-accessible"><?php if ($_smarty_tpl->tpl_vars['accessibility_label']->value) {
echo $_smarty_tpl->tpl_vars['accessibility_label']->value;
}?></span><?php if ($_smarty_tpl->tpl_vars['render']->value === "img_data") {?><img class="cs-icon__img" src="data:image/svg+xml;utf8,<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['source']->value,"\"","'");?>
" alt="" aria-hidden="true"><?php } else {
echo $_smarty_tpl->tpl_vars['source']->value;
}?></span><?php }
}
}
}
