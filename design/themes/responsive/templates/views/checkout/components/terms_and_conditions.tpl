<div class="ty-control-group ty-checkout__terms">
    {$const_suffix = $const_suffix|default:""}
    {$is_id_accept_terms_checked = ($user_data["id_accept_terms`$const_suffix`"] === "Y")}

    {hook name="checkout:terms_and_conditions"}
    <div class="cm-field-container">
        {strip}
        <label for="id_accept_terms{$suffix}" class="cm-check-agreement">
            <input type="hidden" {""}
                name="accept_terms" {""}
                value="N" {""}
                data-ca-lite-checkout-field="user_data.id_accept_terms{$const_suffix}" {""}
                data-ca-lite-checkout-auto-save="true" {""}
            />
            <input type="checkbox" {""}
                id="id_accept_terms{$suffix}" {""}
                name="accept_terms" {""}
                value="Y" {""}
                class="cm-agreement checkbox" {""}
                {if $is_id_accept_terms_checked}checked="checked"{/if}
                {if $iframe_mode}onclick="fn_check_agreements();"{/if} {""}
                data-ca-lite-checkout-field="user_data.id_accept_terms{$const_suffix}" {""}
                data-ca-lite-checkout-auto-save="true" {""}
            />
            {capture name="terms_link"}
                <a id="sw_terms_and_conditions_{$suffix}" class="cm-combination ty-dashed-link">
                    {__("checkout_terms_n_conditions_name")}
                </a>
            {/capture}
            {__("checkout_terms_n_conditions", ["[terms_href]" => $smarty.capture.terms_link]) nofilter}
        </label>
        {/strip}

        <div class="hidden" id="terms_and_conditions_{$suffix}">
            {__("terms_and_conditions_content") nofilter}
        </div>
    </div>
    {/hook}
</div>

{hook name="checkout:terms_and_conditions_extra"}{/hook}

{if $cart_agreements}
    {$is_product_agreements_checked = ($user_data["product_agreements_`$const_suffix`"] === "Y")}
    <div class="ty-control-group ty-license-agreement__checkbox">
        {hook name="checkout:terms_and_conditions_downloadable"}
        <div class="cm-field-container">
            {strip}
            <label for="product_agreements_{$suffix}" class="cm-check-agreement ty-license-agreement__checkbox__checkbox">
                <input type="hidden" {""}
                    name="agreements[]" {""}
                    value="N" {""}
                    data-ca-lite-checkout-field="user_data.product_agreements_{$const_suffix}" {""}
                    data-ca-lite-checkout-auto-save="true" {""}
                />
                <input type="checkbox" {""}
                    id="product_agreements_{$suffix}" {""}
                    name="agreements[]" {""}
                    value="Y" {""}
                    class="cm-agreement checkbox" {""}
                    {if $is_product_agreements_checked}checked="checked"{/if}
                    {if $iframe_mode}onclick="fn_check_agreements();"{/if} {""}
                    data-ca-lite-checkout-field="user_data.product_agreements_{$const_suffix}" {""}
                    data-ca-lite-checkout-auto-save="true" {""}
                />
                <span>{__("checkout_edp_terms_n_conditions")}</span>&nbsp;
                <a id="sw_elm_agreements_{$suffix}" class="cm-combination ty-dashed-link">{__("license_agreement")}</a>
            </label>
            {/strip}
        </div>
        {/hook}
        <div class="hidden" id="elm_agreements_{$suffix}">
        {foreach from=$cart_agreements item="product_agreements"}
            {foreach from=$product_agreements item="agreement"}
                <p>{$agreement.license nofilter}</p>
            {/foreach}
        {/foreach}
        </div>
    </div>
{/if}

<script>
    (function(_, $) {
        $.ceFormValidator('registerValidator', {
            class_name: 'cm-check-agreement',
            message: '{__("checkout_terms_n_conditions_alert")|escape:javascript}',
            func: function(id) {
                return $('#' + id).prop('checked');
            }
        });
    }(Tygh, Tygh.$));

    {if $iframe_mode}
        function fn_check_agreements() {
            var $blockingBlock = $('.ty-payment-method-iframe');

            if ($blockingBlock.length > 0) {
                var agreementCount = $('input[type=checkbox].cm-agreement').length,
                    acceptedAgreementCount = $('input[type=checkbox].cm-agreement:checkbox:checked').length,
                    checked = agreementCount === acceptedAgreementCount;

                $blockingBlock.toggleClass('hidden', checked);
            }
        }

        $.ceEvent('on', 'ce.ajaxdone', function (elms, inline_scripts, params, data) {
            if (data && data.html && data.html.litecheckout_step_payment) {
                var $elm = $(data.html.litecheckout_step_payment).find('.ty-payment-method-iframe');

                if ($elm.length > 0) {
                    fn_check_agreements();
                }
            }
        });

        $.ceEvent('on', 'ce.commoninit', function (context) {
            var $blockingBlock = $('.ty-payment-method-iframe', context);
            if (!$blockingBlock.length) {
                return;
            }
            fn_check_agreements();
        });
    {/if}
</script>
