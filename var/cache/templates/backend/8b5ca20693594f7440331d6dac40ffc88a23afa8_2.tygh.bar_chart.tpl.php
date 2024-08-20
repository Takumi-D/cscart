<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:39
  from 'C:\xampp\htdocs\cscart\design\backend\templates\views\index\components\analytics_section\analytics_card\bar_chart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b447acae71_62423987',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b5ca20693594f7440331d6dac40ffc88a23afa8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\views\\index\\components\\analytics_section\\analytics_card\\bar_chart.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_66c4b447acae71_62423987 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.unlimited'));
if ($_smarty_tpl->tpl_vars['bar_chart']->value && $_smarty_tpl->tpl_vars['bar_chart']->value['content']) {?><div class="analytics-card-bar-chart" data-ca-analytics-card="barChart" data-ca-analytics-card-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bar_chart']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['bar_chart']->value['title']) {?><div class="analytics-card-bar-chart__title"><?php echo $_smarty_tpl->tpl_vars['bar_chart']->value['title'];?>
</div><?php }?><div class="analytics-card-bar-chart__content"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bar_chart']->value['content'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if ($_smarty_tpl->tpl_vars['item']->value['ratio']) {
$_smarty_tpl->_assignInScope('ratio', $_smarty_tpl->tpl_vars['item']->value['ratio']);
} elseif ($_smarty_tpl->tpl_vars['item']->value['total']) {
$_smarty_tpl->_assignInScope('ratio', $_smarty_tpl->tpl_vars['item']->value['value']/$_smarty_tpl->tpl_vars['item']->value['total']*100);
} else {
$_smarty_tpl->_assignInScope('ratio', "0.00");
}
if ($_smarty_tpl->tpl_vars['item']->value['value'] && $_smarty_tpl->tpl_vars['item']->value['is_price']) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['item']->value['value']), 0, true);
$_smarty_tpl->assign('item_value_text', ob_get_clean());
} else {
$_smarty_tpl->_assignInScope('item_value_text', $_smarty_tpl->tpl_vars['item']->value['value']);
}
if ($_smarty_tpl->tpl_vars['item']->value['total'] && $_smarty_tpl->tpl_vars['item']->value['is_price']) {
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['item']->value['total']), 0, true);
$_smarty_tpl->assign('item_total_text', ob_get_clean());
} elseif ($_smarty_tpl->tpl_vars['item']->value['total']) {
$_smarty_tpl->_assignInScope('item_total_text', $_smarty_tpl->tpl_vars['item']->value['total']);
} else {
$_smarty_tpl->_assignInScope('item_total_text', $_smarty_tpl->__("dashboard.analytics_card.unlimited"));
}
$_smarty_tpl->_assignInScope('href_tag', $_smarty_tpl->tpl_vars['item']->value['href'] ? "a" : "div");
$_smarty_tpl->_assignInScope('href_attr', $_smarty_tpl->tpl_vars['item']->value['href'] ? "href=".((string)(fn_url($_smarty_tpl->tpl_vars['item']->value['href']))) : '');?><div class="analytics-card-bar-chart__item" data-ca-analytics-card-bar-chart-item-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['analytics_card']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['bar_chart']->value['id'], ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['id'], ENT_QUOTES, 'UTF-8');?>
"><div class="analytics-card-bar-chart__item-info"><?php if ($_smarty_tpl->tpl_vars['item']->value['name']) {?><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_tag']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_attr']->value, ENT_QUOTES, 'UTF-8');?>
 class="analytics-card-bar-chart__item-name"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_tag']->value, ENT_QUOTES, 'UTF-8');?>
><?php }?><div class="analytics-card-bar-chart__item-values"><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_tag']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_attr']->value, ENT_QUOTES, 'UTF-8');?>
 class="analytics-card-bar-chart__item-value"><?php echo $_smarty_tpl->tpl_vars['item_value_text']->value;?>
</<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_tag']->value, ENT_QUOTES, 'UTF-8');?>
><span class="analytics-card-bar-chart__item-total"><?php echo $_smarty_tpl->tpl_vars['item_total_text']->value;?>
</span></div></div><<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_tag']->value, ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_attr']->value, ENT_QUOTES, 'UTF-8');?>
 class="analytics-card-bar-chart__item-bar-wrapper"><div class="progress analytics-card-bar-chart__item-progress"><div class="bar analytics-card-bar-chart__item-bar<?php if ($_smarty_tpl->tpl_vars['item']->value['type'] === "primary") {?> analytics-card-bar-chart__item-bar--primary<?php }
if ($_smarty_tpl->tpl_vars['item']->value['total'] && $_smarty_tpl->tpl_vars['item']->value['value'] > $_smarty_tpl->tpl_vars['item']->value['total']) {?> analytics-card-bar-chart__item-bar--danger<?php }?>"<?php if ($_smarty_tpl->tpl_vars['ratio']->value > 0) {?> style="width: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['ratio']->value, ENT_QUOTES, 'UTF-8');?>
%;"<?php }?>></div></div></<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href_tag']->value, ENT_QUOTES, 'UTF-8');?>
></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div><?php }
}
}
