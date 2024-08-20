<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:26
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\storefronts\components\picker\presets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43a40be04_75082782',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b18ad2f0d29c2f4ebfa2c5c4a04cfb031323373' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\storefronts\\components\\picker\\presets.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/storefronts/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_66c4b43a40be04_75082782 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('show_all_storefronts','all_storefronts_short','all_storefronts_short','select_storefront','show_all_storefronts_with_count','all_storefronts_short','all_storefronts_short','all_storefronts'));
$_smarty_tpl->_assignInScope('is_enabled', $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.is_enabled"]);
$_smarty_tpl->_assignInScope('is_available_for_disaptch', $_smarty_tpl->tpl_vars['app']->value['storefront.switcher.is_available_for_dispatch']);
$_smarty_tpl->_assignInScope('measurement_error_threshold', 2);
$_smarty_tpl->_assignInScope('measurement_error_secondary_threshold', 2*$_smarty_tpl->tpl_vars['measurement_error_threshold']->value);
$_smarty_tpl->_assignInScope('storefront_image_max', 500);
$_smarty_tpl->_assignInScope('storefront_image_size', 64);?>

<?php $_smarty_tpl->_assignInScope('canvas_ratio', (56-2*2)/(36-2*2));?>

<?php if ($_smarty_tpl->tpl_vars['is_enabled']->value && $_smarty_tpl->tpl_vars['is_available_for_disaptch']->value) {?>
    <?php if ((fn_allowed_for("MULTIVENDOR:ULTIMATE"))) {?>
        <?php $_smarty_tpl->_assignInScope('selected_storefront_id', (($tmp = $_smarty_tpl->tpl_vars['selected_storefront_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"] ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_param_name', (($tmp = $_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value ?? null)===null||$tmp==='' ? "s_storefront" ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_data_name', "storefront_id");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('selected_storefront_id', $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"]);?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_param_name', "switch_company_id");?>
        <?php $_smarty_tpl->_assignInScope('storefront_switcher_data_name', "company_id");?>
    <?php }?>

    <?php $_smarty_tpl->_assignInScope('show_all_storefront', (($tmp = $_smarty_tpl->tpl_vars['show_all_storefront']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

    <?php $_smarty_tpl->_assignInScope('preset_data', call_user_func($_smarty_tpl->tpl_vars['app']->value["storefront.switcher.preset_data.factory"],$_smarty_tpl->tpl_vars['selected_storefront_id']->value));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "storefronts_list", null, null);?>
        <?php if ($_smarty_tpl->tpl_vars['show_all_storefront']->value) {?>
            <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],((string)$_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value)."=0".((string)$_smarty_tpl->tpl_vars['storefront_picker_link_suffix']->value))), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link"
                title="<?php echo $_smarty_tpl->__("show_all_storefronts");?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if (!$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
                        storefront__picker-logo-wrapper--active
                    <?php }?>">
                    <div class="storefront__picker-logo-text
                        <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->__("all_storefronts_short"), $tmp) > 3) {?>storefront__picker-logo-text--small<?php }?>
                        <?php if (!$_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>storefront__picker-logo-text--active<?php }?>">
                        <?php echo $_smarty_tpl->__("all_storefronts_short");?>

                    </div>
                </div>
            </a>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['preset_data']->value['storefronts'], 'storefront');
$_smarty_tpl->tpl_vars['storefront']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->value) {
$_smarty_tpl->tpl_vars['storefront']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('_storefront_picker_logo_img_class', $_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value);?>
            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                <?php $_smarty_tpl->_assignInScope('storefront_picker_logo_img_class', "storefront__picker-logo-img--active ".((string)$_smarty_tpl->tpl_vars['_storefront_picker_logo_img_class']->value));?>
            <?php }?>

                        <?php $_smarty_tpl->_assignInScope('logo_img_class', '');?>
            <?php $_smarty_tpl->_assignInScope('image_ratio', $_smarty_tpl->tpl_vars['storefront']->value['images']['image_x']/$_smarty_tpl->tpl_vars['storefront']->value['images']['image_y']);?>
            <?php if ($_smarty_tpl->tpl_vars['image_ratio']->value/$_smarty_tpl->tpl_vars['canvas_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_secondary_threshold']->value || $_smarty_tpl->tpl_vars['canvas_ratio']->value/$_smarty_tpl->tpl_vars['image_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_secondary_threshold']->value) {?>
                <?php $_smarty_tpl->_assignInScope('logo_img_class', "storefront__picker-logo-img--xlong");?>
            <?php } elseif ($_smarty_tpl->tpl_vars['image_ratio']->value/$_smarty_tpl->tpl_vars['canvas_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_threshold']->value || $_smarty_tpl->tpl_vars['canvas_ratio']->value/$_smarty_tpl->tpl_vars['image_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_threshold']->value) {?>
                <?php $_smarty_tpl->_assignInScope('logo_img_class', "storefront__picker-logo-img--long");?>
            <?php }?>

                        <?php $_smarty_tpl->_assignInScope('storefront_image_height', false);?>
            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['images']['image_x'] > $_smarty_tpl->tpl_vars['storefront_image_max']->value || $_smarty_tpl->tpl_vars['storefront']->value['images']['image_y'] > $_smarty_tpl->tpl_vars['storefront_image_max']->value) {?>
                <?php $_smarty_tpl->_assignInScope('storefront_image_height', $_smarty_tpl->tpl_vars['storefront_image_size']->value);?>
            <?php }?>

            <a href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],((string)$_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value)."=".((string)$_smarty_tpl->tpl_vars['storefront']->value[$_smarty_tpl->tpl_vars['storefront_switcher_data_name']->value]).((string)$_smarty_tpl->tpl_vars['storefront_picker_link_suffix']->value))), ENT_QUOTES, 'UTF-8');?>
