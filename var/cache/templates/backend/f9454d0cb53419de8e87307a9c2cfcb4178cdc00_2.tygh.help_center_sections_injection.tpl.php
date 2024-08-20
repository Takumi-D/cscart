<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:27
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\component\help_center_sections_injection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43bc1f008_63922731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9454d0cb53419de8e87307a9c2cfcb4178cdc00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\component\\help_center_sections_injection.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43bc1f008_63922731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
\Tygh\Languages\Helper::preloadLangVars(array('help_center.ask','help_center.customer_care.submit_ticket','help_center.customer_care.view_all_tickets','help_center.customer_care.status.resolved','help_center.customer_care.status.open','help_center.customer_care','help_center.customer_care.no_support_tickets','help_center.customer_care.submit_ticket','help_center.customer_care.view_all_tickets','help_center.customer_care.service_unavailable','help_center.customer_care.service_unavailable_description','help_center.customer_care.prolong_subscription','help_center.customer_care','help_center.customer_care.sign_in_text','helpdesk_account.sign_in'));
$_smarty_tpl->_assignInScope('sections_injection', array());
$_smarty_tpl->_assignInScope('service_url', ((string)(rtrim($_smarty_tpl->tpl_vars['config']->value['helpdesk']['url'],'/')))."/");
$_smarty_tpl->_assignInScope('new_section_default', array('id'=>"ask",'name'=>$_smarty_tpl->__("help_center.ask"),'icon'=>"icon-inbox",'blocks'=>array()));?>

<?php $_smarty_tpl->_assignInScope('ask_section_is_new', false);
if ($_smarty_tpl->tpl_vars['ask_data_last_update']->value && $_smarty_tpl->tpl_vars['ask_data_last_update']->value > $_smarty_tpl->tpl_vars['help_center_last_view']->value) {?>
    <?php $_smarty_tpl->_assignInScope('ask_section_is_new', true);
}?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sections']->value, 'section');
$_smarty_tpl->tpl_vars['section']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number'] && $_smarty_tpl->tpl_vars['ask_data']->value['subscription']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE") && $_smarty_tpl->tpl_vars['section']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['section']->value) > 0) {?>
                <?php $_smarty_tpl->_assignInScope('new_section', array('id'=>$_smarty_tpl->tpl_vars['new_section_default']->value['id'],'name'=>$_smarty_tpl->tpl_vars['new_section_default']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['new_section_default']->value['icon'],'blocks'=>$_smarty_tpl->tpl_vars['new_section_default']->value['blocks'],'action_name'=>$_smarty_tpl->__("help_center.customer_care.submit_ticket"),'action_url'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."index.php?dispatch=communication.tickets&submit_ticket=Y&ticket_source=I",'all_items_name'=>$_smarty_tpl->__("help_center.customer_care.view_all_tickets"),'all_items_url'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."index.php?dispatch=communication.tickets"));?>
        <?php if ($_smarty_tpl->tpl_vars['new_section']->value["id"] === "ask" && $_smarty_tpl->tpl_vars['ask_section_is_new']->value) {?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['new_section']) ? $_smarty_tpl->tpl_vars['new_section']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array["new"] = true;
$_smarty_tpl->_assignInScope('new_section', $_tmp_array);?>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section']->value, 'section_data');
$_smarty_tpl->tpl_vars['section_data']->index = -1;
$_smarty_tpl->tpl_vars['section_data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['section_data']->value) {
$_smarty_tpl->tpl_vars['section_data']->do_else = false;
$_smarty_tpl->tpl_vars['section_data']->index++;
$__foreach_section_data_17_saved = $_smarty_tpl->tpl_vars['section_data'];
?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['new_section']) ? $_smarty_tpl->tpl_vars['new_section']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['blocks'][$_smarty_tpl->tpl_vars['section_data']->index] = array('id'=>$_smarty_tpl->tpl_vars['section_data']->value['ticket_id'],'url'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."index.php?dispatch=communication.messages&ticket_id=".((string)$_smarty_tpl->tpl_vars['section_data']->value['ticket_id']),'name'=>$_smarty_tpl->tpl_vars['section_data']->value['ticket'],'status'=>$_smarty_tpl->tpl_vars['section_data']->value['status'] === "resolved" ? "success" : "warning",'status_text'=>$_smarty_tpl->tpl_vars['section_data']->value['status'] === "resolved" ? $_smarty_tpl->__("help_center.customer_care.status.resolved") : $_smarty_tpl->__("help_center.customer_care.status.open"),'class'=>'help-center-block__title--secondary');
$_smarty_tpl->_assignInScope('new_section', $_tmp_array);?>
        <?php
