<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:32
  from 'C:\xampp\htdocs\cscart\design\backend\templates\common\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b440072640_35964513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16c3371354d8a864847b04ad4ae970f787a3fd04' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\scripts.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b440072640_35964513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.scripts.php','function'=>'smarty_block_scripts',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.to_json.php','function'=>'smarty_modifier_to_json',),5=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('no_data','text_nothing_found','bulk_edit.unable_to_delete_all_categories','cannot_buy','no_products_selected','error_no_items_selected','text_select_vendor','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','loading','notice','warning','error','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_phone_mask','error_validator_phone_mask_with_phone','error_validator_phone_phone_number_with_country_selection','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','error_validator_color','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','text_block_trial_notice','text_expired_license','file_browser','editing_block','editing_grid','adding_grid','adding_block_to_grid','manage_blocks','add_block','text_position_updating','more','browse','enter_new_lang_code','no_image','cookie_is_disabled','insert_image','image_url','manage','file_uploading_in_progress_please_wait','please_copy_api_key','select_block','block_manager'));
$_smarty_tpl->_assignInScope('jquery_version', "3.5.1");
$_smarty_tpl->_assignInScope('jquery_migrate_version', "3.3.0");
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('scripts', array());
$_block_repeat=true;
echo smarty_block_scripts(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-".((string)$_smarty_tpl->tpl_vars['jquery_version']->value).".min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-migrate-".((string)$_smarty_tpl->tpl_vars['jquery_migrate_version']->value).".min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/modernizr/modernizr.custom.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/core.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/history.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/twitterbootstrap/bootstrap.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/autonumeric/autoNumeric.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/tools/tooltip.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/bootstrap_switch/js/bootstrapSwitch.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/companies.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/editors/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor']).".editor.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/ajax.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/components/dropdown.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/quick_menu.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/storefront_switcher.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/company_switcher.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/buttons/update_for_all.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/bulkedit.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/tap.plugin.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/tap_multiple_selection.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/mobile_menu.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/backend/text_toggle.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection") {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/libphonenumber-js/libphonenumber-max.js"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/phone_mask.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/autocomplete.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/backend/notifications_center_background.js"),$_smarty_tpl);?>


<?php if ((defined('AREA') ? constant('AREA') : null) !== smarty_modifier_enum("SiteArea::STOREFRONT") && $_smarty_tpl->tpl_vars['backoffice_color_scheme']->value === smarty_modifier_enum("BackofficeColorSchemeVariants::SYSTEM")) {?>
    <?php echo smarty_function_script(array('src'=>"js/tygh/backend/system_color_scheme_identifier.js"),$_smarty_tpl);?>

<?php }?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "promo_data", null, null);?>
    <div class="commercial-promotion-text">
        <p><?php echo $_smarty_tpl->tpl_vars['addon_permissions_text']->value['text'];?>
</p>
    <div>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