"
                class="storefront__picker-logo-link <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>storefront__picker-logo-link--active<?php }?>"
                title="<?php echo $_smarty_tpl->__("select_storefront",array("[store]"=>$_smarty_tpl->tpl_vars['storefront']->value['name']));?>
">

                <div class="storefront__picker-logo-wrapper
                    <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>storefront__picker-logo-wrapper--active<?php }?>">
                    <?php echo smarty_function_include_ext(array('file'=>"common/image.tpl",'image'=>$_smarty_tpl->tpl_vars['storefront']->value['images'],'image_height'=>$_smarty_tpl->tpl_vars['storefront_image_height']->value,'image_css_class'=>"storefront__picker-logo-img storefront__picker-logo-img--inactive ".((string)$_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value)." ".((string)$_smarty_tpl->tpl_vars['logo_img_class']->value),'show_detailed_link'=>false),$_smarty_tpl);?>

                </div>
            </a>
            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                <?php $_smarty_tpl->_assignInScope('storefront_picker_logo_img_class', $_smarty_tpl->tpl_vars['_storefront_picker_logo_img_class']->value);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
        <div class="storefront__picker-logo-list js-storefront-switcher"
            data-ca-switcher-param-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_switcher_param_name']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-switcher-data-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_switcher_data_name']->value, ENT_QUOTES, 'UTF-8');?>
">

            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'storefronts_list');?>

            <div class="dropdown storefront__picker-dropdown <?php if ($_smarty_tpl->tpl_vars['runtime']->value['storefronts_count'] > $_smarty_tpl->tpl_vars['preset_data']->value['threshold']) {?>storefront__picker-dropdown--threshold<?php }?>">
                <a class="dropdown-toggle storefront__picker-logo-link storefront__picker-logo-link--dropdown-toggle"
                    data-toggle="dropdown"
                    data-ca-dropdown-object-picker-autoopen=".object-picker__select--storefronts"
                    title="<?php echo $_smarty_tpl->__("show_all_storefronts_with_count",array("[count]"=>$_smarty_tpl->tpl_vars['runtime']->value['storefronts_count']));?>
