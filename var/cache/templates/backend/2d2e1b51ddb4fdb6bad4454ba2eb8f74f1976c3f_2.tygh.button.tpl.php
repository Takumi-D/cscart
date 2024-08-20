<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:30
  from 'C:\xampp\htdocs\cscart\design\backend\templates\buttons\button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43e939517_15674801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d2e1b51ddb4fdb6bad4454ba2eb8f74f1976c3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\buttons\\button.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43e939517_15674801 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
if ($_smarty_tpl->tpl_vars['but_role']->value == "text") {?>
    <?php $_smarty_tpl->_assignInScope('class', '');?>
    <?php } else { ?>
    <?php $_smarty_tpl->_assignInScope('class', "btn");
}?>

<?php if ($_smarty_tpl->tpl_vars['but_permission_data']->value) {?>
    <?php $_smarty_tpl->_assignInScope('r', $_smarty_tpl->tpl_vars['but_permission_data']->value);
} elseif ($_smarty_tpl->tpl_vars['but_name']->value) {?>
    <?php $_smarty_tpl->_assignInScope('r', $_smarty_tpl->tpl_vars['but_name']->value);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('r', $_smarty_tpl->tpl_vars['but_href']->value);
}?>

<?php if ($_smarty_tpl->tpl_vars['but_icon']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "icon_content", "icon_content", null);?><span class="btn__icon <?php if ($_smarty_tpl->tpl_vars['but_role']->value === "text") {?>btn__icon--text<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_text']->value) {?>btn__icon--with-text<?php }?>"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php $_smarty_tpl->_assignInScope('is_btn_primary', (($tmp = $_smarty_tpl->tpl_vars['is_btn_primary']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php $_smarty_tpl->_assignInScope('method', (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? "POST" ?? null : $tmp));
if (fn_check_view_permissions($_smarty_tpl->tpl_vars['r']->value,$_smarty_tpl->tpl_vars['method']->value)) {?>

<?php if ($_smarty_tpl->tpl_vars['but_group']->value) {?><div class="btn-group"><?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_role']->value == "submit" || $_smarty_tpl->tpl_vars['but_role']->value == "button_main" || $_smarty_tpl->tpl_vars['but_type']->value || $_smarty_tpl->tpl_vars['but_role']->value == "big") {?>     <input <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['is_btn_primary']->value) {?> btn-primary<?php }?>" type="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_type']->value ?? null)===null||$tmp==='' ? "submit" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_check_filter']->value) {?> data-ca-check-filter="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_check_filter']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled="disabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_confirm_text']->value) {?>data-ca-confirm-text="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_confirm_text']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value && $_smarty_tpl->tpl_vars['but_role']->value != "submit" && $_smarty_tpl->tpl_vars['but_role']->value != "action" && $_smarty_tpl->tpl_vars['but_role']->value != "submit-link" && $_smarty_tpl->tpl_vars['but_role']->value != "advanced-search" && $_smarty_tpl->tpl_vars['but_role']->value != "button" && $_smarty_tpl->tpl_vars['but_role']->value != "submit-button" && $_smarty_tpl->tpl_vars['but_role']->value != "button-icon") {?>     <a <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['icon_content']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "action" || $_smarty_tpl->tpl_vars['but_role']->value == "advanced-search" || $_smarty_tpl->tpl_vars['but_role']->value == "submit-link") {?>     <a <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn<?php if ($_smarty_tpl->tpl_vars['but_role']->value == "submit-link") {
if ($_smarty_tpl->tpl_vars['is_btn_primary']->value) {?> btn-primary<?php }?> cm-submit<?php }
if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['icon_content']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "submit-button") {?>
    <button type="submit" <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->tpl_vars['is_btn_primary']->value) {?>btn-primary<?php }?> cm-submit<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->tpl_vars['icon_content']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "button") {?>
    <input <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="button" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> />

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "button-icon") {?>
    <button <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> type="button" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['icon_content']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "icon") {?>     <a <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php echo $_smarty_tpl->tpl_vars['but_text']->value;?>
</a>

<?php } elseif (!$_smarty_tpl->tpl_vars['but_role']->value || !$_smarty_tpl->tpl_vars['but_name']->value) {?>     <input <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>" type="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['but_type']->value ?? null)===null||$tmp==='' ? "submit" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['but_name']->value) {?> name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_onclick']->value, ENT_QUOTES, 'UTF-8');?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['tabindex']->value) {?>tabindex="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tabindex']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_disabled']->value) {?>disabled="disabled"<?php }?>  />
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['but_group']->value) {?></div><?php }
}
}
}
