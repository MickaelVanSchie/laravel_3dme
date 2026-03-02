{% extends 'master.html' %}
{% from 'macros/basket_details.html' import basket_details %}

{% block head_end %}
<meta name='robots' content='noindex'>
{% endblock %}

{% block page_content %}
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<form action="betaalgegevens_submit" method="post" id="payment_details">
    <div class="container-fluid">
        <div class="container  ">
            <div class="col-md-12">
                <div class="row">
                    <h4>2. Betaalmethode selecteren</h4>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        {% for payment_method in payment_methods %}
                        <div class="row mb-2 payment_provider_div p-3" style="border: 1px solid #999;">
                            <div class="col-1">
                                <img style='width: 40px;' src="{{ payment_method.imageUrl }}"
                                     alt="{{ payment_method.name }}">
                            </div>
                            <div class="col-4">
                                {{ payment_method.name }}
                            </div>
                            <div class="col-1">
                                <input type="radio" name="payment_provider"
                                       {% if payment_method.name== 'iDEAL' %}checked{% endif %}
                                value="{{ payment_method.brandCode }}">
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    <div class="col-md-6">
                        {{ basket_details(basket, total) }}
                    </div>
                </div>
            </div>
            <div class="col-md-12 mt-2">
                <div class="row">
                    <a href="/adres" class="btn btn-secondary col-md-4">Terug naar je adresgegevens</a>
                    <div class="col-md-4"></div>
                    <input type="submit" class="btn btn-primary col-md-4 definitive-purchase"
                           value="Definitief bestellen" id="submitButton">
                </div>
            </div>
        </div>
    </div>
</form>
<script>
    document.querySelectorAll('.payment_provider_div').forEach(function (div) {
        div.addEventListener('click', function (e) {
            this.querySelector('input[name="payment_provider"]').checked = true;
        });
    });

    document.getElementById('payment_details').addEventListener('submit', function (event) {
        document.getElementById('submitButton').disabled = true;
    });
</script>
{% endblock %}
