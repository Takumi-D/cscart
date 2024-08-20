<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:37
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\onboarding_guide\steps\personalize_marketplace\personalize_marketplace.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b445cb0be6_62061546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce1247141623050504624bec33fcc1b6dec66718' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\personalize_marketplace\\personalize_marketplace.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/onboarding_guide/steps/personalize_marketplace/tabs/tab_1.tpl' => 1,
    'tygh:addons/onboarding_guide/steps/personalize_marketplace/tabs/tab_2.tpl' => 1,
    'tygh:addons/onboarding_guide/steps/personalize_marketplace/tabs/tab_3.tpl' => 1,
  ),
),false)) {
function content_66c4b445cb0be6_62061546 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.sb_make_changes_on_the_fly_description','onboarding_guide.make_changes_on_the_fly_description','onboarding_guide.theme_and_logo','onboarding_guide.business_details','onboarding_guide.languages_and_currency','onboarding_guide.logos_updated'));
echo smarty_function_script(array('src'=>"js/addons/onboarding_guide/steps/personalize_marketplace.js"),$_smarty_tpl);?>


<div class="onboarding_accordion__item_body--padding">
    <div class="onboarding_content_margin--bottom_x2">
        <span class="onboarding_section__progress_text">
            <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
                <?php echo $_smarty_tpl->__("onboarding_guide.sb_make_changes_on_the_fly_description");?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->__("onboarding_guide.make_changes_on_the_fly_description");?>

            <?php }?>
        </span>
    </div>

    <div class="tabs">
        <div class="tab-header">
            <button data-og-tab="button" class="tab-button active" ><?php echo $_smarty_tpl->__("onboarding_guide.theme_and_logo");?>
</button>
            <button data-og-tab="button" class="tab-button" ><?php echo $_smarty_tpl->__("onboarding_guide.business_details");?>
</button>
            <button data-og-tab="button" class="tab-button" ><?php echo $_smarty_tpl->__("onboarding_guide.languages_and_currency");?>
</button>
        </div>
        <div class="tab-content">
            <div data-og-tab="item" class="tab-item active">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/onboarding_guide/steps/personalize_marketplace/tabs/tab_1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div data-og-tab="item" class="tab-item">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/onboarding_guide/steps/personalize_marketplace/tabs/tab_2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
            <div data-og-tab="item" class="tab-item">
                <?php $_smarty_tpl->_subTemplateRender("tygh:addons/onboarding_guide/steps/personalize_marketplace/tabs/tab_3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    (function (_, $) {
        _.tr({
            'onboarding_guide.logos_updated': '<?php echo strtr((string)$_smarty_tpl->__("onboarding_guide.logos_updated"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        })
    })(Tygh, Tygh.$);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
