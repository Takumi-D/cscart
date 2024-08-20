<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:21
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\bottom_panel\bottom_panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b435bb1bb4_01494125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25742c479388e2e08b1376938f2406a7ee92af14' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\bottom_panel\\bottom_panel.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'backend:common/image.tpl' => 2,
    'backend:components/bottom_panel/icons/bp-modes__item--preview.svg' => 1,
    'backend:components/bottom_panel/icons/bp-modes__item--text.svg' => 1,
    'backend:components/bottom_panel/icons/bp-modes__item--theme.svg' => 1,
    'backend:components/bottom_panel/icons/bp-modes__item--build.svg' => 1,
    'backend:components/bottom_panel/icons/bp-dropdown-button--settings.svg' => 1,
    'backend:components/bottom_panel/icons/bp-dropdown-button--help.svg' => 1,
    'backend:components/bottom_panel/icons/bp-close.svg' => 1,
  ),
),false)) {
function content_66c4b435bb1bb4_01494125 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('bottom_panel.change_theme','bottom_panel.change_theme','bottom_panel.edit_layout','bottom_panel.edit_layout','bottom_panel.edit_template','bottom_panel.edit_template','bottom_panel.edit_translations','bottom_panel.edit_translations','bottom_panel.edit_menus','bottom_panel.edit_menus','bottom_panel.edit_product_tabs','bottom_panel.edit_product_tabs','bottom_panel.go_to_home_page','bottom_panel.go_to_dashboard','bottom_panel.storefront','bottom_panel.admin_panel','bottom_panel.vendor_panel','bottom_panel.preview_mode','bottom_panel.text_mode','bottom_panel.theme_mode','bottom_panel.theme_mode.not_available','bottom_panel.build_mode','bottom_panel.build_mode.not_available','bottom_panel.settings','bottom_panel.help','bottom_panel.documentation','bottom_panel.community_forums','bottom_panel.video_tutorials','bottom_panel.faq','bottom_panel.customer_help_desk','bottom_panel.hire_a_developers','bottom_panel.hide_bottom_admin_panel','bottom_panel.show_bottom_admin_panel'));
$_smarty_tpl->_assignInScope('bottom_panel_open_logo', $_smarty_tpl->tpl_vars['logo']->value);
$_smarty_tpl->_assignInScope('bottom_panel_close_logo', $_smarty_tpl->tpl_vars['logo']->value);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:bottom_panel_main"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:bottom_panel_main"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php $_smarty_tpl->_assignInScope('c_url', fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:edition"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:edition"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_smarty_tpl->_assignInScope('edition', "store");
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:edition"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "products") {?>
    <?php $_smarty_tpl->_assignInScope('page', "products");
} elseif ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "checkout" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] === "checkout") {?>
    <?php $_smarty_tpl->_assignInScope('page', "checkout");
}?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && ($_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed'] || (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor")) {?>
    <?php $_smarty_tpl->_assignInScope('active_mode', "build");
} elseif ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('active_mode', "text");
} elseif ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
    <?php $_smarty_tpl->_assignInScope('active_mode', "theme");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('active_mode', "preview");
}?>

