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
{{--                                todo: add sorting by id--}}
                                @foreach($listed_products as $product)
                                    <div class="col-md-4 col-sm-6">
                                        <a href="/product/{{ $product->url }}">
{{--                                            <img src="{{ $product->images[0]->http_url }}"--}}
{{--                                                 class="catalog-img">--}}
                                            <img src="https://placehold.co/600x400/EEE/31343C" class="catalog-img" alt="">
                                        </a>
                                        <div class="col-md-12 mt-2 mb-4">
                                            <div>
                                                <a href="/product/{{ $product->url }}">
                                                    <span class="font-weight-bold">{{ $product->name }}</span>
                                                </a>
                                            </div>
                                            <div>
                                        <span
                                            class="catalog-price-tag">{{ $product->price }} - {{ $product->stock_txt }}</span>
                                            </div>
{{--                                            {% if user and user.is_reseller %}--}}
{{--                                            {% if product.minimum_selling_price != 0 %}--}}
                                            <div>
                                        <span
                                            class="catalog-price-tag text-danger">Uw prijs: {{ $product->minimum_selling_price }}</span>
                                            </div>
{{--                                            {% endif %}--}}
{{--                                            {% endif %}--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
