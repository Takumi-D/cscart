<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:38
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\onboarding_guide\steps\customize_storefront_design.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b446a8da69_03669704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '06088622aea827851efbf37db60f987c6e3429ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\onboarding_guide\\steps\\customize_storefront_design.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b446a8da69_03669704 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('onboarding_guide.sb_make_changes_on_the_fly_description','onboarding_guide.make_changes_on_the_fly_description','onboarding_guide.modify_colors_fonts_backgrounds','onboarding_guide.edit_texts','onboarding_guide.edit_blocks'));
?>
<div class="onboarding_content_margin--bottom_x2">
    <span class="onboarding_section__progress_text">
        <?php if ((!empty($_smarty_tpl->tpl_vars['onboarding_guide_is_store_builder']->value))) {?>
            <?php echo $_smarty_tpl->__("onboarding_guide.sb_make_changes_on_the_fly_description");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("onboarding_guide.make_changes_on_the_fly_description");?>

        <?php }?>
    </span>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=theme_editor"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary og-action" data-og-action="edit_style" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.modify_colors_fonts_backgrounds");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=live_editor"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary og-action" data-og-action="edit_texts" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_texts");?>
 ↗</a>
</div>

<div class="onboarding_section__action_block onboarding_content_margin--bottom_x2">
    <a href="<?php echo htmlspecialchars((string) fn_url("onboarding_guide.customize_storefront?type=block_manager"), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary og-action" data-og-action="edit_blocks" target="_blank"><?php echo $_smarty_tpl->__("onboarding_guide.edit_blocks");?>
 ↗</a>
</div>
<?php }
}