<?php $_smarty_tpl->_assignInScope('is_demo_mode', (($tmp = $_smarty_tpl->tpl_vars['config']->value['demo_mode'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_bp_modes_on_backend', (($tmp = $_smarty_tpl->tpl_vars['show_bp_modes_on_backend']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_theme_editor', (($tmp = $_smarty_tpl->tpl_vars['show_theme_editor']->value ?? null)===null||$tmp==='' ? (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"theme_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && (($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) || (($_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_styles'] === smarty_modifier_enum("YesNo::YES")) && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR"))) || ($_smarty_tpl->tpl_vars['is_demo_mode']->value && (defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::STOREFRONT"))) ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "settings_menu_main_links", null, null);?>
    <?php if (fn_check_permissions("themes","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && ($_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::VENDOR") || $_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_styles'] === smarty_modifier_enum("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("themes.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.change_theme");?>
"><?php echo $_smarty_tpl->__("bottom_panel.change_theme");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("block_manager","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && ($_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::VENDOR") || $_smarty_tpl->tpl_vars['settings']->value['Vendors']['can_edit_blocks'] === smarty_modifier_enum("YesNo::YES"))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("block_manager.manage?selected_location=".((string)$_smarty_tpl->tpl_vars['location_data']->value['location_id'])."&redirect_to_block_manager=1",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_layout");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_layout");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && (empty($_smarty_tpl->tpl_vars['auth']->value['company_id']) || fn_check_company_permissions("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("templates.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_template");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_template");?>
</a>
    <?php }?>
    <?php if (fn_check_permissions("languages","translations","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && (empty($_smarty_tpl->tpl_vars['auth']->value['company_id']) || fn_check_company_permissions("languages","translations",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("languages.translations",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_translations");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_translations");?>
</a>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "settings_menu_additional_links", null, null);?>
    <?php if (fn_check_permissions("templates","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && (empty($_smarty_tpl->tpl_vars['auth']->value['company_id']) || fn_check_company_permissions("templates","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("menus.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_menus");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_menus");?>
</a>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value === "products" && fn_check_permissions("tabs","manage","admin",'',array(),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && (empty($_smarty_tpl->tpl_vars['auth']->value['company_id']) || fn_check_company_permissions("tabs","manage",'',array()))) {?>
        <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url("tabs.manage",$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo $_smarty_tpl->__("bottom_panel.edit_product_tabs");?>
"><?php echo $_smarty_tpl->__("bottom_panel.edit_product_tabs");?>
</a>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "settings_menu", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['quick_menu']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['quick_menu']->value, 'sect');
$_smarty_tpl->tpl_vars['sect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sect']->value) {
$_smarty_tpl->tpl_vars['sect']->do_else = false;
?>
            <div class="bp-dropdown-menu__group">
                <span class="bp-dropdown-menu__item-text bp-dropdown-menu__item-text--head"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sect']->value['section']['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sect']->value['subsection'], 'subsect');
$_smarty_tpl->tpl_vars['subsect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subsect']->value) {
$_smarty_tpl->tpl_vars['subsect']->do_else = false;
?>
                    <a class="bp-dropdown-menu__item cm-no-ajax" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['subsect']->value['url'],$_smarty_tpl->tpl_vars['auth']->value['user_type']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subsect']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>
    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'settings_menu_main_links'))) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'settings_menu_main_links');?>

        </div>
    <?php }?>
    <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'settings_menu_additional_links'))) {?>
        <div class="bp-dropdown-menu__group">
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'settings_menu_additional_links');?>

        </div>
    <?php }?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:extra_link_in_settings_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_settings_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_settings_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>


<?php $_smarty_tpl->_assignInScope('utm', "utm_source=".((string)(smarty_modifier_replace(preg_replace('!\s+!u', '',mb_strtolower((defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null), 'UTF-8')),'-','_')))."&utm_medium=".((string)$_smarty_tpl->tpl_vars['edition']->value));?>

