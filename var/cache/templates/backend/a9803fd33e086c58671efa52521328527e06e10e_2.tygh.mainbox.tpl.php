<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:23
  from 'C:\xampp\htdocs\cscart\design\backend\templates\common\mainbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4377bb607_74740949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9803fd33e086c58671efa52521328527e06e10e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\common\\mainbox.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/dynamic_navigation.tpl' => 1,
    'tygh:common/sidebox.tpl' => 1,
    'tygh:common/last_viewed_items.tpl' => 1,
    'tygh:views/storefronts/components/picker/presets.tpl' => 1,
    'tygh:components/search_filters/search_filters.tpl' => 1,
    'tygh:common/saved_search_horizontal.tpl' => 1,
    'tygh:components/search_filters/context_search.tpl' => 1,
    'tygh:common/select_object.tpl' => 1,
  ),
),false)) {
function content_66c4b4377bb607_74740949 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.explode.php','function'=>'smarty_modifier_explode',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.sanitize_html.php','function'=>'smarty_modifier_sanitize_html',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.inline_script.php','function'=>'smarty_block_inline_script',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.notes.php','function'=>'smarty_block_notes',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),5=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),6=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),7=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.sizeof.php','function'=>'smarty_modifier_sizeof',),8=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('notes','all_vendors','sidebar','language_content','sidebar'));
$_smarty_tpl->_assignInScope('show_back_button', true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['static']['central'], 'back_button_central');
$_smarty_tpl->tpl_vars['back_button_central']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['back_button_central']->value) {
$_smarty_tpl->tpl_vars['back_button_central']->do_else = false;
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['back_button_central']->value['items'], 'back_button_central_item');
$_smarty_tpl->tpl_vars['back_button_central_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['back_button_central_item']->value) {
$_smarty_tpl->tpl_vars['back_button_central_item']->do_else = false;
?>
        <?php if (!$_smarty_tpl->tpl_vars['back_button_central_item']->value || !$_smarty_tpl->tpl_vars['back_button_central_item']->value['href']) {?>
            <?php continue 1;?>
        <?php }?>
        <?php $_smarty_tpl->_assignInScope('back_button_dispatch', smarty_modifier_explode(".",$_smarty_tpl->tpl_vars['back_button_central_item']->value['href']));?>
        <?php $_smarty_tpl->_assignInScope('back_button_mode_pre', smarty_modifier_explode("?",$_smarty_tpl->tpl_vars['back_button_dispatch']->value[1]));?>
        <?php $_smarty_tpl->_assignInScope('back_button_mode', $_smarty_tpl->tpl_vars['back_button_mode_pre']->value[0]);?>        

        <?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller'] === $_smarty_tpl->tpl_vars['back_button_dispatch']->value[0] && $_smarty_tpl->tpl_vars['runtime']->value['mode'] === $_smarty_tpl->tpl_vars['back_button_mode']->value) || ($_smarty_tpl->tpl_vars['runtime']->value['controller'] === "index" && $_smarty_tpl->tpl_vars['runtime']->value['mode'] === "index")) {?>
            <?php $_smarty_tpl->_assignInScope('show_back_button', false);?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navigation']->value['static']['top']['administration']['items'], 'back_button_top_item');
$_smarty_tpl->tpl_vars['back_button_top_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['back_button_top_item']->value) {
$_smarty_tpl->tpl_vars['back_button_top_item']->do_else = false;
?>
    <?php if (!$_smarty_tpl->tpl_vars['back_button_top_item']->value || !$_smarty_tpl->tpl_vars['back_button_top_item']->value['href']) {?>
        <?php continue 1;?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('back_button_dispatch', smarty_modifier_explode(".",$_smarty_tpl->tpl_vars['back_button_top_item']->value['href']));?>
    <?php $_smarty_tpl->_assignInScope('back_button_mode_pre', smarty_modifier_explode("?",$_smarty_tpl->tpl_vars['back_button_dispatch']->value[1]));?>
    <?php $_smarty_tpl->_assignInScope('back_button_mode', $_smarty_tpl->tpl_vars['back_button_mode_pre']->value[0]);?>        

    <?php if (($_smarty_tpl->tpl_vars['runtime']->value['controller'] === $_smarty_tpl->tpl_vars['back_button_dispatch']->value[0] && $_smarty_tpl->tpl_vars['runtime']->value['mode'] === $_smarty_tpl->tpl_vars['back_button_mode']->value)) {?>
        <?php $_smarty_tpl->_assignInScope('show_back_button', true);?>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php if (!$_smarty_tpl->tpl_vars['sidebar_position']->value) {?>
    <?php $_smarty_tpl->_assignInScope('sidebar_position', "right");
}?>

<?php if (!$_smarty_tpl->tpl_vars['sidebar_icon']->value) {?>
    <?php $_smarty_tpl->_assignInScope('sidebar_icon', "icon-chevron-left");
}?>

<?php if ((fn_allowed_for('MULTIVENDOR:ULTIMATE'))) {?>
    <?php if (!$_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']) {?>
        <?php $_smarty_tpl->_assignInScope('select_storefront', false);?>
    <?php }?>
    <?php $_smarty_tpl->_assignInScope('selected_storefront_id', (($tmp = $_smarty_tpl->tpl_vars['selected_storefront_id']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['app']->value["storefront"]->storefront_id ?? null : $tmp));
} elseif ((!(isset($_smarty_tpl->tpl_vars['select_storefront']->value)))) {?>
    <?php $_smarty_tpl->_assignInScope('select_storefront', $_smarty_tpl->tpl_vars['runtime']->value['is_multiple_storefronts']);
}?>

<?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
<a name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
<?php }?>

<?php if (defined("THEMES_PANEL")) {?>
    <?php $_smarty_tpl->_assignInScope('sticky_padding_on_actions_panel', 80);?>
    <?php $_smarty_tpl->_assignInScope('sticky_top_on_actions_panel', 80);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('sticky_padding_on_actions_panel', 45);?>
    <?php $_smarty_tpl->_assignInScope('sticky_top_on_actions_panel', 45);
}?>

<?php $_smarty_tpl->_assignInScope('title_heading_class', '');
$_smarty_tpl->_assignInScope('title_lg_length', 25);?> <?php $_smarty_tpl->_assignInScope('title_xl_length', 50);?> <?php $_smarty_tpl->_assignInScope('title_xxl_length', 127);?> <?php $_smarty_tpl->_assignInScope('title_text', (isset($_smarty_tpl->tpl_vars['title_start']->value)) && (isset($_smarty_tpl->tpl_vars['title_end']->value)) ? (smarty_modifier_sanitize_html(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (($tmp = ((string)$_smarty_tpl->tpl_vars['title_start']->value)." ".((string)$_smarty_tpl->tpl_vars['title_end']->value) ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp) ?: '')))) : smarty_modifier_sanitize_html(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', (($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp) ?: ''))));
if (mb_strlen($_smarty_tpl->tpl_vars['title_text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['title_xxl_length']->value) {?>
    <?php $_smarty_tpl->_assignInScope('title_heading_class', "title__heading--xxl");
} elseif (mb_strlen($_smarty_tpl->tpl_vars['title_text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['title_xl_length']->value) {?>
    <?php $_smarty_tpl->_assignInScope('title_heading_class', "title__heading--xl");
} elseif (mb_strlen($_smarty_tpl->tpl_vars['title_text']->value, 'UTF-8') > $_smarty_tpl->tpl_vars['title_lg_length']->value) {?>
    <?php $_smarty_tpl->_assignInScope('title_heading_class', "title__heading--lg");
}?>

<?php $_smarty_tpl->_assignInScope('scroll_header', (($tmp = $_smarty_tpl->tpl_vars['config']->value['scroll_header'] ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
// Init ajax callback (rebuild)
var menu_content = <?php echo htmlspecialchars_decode((($tmp = $_smarty_tpl->tpl_vars['convertible_data']->value ?? null)===null||$tmp==='' ? "''" ?? null : $tmp), ENT_QUOTES);?>
;
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "sidebar_content", "sidebar_content", null);?>
    <?php if ($_smarty_tpl->tpl_vars['navigation']->value && $_smarty_tpl->tpl_vars['navigation']->value['dynamic'] && $_smarty_tpl->tpl_vars['navigation']->value['dynamic']['sections']) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/dynamic_navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navigation'=>$_smarty_tpl->tpl_vars['navigation']->value), 0, false);
?>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>


    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('notes', array('assign'=>"notes"));
$_block_repeat=true;
echo smarty_block_notes(array('assign'=>"notes"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_notes(array('assign'=>"notes"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <?php if ($_smarty_tpl->tpl_vars['notes']->value) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notes']->value, 'note', false, 'sidebox_title');
$_smarty_tpl->tpl_vars['note']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sidebox_title']->value => $_smarty_tpl->tpl_vars['note']->value) {
$_smarty_tpl->tpl_vars['note']->do_else = false;
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "note_title", null, null);?>
                <?php if ($_smarty_tpl->tpl_vars['title']->value == "_note_") {
echo $_smarty_tpl->__("notes");
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
}?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/sidebox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('content'=>$_smarty_tpl->tpl_vars['note']->value,'title'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'note_title')), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<!-- Actions -->
<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:actions_wrapper"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:actions_wrapper"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="actions nav__actions <?php if ($_smarty_tpl->tpl_vars['scroll_header']->value) {?>nav__actions--scroll-header<?php }?>"
        data-ca-stick-on-screens="sm-large,md,md-large,lg,uhd"
        data-ca-top="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticky_top_on_actions_panel']->value, ENT_QUOTES, 'UTF-8');?>
"
        data-ca-padding="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sticky_padding_on_actions_panel']->value, ENT_QUOTES, 'UTF-8');?>
"
        id="actions_panel">
        <div class="actions__wrapper <?php if (!$_smarty_tpl->tpl_vars['show_back_button']->value) {?>actions__wrapper--no-back<?php }?> <?php if ($_smarty_tpl->tpl_vars['runtime']->value['is_current_storefront_closed'] || $_smarty_tpl->tpl_vars['runtime']->value['are_all_storefronts_closed']) {?>actions__wrapper--disabled<?php }?>">
        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:actions"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:actions"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
            <?php if ($_smarty_tpl->tpl_vars['show_back_button']->value) {?>
                <div class="btn-bar-left nav__actions-back">
                    <?php $_smarty_tpl->_subTemplateRender("tygh:common/last_viewed_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                </div>
            <?php }?>
            <div class="title nav__actions-title <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title--storefronts<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['title_start']->value)) && (isset($_smarty_tpl->tpl_vars['title_end']->value))) {?>
                    <h2 class="title__heading <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_heading_class']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title__heading--storefronts<?php }?>">
                        <span class="title__part-start mobile-hidden"><?php echo smarty_modifier_sanitize_html((($tmp = $_smarty_tpl->tpl_vars['title_start']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));
if (smarty_modifier_sanitize_html(preg_replace('!\s+!u', ' ',preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['title_end']->value ?: ''))) !== '') {?>:<?php }?>
                         </span>
                        <span class="title__part-end"><?php echo smarty_modifier_sanitize_html((($tmp = $_smarty_tpl->tpl_vars['title_end']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));?>
</span>
                    </h2>
                <?php } else { ?>
                    <h2 class="title__heading <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title_heading_class']->value, ENT_QUOTES, 'UTF-8');?>

                        <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>title__heading--storefronts<?php }?>"
                    >
                        <?php echo smarty_modifier_sanitize_html((($tmp = $_smarty_tpl->tpl_vars['title']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp));?>

                    </h2>
                <?php }?>
            </div>

            <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['main_buttons_meta']->value, ENT_QUOTES, 'UTF-8');?>
 btn-bar btn-toolbar nav__actions-bar" <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?>id="tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_buttons"<?php }?>>
                <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:toolbar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:toolbar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:toolbar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                <?php if ($_smarty_tpl->tpl_vars['select_storefront']->value) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:views/storefronts/components/picker/presets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>$_smarty_tpl->tpl_vars['storefronts_picker_name']->value,'item_ids'=>array($_smarty_tpl->tpl_vars['runtime']->value['company_data']['company_id']),'show_empty_variant'=>$_smarty_tpl->tpl_vars['show_empty_variant']->value,'empty_variant_text'=>$_smarty_tpl->__("all_vendors"),'select_storefront'=>$_smarty_tpl->tpl_vars['select_storefront']->value,'show_all_storefront'=>$_smarty_tpl->tpl_vars['show_all_storefront']->value), 0, false);
?>
                <?php }?>

                <?php echo smarty_function_include_ext(array('file'=>"components/menu/actions_menu.tpl",'items'=>$_smarty_tpl->tpl_vars['navigation']->value['dynamic']['actions'],'config'=>$_smarty_tpl->tpl_vars['config']->value),$_smarty_tpl);?>


                <?php echo $_smarty_tpl->tpl_vars['buttons']->value;?>


                <?php if ($_smarty_tpl->tpl_vars['adv_buttons']->value) {?>
                <div class="nav__actions-adv-buttons adv-buttons" <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?>id="tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_adv_buttons"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['adv_buttons']->value;?>

                <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_adv_buttons--><?php }?></div>
                <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--tools_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
_buttons--><?php }?></div>
            <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:actions"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
        </div>
    <!--actions_panel--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:actions_wrapper"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<div class="admin-content-wrapper <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['mainbox_content_wrapper_class']->value ?? null)===null||$tmp==='' ? '' ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
">

<!-- Sidebar left -->
<?php if (!$_smarty_tpl->tpl_vars['no_sidebar']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['sidebar_content']->value) != '' && $_smarty_tpl->tpl_vars['sidebar_position']->value == "left") {?>
<div class="sidebar sidebar-left cm-sidebar <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->__("sidebar");?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['sidebar_icon']->value)." sidebar-icon"),$_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->tpl_vars['sidebar_content']->value;?>

    </div>
<!--elm_sidebar--></div>
<?php }?>

<!--Content-->
<div class="content page-content <?php if ($_smarty_tpl->tpl_vars['no_sidebar']->value) {?> content-no-sidebar<?php }
if ($_smarty_tpl->tpl_vars['sidebar_content']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['sidebar_content']->value) == '') {?> no-sidebar<?php }?> <?php if (fn_allowed_for("ULTIMATE")) {?>ufa<?php }?>" <?php if ($_smarty_tpl->tpl_vars['box_id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['box_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    <div class="content-wrap">
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:content_top"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:content_top"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>

        <?php if (($_smarty_tpl->tpl_vars['saved_search']->value) || ($_smarty_tpl->tpl_vars['tabs_navigation']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['tabs_navigation']->value)) || ($_smarty_tpl->tpl_vars['context_search']->value) || ($_smarty_tpl->tpl_vars['select_languages']->value && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) || ($_smarty_tpl->tpl_vars['search_filters']->value)) {?>
            
                        <?php if ($_smarty_tpl->tpl_vars['search_filters']->value) {?>
                <?php ob_start();
$_smarty_tpl->_subTemplateRender("tygh:components/search_filters/search_filters.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('search_filters'=>$_smarty_tpl->tpl_vars['search_filters']->value,'dispatch'=>$_smarty_tpl->tpl_vars['dispatch']->value), 0, false);
$_smarty_tpl->assign('search_filters_content', ob_get_clean());
?>
            <?php }?>

            <div class="content__top-navigation" id="content_top_navigation">
                <?php if ($_smarty_tpl->tpl_vars['saved_search']->value || $_smarty_tpl->tpl_vars['tabs_navigation']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['tabs_navigation']->value) || $_smarty_tpl->tpl_vars['context_search']->value || $_smarty_tpl->tpl_vars['select_languages']->value && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                    <div class="content__top-navigation-main <?php if ($_smarty_tpl->tpl_vars['context_search']->value) {?>content__top-navigation-main--wrap<?php }?>" id="content_top_navigation_main">
                        <?php if ($_smarty_tpl->tpl_vars['saved_search']->value || $_smarty_tpl->tpl_vars['tabs_navigation']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['tabs_navigation']->value)) {?>
                            <div class="content__top-navigation-primary">
                                <?php if ($_smarty_tpl->tpl_vars['saved_search']->value) {?>
                                    <div class="content__saved-search" id="saved_search_horizontal_views">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/saved_search_horizontal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('dispatch'=>$_smarty_tpl->tpl_vars['saved_search']->value['dispatch'],'view_type'=>$_smarty_tpl->tpl_vars['saved_search']->value['view_type'],'is_compact_view'=>(!!$_smarty_tpl->tpl_vars['context_search']->value)), 0, false);
?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['tabs_navigation']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['tabs_navigation']->value)) {?>
                                    <div class="content__tabs-navigation">
                                        <?php echo $_smarty_tpl->tpl_vars['tabs_navigation']->value;?>

                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['context_search']->value || $_smarty_tpl->tpl_vars['select_languages']->value && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                            <div class="content__top-navigation-secondary <?php if ($_smarty_tpl->tpl_vars['context_search']->value) {?>content__top-navigation-secondary--fill<?php }?>">
                                <?php if ($_smarty_tpl->tpl_vars['context_search']->value) {?>
                                    <div class="content__context-search">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:components/search_filters/context_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('context_search'=>$_smarty_tpl->tpl_vars['context_search']->value), 0, false);
?>
                                    </div>
                                <?php }?>

                                <?php if ($_smarty_tpl->tpl_vars['select_languages']->value && smarty_modifier_sizeof($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
                                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "languages_select_extra", null, null);?>
                                        <li class="disabled">
                                            <span><?php echo $_smarty_tpl->__("language_content");?>
</span>
                                        </li>
                                    <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                    <div class="content-variant-wrap content-variant-wrap--language language-wrap">
                                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/select_object.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('style'=>"graphic",'link_tpl'=>fn_link_attach($_smarty_tpl->tpl_vars['config']->value['current_url'],"descr_sl="),'items'=>$_smarty_tpl->tpl_vars['languages']->value,'selected_id'=>(defined('DESCR_SL') ? constant('DESCR_SL') : null),'key_name'=>"name",'suffix'=>"content",'extra_pre'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'languages_select_extra'),'display_icons'=>true,'show_button_text'=>false,'show_caret'=>false), 0, false);
?>
                                    </div>
                                <?php }?>
                            </div>
                        <?php }?>
                    <!--content_top_navigation_main--></div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['search_filters_content']->value && smarty_modifier_trim('search_filters_content')) {?>
                    <div class="content__search-filters" id="content_search_filters">
                        <?php echo $_smarty_tpl->tpl_vars['search_filters_content']->value;?>

                    <!--content_search_filters--></div>
                <?php }?>
            <!--content_top_navigation--></div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['tools']->value) {
echo $_smarty_tpl->tpl_vars['tools']->value;
}?>

        <?php if ($_smarty_tpl->tpl_vars['title_extra']->value) {?><div class="title">-&nbsp;</div>
            <?php echo $_smarty_tpl->tpl_vars['title_extra']->value;?>

        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['extra_tools']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['extra_tools']->value)) {?>
            <div class="extra-tools">
                <?php echo $_smarty_tpl->tpl_vars['extra_tools']->value;?>

            </div>
        <?php }?>
    <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:content_top"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

    <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><div id="content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php }?>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    <?php if ($_smarty_tpl->tpl_vars['content_id']->value) {?><!--content_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['content_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }?>

    <?php if ($_smarty_tpl->tpl_vars['box_id']->value) {?><!--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['box_id']->value, ENT_QUOTES, 'UTF-8');?>
