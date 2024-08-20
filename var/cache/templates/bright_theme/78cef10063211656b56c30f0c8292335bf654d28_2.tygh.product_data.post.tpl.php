<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:08
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\price_per_unit\hooks\products\product_data.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4289b4280_47306510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78cef10063211656b56c30f0c8292335bf654d28' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\price_per_unit\\hooks\\products\\product_data.post.tpl',
      1 => 1724167154,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_66c4b4289b4280_47306510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('shipping_per','shipping_per'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ((floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ALLOW_ADD_TO_CART") || ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ASK_TO_ENTER_PRICE"))) && $_smarty_tpl->tpl_vars['product']->value['units_in_product'] !== "0.000" && $_smarty_tpl->tpl_vars['product']->value['unit_name'] && ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart" || $_smarty_tpl->tpl_vars['auth']->value['user_id'])) {
$_smarty_tpl->_assignInScope('price_per_unit', floatval($_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['units_in_product']*$_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units']);?><div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-price-per-unit <?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price']) && !$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?> price-wrap" id="price_per_unit_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['units_in_product'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['price_per_unit']->value), 0, false);
?> <?php echo $_smarty_tpl->__("shipping_per");?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'] !== "1.000") {
echo htmlspecialchars((string) rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
)<!--price_per_unit_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/price_per_unit/hooks/products/product_data.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/price_per_unit/hooks/products/product_data.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ((floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ALLOW_ADD_TO_CART") || ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] === smarty_modifier_enum("ProductZeroPriceActions::ASK_TO_ENTER_PRICE"))) && $_smarty_tpl->tpl_vars['product']->value['units_in_product'] !== "0.000" && $_smarty_tpl->tpl_vars['product']->value['unit_name'] && ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] !== "hide_price_and_add_to_cart" || $_smarty_tpl->tpl_vars['auth']->value['user_id'])) {
$_smarty_tpl->_assignInScope('price_per_unit', floatval($_smarty_tpl->tpl_vars['product']->value['price'])/$_smarty_tpl->tpl_vars['product']->value['units_in_product']*$_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units']);?><div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 ty-price-per-unit <?php if (!floatval($_smarty_tpl->tpl_vars['product']->value['price']) && !$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?> price-wrap" id="price_per_unit_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['units_in_product'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
 (<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['price_per_unit']->value), 0, true);
?> <?php echo $_smarty_tpl->__("shipping_per");?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'] !== "1.000") {
echo htmlspecialchars((string) rtrim(rtrim($_smarty_tpl->tpl_vars['product']->value['show_price_per_x_units'],"0"),"."), ENT_QUOTES, 'UTF-8');?>
 <?php }
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['unit_name'], ENT_QUOTES, 'UTF-8');?>
)<!--price_per_unit_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "price_per_unit_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }
}
}
}
