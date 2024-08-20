<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:38
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\onboarding_guide\steps\personalize_marketplace\tabs\tab_2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b446436125_20624157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '890c364a7bc5f1ae3b0a19535b474b64e04d434f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\personalize_marketplace\\tabs\\tab_2.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/profiles/components/profiles_scripts.tpl' => 1,
  ),
),false)) {
function content_66c4b446436125_20624157 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('select_country','select_state','onboarding_guide.back','onboarding_guide.next','onboarding_guide.save'));
$_smarty_tpl->_assignInScope('company', $_smarty_tpl->tpl_vars['data']->value['company_settings']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/profiles/components/profiles_scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('states'=>fn_get_all_states(1)), 0, false);
?>

<div id="onboarding_guide_company_settings">
    <form class="cm-ajax cm-ajax-force" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" enctype="multipart/form-data">
        <input type="hidden" name="dispatch" value="onboarding_guide.update_company_settings" />
        <input type="hidden" name="result_ids" value="onboarding_guide_company_settings" />

        <div class="form_container onboarding_content_margin--bottom_x3">
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_name']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <input class="form_container__input" id="og-company-settings-name" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_name']['value'], ENT_QUOTES, 'UTF-8');?>
" name="company_settings[company_name]"/>
            </div>
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-address"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_address']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <input class="form_container__input" id="og-company-settings-address" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_address']['value'], ENT_QUOTES, 'UTF-8');?>
" name="company_settings[company_address]"/>
            </div>
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-website"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_website']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <input class="form_container__input" id="og-company-settings-website" type="text" placeholder="http://example.com" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_website']['value'], ENT_QUOTES, 'UTF-8');?>
" name="company_settings[company_website]"/>
            </div>
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-city"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_city']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <input class="form_container__input" id="og-company-settings-city" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_city']['value'], ENT_QUOTES, 'UTF-8');?>
" name="company_settings[company_city]"/>
            </div>
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-site-administrator"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_site_administrator']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <input class="form_container__input" id="og-company-settings-site-administrator" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_site_administrator']['value'], ENT_QUOTES, 'UTF-8');?>
" name="company_settings[company_site_administrator]"/>
            </div>
                        <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-country"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_country']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <div class="form_container__select_cover">
                    <select class="form_container__select cm-country cm-location-og" id="og-company-settings-country" name="company_settings[company_country]">
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
" <?php if ($_smarty_tpl->tpl_vars['code']->value === $_smarty_tpl->tpl_vars['company']->value['company_country']['value']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['country']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-chevron-down form_container__select_chevron"),$_smarty_tpl);?>

                </div>
            </div>
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-phone"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_phone']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <input class="form_container__input cm-mask-phone js-mask-phone-inited" id="og-company-settings-phone" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_phone']['value'], ENT_QUOTES, 'UTF-8');?>
" inputmode="numeric" name="company_settings[company_phone]"/>
            </div>
                        <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-state"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_state']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <div class="form_container__select_cover">
                    <select class="form_container__select cm-state cm-location-og" id="og-company-settings-state" name="company_settings[company_state]">
                        <option value="">- <?php echo $_smarty_tpl->__("select_state");?>
 -</option>
                    </select>
                    <input type="text" id="og-company-settings-state_d" name="company_settings[company_state]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_state']['value'], ENT_QUOTES, 'UTF-8');?>
" size="32" maxlength="64" disabled="disabled" class="cm-state cm-location-og hidden" />
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-chevron-down form_container__select_chevron"),$_smarty_tpl);?>

                </div>
            </div>
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-year"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_start_year']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <div class="form_container__select_cover">
                    <input class="form_container__input" id="og-company-settings-year" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_start_year']['value'], ENT_QUOTES, 'UTF-8');?>
" name="company_settings[company_start_year]"/>
                </div>
            </div>
            <div class="form_container__form_control">
                <label class="form_container__label" for="og-company-settings-zip"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_zipcode']['description'], ENT_QUOTES, 'UTF-8');?>
</label>
                <input class="form_container__input" id="og-company-settings-zip" type="text" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_zipcode']['value'], ENT_QUOTES, 'UTF-8');?>
" name="company_settings[company_zipcode]"/>
            </div>
        </div>
        <div class="onboarding_section__action_block">
            <button data-og-tab-navigation="1" type="button" class="btn btn-primary tab-navigation"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-long-arrow-left"),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->__("onboarding_guide.back");?>
</button>
            <button data-og-tab-navigation="3" type="button" class="btn btn-primary tab-navigation"><?php echo $_smarty_tpl->__("onboarding_guide.next");?>
 <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-long-arrow-right"),$_smarty_tpl);?>
</button>
            <button class="btn"><?php echo $_smarty_tpl->__("onboarding_guide.save");?>
</button>
        </div>
    </form>
<!--onboarding_guide_company_settings--></div>

<?php }
}
