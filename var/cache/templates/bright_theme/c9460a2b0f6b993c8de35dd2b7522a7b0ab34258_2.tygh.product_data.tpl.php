<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:04
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\product_data.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b424386f39_95487957',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9460a2b0f6b993c8de35dd2b7522a7b0ab34258' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\product_data.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
    'tygh:buttons/add_to_cart.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/add_to_compare_list.tpl' => 2,
    'tygh:common/coming_soon_notice.tpl' => 2,
    'tygh:views/products/components/product_features_short_list.tpl' => 2,
    'tygh:common/price.tpl' => 16,
    'tygh:views/products/components/product_label.tpl' => 4,
    'tygh:views/products/components/product_options.tpl' => 2,
    'tygh:views/companies/components/product_company_data.tpl' => 2,
    'tygh:views/products/components/products_qty_discounts.tpl' => 2,
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66c4b424386f39_95487957 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('text_out_of_stock','sku','select_options','old_price','old_price','list_price','list_price','enter_your_price','contact_us_for_price','sign_in_to_view_price','inc_tax','including_tax','you_save','you_save','save_discount','free_shipping','save_discount','save_discount','availability','items','on_backorder','in_stock','availability','in_stock','on_backorder','availability','quantity','text_cart_min_qty','text_edp_product','text_out_of_stock','sku','select_options','old_price','old_price','list_price','list_price','enter_your_price','contact_us_for_price','sign_in_to_view_price','inc_tax','including_tax','you_save','you_save','save_discount','free_shipping','save_discount','save_discount','availability','items','on_backorder','in_stock','availability','in_stock','on_backorder','availability','quantity','text_cart_min_qty','text_edp_product'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_data_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_data_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('out_of_stock_text', $_smarty_tpl->__("text_out_of_stock"));
$_smarty_tpl->_assignInScope('allow_negative_amount', (($tmp = $_smarty_tpl->tpl_vars['allow_negative_amount']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] ?? null : $tmp));?>

<?php if ((floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "P" || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A" || (!floatval($_smarty_tpl->tpl_vars['product']->value['price']) && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "R")) && !($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
    <?php $_smarty_tpl->_assignInScope('show_price_values', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('show_price_values', false);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "show_price_values", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('cart_button_exists', false);
$_smarty_tpl->_assignInScope('show_qty', (($tmp = $_smarty_tpl->tpl_vars['show_qty']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('product_amount', (($tmp = $_smarty_tpl->tpl_vars['product']->value['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_sku_label', (($tmp = $_smarty_tpl->tpl_vars['show_sku_label']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_amount_label', (($tmp = $_smarty_tpl->tpl_vars['show_amount_label']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_out_of_stock_block', (($tmp = $_smarty_tpl->tpl_vars['show_out_of_stock_block']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_add_to_cart_block', (($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart_block']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] && !$_smarty_tpl->tpl_vars['no_ajax']->value) {?>
    <?php $_smarty_tpl->_assignInScope('is_ajax', true);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
if (!$_smarty_tpl->tpl_vars['hide_form']->value) {?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" class="cm-disable-empty-files <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?> cm-ajax cm-ajax-full-render cm-ajax-status-middle<?php }?> <?php if ($_smarty_tpl->tpl_vars['form_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
<input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
<?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
        <div class="ty-control-group ty-sku-item cm-hidden-wrapper<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_sku]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_sku']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['show_sku_label']->value) {?>
                <label class="ty-control-group__label" id="sku_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sku");?>
:</label>
            <?php }?>
            <span class="ty-control-group__item cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
        </div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:data_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
<div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['add_to_cart_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="appearance[show_add_to_cart]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_add_to_cart']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[show_list_buttons]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_list_buttons']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[but_role]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_role']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[quick_view]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quick_view']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons_product", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['has_options'] && !$_smarty_tpl->tpl_vars['show_product_options']->value && !$_smarty_tpl->tpl_vars['details_page']->value) {
if ($_smarty_tpl->tpl_vars['but_role']->value == "text") {
$_smarty_tpl->_assignInScope('opt_but_role', "text");
} else {
$_smarty_tpl->_assignInScope('opt_but_role', "action");
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("select_options"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_name'=>'','but_meta'=>"ty-btn__primary ty-btn__big"), 0, false);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart_but_id"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart_but_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('_but_id', "button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart_but_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['extra_button']->value) {
echo $_smarty_tpl->tpl_vars['extra_button']->value;?>
&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['_but_id']->value,'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_meta'=>$_smarty_tpl->tpl_vars['add_to_cart_meta']->value), 0, false);
$_smarty_tpl->_assignInScope('cart_button_exists', true);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buttons_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buttons_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_add_to_cart_block']->value && ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] !== smarty_modifier_enum("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART") || $_smarty_tpl->tpl_vars['product']->value['price'] != 0) && ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] === smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['allow_negative_amount']->value === smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['is_edp'] === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] === smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE")) || ($_smarty_tpl->tpl_vars['product']->value['has_options'] && !$_smarty_tpl->tpl_vars['show_product_options']->value)) {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons_product')) != '&nbsp;') {
if ($_smarty_tpl->tpl_vars['product']->value['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons_product');
}
}
} elseif ($_smarty_tpl->tpl_vars['show_out_of_stock_block']->value && $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO") && $_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES") && (($_smarty_tpl->tpl_vars['product_amount']->value <= 0 || $_smarty_tpl->tpl_vars['product_amount']->value < $_smarty_tpl->tpl_vars['product']->value['min_qty']) && $_smarty_tpl->tpl_vars['product']->value['tracking'] != smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->tpl_vars['product']->value['is_edp'] != smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:out_of_stock_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:out_of_stock_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('show_qty', false);
if (!$_smarty_tpl->tpl_vars['details_page']->value) {
if ((!$_smarty_tpl->tpl_vars['product']->value['hide_stock_info'] && !(($_smarty_tpl->tpl_vars['product_amount']->value <= 0 || $_smarty_tpl->tpl_vars['product_amount']->value < $_smarty_tpl->tpl_vars['product']->value['min_qty']) && ($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null))))) {?><span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }
} elseif (($_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::SUBSCRIBE"))) {?><div id="subscribe_form_wrapper"><!--subscribe_form_wrapper--></div><?php echo '<script'; ?>
>(function(_, $) {$.ceAjax('request', fn_url('products.subscription_form?product_id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
'), {hidden: true,result_ids: 'subscribe_form_wrapper'});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_product_in_stock"), 0, false);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:out_of_stock_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['show_list_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_buy_now_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->_assignInScope('compare_product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buy_now"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buy_now"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == "Y") {
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['compare_product_id']->value), 0, false);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buy_now"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('capture_buy_now', "product_buy_now_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_buy_now']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_buy_now']->value);
}
}
if (($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null))) {
$_smarty_tpl->_subTemplateRender("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->tpl_vars['product']->value['avail_since'],'add_to_cart'=>$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']), 0, false);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buttons_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cart_button_exists')) {?>
    <?php $_smarty_tpl->_assignInScope('cart_button_exists', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_features"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['show_features']->value) {?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_data_features_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_features']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>fn_get_product_features_list($_smarty_tpl->tpl_vars['product']->value),'no_container'=>true), 0, false);
?>
        <!--product_data_features_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
            <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
        <?php } else { ?>
            <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['full_description']),$_smarty_tpl);?>
><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['full_description'] ?: ''),160);?>
</div>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && $_smarty_tpl->tpl_vars['show_old_price']->value) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="old_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:old_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:old_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                <?php if (!$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                    <span class="ty-list-price ty-nowrap" id="line_old_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("old_price");?>
: <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['base_price'] ?? null : $tmp)-$_smarty_tpl->tpl_vars['product']->value['tax_value'],'span_id'=>"old_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, false);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price ty-nowrap" id="line_old_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("old_price");?>
: <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['base_price'] ?? null : $tmp),'span_id'=>"old_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span></span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['list_discount']) {?>
                <?php if (!$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                    <span class="ty-list-price ty-nowrap" id="line_list_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?><span class="list-price-label"><?php echo $_smarty_tpl->__("list_price");?>
:</span> <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_price']-$_smarty_tpl->tpl_vars['product']->value['tax_value'],'span_id'=>"list_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price ty-nowrap" id="line_list_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?><span class="list-price-label"><?php echo $_smarty_tpl->__("list_price");?>
:</span> <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_price'],'span_id'=>"list_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span></span>
                <?php }?>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:old_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--old_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <span class="<?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] !== "A") {?>cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');
}?> ty-price-update" id="price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:prices_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:prices_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable6=ob_get_clean();
if ($_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] === $_prefixVariable6 || !$_smarty_tpl->tpl_vars['product']->value['clean_price']) {?>
                    <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['price']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['clean_price']);?>
                <?php }?>
                <?php if (floatval($_smarty_tpl->tpl_vars['price']->value) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "P" || ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value == "Y" && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A")) {?>
                    <span class="ty-price<?php if (!floatval($_smarty_tpl->tpl_vars['price']->value) && !$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>" id="line_discounted_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['price']->value,'span_id'=>"discounted_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'live_editor_phrase'=>$_smarty_tpl->tpl_vars['product']->value['base_price']), 0, true);
