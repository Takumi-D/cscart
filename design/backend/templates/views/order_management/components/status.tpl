{if "orders.update_status"|fn_check_view_permissions:"POST"}
<div class="control-group">
	<div class="control-label"><h4 class="subheader order-management-status__subheader">{__("status")}</h4></div>
	<div class="controls">
        {hook name="order_management:order_status"}
		  {include file="common/select_object.tpl"
		  	text_wrap=true
		  	style="field"
		  	items=$order_statuses
		  	select_container_name="order_status"
		  	selected_key=$cart.order_status|default:"O"
		}
        {/hook}
	</div>
</div>
{/if}