<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:11
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\views\products\components\product_features_short_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b42b88c990_31099831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c18d8b8a4586b59a833bcc00c40e8ef9ec6989ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\views\\products\\components\\product_features_short_list.tpl',
      1 => 1724167139,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66c4b42b88c990_31099831 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'feature_value' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cscart\\var\\cache\\templates\\bright_theme\\c18d8b8a4586b59a833bcc00c40e8ef9ec6989ca_2.tygh.product_features_short_list.tpl.php',
    'uid' => 'c18d8b8a4586b59a833bcc00c40e8ef9ec6989ca',
    'call_name' => 'smarty_template_function_feature_value_154849613166c4b42b730b97_37539085',
  ),
));
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('image_size', (($tmp = $_smarty_tpl->tpl_vars['image_size']->value ?? null)===null||$tmp==='' ? 80 ?? null : $tmp));?>


<?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="ty-features-list"><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature', false, NULL, 'features_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['total'];
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {
echo $_smarty_tpl->tpl_vars['feature']->value['description'];?>
:<?php }
if ($_smarty_tpl->tpl_vars['feature_image']->value && $_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]['image_pairs']) {
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['feature']->value['variant_id']);?><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])."&features_hash=".((string)$_smarty_tpl->tpl_vars['feature']->value['features_hash'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image_size']->value,'images'=>$_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0, true);
?></a><?php } else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'feature_value', array('feature'=>$_smarty_tpl->tpl_vars['feature']->value), true);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last'] : null)) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_features_short_list.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_features_short_list.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('image_size', (($tmp = $_smarty_tpl->tpl_vars['image_size']->value ?? null)===null||$tmp==='' ? 80 ?? null : $tmp));?>


<?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="ty-features-list"><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['features']->value, 'feature', false, NULL, 'features_list', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['feature']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['total'];
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX")) {
echo $_smarty_tpl->tpl_vars['feature']->value['description'];?>
:<?php }
if ($_smarty_tpl->tpl_vars['feature_image']->value && $_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]['image_pairs']) {
$_smarty_tpl->_assignInScope('obj_id', $_smarty_tpl->tpl_vars['feature']->value['variant_id']);?><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])."&features_hash=".((string)$_smarty_tpl->tpl_vars['feature']->value['features_hash'])), ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image_width'=>$_smarty_tpl->tpl_vars['image_size']->value,'images'=>$_smarty_tpl->tpl_vars['feature']->value['variants'][$_smarty_tpl->tpl_vars['feature']->value['variant_id']]['image_pairs'],'no_ids'=>true), 0, true);
?></a><?php } else {
$_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'feature_value', array('feature'=>$_smarty_tpl->tpl_vars['feature']->value), true);
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_features_list']->value['last'] : null)) {?>, <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }
}
}
}
/* smarty_template_function_feature_value_154849613166c4b42b730b97_37539085 */
if (!function_exists('smarty_template_function_feature_value_154849613166c4b42b730b97_37539085')) {
function smarty_template_function_feature_value_154849613166c4b42b730b97_37539085(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['feature']->value['features_hash'] && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED")) {?><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])."&features_hash=".((string)$_smarty_tpl->tpl_vars['feature']->value['features_hash'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span class="ty-features-list__item-prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'fvariant', false, NULL, 'ffev', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['fvariant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fvariant']->value) {
$_smarty_tpl->tpl_vars['fvariant']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['total'];
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['fvariant']->value['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['fvariant']->value['value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED")) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span class="ty-features-list__item-suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED") && $_smarty_tpl->tpl_vars['feature']->value['features_hash']) {?></a><?php }
}}
/*/ smarty_template_function_feature_value_154849613166c4b42b730b97_37539085 */
/* smarty_template_function_feature_value_154849613166c4b42b730b97_37539085 */
if (!function_exists('smarty_template_function_feature_value_154849613166c4b42b730b97_37539085')) {
function smarty_template_function_feature_value_154849613166c4b42b730b97_37539085(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['feature']->value['features_hash'] && $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED")) {?><a href="<?php echo htmlspecialchars((string) fn_url("categories.view?category_id=".((string)$_smarty_tpl->tpl_vars['product']->value['main_category'])."&features_hash=".((string)$_smarty_tpl->tpl_vars['feature']->value['features_hash'])), ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['prefix']) {?><span class="ty-features-list__item-prefix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::DATE")) {
echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['feature']->value['value_int'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::MULTIPLE_CHECKBOX")) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feature']->value['variants'], 'fvariant', false, NULL, 'ffev', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['fvariant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fvariant']->value) {
$_smarty_tpl->tpl_vars['fvariant']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['total'];
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['fvariant']->value['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['fvariant']->value['value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_ffev']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::TEXT_SELECTBOX") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_SELECTBOX") || $_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED")) {
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['feature']->value['variant'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['feature']->value['value'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::SINGLE_CHECKBOX")) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['description'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::NUMBER_FIELD")) {
echo htmlspecialchars((string) floatval($_smarty_tpl->tpl_vars['feature']->value['value_int']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['feature']->value['suffix']) {?><span class="ty-features-list__item-suffix"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['feature']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</span><?php }
if ($_smarty_tpl->tpl_vars['feature']->value['feature_type'] == smarty_modifier_enum("ProductFeatures::EXTENDED") && $_smarty_tpl->tpl_vars['feature']->value['features_hash']) {?></a><?php }
}}
/*/ smarty_template_function_feature_value_154849613166c4b42b730b97_37539085 */
}
