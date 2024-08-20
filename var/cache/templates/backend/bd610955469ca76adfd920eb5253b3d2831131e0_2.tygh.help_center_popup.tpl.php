<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:27
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\component\help_center_popup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43b6055d5_57003465',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd610955469ca76adfd920eb5253b3d2831131e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\component\\help_center_popup.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/views/help_center/manage.tpl' => 1,
  ),
),false)) {
function content_66c4b43b6055d5_57003465 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('help_center.growth_center','help_center.growth_center'));
$_smarty_tpl->_assignInScope('help_center_counter', (($tmp = $_smarty_tpl->tpl_vars['help_center_counter']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp));?>

<button type="button"
    class="cm-dialog-opener top-bar__btn help-center-popup__btn"
    id="opener_help_center_popup" 
    title="<?php echo $_smarty_tpl->__("help_center.growth_center");?>
"
    data-ca-target-id="content_help_center_popup"
    data-ca-max-width="1120"
    data-ca-help-center="popupBtn"
>
    <span class="top-bar__btn-inner">
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"question",'class'=>"help-center-popup__icon",'title'=>$_smarty_tpl->__("help_center.growth_center"),'data'=>array("data-ca-help-center-counter"=>$_smarty_tpl->tpl_vars['help_center_counter']->value)),$_smarty_tpl);?>

    </span>
</button>
<div class="hidden help-center-popup" data-ca-help-center="popupContent" id="content_help_center_popup">
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/views/help_center/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('in_popup'=>true), 0, false);
?>
</div>
<?php }
}
