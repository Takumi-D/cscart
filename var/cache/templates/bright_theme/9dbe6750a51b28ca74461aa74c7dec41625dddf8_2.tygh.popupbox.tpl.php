<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:56
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\popupbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41ca52955_18863888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dbe6750a51b28ca74461aa74c7dec41625dddf8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\popupbox.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b41ca52955_18863888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.render_tag_attrs.php','function'=>'smarty_modifier_render_tag_attrs',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "link", null, null);
}?>


<?php if ($_smarty_tpl->tpl_vars['text']->value) {?>
    <?php $_smarty_tpl->_assignInScope('dialog_title', $_smarty_tpl->tpl_vars['text']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
    <?php $_smarty_tpl->_assignInScope('dialog_title', $_smarty_tpl->tpl_vars['title']->value);
}?>


<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>(<?php }?>
    <a id="opener_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> href="#"<?php }?>
        data-ca-target-id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['dialog_title']->value) {?>data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dialog_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['dialog_additional_attrs']->value);?>

        rel="nofollow"
    >
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value && $_smarty_tpl->tpl_vars['link_icon_first']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['link_icon']->value),$_smarty_tpl);
}?>
        <span <?php if ($_smarty_tpl->tpl_vars['link_text_meta']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_text_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value && !$_smarty_tpl->tpl_vars['link_icon_first']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['link_icon']->value),$_smarty_tpl);
}?>
    </a>
<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>)<?php }?>

<?php if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php if ($_smarty_tpl->tpl_vars['content']->value || $_smarty_tpl->tpl_vars['href']->value || $_smarty_tpl->tpl_vars['edit_picker']->value) {?>
<div class="hidden<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value) {?> ty-wysiwyg-content<?php }?>" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/popupbox.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/popupbox.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "link", null, null);
}?>


<?php if ($_smarty_tpl->tpl_vars['text']->value) {?>
    <?php $_smarty_tpl->_assignInScope('dialog_title', $_smarty_tpl->tpl_vars['text']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
    <?php $_smarty_tpl->_assignInScope('dialog_title', $_smarty_tpl->tpl_vars['title']->value);
}?>


<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>(<?php }?>
    <a id="opener_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        class="cm-dialog-opener cm-dialog-auto-size <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
" <?php } else { ?> href="#"<?php }?>
        data-ca-target-id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"
        <?php if ($_smarty_tpl->tpl_vars['edit_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['edit_onclick']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['dialog_title']->value) {?>data-ca-dialog-title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['dialog_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php echo smarty_modifier_render_tag_attrs($_smarty_tpl->tpl_vars['dialog_additional_attrs']->value);?>

        rel="nofollow"
    >
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value && $_smarty_tpl->tpl_vars['link_icon_first']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['link_icon']->value),$_smarty_tpl);
}?>
        <span <?php if ($_smarty_tpl->tpl_vars['link_text_meta']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_text_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['link_text']->value;?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['link_icon']->value && !$_smarty_tpl->tpl_vars['link_icon_first']->value) {
echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['link_icon']->value),$_smarty_tpl);
}?>
    </a>
<?php if ($_smarty_tpl->tpl_vars['show_brackets']->value) {?>)<?php }?>

<?php if ($_smarty_tpl->tpl_vars['capture_link']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php if ($_smarty_tpl->tpl_vars['content']->value || $_smarty_tpl->tpl_vars['href']->value || $_smarty_tpl->tpl_vars['edit_picker']->value) {?>
<div class="hidden<?php if ($_smarty_tpl->tpl_vars['wysiwyg']->value) {?> ty-wysiwyg-content<?php }?>" id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<?php }
}
}
}
