<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:16
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\common\scroller_init_with_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43051a6e8_00713024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49c2f3c2bc450a3136e58ed71395747f51cf71e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\common\\scroller_init_with_quantity.tpl',
      1 => 1724167138,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43051a6e8_00713024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('block_speed', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp));
$_smarty_tpl->_assignInScope('block_pause_delay', $_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['block_speed']->value > ($_smarty_tpl->tpl_vars['block_pause_delay']->value/2.5)) {?>
    <?php $_smarty_tpl->_assignInScope('block_speed', ($_smarty_tpl->tpl_vars['block_pause_delay']->value/2.5));
}?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 3,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_pause_delay']->value, ENT_QUOTES, 'UTF-8');?>
,
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value, ENT_QUOTES, 'UTF-8');?>
,
                paginationSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2, ENT_QUOTES, 'UTF-8');?>
,
                rewindSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2.5, ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                <?php }?>
                pagination: false,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.scroller_init_with_quantity.beforeInit', [this]);
                },
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scroller_init_with_quantity.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scroller_init_with_quantity.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('block_speed', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp));
$_smarty_tpl->_assignInScope('block_pause_delay', $_smarty_tpl->tpl_vars['block']->value['properties']['pause_delay']*(($tmp = 1000 ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['block_speed']->value > ($_smarty_tpl->tpl_vars['block_pause_delay']->value/2.5)) {?>
    <?php $_smarty_tpl->_assignInScope('block_speed', ($_smarty_tpl->tpl_vars['block_pause_delay']->value/2.5));
}?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('#scroll_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
');

        var item = <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['item_quantity'] ?? null)===null||$tmp==='' ? 3 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
,
            // default setting of carousel
            itemsDesktop = 3,
            itemsDesktopSmall = 3;
            itemsTablet = 2;

        if (item > 3) {
            itemsDesktop = item;
            itemsDesktopSmall = item - 1;
            itemsTablet = item - 2;
        } else if (item == 1) {
            itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
        } else {
            itemsDesktop = item;
            itemsDesktopSmall = itemsTablet = item - 1;
        }

        <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
        function outsideNav () {
            if(this.options.items >= this.itemsAmount){
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").hide();
            } else {
                $("#owl_outside_nav_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
").show();
            }
        }
        <?php }?>

        if (elm.length) {
            elm.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: item,
                itemsDesktop: [1199, itemsDesktop],
                itemsDesktopSmall: [979, itemsDesktopSmall],
                itemsTablet: [768, itemsTablet],
                itemsMobile: [479, 1],
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['scroll_per_page'] == "Y") {?>
                scrollPerPage: true,
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['not_scroll_automatically'] == "Y") {?>
                autoPlay: false,
                <?php } else { ?>
                autoPlay: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_pause_delay']->value, ENT_QUOTES, 'UTF-8');?>
,
                <?php }?>
                slideSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value, ENT_QUOTES, 'UTF-8');?>
,
                paginationSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2, ENT_QUOTES, 'UTF-8');?>
,
                rewindSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2.5, ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "N") {?>
                navigation: true,
                navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
'],
                <?php }?>
                pagination: false,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.scroller_init_with_quantity.beforeInit', [this]);
                },
            <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['outside_navigation'] == "Y") {?>
                afterInit: outsideNav,
                afterUpdate : outsideNav
            });

              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.prev');
              });
              $('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next_selector']->value, ENT_QUOTES, 'UTF-8');?>
').click(function(){
                elm.trigger('owl.next');
              });

            <?php } else { ?>
            });
            <?php }?>

        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
