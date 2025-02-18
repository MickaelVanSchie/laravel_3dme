@extends('modules.master')

@section('title')
    {{ $product->category->name }} - {{ $product->name }}
@endsection
@section('og_title')
    Bekijk product {{ $product->category->name }} - {{ $product->name }} op 3dme.nl
@endsection

{{--{% block og_image %}{{ product.images[0].http_url }}{% endblock %}--}}

@section('head_end')
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
@endsection

{% block page_content %}
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid">
    <div class="container product_details">
        <div class="row">
            <div class="col-md-12">
                <div class="row pb-3">
                    <div class="col-md-8">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach($product->images as $image)
                                    <div class="swiper-slide">
                                        <img class="swiper-image"
                                             src="{{ $image->http_url }}"
                                             alt="{{ $product->name }}">
                                    </div>
                                @endforeach
                            </div>
                            {% if product.images | length > 1 %}
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                            {% endif %}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="product-page-product-title">{{ $product->name }}</p>
                        <p class="text-secondary">{{ $product->price }} incl. BTW.</p> {{--Price --}}
                        <p>{{ $product->stock_txt }}</p>
                        {% if product.variants %}
                        @foreach($product->variantsArray() as $variant)
                            {{ $variant->name }}
                            @if($variant->type == "text")
                                <input type="text" name="variant_{{ $variant->name }}"
                                       id="variant_{{ $variant->name }}" class="form-control variant-selection"
                                       data-variant="{{ $variant->name }}" maxlength="10"
                                       @if($variant->name in $preset_keys)value=""{{$default_selection[$variant->name]}"
                                       @endif>
                            @else
                                <select name="variant_{{ $variant->name }}" id="variant_{{ $variant->name }}"
                                        class="form-control variant-selection"
                                        data-variant="{{ $variant->name }}">
                                        @foreach($variant->value as $value)
                                    <option value="{{ value }}"
                                        @if($variant->name in $preset_keys && default_selection[$variant->name] == $value)
                                            selected
                                            @endif>{{ $value }}</option>
                                    @endforeach
                                </select>
                            @endif
                        @endforeach
                        {% endif %}
                        <div class="row pt-3">
                            <div class="col-md-3">
                                <input class="col-md-12 mt-1 product-page-number-input form-control" name="quantity"
                                       type="number" value="1" min="1">
                            </div>
                            <div class="col-md-9 pt-2">
                                <div
                                    class="btn btn-primary add-to-basket @if($product->stock == 0)disabled@endif"
                                    id="add-to-basket">
                                    Toevoegen aan winkelmand
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
            </div>
            @if($product->related_products)
                <div class="col-12 pt-5">
                    <h3>Gerelateerde producten</h3>
                    <div class="row">
                        @foreach($product->related_products as $rp)
                            <div class="col-md-4 col-12">
                                <a href="{{ route('main.product', $rp->id) }}"
                                   class="text-decoration-none">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="{{ $rp->images[0]->http_url }}"
                                                 alt="" class="product-page-image">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9">
                                            <h5>{{ $rp->name }}</h5>
                                        </div>
                                        <div class="col-3">
                                            {{ $rp->price }} {{-- euro pipe --}}
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
<script>
    const imageCount = {{ product.images | length }};
    let swiperConfig = {
        direction: 'horizontal',
        loop: true,
        calculateHeight: true,
    };

    if (imageCount > 1) {
        swiperConfig["pagination"] = {el: '.swiper-pagination'};
        swiperConfig["navigation"] = {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
        swiperConfig["scrollbar"] = {
            el: '.swiper-scrollbar',
        };

    }

    const swiper = new Swiper('.swiper', swiperConfig)

    $('.add-to-basket').on('click', function () {

            let variants = [];
            let variantInputs = document.getElementsByClassName('variant-selection');
            Array.from(variantInputs).forEach((variantInput) => {
                let variantName = variantInput.dataset.variant;
                let value = variantInput.value;
                variants.push({"name": variantName, "value": value});
            });

            let _data = JSON.stringify({
                'product_id': {{ product.id }},
                'quantity': $('.product-page-number-input').val(),
                'variants': variants
            });
            $.ajax({
                type: 'POST',
                url: '/add_to_basket',
                contentType: 'application/json',
                data: _data,
                dataType: 'json',
                success: function (e) {
                    if (e['msg'] === 'ok') {
                        location.href = '/winkelmand'
                    }
                }
            })
        }
    )
    ;
</script>
{% endblock %}