?></span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A" && $_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('base_currency', $_smarty_tpl->tpl_vars['currencies']->value[(defined('CART_PRIMARY_CURRENCY') ? constant('CART_PRIMARY_CURRENCY') : null)]);?>
                    <span class="ty-price-curency"><span class="ty-price-curency__title"><?php echo $_smarty_tpl->__("enter_your_price");?>
:</span>
                    <div class="ty-price-curency-input">
                        <input
                            type="text"
                            name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][price]"
                            class="ty-price-curency__input cm-numeric"
                            data-a-sign="<?php echo $_smarty_tpl->tpl_vars['base_currency']->value['symbol'];?>
"
                            data-a-dec="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['decimal_separator']) {
echo $_smarty_tpl->tpl_vars['base_currency']->value['decimal_separator'];
} else { ?>.<?php }?>"
                            data-a-sep="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator']) {
echo $_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator'];
} else { ?>,<?php }?>"
                            data-p-sign="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['after'] === smarty_modifier_enum("YesNo::YES")) {?>s<?php } else { ?>p<?php }?>"
                            data-m-dec="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['base_currency']->value['decimals'], ENT_QUOTES, 'UTF-8');?>
"
                            size="3"
                            value=""
                        />
                    </div>
                    </span>

                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "R") {?>
                    <span class="ty-no-price"><?php echo $_smarty_tpl->__("contact_us_for_price");?>
</span>
                    <?php $_smarty_tpl->_assignInScope('show_qty', false);?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:prices_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <span class="ty-price"><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</span>
        <?php }?>
    <!--price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && $_smarty_tpl->tpl_vars['show_clean_price']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['taxed_price']) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="clean_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_clean_price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_clean_price']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['product']->value['clean_price'] != $_smarty_tpl->tpl_vars['product']->value['taxed_price'] && $_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                <span class="ty-list-price ty-nowrap" id="line_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?> <?php echo $_smarty_tpl->__("inc_tax");?>
)</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['clean_price'] != $_smarty_tpl->tpl_vars['product']->value['taxed_price'] && !$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                <span class="ty-list-price ty-nowrap ty-tax-include">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span>
            <?php }?>
        <!--clean_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && $_smarty_tpl->tpl_vars['show_list_discount']->value && $_smarty_tpl->tpl_vars['details_page']->value) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="line_discount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_list_discount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_list_discount']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                <span class="ty-list-price ty-save-price ty-nowrap" id="line_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("you_save");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?><span class="ty-save-price__percent">&nbsp;(<span id="prc_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-list-price ty-nowrap"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_prc'], ENT_QUOTES, 'UTF-8');?>
</span>%)</span></span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['list_discount']) {?>
                <span class="ty-list-price ty-save-price ty-nowrap" id="line_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"> <?php echo $_smarty_tpl->__("you_save");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)), 0, true);
