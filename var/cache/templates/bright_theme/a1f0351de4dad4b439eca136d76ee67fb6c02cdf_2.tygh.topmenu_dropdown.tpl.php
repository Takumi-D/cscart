<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:01
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\blocks\topmenu_dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b421e2a368_16554143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a1f0351de4dad4b439eca136d76ee67fb6c02cdf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\blocks\\topmenu_dropdown.tpl',
      1 => 1724167137,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b421e2a368_16554143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('menu','text_topmenu_view_more','text_topmenu_view_more','text_topmenu_more','menu','text_topmenu_view_more','text_topmenu_view_more','text_topmenu_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <ul class="ty-menu__items cm-responsive-menu">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <li class="ty-menu__item ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
                <a class="ty-menu__item-link">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

                    <span><?php echo $_smarty_tpl->__("menu");?>
</span>
                </a>
            </li>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item1', false, NULL, 'item1', array (
));
$_smarty_tpl->tpl_vars['item1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('item1_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
            <?php $_smarty_tpl->_assignInScope('unique_elm_id', md5($_smarty_tpl->tpl_vars['item1_url']->value));?>
            <?php $_smarty_tpl->_assignInScope('unique_elm_id', "topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['unique_elm_id']->value));?>

            <?php if ($_smarty_tpl->tpl_vars['subitems_count']->value) {?>

            <?php }?>
            <li class="ty-menu__item cm-menu-item-responsive <?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                        <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);?>

                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>

                        </a>
                    <?php }?>
                    <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__item-link" <?php if ($_smarty_tpl->tpl_vars['item1']->value['new_window']) {?>target="_blank"<?php }?>>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>

                    </a>
                <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>

                    <?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
                                            <div class="ty-menu__submenu">
                            <ul class="ty-menu__submenu-items ty-menu__submenu-items-simple cm-responsive-menu-submenu">
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('item_url2', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                    <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                        <a class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item_url2']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item2']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more'] && $_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-menu__submenu-alt-link"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>
                                    </li>
                                <?php }?>

                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <div class="ty-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <ul class="ty-menu__submenu-items cm-responsive-menu-submenu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
                                        <li class="ty-top-mine__submenu-col">
                                            <?php $_smarty_tpl->_assignInScope('item2_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                            <div class="ty-menu__submenu-item-header<?php if ($_smarty_tpl->tpl_vars['item2']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                <a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item2']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);?>

                                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>

                                                </a>
                                            <?php }?>
                                            <div class="ty-menu__submenu">
                                                <ul class="ty-menu__submenu-list cm-responsive-menu-submenu">
                                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item3', false, NULL, 'item3', array (
));
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                                            <?php $_smarty_tpl->_assignInScope('item3_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                                            <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }
if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                                <a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                                                        class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item3']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a>
                                                            </li>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item2']->value['show_more'] && $_smarty_tpl->tpl_vars['item2_url']->value) {?>
                                                            <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                                   class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item2']->value['new_window']) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>
                                                            </li>
                                                        <?php }?>
                                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more'] && $_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                        <li class="ty-menu__submenu-dropdown-bottom">
                                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item1']->value['new_window']) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php }?>

                <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/topmenu_dropdown.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/topmenu_dropdown.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
    <ul class="ty-menu__items cm-responsive-menu">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_top_menu"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <li class="ty-menu__item ty-menu__menu-btn visible-phone cm-responsive-menu-toggle-main">
                <a class="ty-menu__item-link">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-short-list"),$_smarty_tpl);?>

                    <span><?php echo $_smarty_tpl->__("menu");?>
