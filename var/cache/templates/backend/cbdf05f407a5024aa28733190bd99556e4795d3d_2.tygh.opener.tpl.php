<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:27
  from 'C:\xampp\htdocs\cscart\design\backend\templates\components\notifications_center\opener.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43be8a384_57551601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbdf05f407a5024aa28733190bd99556e4795d3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\components\\notifications_center\\opener.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43be8a384_57551601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
\Tygh\Languages\Helper::preloadLangVars(array('loading','show_more','show_less','notifications_center.no_notifications','notifications_center.notifications','notifications_center.mark_all_as_read','notifications_center.notifications','notifications_center.notifications','notifications_center.notifications','loading'));
?>
<div class="top-bar__btn-wrapper btn-group dropdown-top-menu-item notifications-center__opener-wrapper cm-dropdown-skip-processing"
    data-ca-notifications-center="main"
    data-ca-notifications-center-text-loading="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("loading"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-show-more="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("show_more"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-show-less="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("show_less"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-no-data="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("notifications_center.no_notifications"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-notifications="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("notifications_center.notifications"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
    data-ca-notifications-center-text-mark-all-as-read="<?php echo htmlspecialchars((string) htmlspecialchars((string)$_smarty_tpl->__("notifications_center.mark_all_as_read"), ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8');?>
"
>
    <button class="dropdown-toggle dropdown-top-menu-item-link top-bar__btn notifications-center__opener-btn"
        data-toggle="dropdown"
        type="button"
        title="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
"
    >
        <span class="top-bar__btn-inner notifications-center__opener-btn-inner">
            <span>
                <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'source'=>"bell"),$_smarty_tpl);?>

                <span class="cs-notifications-center__counter"
                    data-ca-notifications-center-counter
                    data-ca-notifications-center-count=""></span>
            </span>
        </span>
    </button>
    <ul class="dropdown-menu pull-right notifications-center__root" data-ca-notifications-center-root>
        <div class="cc-dropdown">
            <div class="cc-dropdown__title-wrapper" text="<?php echo $_smarty_tpl->__("notifications_center.notifications");?>
">
                <span class="cc-dropdown__title"><?php echo $_smarty_tpl->__("notifications_center.notifications");?>
</span>
            </div>
            <div class="cc-all-read">
                <div class="cc-all-read--inner"><?php echo $_smarty_tpl->__("loading");?>
</div>
            </div>
        </div>
    </ul>
</div>
<?php }
}
