<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:02
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\banners\blocks\carousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b422b931c2_30589593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '987841158c4d87ea849e7a6a2114e9b6a1231dd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\banners\\blocks\\carousel.tpl',
      1 => 1724167151,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66c4b422b931c2_30589593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('prev_page','next','prev_page','next'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('block_speed', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp));
$_smarty_tpl->_assignInScope('block_delay', $_smarty_tpl->tpl_vars['block']->value['properties']['delay'] > 0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false");?>

<?php if ($_smarty_tpl->tpl_vars['block_delay']->value && $_smarty_tpl->tpl_vars['block_speed']->value > ($_smarty_tpl->tpl_vars['block_delay']->value/2.5)) {?>
    <?php $_smarty_tpl->_assignInScope('block_speed', ($_smarty_tpl->tpl_vars['block_delay']->value/2.5));
}?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel ty-scroller"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner', false, 'key');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
            <div class="ty-banner__image-item ty-scroller__item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?><a class="banner__link" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>><?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value, ENT_QUOTES, 'UTF-8');?>
,
                paginationSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2, ENT_QUOTES, 'UTF-8');?>
,
                rewindSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2.5, ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_delay']->value, ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);
                },
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/banners/blocks/carousel.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/banners/blocks/carousel.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('block_speed', (($tmp = $_smarty_tpl->tpl_vars['block']->value['properties']['speed'] ?? null)===null||$tmp==='' ? 400 ?? null : $tmp));
$_smarty_tpl->_assignInScope('block_delay', $_smarty_tpl->tpl_vars['block']->value['properties']['delay'] > 0 ? $_smarty_tpl->tpl_vars['block']->value['properties']['delay']*1000 : "false");?>

<?php if ($_smarty_tpl->tpl_vars['block_delay']->value && $_smarty_tpl->tpl_vars['block_speed']->value > ($_smarty_tpl->tpl_vars['block_delay']->value/2.5)) {?>
    <?php $_smarty_tpl->_assignInScope('block_speed', ($_smarty_tpl->tpl_vars['block_delay']->value/2.5));
}?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <div id="banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
" class="banners owl-carousel ty-scroller"
        data-ca-scroller-item="1"
        data-ca-scroller-item-desktop="1"
        data-ca-scroller-item-desktop-small="1"
        data-ca-scroller-item-tablet="1"
        data-ca-scroller-item-mobile="1"
    >
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'banner', false, 'key');
$_smarty_tpl->tpl_vars['banner']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['banner']->value) {
$_smarty_tpl->tpl_vars['banner']->do_else = false;
?>
            <div class="ty-banner__image-item ty-scroller__item">
                <?php if ($_smarty_tpl->tpl_vars['banner']->value['type'] == "G" && $_smarty_tpl->tpl_vars['banner']->value['main_pair']['image_id']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?><a class="banner__link" href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['banner']->value['url']), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['banner']->value['target'] == "B") {?>target="_blank"<?php }?>><?php }?>
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('images'=>$_smarty_tpl->tpl_vars['banner']->value['main_pair'],'class'=>"ty-banner__image",'image_width'=>$_smarty_tpl->tpl_vars['block']->value['content']['width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['content']['height']), 0, true);
?>
                    <?php if ($_smarty_tpl->tpl_vars['banner']->value['url'] != '') {?></a><?php }?>
                <?php } else { ?>
                    <div class="ty-wysiwyg-content">
                        <?php echo $_smarty_tpl->tpl_vars['banner']->value['description'];?>

                    </div>
                <?php }?>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
<?php }?>

<?php echo '<script'; ?>
>
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var slider = context.find('#banner_slider_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['snapping_id'], ENT_QUOTES, 'UTF-8');?>
');
        if (slider.length) {
            slider.owlCarousel({
                direction: '<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language_direction']->value, ENT_QUOTES, 'UTF-8');?>
',
                items: 1,
                singleItem : true,
                slideSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value, ENT_QUOTES, 'UTF-8');?>
,
                paginationSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2, ENT_QUOTES, 'UTF-8');?>
,
                rewindSpeed: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_speed']->value*2.5, ENT_QUOTES, 'UTF-8');?>
,
                autoPlay: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_delay']->value, ENT_QUOTES, 'UTF-8');?>
,
                stopOnHover: true,
                beforeInit: function () {
                    $.ceEvent('trigger', 'ce.banner.carousel.beforeInit', [this]);
                },
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "N") {?>
                    pagination: false
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "D") {?>
                    pagination: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "P") {?>
                    pagination: true,
                    paginationNumbers: true
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['navigation'] == "A") {?>
                    pagination: false,
                    navigation: true,
                    navigationText: ['<?php echo $_smarty_tpl->__("prev_page");?>
', '<?php echo $_smarty_tpl->__("next");?>
']
                <?php }?>
            });
        }
    });
}(Tygh, Tygh.$));
<?php echo '</script'; ?>
>
<?php }
}
}