">
                    <?php if ($_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['preset_data']->value['storefronts'], 'storefront');
$_smarty_tpl->tpl_vars['storefront']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['storefront']->value) {
$_smarty_tpl->tpl_vars['storefront']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['storefront']->value['is_selected']) {?>
                                                                <?php $_smarty_tpl->_assignInScope('logo_img_class', '');?>
                                <?php $_smarty_tpl->_assignInScope('image_ratio', $_smarty_tpl->tpl_vars['storefront']->value['images']['image_x']/$_smarty_tpl->tpl_vars['storefront']->value['images']['image_y']);?>
                                <?php if ($_smarty_tpl->tpl_vars['image_ratio']->value/$_smarty_tpl->tpl_vars['canvas_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_secondary_threshold']->value || $_smarty_tpl->tpl_vars['canvas_ratio']->value/$_smarty_tpl->tpl_vars['image_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_secondary_threshold']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('logo_img_class', "storefront__picker-logo-img--xlong");?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['image_ratio']->value/$_smarty_tpl->tpl_vars['canvas_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_threshold']->value || $_smarty_tpl->tpl_vars['canvas_ratio']->value/$_smarty_tpl->tpl_vars['image_ratio']->value > $_smarty_tpl->tpl_vars['measurement_error_threshold']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('logo_img_class', "storefront__picker-logo-img--long");?>
                                <?php }?>

                                                                <?php $_smarty_tpl->_assignInScope('storefront_image_height', false);?>
                                <?php if ($_smarty_tpl->tpl_vars['storefront']->value['images']['image_x'] > $_smarty_tpl->tpl_vars['storefront_image_max']->value || $_smarty_tpl->tpl_vars['storefront']->value['images']['image_y'] > $_smarty_tpl->tpl_vars['storefront_image_max']->value) {?>
                                    <?php $_smarty_tpl->_assignInScope('storefront_image_height', $_smarty_tpl->tpl_vars['storefront_image_size']->value);?>
                                <?php }?>

                                <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--mobile">
                                    <?php echo smarty_function_include_ext(array('file'=>"common/image.tpl",'image'=>$_smarty_tpl->tpl_vars['storefront']->value['images'],'image_height'=>$_smarty_tpl->tpl_vars['storefront_image_height']->value,'image_css_class'=>"storefront__picker-logo-img ".((string)$_smarty_tpl->tpl_vars['storefront_picker_logo_img_class']->value)." ".((string)$_smarty_tpl->tpl_vars['logo_img_class']->value),'show_detailed_link'=>false),$_smarty_tpl);?>

                                </div>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <?php } else { ?>
                        <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--mobile">
                            <div class="storefront__picker-logo-text
                                <?php if (preg_match_all('/[^\s]/u',$_smarty_tpl->__("all_storefronts_short"), $tmp) > 3) {?>storefront__picker-logo-text--small<?php }?>">
                                <?php echo $_smarty_tpl->__("all_storefronts_short");?>

                            </div>
                        </div>
                    <?php }?>
                    <div class="storefront__picker-logo-wrapper storefront__picker-logo-wrapper--desktop">
                        <div class="storefront__picker-logo-text">
                            +<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['runtime']->value['storefronts_count']-$_smarty_tpl->tpl_vars['preset_data']->value['threshold']), ENT_QUOTES, 'UTF-8');?>

                        </div>
                    </div>
                </a>
                <ul class="dropdown-menu storefront__picker-dropdown-menu" id="storefront_picker_dropdown_menu">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>'','item_ids'=>array($_smarty_tpl->tpl_vars['selected_storefront_id']->value),'show_empty_variant'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value,'dropdown_parent_selector'=>"#storefront_picker_dropdown_menu",'empty_variant_text'=>$_smarty_tpl->__("all_storefronts"),'show_advanced'=>false,'dropdown_css_class'=>"storefront__picker-dropdown-picker"), 0, false);
?>
                </ul>
            </div>
        </div>
    <?php }
}
}
}
