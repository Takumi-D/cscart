<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:21
  from 'C:\xampp\htdocs\cscart\design\backend\templates\buttons\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43540d8e1_30277179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ed8c65d5adeb2fd6c74b9b8b05290821fca7b49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\buttons\\helpers.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43540d8e1_30277179 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'btn' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cscart\\var\\cache\\templates\\backend\\0ed8c65d5adeb2fd6c74b9b8b05290821fca7b49_2.tygh.helpers.tpl.php',
    'uid' => '0ed8c65d5adeb2fd6c74b9b8b05290821fca7b49',
    'call_name' => 'smarty_template_function_btn_21883010266c4b43534d8d6_38536740',
  ),
  'dropdown' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\cscart\\var\\cache\\templates\\backend\\0ed8c65d5adeb2fd6c74b9b8b05290821fca7b49_2.tygh.helpers.tpl.php',
    'uid' => '0ed8c65d5adeb2fd6c74b9b8b05290821fca7b49',
    'call_name' => 'smarty_template_function_dropdown_21883010266c4b43534d8d6_38536740',
  ),
));
?>


<?php }
\Tygh\Languages\Helper::preloadLangVars(array('delete_selected','delete','tools'));
/* smarty_template_function_btn_21883010266c4b43534d8d6_38536740 */
if (!function_exists('smarty_template_function_btn_21883010266c4b43534d8d6_38536740')) {
function smarty_template_function_btn_21883010266c4b43534d8d6_38536740(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('text'=>'','href'=>'','title'=>'','onclick'=>'','target'=>'','class'=>'','data'=>array(),'form'=>'','method'=>'','raw'=>false), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
?>

    <?php if ($_smarty_tpl->tpl_vars['method']->value) {?>
        <?php $_smarty_tpl->_assignInScope('method', mb_strtoupper($_smarty_tpl->tpl_vars['method']->value ?? '', 'UTF-8'));?>
    <?php }?>

    <?php ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? "GET" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable10 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['method']->value ?? null)===null||$tmp==='' ? "POST" ?? null : $tmp), ENT_QUOTES, 'UTF-8');
$_prefixVariable11 = ob_get_clean();
if (fn_check_view_permissions($_smarty_tpl->tpl_vars['href']->value,$_prefixVariable10) && fn_check_view_permissions($_smarty_tpl->tpl_vars['dispatch']->value,$_prefixVariable11)) {?>
        <?php if ($_smarty_tpl->tpl_vars['type']->value === "text" || $_smarty_tpl->tpl_vars['type']->value === "button") {?>
        <?php if ($_smarty_tpl->tpl_vars['href']->value && $_smarty_tpl->tpl_vars['method']->value == "POST") {?>
            <?php $_smarty_tpl->_assignInScope('class', "cm-post ".((string)$_smarty_tpl->tpl_vars['class']->value));?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value === "button") {?>
            <button type="button"
        <?php } else { ?>
            <a
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['target']->value) {?>target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['target']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['href']->value), ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['class']->value) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'data_value', false, 'data_name');
$_smarty_tpl->tpl_vars['data_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data_name']->value => $_smarty_tpl->tpl_vars['data_value']->value) {
$_smarty_tpl->tpl_vars['data_value']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['data_value']->value) {?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_name']->value, ENT_QUOTES, 'UTF-8');?>
="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['data_value']->value, ENT_QUOTES, 'UTF-8');?>
"
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['onclick']->value) {?>onclick="<?php echo $_smarty_tpl->tpl_vars['onclick']->value;?>
; return false;"<?php }?>
        >
        <?php if ($_smarty_tpl->tpl_vars['icon']->value && $_smarty_tpl->tpl_vars['icon_first']->value) {?><span class="btn__icon <?php if ($_smarty_tpl->tpl_vars['text']->value) {?>btn__icon--with-text<?php }?>"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>
</span><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['raw']->value == false) {?>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['text']->value, ENT_QUOTES, 'UTF-8');?>

            <?php } else { ?>
                <?php echo $_smarty_tpl->tpl_vars['text']->value;?>

            <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value && !$_smarty_tpl->tpl_vars['icon_first']->value) {?><span class="btn__icon btn__icon--last <?php if ($_smarty_tpl->tpl_vars['text']->value) {?>btn__icon--with-text<?php }?>"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>$_smarty_tpl->tpl_vars['icon']->value),$_smarty_tpl);?>
