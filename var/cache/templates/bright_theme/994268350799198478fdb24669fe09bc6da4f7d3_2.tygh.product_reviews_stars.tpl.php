<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:07
  from 'C:\xampp\htdocs\cscart\design\themes\responsive\templates\addons\product_reviews\views\product_reviews\components\product_reviews_stars.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b427e44ee5_55857855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '994268350799198478fdb24669fe09bc6da4f7d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\themes\\responsive\\templates\\addons\\product_reviews\\views\\product_reviews\\components\\product_reviews_stars.tpl',
      1 => 1724167152,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b427e44ee5_55857855 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\modifier.trim.php','function'=>'smarty_modifier_trim',),1=>array('file'=>'C:\\xampp\\htdocs\\cscart\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_rating','product_reviews.click_to_see_reviews','product_reviews.product_is_rated_n_out_of_five_stars','product_reviews.show_rating','product_reviews.click_to_see_reviews'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['rating']->value > 0) {?>

    <?php $_smarty_tpl->_assignInScope('integer_rating', floor($_smarty_tpl->tpl_vars['rating']->value));?>
    <?php $_smarty_tpl->_assignInScope('accurate_rating', round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 1, (int) 1));?>
    <?php $_smarty_tpl->_assignInScope('is_half_rating', (($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value) >= 0.25 && ($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value) < 0.75));?>
    <?php $_smarty_tpl->_assignInScope('integer_rating_math', round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 0, (int) 1));?>
    <?php $_smarty_tpl->_assignInScope('full_stars_count', $_smarty_tpl->tpl_vars['is_half_rating']->value ? $_smarty_tpl->tpl_vars['integer_rating']->value : $_smarty_tpl->tpl_vars['integer_rating_math']->value);?>
    <?php $_smarty_tpl->_assignInScope('scroll_to_elm', (($tmp = $_smarty_tpl->tpl_vars['scroll_to_elm']->value ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('external_click_id', (($tmp = $_smarty_tpl->tpl_vars['external_click_id']->value ?? null)===null||$tmp==='' ? "product_reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("product_reviews.product_is_rated_n_out_of_five_stars",array("[n]"=>$_smarty_tpl->tpl_vars['accurate_rating']->value)));?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.show_rating");
$_prefixVariable16=ob_get_clean();
$_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_prefixVariable16.".");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.click_to_see_reviews");
$_prefixVariable17=ob_get_clean();
$_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_prefixVariable17.".");?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value === true) {?>
        <?php $_smarty_tpl->_assignInScope('link', "products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=product_reviews#product_reviews");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a class="ty-product-review-reviews-stars__link <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="ty-product-review-reviews-stars__button ty-btn-reset cm-external-click <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php }?>
        <div class="ty-product-review-reviews-stars
            <?php if ($_smarty_tpl->tpl_vars['size']->value === "large") {?>
                ty-product-review-reviews-stars--large
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value === "xlarge") {?>
                ty-product-review-reviews-stars--xlarge
            <?php }?>
            "
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['full_stars_count']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_half_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!$_smarty_tpl->tpl_vars['link']->value && !$_smarty_tpl->tpl_vars['button']->value) {?>
                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        ></div>
    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        </button>
    <?php }?>

<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (smarty_modifier_trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/views/product_reviews/components/product_reviews_stars.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['rating']->value > 0) {?>

    <?php $_smarty_tpl->_assignInScope('integer_rating', floor($_smarty_tpl->tpl_vars['rating']->value));?>
    <?php $_smarty_tpl->_assignInScope('accurate_rating', round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 1, (int) 1));?>
    <?php $_smarty_tpl->_assignInScope('is_half_rating', (($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value) >= 0.25 && ($_smarty_tpl->tpl_vars['rating']->value-$_smarty_tpl->tpl_vars['integer_rating']->value) < 0.75));?>
    <?php $_smarty_tpl->_assignInScope('integer_rating_math', round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 0, (int) 1));?>
    <?php $_smarty_tpl->_assignInScope('full_stars_count', $_smarty_tpl->tpl_vars['is_half_rating']->value ? $_smarty_tpl->tpl_vars['integer_rating']->value : $_smarty_tpl->tpl_vars['integer_rating_math']->value);?>
    <?php $_smarty_tpl->_assignInScope('scroll_to_elm', (($tmp = $_smarty_tpl->tpl_vars['scroll_to_elm']->value ?? null)===null||$tmp==='' ? "content_product_reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('external_click_id', (($tmp = $_smarty_tpl->tpl_vars['external_click_id']->value ?? null)===null||$tmp==='' ? "product_reviews" ?? null : $tmp));?>
    <?php $_smarty_tpl->_assignInScope('title', $_smarty_tpl->__("product_reviews.product_is_rated_n_out_of_five_stars",array("[n]"=>$_smarty_tpl->tpl_vars['accurate_rating']->value)));?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.show_rating");
$_prefixVariable18=ob_get_clean();
$_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_prefixVariable18.".");?>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <?php ob_start();
echo $_smarty_tpl->__("product_reviews.click_to_see_reviews");
$_prefixVariable19=ob_get_clean();
$_smarty_tpl->_assignInScope('title', ((string)$_smarty_tpl->tpl_vars['title']->value).". ".$_prefixVariable19.".");?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['link']->value === true) {?>
        <?php $_smarty_tpl->_assignInScope('link', "products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."&selected_section=product_reviews#product_reviews");?>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        <a class="ty-product-review-reviews-stars__link <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            href="<?php echo htmlspecialchars((string) fn_url($_smarty_tpl->tpl_vars['link']->value), ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        <button type="button"
            class="ty-product-review-reviews-stars__button ty-btn-reset cm-external-click <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['meta']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-scroll="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['scroll_to_elm']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-external-click-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['external_click_id']->value, ENT_QUOTES, 'UTF-8');?>
"
            title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
        >
    <?php }?>
        <div class="ty-product-review-reviews-stars
            <?php if ($_smarty_tpl->tpl_vars['size']->value === "large") {?>
                ty-product-review-reviews-stars--large
            <?php } elseif ($_smarty_tpl->tpl_vars['size']->value === "xlarge") {?>
                ty-product-review-reviews-stars--xlarge
            <?php }?>
            "
            data-ca-product-review-reviews-stars-rating="<?php echo htmlspecialchars((string) round((float) $_smarty_tpl->tpl_vars['rating']->value, (int) 0, (int) 1), ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-full="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['full_stars_count']->value, ENT_QUOTES, 'UTF-8');?>
"
            data-ca-product-review-reviews-stars-is-half="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_half_rating']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!$_smarty_tpl->tpl_vars['link']->value && !$_smarty_tpl->tpl_vars['button']->value) {?>
                title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"
            <?php }?>
        ></div>
    <?php if ($_smarty_tpl->tpl_vars['link']->value) {?>
        </a>
    <?php } elseif ($_smarty_tpl->tpl_vars['button']->value) {?>
        </button>
    <?php }?>

<?php }
}
}
}
