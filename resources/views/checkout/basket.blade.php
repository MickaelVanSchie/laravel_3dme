@extends('modules.master')
@section('title')
    3Dme.nl - Winkelmand
@endsection
@section('head_end')
    <meta name='robots' content='noindex'>
@endsection

@section('page_content')
    <div class="banner-image position-relative">
        <div class="triangle-divider bg-white"></div>
    </div>
    <div class="container-fluid">
        <div class="container  ">
            @if(isset($basket) && count($basket))
                <div class="col-md-12 col-12">
                    <div class="row">
                        <div class="col-md-12 col-12 mb-2 text-muted font-weight-bold">
                            <div class="row">
                                <div class="col-md-2 col-2">
                                    Item
                                </div>
                                <div class="col-md-7 col-4">
                                    Omschrijving
                                </div>
                                <div class="col-md-1 col-2">Aantal</div>
                                <div class="col-md-1 col-2">Prijs</div>
                                <div class="col-md-1 col-2 text-right">Acties</div>
                            </div>
                        </div>
                        @foreach($basket as $basketItem)
                            @php
                                $product = $products[$basketItem->productId];
                            @endphp
                            <div class="col-md-12 mb-2">
                                <div class="row">
                                    <div class="col-md-2 col-2">
                                        <img class='basket-product-img'
                                             src="{{ $product->image()->httpUrl() }}">
                                    </div>
                                    <div class="col-md-7 col-4">
                            <span>{{ $product->name }}@if($basketItem->variants)
                                    - @foreach($basketItem->variants as $variant)
                                        {{ $variant->name }}: {{ $variant->value }}@if(!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                @endif</span>
                                    </div>
                                    <div class="col-md-1 col-2 text-right">{{ $basketItem->quantity }}</div>
                                    <div class="col-md-1 col-2 text-right">{{ euro($basketItem->total_price) }}</div>
                                    <div class="col-md-1 col-2 text-right"><a
                                            href="remove_from_cart/{{ $basketItem->order_id }}"><i
                                                class="fa fa-trash" aria-hidden="true"></i></a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-8"></div>
                        <div class="col-md-4 bg-light p-3">
                            <div class="row">
                                <div class="col-6">Verzendkosten:</div>
                                <div class="col-6 text-right">
                                    {{ euro($total->shipping_cost_cents) }}
                                </div>
                                <div class="col-6 font-weight-bold">
                                    Totaal:
                                </div>
                                <div class="col-6 font-weight-bold text-right">
                                    {{ euro($total->price) }}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    Waarvan BTW:
                                </div>
                                <div class="col-6 text-right">{{ euro($total->vat) }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <a class="btn btn-secondary col-md-4" href="/catalogus">Verder winkelen</a>
                        <div class="col-md-4 mb-4"></div>
                        <a class="btn btn-primary col-md-4" href="/adres">Bestellen</a>
                    </div>
                </div>
            @else
                <div class="col-md-12  text-center">
                    <i class="fas fa-shopping-cart basket-shopping-cart text-muted"></i>
                </div>
                <div class="col-md-12  text-center">
                    <p>Uw winkelmand is nog leeg.</p>
                </div>
            @endif
        </div>
    </div>
@endsection
