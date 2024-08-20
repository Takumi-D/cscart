<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:11
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\blocks\list_templates\grid_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b42b0ed599_22625614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '655bc1ef4968979a1feb809869cbb5efd7be5f12' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\blocks\\list_templates\\grid_list.tpl',
      1 => 1724167137,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 4,
    'tygh:views/products/components/sorting.tpl' => 2,
    'tygh:common/product_data.tpl' => 2,
    'tygh:views/products/components/product_icon.tpl' => 2,
    'tygh:views/products/components/quick_view_link.tpl' => 2,
  ),
),false)) {
function content_66c4b42b0ed599_22625614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.split.php','function'=>'smarty_function_split',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('empty','empty'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['products']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('cur_number', 1);?>
    <?php }?>

        <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"));?>
    <?php }?>
    <div class="grid-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_products']->value, 'sproducts', false, NULL, 'sprod', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['sproducts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sproducts']->value) {
$_smarty_tpl->tpl_vars['sproducts']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['total'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sproducts']->value, 'product', false, NULL, 'sproducts', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['iteration']++;
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?><div class="ty-grid-list__item ty-quick-view-button__wrapper<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == 'Y' || $_smarty_tpl->tpl_vars['show_features']->value) {?> ty-grid-list__item--overlay<?php }?>"><?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-grid-list__image"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0, true);
$_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>
</div><div class="ty-grid-list__item-name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?><span class="item-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi></div><?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value))) {?><div class="grid-list__rating"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>
</div><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?>ty-grid-list__no-price<?php }?>"><?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}
$_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);
$_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);
$_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>
</div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);?><div class="ty-grid-list__control"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == 'Y') {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
}
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?><div class="button-container"><?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['show_empty']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] : null)) {
$_smarty_tpl->_assignInScope('iteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['iteration'] : null));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:products_multicolumns_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('iteration', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'iteration'));
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value != 0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
$__section_empty_rows_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_0_total = $__section_empty_rows_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new Smarty_Variable(array());
if ($__section_empty_rows_0_total !== 0) {
for ($__section_empty_rows_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_0_iteration <= $__section_empty_rows_0_total; $__section_empty_rows_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ty-product-empty"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span></div></div><?php
}
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/list_templates/grid_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/list_templates/grid_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['products']->value) {?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>

    

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_sorting']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/sorting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['show_empty']->value) {?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products"),$_smarty_tpl);?>

    <?php } else { ?>
        <?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['products']->value,'size'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"splitted_products",'skip_complete'=>true),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_math(array('equation'=>"100 / x",'x'=>(($tmp = $_smarty_tpl->tpl_vars['columns']->value ?? null)===null||$tmp==='' ? "2" ?? null : $tmp),'assign'=>"cell_width"),$_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?>
        <?php $_smarty_tpl->_assignInScope('cur_number', 1);?>
    <?php }?>

        <?php echo smarty_function_script(array('src'=>"js/tygh/product_image_gallery.js"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == 'Y') {?>
        <?php $_smarty_tpl->_assignInScope('quick_nav_ids', fn_fields_from_multi_level($_smarty_tpl->tpl_vars['products']->value,"product_id","product_id"));?>
    <?php }?>
    <div class="grid-list">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['splitted_products']->value, 'sproducts', false, NULL, 'sprod', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['sproducts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sproducts']->value) {
$_smarty_tpl->tpl_vars['sproducts']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['total'];
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sproducts']->value, 'product', false, NULL, 'sproducts', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['iteration']++;
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['product']->value['product_id']);
$_smarty_tpl->_assignInScope('obj_id_prefix', ((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['product']->value['product_id']));
$_smarty_tpl->_subTemplateRender("tygh:common/product_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?><div class="ty-grid-list__item ty-quick-view-button__wrapper<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == 'Y' || $_smarty_tpl->tpl_vars['show_features']->value) {?> ty-grid-list__item--overlay<?php }?>"><?php $_smarty_tpl->_assignInScope('form_open', "form_open_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_open']->value);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-grid-list__image"><?php $_smarty_tpl->_subTemplateRender("tygh:views/products/components/product_icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_gallery'=>true), 0, true);
$_smarty_tpl->_assignInScope('product_labels', "product_labels_".((string)$_smarty_tpl->tpl_vars['obj_prefix']->value).((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['product_labels']->value);?>
</div><div class="ty-grid-list__item-name"><?php if ($_smarty_tpl->tpl_vars['item_number']->value == "Y") {?><span class="item-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cur_number']->value, ENT_QUOTES, 'UTF-8');?>
.&nbsp;</span><?php echo smarty_function_math(array('equation'=>"num + 1",'num'=>$_smarty_tpl->tpl_vars['cur_number']->value,'assign'=>"cur_number"),$_smarty_tpl);
}
$_smarty_tpl->_assignInScope('name', "name_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));?><bdi><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['name']->value);?>
</bdi></div><?php $_smarty_tpl->_assignInScope('rating', "rating_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value))) {?><div class="grid-list__rating"><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['rating']->value);?>
</div><?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:list_price_block"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:list_price_block"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?><div class="ty-grid-list__price <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] == 0) {?>ty-grid-list__no-price<?php }?>"><?php $_smarty_tpl->_assignInScope('old_price', "old_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['old_price']->value);
}
$_smarty_tpl->_assignInScope('price', "price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['price']->value);
$_smarty_tpl->_assignInScope('clean_price', "clean_price_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['clean_price']->value);
$_smarty_tpl->_assignInScope('list_discount', "list_discount_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['list_discount']->value);?>
</div><?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:list_price_block"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data_wrapper", null, null);?><div class="ty-grid-list__control"><?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_multicolumns_list_control_data", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_multicolumns_list_control"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['enable_quick_view'] == 'Y') {
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0, true);
}
if ($_smarty_tpl->tpl_vars['show_add_to_cart']->value) {?><div class="button-container"><?php $_smarty_tpl->_assignInScope('add_to_cart', "add_to_cart_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['add_to_cart']->value);?>
</div><?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list_control"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data');?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data'))) {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'product_multicolumns_list_control_data_wrapper');
}
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_multicolumns_list"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:product_list_form_close_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('form_close', "form_close_".((string)$_smarty_tpl->tpl_vars['obj_id']->value));
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, $_smarty_tpl->tpl_vars['form_close']->value);
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:product_list_form_close_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></div><?php }?></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['show_empty']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sprod']->value['last'] : null)) {
$_smarty_tpl->_assignInScope('iteration', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_sproducts']->value['iteration'] : null));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "iteration", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['iteration']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"products:products_multicolumns_extra"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"products:products_multicolumns_extra"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_assignInScope('iteration', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'iteration'));
if ($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value != 0) {
echo smarty_function_math(array('assign'=>"empty_count",'equation'=>"c - it%c",'it'=>$_smarty_tpl->tpl_vars['iteration']->value,'c'=>$_smarty_tpl->tpl_vars['columns']->value),$_smarty_tpl);
$__section_empty_rows_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['empty_count']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_empty_rows_1_total = $__section_empty_rows_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_empty_rows'] = new Smarty_Variable(array());
if ($__section_empty_rows_1_total !== 0) {
for ($__section_empty_rows_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index'] = 0; $__section_empty_rows_1_iteration <= $__section_empty_rows_1_total; $__section_empty_rows_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_empty_rows']->value['index']++){
?><div class="ty-column<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['columns']->value, ENT_QUOTES, 'UTF-8');?>
"><div class="ty-product-empty"><span class="ty-product-empty__text"><?php echo $_smarty_tpl->__("empty");?>
</span></div></div><?php
}
}
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['no_pagination']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
