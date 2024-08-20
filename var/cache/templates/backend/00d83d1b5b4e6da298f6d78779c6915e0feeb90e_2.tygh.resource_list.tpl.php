<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:39
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\index\components\analytics_section\analytics_card\resource_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b447d67366_98140875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d83d1b5b4e6da298f6d78779c6915e0feeb90e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_card\\resource_list.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 1,
    'tygh:common/price.tpl' => 1,
  ),
),false)) {
function content_66c4b447d67366_98140875 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('no_data'));
if ($_smarty_tpl->tpl_vars['resource_list']->value && ($_smarty_tpl->tpl_vars['resource_list']->value['content'] || empty($_smarty_tpl->tpl_vars['resource_list']->value['content']))) {?><div class="analytics-card-resource-list"><?php if ($_smarty_tpl->tpl_vars['resource_list']->value['title']) {?><div class="analytics-card-resource-list__title"><?php echo $_smarty_tpl->tpl_vars['resource_list']->value['title'];?>
</div><?php }?><div class="analytics-card-resource-list__content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resource_list']->value['content'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?><div class="analytics-card-resource-list__item <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['item']->value['description'] || $_smarty_tpl->tpl_vars['item']->value['description_href'] || $_smarty_tpl->tpl_vars['item']->value['small_text']) {?>analytics-card-resource-list__item--divider<?php }?>"><?php if ($_smarty_tpl->tpl_vars['item']->value['image']) {?><div class="analytics-card-resource-list__image"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['item']->value['image'],'image_id'=>((string)$_smarty_tpl->tpl_vars['analytics_card']->value['id'])."_".((string)$_smarty_tpl->tpl_vars['item']->value['id']),'image_width'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_width'],'image_height'=>$_smarty_tpl->tpl_vars['settings']->value['Thumbnails']['product_admin_mini_icon_height'],'href'=>fn_url($_smarty_tpl->tpl_vars['item']->value['href'])), 0, true);
?></div><?php }?><div class="analytics-card-resource-list__item-content"><?php if ($_smarty_tpl->tpl_vars['item']->value['name'] || $_smarty_tpl->tpl_vars['item']->value['href'] || $_smarty_tpl->tpl_vars['item']->value['value'] || $_smarty_tpl->tpl_vars['item']->value['value_href']) {?><div class="analytics-card-resource-list__primary"><div class="analytics-card-resource-list__name"><?php if ($_smarty_tpl->tpl_vars['item']->value['href']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['href']), ENT_QUOTES, 'UTF-8');?>
"class="link--monochrome analytics-card-resource-list__name-text analytics-card-resource-list__name-text--link"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><?php } else { ?><div class="analytics-card-resource-list__name-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['item']->value['label_text']) {?><div class="analytics-card-resource-list__label label btn-info label--text-wrap <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['label_class'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['label_text'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "item_value", null, null);
if ($_smarty_tpl->tpl_vars['item']->value['use_price_for_value']) {
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['item']->value['value']), 0, true);
} else {
echo $_smarty_tpl->tpl_vars['item']->value['value'];
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['item']->value['value_href'] && (isset($_smarty_tpl->tpl_vars['item']->value['value']))) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['value_href']), ENT_QUOTES, 'UTF-8');?>
"class="analytics-card-resource-list__value analytics-card-resource-list__value--link"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'item_value');?>
</a><?php } elseif ((isset($_smarty_tpl->tpl_vars['item']->value['value']))) {?><div class="analytics-card-resource-list__value"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'item_value');?>
</div><?php }?></div><?php }
if ($_smarty_tpl->tpl_vars['item']->value['description'] || $_smarty_tpl->tpl_vars['item']->value['description_href'] || $_smarty_tpl->tpl_vars['item']->value['small_text']) {?><div class="analytics-card-resource-list__secondary"><?php if ($_smarty_tpl->tpl_vars['item']->value['description_href']) {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['item']->value['description_href']), ENT_QUOTES, 'UTF-8');?>
"class="analytics-card-resource-list__description analytics-card-resource-list__description--link"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</a><?php } else { ?><div class="analytics-card-resource-list__description"><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
</div><?php }
if ($_smarty_tpl->tpl_vars['item']->value['small_text']) {?><div class="analytics-card-resource-list__small-text"><?php echo $_smarty_tpl->tpl_vars['item']->value['small_text'];?>
</div><?php }?></div><?php }?></div></div><?php
}
if ($_smarty_tpl->tpl_vars['item']->do_else) {
?><div class="analytics-card-resource-list__item analytics-card-resource-list__item--empty"><div class="analytics-card-resource-list__no-items no-items"><?php echo $_smarty_tpl->__("no_data");?>
</div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
