<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:18
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\scripts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b432df98c9_50562721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ea50a7c68f635f9f7841cad962e400de3790e8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\scripts.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b432df98c9_50562721 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.scripts.php','function'=>'smarty_block_scripts',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('cannot_buy','no_products_selected','error_no_items_selected','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','notice','warning','error','empty','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_phone_mask','error_validator_phone_mask_with_phone','error_validator_phone_phone_number_with_country_selection','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','placing_order','order_was_not_placed','file_browser','browse','more','text_no_products_found','cookie_is_disabled','insert_image','image_url','loading','text_editing','save','cancel','cannot_buy','no_products_selected','error_no_items_selected','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','notice','warning','error','empty','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_phone_mask','error_validator_phone_mask_with_phone','error_validator_phone_phone_number_with_country_selection','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','placing_order','order_was_not_placed','file_browser','browse','more','text_no_products_found','cookie_is_disabled','insert_image','image_url','loading','text_editing','save','cancel'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('jquery_version', "3.5.1");
$_smarty_tpl->_assignInScope('jquery_migrate_version', "3.3.0");?>

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {?>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['jquery_version']->value, ENT_QUOTES, 'UTF-8');?>
.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
            data-no-defer
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 data-no-defer>
        if (!window.jQuery) {
            document.write('<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-".((string)$_smarty_tpl->tpl_vars['jquery_version']->value).".min.js",'no-defer'=>true,'escape'=>true),$_smarty_tpl);?>
');
        }
    <?php echo '</script'; ?>
>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('scripts', array());
$_block_repeat=true;
echo smarty_block_scripts(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {?>
        <?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-".((string)$_smarty_tpl->tpl_vars['jquery_version']->value).".min.js"),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js",'no-defer'=>true),$_smarty_tpl);?>


    <?php echo smarty_function_script(array('src'=>"js/lib/modernizr/modernizr.custom.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/core.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/ajax.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/history.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/lib/autonumeric/autoNumeric.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/tools/tooltip.min.js"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/editors/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor']).".editor.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/responsive.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/autosize/jquery.autosize.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/live_editor_mode.js"),$_smarty_tpl);?>

<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {

    _.tr({
        cannot_buy: '<?php echo strtr((string)$_smarty_tpl->__("cannot_buy"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        no_products_selected: '<?php echo strtr((string)$_smarty_tpl->__("no_products_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_no_items_selected: '<?php echo strtr((string)$_smarty_tpl->__("error_no_items_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
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
        notice: '<?php echo strtr((string)$_smarty_tpl->__("notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        warning: '<?php echo strtr((string)$_smarty_tpl->__("warning"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error: '<?php echo strtr((string)$_smarty_tpl->__("error"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        empty: '<?php echo strtr((string)$_smarty_tpl->__("empty"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
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
        text_page_loading: '<?php echo strtr((string)$_smarty_tpl->__("text_page_loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_ajax: '<?php echo strtr((string)$_smarty_tpl->__("error_ajax"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_changes_not_saved: '<?php echo strtr((string)$_smarty_tpl->__("text_changes_not_saved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_data_changed: '<?php echo strtr((string)$_smarty_tpl->__("text_data_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        placing_order: '<?php echo strtr((string)$_smarty_tpl->__("placing_order"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        order_was_not_placed: '<?php echo strtr((string)$_smarty_tpl->__("order_was_not_placed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        file_browser: '<?php echo strtr((string)$_smarty_tpl->__("file_browser"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        browse: '<?php echo strtr((string)$_smarty_tpl->__("browse"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        more: '<?php echo strtr((string)$_smarty_tpl->__("more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_no_products_found: '<?php echo strtr((string)$_smarty_tpl->__("text_no_products_found"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        cookie_is_disabled: '<?php echo strtr((string)$_smarty_tpl->__("cookie_is_disabled"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        insert_image: '<?php echo strtr((string)$_smarty_tpl->__("insert_image"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        image_url: '<?php echo strtr((string)$_smarty_tpl->__("image_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        loading: '<?php echo strtr((string)$_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',

        text_editing_raw: '<?php echo strtr((string)$_smarty_tpl->__("text_editing",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        save_raw: '<?php echo strtr((string)$_smarty_tpl->__("save",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        cancel_raw: '<?php echo strtr((string)$_smarty_tpl->__("cancel",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });

    $.extend(_, {
        index_script: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['customer_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        changes_warning: /*'<?php echo strtr((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'*/'N',
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
        regexp: [],
        current_url: '<?php echo strtr((string)fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        current_host: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['current_host'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        init_context: '<?php echo strtr((string)$_REQUEST['init_context'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        phone_validation_mode: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'], ENT_QUOTES, 'UTF-8');?>
',
        hash_of_available_countries: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_of_available_countries']->value, ENT_QUOTES, 'UTF-8');?>
',
        hash_of_phone_masks: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_of_phone_masks']->value, ENT_QUOTES, 'UTF-8');?>
',
        deferred_scripts: []
    });

    <?php if ($_smarty_tpl->tpl_vars['live_editor_objects']->value) {?>
        $.extend(_, {
            live_editor_mode: true,
            live_editor_objects: <?php echo json_encode($_smarty_tpl->tpl_vars['live_editor_objects']->value);?>

        });
    <?php }?>

    <?php if (!$_REQUEST['init_context']) {?>

        $(document).ready(function(){
            turnOffPhoneSafariAutofill();

            $.runCart('C');
        });

        $.ceEvent('on', 'ce.commoninit', function () {
            turnOffPhoneSafariAutofill();
        });

        function turnOffPhoneSafariAutofill () {
            if ($.browser.safari) {
                const searchFakeSpan = '<span data-ca-validator="ignore" style="position: absolute; overflow: hidden; width: 1px; height: 1px;">search</span>'
'<span data-ca-validator="ignore" style="position: absolute; overflow: hidden; width: 1px; height: 1px;">search</span>';
                $('.autofill-off').each(function() {
                    const $field = $(this);
                    if ($field.data('caAutofillIsSet')) {
                        return;
                    }
                    $('[for="' + $field.attr('id') + '"').append(searchFakeSpan);
                    $field.data('caAutofillIsSet', true)
                })

                $('[x-autocompletetype="tel"]').removeAttr('x-autocompletetype');
                var $maskPhoneLabels =  $('.cm-mask-phone-label:not(.autofill-on)');
                if (!$maskPhoneLabels.length || $('[data-ca-validator="ignore"]', $maskPhoneLabels).length) {
                    return;
                }
                $maskPhoneLabels.append(searchFakeSpan);
            }
        }

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['anti_csrf']) {?>
        // CSRF form protection key
        _.security_hash = '<?php echo htmlspecialchars((string) fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
';
    <?php }?>
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection") {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/libphonenumber-js/libphonenumber-max.js"),$_smarty_tpl);?>

<?php }
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/phone_mask.js"),$_smarty_tpl);?>



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
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scripts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scripts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('jquery_version', "3.5.1");
$_smarty_tpl->_assignInScope('jquery_migrate_version', "3.3.0");?>

<?php if (!$_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {?>
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['jquery_version']->value, ENT_QUOTES, 'UTF-8');?>
.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"
            data-no-defer
    ><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 data-no-defer>
        if (!window.jQuery) {
            document.write('<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-".((string)$_smarty_tpl->tpl_vars['jquery_version']->value).".min.js",'no-defer'=>true,'escape'=>true),$_smarty_tpl);?>
');
        }
    <?php echo '</script'; ?>
>
<?php }?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('scripts', array());
$_block_repeat=true;
echo smarty_block_scripts(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['dev_js']) {?>
        <?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery-".((string)$_smarty_tpl->tpl_vars['jquery_version']->value).".min.js"),$_smarty_tpl);?>

    <?php }?>

    <?php echo smarty_function_script(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js",'no-defer'=>true),$_smarty_tpl);?>


    <?php echo smarty_function_script(array('src'=>"js/lib/modernizr/modernizr.custom.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/core.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/ajax.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/history.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/lib/autonumeric/autoNumeric.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"),$_smarty_tpl);?>


<?php if (!$_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/tools/tooltip.min.js"),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/editors/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor']).".editor.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/responsive.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['live_editor']) {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/autosize/jquery.autosize.js"),$_smarty_tpl);?>

    <?php echo smarty_function_script(array('src'=>"js/tygh/live_editor_mode.js"),$_smarty_tpl);?>

<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {

    _.tr({
        cannot_buy: '<?php echo strtr((string)$_smarty_tpl->__("cannot_buy"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        no_products_selected: '<?php echo strtr((string)$_smarty_tpl->__("no_products_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_no_items_selected: '<?php echo strtr((string)$_smarty_tpl->__("error_no_items_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
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
        notice: '<?php echo strtr((string)$_smarty_tpl->__("notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        warning: '<?php echo strtr((string)$_smarty_tpl->__("warning"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error: '<?php echo strtr((string)$_smarty_tpl->__("error"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        empty: '<?php echo strtr((string)$_smarty_tpl->__("empty"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
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
        text_page_loading: '<?php echo strtr((string)$_smarty_tpl->__("text_page_loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        error_ajax: '<?php echo strtr((string)$_smarty_tpl->__("error_ajax"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_changes_not_saved: '<?php echo strtr((string)$_smarty_tpl->__("text_changes_not_saved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_data_changed: '<?php echo strtr((string)$_smarty_tpl->__("text_data_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        placing_order: '<?php echo strtr((string)$_smarty_tpl->__("placing_order"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        order_was_not_placed: '<?php echo strtr((string)$_smarty_tpl->__("order_was_not_placed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        file_browser: '<?php echo strtr((string)$_smarty_tpl->__("file_browser"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        browse: '<?php echo strtr((string)$_smarty_tpl->__("browse"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        more: '<?php echo strtr((string)$_smarty_tpl->__("more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        text_no_products_found: '<?php echo strtr((string)$_smarty_tpl->__("text_no_products_found"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        cookie_is_disabled: '<?php echo strtr((string)$_smarty_tpl->__("cookie_is_disabled"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        insert_image: '<?php echo strtr((string)$_smarty_tpl->__("insert_image"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        image_url: '<?php echo strtr((string)$_smarty_tpl->__("image_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        loading: '<?php echo strtr((string)$_smarty_tpl->__("loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',

        text_editing_raw: '<?php echo strtr((string)$_smarty_tpl->__("text_editing",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        save_raw: '<?php echo strtr((string)$_smarty_tpl->__("save",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        cancel_raw: '<?php echo strtr((string)$_smarty_tpl->__("cancel",array('skip_live_editor'=>true)), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'
    });

    $.extend(_, {
        index_script: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['customer_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        changes_warning: /*'<?php echo strtr((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
'*/'N',
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
        regexp: [],
        current_url: '<?php echo strtr((string)fn_url($_smarty_tpl->tpl_vars['config']->value['current_url']), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        current_host: '<?php echo strtr((string)$_smarty_tpl->tpl_vars['config']->value['current_host'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        init_context: '<?php echo strtr((string)$_REQUEST['init_context'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/", "<!--" => "<\!--", "<s" => "<\s", "<S" => "<\S" ));?>
',
        phone_validation_mode: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'], ENT_QUOTES, 'UTF-8');?>
',
        hash_of_available_countries: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_of_available_countries']->value, ENT_QUOTES, 'UTF-8');?>
',
        hash_of_phone_masks: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hash_of_phone_masks']->value, ENT_QUOTES, 'UTF-8');?>
',
        deferred_scripts: []
    });

    <?php if ($_smarty_tpl->tpl_vars['live_editor_objects']->value) {?>
        $.extend(_, {
            live_editor_mode: true,
            live_editor_objects: <?php echo json_encode($_smarty_tpl->tpl_vars['live_editor_objects']->value);?>

        });
    <?php }?>

    <?php if (!$_REQUEST['init_context']) {?>

        $(document).ready(function(){
            turnOffPhoneSafariAutofill();

            $.runCart('C');
        });

        $.ceEvent('on', 'ce.commoninit', function () {
            turnOffPhoneSafariAutofill();
        });

        function turnOffPhoneSafariAutofill () {
            if ($.browser.safari) {
                const searchFakeSpan = '<span data-ca-validator="ignore" style="position: absolute; overflow: hidden; width: 1px; height: 1px;">search</span>'
'<span data-ca-validator="ignore" style="position: absolute; overflow: hidden; width: 1px; height: 1px;">search</span>';
                $('.autofill-off').each(function() {
                    const $field = $(this);
                    if ($field.data('caAutofillIsSet')) {
                        return;
                    }
                    $('[for="' + $field.attr('id') + '"').append(searchFakeSpan);
                    $field.data('caAutofillIsSet', true)
                })

                $('[x-autocompletetype="tel"]').removeAttr('x-autocompletetype');
                var $maskPhoneLabels =  $('.cm-mask-phone-label:not(.autofill-on)');
                if (!$maskPhoneLabels.length || $('[data-ca-validator="ignore"]', $maskPhoneLabels).length) {
                    return;
                }
                $maskPhoneLabels.append(searchFakeSpan);
            }
        }

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['anti_csrf']) {?>
        // CSRF form protection key
        _.security_hash = '<?php echo htmlspecialchars((string) fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
';
    <?php }?>
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>

<?php echo smarty_function_script(array('src'=>"js/lib/maskedinput/jquery.maskedinput.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/lib/inputmask/jquery.inputmask.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jquery-bind-first/jquery.bind-first-0.2.3.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/inputmask-multi/jquery.inputmask-multi.js"),$_smarty_tpl);?>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['phone_validation_mode'] === "phone_number_with_country_selection") {?>
    <?php echo smarty_function_script(array('src'=>"js/lib/libphonenumber-js/libphonenumber-max.js"),$_smarty_tpl);?>

<?php }
echo smarty_function_script(array('src'=>"js/lib/owlcarousel/owl.carousel.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/phone_mask.js"),$_smarty_tpl);?>



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
}