</span>
                </a>
            </li>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item1', false, NULL, 'item1', array (
));
$_smarty_tpl->tpl_vars['item1']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item1']->value) {
$_smarty_tpl->tpl_vars['item1']->do_else = false;
?>
            <?php $_smarty_tpl->_assignInScope('item1_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
            <?php $_smarty_tpl->_assignInScope('unique_elm_id', md5($_smarty_tpl->tpl_vars['item1_url']->value));?>
            <?php $_smarty_tpl->_assignInScope('unique_elm_id', "topmenu_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."_".((string)$_smarty_tpl->tpl_vars['unique_elm_id']->value));?>

            <?php if ($_smarty_tpl->tpl_vars['subitems_count']->value) {?>

            <?php }?>
            <li class="ty-menu__item cm-menu-item-responsive <?php if (!$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?> ty-menu__item-nodrop<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item1']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__item-active<?php }
if ($_smarty_tpl->tpl_vars['item1']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                    <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                        <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);?>

                            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>

                        </a>
                    <?php }?>
                    <a <?php if ($_smarty_tpl->tpl_vars['item1_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__item-link" <?php if ($_smarty_tpl->tpl_vars['item1']->value['new_window']) {?>target="_blank"<?php }?>>
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>

                    </a>
                <?php if ($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>

                    <?php if (!fn_check_second_level_child_array($_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value],$_smarty_tpl->tpl_vars['childs']->value)) {?>
                                            <div class="ty-menu__submenu">
                            <ul class="ty-menu__submenu-items ty-menu__submenu-items-simple cm-responsive-menu-submenu">
                                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_2levels_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
                                    <?php $_smarty_tpl->_assignInScope('item_url2', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                    <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item2']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                        <a class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item_url2']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item_url2']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['item2']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more'] && $_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                    <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                           class="ty-menu__submenu-alt-link"><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>
                                    </li>
                                <?php }?>

                                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_2levels_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <div class="ty-menu__submenu" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['unique_elm_id']->value, ENT_QUOTES, 'UTF-8');?>
">
                            <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_cols"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                <ul class="ty-menu__submenu-items cm-responsive-menu-submenu">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item2', false, NULL, 'item2', array (
));
$_smarty_tpl->tpl_vars['item2']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->do_else = false;
?>
                                        <li class="ty-top-mine__submenu-col">
                                            <?php $_smarty_tpl->_assignInScope('item2_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                            <div class="ty-menu__submenu-item-header<?php if ($_smarty_tpl->tpl_vars['item2']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-header-active<?php }
if ($_smarty_tpl->tpl_vars['item2']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                <a<?php if ($_smarty_tpl->tpl_vars['item2_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item2']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                <a class="ty-menu__item-toggle visible-phone cm-responsive-menu-toggle">
                                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-down-open ty-menu__icon-open"),$_smarty_tpl);?>

                                                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-up-open ty-menu__icon-hide"),$_smarty_tpl);?>

                                                </a>
                                            <?php }?>
                                            <div class="ty-menu__submenu">
                                                <ul class="ty-menu__submenu-list cm-responsive-menu-submenu">
                                                    <?php if ($_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value]) {?>
                                                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item2']->value[$_smarty_tpl->tpl_vars['childs']->value], 'item3', false, NULL, 'item3', array (
));
$_smarty_tpl->tpl_vars['item3']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item3']->value) {
$_smarty_tpl->tpl_vars['item3']->do_else = false;
?>
                                                            <?php $_smarty_tpl->_assignInScope('item3_url', fn_form_dropdown_object_link($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type']));?>
                                                            <li class="ty-menu__submenu-item<?php if ($_smarty_tpl->tpl_vars['item3']->value['active'] || fn_check_is_active_menu_item($_smarty_tpl->tpl_vars['item3']->value,$_smarty_tpl->tpl_vars['block']->value['type'])) {?> ty-menu__submenu-item-active<?php }
if ($_smarty_tpl->tpl_vars['item3']->value['class']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value['class'], ENT_QUOTES, 'UTF-8');
}?>">
                                                                <a<?php if ($_smarty_tpl->tpl_vars['item3_url']->value) {?> href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3_url']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                                                        class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item3']->value['new_window']) {?>target="_blank"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item3']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8');?>
</a>
                                                            </li>
                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                        <?php if ($_smarty_tpl->tpl_vars['item2']->value['show_more'] && $_smarty_tpl->tpl_vars['item2_url']->value) {?>
                                                            <li class="ty-menu__submenu-item ty-menu__submenu-alt-link">
                                                                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item2_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                                   class="ty-menu__submenu-link" <?php if ($_smarty_tpl->tpl_vars['item2']->value['new_window']) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->__("text_topmenu_view_more");?>
</a>
                                                            </li>
                                                        <?php }?>
                                                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_col_elements"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        </li>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php if ($_smarty_tpl->tpl_vars['item1']->value['show_more'] && $_smarty_tpl->tpl_vars['item1_url']->value) {?>
                                        <li class="ty-menu__submenu-dropdown-bottom">
                                            <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item1_url']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item1']->value['new_window']) {?>target="_blank"<?php }?>><?php echo $_smarty_tpl->__("text_topmenu_more",array("[item]"=>$_smarty_tpl->tpl_vars['item1']->value[$_smarty_tpl->tpl_vars['name']->value]));?>
</a>
                                        </li>
                                    <?php }?>
                                </ul>
                            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_3levels_cols"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                        </div>
                    <?php }?>

                <?php }?>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown_top_menu"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    </ul>
<?php }
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"blocks:topmenu_dropdown"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
