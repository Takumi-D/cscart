<div class="cm-processing-personal-data" data-ca-processing-personal-data-without-click="true">
    <div class="litecheckout__group">
        <div class="litecheckout__field">
                <textarea data-ca-lite-checkout-field="customer_notes"
                          class="litecheckout__input litecheckout__input--textarea autofill-off"
                          id="litecheckout_comment_to_shipping"
                          autocomplete="disabled"
                          placeholder=" "
                          data-ca-lite-checkout-element="customer_notes"
                          data-ca-lite-checkout-auto-save="true"
                          aria-label="{__("lite_checkout.delivery_note")}"
                >{$cart.notes}</textarea>
            <label class="litecheckout__label" for="litecheckout_comment_to_shipping"
            >{$field_name|default:__("lite_checkout.delivery_note")} </label>
        </div>
    </div>
</div>