$_smarty_tpl->tpl_vars['section_data'] = $__foreach_section_data_17_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sections_injection']) ? $_smarty_tpl->tpl_vars['sections_injection']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['new_section']->value;
$_smarty_tpl->_assignInScope('sections_injection', $_tmp_array);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number'] && $_smarty_tpl->tpl_vars['ask_data']->value['subscription']['status'] === smarty_modifier_enum("ObjectStatuses::ACTIVE")) {?>
                <?php $_smarty_tpl->_assignInScope('new_section', array('id'=>$_smarty_tpl->tpl_vars['new_section_default']->value['id'],'name'=>$_smarty_tpl->tpl_vars['new_section_default']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['new_section_default']->value['icon'],'class'=>"help-center-section--empty-state",'blocks'=>array(array('id'=>"no_open_tickets",'image_url'=>"design/backend/media/images/addons/help_center/helpdesk.svg",'name'=>$_smarty_tpl->__("help_center.customer_care"),'description'=>$_smarty_tpl->__("help_center.customer_care.no_support_tickets"),'action_url'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."index.php?dispatch=communication.tickets&submit_ticket=Y&ticket_source=I",'action_name'=>$_smarty_tpl->__("help_center.customer_care.submit_ticket"),'action_secondary_url'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."index.php?dispatch=communication.tickets",'action_secondary_name'=>$_smarty_tpl->__("help_center.customer_care.view_all_tickets")))));?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sections_injection']) ? $_smarty_tpl->tpl_vars['sections_injection']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['new_section']->value;
$_smarty_tpl->_assignInScope('sections_injection', $_tmp_array);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id'] && $_smarty_tpl->tpl_vars['settings']->value['Upgrade_center']['license_number']) {?>
                <?php $_smarty_tpl->_assignInScope('new_section', array('id'=>$_smarty_tpl->tpl_vars['new_section_default']->value['id'],'name'=>$_smarty_tpl->tpl_vars['new_section_default']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['new_section_default']->value['icon'],'class'=>"help-center-section--empty-state",'blocks'=>array(array('id'=>"subscription_expired",'image_url'=>"design/backend/media/images/addons/help_center/helpdesk.svg",'name'=>$_smarty_tpl->__("help_center.customer_care.service_unavailable"),'description'=>$_smarty_tpl->__("help_center.customer_care.service_unavailable_description"),'action_url'=>((string)$_smarty_tpl->tpl_vars['service_url']->value)."customer-care-subscription.html",'action_name'=>$_smarty_tpl->__("help_center.customer_care.prolong_subscription")))));?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sections_injection']) ? $_smarty_tpl->tpl_vars['sections_injection']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['new_section']->value;
$_smarty_tpl->_assignInScope('sections_injection', $_tmp_array);?>
    <?php } elseif (!$_smarty_tpl->tpl_vars['auth']->value['helpdesk_user_id']) {?>
                <?php $_smarty_tpl->_assignInScope('new_section', array('id'=>$_smarty_tpl->tpl_vars['new_section_default']->value['id'],'name'=>$_smarty_tpl->tpl_vars['new_section_default']->value['name'],'icon'=>$_smarty_tpl->tpl_vars['new_section_default']->value['icon'],'class'=>"help-center-section--empty-state",'blocks'=>array(array('id'=>"no_auth_state",'image_url'=>"design/backend/media/images/addons/help_center/helpdesk.svg",'name'=>$_smarty_tpl->__("help_center.customer_care"),'description'=>$_smarty_tpl->__("help_center.customer_care.sign_in_text"),'action_url'=>fn_url($_smarty_tpl->tpl_vars['app']->value["helpdesk.connect_url"]),'action_name'=>$_smarty_tpl->__("helpdesk_account.sign_in")))));?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['sections_injection']) ? $_smarty_tpl->tpl_vars['sections_injection']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array[] = $_smarty_tpl->tpl_vars['new_section']->value;
$_smarty_tpl->_assignInScope('sections_injection', $_tmp_array);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php echo '<script'; ?>
 type="text/template" data-ca-help-center="sectionsInjection" data-no-defer="true" data-no-execute="§"><?php echo json_encode($_smarty_tpl->tpl_vars['sections_injection']->value);
echo '</script'; ?>
>
<?php }
}
