<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:57
  from 'C:\xampp\htdocs\cscart\design\themes\bright_theme\templates\blocks\my_account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41d1018e5_40501516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4614f2a36f0b688ec06a7f4b09736ca339cdeec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\bright_theme\\templates\\blocks\\my_account.tpl',
      1 => 1724167140,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/go.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:views/auth/login_form.tpl' => 2,
  ),
),false)) {
function content_66c4b41d1018e5_40501516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),5=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),6=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('profile_details','downloads','orders','view_comparison_list','track_my_order','track_my_order','order_id','email','go','go_to_admin_panel','sign_out','sign_in','register','sign_in','profile_details','downloads','orders','view_comparison_list','track_my_order','track_my_order','order_id','email','go','go_to_admin_panel','sign_out','sign_in','register','sign_in'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?>
    <a class="ty-account-info__title" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-user"),$_smarty_tpl);?>
&nbsp;
        <span class="ty-account-info__title-txt" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-account-info__user-arrow"),$_smarty_tpl);?>

    </a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div id="account_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <ul class="ty-account-info">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:my_account_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?>
                <a class="ty-account-info__title" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-moon-user"),$_smarty_tpl);?>

                    <span class="hidden-phone" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-account-info__user-arrow"),$_smarty_tpl);?>

                </a>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <?php if ($_smarty_tpl->tpl_vars['user_info']->value['firstname'] || $_smarty_tpl->tpl_vars['user_info']->value['lastname']) {?>
                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php } else { ?>
                    <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_edp'] == "Y") {?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.downloads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("downloads");?>
</a></li>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['firstname'] || $_smarty_tpl->tpl_vars['user_data']->value['lastname']) {?>
                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php }?>
            <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
                <?php $_smarty_tpl->_assignInScope('compared_products_ids', $_SESSION['comparison_list']);?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("view_comparison_list");
if ($_smarty_tpl->tpl_vars['compared_products_ids']->value) {?> (<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products_ids']->value), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['display_track_orders'] == 'Y') {?>
        <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
            <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                <input type="hidden" name="result_ids" value="track_orders_block_*" />
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-account-info__orders-txt"><?php echo $_smarty_tpl->__("track_my_order");?>
</div>

                <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                    <label for="track_order_item<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-required hidden"><?php echo $_smarty_tpl->__("track_my_order");?>
</label>
                    <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" name="track_data" value="<?php echo $_smarty_tpl->__("order_id");
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>/<?php echo $_smarty_tpl->__("email");
}?>" />
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"orders.track_request",'alt'=>$_smarty_tpl->__("go")), 0, false);
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_orders",'align'=>"left",'sidebox'=>true), 0, false);
?>
                </div>
            </form>
        <!--track_orders_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

    <div class="ty-account-info__buttons buttons-container">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php $_smarty_tpl->_assignInScope('is_vendor_with_active_company', fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['user_info']->value['user_type'] == "V") && ($_smarty_tpl->tpl_vars['user_info']->value['company_status'] == "A"));?>
            <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>
                <a href="<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("SiteArea::STOREFRONT"), ENT_QUOTES, 'UTF-8');
$_prefixVariable2=ob_get_clean();
echo htmlspecialchars((string) fn_url("bottom_panel.login_as_vendor?url=".((string)(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])))."&area=".$_prefixVariable2."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary cm-post" target="_blank"><?php echo $_smarty_tpl->__("go_to_admin_panel");?>
</a>
            <?php }?>
            <a href="<?php echo htmlspecialchars((string) fn_url("auth.logout?redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        <?php } else { ?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a><a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__("register");?>
</a>
            <div  id="login_block<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
                <div class="ty-login-popup">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])), 0, false);
?>
                </div>
            </div>
        <?php }?>
    </div>
<!--account_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/my_account.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/my_account.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?>
    <a class="ty-account-info__title" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-user"),$_smarty_tpl);?>
