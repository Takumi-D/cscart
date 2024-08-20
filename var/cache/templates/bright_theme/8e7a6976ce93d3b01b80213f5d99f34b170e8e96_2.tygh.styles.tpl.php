<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:52
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\styles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41834e415_09502506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e7a6976ce93d3b01b80213f5d99f34b170e8e96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\styles.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b41834e415_09502506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.styles.php','function'=>'smarty_block_styles',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value));
$_block_repeat=true;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:styles"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/supports.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>


        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/wysiwyg.less"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/components/block_manager.less"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/styles.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/styles.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('styles', array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value));
$_block_repeat=true;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:styles"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:styles"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    
    <?php echo smarty_function_style(array('src'=>"styles.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/supports.css"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"tygh/responsive.less"),$_smarty_tpl);?>

    <?php echo smarty_function_style(array('src'=>"lib/select2/select2.min.css"),$_smarty_tpl);?>


        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor'] || $_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/design_mode.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/wysiwyg.less"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['theme_editor']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/theme_editor.css"),$_smarty_tpl);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['block_manager']) {?>
        <?php echo smarty_function_style(array('src'=>"tygh/components/block_manager.less"),$_smarty_tpl);?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['language_direction']->value == "rtl") {?>
        <?php echo smarty_function_style(array('src'=>"tygh/rtl.less"),$_smarty_tpl);?>

    <?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:styles"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo smarty_block_styles(array('use_scheme'=>true,'reflect_less'=>$_smarty_tpl->tpl_vars['reflect_less']->value), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
