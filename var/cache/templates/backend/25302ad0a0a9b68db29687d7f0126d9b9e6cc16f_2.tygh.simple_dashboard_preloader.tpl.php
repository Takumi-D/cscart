<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:23
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\index\components\simple_dashboard_preloader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4375c44f0_60166445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25302ad0a0a9b68db29687d7f0126d9b9e6cc16f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\index\\components\\simple_dashboard_preloader.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b4375c44f0_60166445 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_section_title'));
ob_start();
echo htmlspecialchars((string) mb_strlen($_smarty_tpl->__("dashboard.analytics_section_title"), 'UTF-8'), ENT_QUOTES, 'UTF-8');
$_prefixVariable20=ob_get_clean();
$_smarty_tpl->_assignInScope('simple_dashboard_preloader', array('analytics'=>array('title_width'=>$_prefixVariable20."ch",'primary_count'=>3,'secondary_count'=>3,'tertiary_count'=>3)));?><div class="simple-dashboard-preloader"><section class="simple-dashboard__section"><div class="simple-dashboard-preloader__title" style="--dashboard-title-width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['simple_dashboard_preloader']->value['analytics']['title_width'], ENT_QUOTES, 'UTF-8');?>
;"></div><div class="simple-dashboard-preloader__section-content"><div class="simple-dashboard-preloader__column"><?php
$__section_simple_dashboard_preloader_primary_count_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['simple_dashboard_preloader']->value['analytics']['primary_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_simple_dashboard_preloader_primary_count_0_total = $__section_simple_dashboard_preloader_primary_count_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_primary_count'] = new Smarty_Variable(array());
if ($__section_simple_dashboard_preloader_primary_count_0_total !== 0) {
for ($__section_simple_dashboard_preloader_primary_count_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_primary_count']->value['index'] = 0; $__section_simple_dashboard_preloader_primary_count_0_iteration <= $__section_simple_dashboard_preloader_primary_count_0_total; $__section_simple_dashboard_preloader_primary_count_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_primary_count']->value['index']++){
?><div class="simple-dashboard-preloader__block"></div><?php
}
}
?></div><div class="simple-dashboard-preloader__column"><?php
$__section_simple_dashboard_preloader_secondary_count_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['simple_dashboard_preloader']->value['analytics']['secondary_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_simple_dashboard_preloader_secondary_count_1_total = $__section_simple_dashboard_preloader_secondary_count_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_secondary_count'] = new Smarty_Variable(array());
if ($__section_simple_dashboard_preloader_secondary_count_1_total !== 0) {
for ($__section_simple_dashboard_preloader_secondary_count_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_secondary_count']->value['index'] = 0; $__section_simple_dashboard_preloader_secondary_count_1_iteration <= $__section_simple_dashboard_preloader_secondary_count_1_total; $__section_simple_dashboard_preloader_secondary_count_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_secondary_count']->value['index']++){
?><div class="simple-dashboard-preloader__block"></div><?php
}
}
?></div><div class="simple-dashboard-preloader__column"><?php
$__section_simple_dashboard_preloader_tertiary_count_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['simple_dashboard_preloader']->value['analytics']['tertiary_count']) ? count($_loop) : max(0, (int) $_loop));
$__section_simple_dashboard_preloader_tertiary_count_2_total = $__section_simple_dashboard_preloader_tertiary_count_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_tertiary_count'] = new Smarty_Variable(array());
if ($__section_simple_dashboard_preloader_tertiary_count_2_total !== 0) {
for ($__section_simple_dashboard_preloader_tertiary_count_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_tertiary_count']->value['index'] = 0; $__section_simple_dashboard_preloader_tertiary_count_2_iteration <= $__section_simple_dashboard_preloader_tertiary_count_2_total; $__section_simple_dashboard_preloader_tertiary_count_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_simple_dashboard_preloader_tertiary_count']->value['index']++){
?><div class="simple-dashboard-preloader__block"></div><?php
}
}
?></div></div></section></div>
<?php }
}
