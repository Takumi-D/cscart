<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:58
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\buttons\button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b41ea7f103_12265414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6272a76dfccfa3e53f6710203fbe9ddb2654bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\buttons\\button.tpl',
      1 => 1724167137,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b41ea7f103_12265414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('remove','remove'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['but_role']->value == "action") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-action");?>
    <?php $_smarty_tpl->_assignInScope('file_prefix', "action_");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "act") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-act");?>
    <?php $_smarty_tpl->_assignInScope('file_prefix', "action_");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "disabled_big") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-disabled-big");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "big") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-big");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "delete") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-delete");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "tool") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-tool");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('suffix', '');
}?>

<?php if ($_smarty_tpl->tpl_vars['but_name']->value && $_smarty_tpl->tpl_vars['but_role']->value != "text" && $_smarty_tpl->tpl_vars['but_role']->value != "act" && $_smarty_tpl->tpl_vars['but_role']->value != "delete") {?>     <button <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 ty-btn" type="submit" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "text" || $_smarty_tpl->tpl_vars['but_role']->value == "act" || $_smarty_tpl->tpl_vars['but_role']->value == "edit") {?>     <a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?>cm-submit <?php }?>text-button<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?>cm-scroll <?php }?>"<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?> data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_scroll']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "delete") {?>
    <a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle",'title'=>$_smarty_tpl->__("remove")),$_smarty_tpl);?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "icon") {?>     <a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } else { ?> 
    <a <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>" <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/button.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/button.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['but_role']->value == "action") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-action");?>
    <?php $_smarty_tpl->_assignInScope('file_prefix', "action_");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "act") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-act");?>
    <?php $_smarty_tpl->_assignInScope('file_prefix', "action_");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "disabled_big") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-disabled-big");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "big") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-big");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "delete") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-delete");
} elseif ($_smarty_tpl->tpl_vars['but_role']->value == "tool") {?>
    <?php $_smarty_tpl->_assignInScope('suffix', "-tool");
} else { ?>
    <?php $_smarty_tpl->_assignInScope('suffix', '');
}?>

<?php if ($_smarty_tpl->tpl_vars['but_name']->value && $_smarty_tpl->tpl_vars['but_role']->value != "text" && $_smarty_tpl->tpl_vars['but_role']->value != "act" && $_smarty_tpl->tpl_vars['but_role']->value != "delete") {?>     <button <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 ty-btn" type="submit" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</button>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "text" || $_smarty_tpl->tpl_vars['but_role']->value == "act" || $_smarty_tpl->tpl_vars['but_role']->value == "edit") {?>     <a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?>cm-submit <?php }?>text-button<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suffix']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?>cm-scroll <?php }?>"<?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_scroll']->value) {?> data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_scroll']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "delete") {?>
    <a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_name']->value) {?> data-ca-dispatch="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }
if ($_smarty_tpl->tpl_vars['but_meta']->value) {?> class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target']->value) {?> target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-cancel-circle",'title'=>$_smarty_tpl->__("remove")),$_smarty_tpl);?>
</a>

<?php } elseif ($_smarty_tpl->tpl_vars['but_role']->value == "icon") {?>     <a <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_extra']->value, ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['but_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_href']->value) {?> href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
;<?php if (!$_smarty_tpl->tpl_vars['allow_href']->value) {?> return false;<?php }?>"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>

<?php } else { ?> 
    <a <?php if ($_smarty_tpl->tpl_vars['but_href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['but_href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_onclick']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['but_onclick']->value;?>
 return false;"<?php }?> <?php if ($_smarty_tpl->tpl_vars['but_target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-btn <?php if ($_smarty_tpl->tpl_vars['but_meta']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_meta']->value, ENT_QUOTES, 'UTF-8');?>
 <?php }?>" <?php if ($_smarty_tpl->tpl_vars['but_rel']->value) {?> rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_rel']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_external_click_id']->value) {?> data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_form']->value) {?> data-ca-target-form="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_form']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_target_id']->value) {?> data-ca-target-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_target_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['but_title']->value) {?> title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['but_icon']->value),$_smarty_tpl);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_text']->value, ENT_QUOTES, 'UTF-8');?>
</a>
<?php }
}
}
}
