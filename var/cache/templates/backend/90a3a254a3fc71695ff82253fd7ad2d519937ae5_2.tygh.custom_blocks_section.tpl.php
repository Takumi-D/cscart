<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:39
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\index\components\custom_blocks_section\custom_blocks_section.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4470d65f6_06306600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90a3a254a3fc71695ff82253fd7ad2d519937ae5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\index\\components\\custom_blocks_section\\custom_blocks_section.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/custom_blocks_section/custom_blocks_card.tpl' => 1,
    'tygh:views/block_manager/frontend_render/block.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_66c4b4470d65f6_06306600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('custom_blocks.sections.onboarding_title','custom_blocks.create_block','custom_blocks.use_this_space','custom_blocks.edit_block','custom_blocks.create_block'));
$_smarty_tpl->_assignInScope('show_custom_blocks_section', (($tmp = $_smarty_tpl->tpl_vars['show_custom_blocks_section']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('hasLayout', false);
if ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['section'] === smarty_modifier_enum("CustomBlockSections::TOP_PANEL") || $_smarty_tpl->tpl_vars['custom_blocks_section']->value['section'] === smarty_modifier_enum("CustomBlockSections::HEADER") || $_smarty_tpl->tpl_vars['custom_blocks_section']->value['section'] === smarty_modifier_enum("CustomBlockSections::ONBOARDING")) {
$_smarty_tpl->_assignInScope('custom_blocks_section_class', "custom-blocks-section--fixed");
$_tmp_array = isset($_smarty_tpl->tpl_vars['custom_blocks_section']) ? $_smarty_tpl->tpl_vars['custom_blocks_section']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_fixed'] = true;
$_smarty_tpl->_assignInScope('custom_blocks_section', $_tmp_array);
}
if ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['section'] === smarty_modifier_enum("CustomBlockSections::ONBOARDING")) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['custom_blocks_section']) ? $_smarty_tpl->tpl_vars['custom_blocks_section']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['title'] = $_smarty_tpl->__("custom_blocks.sections.onboarding_title");
$_smarty_tpl->_assignInScope('custom_blocks_section', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['custom_blocks_section']) ? $_smarty_tpl->tpl_vars['custom_blocks_section']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['is_editable'] = true;
$_smarty_tpl->_assignInScope('custom_blocks_section', $_tmp_array);
}
$_smarty_tpl->_assignInScope('return_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("CustomBlockSections::ONBOARDING"), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
$_smarty_tpl->_assignInScope('section', (($tmp = $_smarty_tpl->tpl_vars['section']->value ?? null)===null||$tmp==='' ? $_prefixVariable4 ?? null : $tmp));
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("CustomBlockTypes::BLOCK"), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('type', (($tmp = $_smarty_tpl->tpl_vars['type']->value ?? null)===null||$tmp==='' ? $_prefixVariable5 ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['content'] || $_smarty_tpl->tpl_vars['custom_blocks_section']->value['title']) {
$_smarty_tpl->_assignInScope('create_block_button_text', $_smarty_tpl->__("custom_blocks.create_block"));
$_smarty_tpl->_assignInScope('create_block_button_class', "custom-blocks-section__create custom-blocks-section__create--center");
} else {
$_smarty_tpl->_assignInScope('create_block_button_text', $_smarty_tpl->__("custom_blocks.use_this_space"));
$_smarty_tpl->_assignInScope('create_block_button_class', "custom-blocks-section__create");
}
if ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['is_fixed']) {
$_smarty_tpl->_assignInScope('create_block_button_class', ((string)$_smarty_tpl->tpl_vars['create_block_button_class']->value)." custom-blocks-section__create--fixed");
}?><section class="custom-blocks-section <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_blocks_section_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_blocks_section']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['show_custom_blocks_section']->value && ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['content'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'])) {?><div class="custom-blocks-section__inner" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>data-ca-block-manager-grid-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_blocks_section']->value['id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php if ($_smarty_tpl->tpl_vars['custom_blocks_section']->value['title']) {?><h2 class="custom-blocks-section__title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_blocks_section']->value['title'], ENT_QUOTES, 'UTF-8');?>
</h2><?php }?><div class="custom-blocks-section__content"><div class="custom-blocks-section__column"<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>data-ca-block-manager-table="custom_blocks"data-ca-block-manager-id-name="block_id"data-ca-block-manager-blocks-place="true"<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['custom_blocks_section']->value['content'], 'custom_blocks_card');
$_smarty_tpl->tpl_vars['custom_blocks_card']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['custom_blocks_card']->value) {
$_smarty_tpl->tpl_vars['custom_blocks_card']->do_else = false;
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:views/index/components/custom_blocks_section/custom_blocks_card.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('custom_blocks_card'=>$_smarty_tpl->tpl_vars['custom_blocks_card']->value), 0, true);
$_smarty_tpl->assign('custom_blocks_card_content', ob_get_clean());
$_smarty_tpl->_subTemplateRender("tygh:views/block_manager/frontend_render/block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['custom_blocks_card_content']->value,'block'=>$_smarty_tpl->tpl_vars['custom_blocks_card']->value,'custom_blocks_section'=>$_smarty_tpl->tpl_vars['custom_blocks_section']->value,'location_data'=>$_smarty_tpl->tpl_vars['location_data']->value,'snapping_id'=>$_smarty_tpl->tpl_vars['custom_blocks_card']->value['id'],'object_type'=>"custom_block",'parent_grid'=>array('location_id'=>$_smarty_tpl->tpl_vars['custom_blocks_card']->value['section']),'prefix'=>$_smarty_tpl->tpl_vars['custom_blocks_section']->value['id'],'popup_title'=>$_smarty_tpl->__("custom_blocks.edit_block"),'show_delete'=>true,'is_popup'=>true), 0, true);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?><div class="custom-blocks-section__footer"><?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>((string)$_smarty_tpl->tpl_vars['custom_blocks_section']->value['id'])."_create_block",'text'=>$_smarty_tpl->__("custom_blocks.create_block"),'link_text'=>$_smarty_tpl->tpl_vars['create_block_button_text']->value,'link_class'=>$_smarty_tpl->tpl_vars['create_block_button_class']->value,'act'=>"link",'href'=>"block_manager.update_custom_block?object_type=custom_block&block_id=0&section=".((string)$_smarty_tpl->tpl_vars['section']->value)."&type=".((string)$_smarty_tpl->tpl_vars['type']->value)."&return_url=".((string)$_smarty_tpl->tpl_vars['return_url']->value)), 0, false);
?></div><?php }?></div><?php }?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['custom_blocks_section']->value['id'], ENT_QUOTES, 'UTF-8');?>
--></section><?php }
}
