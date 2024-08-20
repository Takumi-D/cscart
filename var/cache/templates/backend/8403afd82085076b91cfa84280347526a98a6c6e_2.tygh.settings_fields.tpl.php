<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:23
  from 'C:\xampp\htdocs\cscart\design\backend\templates\common\settings_fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b3fbccf2a7_30022659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8403afd82085076b91cfa84280347526a98a6c6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\settings_fields.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 1,
    'tygh:common/adaptive_object_selection.tpl' => 1,
    'tygh:components/phone.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:components/global_individual.tpl' => 1,
    'tygh:common/selectable_box.tpl' => 1,
  ),
),false)) {
function content_66c4b3fbccf2a7_30022659 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_default','default','select_selectbox_option','no_items','multiple_selectbox_notice','select_country','select_state','browse','no_items'));
if (($_smarty_tpl->tpl_vars['item']->value['options'])) {?>
    <?php $_smarty_tpl->_assignInScope('label_attrs', (($tmp = $_smarty_tpl->tpl_vars['item']->value['options']['label_attributes'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('input_attrs', (($tmp = $_smarty_tpl->tpl_vars['item']->value['options']['input_attributes'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('select_attrs', (($tmp = $_smarty_tpl->tpl_vars['item']->value['options']['select_attributes'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('button_attrs', (($tmp = $_smarty_tpl->tpl_vars['item']->value['options']['button_attributes'] ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
}
$_smarty_tpl->_assignInScope('default_attrs', (($tmp = $_smarty_tpl->tpl_vars['default_attrs']->value ?? null)===null||$tmp==='' ? array() ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['item']->value['update_for_all'] && ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all'] === "not_active" || fn_allowed_for("MULTIVENDOR")) && $_smarty_tpl->tpl_vars['app']->value['storefront.repository']->getCount(array('cache'=>true)) > 1) {?>
    <?php $_smarty_tpl->_assignInScope('disable_input', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>
    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['default_attrs']) ? $_smarty_tpl->tpl_vars['default_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['disabled'] = "disabled";
$_smarty_tpl->_assignInScope('default_attrs', $_tmp_array);
}
$_smarty_tpl->_assignInScope('SHORT_DIVIDER', "──");?>

<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['global_setting']))) {?>
    <?php $_smarty_tpl->_assignInScope('global_selector', true);?>

            <?php $_smarty_tpl->_assignInScope('default_option', true);?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>
        <?php $_smarty_tpl->_assignInScope('default_option_hidden', true);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('default_option_text', $_smarty_tpl->__("select_default"));?>

    <?php if ($_smarty_tpl->tpl_vars['global_selector']->value && !$_smarty_tpl->tpl_vars['item']->value['has_global_value']) {?>
                <?php $_smarty_tpl->_assignInScope('option_suffix', $_smarty_tpl->__('default'));?>
        <?php $_smarty_tpl->_assignInScope('option_suffix', "(".((string)$_smarty_tpl->tpl_vars['option_suffix']->value).")");?>

                <?php $_smarty_tpl->_assignInScope('input_placeholder', $_smarty_tpl->__("default"));?>
    <?php }
}?>

<?php $_smarty_tpl->_assignInScope('default_option', (($tmp = $_smarty_tpl->tpl_vars['default_option']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('default_option_hidden', (($tmp = $_smarty_tpl->tpl_vars['default_option_hidden']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('default_option_text', (($tmp = $_smarty_tpl->tpl_vars['default_option_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("select_selectbox_option") ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['parent_item']->value) {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function($, _) {
    $('#<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['parent_item_html_id']->value, ENT_QUOTES, 'UTF-8');?>
').on('click', function() {
        $('#container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
').toggle();
    });
}(Tygh.$, Tygh));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::INFO")) {?>
    <div><?php echo $_smarty_tpl->tpl_vars['item']->value['info'];?>
</div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::TEMPLATE")) {?>
    <div><?php $_smarty_tpl->_subTemplateRender("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::PERMANENT_TEMPLATE")) {?>
    <div><?php $_smarty_tpl->_subTemplateRender("addons/".((string)$_REQUEST['addon'])."/settings/".((string)$_smarty_tpl->tpl_vars['item']->value['value']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('skip_addon_check'=>true), 0, true);
?></div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::HEADER")) {?>
    <?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_first') == 'true') {?>
            </fieldset>
        </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "header_first", null, null);?>true<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['item']->value['description'],'target'=>"#collapsable_".((string)$_smarty_tpl->tpl_vars['html_id']->value)), 0, false);
?>
    <div id="collapsable_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="in collapse">
        <fieldset>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] !== smarty_modifier_enum("SettingTypes::HIDDEN") && $_smarty_tpl->tpl_vars['item']->value['type'] !== smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
        <div id="container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-group<?php if ($_smarty_tpl->tpl_vars['class']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['section_name'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['parent_item']->value && $_smarty_tpl->tpl_vars['parent_item']->value['value'] != smarty_modifier_enum("YesNo::YES")) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['highlight']->value && smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['highlight']->value)) {?> row-highlight<?php }?> <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == smarty_modifier_enum("SettingTypes::PHONE")) {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] == smarty_modifier_enum("SettingTypes::PHONE")) {?>data-ca-phone-mask-group-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
        <?php ob_start();
if ($_smarty_tpl->tpl_vars['item']->value['type'] == smarty_modifier_enum("SettingTypes::PHONE")) {
echo " cm-mask-phone-label";
}
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('default_label_attrs', array("for"=>$_smarty_tpl->tpl_vars['html_id']->value,"class"=>"control-label ".$_prefixVariable1));?>
        <?php $_smarty_tpl->_assignInScope('extended_label_attrs', array("class"=>$_smarty_tpl->tpl_vars['highlight']->value && smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['name'],$_smarty_tpl->tpl_vars['highlight']->value) ? "highlight" : ''));?>
        <label <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['label_attrs']->value,$_smarty_tpl->tpl_vars['default_label_attrs']->value,$_smarty_tpl->tpl_vars['extended_label_attrs']->value);?>
><?php echo $_smarty_tpl->tpl_vars['item']->value['description'];?>
:
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"settings_fields:setting_description"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"settings_fields:setting_description"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['tooltip']) {?><div class="muted description"><?php echo $_smarty_tpl->tpl_vars['item']->value['tooltip'];?>
</div><?php }?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"settings_fields:setting_description"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </label>

        <div class="controls">
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "setting_field", null, null);?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::PASSWORD")) {?>
                <?php $_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"type"=>"password","size"=>"30","class"=>"input-text","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']))));?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
/>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::TEXTAREA")) {?>
                <?php $_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"type"=>"password","class"=>"input-large","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"rows"=>"5","cols"=>"19")));?>
                <textarea <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::CHECKBOX")) {?>
                <?php $_smarty_tpl->_assignInScope('default_checked_value', smarty_modifier_enum("YesNo::YES"));?>
                <?php $_smarty_tpl->_assignInScope('default_unchecked_value', smarty_modifier_enum("YesNo::NO"));?>
                <?php $_smarty_tpl->_assignInScope('checked_value', (($tmp = $_smarty_tpl->tpl_vars['input_attrs']->value['checked_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_checked_value']->value ?? null : $tmp));?>
                <?php $_smarty_tpl->_assignInScope('unchecked_value', (($tmp = $_smarty_tpl->tpl_vars['input_attrs']->value['unchecked_value'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['default_unchecked_value']->value ?? null : $tmp));?>
                <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unchecked_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                <?php $_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"type"=>"checkbox","value"=>$_smarty_tpl->tpl_vars['checked_value']->value)));?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] == $_smarty_tpl->tpl_vars['checked_value']->value) {?>
                    <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['default_attrs']) ? $_smarty_tpl->tpl_vars['default_attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['checked'] = "checked";
$_smarty_tpl->_assignInScope('default_attrs', $_tmp_array);?>
                <?php }?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
 />
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::SELECTBOX")) {?>
                <?php $_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value))));?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <?php if ($_smarty_tpl->tpl_vars['default_option']->value) {?>
                        <option value="" disabled <?php if ($_smarty_tpl->tpl_vars['default_option_hidden']->value) {?>class="hidden"<?php }?> data-ca-type="defaultOption">
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['SHORT_DIVIDER']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_option_text']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['SHORT_DIVIDER']->value, ENT_QUOTES, 'UTF-8');?>

                        </option>
                    <?php }?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                        <option
                            value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] == $_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>
                            data-ca-value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
"
                        >
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_suffix']->value, ENT_QUOTES, 'UTF-8');?>

                        </option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::RADIOGROUP")) {?>
                <div class="select-field" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                        <label for="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" class="radio">
                            <?php $_smarty_tpl->_assignInScope('attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("type"=>"radio","name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"value"=>((string)$_smarty_tpl->tpl_vars['k']->value),"id"=>"variant_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['k']->value))));?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] == $_smarty_tpl->tpl_vars['k']->value) {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['attrs']) ? $_smarty_tpl->tpl_vars['attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['checked'] = "checked";
$_smarty_tpl->_assignInScope('attrs', $_tmp_array);?>
                            <?php }?>
                            <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['attrs']->value);?>
> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>

                        </label>
                    <?php
}
if ($_smarty_tpl->tpl_vars['v']->do_else) {
?>
                        <?php echo $_smarty_tpl->__("no_items");?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::MULTIPLE_SELECT")) {?>
                <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                <?php $_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value)."[]","multiple"=>"multiple")));?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] && $_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['k']->value] === smarty_modifier_enum("YesNo::YES")) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <div class="muted description"><?php echo $_smarty_tpl->__("multiple_selectbox_notice");?>
</div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES")) {?>
                <div class="select-field" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="hidden" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::NO"), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>disabled="disabled"<?php }?> />
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/adaptive_object_selection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->tpl_vars['html_name']->value,'input_id'=>"variant_".((string)$_smarty_tpl->tpl_vars['item']->value['name']),'item_ids'=>$_smarty_tpl->tpl_vars['item']->value['value_ids'],'items'=>$_smarty_tpl->tpl_vars['item']->value['variants'],'type'=>$_smarty_tpl->tpl_vars['html_name']->value,'class_prefix'=>$_smarty_tpl->tpl_vars['html_name']->value,'close_on_select'=>"false",'list_mode'=>true,'is_default_array_check'=>false), 0, false);
?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::COUNTRY")) {?>
                <?php $_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"class"=>"cm-country cm-location-billing")));?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                    <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_countries(''));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['code']->value == $_smarty_tpl->tpl_vars['item']->value['value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::STATE")) {?>
                <?php $_smarty_tpl->_assignInScope('default_select_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"class"=>"cm-state cm-location-billing")));?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['select_attrs']->value,$_smarty_tpl->tpl_vars['default_select_attrs']->value);?>
>
                    <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                </select>
                <?php $_smarty_tpl->_assignInScope('default_input_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value)."_d","name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']),"type"=>"text","size"=>"32","maxlength"=>"64","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"disabled"=>"disabled","class"=>"cm-state cm-location-billing")));?>
                <?php $_smarty_tpl->_assignInScope('extended_input_attrs', array("class"=>"hidden"));?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_input_attrs']->value,$_smarty_tpl->tpl_vars['extended_input_attrs']->value);?>
 />
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::FILE")) {?>
                <div class="input-append">
                    <?php $_smarty_tpl->_assignInScope('default_input_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>"file_".((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']),"type"=>"text","placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"size"=>"30")));?>
                    <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_input_attrs']->value);?>
