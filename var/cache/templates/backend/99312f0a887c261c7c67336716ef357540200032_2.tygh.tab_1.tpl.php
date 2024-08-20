<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:37
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\onboarding_guide\steps\personalize_marketplace\tabs\tab_1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b445e2ce24_19382423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99312f0a887c261c7c67336716ef357540200032' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\personalize_marketplace\\tabs\\tab_1.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/previewer.tpl' => 1,
  ),
),false)) {
function content_66c4b445e2ce24_19382423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.upload_logo','alternative_text','onboarding_guide.select_theme','onboarding_guide.custom_theme','onboarding_guide.current_theme','onboarding_guide.activate','onboarding_guide.next'));
$_smarty_tpl->_assignInScope('themes', $_smarty_tpl->tpl_vars['data']->value['themes']);
$_smarty_tpl->_assignInScope('theme_logo_id', $_smarty_tpl->tpl_vars['data']->value['logos']['theme']['logo_id']);
$_smarty_tpl->_assignInScope('mail_logo_id', $_smarty_tpl->tpl_vars['data']->value['logos']['mail']['logo_id']);?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/previewer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div id="og-design">
    <form id="og-design-form" class="form_container onboarding_content_margin--bottom_x3" onsubmit="event.preventDefault();">
        <div class="form_container__form_control">
                <label for="og-logo-file">
                    <div class="form_container__label"><?php echo $_smarty_tpl->__("onboarding_guide.upload_logo");?>
</div>
                    <input class="form_container__input hidden_input upload_image_input" id="og-logo-file" type="file" name="file_logo_image_icon[theme]"/>

                    <input type="text" class="hidden" name="logo_image_data[theme][type]" value="M">
                    <input type="text" class="hidden" name="logo_image_data[theme][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_logo_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" class="hidden" name="type_logo_image_icon[theme]" value="local">

                    <input type="text" class="hidden" name="logo_image_data[mail][type]" value="M">
                    <input type="text" class="hidden" name="logo_image_data[mail][object_id]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['mail_logo_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <input type="text" class="hidden" name="type_logo_image_icon[mail]" value="local">

                    <div class="upload_input">
                        <?php $_smarty_tpl->_assignInScope('logo_path', $_smarty_tpl->tpl_vars['data']->value['logos']['theme']['image']['image_path']);?>
                        <div class="upload_input__image active">
                            <div class="upload_input__image_cover">
                            <div class="upload_input__image_circle">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-plus"),$_smarty_tpl);?>

                            </div>
                            </div>
                            <img id="og-logo-img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_path']->value, ENT_QUOTES, 'UTF-8');?>
">
                        </div>
                        <div class="upload_circle <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['logo_path']->value ? 'hide' : '', ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-camera"),$_smarty_tpl);?>

                        </div>
                    </div>
                </label>
        </div>
        <div class="form_container__form_control">
                <label class="form_container__label" for="og-logo-alt"><?php echo $_smarty_tpl->__("alternative_text");?>
</label>
                <input class="form_container__input" id="og-logo-alt" type="text" name="logo_image_data[theme][image_alt]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data']->value['logos']['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
"/>
        </div>
    </form>

    <div class="onboarding_section__progress_title_text onboarding_content_margin--bottom_x2"><?php echo $_smarty_tpl->__("onboarding_guide.select_theme");?>
</div>
    <div class="theme_form onboarding_content_margin--bottom_x3">
        <div class="theme_form__grid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['themes']->value, 'theme', false, 'theme_id');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme_id']->value => $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('theme_image', (($tmp = $_smarty_tpl->tpl_vars['theme']->value['image'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/user_styles.png" ?? null : $tmp));?>
                <div class="theme_form__grid_item og-theme" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['is_current'] ? "og-current-theme" : '', ENT_QUOTES, 'UTF-8');?>
" data-og-theme-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <div class="og-theme-custom"><?php echo $_smarty_tpl->__("onboarding_guide.custom_theme");?>
</div>
                    <a
                        id="det_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_image']->value, ENT_QUOTES, 'UTF-8');?>
"
                        data-ca-image-id="img_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                        style="background-image: url(<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_image']->value, ENT_QUOTES, 'UTF-8');?>
);"
                        class="theme_form__grid_item_image onboarding_content_margin--bottom_x2 og-theme-image cm-previewer og_theme_image"
                    >
                        <img class="theme_form__grid_item_image_img" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_image']->value, ENT_QUOTES, 'UTF-8');?>
" />
                        <div class="theme_form__grid_item_image_cover og_cover">
                            <div class="theme_form__grid_item_image_circle og_circle">
                                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-eye-open"),$_smarty_tpl);?>

                            </div>
                        </div>
                    </a>
                    <div class="theme_form__grid_item_actions onboarding_content_margin--bottom_x2">
                        <div class="theme_form__grid_item_actions_info">
                            <span class="onboarding_section__progress_title_text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <span class="onboarding_section__progress_text og-style-name"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['style_id'], ENT_QUOTES, 'UTF-8');?>
</span>
                        </div>
                        <div class="theme_form__grid_item_actions_input">
                            <label>
                                <input class="theme-input og-theme-activator" name="theme_name" type="radio" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme']->value['is_current'] ? "checked" : '', ENT_QUOTES, 'UTF-8');?>
 />
                                <div class="buttons">
                                    <div class="btn disabled button-checked"><?php echo $_smarty_tpl->__("onboarding_guide.current_theme");?>
</div>
                                    <div class="btn btn-primary button-unchecked"><?php echo $_smarty_tpl->__("onboarding_guide.activate");?>
</div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="theme_variants">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme']->value['styles'], 'style', false, 'style_id');
$_smarty_tpl->tpl_vars['style']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['style_id']->value => $_smarty_tpl->tpl_vars['style']->value) {
$_smarty_tpl->tpl_vars['style']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('style_color', (($tmp = $_smarty_tpl->tpl_vars['style']->value['main_color'] ?? null)===null||$tmp==='' ? "#ccc" ?? null : $tmp));?>
                            <?php $_smarty_tpl->_assignInScope('style_image', (($tmp = $_smarty_tpl->tpl_vars['style']->value['image'] ?? null)===null||$tmp==='' ? ((string)$_smarty_tpl->tpl_vars['images_dir']->value)."/user_styles.png" ?? null : $tmp));?>
                            <label>
                                <input
                                    data-og-theme-color="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['main_color'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="theme_original_radio og-theme-style"
                                    type="radio"
                                    data-og-theme-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['theme_id']->value, ENT_QUOTES, 'UTF-8');?>
_style"
                                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style_id']->value, ENT_QUOTES, 'UTF-8');?>
" data-og-style-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style_image']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style_id']->value === $_smarty_tpl->tpl_vars['theme']->value['style_id'] ? "checked" : '', ENT_QUOTES, 'UTF-8');?>
 data-og-is-default="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style']->value['is_default'] ? 1 : 0, ENT_QUOTES, 'UTF-8');?>
"/>
                                <div class="theme_custom_radio" style="background-color: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['style_color']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
                            </label>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <div class="onboarding_section__action_block">
        <button data-og-tab-navigation="2" type="button" class="btn btn-primary tab-navigation tab-navigation-scroll"><?php echo $_smarty_tpl->__("onboarding_guide.next");?>
 <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-long-arrow-right"),$_smarty_tpl);?>
</button>
    </div>
<!--og-design--></div><?php }
}