?><span class="ty-save-price__percent">&nbsp;(<span id="prc_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_discount_prc'], ENT_QUOTES, 'UTF-8');?>
</span>%)</span></span>
            <?php }?>
        <!--line_discount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_discount_label']->value && ($_smarty_tpl->tpl_vars['product']->value['discount_prc'] || $_smarty_tpl->tpl_vars['product']->value['list_discount_prc']) && $_smarty_tpl->tpl_vars['show_price_values']->value) {?>
        <span class="ty-discount-label cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="discount_label_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-discount-label__item" id="line_prc_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="ty-discount-label__value" id="prc_discount_value_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("save_discount");?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_prc'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_discount_prc'], ENT_QUOTES, 'UTF-8');
}?>%</span></span>
        <!--discount_label_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->_assignInScope('product_labels_position', (($tmp = $_smarty_tpl->tpl_vars['product_labels_position']->value ?? null)===null||$tmp==='' ? "top-right" ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_product_labels']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "capture_product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_labels"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_labels"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['show_shipping_label']->value && $_smarty_tpl->tpl_vars['product']->value['free_shipping'] == "Y") {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--shipping",'label_text'=>$_smarty_tpl->__("free_shipping"),'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0, false);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['show_discount_label']->value && ($_smarty_tpl->tpl_vars['product']->value['discount_prc'] || $_smarty_tpl->tpl_vars['product']->value['list_discount_prc']) && $_smarty_tpl->tpl_vars['show_price_values']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                    <?php ob_start();
echo $_smarty_tpl->__("save_discount");
$_prefixVariable7=ob_get_clean();
$_smarty_tpl->_assignInScope('label_text', $_prefixVariable7." ".((string)$_smarty_tpl->tpl_vars['product']->value['discount_prc'])."%");?>
                <?php } else { ?>
                    <?php ob_start();
echo $_smarty_tpl->__("save_discount");
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_assignInScope('label_text', $_prefixVariable8." ".((string)$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])."%");?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->tpl_vars['label_text']->value,'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0, true);
?>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_labels"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_assignInScope('capture_product_labels', "capture_product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_product_labels']->value))) {?>
            <div class="ty-product-labels ty-product-labels--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_labels_position']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['product_labels_mini']->value) {?>ty-product-labels--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['product_labels_static']->value) {?>ty-product-labels--static<?php }?> cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_labels_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_product_labels']->value);?>

            <!--product_labels_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_amount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_product_amount']->value && $_smarty_tpl->tpl_vars['product']->value['is_edp'] != "Y" && $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO")) {?>
    <?php $_smarty_tpl->_assignInScope('is_tracking_product', $_smarty_tpl->tpl_vars['settings']->value['General']['default_tracking'] !== smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") && $_smarty_tpl->tpl_vars['product']->value['tracking'] !== smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['tracking'] !== smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"));?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 stock-wrap" id="product_amount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_product_amount']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!$_smarty_tpl->tpl_vars['product']->value['hide_stock_info']) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['in_stock_field'] == "Y") {?>
                <?php if ($_smarty_tpl->tpl_vars['is_tracking_product']->value) {?>
                    <?php if (($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['details_page']->value) {?>
                        <?php if (($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty'] || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                            <div class="ty-control-group product-list-field">
                                <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("availability");?>
:</label>
                                <?php }?>
                                <span id="qty_in_stock_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-qty-in-stock ty-control-group__item">
                                    <?php if ($_smarty_tpl->tpl_vars['product_amount']->value > 0) {?>
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_amount']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->__("on_backorder");?>

                                    <?php }?>
                                </span>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES")) {?>
                            <div class="ty-control-group product-list-field">
                                <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("in_stock");?>
:</label>
                                <?php }?>
                                <span class="ty-qty-out-of-stock ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php }?>
                    <?php }?>
                <?php }?>
            <?php } else { ?>
                <?php if (($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty'] || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->tpl_vars['is_tracking_product']->value && $_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['is_tracking_product']->value && ($_smarty_tpl->tpl_vars['allow_negative_amount']->value === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("availability");?>
:</label>
                        <?php }?>
                        <span class="ty-qty-in-stock ty-control-group__item" id="in_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['product_amount']->value > 0) {?>
                                <?php echo $_smarty_tpl->__("in_stock");?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->__("on_backorder");?>

                            <?php }?>
                        </span>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['details_page']->value && ($_smarty_tpl->tpl_vars['product_amount']->value <= 0 || $_smarty_tpl->tpl_vars['product_amount']->value < $_smarty_tpl->tpl_vars['product']->value['min_qty']) && $_smarty_tpl->tpl_vars['is_tracking_product']->value && $_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("availability");?>
:</label>
                        <?php }?>
                        <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
    <!--product_amount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 js-product-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_product_options']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_option_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['disable_ids']->value) {?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', ((string)$_smarty_tpl->tpl_vars['disable_ids']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', '');?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value,'disable_ids'=>$_smarty_tpl->tpl_vars['_disable_ids']->value), 0, false);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--product_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value) {?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="advanced_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0, false);
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_advanced"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_advanced"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_advanced"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--advanced_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:qty"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="qty_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_qty]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_qty']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[capture_options_vs_qty]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['capture_options_vs_qty']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['selected_amount'])) {?>
            <?php $_smarty_tpl->_assignInScope('default_amount', $_smarty_tpl->tpl_vars['product']->value['selected_amount']);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['min_qty'])) {?>
            <?php $_smarty_tpl->_assignInScope('default_amount', $_smarty_tpl->tpl_vars['product']->value['min_qty']);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['qty_step'])) {?>
            <?php $_smarty_tpl->_assignInScope('default_amount', $_smarty_tpl->tpl_vars['product']->value['qty_step']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('default_amount', "1");?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_qty']->value && $_smarty_tpl->tpl_vars['product']->value['is_edp'] !== "Y" && $_smarty_tpl->tpl_vars['cart_button_exists']->value == true && ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) && $_smarty_tpl->tpl_vars['product']->value['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
            <div class="ty-qty clearfix<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?> changer<?php }?>" id="qty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if (!$_smarty_tpl->tpl_vars['hide_qty_label']->value) {?><label class="ty-control-group__label" for="qty_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['quantity_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("quantity") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
:</label><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_content']) {?>
                <select name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" id="qty_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_assignInScope('a_name', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php $_smarty_tpl->_assignInScope('selected_amount', false);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['qty_content'], 'var', true);
$_smarty_tpl->tpl_vars['var']->iteration = 0;
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['var']->iteration++;
$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
$__foreach_var_38_saved = $_smarty_tpl->tpl_vars['var'];
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['selected_amount'] && ($_smarty_tpl->tpl_vars['product']->value['selected_amount'] == $_smarty_tpl->tpl_vars['var']->value || ($_smarty_tpl->tpl_vars['var']->last && !$_smarty_tpl->tpl_vars['selected_amount']->value))) {
$_smarty_tpl->_assignInScope('selected_amount', true);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_38_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <?php } else { ?>
                <div class="ty-center ty-value-changer cm-value-changer">
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                    <?php }?>
                    <input <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?>readonly="readonly"<?php }?> type="text" size="5" class="ty-value-changer__input cm-amount cm-value-decimal" id="qty_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_amount']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if ($_smarty_tpl->tpl_vars['product']->value['min_qty'] > 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" />
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                    <?php }?>
                </div>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['prices']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_qty_discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php }?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['bulk_add']->value) {?>
            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_amount']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <!--qty_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:qty_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:qty_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['min_qty']->value && $_smarty_tpl->tpl_vars['product']->value['min_qty']) {?>
            <p class="ty-min-qty-description"><?php echo $_smarty_tpl->__("text_cart_min_qty",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product'],"[quantity]"=>$_smarty_tpl->tpl_vars['product']->value['min_qty']));?>
.</p>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:qty_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_edp']->value && $_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>
        <p class="ty-edp-description"><?php echo $_smarty_tpl->__("text_edp_product");?>
.</p>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
if (!$_smarty_tpl->tpl_vars['hide_form']->value) {?>
</form>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, 'object_id');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object_id']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->_assignInScope('product_link', $_smarty_tpl->tpl_vars['image']->value['link']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_images_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_images_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['obj_id'], ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product_link']->value) {?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_link']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
][link]" />
        <?php }?>
        <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['obj_id'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['width'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['height'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['type'], ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
][data]" />
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image']->value['width'],'image_height'=>$_smarty_tpl->tpl_vars['image']->value['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['image']->value['link']) {?>
            </a>
        <?php }?>
    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_images_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_data_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/product_data.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/product_data.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_data_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_data_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('out_of_stock_text', $_smarty_tpl->__("text_out_of_stock"));
$_smarty_tpl->_assignInScope('allow_negative_amount', (($tmp = $_smarty_tpl->tpl_vars['allow_negative_amount']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['General']['allow_negative_amount'] ?? null : $tmp));?>

<?php if ((floatval($_smarty_tpl->tpl_vars['product']->value['price']) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "P" || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A" || (!floatval($_smarty_tpl->tpl_vars['product']->value['price']) && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "R")) && !($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id'])) {?>
    <?php $_smarty_tpl->_assignInScope('show_price_values', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('show_price_values', false);
}
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "show_price_values", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_assignInScope('cart_button_exists', false);
$_smarty_tpl->_assignInScope('show_qty', (($tmp = $_smarty_tpl->tpl_vars['show_qty']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('obj_id', (($tmp = $_smarty_tpl->tpl_vars['obj_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['product_id'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('product_amount', (($tmp = $_smarty_tpl->tpl_vars['product']->value['inventory_amount'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['amount'] ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_sku_label', (($tmp = $_smarty_tpl->tpl_vars['show_sku_label']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_amount_label', (($tmp = $_smarty_tpl->tpl_vars['show_amount_label']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_out_of_stock_block', (($tmp = $_smarty_tpl->tpl_vars['show_out_of_stock_block']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_add_to_cart_block', (($tmp = $_smarty_tpl->tpl_vars['show_add_to_cart_block']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['disable_dhtml'] && !$_smarty_tpl->tpl_vars['no_ajax']->value) {?>
    <?php $_smarty_tpl->_assignInScope('is_ajax', true);
}?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
if (!$_smarty_tpl->tpl_vars['hide_form']->value) {?>
<form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="product_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data" class="cm-disable-empty-files <?php if ($_smarty_tpl->tpl_vars['is_ajax']->value) {?> cm-ajax cm-ajax-full-render cm-ajax-status-middle<?php }?> <?php if ($_smarty_tpl->tpl_vars['form_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_meta']->value, ENT_QUOTES, 'UTF-8');
}?>">
<input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*" />
<?php if (!$_smarty_tpl->tpl_vars['stay_in_cart']->value) {?>
<input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>
<input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][product_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_name"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_name"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['show_name']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo $_smarty_tpl->tpl_vars['product']->value['product'];
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['show_trunc_name']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['hide_links']->value) {?><strong><?php } else { ?><a href="<?php echo htmlspecialchars((string) fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
" class="product-title" title="<?php echo htmlspecialchars((string) preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['product'] ?: ''), ENT_QUOTES, 'UTF-8');?>
" <?php echo smarty_function_live_edit(array('name'=>"product:product:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['product']),$_smarty_tpl);?>
><?php }
echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['product'],44,"...",true);
if ($_smarty_tpl->tpl_vars['hide_links']->value) {?></strong><?php } else { ?></a><?php }?>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_name"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_sku']->value) {?>
        <div class="ty-control-group ty-sku-item cm-hidden-wrapper<?php if (!$_smarty_tpl->tpl_vars['product']->value['product_code']) {?> hidden<?php }?>" id="sku_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_sku]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_sku']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['show_sku_label']->value) {?>
                <label class="ty-control-group__label" id="sku_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sku");?>
:</label>
            <?php }?>
            <span class="ty-control-group__item cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_code'], ENT_QUOTES, 'UTF-8');?>
<!--product_code_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
        </div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "sku_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:data_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:data_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:data_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
<div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['add_to_cart_class']->value, ENT_QUOTES, 'UTF-8');?>
" id="add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<input type="hidden" name="appearance[show_add_to_cart]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_add_to_cart']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[show_list_buttons]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_list_buttons']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[but_role]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_role']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="appearance[quick_view]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quick_view']->value, ENT_QUOTES, 'UTF-8');?>
" />

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "buttons_product", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['product']->value['has_options'] && !$_smarty_tpl->tpl_vars['show_product_options']->value && !$_smarty_tpl->tpl_vars['details_page']->value) {
if ($_smarty_tpl->tpl_vars['but_role']->value == "text") {
$_smarty_tpl->_assignInScope('opt_but_role', "text");
} else {
$_smarty_tpl->_assignInScope('opt_but_role', "action");
}
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>"button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'but_text'=>$_smarty_tpl->__("select_options"),'but_href'=>"products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'but_role'=>$_smarty_tpl->tpl_vars['opt_but_role']->value,'but_name'=>'','but_meta'=>"ty-btn__primary ty-btn__big"), 0, true);
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:add_to_cart_but_id"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:add_to_cart_but_id"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('_but_id', "button_cart_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart_but_id"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['extra_button']->value) {
echo $_smarty_tpl->tpl_vars['extra_button']->value;?>
&nbsp;<?php }
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_id'=>$_smarty_tpl->tpl_vars['_but_id']->value,'but_name'=>"dispatch[checkout.add..".((string)$_smarty_tpl->tpl_vars['obj_id']->value)."]",'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'block_width'=>$_smarty_tpl->tpl_vars['block_width']->value,'obj_id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product'=>$_smarty_tpl->tpl_vars['product']->value,'but_meta'=>$_smarty_tpl->tpl_vars['add_to_cart_meta']->value), 0, true);
$_smarty_tpl->_assignInScope('cart_button_exists', true);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:add_to_cart"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buttons_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buttons_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_add_to_cart_block']->value && ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] !== smarty_modifier_enum("ProductZeroPriceActions::NOT_ALLOW_ADD_TO_CART") || $_smarty_tpl->tpl_vars['product']->value['price'] != 0) && ($_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] === smarty_modifier_enum("YesNo::NO") || $_smarty_tpl->tpl_vars['allow_negative_amount']->value === smarty_modifier_enum("YesNo::YES") || ($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['is_edp'] === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] === smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE")) || ($_smarty_tpl->tpl_vars['product']->value['has_options'] && !$_smarty_tpl->tpl_vars['show_product_options']->value)) {
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons_product')) != '&nbsp;') {
if ($_smarty_tpl->tpl_vars['product']->value['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons_product');
}
}
} elseif ($_smarty_tpl->tpl_vars['show_out_of_stock_block']->value && $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO") && $_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES") && (($_smarty_tpl->tpl_vars['product_amount']->value <= 0 || $_smarty_tpl->tpl_vars['product_amount']->value < $_smarty_tpl->tpl_vars['product']->value['min_qty']) && $_smarty_tpl->tpl_vars['product']->value['tracking'] != smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->tpl_vars['product']->value['is_edp'] != smarty_modifier_enum("YesNo::YES")) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:out_of_stock_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:out_of_stock_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('show_qty', false);
if (!$_smarty_tpl->tpl_vars['details_page']->value) {
if ((!$_smarty_tpl->tpl_vars['product']->value['hide_stock_info'] && !(($_smarty_tpl->tpl_vars['product_amount']->value <= 0 || $_smarty_tpl->tpl_vars['product_amount']->value < $_smarty_tpl->tpl_vars['product']->value['min_qty']) && ($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null))))) {?><span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
</span><?php }
} elseif (($_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::SUBSCRIBE"))) {?><div id="subscribe_form_wrapper"><!--subscribe_form_wrapper--></div><?php echo '<script'; ?>
>(function(_, $) {$.ceAjax('request', fn_url('products.subscription_form?product_id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
'), {hidden: true,result_ids: 'subscribe_form_wrapper'});}(Tygh, Tygh.$));<?php echo '</script'; ?>
><?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_product_in_stock"), 0, true);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:out_of_stock_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
if ($_smarty_tpl->tpl_vars['show_list_buttons']->value) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_buy_now_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->_assignInScope('compare_product_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:buy_now"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:buy_now"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == "Y") {
$_smarty_tpl->_subTemplateRender("tygh:buttons/add_to_compare_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product_id'=>$_smarty_tpl->tpl_vars['compare_product_id']->value), 0, true);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buy_now"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->_assignInScope('capture_buy_now', "product_buy_now_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_buy_now']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_buy_now']->value);
}
}
if (($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null))) {
$_smarty_tpl->_subTemplateRender("tygh:common/coming_soon_notice.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('avail_date'=>$_smarty_tpl->tpl_vars['product']->value['avail_since'],'add_to_cart'=>$_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions']), 0, true);
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:buttons_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--add_to_cart_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'cart_button_exists')) {?>
    <?php $_smarty_tpl->_assignInScope('cart_button_exists', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_features"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_features"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php if ($_smarty_tpl->tpl_vars['show_features']->value) {?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_data_features_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_features]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_features']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_features_short_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('features'=>fn_get_product_features_list($_smarty_tpl->tpl_vars['product']->value),'no_container'=>true), 0, true);
?>
        <!--product_data_features_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_features"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_features_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_descr']->value) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['short_description']) {?>
            <div <?php echo smarty_function_live_edit(array('name'=>"product:short_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])),$_smarty_tpl);?>
><?php echo $_smarty_tpl->tpl_vars['product']->value['short_description'];?>
</div>
        <?php } else { ?>
            <div <?php echo smarty_function_live_edit(array('name'=>"product:full_description:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'phrase'=>$_smarty_tpl->tpl_vars['product']->value['full_description']),$_smarty_tpl);?>
><?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value['full_description'] ?: ''),160);?>
</div>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "prod_descr_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && $_smarty_tpl->tpl_vars['show_old_price']->value) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="old_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:old_price"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:old_price"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                <?php if (!$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                    <span class="ty-list-price ty-nowrap" id="line_old_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("old_price");?>
: <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['base_price'] ?? null : $tmp)-$_smarty_tpl->tpl_vars['product']->value['tax_value'],'span_id'=>"old_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price ty-nowrap" id="line_old_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {
echo $_smarty_tpl->__("old_price");?>
: <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>(($tmp = $_smarty_tpl->tpl_vars['product']->value['original_price'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['base_price'] ?? null : $tmp),'span_id'=>"old_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span></span>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['list_discount']) {?>
                <?php if (!$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                    <span class="ty-list-price ty-nowrap" id="line_list_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?><span class="list-price-label"><?php echo $_smarty_tpl->__("list_price");?>
:</span> <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_price']-$_smarty_tpl->tpl_vars['product']->value['tax_value'],'span_id'=>"list_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span></span>
                <?php } else { ?>
                    <span class="ty-list-price ty-nowrap" id="line_list_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['details_page']->value) {?><span class="list-price-label"><?php echo $_smarty_tpl->__("list_price");?>
:</span> <?php }?><span class="ty-strike"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_price'],'span_id'=>"list_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?></span></span>
                <?php }?>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:old_price"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--old_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <span class="<?php if ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] !== "A") {?>cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');
}?> ty-price-update" id="price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[show_price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value) {?>
            <?php if ($_smarty_tpl->tpl_vars['show_price']->value) {?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:prices_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:prices_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');
$_prefixVariable9=ob_get_clean();
if ($_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] === $_prefixVariable9 || !$_smarty_tpl->tpl_vars['product']->value['clean_price']) {?>
                    <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['price']);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('price', $_smarty_tpl->tpl_vars['product']->value['clean_price']);?>
                <?php }?>
                <?php if (floatval($_smarty_tpl->tpl_vars['price']->value) || $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "P" || ($_smarty_tpl->tpl_vars['hide_add_to_cart_button']->value == "Y" && $_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A")) {?>
                    <span class="ty-price<?php if (!floatval($_smarty_tpl->tpl_vars['price']->value) && !$_smarty_tpl->tpl_vars['product']->value['zero_price_action']) {?> hidden<?php }?>" id="line_discounted_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['price']->value,'span_id'=>"discounted_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-price-num",'live_editor_name'=>"product:price:".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']),'live_editor_phrase'=>$_smarty_tpl->tpl_vars['product']->value['base_price']), 0, true);
?></span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "A" && $_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('base_currency', $_smarty_tpl->tpl_vars['currencies']->value[(defined('CART_PRIMARY_CURRENCY') ? constant('CART_PRIMARY_CURRENCY') : null)]);?>
                    <span class="ty-price-curency"><span class="ty-price-curency__title"><?php echo $_smarty_tpl->__("enter_your_price");?>
:</span>
                    <div class="ty-price-curency-input">
                        <input
                            type="text"
                            name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][price]"
                            class="ty-price-curency__input cm-numeric"
                            data-a-sign="<?php echo $_smarty_tpl->tpl_vars['base_currency']->value['symbol'];?>
"
                            data-a-dec="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['decimal_separator']) {
echo $_smarty_tpl->tpl_vars['base_currency']->value['decimal_separator'];
} else { ?>.<?php }?>"
                            data-a-sep="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator']) {
echo $_smarty_tpl->tpl_vars['base_currency']->value['thousands_separator'];
} else { ?>,<?php }?>"
                            data-p-sign="<?php if ($_smarty_tpl->tpl_vars['base_currency']->value['after'] === smarty_modifier_enum("YesNo::YES")) {?>s<?php } else { ?>p<?php }?>"
                            data-m-dec="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['base_currency']->value['decimals'], ENT_QUOTES, 'UTF-8');?>
"
                            size="3"
                            value=""
                        />
                    </div>
                    </span>

                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['zero_price_action'] == "R") {?>
                    <span class="ty-no-price"><?php echo $_smarty_tpl->__("contact_us_for_price");?>
</span>
                    <?php $_smarty_tpl->_assignInScope('show_qty', false);?>
                <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:prices_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
            <?php }?>
        <?php } elseif ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "hide_price_and_add_to_cart" && !$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <span class="ty-price"><?php echo $_smarty_tpl->__("sign_in_to_view_price");?>
</span>
        <?php }?>
    <!--price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && $_smarty_tpl->tpl_vars['show_clean_price']->value && $_smarty_tpl->tpl_vars['settings']->value['Appearance']['show_prices_taxed_clean'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['auth']->value['tax_exempt'] !== smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product']->value['taxed_price']) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="clean_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_clean_price]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_clean_price']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['product']->value['clean_price'] != $_smarty_tpl->tpl_vars['product']->value['taxed_price'] && $_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                <span class="ty-list-price ty-nowrap" id="line_product_price_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">(<?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['taxed_price'],'span_id'=>"product_price_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?> <?php echo $_smarty_tpl->__("inc_tax");?>
)</span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['clean_price'] != $_smarty_tpl->tpl_vars['product']->value['taxed_price'] && !$_smarty_tpl->tpl_vars['product']->value['included_tax']) {?>
                <span class="ty-list-price ty-nowrap ty-tax-include">(<?php echo $_smarty_tpl->__("including_tax");?>
)</span>
            <?php }?>
        <!--clean_price_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_price_values']->value && $_smarty_tpl->tpl_vars['show_list_discount']->value && $_smarty_tpl->tpl_vars['details_page']->value) {?>
        <span class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="line_discount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" name="appearance[show_price_values]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_price_values']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="appearance[show_list_discount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_list_discount']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                <span class="ty-list-price ty-save-price ty-nowrap" id="line_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("you_save");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value),'class'=>"ty-list-price ty-nowrap"), 0, true);
?><span class="ty-save-price__percent">&nbsp;(<span id="prc_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-list-price ty-nowrap"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_prc'], ENT_QUOTES, 'UTF-8');?>
</span>%)</span></span>
            <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['list_discount']) {?>
                <span class="ty-list-price ty-save-price ty-nowrap" id="line_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"> <?php echo $_smarty_tpl->__("you_save");?>
: <?php $_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['product']->value['list_discount'],'span_id'=>"discount_value_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value)), 0, true);
?><span class="ty-save-price__percent">&nbsp;(<span id="prc_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_discount_prc'], ENT_QUOTES, 'UTF-8');?>
</span>%)</span></span>
            <?php }?>
        <!--line_discount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_discount_label']->value && ($_smarty_tpl->tpl_vars['product']->value['discount_prc'] || $_smarty_tpl->tpl_vars['product']->value['list_discount_prc']) && $_smarty_tpl->tpl_vars['show_price_values']->value) {?>
        <span class="ty-discount-label cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="discount_label_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <span class="ty-discount-label__item" id="line_prc_discount_value_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="ty-discount-label__value" id="prc_discount_value_label_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("save_discount");?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_prc'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['list_discount_prc'], ENT_QUOTES, 'UTF-8');
}?>%</span></span>
        <!--discount_label_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></span>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "discount_label_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->_assignInScope('product_labels_position', (($tmp = $_smarty_tpl->tpl_vars['product_labels_position']->value ?? null)===null||$tmp==='' ? "top-right" ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_product_labels']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "capture_product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_labels"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_labels"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['show_shipping_label']->value && $_smarty_tpl->tpl_vars['product']->value['free_shipping'] == "Y") {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--shipping",'label_text'=>$_smarty_tpl->__("free_shipping"),'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0, true);
?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['show_discount_label']->value && ($_smarty_tpl->tpl_vars['product']->value['discount_prc'] || $_smarty_tpl->tpl_vars['product']->value['list_discount_prc']) && $_smarty_tpl->tpl_vars['show_price_values']->value) {?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount']) {?>
                    <?php ob_start();
echo $_smarty_tpl->__("save_discount");
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('label_text', $_prefixVariable10." ".((string)$_smarty_tpl->tpl_vars['product']->value['discount_prc'])."%");?>
                <?php } else { ?>
                    <?php ob_start();
echo $_smarty_tpl->__("save_discount");
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->_assignInScope('label_text', $_prefixVariable11." ".((string)$_smarty_tpl->tpl_vars['product']->value['list_discount_prc'])."%");?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_label.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('label_meta'=>"ty-product-labels__item--discount",'label_text'=>$_smarty_tpl->tpl_vars['label_text']->value,'label_mini'=>$_smarty_tpl->tpl_vars['product_labels_mini']->value,'label_static'=>$_smarty_tpl->tpl_vars['product_labels_static']->value,'label_rounded'=>$_smarty_tpl->tpl_vars['product_labels_rounded']->value), 0, true);
?>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_labels"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->_assignInScope('capture_product_labels', "capture_product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>

        <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_product_labels']->value))) {?>
            <div class="ty-product-labels ty-product-labels--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_labels_position']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['product_labels_mini']->value) {?>ty-product-labels--mini<?php }?> <?php if ($_smarty_tpl->tpl_vars['product_labels_static']->value) {?>ty-product-labels--static<?php }?> cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_labels_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_product_labels']->value);?>

            <!--product_labels_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
        <?php }?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_amount"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_amount"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_product_amount']->value && $_smarty_tpl->tpl_vars['product']->value['is_edp'] != "Y" && $_smarty_tpl->tpl_vars['settings']->value['General']['inventory_tracking'] !== smarty_modifier_enum("YesNo::NO")) {?>
    <?php $_smarty_tpl->_assignInScope('is_tracking_product', $_smarty_tpl->tpl_vars['settings']->value['General']['default_tracking'] !== smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") && $_smarty_tpl->tpl_vars['product']->value['tracking'] !== smarty_modifier_enum("ProductTracking::DO_NOT_TRACK") || $_smarty_tpl->tpl_vars['product']->value['tracking'] !== smarty_modifier_enum("ProductTracking::DO_NOT_TRACK"));?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 stock-wrap" id="product_amount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_product_amount']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!$_smarty_tpl->tpl_vars['product']->value['hide_stock_info']) {?>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['in_stock_field'] == "Y") {?>
                <?php if ($_smarty_tpl->tpl_vars['is_tracking_product']->value) {?>
                    <?php if (($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty']) || $_smarty_tpl->tpl_vars['details_page']->value) {?>
                        <?php if (($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty'] || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                            <div class="ty-control-group product-list-field">
                                <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("availability");?>
:</label>
                                <?php }?>
                                <span id="qty_in_stock_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-qty-in-stock ty-control-group__item">
                                    <?php if ($_smarty_tpl->tpl_vars['product_amount']->value > 0) {?>
                                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_amount']->value, ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo $_smarty_tpl->__("items");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->__("on_backorder");?>

                                    <?php }?>
                                </span>
                            </div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES")) {?>
                            <div class="ty-control-group product-list-field">
                                <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                                    <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("in_stock");?>
:</label>
                                <?php }?>
                                <span class="ty-qty-out-of-stock ty-control-group__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                            </div>
                        <?php }?>
                    <?php }?>
                <?php }?>
            <?php } else { ?>
                <?php if (($_smarty_tpl->tpl_vars['product_amount']->value > 0 && $_smarty_tpl->tpl_vars['product_amount']->value >= $_smarty_tpl->tpl_vars['product']->value['min_qty'] || $_smarty_tpl->tpl_vars['product']->value['tracking'] == smarty_modifier_enum("ProductTracking::DO_NOT_TRACK")) && $_smarty_tpl->tpl_vars['is_tracking_product']->value && $_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['is_tracking_product']->value && ($_smarty_tpl->tpl_vars['allow_negative_amount']->value === smarty_modifier_enum("YesNo::YES") || $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("availability");?>
:</label>
                        <?php }?>
                        <span class="ty-qty-in-stock ty-control-group__item" id="in_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php if ($_smarty_tpl->tpl_vars['product_amount']->value > 0) {?>
                                <?php echo $_smarty_tpl->__("in_stock");?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->__("on_backorder");?>

                            <?php }?>
                        </span>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['details_page']->value && ($_smarty_tpl->tpl_vars['product_amount']->value <= 0 || $_smarty_tpl->tpl_vars['product_amount']->value < $_smarty_tpl->tpl_vars['product']->value['min_qty']) && $_smarty_tpl->tpl_vars['is_tracking_product']->value && $_smarty_tpl->tpl_vars['allow_negative_amount']->value !== smarty_modifier_enum("YesNo::YES")) {?>
                    <div class="ty-control-group product-list-field">
                        <?php if ($_smarty_tpl->tpl_vars['show_amount_label']->value) {?>
                            <label class="ty-control-group__label"><?php echo $_smarty_tpl->__("availability");?>
:</label>
                        <?php }?>
                        <span class="ty-qty-out-of-stock ty-control-group__item" id="out_of_stock_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['out_of_stock_text']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php }?>
            <?php }?>
        <?php }?>
    <!--product_amount_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_amount"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value) {?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
 js-product-options-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="product_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_product_options]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_product_options']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_option_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_option_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['disable_ids']->value) {?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', ((string)$_smarty_tpl->tpl_vars['disable_ids']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('_disable_ids', '');?>
            <?php }?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_options.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['obj_id']->value,'product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options'],'name'=>"product_data",'capture_options_vs_qty'=>$_smarty_tpl->tpl_vars['capture_options_vs_qty']->value,'disable_ids'=>$_smarty_tpl->tpl_vars['_disable_ids']->value), 0, true);
