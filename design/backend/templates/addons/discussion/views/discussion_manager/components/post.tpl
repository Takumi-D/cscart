{assign var="current_redirect_url" value=$config.current_url|fn_link_attach:"selected_section=discussion"|escape:url}
<div class="summary">
    <input type="text" name="posts[{$post.post_id}][name]" value="{$post.name}" size="40" class="input-hidden">

    {hook name="discussion:update_post"}
        {if $type == "C" || $type == "B"}
            <textarea name="posts[{$post.post_id}][message]" cols="80" rows="5" class="input-hidden">{$post.message}</textarea>
        {/if}
    {/hook}
</div>
<div class="tools">
    <div class="pull-left">
        {if "discussion.m_delete"|fn_check_view_permissions}
            {assign var="d_url" value=$config.current_url|fn_link_attach:"selected_section=discussion"|fn_url}
            <input type="hidden" name="d_redirect_url" value="{$d_url}" />
            <div class="pull-left shift-top">
                <input type="checkbox"
                    name="delete_posts[{$post.post_id}]"
                    id="delete_checkbox_{$post.post_id}"
                    class="pull-left cm-item"
                    value="Y"
                >
            </div>
        {/if}
        <div class="pull-left post__statuses cm-statuses">
            {if "discussion.update"|fn_check_view_permissions}
                <span class="cm-status-a {if $post.status == "D"}hidden{/if}">
                    <span class="label label-success">{__("approved")}</span>
                    {btn type="text"
                        id="premoderation_disapprove"
                        title=__("disapprove")
                        icon="icon-thumbs-down"
                        icon_first=true
                        class="btn post__btn-status-switch cm-status-switch"
                        data=[
                            "data-ca-status"=>"D",
                            "data-ca-post-id"=>$post.post_id
                        ]
                    }
                </span>
                <span class="cm-status-d {if $post.status == "A"}hidden{/if}">
                    <span class="label label-important">{__("not_approved")}</span>
                    {btn type="text"
                        id="premoderation_disapprove"
                        title=__("approve")
                        icon="icon-thumbs-up"
                        icon_first=true
                        class="btn post__btn-status-switch cm-status-switch"
                        data=[
                            "data-ca-status"=>"A",
                            "data-ca-post-id"=>$post.post_id
                        ]
                    }
                </span>
            {else}
                <span class="cm-status-{$post.status|lower}">
                    {if $post.status == "A"}
                        <span class="label label-success">{__("approved")}</span>
                    {else}
                        <span class="label label-important">{__("not_approved")}</span>
                    {/if}
                </span>
            {/if}
            {if "discussion.delete"|fn_check_view_permissions}
                {btn type="text"
                    icon="icon-trash"
                    title="{__("delete")}"
                    class="btn post__btn-delete cm-confirm"
                    method="POST"
                    href="{"discussion.delete?post_id=`$post.post_id`&redirect_url=`$current_redirect_url`"|fn_url}"
                }
            {/if}
        </div>
    </div>


    <div class="pull-right">
        <span class="muted">
            {include file="common/calendar.tpl"
                date_id="elm_date_holder_`$post.post_id`"
                date_name="posts[`$post.post_id`][date]"
                date_val=$post.timestamp|default:$smarty.const.TIME
                start_year=$settings.Company.company_start_year
                date_meta="post-date"
                show_time=true
                time_name="posts[`$post.post_id`][time]"
                meta_class="review-date"
            }
            /
            {__("ip_address")}:&nbsp;{$post.ip_address}
        </span>

        {if ($type == "R" || $type == "B") && $post.rating_value > 0}
            {if $allow_save}
                {include file="addons/discussion/views/discussion_manager/components/rate.tpl" rate_id="rating_`$post.post_id`" rate_value=$post.rating_value rate_name="posts[`$post.post_id`][rating_value]"}
            {else}
                {include file="addons/discussion/views/discussion_manager/components/stars.tpl" stars=$post.rating_value}
            {/if}
        {/if}
    </div>

    {if $show_object_link}
        <a href="{$post.object_data.url|fn_url}" class="post-object" title="{$post.object_data.description}">{$post.object_data.description}</a>
    {/if}
</div>
