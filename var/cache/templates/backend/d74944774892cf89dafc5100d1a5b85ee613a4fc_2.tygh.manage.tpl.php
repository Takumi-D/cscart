<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:27
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\views\help_center\manage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43b727c48_27606860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd74944774892cf89dafc5100d1a5b85ee613a4fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\views\\help_center\\manage.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_release_info.tpl' => 2,
    'tygh:addons/help_center/templates/help_center_nav_chapter.tpl' => 1,
    'tygh:addons/help_center/templates/help_center_nav_item.tpl' => 1,
    'tygh:addons/help_center/templates/help_center_block.tpl' => 1,
    'tygh:addons/help_center/templates/help_center_section.tpl' => 1,
    'tygh:addons/help_center/component/help_center_sections_injection.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
  ),
),false)) {
function content_66c4b43b727c48_27606860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('help_center.no_data_relevant','help_center.no_data','help_center.loading','help_center.growth_center'));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>


    <?php if ($_smarty_tpl->tpl_vars['dispatch_id']->value) {?>
        <?php $_smarty_tpl->_assignInScope('default_dispatch', $_smarty_tpl->tpl_vars['dispatch_id']->value);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['current_dispatch']->value === "help_center.manage") {?>
        <?php $_smarty_tpl->_assignInScope('default_dispatch', '');?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('default_dispatch', $_smarty_tpl->tpl_vars['current_dispatch']->value);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('suffix', $_smarty_tpl->tpl_vars['in_popup']->value ? "popup" : '');?>
    <?php $_smarty_tpl->_assignInScope('help_center_request', json_encode(array('version'=>$_smarty_tpl->tpl_vars['product_version']->value,'edition'=>$_smarty_tpl->tpl_vars['product_edition']->value,'lang_code'=>(defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null),'dispatch'=>$_smarty_tpl->tpl_vars['default_dispatch']->value,'product_build'=>(defined('PRODUCT_BUILD') ? constant('PRODUCT_BUILD') : null),'store_domain'=>$_smarty_tpl->tpl_vars['config']->value['current_host'])));?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "product_release_info", 'product_release_info', null);?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_version_shown'=>false,'is_time_shown'=>false), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('is_product_shown'=>false,'is_time_shown'=>false), 0, true);
?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <section data-ca-help-center="main"
        data-ca-help-center-server-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['help_center_server_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-request="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['help_center_request']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-default-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_dispatch']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-active-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['default_dispatch']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-is-inited="0"
        data-ca-help-center-background-is-inited="0"
        data-ca-help-center-relevant-chapter="info"
        data-ca-help-center-no-data-relevant-text="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("help_center.no_data_relevant"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-no-data-text="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("help_center.no_data"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-product-release-info="<?php echo htmlspecialchars((string) preg_replace('!\s+!u', ' ',strip_tags((string) $_smarty_tpl->tpl_vars['product_release_info']->value)), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-timestamp-last-view="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['help_center_timestamp_last_view']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-help-center-customer-last-update="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['help_center_customer_care_data_last_update']->value ?? null)===null||$tmp==='' ? 0 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
            data-ca-help-center-suffix="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-help-center-in-popup="1"
        <?php }?>
        class="help-center <?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>help-center--popup<?php }?>"
        id="manage_help_center_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
"
    >
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="manage_help_center_form" class="help-center__form" id="manage_help_center_form_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
">
            <div class="help-center__wrapper">
                <aside class="sidebar-row help-center__navs" data-ca-help-center="navs">
                    <ul class="help-center__navs-content" data-ca-help-center="navsContentTarget"></ul>
                </aside>

                <div class="help-center__content">
                    <div class="help-center__sections"
                        data-ca-help-center-loading-text="<?php echo $_smarty_tpl->__("help_center.loading");?>
"
                        data-ca-help-center="sectionsTarget"></div>
                </div>
            </div>
        </form>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/templates/help_center_nav_chapter.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/templates/help_center_nav_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/templates/help_center_block.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/templates/help_center_section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_sections_injection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sections'=>array($_smarty_tpl->tpl_vars['help_center_customer_care_data']->value['tickets']),'ask_data'=>$_smarty_tpl->tpl_vars['help_center_customer_care_data']->value,'ask_data_last_update'=>$_smarty_tpl->tpl_vars['help_center_customer_care_data_last_update']->value,'help_center_last_view'=>$_smarty_tpl->tpl_vars['help_center_timestamp_last_view']->value), 0, false);
?>
    </section>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['in_popup']->value) {?>
    <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox');?>

<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("help_center.growth_center"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'box_id'=>"page_content_help_center"), 0, false);
}
}
}