>
                    <?php $_smarty_tpl->_assignInScope('default_button_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"class"=>"btn","type"=>"button","onclick"=>"Tygh.fileuploader.init('box_server_upload', this.id);")));?>
                    <button <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['button_attrs']->value,$_smarty_tpl->tpl_vars['default_button_attrs']->value);?>
><?php echo $_smarty_tpl->__("browse");?>
</button>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::MULTIPLE_CHECKBOXES_FOR_SELECTBOX")) {?>
                <div class="cm-combo-checkbox-group" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'variant_name', false, 'variant_key');
$_smarty_tpl->tpl_vars['variant_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_key']->value => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->do_else = false;
?>
                        <label for="variant_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
" class="checkbox">
                            <?php $_smarty_tpl->_assignInScope('attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>"variant_".((string)$_smarty_tpl->tpl_vars['item']->value['name'])."_".((string)$_smarty_tpl->tpl_vars['variant_key']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value)."[]","class"=>"cm-combo-checkbox","value"=>((string)$_smarty_tpl->tpl_vars['variant_key']->value),"type"=>"checkbox")));?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value['value'][$_smarty_tpl->tpl_vars['variant_key']->value] == smarty_modifier_enum("YesNo::YES")) {?>
                                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['attrs']) ? $_smarty_tpl->tpl_vars['attrs']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['checked'] = "checked";
