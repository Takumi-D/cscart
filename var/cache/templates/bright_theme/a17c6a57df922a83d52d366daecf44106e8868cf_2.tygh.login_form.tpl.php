<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:58
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\views\auth\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41e2cd8f8_36326309',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a17c6a57df922a83d52d366daecf44106e8868cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\views\\auth\\login_form.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/image_verification.tpl' => 2,
    'tygh:buttons/login.tpl' => 2,
  ),
),false)) {
function content_66c4b41e2cd8f8_36326309 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('returning_customer','email','password','forgot_password_question','error_incorrect_login','register_new_account','remember_me','sign_in','returning_customer','email','password','forgot_password_question','error_incorrect_login','register_new_account','remember_me','sign_in'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "main_login" ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "login", null, null);?>
    <form name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>class="cm-ajax cm-ajax-full-render"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container" />
            <input type="hidden" name="login_block_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="quick_login" value="1" />
        <?php }?>

        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
            <div class="ty-checkout-login-form"><?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("returning_customer")), 0, false);
?>
        <?php }?>

        <div class="ty-control-group">
            <label for="login_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" id="login_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-login__input cm-focus" />
        </div>

        <div class="ty-control-group ty-password-forgot">
            <label for="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label><a href="<?php echo htmlspecialchars((string) fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
            <input type="password" id="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
        </div>

        <?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
            <?php if ($_smarty_tpl->tpl_vars['login_error']->value) {?>
                <div class="ty-login-form__wrong-credentials-container">
                    <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->__("error_incorrect_login");?>
</span>
                </div>
            <?php }?>

            <div class="ty-login-reglink ty-center">
                <a class="ty-login-reglink__a" href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
            </div>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"login",'align'=>"left"), 0, false);
?>

        <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:login_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="buttons-container clearfix">
                <div class="ty-float-right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0, false);
?>
                </div>
                <div class="ty-login__remember-me">
                    <label for="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container--></div>
<?php } else { ?>
    <div class="ty-login">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("sign_in");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="views/auth/login_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/auth/login_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('id', (($tmp = $_smarty_tpl->tpl_vars['id']->value ?? null)===null||$tmp==='' ? "main_login" ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "login", null, null);?>
    <form name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" <?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>class="cm-ajax cm-ajax-full-render"<?php }?>>
        <?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
            <input type="hidden" name="result_ids" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container" />
            <input type="hidden" name="login_block_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="quick_login" value="1" />
        <?php }?>

        <input type="hidden" name="return_url" value="<?php echo htmlspecialchars((string) (($tmp = $_REQUEST['return_url'] ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['redirect_url']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['config']->value['current_url'] ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />

        <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
            <div class="ty-checkout-login-form"><?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->__("returning_customer")), 0, true);
?>
        <?php }?>

        <div class="ty-control-group">
            <label for="login_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email"><?php echo $_smarty_tpl->__("email");?>
</label>
            <input type="text" id="login_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="user_login" size="30" value="<?php if ($_smarty_tpl->tpl_vars['stored_user_login']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['stored_user_login']->value, ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['demo_username'], ENT_QUOTES, 'UTF-8');
}?>" class="ty-login__input cm-focus" />
        </div>

        <div class="ty-control-group ty-password-forgot">
            <label for="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required"><?php echo $_smarty_tpl->__("password");?>
</label><a href="<?php echo htmlspecialchars((string) fn_url("auth.recover_password"), ENT_QUOTES, 'UTF-8');?>
" class="ty-password-forgot__a"  tabindex="5"><?php echo $_smarty_tpl->__("forgot_password_question");?>
</a>
            <input type="password" id="psw_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="password" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['demo_password'], ENT_QUOTES, 'UTF-8');?>
" class="ty-login__input" maxlength="32" />
        </div>

        <?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
            <?php if ($_smarty_tpl->tpl_vars['login_error']->value) {?>
                <div class="ty-login-form__wrong-credentials-container">
                    <span class="ty-login-form__wrong-credentials-text ty-error-text"><?php echo $_smarty_tpl->__("error_incorrect_login");?>
</span>
                </div>
            <?php }?>

            <div class="ty-login-reglink ty-center">
                <a class="ty-login-reglink__a" href="<?php echo htmlspecialchars((string) fn_url("profiles.add"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("register_new_account");?>
</a>
            </div>
        <?php }?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image_verification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('option'=>"login",'align'=>"left"), 0, true);
?>

        <?php if ($_smarty_tpl->tpl_vars['style']->value == "checkout") {?>
            </div>
        <?php }?>

        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:login_buttons"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:login_buttons"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <div class="buttons-container clearfix">
                <div class="ty-float-right">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/login.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_name'=>"dispatch[auth.login]",'but_role'=>"submit"), 0, true);
?>
                </div>
                <div class="ty-login__remember-me">
                    <label for="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" /><?php echo $_smarty_tpl->__("remember_me");?>
</label>
                </div>
            </div>
        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:login_buttons"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </form>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['style']->value == "popup") {?>
    <div id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

    <!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_login_popup_form_container--></div>
<?php } else { ?>
    <div class="ty-login">
        <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'login');?>

    </div>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo $_smarty_tpl->__("sign_in");
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}
}
}
}