--><?php }?></div>
</div>
<!--/Content-->


<!-- Sidebar -->
<?php if (!$_smarty_tpl->tpl_vars['no_sidebar']->value && smarty_modifier_trim($_smarty_tpl->tpl_vars['sidebar_content']->value) != '' && $_smarty_tpl->tpl_vars['sidebar_position']->value == "right") {
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"index:right_sidebar"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"index:right_sidebar"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->_assignInScope('is_open_state_sidebar_save', (($tmp = $_smarty_tpl->tpl_vars['is_open_state_sidebar_save']->value ?? null)===null||$tmp==='' ? false ?? null : $tmp));?>

<div class="sidebar cm-sidebar<?php if ($_smarty_tpl->tpl_vars['is_open_state_sidebar_save']->value) {?> cm-sidebar-open-state-save<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['sidebar_meta']->value, ENT_QUOTES, 'UTF-8');?>
" id="elm_sidebar">
    <div class="sidebar-toggle">
        <span class="sidebar-text"><?php echo $_smarty_tpl->__("sidebar");?>
</span>
        <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>((string)$_smarty_tpl->tpl_vars['sidebar_icon']->value)." sidebar-icon"),$_smarty_tpl);?>

    </div>
    <div class="sidebar-wrapper">
    <?php echo $_smarty_tpl->tpl_vars['sidebar_content']->value;?>

    </div>
<!--elm_sidebar--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"index:right_sidebar"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}?>

</div>

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('inline_script', array());
$_block_repeat=true;
echo smarty_block_inline_script(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo '<script'; ?>
>
    var ajax_callback_data = menu_content;
<?php echo '</script'; ?>
><?php $_block_repeat=false;
echo smarty_block_inline_script(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
echo smarty_function_script(array('src'=>"js/tygh/sidebar.js"),$_smarty_tpl);?>

<?php }
}