$_smarty_tpl->_assignInScope('attrs', $_tmp_array);?>
                            <?php }?>
                            <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['attrs']->value);?>
>
                            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');?>

                        </label>
                    <?php
}
if ($_smarty_tpl->tpl_vars['variant_name']->do_else) {
?>
                        <?php echo $_smarty_tpl->__("no_items");?>

                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::SELECTBOX_WITH_SOURCE")) {?>
                <?php $_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"class"=>"cm-combo-select")));?>
                <select <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['variants'], 'variant_name', false, 'variant_key');
$_smarty_tpl->tpl_vars['variant_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['variant_key']->value => $_smarty_tpl->tpl_vars['variant_name']->value) {
$_smarty_tpl->tpl_vars['variant_name']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['value'] == $_smarty_tpl->tpl_vars['variant_key']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['variant_name']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::UNEDITABLE")) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['value'], ENT_QUOTES, 'UTF-8');?>

            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::PHONE")) {?>
                <?php if ($_smarty_tpl->tpl_vars['disable_input']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('attrs', array('disabled'=>"disabled"));?>
                <?php }?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>$_smarty_tpl->tpl_vars['html_id']->value,'name'=>$_smarty_tpl->tpl_vars['html_name']->value,'value'=>$_smarty_tpl->tpl_vars['item']->value['value'],'placeholder'=>$_smarty_tpl->tpl_vars['input_placeholder']->value,'show_control_group'=>false,'show_controls'=>false,'attrs'=>$_smarty_tpl->tpl_vars['attrs']->value), 0, false);
