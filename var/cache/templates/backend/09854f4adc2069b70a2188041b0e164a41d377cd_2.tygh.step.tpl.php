<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:37
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\onboarding_guide\components\step.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b445988ef2_97637580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09854f4adc2069b70a2188041b0e164a41d377cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\onboarding_guide\\components\\step.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b445988ef2_97637580 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
$_smarty_tpl->_assignInScope('is_open', $_smarty_tpl->tpl_vars['step']->value['status'] === smarty_modifier_enum("Addons\OnboardingGuide\StepStatusEnum::OPEN"));
$_smarty_tpl->_assignInScope('is_completed', $_smarty_tpl->tpl_vars['step']->value['status'] === smarty_modifier_enum("Addons\OnboardingGuide\StepStatusEnum::COMPLETED"));
$_smarty_tpl->_assignInScope('data', fn_onboarding_guide_load_step_data($_smarty_tpl->tpl_vars['step_id']->value));?>

<div data-og-accordion="item" class="og-step onboarding_accordion__item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_open']->value ? "onboarding_accordion__item--active" : '', ENT_QUOTES, 'UTF-8');?>
" data-step-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['step_id']->value, ENT_QUOTES, 'UTF-8');?>
">
    <div class="onboarding_accordion__item-col">
        <div class="cm-tooltip" data-og-status-tooltip-step="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['step_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php ob_start();
echo $_smarty_tpl->__('onboarding_guide.step_close');
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->__('onboarding_guide.step_complete');
$_prefixVariable2 = ob_get_clean();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_completed']->value ? $_prefixVariable1 : $_prefixVariable2, ENT_QUOTES, 'UTF-8');?>
">
            <div class="onboarding_accordion__item_checkbox">
                <label>
                    <input class="originalCheckbox og-step-status" type="checkbox" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_completed']->value ? 'checked' : '', ENT_QUOTES, 'UTF-8');?>
/>
                    <div class="customCheckbox">
                        <span class="customCheckbox_text"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['step']->value['number'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"ok",'class'=>"customCheckbox_icon customCheckbox_icon--ok"),$_smarty_tpl);?>

                        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"remove",'class'=>"customCheckbox_icon customCheckbox_icon--remove"),$_smarty_tpl);?>

                    </div>
                </label>
            </div>
        </div>
    </div>
    <div class="onboarding_accordion__item-col">
        <div data-og-accordion="item-head" class="onboarding_accordion__item_head" >
            <span class="onboarding_accordion__item_title"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['step']->value['title']);?>
</span>
            <span>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"chevron_down",'class'=>"onboarding_accordion__item_icon"),$_smarty_tpl);?>

            </span>
        </div>

        <div data-og-accordion="item-body" class="onboarding_accordion__item_body" style="<?php echo htmlspecialchars((string) !$_smarty_tpl->tpl_vars['is_open']->value ? "display: none;" : '', ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['step']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('step_id'=>$_smarty_tpl->tpl_vars['step_id']->value,'step'=>$_smarty_tpl->tpl_vars['step']->value), 0, true);
?>
        </div>
    </div>
</div>
<?php }
}
