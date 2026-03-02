{% macro variants(bi) %}
{% if bi["variants"] %}
-
{% for variant in bi["variants"] %}
{{ variant["name"] }}: {{ variant["value"] }}
{% if not loop.last %},{% endif %}
{% endfor %}
{% endif %}
{% endmacro %}

{% macro basket_details(basket, total) %}
<div class="row">
    <div class="col-12 bg-light">
        {% for order in basket %}
        <div class="row p-2">
            <div class="col-2">sdsdg
                <img class="basket-product-img"
                     src="{{ order.product.images[0].http_url }}"
                     alt="">
            </div>
            <div class="col-4">
                <span class="font-weight-bold">{{ order.product.name }} {{ variants(order) }}</span>
            </div>
            <div class="col-2">
                {{ order.quantity }} x
            </div>
            <div class="col-2">
                {{ order.price | euro }}
            </div>
            <div class="col-2">
                {{ order.total_price | euro }}
            </div>
        </div>
        {% endfor %}
        <div class="row">
            <div class="col-7">
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col-6">
                        Verzendkosten:
                    </div>
                    <div class="col-6">
                        {{ total.shipping_cost_cents | euro }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        Totaal:
                    </div>
                    <div class="col-6">
                        {{ total.price | euro }}</div>
                </div>
                <div class="row">
                    <div class="col-6">
                        BTW (21%):
                    </div>
                    <div class="col-6">
                        {{ total.vat | euro }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endmacro %}