?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_option_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!--product_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_product_options']->value) {?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="advanced_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/product_company_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('company_name'=>$_smarty_tpl->tpl_vars['product']->value['company_name'],'company_id'=>$_smarty_tpl->tpl_vars['product']->value['company_id']), 0, true);
?>
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:options_advanced"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:options_advanced"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:options_advanced"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--advanced_options_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "advanced_options_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:qty"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:qty"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" id="qty_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <input type="hidden" name="appearance[show_qty]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['show_qty']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="appearance[capture_options_vs_qty]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['capture_options_vs_qty']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['selected_amount'])) {?>
            <?php $_smarty_tpl->_assignInScope('default_amount', $_smarty_tpl->tpl_vars['product']->value['selected_amount']);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['min_qty'])) {?>
            <?php $_smarty_tpl->_assignInScope('default_amount', $_smarty_tpl->tpl_vars['product']->value['min_qty']);?>
        <?php } elseif (!empty($_smarty_tpl->tpl_vars['product']->value['qty_step'])) {?>
            <?php $_smarty_tpl->_assignInScope('default_amount', $_smarty_tpl->tpl_vars['product']->value['qty_step']);?>
        <?php } else { ?>
            <?php $_smarty_tpl->_assignInScope('default_amount', "1");?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['show_qty']->value && $_smarty_tpl->tpl_vars['product']->value['is_edp'] !== "Y" && $_smarty_tpl->tpl_vars['cart_button_exists']->value == true && ($_smarty_tpl->tpl_vars['settings']->value['Checkout']['allow_anonymous_shopping'] == "allow_shopping" || $_smarty_tpl->tpl_vars['auth']->value['user_id']) && $_smarty_tpl->tpl_vars['product']->value['avail_since'] <= (defined('TIME') ? constant('TIME') : null) || ($_smarty_tpl->tpl_vars['product']->value['avail_since'] > (defined('TIME') ? constant('TIME') : null) && $_smarty_tpl->tpl_vars['product']->value['out_of_stock_actions'] == smarty_modifier_enum("OutOfStockActions::BUY_IN_ADVANCE"))) {?>
            <div class="ty-qty clearfix<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?> changer<?php }?>" id="qty_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php if (!$_smarty_tpl->tpl_vars['hide_qty_label']->value) {?><label class="ty-control-group__label" for="qty_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['quantity_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("quantity") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
:</label><?php }?>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_content']) {?>
                <select name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" id="qty_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php $_smarty_tpl->_assignInScope('a_name', "product_amount_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php $_smarty_tpl->_assignInScope('selected_amount', false);?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['qty_content'], 'var', true);
$_smarty_tpl->tpl_vars['var']->iteration = 0;
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['var']->iteration++;
$_smarty_tpl->tpl_vars['var']->last = $_smarty_tpl->tpl_vars['var']->iteration === $_smarty_tpl->tpl_vars['var']->total;
$__foreach_var_40_saved = $_smarty_tpl->tpl_vars['var'];
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['product']->value['selected_amount'] && ($_smarty_tpl->tpl_vars['product']->value['selected_amount'] == $_smarty_tpl->tpl_vars['var']->value || ($_smarty_tpl->tpl_vars['var']->last && !$_smarty_tpl->tpl_vars['selected_amount']->value))) {
$_smarty_tpl->_assignInScope('selected_amount', true);?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['var'] = $__foreach_var_40_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <?php } else { ?>
                <div class="ty-center ty-value-changer cm-value-changer">
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                        <a class="cm-increase ty-value-changer__increase">&#43;</a>
                    <?php }?>
                    <input <?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?>readonly="readonly"<?php }?> type="text" size="5" class="ty-value-changer__input cm-amount cm-value-decimal" id="qty_count_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_amount']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty_step'] > 1) {?> data-ca-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['qty_step'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-min-qty="<?php if ($_smarty_tpl->tpl_vars['product']->value['min_qty'] > 1) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['min_qty'], ENT_QUOTES, 'UTF-8');
} else { ?>1<?php }?>" />
                    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['quantity_changer'] == "Y") {?>
                        <a class="cm-decrease ty-value-changer__decrease">&minus;</a>
                    <?php }?>
                </div>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['prices']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/products_qty_discounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php }?>
        <?php } elseif (!$_smarty_tpl->tpl_vars['bulk_add']->value) {?>
            <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_amount']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <?php }?>
        <!--qty_update_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_prefix']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:qty"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:qty_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:qty_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['min_qty']->value && $_smarty_tpl->tpl_vars['product']->value['min_qty']) {?>
            <p class="ty-min-qty-description"><?php echo $_smarty_tpl->__("text_cart_min_qty",array("[product]"=>$_smarty_tpl->tpl_vars['product']->value['product'],"[quantity]"=>$_smarty_tpl->tpl_vars['product']->value['min_qty']));?>
.</p>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:qty_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "min_qty_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['show_edp']->value && $_smarty_tpl->tpl_vars['product']->value['is_edp'] == "Y") {?>
        <p class="ty-edp-description"><?php echo $_smarty_tpl->__("text_edp_product");?>
.</p>
        <input type="hidden" name="product_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['obj_id']->value, ENT_QUOTES, 'UTF-8');?>
][is_edp]" value="Y" />
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "product_edp_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value), null, null);
if (!$_smarty_tpl->tpl_vars['hide_form']->value) {?>
</form>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['no_capture']->value) {?>
    <?php $_smarty_tpl->_assignInScope('capture_name', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['capture_name']->value);?>

<?php }?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, 'object_id');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object_id']->value => $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->_assignInScope('product_link', $_smarty_tpl->tpl_vars['image']->value['link']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_images_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_images_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="cm-reload-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['obj_id'], ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['product_link']->value) {?>
            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_link']->value, ENT_QUOTES, 'UTF-8');?>
">
            <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['link'], ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
][link]" />
        <?php }?>
        <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['obj_id'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['width'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['height'], ENT_QUOTES, 'UTF-8');?>
,<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['type'], ENT_QUOTES, 'UTF-8');?>
" name="image[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
][data]" />
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image']->value['width'],'image_height'=>$_smarty_tpl->tpl_vars['image']->value['height'],'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair']), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['image']->value['link']) {?>
            </a>
        <?php }?>
    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_images_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_data_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_data"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_data"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_data"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
