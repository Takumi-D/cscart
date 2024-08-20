<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:03
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\banners\blocks\original.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b423048a48_08025040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f3a15c9a6ff6454eb0d8d7ab4fc5ef5be66177' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\banners\\blocks\\original.tpl',
      1 => 1724167151,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66c4b423048a48_08025040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner', false, 'key');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
    <div class="ty-banner__image-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>><?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'image_auto_size'=>true,'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?></a><?php }?>
    </div>
    <?php } else { ?>
        <div class="ty-wysiwyg-content">
            <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/blocks/original.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/original.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner', false, 'key');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
    <div class="ty-banner__image-wrapper">
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?><a href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>><?php }?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'image_auto_size'=>true,'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0, true);
?>
        <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?></a><?php }?>
    </div>
    <?php } else { ?>
        <div class="ty-wysiwyg-content">
            <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