</span><?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value === "button") {?>
            </button>
        <?php } else { ?>
            </a>
        <?php }?>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "list") {?>
        <?php if (!$_smarty_tpl->tpl_vars['href']->value && !$_smarty_tpl->tpl_vars['process']->value) {?>
            <?php $_smarty_tpl->_assignInScope('class', "cm-process-items cm-submit ".((string)$_smarty_tpl->tpl_vars['class']->value));?>
        <?php }?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-dispatch'] = $_smarty_tpl->tpl_vars['dispatch']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'target'=>$_smarty_tpl->tpl_vars['target']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'class'=>$_smarty_tpl->tpl_vars['class']->value,'onclick'=>$_smarty_tpl->tpl_vars['onclick']->value,'text'=>$_smarty_tpl->tpl_vars['text']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value,'raw'=>$_smarty_tpl->tpl_vars['raw']->value,'icon'=>''), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "delete_selected") {?>
        <?php if ($_smarty_tpl->tpl_vars['icon']->value) {?>
            <?php $_smarty_tpl->_assignInScope('class', "btn ".((string)$_smarty_tpl->tpl_vars['class']->value));?>
            <?php $_smarty_tpl->_assignInScope('text', " ");?>
        <?php }?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-dispatch'] = $_smarty_tpl->tpl_vars['dispatch']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'target'=>$_smarty_tpl->tpl_vars['target']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'class'=>"cm-process-items cm-submit cm-confirm ".((string)$_smarty_tpl->tpl_vars['class']->value),'click'=>$_smarty_tpl->tpl_vars['click']->value,'text'=>(($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("delete_selected") ?? null : $tmp),'method'=>$_smarty_tpl->tpl_vars['method']->value), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "delete") {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-dispatch'] = $_smarty_tpl->tpl_vars['dispatch']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'target'=>$_smarty_tpl->tpl_vars['target']->value,'href'=>$_smarty_tpl->tpl_vars['href']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'class'=>((string)$_smarty_tpl->tpl_vars['class']->value),'click'=>$_smarty_tpl->tpl_vars['click']->value,'text'=>(($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("delete") ?? null : $tmp),'method'=>$_smarty_tpl->tpl_vars['method']->value), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "dialog") {?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-form'] = $_smarty_tpl->tpl_vars['form']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['data']) ? $_smarty_tpl->tpl_vars['data']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['data-ca-target-id'] = $_smarty_tpl->tpl_vars['target_id']->value;
$_smarty_tpl->_assignInScope('data', $_tmp_array);?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['text']->value,'class'=>"cm-dialog-opener ".((string)$_smarty_tpl->tpl_vars['class']->value),'href'=>$_smarty_tpl->tpl_vars['href']->value,'id'=>$_smarty_tpl->tpl_vars['id']->value,'title'=>$_smarty_tpl->tpl_vars['title']->value,'data'=>$_smarty_tpl->tpl_vars['data']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value,'raw'=>$_smarty_tpl->tpl_vars['raw']->value), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "multiple") {?>
        <?php echo smarty_function_script(array('src'=>"js/tygh/node_cloning.js"),$_smarty_tpl);?>


        <?php $_smarty_tpl->_assignInScope('tag_level', (($tmp = $_smarty_tpl->tpl_vars['tag_level']->value ?? null)===null||$tmp==='' ? "1" ?? null : $tmp));?>
        <?php if ($_smarty_tpl->tpl_vars['only_delete']->value != "Y") {
if (!$_smarty_tpl->tpl_vars['hide_add']->value) {?><li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value)."); ".((string)$_smarty_tpl->tpl_vars['on_add']->value),'id'=>$_smarty_tpl->tpl_vars['item_id']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value), true);?>
</li><?php }
if (!$_smarty_tpl->tpl_vars['hide_clone']->value) {?><li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'onclick'=>"Tygh."."$"."('#box_' + this.id).cloneNode(".((string)$_smarty_tpl->tpl_vars['tag_level']->value).", true);",'id'=>$_smarty_tpl->tpl_vars['item_id']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value), true);?>
</li><?php }
}?><li><?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'only_delete'=>$_smarty_tpl->tpl_vars['only_delete']->value,'class'=>"cm-delete-row",'method'=>$_smarty_tpl->tpl_vars['method']->value), true);?>
</li>
    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "add") {?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'title'=>$_smarty_tpl->tpl_vars['title']->value,'class'=>"cm-tooltip btn",'icon'=>"icon-plus",'href'=>$_smarty_tpl->tpl_vars['href']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value), true);?>

    <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['type']->value == "text_add") {?>
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'btn', array('type'=>"text",'text'=>$_smarty_tpl->tpl_vars['text']->value,'class'=>"btn btn-primary ".((string)$_smarty_tpl->tpl_vars['class']->value),'icon'=>"icon-plus",'icon_first'=>true,'href'=>$_smarty_tpl->tpl_vars['href']->value,'method'=>$_smarty_tpl->tpl_vars['method']->value), true);?>

    <?php }?>

    <?php }
}}
/*/ smarty_template_function_btn_21883010266c4b43534d8d6_38536740 */
/* smarty_template_function_dropdown_21883010266c4b43534d8d6_38536740 */
if (!function_exists('smarty_template_function_dropdown_21883010266c4b43534d8d6_38536740')) {
function smarty_template_function_dropdown_21883010266c4b43534d8d6_38536740(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('text'=>'','title'=>'','class'=>'','content'=>'','icon'=>'','no_caret'=>false,'placement'=>"left"), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),2=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),));
?>

    <?php if (smarty_modifier_trim(smarty_modifier_replace(strip_tags((string) $_smarty_tpl->tpl_vars['content']->value),"&nbsp;",'')) != '') {?>
        <div class="btn-group<?php if ($_smarty_tpl->tpl_vars['placement']->value == "left") {?> dropleft<?php }?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['id']->value) {?>id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <a href="#" class="btn dropdown-toggle <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class_toggle']->value, ENT_QUOTES, 'UTF-8');?>
" data-toggle="dropdown" <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
                <?php $_smarty_tpl->_assignInScope('icon', (($tmp = $_smarty_tpl->tpl_vars['icon']->value ?? null)===null||$tmp==='' ? "icon-cog dropdown-icon--tools" ?? null : $tmp));?>
                <span class="btn__icon btn__icon--caret">
                    <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"dropdown-icon ".((string)$_smarty_tpl->tpl_vars['icon']->value)),$_smarty_tpl);?>

                </span>
                <?php if ($_smarty_tpl->tpl_vars['text']->value) {?>
                    <?php echo (($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__("tools") ?? null : $tmp);?>

                <?php }?>
                <?php if (!$_smarty_tpl->tpl_vars['no_caret']->value) {?>
                    <span class="caret"></span>
                <?php }?>
            </a>
            <ul class="dropdown-menu">
                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

            </ul>
        </div>
    <?php }
}}
/*/ smarty_template_function_dropdown_21883010266c4b43534d8d6_38536740 */
}
