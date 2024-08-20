<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:21:36
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\blog\hooks\pages\page_extra.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4801cd990_66027835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f675fab52d7c1aba5113ebc3f79903334e26736c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\blog\\hooks\\pages\\page_extra.pre.tpl',
      1 => 1724167149,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/pagination.tpl' => 4,
    'tygh:common/image.tpl' => 2,
  ),
),false)) {
function content_66c4b4801cd990_66027835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.live_edit.php','function'=>'smarty_function_live_edit',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('by','blog.read_more','by','blog.read_more'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="ty-blog">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subpages']->value, 'subpage');
$_smarty_tpl->tpl_vars['subpage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subpage']->value) {
$_smarty_tpl->tpl_vars['subpage']->do_else = false;
?>
            <div class="ty-blog__item">
                <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <h2 class="ty-blog__post-title">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'UTF-8');?>

                    </h2>
                </a>
                <div class="ty-blog__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="ty-blog__author"><?php echo $_smarty_tpl->__("by");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['author'], ENT_QUOTES, 'UTF-8');?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['subpage']->value['main_pair']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-blog__img-block">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['subpage']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['subpage']->value['main_pair']), 0, true);
?>
                    </div>
                </a>
                <?php }?>
                <div class="ty-blog__description">
                    <div class="ty-wysiwyg-content">
                        <div><?php echo $_smarty_tpl->tpl_vars['subpage']->value['spoiler'];?>
</div>
                    </div>
                    <div class="ty-blog__read-more ty-mt-l">
                        <a class="ty-btn ty-btn__secondary" href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("blog.read_more");?>
</a>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-blog__post-title" <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/blog/hooks/pages/page_extra.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/blog/hooks/pages/page_extra.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['page']->value['page_type'] == (defined('PAGE_TYPE_BLOG') ? constant('PAGE_TYPE_BLOG') : null)) {?>

<?php if ($_smarty_tpl->tpl_vars['subpages']->value) {?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <div class="ty-blog">
        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subpages']->value, 'subpage');
$_smarty_tpl->tpl_vars['subpage']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subpage']->value) {
$_smarty_tpl->tpl_vars['subpage']->do_else = false;
?>
            <div class="ty-blog__item">
                <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <h2 class="ty-blog__post-title">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['page'], ENT_QUOTES, 'UTF-8');?>

                    </h2>
                </a>
                <div class="ty-blog__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['subpage']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>
</div>
                <div class="ty-blog__author"><?php echo $_smarty_tpl->__("by");?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subpage']->value['author'], ENT_QUOTES, 'UTF-8');?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['subpage']->value['main_pair']) {?>
                <a href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
">
                    <div class="ty-blog__img-block">
                        <?php $_smarty_tpl->_subTemplateRender("tygh:common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('obj_id'=>$_smarty_tpl->tpl_vars['subpage']->value['page_id'],'images'=>$_smarty_tpl->tpl_vars['subpage']->value['main_pair']), 0, true);
?>
                    </div>
                </a>
                <?php }?>
                <div class="ty-blog__description">
                    <div class="ty-wysiwyg-content">
                        <div><?php echo $_smarty_tpl->tpl_vars['subpage']->value['spoiler'];?>
</div>
                    </div>
                    <div class="ty-blog__read-more ty-mt-l">
                        <a class="ty-btn ty-btn__secondary" href="<?php echo htmlspecialchars((string) fn_url("pages.view?page_id=".((string)$_smarty_tpl->tpl_vars['subpage']->value['page_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("blog.read_more");?>
</a>
                    </div>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['page']->value['description']) {?>
    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);?><span class="ty-blog__post-title" <?php echo smarty_function_live_edit(array('name'=>"page:page:".((string)$_smarty_tpl->tpl_vars['page']->value['page_id'])),$_smarty_tpl);?>
><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>
</span><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
}?>

<?php }
}
}
}
