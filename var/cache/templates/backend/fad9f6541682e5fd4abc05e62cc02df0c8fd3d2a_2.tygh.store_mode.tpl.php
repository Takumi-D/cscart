<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:31
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\settings\store_mode.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43f917363_67027353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fad9f6541682e5fd4abc05e62cc02df0c8fd3d2a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\settings\\store_mode.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/product_release_info.tpl' => 1,
  ),
),false)) {
function content_66c4b43f917363_67027353 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('store_mode','choose_your_store_mode','full','product_state_description.','license_number','please_enter_license_here','licensed_product','trial','trial_mode_ult_disabled','trial_mode_mve_disabled','text_store_mode_trial','select'));
if ($_smarty_tpl->tpl_vars['show']->value) {?>
    <a id="store_mode" class="cm-dialog-opener cm-dialog-auto-size hidden cm-dialog-non-closable" data-ca-target-id="store_mode_dialog"></a>
<?php }?>

<div class="hidden" title="<?php echo $_smarty_tpl->__("store_mode");?>
" id="store_mode_dialog">
    <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?>
        <div class="alert alert-error notification-content">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['store_mode_errors']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
            <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['message']->value['title'], ENT_QUOTES, 'UTF-8');?>
:</strong> <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>
<br>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>

    <form name="store_mode_form" action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
    <input type="hidden" name="redirect_url" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['config']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">

        <span class="choice-text"><?php echo $_smarty_tpl->__("choose_your_store_mode");?>
:</span>

            <ul class="store-mode inline">
                <li class="clickable <?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?> item<?php if ($_smarty_tpl->tpl_vars['store_mode']->value != "trial") {?> active<?php }?>">
                    <label for="store_mode_radio_full" class="radio">
                        <input type="radio" id="store_mode_radio_full" name="store_mode" value="full" <?php if ($_smarty_tpl->tpl_vars['store_mode']->value != "trial") {?>checked="checked"<?php }?> class="cm-switch-class"><?php echo $_smarty_tpl->__("full");?>
</label>
                    <div>
                        <?php $_smarty_tpl->_assignInScope('description_suffix', $_smarty_tpl->tpl_vars['product_state_suffix']->value);?>
                        <?php if ($_smarty_tpl->tpl_vars['store_mode']->value == "trial") {?>
                            <?php $_smarty_tpl->_assignInScope('description_suffix', fn_get_product_state_suffix("new"));?>
                        <?php }?>
                        <?php echo $_smarty_tpl->__("product_state_description.".((string)$_smarty_tpl->tpl_vars['description_suffix']->value),array("[product]"=>(defined('PRODUCT_NAME') ? constant('PRODUCT_NAME') : null),"[standard_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['standard_license_url'],"[ultimate_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['ultimate_license_url'],"[mve_plus_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['mve_plus_license_url'],"[mve_ultimate_license_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['mve_ultimate_license_url']));?>

                    </div>
                    <label><?php echo $_smarty_tpl->__("license_number");?>
:</label>
                    <input type="text" name="license_number" class="<?php if ($_smarty_tpl->tpl_vars['store_mode_errors']->value) {?> type-error<?php }?>" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['store_mode_license']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("please_enter_license_here");?>
">
                    <?php if ($_smarty_tpl->tpl_vars['store_mode_license']->value && !$_smarty_tpl->tpl_vars['store_mode_errors']->value && $_smarty_tpl->tpl_vars['store_mode']->value != "trial") {?>
                        <p>
                            <?php echo $_smarty_tpl->__("licensed_product");?>
: <?php echo htmlspecialchars((string) fn_get_licensed_mode_name($_smarty_tpl->tpl_vars['store_mode']->value), ENT_QUOTES, 'UTF-8');?>

                        </p>
                    <?php }?>
                </li>

                <li class="<?php if ($_smarty_tpl->tpl_vars['store_mode']->value == "trial") {?>active<?php } elseif ($_smarty_tpl->tpl_vars['store_mode']->value != "new") {?>disabled<?php }?>">
                    <label for="store_mode_radio_trial" class="radio">
                        <input type="radio" id="store_mode_radio_trial" name="store_mode" value="trial" <?php if ($_smarty_tpl->tpl_vars['store_mode']->value == "trial") {?>checked="checked"<?php }?> <?php if ($_smarty_tpl->tpl_vars['store_mode']->value != "new" && $_smarty_tpl->tpl_vars['store_mode']->value != "trial") {?>disabled="disabled"<?php }?>><?php echo $_smarty_tpl->__("trial");?>
</label>
                    <?php if ($_smarty_tpl->tpl_vars['store_mode']->value != "new" && $_smarty_tpl->tpl_vars['store_mode']->value != "trial") {?>
                        <?php if (fn_allowed_for("ULTIMATE")) {?>
                            <div><?php echo $_smarty_tpl->__("trial_mode_ult_disabled");?>
</div>
                        <?php } else { ?>
                            <div><?php echo $_smarty_tpl->__("trial_mode_mve_disabled");?>
</div>
                        <?php }?>
                    <?php } else { ?>
                        <div><?php echo $_smarty_tpl->__("text_store_mode_trial",array("[product_buy_url]"=>$_smarty_tpl->tpl_vars['config']->value['resources']['product_buy_url']));?>
</div>
                    <?php }?>
                </li>
            </ul>

        <div class="buttons-container">
            <span class="pull-left">
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/product_release_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </span>

            <input name="dispatch[settings.change_store_mode]" type="submit" value="<?php echo $_smarty_tpl->__("select");?>
" class="btn btn-primary">
        </div>
    </form>
</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
Tygh.$(document).ready(function()<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>

    <?php if ($_smarty_tpl->tpl_vars['show']->value) {?>
        Tygh.$('#store_mode').trigger('click');
    <?php }?>

    Tygh.$(document).on('click', '#store_mode_dialog li:not(.disabled)', function(){
        $('#store_mode_dialog li').removeClass('active');
        $(this).addClass('active').find('input[type="radio"]').prop('checked', true);
    });
<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