?>
            <?php } else { ?>
                <?php ob_start();
if ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::NUMBER")) {
echo " cm-value-integer";
} elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::FLOAT")) {
echo " cm-value-decimal";
}
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('default_attrs', array_merge($_smarty_tpl->tpl_vars['default_attrs']->value,array("id"=>((string)$_smarty_tpl->tpl_vars['html_id']->value),"type"=>"text","name"=>((string)$_smarty_tpl->tpl_vars['html_name']->value),"size"=>"30","class"=>$_prefixVariable2,"placeholder"=>((string)$_smarty_tpl->tpl_vars['input_placeholder']->value),"value"=>((string)$_smarty_tpl->tpl_vars['item']->value['value']))));?>
                <input <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['input_attrs']->value,$_smarty_tpl->tpl_vars['default_attrs']->value);?>
/>
            <?php }?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "update_for_all", null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['global_setting']) {?>
                    <?php $_smarty_tpl->_assignInScope('settings_ids', array($_smarty_tpl->tpl_vars['item']->value['object_id'],$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id']));?>
                    <?php $_smarty_tpl->_assignInScope('settings_input_names', array($_smarty_tpl->tpl_vars['item']->value['object_id']=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]",$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id']=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['global_setting']['object_id'])."]"));?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('settings_ids', array($_smarty_tpl->tpl_vars['item']->value['object_id']));?>
                    <?php $_smarty_tpl->_assignInScope('settings_input_names', array($_smarty_tpl->tpl_vars['item']->value['object_id']=>"update_all_vendors[".((string)$_smarty_tpl->tpl_vars['item']->value['object_id'])."]"));?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['item']->value['update_for_all'],'hide_element'=>$_smarty_tpl->tpl_vars['html_id']->value,'object_ids'=>$_smarty_tpl->tpl_vars['settings_ids']->value,'names'=>$_smarty_tpl->tpl_vars['settings_input_names']->value,'static_position'=>$_smarty_tpl->tpl_vars['global_selector']->value,'component'=>"settings.".((string)$_smarty_tpl->tpl_vars['item']->value['name'])), 0, false);
?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->tpl_vars['global_selector']->value) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:components/global_individual.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'setting_field'),'extra'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'update_for_all'),'html_id'=>$_smarty_tpl->tpl_vars['html_id']->value,'html_name'=>$_smarty_tpl->tpl_vars['html_name']->value,'global_setting'=>$_smarty_tpl->tpl_vars['item']->value['global_setting'],'disable_input'=>$_smarty_tpl->tpl_vars['disable_input']->value), 0, false);
?>
            <?php } else { ?>
                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'setting_field');?>

                <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'update_for_all');?>

            <?php }?>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === smarty_modifier_enum("SettingTypes::SELECTABLE_BOX")) {?>
    <div class="control-group">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/selectable_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('addon'=>$_smarty_tpl->tpl_vars['section_name']->value,'name'=>$_smarty_tpl->tpl_vars['html_name']->value,'id'=>$_smarty_tpl->tpl_vars['html_id']->value,'fields'=>$_smarty_tpl->tpl_vars['item']->value['variants'],'selected_fields'=>$_smarty_tpl->tpl_vars['item']->value['value']), 0, false);
?>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['total']->value == $_smarty_tpl->tpl_vars['index']->value && $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'header_first') == 'true') {?>
    </fieldset>
        </div>
<?php }
}
}
