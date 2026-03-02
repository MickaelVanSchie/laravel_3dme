{% extends 'master.html' %}
{% from 'macros/basket_details.html' import basket_details %}
{% macro inputfield(name, label, required=True, type='text') %}
<div class="row ">
    <div class="col-md-12"><label for="{{ name }}">{{ label }}</label></div>
    <div class="col-md-12">
        <input class="col-md-12 {{ name }} form-control" type="{{ type }}" name="{{ name }}" id="{{ name }}"
               {% if required %}required{% endif %}
               {% if address_data and address_data[name] %}value="{{ address_data[name] }}"{% endif %}>
    </div>
</div>
{% endmacro %}

{% block head_end %}
<meta name='robots' content='noindex'>
{% endblock %}

{% block page_content %}
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid">
    <div class="container  ">
        <div class="row">
            <div class="col-12">
                <h4>1. Uw gegevens</h4>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-6">
                <form action="">
                    <div class="row pb-2">
                        <div class="col-md-5">
                            {{ inputfield('name', 'Voornaam *') }}
                        </div>
                        <div class="col-md-5">
                            {{ inputfield('last_name', 'Achternaam *' ) }}
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-md-12"><label for="shipment_country">Land *</label></div>
                        <div class="col-md-6">
                            <select class="col-md-12 form-control shipment_country" name="shipment_country"
                                    id="shipment_country">
                                {% for country in GLOBALS.COUNTRIES_EU| sort %}
                                <option value="{{ country }}"
                                        {% if country == 'Nederland' %}selected{% endif %}>{{ country }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-md-4">
                            {{ inputfield('shipment_street', 'Straatnaam *', True) }}
                        </div>
                        <div class="col-3 col-md-3">
                            {{ inputfield('shipment_number', 'Huisnummer. *', True) }}
                        </div>
                        <div class="col-5 col-md-3">
                            {{ inputfield('shipment_addition', 'Toevoeging') }}
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-md-3">
                            {{ inputfield('shipment_zipcode', 'Postcode *', True) }}
                        </div>
                        <div class="col-md-7">
                            {{ inputfield('shipment_city', 'Plaats *', True) }}
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col-md-4">
                            {{ inputfield('phone_number', 'Telefoon. *', True) }}
                        </div>
                        <div class="col-md-6">
                            {{ inputfield('email', 'Email. *', 'email', True) }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger col-md-12 display-none warning-box">
                                U heeft niet alle verplichte velden ingevuld.
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                {{ basket_details(basket, total) }}
            </div>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-5">
                    <a href="/winkelmand" class="btn btn-secondary col-12">Terug naar uw winkelmand</a>
                </div>
                <div class="col-md-2 mb-4 pb-2"></div>
                <div class="col-12 col-md-5">
                    <div class="btn btn-primary submit_address col-12">
                        Naar betalen
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ url_for('layout.static', filename='js/adres.js') }}"></script>
{% endblock %}
