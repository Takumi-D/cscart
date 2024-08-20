<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:03
  from 'C:\xampp\htdocs\cscart\design\themes\bright_theme\templates\blocks\products\products_scroller.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b42345c335_39893053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c48176b1ca9d42e1c5abdc1a8372b902abb83033' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\bright_theme\\templates\\blocks\\products\\products_scroller.tpl',
      1 => 1724167140,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_icon.tpl' => 2,
    'tygh:views/products/components/quick_view_link.tpl' => 2,
    'tygh:common/scroller_init.tpl' => 2,
  ),
),false)) {
function content_66c4b42345c335_39893053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == "Y" && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"));?>    
    <?php $_smarty_tpl->_assignInScope('show_quick_view', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', true);
}
if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('hide_price', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('hide_price', true);
}?>

<?php $_smarty_tpl->_assignInScope('show_trunc_name', true);
$_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_price', true);
$_smarty_tpl->_assignInScope('show_rating', true);
$_smarty_tpl->_assignInScope('show_clean_price', true);
$_smarty_tpl->_assignInScope('show_list_discount', true);
$_smarty_tpl->_assignInScope('but_role', "action");
$_smarty_tpl->_assignInScope('show_product_labels', true);
$_smarty_tpl->_assignInScope('show_discount_label', true);
$_smarty_tpl->_assignInScope('show_shipping_label', true);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['properties']['outside_navigation'] = "N";
$_smarty_tpl->_assignInScope('block', $_tmp_array);
ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_prefixVariable4;
$_smarty_tpl->_assignInScope('block', $_tmp_array);
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_desktop', $_smarty_tpl->tpl_vars['item_quantity']->value);
$_smarty_tpl->_assignInScope('item_quantity_mobile', 1);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-2);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-1);
}?>

<div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list grid-list ty-scroller-advanced ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_advanced_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ty-scroller-list__item ty-scroller__item">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_advanced_list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>

                <div class="ty-grid-list__item ty-quick-view-button__wrapper ty-left
                <?php if ($_smarty_tpl->tpl_vars['show_quick_view']->value) {?> ty-grid-list__item--overlay<?php }?>">
                    <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                    <div class="ty-grid-list__image">
                        <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0, true);
?>
                    </div>

                    <div class="ty-grid-list__item-name">
                        <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?>
                            <span class="item-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span>
                            <?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>

                        <?php }?>

                        <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
                    </div>

                    <?php if (!$_smarty_tpl->tpl_vars['hide_price']->value) {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?>ty-grid-list__no-price<?php }?>">
                                <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                                <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                                <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>


                                <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value))) {?>
                        <div class="grid-list__rating">
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>

                        </div>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);?>
                        <div class="ty-grid-list__control">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);?>
                                <?php if ($_smarty_tpl->tpl_vars['show_quick_view']->value) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                                    <div class="button-container">
                                        <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                                    </div>
                                <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>

                        </div>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');?>

                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == "Y" && $_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"));?>    
    <?php $_smarty_tpl->_assignInScope('show_quick_view', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('show_add_to_cart', true);
}
if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('hide_price', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('hide_price', true);
}?>

<?php $_smarty_tpl->_assignInScope('show_trunc_name', true);
$_smarty_tpl->_assignInScope('show_old_price', true);
$_smarty_tpl->_assignInScope('show_price', true);
$_smarty_tpl->_assignInScope('show_rating', true);
$_smarty_tpl->_assignInScope('show_clean_price', true);
$_smarty_tpl->_assignInScope('show_list_discount', true);
$_smarty_tpl->_assignInScope('but_role', "action");
$_smarty_tpl->_assignInScope('show_product_labels', true);
$_smarty_tpl->_assignInScope('show_discount_label', true);
$_smarty_tpl->_assignInScope('show_shipping_label', true);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('obj_prefix', ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000");
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['properties']['outside_navigation'] = "N";
$_smarty_tpl->_assignInScope('block', $_tmp_array);
ob_start();
echo htmlspecialchars((string) uniqid(), ENT_QUOTES, 'UTF-8');
$_prefixVariable5=ob_get_clean();
$_tmp_array = isset($_smarty_tpl->tpl_vars['block']) ? $_smarty_tpl->tpl_vars['block']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['block_id'] = ((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".$_prefixVariable5;
$_smarty_tpl->_assignInScope('block', $_tmp_array);
$_smarty_tpl->_assignInScope('item_quantity', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 5 ?? null : $tmp));
$_smarty_tpl->_assignInScope('item_quantity_desktop', $_smarty_tpl->tpl_vars['item_quantity']->value);
$_smarty_tpl->_assignInScope('item_quantity_mobile', 1);?>

<?php if ($_smarty_tpl->tpl_vars['item_quantity']->value > 3) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-2);
} elseif ($_smarty_tpl->tpl_vars['item_quantity']->value === 1) {?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_desktop_small', $_smarty_tpl->tpl_vars['item_quantity']->value-1);?>
    <?php $_smarty_tpl->_assignInScope('item_quantity_tablet', $_smarty_tpl->tpl_vars['item_quantity']->value-1);
}?>

<div id="scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel ty-scroller-list grid-list ty-scroller-advanced ty-scroller"
    data-ca-scroller-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-desktop-small="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_desktop_small']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-tablet="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_tablet']->value, ENT_QUOTES, 'UTF-8');?>
"
    data-ca-scroller-item-mobile="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_quantity_mobile']->value, ENT_QUOTES, 'UTF-8');?>
"
>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'product', false, NULL, 'for_products', array (
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_advanced_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <div class="ty-scroller-list__item ty-scroller__item">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_scroller_advanced_list_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value) {?>
                <?php $_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);?>
                <?php $_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>

                <div class="ty-grid-list__item ty-quick-view-button__wrapper ty-left
                <?php if ($_smarty_tpl->tpl_vars['show_quick_view']->value) {?> ty-grid-list__item--overlay<?php }?>">
                    <?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);?>


                    <div class="ty-grid-list__image">
                        <?php $_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>


                        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0, true);
?>
                    </div>

                    <div class="ty-grid-list__item-name">
                        <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?>
                            <span class="item-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span>
                            <?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);?>

                        <?php }?>

                        <?php $_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi>
                    </div>

                    <?php if (!$_smarty_tpl->tpl_vars['hide_price']->value) {?>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?>ty-grid-list__no-price<?php }?>">
                                <?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}?>

                                <?php $_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);?>


                                <?php $_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);?>


                                <?php $_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>

                            </div>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    <?php }?>

                    <?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value))) {?>
                        <div class="grid-list__rating">
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>

                        </div>
                    <?php }?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);?>
                        <div class="ty-grid-list__control">
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);?>
                                <?php if ($_smarty_tpl->tpl_vars['show_quick_view']->value) {?>
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
?>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?>
                                    <div class="button-container">
                                        <?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>

                                    </div>
                                <?php }?>
                            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>

                        </div>
                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


                    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');?>

                    <?php }?>

                    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?>
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);?>

                    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                </div>
            <?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_scroller_advanced_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
