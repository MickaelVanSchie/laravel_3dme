@extends('modules.master')

@section('title')
    3Dme.nl - Catalogus {{ $category ?? '' }}
@endsection


@section('page_content')
    <div class="banner-image position-relative">
        <div class="triangle-divider bg-white"></div>
    </div>
    <div class="container-fluid">
        <div class="container  ">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2">
                            @foreach($main_categories as $mc)
                                <x-CategoryType :mainCategory="$mc"></x-CategoryType>
                            @endforeach
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                {% for product in listed_products | sort(attribute='id') %}
                                <div class="col-md-4 col-sm-6">
                                    <a href="/product/{{ product.url }}">
                                        <img src="{{ product.images[0].http_url }}"
                                             class="catalog-img">
                                    </a>
                                    <div class="col-md-12 mt-2 mb-4">
                                        <div>
                                            <a href="/product/{{ product.url }}">
                                                <span class="font-weight-bold">{{ product.name }}</span>
                                            </a>
                                        </div>
                                        <div>
                                        <span
                                            class="catalog-price-tag">{{ product.price | euro }} - {{ product.stock_txt }}</span>
                                        </div>
                                        {% if user and user.is_reseller %}
                                        {% if product.minimum_selling_price != 0 %}
                                        <div>
                                        <span
                                            class="catalog-price-tag text-danger">Uw prijs: {{ product.minimum_selling_price | euro }}</span>
                                        </div>
                                        {% endif %}
                                        {% endif %}
                                    </div>
                                </div>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
