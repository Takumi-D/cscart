<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:21:36
  from 'C:\xampp\htdocs\cscart\design\themes\bright_theme\templates\addons\discussion\views\discussion\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b4805d5db4_13596276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bf798195e178d39211d009f982fa81c8ac989d25' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\bright_theme\\templates\\addons\\discussion\\views\\discussion\\view.tpl',
      1 => 1724167152,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/subheader.tpl' => 2,
    'tygh:common/pagination.tpl' => 4,
    'tygh:addons/discussion/views/discussion/components/stars.tpl' => 2,
    'tygh:addons/discussion/views/discussion/components/new_post_button.tpl' => 2,
  ),
),false)) {
function content_66c4b4805d5db4_13596276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),3=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),4=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),5=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('new_post','write_review','no_posts_found','new_post','write_review','no_posts_found'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST));
if ($_smarty_tpl->tpl_vars['object_type']->value == smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::ORDER")) {?>
    <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("new_post"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("write_review"));
}
if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
            <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0, false);
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <div class="ty-discussion-post__content ty-mb-l">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="ty-discussion-post__author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <span class="ty-caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>

                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_RATING") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING") && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                                <div class="clearfix ty-discussion-post__rating">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ty-discussion-post__message"><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</div>
                            <?php }?>
                        </div>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0, true);
?>
            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0, false);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
    </div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/view.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/view.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('discussion', fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value,true,$_REQUEST));
if ($_smarty_tpl->tpl_vars['object_type']->value == smarty_modifier_enum("Addons\\Discussion\\DiscussionObjectTypes::ORDER")) {?>
    <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("new_post"));
} else { ?>
    <?php $_smarty_tpl->_assignInScope('new_post_title', $_smarty_tpl->__("write_review"));
}
if ($_smarty_tpl->tpl_vars['discussion']->value && $_smarty_tpl->tpl_vars['discussion']->value['type'] != smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
    <div class="discussion-block" id="<?php if ($_smarty_tpl->tpl_vars['container_id']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container_id']->value, ENT_QUOTES, 'UTF-8');
} else { ?>content_discussion<?php }?>">
        <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "content", null, null);?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['title']->value), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subheader']->value) {?>
            <h4><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['subheader']->value, ENT_QUOTES, 'UTF-8');?>
</h4>
        <?php }?>

        <div id="posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['posts']) {?>
                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0, true);
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discussion']->value['posts'], 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
                    <div class="ty-discussion-post__content ty-mb-l">
                        <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"discussion:items_list_row"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
                        <span class="ty-discussion-post__author"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="ty-discussion-post__date"><?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['post']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])), ENT_QUOTES, 'UTF-8');?>
</span>
                        <div class="ty-discussion-post <?php echo smarty_function_cycle(array('values'=>", ty-discussion-post_even"),$_smarty_tpl);?>
" id="post_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['post']->value['post_id'], ENT_QUOTES, 'UTF-8');?>
">
                            <span class="ty-caret"> <span class="ty-caret-outer"></span> <span class="ty-caret-inner"></span></span>

                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_RATING") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING") && $_smarty_tpl->tpl_vars['post']->value['rating_value'] > 0) {?>
                                <div class="clearfix ty-discussion-post__rating">
                                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['post']->value['rating_value'])), 0, true);
?>
                                </div>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION") || $_smarty_tpl->tpl_vars['discussion']->value['type'] == smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_COMMUNICATION_AND_RATING")) {?>
                                <div class="ty-discussion-post__message"><?php echo nl2br((string) htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['message'], ENT_QUOTES, 'UTF-8', true), (bool) 1);?>
</div>
                            <?php }?>
                        </div>

                        <?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"discussion:items_list_row"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                <?php $_smarty_tpl->_subTemplateRender("tygh:common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"pagination_contents_comments_".((string)$_smarty_tpl->tpl_vars['object_id']->value),'extra_url'=>"&selected_section=discussion",'search'=>$_smarty_tpl->tpl_vars['discussion']->value['search']), 0, true);
?>
            <?php } else { ?>
                <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_posts_found");?>
</p>
            <?php }?>
        <!--posts_list_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['object_id']->value, ENT_QUOTES, 'UTF-8');?>
--></div>

        <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type'] !== smarty_modifier_enum("Addons\\Discussion\\DiscussionTypes::TYPE_DISABLED")) {?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:addons/discussion/views/discussion/components/new_post_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>$_smarty_tpl->tpl_vars['new_post_title']->value,'obj_id'=>$_smarty_tpl->tpl_vars['object_id']->value,'object_type'=>$_smarty_tpl->tpl_vars['discussion']->value['object_type'],'locate_to_review_tab'=>$_smarty_tpl->tpl_vars['locate_to_review_tab']->value), 0, true);
?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['wrap']->value == true) {?>
            <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'content');?>

        <?php } else { ?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "mainbox_title", null, null);
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php }?>
    </div>
<?php }
}
}
}
