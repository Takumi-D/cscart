<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:23
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b437261fd1_27114344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '63f8a332f43cd2f7f6ac18f8f455c672276a0f66' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\index\\index.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/index/components/simple_dashboard_preloader.tpl' => 1,
    'tygh:views/index/components/simple_dashboard.tpl' => 1,
    'tygh:views/index/components/dashboard_preloader.tpl' => 1,
    'tygh:views/index/components/dashboard.tpl' => 1,
    'tygh:common/mainbox.tpl' => 1,
    'tygh:common/share.tpl' => 1,
  ),
),false)) {
function content_66c4b437261fd1_27114344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard','installer_complete_title','welcome_screen.administrator_info','admin_panel','welcome_screen.go_admin_panel','welcome_screen.go_settings_wizard','settings_wizard','welcome_screen.run_settings_wizard','storefront','welcome_screen.go_storefront','welcome_screen.learn_more_configuration','welcome_screen.knowledge_base','welcome_screen.thanks'));
echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/dashboard.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox", null, null);?>
    <?php if ($_smarty_tpl->tpl_vars['config']->value['simple_dashboard'] && $_smarty_tpl->tpl_vars['show_dashboard_preloader']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/simple_dashboard_preloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['config']->value['simple_dashboard']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/simple_dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['show_dashboard_preloader']->value) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/dashboard_preloader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/index/components/dashboard.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('buttons'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'buttons'),'no_sidebar'=>true,'title'=>$_smarty_tpl->__("dashboard"),'content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'mainbox'),'tools'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools'),'box_id'=>"dashboard_content",'select_storefront'=>true,'show_all_storefront'=>true,'storefront_switcher_param_name'=>"storefront_id",'selected_storefront_id'=>$_smarty_tpl->tpl_vars['storefront_id']->value), 0, false);
?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    <input type="hidden" name="switch_company_id" id="switch_company_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php } else { ?>
    <input type="hidden" name="storefront_id" id="storefront_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['storefront_id']->value, ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:welcome_dialog"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:welcome_dialog"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['show_welcome']->value) {?>
    <div class="hidden cm-dialog-auto-open cm-dialog-auto-size" title="<?php echo $_smarty_tpl->__("installer_complete_title");?>
" id="after_install_dialog" data-ca-dialog-class="welcome-screen-dialog">
        <?php $_smarty_tpl->_assignInScope('company', fn_get_company_data("1"));?>
        <?php if (fn_allowed_for("ULTIMATE")) {?>
            <?php $_smarty_tpl->_assignInScope('link_storefront', "http://".((string)$_smarty_tpl->tpl_vars['company']->value['storefront']));?>
        <?php } else { ?>
            <?php ob_start();
echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['config']->value['http_location']), ENT_QUOTES, 'UTF-8');
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->_assignInScope('link_storefront', $_prefixVariable19);?>
        <?php }?>
        <div class="welcome-screen">
            <p>
                <?php $_smarty_tpl->_assignInScope('user_data', fn_get_user_info($_smarty_tpl->tpl_vars['auth']->value['user_id']));?>
                <?php echo $_smarty_tpl->__("welcome_screen.administrator_info",array('[email]'=>$_smarty_tpl->tpl_vars['user_data']->value['email']));?>

            </p>
            <div class="welcome-location-wrapper clearfix">
                <div class="welcome-location-block pull-left center">
                    <h4 class="install-title"><?php echo $_smarty_tpl->__("admin_panel");?>
</h4>
                    <div class="welcome-screen-location welcome-screen-admin">
                        <div class="welcome-screen-overlay">
                            <a class="btn cm-dialog-closer welcome-screen-overlink"><?php echo $_smarty_tpl->__("welcome_screen.go_admin_panel");?>
</a>
                        </div>
                    </div>
                    <div class="welcome-screen-arrow"></div>
                    <p>
                        <?php echo $_smarty_tpl->__("welcome_screen.go_settings_wizard");?>

                    </p>
                    <?php $_smarty_tpl->_assignInScope('c_url', rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']));?>
                    <a class="cm-dialog-opener cm-ajax btn btn-primary strong" data-ca-target-id="content_settings_wizard" title="<?php echo $_smarty_tpl->__("settings_wizard");?>
" href="<?php echo htmlspecialchars((string) fn_url("settings_wizard.view?return_url=".((string)$_smarty_tpl->tpl_vars['c_url']->value)), ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("welcome_screen.run_settings_wizard");?>
</a>
                </div>
                <div class="welcome-location-block pull-right center">
                    <h4 class="install-title"><?php echo $_smarty_tpl->__("storefront");?>
</h4>
                    <div class="welcome-screen-location welcome-screen-store">
                        <div class="welcome-screen-overlay">
                            <a class="btn welcome-screen-overlink" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_storefront']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("welcome_screen.go_storefront");?>
</a>
                        </div>
                    </div>
                    <div class="welcome-screen-arrow"></div>
                    <p>
                        <?php echo $_smarty_tpl->__("welcome_screen.learn_more_configuration");?>

                    </p>
                    <a class="kbase-link" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['resources']['knowledge_base'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo $_smarty_tpl->__("welcome_screen.knowledge_base");?>
</a>
                </div>
            </div>
            <div class="welcome-screen-social center">
                <p>
                    <?php echo $_smarty_tpl->__("welcome_screen.thanks",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null)));?>

                </p>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/share.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <?php if (fn_allowed_for("ULTIMATE:FREE")) {?>
                <?php echo (($tmp = reset($_SESSION['stats']) ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>

            <?php }?>
        </div>
    </div>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:welcome_dialog"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
