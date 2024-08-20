<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:21:34
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\form_builder\hooks\pages\page_content.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b47ea2ca72_58111401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee2222f79c2d3af482c239f57aaea0b7bba4ad94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\form_builder\\hooks\\pages\\page_content.override.tpl',
      1 => 1724167150,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 4,
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/calendar.tpl' => 2,
    'tygh:components/phone.tpl' => 2,
    'tygh:views/profiles/components/profiles_scripts.tpl' => 2,
    'tygh:common/fileuploader.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
  ),
),false)) {
function content_66c4b47ea2ca72_58111401 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.in_array.php','function'=>'smarty_modifier_in_array',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('continue','select','select_country','select_state','submit','continue','select','select_country','select_state','submit'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_FORM') ? constant('PAGE_TYPE_FORM') : null)) {?>
    <?php if ($_REQUEST['sent'] == "Y") {?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:form_sent"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:form_sent"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('form_submit_const', (defined('FORM_SUBMIT') ? constant('FORM_SUBMIT') : null));?>
        <p><?php echo $_smarty_tpl->tpl_vars['page']->value['form']['general'][$_smarty_tpl->tpl_vars['form_submit_const']->value];?>
</p>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:form_sent"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("continue"),'but_meta'=>"ty-btn__secondary",'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0, false);
?>
        </div>
    <?php } else { ?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
        <div class="ty-form-builder__description"><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
    <?php }?>

<div class="ty-form-builder">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="forms_form" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="page_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['form']['elements'], 'element', false, 'element_id', 'form_lements', array (
));
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element_id']->value => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>

    <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>
        <hr class="ty-form-builder__separator" />
    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_HEADER') ? constant('FORM_HEADER') : null)) {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['element']->value['description']), 0, true);
?>
    
    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] != (defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null) && $_smarty_tpl->tpl_vars['element']->value['element_type'] != (defined('FORM_REFERER') ? constant('FORM_REFERER') : null)) {?>
        <div class="ty-control-group <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>data-ca-phone-mask-group-id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <label for="<?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>type_<?php echo htmlspecialchars((string) md5("fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), ENT_QUOTES, 'UTF-8');
} else { ?>elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-control-group__title <?php if ($_smarty_tpl->tpl_vars['element']->value['required'] == "Y") {?>cm-required<?php }
if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?> cm-email<?php }
if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?> cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>cm-multiple-checkboxes<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>

            <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_SELECT') ? constant('FORM_SELECT') : null)) {?>
                <select id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__select" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->__("select");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] == $_smarty_tpl->tpl_vars['var']->value['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_RADIO') ? constant('FORM_RADIO') : null)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var', false, NULL, 'rd', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration']++;
?>
                <label class="ty-form-builder__radio-label">
                    <input class="ty-form-builder__radio radio" <?php if ((!$_smarty_tpl->tpl_vars['form_values']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration'] : null) == 1) || ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] == $_smarty_tpl->tpl_vars['var']->value['element_id'])) {?>checked="checked"<?php }?> type="radio" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null)) {?>
                <input type="hidden" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__checkbox checkbox" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] == "Y") {?>checked="checked"<?php }?> type="checkbox" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" />
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null)) {?>
                <select class="ty-form-builder__multiple-select" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" multiple="multiple" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['var']->value['element_id'],$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value])) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>
                <div id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                    <label class="ty-form-builder__checkbox-label">
                        <input class="ty-form-builder__checkbox" type="checkbox" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['var']->value['element_id'],$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value])) {?>checked="checked"<?php }?> id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>

                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_INPUT') ? constant('FORM_INPUT') : null)) {?>
                <input id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__input-text ty-input-text <?php if ($_smarty_tpl->tpl_vars['element']->value['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null)) {?>
                <textarea id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__textarea" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" cols="67" rows="10"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_DATE') ? constant('FORM_DATE') : null)) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_name'=>"form_values[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]",'date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['element']->value['element_id']),'date_val'=>$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]), 0, true);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null) || $_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null)) {?>

                <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?>
                <input type="hidden" name="customer_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
                <input id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php if ($_smarty_tpl->tpl_vars['element']->value['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_".((string)$_smarty_tpl->tpl_vars['element']->value['element_id']),'name'=>"form_values[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]",'value'=>$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value],'class'=>$_smarty_tpl->tpl_vars['element']->value['position'] === "1" ? "cm-focus" : '','show_control_group'=>false,'show_controls'=>false,'width'=>"full"), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null)) {?>
                <?php $_smarty_tpl->_assignInScope('_country', (($tmp = $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));?>

                <?php if (!$_smarty_tpl->tpl_vars['k_country']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('k_country', 1);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('k_country', $_smarty_tpl->tpl_vars['k_country']->value+1);?>
                <?php }?>

                <select id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" class="ty-form-builder__country cm-country cm-location-billing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k_country']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                    <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_countries(1));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_STATES') ? constant('FORM_STATES') : null)) {?>
                <?php if (!$_smarty_tpl->tpl_vars['k_state']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('k_state', 1);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('k_state', $_smarty_tpl->tpl_vars['k_state']->value+1);?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>fn_get_all_states(1)), 0, true);
?>

                <?php $_smarty_tpl->_assignInScope('_state', (($tmp = $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] ?? null : $tmp));?>
                <select class="ty-form-builder__state cm-state cm-location-billing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k_state']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                    <?php $_smarty_tpl->_assignInScope('states', fn_get_all_states(1));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <input type="text" class="cm-state cm-location-billing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k_state']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text hidden" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>
                <?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), 0, true);