(function(_, $) {
    _.tr({
        no_data: '<?php echo strtr((string)$_smarty_tpl->__("no_data"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        nothing_found: '<?php echo strtr((string)$_smarty_tpl->__("text_nothing_found"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        unable_to_delete_all_categories: '<?php echo strtr((string)$_smarty_tpl->__("bulk_edit.unable_to_delete_all_categories"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        cannot_buy: '<?php echo strtr((string)$_smarty_tpl->__("cannot_buy"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        no_products_selected: '<?php echo strtr((string)$_smarty_tpl->__("no_products_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_no_items_selected: '<?php echo strtr((string)$_smarty_tpl->__("error_no_items_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_select_vendor: '<?php echo strtr((string)$_smarty_tpl->__("text_select_vendor"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        delete_confirmation: '<?php echo strtr((string)$_smarty_tpl->__("delete_confirmation"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_out_of_stock: '<?php echo strtr((string)$_smarty_tpl->__("text_out_of_stock"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        items: '<?php echo strtr((string)$_smarty_tpl->__("items"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_required_group_product: '<?php echo strtr((string)$_smarty_tpl->__("text_required_group_product"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        save: '<?php echo strtr((string)$_smarty_tpl->__("save"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        close: '<?php echo strtr((string)$_smarty_tpl->__("close"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        loading: '<?php echo strtr((string)$_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        notice: '<?php echo strtr((string)$_smarty_tpl->__("notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        warning: '<?php echo strtr((string)$_smarty_tpl->__("warning"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error: '<?php echo strtr((string)$_smarty_tpl->__("error"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_are_you_sure_to_proceed: '<?php echo strtr((string)$_smarty_tpl->__("text_are_you_sure_to_proceed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_invalid_url: '<?php echo strtr((string)$_smarty_tpl->__("text_invalid_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_email: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_email"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_phone: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_phone"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_phone_mask: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_phone_mask"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_phone_mask_with_phone: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_phone_mask_with_phone"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_phone_phone_number_with_country_selection: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_phone_phone_number_with_country_selection"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_integer: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_integer"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_multiple: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_multiple"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_password: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_password"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_required: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_required"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_zipcode: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_zipcode"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_message: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_validator_color: '<?php echo strtr((string)$_smarty_tpl->__("error_validator_color"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_page_loading: '<?php echo strtr((string)$_smarty_tpl->__("text_page_loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_ajax: '<?php echo strtr((string)$_smarty_tpl->__("error_ajax"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_changes_not_saved: '<?php echo strtr((string)$_smarty_tpl->__("text_changes_not_saved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_data_changed: '<?php echo strtr((string)$_smarty_tpl->__("text_data_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        trial_notice: '<?php echo strtr((string)$_smarty_tpl->__("text_block_trial_notice",array("[href]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['license_url'])), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        expired_license: '<?php echo strtr((string)$_smarty_tpl->__("text_expired_license",array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null))), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        file_browser: '<?php echo strtr((string)$_smarty_tpl->__("file_browser"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        editing_block: '<?php echo strtr((string)$_smarty_tpl->__("editing_block"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        editing_grid: '<?php echo strtr((string)$_smarty_tpl->__("editing_grid"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        adding_grid: '<?php echo strtr((string)$_smarty_tpl->__("adding_grid"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        adding_block_to_grid: '<?php echo strtr((string)$_smarty_tpl->__("adding_block_to_grid"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        manage_blocks: '<?php echo strtr((string)$_smarty_tpl->__("manage_blocks"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        add_block: '<?php echo strtr((string)$_smarty_tpl->__("add_block"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_position_updating: '<?php echo strtr((string)$_smarty_tpl->__("text_position_updating"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        more: '<?php echo strtr((string)$_smarty_tpl->__("more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        browse: '<?php echo strtr((string)$_smarty_tpl->__("browse"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        enter_new_lang_code: '<?php echo strtr((string)$_smarty_tpl->__("enter_new_lang_code"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        no_image: '<?php echo strtr((string)$_smarty_tpl->__("no_image"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        cookie_is_disabled: '<?php echo strtr((string)$_smarty_tpl->__("cookie_is_disabled"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        insert_image: '<?php echo strtr((string)$_smarty_tpl->__("insert_image"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        image_url: '<?php echo strtr((string)$_smarty_tpl->__("image_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        manage: '<?php echo strtr((string)$_smarty_tpl->__("manage"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        file_uploading_in_progress_please_wait: '<?php echo strtr((string)$_smarty_tpl->__("file_uploading_in_progress_please_wait"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        please_copy_api_key: '<?php echo strtr((string)$_smarty_tpl->__("please_copy_api_key"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        select_block: '<?php echo strtr((string)$_smarty_tpl->__("select_block"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        block_manager: '<?php echo strtr((string)$_smarty_tpl->__("block_manager"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });

    $.extend(_, {
        index_script: '<?php if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) == 'vendor') {
echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['vendor_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));
} else {
echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['admin_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));
}?>',
        changes_warning: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        currencies: {
            'primary': {
                'decimals_separator': '<?php echo strtr((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                'thousands_separator': '<?php echo strtr((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                'decimals': '<?php echo strtr((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
            },
            'secondary': {
                'decimals_separator': '<?php echo strtr((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                'thousands_separator': '<?php echo strtr((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                'decimals': '<?php echo strtr((string)$_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
                'coefficient': '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'], ENT_QUOTES, 'UTF-8');?>
'
            }
        },
        default_editor: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor'], ENT_QUOTES, 'UTF-8');?>
',
        default_previewer: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer'], ENT_QUOTES, 'UTF-8');?>
',
        current_path: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['current_path'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        current_location: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['current_location'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        images_dir: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
',
        notice_displaying_time: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
        cart_language: '<?php echo htmlspecialchars((string) (defined('CART_LANGUAGE') ? constant('CART_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
        language_direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
        default_language: '<?php echo htmlspecialchars((string) (defined('DEFAULT_LANGUAGE') ? constant('DEFAULT_LANGUAGE') : null), ENT_QUOTES, 'UTF-8');?>
',
        default_country: '<?php echo htmlspecialchars((string) strtr((string)$_smarty_tpl->tpl_vars['settings']->value['Checkout']['default_country'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" )), ENT_QUOTES, 'UTF-8');?>
',
        cart_prices_w_taxes: <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes'] == 'Y')) {?>true<?php } else { ?>false<?php }?>,
        current_url: '<?php echo strtr((string)fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['anti_csrf']) {?>
        security_hash: '<?php echo htmlspecialchars((string) fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
', // CSRF form protection key
        <?php }?>
        promo_data: {
            title: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['addon_permissions_text']->value['title'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
            text: '<?php echo strtr((string)$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'promo_data'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
        },
        phone_validation_mode: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'], ENT_QUOTES, 'UTF-8');?>
',
        hash_of_available_countries: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_of_available_countries']->value, ENT_QUOTES, 'UTF-8');?>
',
        product_version: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_version']->value, ENT_QUOTES, 'UTF-8');?>
',
        product_edition: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_edition']->value, ENT_QUOTES, 'UTF-8');?>
',
        current_dispatch: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_dispatch']->value, ENT_QUOTES, 'UTF-8');?>
',
        product_build: '<?php echo htmlspecialchars((string) (defined('PRODUCT_BUILD') ? constant('PRODUCT_BUILD') : null), ENT_QUOTES, 'UTF-8');?>
',
        current_host: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_host'], ENT_QUOTES, 'UTF-8');?>
',
        allowed_image_extensions: <?php echo smarty_modifier_to_json($_smarty_tpl->tpl_vars['allowed_supported_image_extensions']->value);?>
,
        hash_of_phone_masks: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_of_phone_masks']->value, ENT_QUOTES, 'UTF-8');?>
',
    });

    $.extend(_, {
        fileManagerOptions: {
            rememberLastDir: true,
            useBrowserHistory: true,
            resizable: false,
            lang: $.ceFileUploader('getAvailableLanguage', _.cart_language),
            ui: ['toolbar', 'tree', 'path', 'stat'],
            uiOptions: {
                toolbar: [
                    ['back', 'forward'],
                    ['mkdir', 'mkfile', 'upload'],
                    ['download'],
                    ['info'],
                    ['quicklook'],
                    ['copy', 'cut', 'paste'],
                    ['rm', 'rename'],
                    ['edit'],
                    ['extract', 'archive'],
                    ['search'],
                    ['view']
                ],
                toolbarExtra: {
                    displayTextLabel: 'none'
                }
            },
            contextmenu: {
                files: [
                    'getfile', '|',
                    'open', 'quicklook', '|',
                    'download', '|',
                    'copy', 'cut', 'paste', 'duplicate', '|',
                    'rm', '|',
                    'edit', 'rename', '|',
                    'archive', 'extract', '|',
                    'info'
                ],
                navbar: [
                    'open', '|',
                    'copy', 'cut', 'paste', 'duplicate', '|',
                    'rm', '|',
                    'info'
                ],
                cwd: [
                    'reload', 'back', '|',
                    'upload', 'mkdir', 'mkfile', 'paste', '|',
                    'sort', '|',
                    'info'
                ],
            },
            requestType: 'post',
            commands : [
            	'archive', 'back', 'chmod', 'colwidth', 'copy', 'cut', 'download', 'duplicate', 'edit', 'extract',
            	'forward', 'fullscreen', 'getfile', 'help', 'home', 'info', 'mkdir', 'mkfile',
            	'open', 'opendir', 'paste', 'quicklook', 'reload', 'rename', 'restore', 'rm',
            	'search', 'sort', 'up', 'upload', 'view'
            ],
            commandsOptions: {
                info: {
                    showHashAlgorisms: [],
                    showHashOpts: []
                }
            }
        }
    });

    $(document).ready(function(){
        $.runCart('A');
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:scripts"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:scripts"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:scripts"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>


<?php $_block_repeat=false;
echo smarty_block_scripts(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
