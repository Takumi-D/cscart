<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:28
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\menu\user_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43c0f6e37_67439625',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63e2747ef57492c61a52fb7bfcade3f393ab0aa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\menu\\user_menu.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/select_object.tpl' => 3,
    'tygh:views/companies/components/picker/picker.tpl' => 1,
    'tygh:common/product_release_info.tpl' => 1,
    'tygh:common/popupbox.tpl' => 1,
  ),
),false)) {
function content_66c4b43c0f6e37_67439625 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('signed_in_as','edit_profile','log_in_as_vendor','seller_info','sign_out','feedback_values','send_feedback'));
?>
<!-- user menu -->
<?php $_smarty_tpl->_assignInScope('user_info_text', ((string)$_smarty_tpl->tpl_vars['user_info']->value['firstname'])." ".((string)$_smarty_tpl->tpl_vars['user_info']->value['lastname'])."
".((string)$_smarty_tpl->tpl_vars['user_info']->value['email'])."
".((string)(smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value) > 1 ? $_smarty_tpl->tpl_vars['menu_languages']->value[(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null)]['name'] : ''))."
".((string)(smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value) > 1 ? ((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['description'])." (".((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['symbol']).")" : '')));?>
<div class="top-bar__btn-wrapper btn-group dropdown-top-menu-item nav__user-menu">
    <button class="dropdown-toggle dropdown-top-menu-item-link top-bar__btn nav__user-menu-link"
        data-toggle="dropdown"
        type="button"
        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info_text']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <span class="top-bar__btn-inner nav__user-menu-inner">
            <span class="nav__profile-icon">
                <?php echo htmlspecialchars((string) smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['user_info']->value['firstname'] ?? '', 'UTF-8'),1,''), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) smarty_modifier_truncate(mb_strtoupper($_smarty_tpl->tpl_vars['user_info']->value['lastname'] ?? '', 'UTF-8'),1,''), ENT_QUOTES, 'UTF-8');?>

            </span>
        </span>
    </button>
    <ul class="dropdown-menu nav__user-menu-dropdown">
        <li class="disabled">
            <a><strong><?php echo $_smarty_tpl->__("signed_in_as");?>
</strong><br><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</a>
        </li>
        <li class="divider"></li>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:profile"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:profile"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <!--language-->
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['menu_languages']->value) > 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"sl="),'items'=>$_smarty_tpl->tpl_vars['menu_languages']->value,'selected_id'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'display_icons'=>true,'key_name'=>"name",'key_selected'=>"lang_code",'class'=>"languages cm-dropdown-skip-processing",'is_submenu'=>true,'button_class'=>"languages-select-list-button",'dropdown_menu_class'=>"languages-select-list",'dropdown_menu_item_link_class'=>"languages-select-list-item-link",'pull_right'=>false), 0, false);
?>
        <?php }?>
        <!--end language-->

        <!--Curriencies-->
        <?php if (smarty_modifier_sizeof($_smarty_tpl->tpl_vars['currencies']->value) > 1) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"currency="),'items'=>$_smarty_tpl->tpl_vars['currencies']->value,'selected_id'=>$_smarty_tpl->tpl_vars['secondary_currency']->value,'display_icons'=>false,'key_name'=>"description",'key_selected'=>"currency_code",'class'=>"curriencies cm-dropdown-skip-processing",'button_class'=>"curriencies-button",'dropdown_menu_item_link_class'=>"curriencies-item-link",'is_submenu'=>true,'dropdown_menu_class'=>"currencies-select-list",'pull_right'=>false), 0, true);
?>
        <?php }?>
        <!--end curriencies-->

        <li><a href="<?php echo htmlspecialchars((string) fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("edit_profile");?>
</a></li>
        <?php if (fn_allowed_for("MULTIVENDOR") && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate'] && $_smarty_tpl->tpl_vars['auth']->value['user_type'] == smarty_modifier_enum("UserTypes::ADMIN") && fn_check_view_permissions("companies.get_companies_list","GET") && fn_check_view_permissions("profiles.login_as_vendor","POST")) {?>
            <li id="company_picker_dropdown_menu"
                class="js-company-switcher"
                data-ca-switcher-param-name="company_id"
                data-ca-switcher-data-name="company_id">
                <?php $_smarty_tpl->_subTemplateRender("tygh:views/companies/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->tpl_vars['companies_picker_name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'type'=>"list",'show_advanced'=>false,'selection_title_pre'=>$_smarty_tpl->__("log_in_as_vendor"),'dropdown_parent_selector'=>"#company_picker_dropdown_menu"), 0, false);
?>
            </li>
        <?php }?>
         <!--Theme mode-->
        <?php if ($_smarty_tpl->tpl_vars['backoffice_color_scheme_variants']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"dropdown",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"backoffice_color_scheme="),'items'=>$_smarty_tpl->tpl_vars['backoffice_color_scheme_variants']->value,'selected_id'=>$_smarty_tpl->tpl_vars['auth']->value['backoffice_color_scheme'],'display_icons'=>false,'key_name'=>"description",'key_selected'=>"type",'class'=>"theme-mode cm-dropdown-skip-processing",'button_class'=>"theme-mode-button",'dropdown_menu_item_link_class'=>"theme-mode-item-link",'is_submenu'=>true,'dropdown_menu_class'=>"theme-mode-select-list",'pull_right'=>false), 0, true);
?>
        <?php }?>
        <!--end theme mode-->
        <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") && fn_check_view_permissions("companies.update","GET")) {?>
            <li><a href="<?php echo htmlspecialchars((string) fn_url("companies.update&company_id=".((string)$_smarty_tpl->tpl_vars['runtime']->value['company_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("seller_info");?>
</a></li>
        <?php }?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"menu:profile_menu_extra_item"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"menu:profile_menu_extra_item"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:profile_menu_extra_item"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <li><a href="<?php echo htmlspecialchars((string) fn_url("auth.logout"), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("sign_out");?>
</a></li>
        <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
            <li class="divider"></li>
            <?php if (fn_check_view_permissions("upgrade_center.manage","POST")) {?>
                <li class="disabled">
                    <a><?php $_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_time_shown'=>false), 0, false);
?></a>
                </li>
            <?php }?>
            <li>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"group".((string)$_smarty_tpl->tpl_vars['id_prefix']->value)."feedback",'edit_onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->__("feedback_values"),'act'=>"link",'picker_meta'=>"cm-clear-content",'link_text'=>$_smarty_tpl->__("send_feedback",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'update_block'),'href'=>"feedback.prepare",'no_icon_link'=>true,'but_name'=>"dispatch[feedback.send]",'opener_ajax_class'=>"cm-ajax"), 0, false);
?>
            </li>
        <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"menu:profile"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
</div>
<!--end user menu --><?php }
}
