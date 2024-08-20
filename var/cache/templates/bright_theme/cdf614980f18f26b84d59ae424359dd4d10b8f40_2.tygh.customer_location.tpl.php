<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:56
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\geo_maps\blocks\customer_location.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41c8671a7_26973094',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdf614980f18f26b84d59ae424359dd4d10b8f40' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\geo_maps\\blocks\\customer_location.tpl',
      1 => 1724167145,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/popupbox.tpl' => 2,
  ),
),false)) {
function content_66c4b41c8671a7_26973094 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('geo_maps.your_city','geo_maps.select_your_city','geo_maps.your_city','geo_maps.select_your_city'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status'] == "A") {?>
    <?php $_smarty_tpl->_assignInScope('block_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp));?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = $_smarty_tpl->tpl_vars['location_detected']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "geo_maps_location_popup_opener", null, null);?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['location']->value['city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("geo_maps.your_city") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"geo_maps.customer_geolocation",'link_text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'geo_maps_location_popup_opener'),'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->__("geo_maps.select_your_city"),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->tpl_vars['block_id']->value),'content'=>''), 0, false);
?>
    <!--geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/blocks/customer_location.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/blocks/customer_location.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['addons']->value['geo_maps']['status'] == "A") {?>
    <?php $_smarty_tpl->_assignInScope('block_id', (($tmp = $_smarty_tpl->tpl_vars['block']->value['snapping_id'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['id']->value ?? null : $tmp));?>
    <div class="ty-geo-maps__geolocation"
         data-ca-geo-map-location-is-location-detected="<?php if ((($tmp = $_smarty_tpl->tpl_vars['location_detected']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp)) {?>true<?php } else { ?>false<?php }?>"
         data-ca-geo-map-location-element="location_block"
         id="geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "geo_maps_location_popup_opener", null, null);?>
            <span data-ca-geo-map-location-element="location" class="ty-geo-maps__geolocation__location"><?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['location']->value['city'] ?? null)===null||$tmp==='' ? $_smarty_tpl->__("geo_maps.your_city") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
</span>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('href'=>"geo_maps.customer_geolocation",'link_text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'geo_maps_location_popup_opener'),'link_text_meta'=>"ty-geo-maps__geolocation__opener-text",'link_icon'=>"ty-icon-location-arrow",'link_icon_first'=>true,'link_meta'=>"ty-geo-maps__geolocation__opener",'text'=>$_smarty_tpl->__("geo_maps.select_your_city"),'id'=>"geo_maps_location_dialog_".((string)$_smarty_tpl->tpl_vars['block_id']->value),'content'=>''), 0, true);
?>
    <!--geo_maps_location_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
}
