<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:37
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\onboarding_guide\components\progress.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b445756fc7_47436407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '180314d9607b1dff3a73b3985a6b7b20cc7d03c9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\onboarding_guide\\components\\progress.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b445756fc7_47436407 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.completed_steps_progress'));
$_smarty_tpl->_assignInScope('total', $_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['total_steps']);
$_smarty_tpl->_assignInScope('completed', $_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['completed_steps']);
$_smarty_tpl->_assignInScope('percentage', $_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['percentage']);?>

<div class="onboarding_section__progress" id="og-progress-container">
    <div class="onboarding_section__progress_header">
        <span class="onboarding_section__progress_text" id="og-progress-text">
            <?php echo $_smarty_tpl->__("onboarding_guide.completed_steps_progress",array("[completed]"=>$_smarty_tpl->tpl_vars['completed']->value,"[total]"=>$_smarty_tpl->tpl_vars['total']->value));?>

        </span>
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"onboarding_guide:progress_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"onboarding_guide:progress_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tools_list", null, null);?>
            <li>
                <a href="#" id="og-dismiss-button"><?php echo $_smarty_tpl->__('onboarding_guide.dismiss');?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['onboarding_guide_progress']->value['completed_steps']) {?>
                <li>
                    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.restart"), ENT_QUOTES, 'UTF-8');?>
" id="og-reset-button">
                        <?php echo $_smarty_tpl->__('onboarding_guide.reset');?>

                    </a>
                </li>
            <?php }?>
        </li>
        <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'dropdown', array('content'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'tools_list'),'icon'=>"icon-ellipsis-horizontal",'no_caret'=>true,'class_toggle'=>"btn-link muted",'class'=>"more-btn"), true);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"onboarding_guide:progress_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </div>
    <div class="onboarding_section__progress_bar progress">
        <div class="onboarding_section__progress_bar_line bar bar-success"
            id="og-progressbar"
            style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['percentage']->value, ENT_QUOTES, 'UTF-8');?>
%"></div>
    </div>
<!--og-progress-container--></div><?php }
}
