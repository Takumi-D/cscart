<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:51
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4174e1050_19946832',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d1932c13b7929b3c3ee999483e99e20497ba157' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\index.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:meta.tpl' => 1,
    'tygh:common/styles.tpl' => 1,
    'tygh:common/toolbar.tpl' => 1,
    'backend:components/bottom_panel/bottom_panel.tpl' => 1,
    'tygh:common/loading_box.tpl' => 1,
    'tygh:common/notification.tpl' => 1,
    'tygh:common/scripts.tpl' => 1,
    'backend:common/template_editor.tpl' => 1,
    'backend:common/theme_editor.tpl' => 1,
  ),
),false)) {
function content_66c4b4174e1050_19946832 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.render_location.php','function'=>'smarty_function_render_location',),));
\Tygh\Languages\Helper::preloadLangVars(array('on_site_template_editing'));
$_smarty_tpl->_assignInScope('pb_is_bottom_panel_open', ($_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") || $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::VENDOR") || defined("THEMES_PANEL")) && (($tmp = $_COOKIE['pb_is_bottom_panel_open'] ?? null)===null||$tmp==='' ? "1" ?? null : $tmp));
$_smarty_tpl->_assignInScope('is_theme_editor_open', $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']);?>
<!DOCTYPE html>
<html <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:html_tag"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:html_tag"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:html_tag"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    lang="<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
"
    dir="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
"
    class="<?php if ($_smarty_tpl->tpl_vars['pb_is_bottom_panel_open']->value) {?>bp-panel-active<?php }?> <?php if ($_smarty_tpl->tpl_vars['is_theme_editor_open']->value) {?>te-theme-editor-active<?php }?>"
>
<head>
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "page_title", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:title"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:title"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
if ($_smarty_tpl->tpl_vars['page_title']->value) {?>
    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page_title']->value, ENT_QUOTES, 'UTF-8');?>

<?php } else { ?>
    <?php echo htmlspecialchars((string) fn_generate_page_title($_smarty_tpl->tpl_vars['breadcrumbs']->value,$_smarty_tpl->tpl_vars['language_direction']->value,$_smarty_tpl->tpl_vars['location_data']->value['title']), ENT_QUOTES, 'UTF-8');?>

<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:title"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<title><?php echo smarty_modifier_trim(preg_replace('!\s+!u', ' ',$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'page_title')));?>
</title>
<?php $_smarty_tpl->_subTemplateRender("tygh:meta.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:links"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:links"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <link href="<?php echo htmlspecialchars((string) fn_query_remove($_smarty_tpl->tpl_vars['logos']->value['favicon']['image']['image_path'],'t'), ENT_QUOTES, 'UTF-8');?>
" rel="shortcut icon" type="<?php echo htmlspecialchars((string) fn_get_mime_content_type($_smarty_tpl->tpl_vars['logos']->value['favicon']['image']['absolute_path']), ENT_QUOTES, 'UTF-8');?>
" />
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:links"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->_subTemplateRender("tygh:common/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('include_dropdown'=>true), 0, false);
if (defined("DEVELOPMENT") && (defined('DEVELOPMENT') ? constant('DEVELOPMENT') : null) == true) {
echo '<script'; ?>
 data-no-defer>
window.jsErrors = [];
window.onerror = function(message, source, lineno, colno, error) {
    var verboseMessage = message;
    if (source) {
        verboseMessage = source + '@' + lineno + ':' + colno + "\n\n" + message;
    }

    console.error(verboseMessage);

    if (error && error.stack) {
        console.log(error.stack);
    }

    document.write('<pre data-ca-debug="1" style="border: 2px solid red; margin: 2px;">'
        + verboseMessage + "\n\n"
        + (error && error.stack ? error.stack : '')
        + '</pre>'
    );
};
<?php echo '</script'; ?>
>
<!--[if lt IE 9]><?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.1.9/es5-shim.min.js"><?php echo '</script'; ?>
><![endif]-->
<?php }
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:head_scripts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:head_scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:head_scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</head>

<body>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:body"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:body"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
            <?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/toolbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("on_site_template_editing"),'href'=>"customization.disable_mode?type=design&return_url=".$_prefixVariable1), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>
            <?php $_smarty_tpl->_subTemplateRender("backend:components/bottom_panel/bottom_panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('logo'=>(($tmp = $_smarty_tpl->tpl_vars['logo']->value['theme']['image'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['logos']->value['theme']['image'] ?? null : $tmp)), 0, false);
?>
        <?php }?>

        <div class="ty-tygh <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>te-mode<?php }?> <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] || (defined('THEMES_PANEL') ? constant('THEMES_PANEL') : null)) {?>ty-top-panel-padding<?php }?>" data-ca-element="mainContainer" id="tygh_container">

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/loading_box.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/notification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="ty-helper-container <?php if ($_smarty_tpl->tpl_vars['is_bottom_panel_available']->value) {?>bp-tygh-main-container<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager'] && $_smarty_tpl->tpl_vars['location_data']->value['is_frontend_editing_allowed']) {?>
                data-ca-block-manager="main"
            <?php }?>
        id="tygh_main_container">
            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                 <?php echo smarty_function_render_location(array(),$_smarty_tpl);?>

            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--tygh_main_container--></div>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:footer"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:footer"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:footer"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        <!--tygh_container--></div>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
            <?php $_smarty_tpl->_subTemplateRender("backend:common/template_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
            <?php $_smarty_tpl->_subTemplateRender("backend:common/theme_editor.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:body"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</body>

</html>
<?php }
}