<?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
    <?php if ($_REQUEST['storefront_id']) {?>
        <?php $_smarty_tpl->_assignInScope('storefront_id', $_REQUEST['storefront_id']);?>
    <?php } elseif ((fn_allowed_for('MULTIVENDOR:ULTIMATE'))) {?>
        <?php $_smarty_tpl->_assignInScope('storefront_id', (($tmp = $_smarty_tpl->tpl_vars['selected_storefront_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront"]->storefront_id ?? null : $tmp));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('storefront_id', (($tmp = $_smarty_tpl->tpl_vars['selected_storefront_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront.switcher.selected_storefront_id"] ?? null : $tmp));?>
    <?php }
}?>

<div class="bp__container">
    <div id="bp_bottom_panel"
        class="bp-panel bp-panel--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['edition']->value, ENT_QUOTES, 'UTF-8');?>
 bp-panel--<?php echo htmlspecialchars((string) (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-bottom-pannel="true"
        data-bp-mode="demo"
        data-bp-is-bottom-panel-open="true"
        data-bp-nav-active=<?php echo htmlspecialchars((string) (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null), ENT_QUOTES, 'UTF-8');?>

        data-bp-modes-active="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['active_mode']->value, ENT_QUOTES, 'UTF-8');?>
">
        <a href="<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {
echo htmlspecialchars((string) fn_url('',"C"), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) fn_url('',"A"), ENT_QUOTES, 'UTF-8');
}?>"
            class="bp-logo"
            data-bp-tooltip="true">
            <?php $_smarty_tpl->_subTemplateRender("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['bottom_panel_open_logo']->value,'image_css_class'=>"bp-logo-img--no-color",'show_detailed_link'=>false), 0, false);
?>
            <div class="bp-tooltip bp-tooltip--left">
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                <?php echo $_smarty_tpl->__("bottom_panel.go_to_home_page");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("bottom_panel.go_to_dashboard");?>

            <?php }?>
            </div>
        </a>
        <div class="bp-nav">
            <?php $_smarty_tpl->_assignInScope('redirect_area', $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") ? "V" : "A");?>
            <a href="<?php ob_start();
if ($_smarty_tpl->tpl_vars['storefront_id']->value) {
echo "&storefront_id=";
echo (string)$_smarty_tpl->tpl_vars['storefront_id']->value;
}
$_prefixVariable12=ob_get_clean();
echo htmlspecialchars((string) fn_url("bottom_panel.redirect?url=".((string)(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&to_area=C".$_prefixVariable12,$_smarty_tpl->tpl_vars['redirect_area']->value), ENT_QUOTES, 'UTF-8');?>
"
                class="bp-nav__item cm-no-ajax
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                    bp-nav__item--active
                <?php }?>"
                data-bp-nav-item="customer">
                <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.storefront");?>
</span>
            </a>
            <?php if (defined("THEMES_PANEL") || $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN")) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("bottom_panel.login_as_admin?url=".((string)(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id']),"C"), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                    <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
                        bp-nav__item--active
                    <?php }?>"
                    data-bp-nav-item="admin">
                    <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.admin_panel");?>
</span>
                </a>
            <?php }?>
            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <?php if (defined("THEMES_PANEL") || $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR")) {?>
                    <a href="<?php echo htmlspecialchars((string) fn_url("bottom_panel.login_as_vendor?url=".((string)(urlencode($_smarty_tpl->tpl_vars['config']->value['current_url'])))."&area=".((string)(defined('AREA') ? constant('AREA') : null))."&user_id=".((string)$_smarty_tpl->tpl_vars['auth']->value['user_id']),"C"), ENT_QUOTES, 'UTF-8');?>
" class="bp-nav__item cm-no-ajax cm-post
                        <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {?>
                            bp-nav__item--active
                        <?php }?>"
                        data-bp-nav-item="vendor">
                        <span class="bp-nav__item-text"><?php echo $_smarty_tpl->__("bottom_panel.vendor_panel");?>
</span>
                    </a>
                <?php }?>
            <?php }?>
            <div id="bp-nav__active" class="bp-nav__active
                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>
                    bp-nav__active--activated
                <?php }?>"></div>
        </div>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:bp_modes"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:bp_modes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer" && (!fn_allowed_for("MULTIVENDOR:ULTIMATE") || empty($_smarty_tpl->tpl_vars['auth']->value['storefront_id']) || (int) $_smarty_tpl->tpl_vars['auth']->value['storefront_id'] === (int) $_smarty_tpl->tpl_vars['runtime']->value['storefront_id']) || $_smarty_tpl->tpl_vars['show_bp_modes_on_backend']->value && (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor" && ($_smarty_tpl->tpl_vars['auth']->value['act_as_user'] && $_smarty_tpl->tpl_vars['auth']->value['act_as_area'] === smarty_modifier_enum("UserTypes::VENDOR")) || $_smarty_tpl->tpl_vars['is_demo_mode']->value && ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && (defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::ADMIN_PANEL") && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR"))) {?>
                <div class="bp-modes">
                    <a
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value === "text") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable13=ob_get_clean();
echo htmlspecialchars((string) fn_url("customization.disable_mode?type=live_editor&return_url=".$_prefixVariable13), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } elseif ($_smarty_tpl->tpl_vars['active_mode']->value === "theme") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable14=ob_get_clean();
echo htmlspecialchars((string) fn_url("customization.disable_mode?type=theme_editor&return_url=".$_prefixVariable14), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } elseif ($_smarty_tpl->tpl_vars['active_mode']->value === "build") {?>
                            href="<?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable15=ob_get_clean();
echo htmlspecialchars((string) fn_url("customization.disable_mode?type=block_manager&return_url=".$_prefixVariable15), ENT_QUOTES, 'UTF-8');?>
"
                        <?php } else { ?>
                            href="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        id="settings_block_manager"
                        class="cm-no-ajax bp-modes__item bp-modes__item--preview
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value === "preview") {?>bp-modes__item--active<?php }?>"
                            data-bp-modes-item="preview"
                            data-bp-tooltip="true">
                        <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/icons/bp-modes__item--preview.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <div class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.preview_mode");?>
</div>
                    </a>
                    <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"live_editor"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") || ($_smarty_tpl->tpl_vars['is_demo_mode']->value && (defined('AREA') ? constant('AREA') : null) === smarty_modifier_enum("SiteArea::STOREFRONT"))) {?>
                        <a href="<?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable16=ob_get_clean();
echo htmlspecialchars((string) fn_url("customization.update_mode?type=live_editor&status=enable&return_url=".$_prefixVariable16), ENT_QUOTES, 'UTF-8');?>
"
                            id="settings_live_editor"
                            class="cm-no-ajax bp-modes__item bp-modes__item--text
                            <?php if ($_smarty_tpl->tpl_vars['active_mode']->value === "text") {?>bp-modes__item--active<?php }?>"
                            data-bp-modes-item="text"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/icons/bp-modes__item--text.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <div class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.text_mode");?>
</div>
                        </a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_theme_editor']->value) {?>
                        <a href="<?php if (fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value) || $_smarty_tpl->tpl_vars['is_demo_mode']->value) {
ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable17=ob_get_clean();
echo htmlspecialchars((string) fn_url("customization.update_mode?type=theme_editor&status=enable&return_url=".$_prefixVariable17), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                            id="settings_theme_editor"
                            class="cm-no-ajax bp-modes__item bp-modes__item--theme
                            <?php if ($_smarty_tpl->tpl_vars['active_mode']->value === "theme") {?>bp-modes__item--active<?php }?>
                            <?php if (!fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value) && !$_smarty_tpl->tpl_vars['is_demo_mode']->value) {?>bp-modes__item--disabled<?php }?>"
                            data-bp-modes-item="theme"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/icons/bp-modes__item--theme.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <div class="bp-tooltip">
                                <?php echo $_smarty_tpl->__("bottom_panel.theme_mode");?>

                                <?php if (!fn_is_theme_editor_available_for_user($_smarty_tpl->tpl_vars['auth']->value) && !$_smarty_tpl->tpl_vars['is_demo_mode']->value) {?>
                                    <div class="bp-tooltip__secondary">
                                        <?php echo $_smarty_tpl->__("bottom_panel.theme_mode.not_available");?>

                                    </div>
                                <?php }?>
                            </div>
                        </a>
                    <?php }?>
                    <?php if (fn_check_permissions("customization","update_mode","admin",'',array("type"=>"block_manager"),(defined('AREA') ? constant('AREA') : null),$_smarty_tpl->tpl_vars['auth']->value['user_id']) && (empty($_smarty_tpl->tpl_vars['auth']->value['company_id']) || fn_check_company_permissions("customization","update_mode",'',array("type"=>"block_manager"))) && $_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::CUSTOMER") || $_smarty_tpl->tpl_vars['is_demo_mode']->value) {?>
                        <a href="<?php if ($_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed'] || (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "vendor") {
ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['c_url']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable18=ob_get_clean();
echo htmlspecialchars((string) fn_url("customization.update_mode?type=block_manager&status=enable&return_url=".$_prefixVariable18), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"
                            id="settings_block_manager"
                            class="cm-no-ajax bp-modes__item bp-modes__item--build
                            <?php if ($_smarty_tpl->tpl_vars['active_mode']->value === "build") {?>bp-modes__item--active<?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed'] && (defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer") {?>bp-modes__item--disabled<?php }?>"
                            data-bp-modes-item="build"
                            data-bp-tooltip="true">
                            <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/icons/bp-modes__item--build.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <div class="bp-tooltip">
                                <?php echo $_smarty_tpl->__("bottom_panel.build_mode");?>

                                <?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "customer"&!$_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                                    <div class="bp-tooltip__secondary">
                                        <?php echo $_smarty_tpl->__("bottom_panel.build_mode.not_available");?>

                                    </div>
                                <?php }?>
                            </div>
                        </a>
                    <?php }?>
                    <div id="bp-modes__active" class="bp-modes__active
                        <?php if ($_smarty_tpl->tpl_vars['active_mode']->value === "preview") {?>
                            bp-modes__active--preview
                        <?php }?>"
                    ></div>
                </div>
            <?php }?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:bp_modes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:extra_element_on_panel"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <div class="bp-actions <?php if (!smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'settings_menu'))) {?>bp-actions--one-column<?php }?>">
            <?php if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'settings_menu')) && (!fn_allowed_for("MULTIVENDOR:ULTIMATE") || empty($_smarty_tpl->tpl_vars['auth']->value['storefront_id']) || (int) $_smarty_tpl->tpl_vars['auth']->value['storefront_id'] === (int) $_smarty_tpl->tpl_vars['runtime']->value['storefront_id'])) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button bp-dropdown-button--animation" data-bp-toggle="dropdown"
                        data-bp-tooltip="true">
                        <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/icons/bp-dropdown-button--settings.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <span class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.settings");?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'settings_menu');?>

                    </div>
                </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['auth']->value['user_type'] !== smarty_modifier_enum("UserTypes::VENDOR")) {?>
                <div class="bp-dropdown bp-actions__item">
                    <button class="bp-dropdown-button" data-bp-toggle="dropdown" data-bp-tooltip="true">
                        <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/icons/bp-dropdown-button--help.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <span class="bp-tooltip"><?php echo $_smarty_tpl->__("bottom_panel.help");?>
</span>
                    </button>
                    <div class="bp-dropdown-menu">
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['docs_url'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.documentation");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['forum'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.community_forums");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['video_tutorials'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.video_tutorials");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['faq'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.faq");?>
</a>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:extra_link_in_help_menu_group_1"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu_group_1"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu_group_1"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                        <div class="bp-dropdown-menu__group">
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['helpdesk_url'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.customer_help_desk");?>
</a>
                            <a class="bp-dropdown-menu__item cm-no-ajax" target="_blank" href="<?php echo htmlspecialchars((string) fn_url(fn_link_attach($_smarty_tpl->tpl_vars['config']->value['resources']['developers_catalog'],$_smarty_tpl->tpl_vars['utm']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("bottom_panel.hire_a_developers");?>
</a>
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:extra_link_in_help_menu_group_2"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu_group_2"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu_group_2"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:extra_link_in_help_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_link_in_help_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                </div>
            <?php }?>
        </div>
        <button id="bp_off_bottom_panel" class="bp-close"
            data-bp-tooltip="true"
            data-bp-save-state="true">
            <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/icons/bp-close.svg", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <span class="bp-tooltip bp-tooltip--right"><?php echo $_smarty_tpl->__("bottom_panel.hide_bottom_admin_panel");?>
</span>
        </button>
    </div>
    <div id="bp_bottom_buttons" class="bp-bottom-buttons
        <?php if (!$_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>
            bp-bottom-buttons--active
        <?php }?>">
        <button id="bp_on_bottom_panel"
            class="bp-bottom-button bp-bottom-button--logo
            <?php if ($_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>
                bp-bottom-button--disabled bp-bottom-button--disabled-panel
            <?php }?>"
            data-bp-bottom-buttons="panel"
            data-bp-tooltip="true">
            <?php $_smarty_tpl->_subTemplateRender("backend:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('image'=>$_smarty_tpl->tpl_vars['bottom_panel_close_logo']->value,'image_css_class'=>"bp-logo-img bp-bottom-button-img",'show_detailed_link'=>false), 0, true);
?>
            <span class="bp-tooltip bp-tooltip--left"><?php echo $_smarty_tpl->__("bottom_panel.show_bottom_admin_panel");?>
</span>
        </button>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"bottom_panel:extra_element_on_closed_panel"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_closed_panel"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:extra_element_on_closed_panel"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
</div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"bottom_panel:bottom_panel_main"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo smarty_function_script(array('src'=>"js/tygh/bottom_panel.js"),$_smarty_tpl);?>

<?php }
}
