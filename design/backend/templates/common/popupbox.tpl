{assign var="method" value=$method|default:"POST"}
{$responsive_dialog_params=""}
{if isset($title_start) && isset($title_end)}
    {$t_first=$title_start|strip_tags}
    {$t_second=$title_end|strip_tags}
    {$responsive_dialog_params="data-ca-dialog-template=\"<span class='title__part-start mobile-hidden'>?: </span><span class='title__part-end'>?</span>\""}
    {$responsive_dialog_params="`$responsive_dialog_params` data-ca-dialog-text-first=\"`$t_first|escape`\""}
    {$responsive_dialog_params="`$responsive_dialog_params` data-ca-dialog-text-second=\"`$t_second|escape`\""}
{/if}
{$popup_params = " id=\"opener_`$id`\" data-ca-target-id=\"content_`$id`\""}
{if !$content}
{$popup_params = "`$popup_params` `$responsive_dialog_params` data-ca-dialog-title=\"`$text|default:""|replace:'"':''`\""}
{/if}
{if ($action && $action|fn_check_view_permissions:$method) || (!$action && $content|fn_check_html_view_permissions:$method)}
{if $act == "edit"}
    {assign var="_href" value=$href|default:""|fn_url}
    {assign var="default_link_text" value=__("edit")}
    {if !$_href|fn_check_view_permissions}
        {assign var="_link_text" value=__("view")}
        {assign var="default_link_text" value=__("view")}
    {/if}
    <a {if $edit_onclick}onclick="{$edit_onclick}"{/if} class="hand {if !$no_icon_link}{if $update_controller == "addons"}icon-cog{/if}{if $icon}{$icon}{/if}{/if} {if !$is_promo}cm-dialog-opener{/if}{if $is_promo}cm-promo-popup{/if} {if $_href && !$is_promo} {$opener_ajax_class|default:'cm-ajax'}{/if}{if $link_class} {$link_class}{/if}" {if $_href && !$is_promo} href="{$_href}"{/if} {$popup_params nofilter} title="{$link_text|default:__("edit")}" {if $drop_left}data-placement="left"{/if}>{if $icon}<span class="btn__icon--with-text flex-inline top">{include_ext file="common/icon.tpl" class=$icon}</span>{/if}{$link_text|default:$default_link_text nofilter}</a>
{elseif $act == "edit_outside"}
    <a {if $edit_onclick}onclick="{$edit_onclick}"{/if} class="hand btn cm-tooltip cm-dialog-opener {if $_href} {$opener_ajax_class|default:'cm-ajax'}{/if}{if $link_class} {$link_class}{/if}" {if $_href} href="{$_href}"{/if} {$popup_params nofilter} title="{$link_text|default:__("edit")}" {if $drop_left}data-placement="left"{/if}>
        {$link_text|default:$default_link_text nofilter}
    </a>
{elseif $act == "create"}
    {include file="buttons/button.tpl" but_onclick=$edit_onclick but_text=$but_text but_role="add" but_target_id="content_`$id`" but_meta="btn cm-dialog-opener `$but_meta`" but_icon=$icon}
{elseif $act == "notes"}
    <a {$popup_params nofilter} class="cm-dialog-opener {$meta}"><span class="flex-inline top btn__icon">{include_ext file="common/icon.tpl" class=$icon|default:'icon-question-sign'}</span></a>
{elseif $act == "general"}
        <div class="btn-group {$meta}">
            <a class="btn cm-dialog-opener {$link_class} cm-tooltip" {$popup_params nofilter} {if $edit_onclick}onclick="{$edit_onclick}"{/if} {if $href}href="{$href|fn_url}"{/if} {if $title}title="{$title}"{/if}>{if $icon}<span class="flex-inline top btn__icon {if $link_text}btn__icon--with-text{/if}">{include_ext file="common/icon.tpl" class=$icon}</span>{/if} {$link_text}</a>
        </div>
{elseif $act == "button"}
    {include file="buttons/button.tpl" but_text=$link_text but_href=$but_href but_role=$but_role but_id="opener_`$id`" but_onclick="$edit_onclick" but_target_id="content_`$id`" but_meta="btn cm-dialog-opener `$but_meta`"}
{elseif $act == "link"}
    <a class="cm-dialog-opener {$link_class}" {$popup_params nofilter} {if $edit_onclick}onclick="{$edit_onclick}"{/if} {if $href}href="{$href|fn_url}"{/if}>{$link_text|default:__("add") nofilter}</a>
{elseif $act == "default"}
    <a{if $onclick} onclick="{$onclick}"{/if}{if $href} href="{$href|fn_url}"{/if} class="{$link_class}">{$link_text}</a>
{/if}

{if $content}
<div class="hidden {if "ULTIMATE"|fn_allowed_for}ufa{/if}" title="{$text}" id="content_{$id}">
    {$content nofilter}
<!--content_{$id}--></div>
{/if}

{else}{*
skipped {$text}
*}{/if}