?>
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:form_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:form_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"form_builder"), 0, false);
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:additional_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:additional_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:additional_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("submit"),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[pages.send_form]"), 0, true);
?>
    </div>

    </form>

</div>
<?php }?>
  <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/form_builder/hooks/pages/page_content.override.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/form_builder/hooks/pages/page_content.override.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_FORM') ? constant('PAGE_TYPE_FORM') : null)) {?>
    <?php if ($_REQUEST['sent'] == "Y") {?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:form_sent"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:form_sent"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_assignInScope('form_submit_const', (defined('FORM_SUBMIT') ? constant('FORM_SUBMIT') : null));?>
        <p><?php echo $_smarty_tpl->tpl_vars['page']->value['form']['general'][$_smarty_tpl->tpl_vars['form_submit_const']->value];?>
</p>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:form_sent"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

        <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("continue"),'but_meta'=>"ty-btn__secondary",'but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"action"), 0, true);
?>
        </div>
    <?php } else { ?>

    <?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
        <div class="ty-form-builder__description"><?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
</div>
    <?php }?>

<div class="ty-form-builder">
    <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="forms_form" enctype="multipart/form-data">
    <input type="hidden" name="fake" value="1" />
    <input type="hidden" name="page_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['form']['elements'], 'element', false, 'element_id', 'form_lements', array (
));
$_smarty_tpl->tpl_vars['element']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['element_id']->value => $_smarty_tpl->tpl_vars['element']->value) {
$_smarty_tpl->tpl_vars['element']->do_else = false;
?>

    <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_SEPARATOR') ? constant('FORM_SEPARATOR') : null)) {?>
        <hr class="ty-form-builder__separator" />
    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_HEADER') ? constant('FORM_HEADER') : null)) {?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['element']->value['description']), 0, true);
?>
    
    <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] != (defined('FORM_IP_ADDRESS') ? constant('FORM_IP_ADDRESS') : null) && $_smarty_tpl->tpl_vars['element']->value['element_type'] != (defined('FORM_REFERER') ? constant('FORM_REFERER') : null)) {?>
        <div class="ty-control-group <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>cm-mask-phone-group<?php }?>" <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>data-ca-phone-mask-group-id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <label for="<?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>type_<?php echo htmlspecialchars((string) md5("fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), ENT_QUOTES, 'UTF-8');
} else { ?>elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-control-group__title <?php if ($_smarty_tpl->tpl_vars['element']->value['required'] == "Y") {?>cm-required<?php }
if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?> cm-email<?php }
if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?> cm-mask-phone-label<?php }?> <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>cm-multiple-checkboxes<?php }?>"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['description'], ENT_QUOTES, 'UTF-8');?>
</label>

            <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_SELECT') ? constant('FORM_SELECT') : null)) {?>
                <select id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__select" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->__("select");?>
 -</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] == $_smarty_tpl->tpl_vars['var']->value['element_id']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_RADIO') ? constant('FORM_RADIO') : null)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var', false, NULL, 'rd', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration']++;
?>
                <label class="ty-form-builder__radio-label">
                    <input class="ty-form-builder__radio radio" <?php if ((!$_smarty_tpl->tpl_vars['form_values']->value && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_rd']->value['iteration'] : null) == 1) || ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] == $_smarty_tpl->tpl_vars['var']->value['element_id'])) {?>checked="checked"<?php }?> type="radio" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
&nbsp;&nbsp;
                </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_CHECKBOX') ? constant('FORM_CHECKBOX') : null)) {?>
                <input type="hidden" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="N" />
                <input id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__checkbox checkbox" <?php if ($_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] == "Y") {?>checked="checked"<?php }?> type="checkbox" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="Y" />
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_MULTIPLE_SB') ? constant('FORM_MULTIPLE_SB') : null)) {?>
                <select class="ty-form-builder__multiple-select" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" multiple="multiple" >
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                        <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['var']->value['element_id'],$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value])) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_MULTIPLE_CB') ? constant('FORM_MULTIPLE_CB') : null)) {?>
                <div id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['element']->value['variants'], 'var');
