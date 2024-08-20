<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:00
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\image.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b42034c195_51808822',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e339189f99bc34d657a7dffb3bf7295433395ae3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\image.tpl',
      1 => 1724167137,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b42034c195_51808822 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_image','no_image'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "image", null, null);
}
$_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value));
$_smarty_tpl->_assignInScope('generate_image', $_smarty_tpl->tpl_vars['image_data']->value['generate_image'] && !$_smarty_tpl->tpl_vars['external']->value);
$_smarty_tpl->_assignInScope('show_no_image', (($tmp = $_smarty_tpl->tpl_vars['show_no_image']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('image_additional_attrs', (($tmp = $_smarty_tpl->tpl_vars['image_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('image_link_additional_attrs', (($tmp = $_smarty_tpl->tpl_vars['image_link_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['image_data']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["alt"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_link_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_link_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->tpl_vars['images']->value['detailed']['alt'];
$_smarty_tpl->_assignInScope('image_link_additional_attrs', $_tmp_array);
}
if (!$_smarty_tpl->tpl_vars['obj_id']->value) {
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->_assignInScope('obj_id', crc32($_smarty_tpl->tpl_vars['image_data']->value['image_path']));
} elseif ($_smarty_tpl->tpl_vars['image_id']->value) {
$_smarty_tpl->_assignInScope('obj_id', crc32($_smarty_tpl->tpl_vars['image_id']->value));
} else {
$_smarty_tpl->_assignInScope('obj_id', uniqid());
}
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"common:image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><a id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'] && $_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_link_additional_attrs']->value);
}?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_image_object"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('image_attributes', (($tmp = $_smarty_tpl->tpl_vars['image_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = "det_img_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['width'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['width']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->tpl_vars['image_data']->value['width'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['height'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['height']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->tpl_vars['image_data']->value['height'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_smarty_tpl->_assignInScope('image_initial_src', ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/icons/spacer.gif");
} else {
$_smarty_tpl->_assignInScope('image_initial_src', $_smarty_tpl->tpl_vars['image_data']->value['image_path']);
}
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-src"] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
} else {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['src'] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_onclick']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['onclick'] = $_smarty_tpl->tpl_vars['image_onclick']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}?><img class="ty-pict <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 /><?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;"><rect fill="transparent" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"></rect></svg><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_image_object"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['show_no_image']->value) {?><span class="ty-no-image" style="height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; "><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {
if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "icon_image_path", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "detailed_image_path", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/image.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/image.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "image", null, null);
}
$_smarty_tpl->_assignInScope('image_data', fn_image_to_display($_smarty_tpl->tpl_vars['images']->value,$_smarty_tpl->tpl_vars['image_width']->value,$_smarty_tpl->tpl_vars['image_height']->value));
$_smarty_tpl->_assignInScope('generate_image', $_smarty_tpl->tpl_vars['image_data']->value['generate_image'] && !$_smarty_tpl->tpl_vars['external']->value);
$_smarty_tpl->_assignInScope('show_no_image', (($tmp = $_smarty_tpl->tpl_vars['show_no_image']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('image_additional_attrs', (($tmp = $_smarty_tpl->tpl_vars['image_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
$_smarty_tpl->_assignInScope('image_link_additional_attrs', (($tmp = $_smarty_tpl->tpl_vars['image_link_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['image_data']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["alt"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->tpl_vars['image_data']->value['alt'];
$_smarty_tpl->_assignInScope('image_additional_attrs', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_link_additional_attrs']) ? $_smarty_tpl->tpl_vars['image_link_additional_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["title"] = $_smarty_tpl->tpl_vars['images']->value['detailed']['alt'];
$_smarty_tpl->_assignInScope('image_link_additional_attrs', $_tmp_array);
}
if (!$_smarty_tpl->tpl_vars['obj_id']->value) {
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->_assignInScope('obj_id', crc32($_smarty_tpl->tpl_vars['image_data']->value['image_path']));
} elseif ($_smarty_tpl->tpl_vars['image_id']->value) {
$_smarty_tpl->_assignInScope('obj_id', crc32($_smarty_tpl->tpl_vars['image_id']->value));
} else {
$_smarty_tpl->_assignInScope('obj_id', uniqid());
}
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"common:image"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"common:image"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><a id="det_img_link_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'] && $_smarty_tpl->tpl_vars['image_id']->value) {?>data-ca-image-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>cm-previewer ty-previewer<?php }?>" data-ca-image-width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_x'], ENT_QUOTES, 'UTF-8');?>
" data-ca-image-height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images']->value['detailed']['image_y'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path']) {?>href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_link_additional_attrs']->value);
}?>><?php }
if ($_smarty_tpl->tpl_vars['image_data']->value['image_path']) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_image_object"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_image_object"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('image_attributes', (($tmp = $_smarty_tpl->tpl_vars['image_additional_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['obj_id']->value && !$_smarty_tpl->tpl_vars['no_ids']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['id'] = "det_img_".((string)$_smarty_tpl->tpl_vars['obj_id']->value);
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['width'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['width']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['width'] = $_smarty_tpl->tpl_vars['image_data']->value['width'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_data']->value['height'] && !$_smarty_tpl->tpl_vars['image_attributes']->value['height']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['height'] = $_smarty_tpl->tpl_vars['image_data']->value['height'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-ca-image-path"] = $_smarty_tpl->tpl_vars['image_data']->value['image_path'];
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['generate_image']->value) {
$_smarty_tpl->_assignInScope('image_initial_src', ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/icons/spacer.gif");
} else {
$_smarty_tpl->_assignInScope('image_initial_src', $_smarty_tpl->tpl_vars['image_data']->value['image_path']);
}
if ($_smarty_tpl->tpl_vars['lazy_load']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["data-src"] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
} else {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['src'] = $_smarty_tpl->tpl_vars['image_initial_src']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['image_onclick']->value) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['image_attributes']) ? $_smarty_tpl->tpl_vars['image_attributes']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['onclick'] = $_smarty_tpl->tpl_vars['image_onclick']->value;
$_smarty_tpl->_assignInScope('image_attributes', $_tmp_array);
}?><img class="ty-pict <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['valign']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['lazy_load']->value) {?>lazyOwl<?php }?> <?php if ($_smarty_tpl->tpl_vars['generate_image']->value) {?>ty-spinner<?php }?> cm-image" <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['image_attributes']->value);?>
 /><?php if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {?><svg class="ty-pict__container" aria-hidden="true" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" viewBox="0 0 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" style="max-height: 100%; max-width: 100%; position: absolute; top: 0; left: 50%; transform: translateX(-50%); z-index: -1;"><rect fill="transparent" width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['height'], ENT_QUOTES, 'UTF-8');?>
"></rect></svg><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_image_object"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
} elseif ($_smarty_tpl->tpl_vars['show_no_image']->value) {?><span class="ty-no-image" style="height: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_height']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_width']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; width: <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['image_width']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['image_height']->value ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
px; "><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-image ty-no-image__icon",'title'=>$_smarty_tpl->__("no_image")),$_smarty_tpl);?>
</span><?php }
if ($_smarty_tpl->tpl_vars['show_detailed_link']->value) {
if ($_smarty_tpl->tpl_vars['images']->value['detailed_id']) {?><span class="ty-previewer__icon hidden-phone"></span><?php }?></a><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"common:image"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['capture_image']->value) {
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "icon_image_path", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['image_path'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "detailed_image_path", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image_data']->value['detailed_image_path'], ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
