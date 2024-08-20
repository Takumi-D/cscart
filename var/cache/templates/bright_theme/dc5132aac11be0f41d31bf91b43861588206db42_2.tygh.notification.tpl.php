<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:54
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\notification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41a8fc263_89368196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc5132aac11be0f41d31bf91b43861588206db42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\notification.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b41a8fc263_89368196 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><div class="cm-notification-container notification-container">
<?php if (!defined("AJAX_REQUEST")) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_notifications(''), 'message', false, 'key');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
if ($_smarty_tpl->tpl_vars['message']->value['type'] == "I") {?>
    <div class="ui-widget-overlay" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div class="cm-notification-content cm-notification-content-extended notification-content-extended<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <h1><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>"></span></h1>
        <div class="notification-body-extended">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "O") {?>
    <div class="cm-notification-content notification-content alert-error" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php } else { ?>
    <div class="cm-notification-content notification-content<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "I") {?> cm-auto-hide<?php }?> <?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "N") {?>alert-success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "W") {?>alert-warning<?php } else { ?>alert-error<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/notification.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/notification.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><div class="cm-notification-container notification-container">
<?php if (!defined("AJAX_REQUEST")) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, fn_get_notifications(''), 'message', false, 'key');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
if ($_smarty_tpl->tpl_vars['message']->value['type'] == "I") {?>
    <div class="ui-widget-overlay" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
    <div class="cm-notification-content cm-notification-content-extended notification-content-extended<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "I") {?> cm-auto-hide<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <h1><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
<span class="cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>"></span></h1>
        <div class="notification-body-extended">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "O") {?>
    <div class="cm-notification-content notification-content alert-error" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php } else { ?>
    <div class="cm-notification-content notification-content<?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "I") {?> cm-auto-hide<?php }?> <?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "N") {?>alert-success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == "W") {?>alert-warning<?php } else { ?>alert-error<?php }?>" data-ca-notification-key="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
">
        <button type="button" class="close cm-notification-close <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] == "S") {?> cm-notification-close-ajax<?php }?>" <?php if ($_smarty_tpl->tpl_vars['message']->value['message_state'] != "S") {?>data-dismiss="alert"<?php }?>>&times;</button>
        <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
</strong>
        <?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>

    </div>
<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</div><?php }
}
}