$_smarty_tpl->tpl_vars['var']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['var']->value) {
$_smarty_tpl->tpl_vars['var']->do_else = false;
?>
                    <label class="ty-form-builder__checkbox-label">
                        <input class="ty-form-builder__checkbox" type="checkbox" <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['var']->value['element_id'],$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value])) {?>checked="checked"<?php }?> id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
][]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['description'], ENT_QUOTES, 'UTF-8');?>

                    </label>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                
                
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_INPUT') ? constant('FORM_INPUT') : null)) {?>
                <input id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__input-text ty-input-text <?php if ($_smarty_tpl->tpl_vars['element']->value['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_TEXTAREA') ? constant('FORM_TEXTAREA') : null)) {?>
                <textarea id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-form-builder__textarea" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" cols="67" rows="10"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_DATE') ? constant('FORM_DATE') : null)) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('date_name'=>"form_values[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]",'date_id'=>"elm_".((string)$_smarty_tpl->tpl_vars['element']->value['element_id']),'date_val'=>$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value]), 0, true);
?>

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null) || $_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_NUMBER') ? constant('FORM_NUMBER') : null)) {?>

                <?php if ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_EMAIL') ? constant('FORM_EMAIL') : null)) {?>
                <input type="hidden" name="customer_email" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" />
                <?php }?>
                <input id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" class="ty-input-text <?php if ($_smarty_tpl->tpl_vars['element']->value['position'] == 1) {?>cm-focus <?php }?>" size="50" type="text" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value], ENT_QUOTES, 'UTF-8');?>
" />

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_PHONE') ? constant('FORM_PHONE') : null)) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:components/phone.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"elm_".((string)$_smarty_tpl->tpl_vars['element']->value['element_id']),'name'=>"form_values[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]",'value'=>$_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value],'class'=>$_smarty_tpl->tpl_vars['element']->value['position'] === "1" ? "cm-focus" : '','show_control_group'=>false,'show_controls'=>false,'width'=>"full"), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_COUNTRIES') ? constant('FORM_COUNTRIES') : null)) {?>
                <?php $_smarty_tpl->_assignInScope('_country', (($tmp = $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'] ?? null : $tmp));?>

                <?php if (!$_smarty_tpl->tpl_vars['k_country']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('k_country', 1);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('k_country', $_smarty_tpl->tpl_vars['k_country']->value+1);?>
                <?php }?>

                <select id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" class="ty-form-builder__country cm-country cm-location-billing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k_country']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <option value="">- <?php echo $_smarty_tpl->__("select_country");?>
 -</option>
                    <?php $_smarty_tpl->_assignInScope('countries', fn_get_simple_countries(1));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country', false, 'code');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_country']->value == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>

            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_STATES') ? constant('FORM_STATES') : null)) {?>
                <?php if (!$_smarty_tpl->tpl_vars['k_state']->value) {?>
                    <?php $_smarty_tpl->_assignInScope('k_state', 1);?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('k_state', $_smarty_tpl->tpl_vars['k_state']->value+1);?>
                <?php }?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>fn_get_all_states(1)), 0, true);
?>

                <?php $_smarty_tpl->_assignInScope('_state', (($tmp = $_smarty_tpl->tpl_vars['form_values']->value[$_smarty_tpl->tpl_vars['element_id']->value] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_state'] ?? null : $tmp));?>
                <select class="ty-form-builder__state cm-state cm-location-billing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k_state']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]">
                    <option label="" value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                    <?php $_smarty_tpl->_assignInScope('states', fn_get_all_states(1));?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value[$_smarty_tpl->tpl_vars['_country']->value], 'state');
$_smarty_tpl->tpl_vars['state']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['code'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['_state']->value == $_smarty_tpl->tpl_vars['state']->value['code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['state']->value['state'], ENT_QUOTES, 'UTF-8');?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
                <input type="text" class="cm-state cm-location-billing_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['k_state']->value, ENT_QUOTES, 'UTF-8');?>
 ty-input-text hidden" id="elm_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
_d" name="form_values[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['element']->value['element_id'], ENT_QUOTES, 'UTF-8');?>
]" size="32" maxlength="64" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_state']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
            
            <?php } elseif ($_smarty_tpl->tpl_vars['element']->value['element_type'] == (defined('FORM_FILE') ? constant('FORM_FILE') : null)) {?>
                <?php echo smarty_function_script(array('src'=>"js/tygh/fileuploader_scripts.js"),$_smarty_tpl);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/fileuploader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('var_name'=>"fb_files[".((string)$_smarty_tpl->tpl_vars['element']->value['element_id'])."]"), 0, true);
?>
            <?php }?>

            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:form_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:form_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:form_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"form_builder"), 0, true);
?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:additional_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:additional_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:additional_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <div class="ty-form-builder__buttons buttons-container">
        <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_role'=>"submit",'but_text'=>$_smarty_tpl->__("submit"),'but_meta'=>"ty-btn__secondary",'but_name'=>"dispatch[pages.send_form]"), 0, true);
?>
    </div>

    </form>

</div>
<?php }?>
  <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"pages:page_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"pages:page_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"pages:page_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
}
