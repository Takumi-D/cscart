<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:19:24
  from 'C:\xampp\htdocs\cscart\design\backend\templates\buttons\update_for_all.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b3fcbb7166_21730588',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0404f7450c86d62570d44b0c8618cd6aaf3e9bc3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\buttons\\update_for_all.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b3fcbb7166_21730588 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.to_json.php','function'=>'smarty_modifier_to_json',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('update_for_all_hid_act','update_for_all_hid_dis','update_for_all_act','update_for_all_dis'));
if ($_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->_assignInScope('absolute_position', (($tmp = $_smarty_tpl->tpl_vars['absolute_position']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('append', (($tmp = $_smarty_tpl->tpl_vars['append']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('hide_inputs', (($tmp = $_smarty_tpl->tpl_vars['hide_inputs']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

    <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>
        <?php $_smarty_tpl->_assignInScope('title_act', $_smarty_tpl->__("update_for_all_hid_act"));?>
        <?php $_smarty_tpl->_assignInScope('title_dis', $_smarty_tpl->__("update_for_all_hid_dis"));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('title_act', $_smarty_tpl->__("update_for_all_act"));?>
        <?php $_smarty_tpl->_assignInScope('title_dis', $_smarty_tpl->__("update_for_all_dis"));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all'] == 'active') {?>
        <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['title_act']->value);?>
        <?php $_smarty_tpl->_assignInScope('visible', "visible");?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->tpl_vars['title_dis']->value);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
        <?php $_smarty_tpl->_assignInScope('visible', "hidden");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['object_ids']->value) {?>
        <?php $_smarty_tpl->_assignInScope('disable_ids', smarty_modifier_to_json($_smarty_tpl->tpl_vars['object_ids']->value));?>
        <?php $_smarty_tpl->_assignInScope('component', (($tmp = $_smarty_tpl->tpl_vars['component']->value ?? null)===null||$tmp==='' ? (implode($_smarty_tpl->tpl_vars['object_ids']->value,"__")) ?? null : $tmp));?>
    <?php } else { ?>
        <?php $_smarty_tpl->_assignInScope('disable_ids', $_smarty_tpl->tpl_vars['object_id']->value);?>
        <?php $_smarty_tpl->_assignInScope('component', (($tmp = $_smarty_tpl->tpl_vars['component']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['object_id']->value ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('object_ids', array($_smarty_tpl->tpl_vars['object_id']->value));?>
        <?php $_smarty_tpl->_assignInScope('names', array($_smarty_tpl->tpl_vars['object_id']->value=>$_smarty_tpl->tpl_vars['name']->value));?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['append']->value && !$_smarty_tpl->tpl_vars['hide_inputs']->value) {?>
        <?php $_smarty_tpl->_assignInScope('static_position', (($tmp = $_smarty_tpl->tpl_vars['static_position']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>
        <?php $_smarty_tpl->_assignInScope('meta', $_smarty_tpl->tpl_vars['meta']->value ? ((string)$_smarty_tpl->tpl_vars['meta']->value)." update-for-all__icon--append" : "update-for-all__icon--append");?>
        <?php $_smarty_tpl->_assignInScope('meta_container', $_smarty_tpl->tpl_vars['meta_container']->value ? ((string)$_smarty_tpl->tpl_vars['meta_container']->value)." btn update-for-all--append" : "btn update-for-all--append");?>
    <?php }?>

    <div class="update-for-all
        <?php if ($_smarty_tpl->tpl_vars['absolute_position']->value) {?>
            update-for-all--absolute
        <?php } elseif ($_smarty_tpl->tpl_vars['static_position']->value) {?>
            update-for-all--static
        <?php }?>
        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta_container']->value, ENT_QUOTES, 'UTF-8');?>

    ">
        <a class="cm-update-for-all-icon
            update-for-all__icon
            cm-tooltip
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['visible']->value, ENT_QUOTES, 'UTF-8');?>

            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="#"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-update-for-all="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['component']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-title-active="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_act']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-title-disabled="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_dis']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-disable-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['disable_ids']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['hide_element']->value) {?>data-ca-hide-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hide_element']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        >
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"group"),$_smarty_tpl);?>

        </a>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['names']->value, 'name', false, 'object_id');
$_smarty_tpl->tpl_vars['name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['object_id']->value => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->do_else = false;
?>
            <input type="hidden"
                class="cm-no-hide-input"
                id="hidden_update_all_vendors_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
"
                value="<?php echo htmlspecialchars((string) smarty_modifier_enum("YesNo::YES"), ENT_QUOTES, 'UTF-8');?>
"
                <?php if ($_smarty_tpl->tpl_vars['settings']->value['Stores']['default_state_update_for_all'] === "not_active" && !$_smarty_tpl->tpl_vars['runtime']->value['simple_ultimate']) {?>
                    disabled="disabled"
                <?php }?>
            />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }
}
}
