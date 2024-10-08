{capture name="mainbox"}

<form action="{""|fn_url}" method="post" name="localizations_form"  class="cm-comet cm-ajax">
<input type="hidden" name="result_ids" value="localizations_table" />

<div id="localizations_table">

{if $localizations}
<div class="table-responsive-wrapper">
    <table width="100%" class="table table-middle table--relative table-responsive">
    <thead>
    <tr>
        <th class="mobile-hide" width="1%">
            {include file="common/check_items.tpl"}</th>
        <th width="40%">{__("name")}</th>
        <th width="10%" class="center">{__("default")}</th>
        <th width="5%">&nbsp;</th>
        <th width="10%" class="right">{__("status")}</th>
    </tr>
    </thead>
    {foreach from=$localizations item=localization}
    <tr class="cm-row-status-{$localization.status|lower}">
        <td align="left mobile-hide">
            <input name="localization_ids[]" type="checkbox" class=" cm-item" value="{$localization.localization_id}" /></td>
        <td data-th="{__("name")}">
             <a href="{"localizations.update?localization_id=`$localization.localization_id`"|fn_url}" class="link--monochrome">{$localization.localization}</a>
        </td>
        <td class="center" data-th="{__("default")}">
            {if $localization.is_default == "Y"}
                {__("default")}
            {else}
                {__("no")}
            {/if}
        </td>
        <td class="nowrap right" data-th="{__("tools")}">
            {capture name="tools_list"}
                <li>{btn type="list" text=__("edit") href="localizations.update?localization_id=`$localization.localization_id`"}</li>
                <li>{btn type="text" text=__("delete") href="localizations.delete?localization_id=`$localization.localization_id`" class="cm-confirm cm-ajax cm-comet" data=['data-ca-target-id'=>'localizations_table'] method="POST"}</li>
            {/capture}
            <div class="hidden-tools">
                {dropdown content=$smarty.capture.tools_list}
            </div>
        </td>
        <td class="right" data-th="{__("status")}">
            {include file="common/select_popup.tpl" type="localizations" id=$localization.localization_id status=$localization.status object_id_name="localization_id" table="localizations"}</td>
    </tr>
    {/foreach}
    </table>
</div>
{else}
    <p class="no-items">{__("no_data")}</p>
{/if}

<!--localizations_table--></div>
</form>

{capture name="adv_buttons"}
    {include file="common/tools.tpl"
        tool_href="localizations.add"
        tool_override_meta="btn btn-primary"
        prefix="top"
        title=__("add_localization")
        link_text=__("add_localization")
        icon="icon-plus"
    }
{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $localizations}
            <li>{btn type="delete_selected" dispatch="dispatch[localizations.m_delete]" form="localizations_form"}</li>
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list class="mobile-hide"}
{/capture}

{/capture}
{include file="common/mainbox.tpl" title=__("localizations") content=$smarty.capture.mainbox adv_buttons=$smarty.capture.adv_buttons buttons=$smarty.capture.buttons select_languages=true}