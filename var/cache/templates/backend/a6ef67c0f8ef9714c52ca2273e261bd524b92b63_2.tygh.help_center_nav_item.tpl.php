<?php
/* Smarty version 4.3.0, created on 2024-08-20 18:20:27
  from 'C:\xampp\htdocs\cscart\design\backend\templates\addons\help_center\templates\help_center_nav_item.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_66c4b43ba64426_68345905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6ef67c0f8ef9714c52ca2273e261bd524b92b63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\cscart\\design\\backend\\templates\\addons\\help_center\\templates\\help_center_nav_item.tpl',
      1 => 1723122959,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66c4b43ba64426_68345905 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <?php echo '<script'; ?>
 type="text/template" data-ca-help-center="navItem" data-no-defer="true" data-no-execute="§"
        ><li id="help_center_${data.id}_${data.suffix}" class="help-center-nav-item ${data.isShow ? 'active' : ''} ${data.isDisabled ? 'disabled' : ''} ${data.url ? '': 'cm-js'}">
            ${data.url
                ? `<a href="${data.url}" target="_blank" class="help-center-nav-item__btn help-center-nav-item__btn--link">`
                : `<button type="button" class="help-center-nav-item__btn
                    ${data.new ? 'help-center-icon-before help-center-nav-item__btn--new' : ''}
                    ${data.external ? 'help-center-icon help-center-nav-item__btn--external' : ''}
                " ${data.isDisabled ? 'data-ca-stop-event-propagation="true"' : ''}>`
            }
                <img src="${Tygh.images_dir.replace('media/images', 'templates/icons/' + (data.icon && data.icon.startsWith('icon-') ? data.icon.slice('icon-'.length).replace('-', '_') : 'file_text') + '.svg')}"
                    width="20"
                    height="20"
                    class="cs-icon help-center-nav-item__icon"
                />
                <span class="cs-icon help-center-nav-item__text"
                    data-ca-help-center-blocks-counter="${data.blocks_counter_text ? data.blocks_counter_text : ''}"
                >${data.name}</span>
            ${data.url
                ? '</a>'
                : '</button>'
            }
    </li><?php echo '</script'; ?>
>

<?php }
}
