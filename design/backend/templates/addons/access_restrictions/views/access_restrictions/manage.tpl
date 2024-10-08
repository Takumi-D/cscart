{assign var="c_url" value=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
{include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
{include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}

{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="access_restrictions_form" class="form-horizontal form-edit " id="access_restrictions_form">
<input type="hidden" name="selected_section" value="{$selected_section}" />

{notes}
    {__("text_access_notice") nofilter}
{/notes}

{capture name="tabsbox"}

{if $selected_section == "ip" || $selected_section == "admin_panel"}
{assign var="value_name" value="ip"}
<div id="content_{$selected_section}">

{include file="common/pagination.tpl" save_current_url=true}
{if $rules}
    {capture name="access_restrictions_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                {hook name="access_restrictions:item_fields_header"}
                <th width="1%" class="left mobile-hide">
                    {include file="common/check_items.tpl"}

                    <input type="checkbox"
                           class="bulkedit-toggler hide"
                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th><a class="cm-ajax" href="{"`$c_url`&sort_by=ip&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("ips")}{if $search.sort_by === "ip"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="55%"><a class="cm-ajax" href="{"`$c_url`&sort_by=reason&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("reason")}{if $search.sort_by === "reason"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th><a class="cm-ajax" href="{"`$c_url`&sort_by=created&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("created")}{if $search.sort_by === "created"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                <th width="5%">&nbsp;</th>
                <th class="right" width="10%"><a class="cm-ajax" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}</a></th>
                {/hook}
            </tr>
            </thead>
                {include file="addons/access_restrictions/views/access_restrictions/components/items_list.tpl" items=$rules}
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="access_restrictions_form"
        object="access_restrictions"
        items=$smarty.capture.access_restrictions_table
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl" save_current_url=true}

{if $rules}
    {if $show_mp}
    {capture name="tools_list"}
        <li><a data-ca-dispatch="dispatch[access_restrictions.make_permanent]" class="cm-process-items cm-submit cm-confirm" data-ca-target-form="access_restrictions_form">{__("make_permanent")}</a></li>
    {/capture}
        {include file="common/tools.tpl" prefix="main" hide_actions=true tools_list=$smarty.capture.tools_list display="inline" link_text=__("choose_action")}
    {/if}
    {capture name="_buttons"}
        {capture name="tools_list"}
            <li>{btn type="delete_selected" dispatch="dispatch[access_restrictions.m_delete]" form="access_restrictions_form"}</li>
        {/capture}
        {dropdown content=$smarty.capture.tools_list class="mobile-hide"}
    {/capture}
{/if}

</div>

{*************************************************************** Domains **********************************************************}
{elseif $selected_section}
<div id="content_{$selected_section}">

{include file="common/pagination.tpl" save_current_url=true}

{if $selected_section == "domain"}
{assign var="value_name" value=__("domain")}
{elseif $selected_section == "email"}
{assign var="value_name" value=__("email")}
{elseif $selected_section == "credit_card"}
{assign var="value_name" value=__("credit_card_number")}
{/if}

{if $rules}
    {capture name="access_restrictions_table"}
        <div class="table-responsive-wrapper longtap-selection">
            <table width="100%" class="table table-middle table--relative table-responsive">
            <thead
                    data-ca-bulkedit-default-object="true"
                    data-ca-bulkedit-component="defaultObject"
            >
            <tr>
                <th width="1%" class="mobile-hide">
                    {include file="common/check_items.tpl"}

                    <input type="checkbox"
                           class="bulkedit-toggler hide"
                           data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                           data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                    />
                </th>
                <th><a class="cm-ajax{if $search.sort_by === "value"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=value&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{$value_name}{if $search.sort_by === "value"}{$c_icon nofilter}{/if}</a></th>
                <th><a class="cm-ajax{if $search.sort_by === "reason"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=reason&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("reason")}{if $search.sort_by === "reason"}{$c_icon nofilter}{/if}</a></th>
                <th><a class="cm-ajax{if $search.sort_by === "created"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=created&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("created")}{if $search.sort_by === "created"}{$c_icon nofilter}{/if}</a></th>
                <th>&nbsp;</th>
                <th class="right"><a class="cm-ajax{if $search.sort_by === "status"} sort-link-{$search.sort_order_rev}{/if}" href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}" data-ca-target-id="pagination_contents">{__("status")}{if $search.sort_by === "status"}{$c_icon nofilter}{/if}</a></th>

            </tr>
            </thead>
                {include file="addons/access_restrictions/views/access_restrictions/components/items_list.tpl" items=$rules}
            </table>
        </div>
    {/capture}

    {include file="common/context_menu_wrapper.tpl"
        form="access_restrictions_form"
        object="access_restrictions"
        items=$smarty.capture.access_restrictions_table
    }
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

{include file="common/pagination.tpl" save_current_url=true}

</div>
{/if}

{/capture}
{include file="common/tabsbox.tpl" content=$smarty.capture.tabsbox active_tab=$selected_section}

</form>
{/capture}

{capture name="adv_buttons"}
    {capture name="add_new_picker"}
        {include file="addons/access_restrictions/views/access_restrictions/components/add_items.tpl" object_name=$value_name}
    {/capture}

    {if $selected_section == "domain"}
        {assign var="_text" value=__("new_domains")}
        {assign var="_link" value=__("add_domains")}
    {elseif $selected_section == "email"}
        {assign var="_text" value=__("new_emails")}
        {assign var="_link" value=__("add_emails")}
    {elseif $selected_section == "credit_card"}
        {assign var="_text" value=__("new_credit_card")}
        {assign var="_link" value=__("add_credit_card")}
    {else}
        {assign var="_text" value=__("new_ips")}
        {assign var="_link" value=__("add_ips")}
    {/if}

    {include file="common/popupbox.tpl"
        id="add_new_section"
        text=$_text
        content=$smarty.capture.add_new_picker
        act="general"
        title=$_link
        link_text=$_link
        icon="icon-plus"
        link_class="btn-primary"
    }
{/capture}

{capture name="buttons"}
    {if $rules}
        {include file="buttons/save.tpl" but_name="dispatch[access_restrictions.m_update]" but_role="action" but_target_form="access_restrictions_form" but_meta="cm-submit"}
    {/if}
{/capture}

{include file="common/mainbox.tpl" title=__("access_restrictions") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons adv_buttons=$smarty.capture.adv_buttons select_languages=true}
