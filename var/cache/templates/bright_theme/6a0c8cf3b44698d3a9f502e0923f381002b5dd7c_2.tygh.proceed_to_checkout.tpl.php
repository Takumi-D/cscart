<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:01
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\buttons\proceed_to_checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4218cd976_47416464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a0c8cf3b44698d3a9f502e0923f381002b5dd7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\buttons\\proceed_to_checkout.tpl',
      1 => 1724167137,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 2,
  ),
),false)) {
function content_66c4b4218cd976_47416464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('sign_in','proceed_to_checkout','proceed_to_checkout','sign_in','proceed_to_checkout','proceed_to_checkout'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['disable_anonymous_checkout'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('return_url', (($tmp = $_smarty_tpl->tpl_vars['but_href']->value ?? null)===null||$tmp==='' ? (fn_url("checkout.checkout")) ?? null : $tmp));?>

    <a
        class="cm-dialog-opener cm-dialog-auto-size ty-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        href="<?php echo htmlspecialchars((string) fn_url("checkout.login_form?return_url=".((string)(urlencode($_smarty_tpl->tpl_vars['return_url']->value)))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("sign_in");?>
"
        data-ca-target-id="checkout_login_form"
        rel="nofollow">
        <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

    </a>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") ?? null : $tmp),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>(($tmp = $_smarty_tpl->tpl_vars['but_href']->value ?? null)===null||$tmp==='' ? "checkout.checkout" ?? null : $tmp),'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_action']->value ?? null)===null||$tmp==='' ? "action" ?? null : $tmp),'but_meta'=>(($tmp = $_smarty_tpl->tpl_vars['but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp)), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/proceed_to_checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/proceed_to_checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if (!$_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Checkout']['disable_anonymous_checkout'] == smarty_modifier_enum("YesNo::YES")) {?>
    <?php $_smarty_tpl->_assignInScope('but_meta', (($tmp = $_smarty_tpl->tpl_vars['but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('return_url', (($tmp = $_smarty_tpl->tpl_vars['but_href']->value ?? null)===null||$tmp==='' ? (fn_url("checkout.checkout")) ?? null : $tmp));?>

    <a
        class="cm-dialog-opener cm-dialog-auto-size ty-btn <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"
        href="<?php echo htmlspecialchars((string) fn_url("checkout.login_form?return_url=".((string)(urlencode($_smarty_tpl->tpl_vars['return_url']->value)))), ENT_QUOTES, 'UTF-8');?>
"
        data-ca-dialog-title="<?php echo $_smarty_tpl->__("sign_in");?>
"
        data-ca-target-id="checkout_login_form"
        rel="nofollow">
        <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

    </a>
<?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>(($tmp = $_smarty_tpl->tpl_vars['but_text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("proceed_to_checkout") ?? null : $tmp),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>(($tmp = $_smarty_tpl->tpl_vars['but_href']->value ?? null)===null||$tmp==='' ? "checkout.checkout" ?? null : $tmp),'but_target'=>$_smarty_tpl->tpl_vars['but_target']->value,'but_role'=>(($tmp = $_smarty_tpl->tpl_vars['but_action']->value ?? null)===null||$tmp==='' ? "action" ?? null : $tmp),'but_meta'=>(($tmp = $_smarty_tpl->tpl_vars['but_meta']->value ?? null)===null||$tmp==='' ? "ty-btn__primary" ?? null : $tmp)), 0, true);
}
}
}
}