&nbsp;
        <span class="ty-account-info__title-txt" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-account-info__user-arrow"),$_smarty_tpl);?>

    </a>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<div id="account_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
    <?php $_smarty_tpl->_assignInScope('return_current_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
    <ul class="ty-account-info">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"profiles:my_account_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "title", null, null);?>
                <a class="ty-account-info__title" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-moon-user"),$_smarty_tpl);?>

                    <span class="hidden-phone" <?php echo smarty_function_live_edit(array('name'=>"block:name:".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-micro ty-account-info__user-arrow"),$_smarty_tpl);?>

                </a>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
                <?php if ($_smarty_tpl->tpl_vars['user_info']->value['firstname'] || $_smarty_tpl->tpl_vars['user_info']->value['lastname']) {?>
                    <li class="ty-account-info__item  ty-account-info__name ty-dropdown-box__item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php } else { ?>
                    <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_info']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php }?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("profiles.update"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("profile_details");?>
</a></li>
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_edp'] == "Y") {?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.downloads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("downloads");?>
</a></li>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['firstname'] || $_smarty_tpl->tpl_vars['user_data']->value['lastname']) {?>
                <li class="ty-account-info__item  ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['firstname'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['lastname'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php } elseif ($_smarty_tpl->tpl_vars['user_data']->value['email']) {?>
                <li class="ty-account-info__item ty-dropdown-box__item ty-account-info__name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['user_data']->value['email'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php }?>
            <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("orders.search"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("orders");?>
</a></li>
            <?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['enable_compare_products'] == 'Y') {?>
                <?php $_smarty_tpl->_assignInScope('compared_products_ids', $_SESSION['comparison_list']);?>
                <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("product_features.compare"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("view_comparison_list");
if ($_smarty_tpl->tpl_vars['compared_products_ids']->value) {?> (<?php echo htmlspecialchars((string) smarty_modifier_count($_smarty_tpl->tpl_vars['compared_products_ids']->value), ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"profiles:my_account_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>

    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['display_track_orders'] == 'Y') {?>
        <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
">
            <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                <input type="hidden" name="result_ids" value="track_orders_block_*" />
                <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

                <div class="ty-account-info__orders-txt"><?php echo $_smarty_tpl->__("track_my_order");?>
</div>

                <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                    <label for="track_order_item<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-required hidden"><?php echo $_smarty_tpl->__("track_my_order");?>
</label>
                    <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" name="track_data" value="<?php echo $_smarty_tpl->__("order_id");
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>/<?php echo $_smarty_tpl->__("email");
}?>" />
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"orders.track_request",'alt'=>$_smarty_tpl->__("go")), 0, true);
?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"track_orders",'align'=>"left",'sidebox'=>true), 0, true);
?>
                </div>
            </form>
        <!--track_orders_block_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
    <?php }?>

    <div class="ty-account-info__buttons buttons-container">
        <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id']) {?>
            <?php $_smarty_tpl->_assignInScope('is_vendor_with_active_company', fn_allowed_for("MULTIVENDOR") && ($_smarty_tpl->tpl_vars['user_info']->value['user_type'] == "V") && ($_smarty_tpl->tpl_vars['user_info']->value['company_status'] == "A"));?>
            <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>
                <a href="<?php ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("SiteArea::STOREFRONT"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3=ob_get_clean();
echo htmlspecialchars((string) fn_url("bottom_panel.login_as_vendor?url=".((string)(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])))."&area=".$_prefixVariable3."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id'])), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary cm-post" target="_blank"><?php echo $_smarty_tpl->__("go_to_admin_panel");?>
</a>
            <?php }?>
            <a href="<?php echo htmlspecialchars((string) fn_url("auth.logout?redirect_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn <?php if ($_smarty_tpl->tpl_vars['is_vendor_with_active_company']->value) {?>ty-btn__tertiary<?php } else { ?>ty-btn__primary<?php }?>"><?php echo $_smarty_tpl->__("sign_out");?>
</a>
        <?php } else { ?>
            <a href="<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] == "auth" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] == "login_form") {
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_url("auth.login_form?return_url=".((string)$_smarty_tpl->tpl_vars['return_current_url']->value)), ENT_QUOTES, 'UTF-8');
}?>" data-ca-target-id="login_block<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow"><?php echo $_smarty_tpl->__("sign_in");?>
</a><a href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" class="ty-btn ty-btn__primary"><?php echo $_smarty_tpl->__("register");?>
</a>
            <div  id="login_block<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo $_smarty_tpl->__("sign_in");?>
">
                <div class="ty-login-popup">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/auth/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"popup",'id'=>"popup".((string)$_smarty_tpl->tpl_vars['block']->value['snapping_id'])), 0, true);
?>
                </div>
            </div>
        <?php }?>
    </div>
<!--account_info_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php }
}
}
