@extends('cms.master')
@section('pagecontent')
    <div class="row">
        @if($page > 1)
            <a href="{{ url('cms.dashboard', $page, $sorting, $direction) }}"><</a>
        @endif
        <x-page-button :pageNum="$page - 3" :totalOrders="$totalOrders" :direction="$direction"/>
        <x-page-button :pageNum="$page - 2" :totalOrders="$totalOrders" :direction="$direction"/>
        <x-page-button :pageNum="$page - 1" :totalOrders="$totalOrders" :direction="$direction"/>
        <div class="col-1 btn btn-secondary">{{$page}}</div>
        <x-page-button :pageNum="$page + 1" :totalOrders="$totalOrders" :direction="$direction"/>
        <x-page-button :pageNum="$page + 2" :totalOrders="$totalOrders" :direction="$direction"/>
        <x-page-button :pageNum="$page + 3" :totalOrders="$totalOrders" :direction="$direction"/>
        @if($page < $totalOrders / 35)
            <a href="{{ url('cms.dashboard', $page + 1, $sorting, $direction) }}" class="btn btn-primary col-2">></a>
        @endif
    </div>
    <div class="row ">
        <div class="col-1">
            <x-sort-button text="Order ID" sortProperty="id" :sortDirection="$direction" :pageNum="$page"/>
        </div>
        <div class="col-2">
            <x-sort-button text="Status" sortProperty="status" :sortDirection="$direction" :pageNum="$page"/>
        </div>
        <div class="col-4">
            <x-sort-button text="Email" sortProperty="email" :sortDirection="$direction" :pageNum="$page"/>
        </div>
        <div class="col-2">
            <x-sort-button text="Orderdatum" sortProperty="orderDate" :sortDirection="$direction" :pageNum="$page"/>
        </div>
        <div class="col-2">
            Prijs
        </div>
    </div>
{{--    {% if g.user.admin_level >= 2 %}--}}
    @foreach($basketOrders as $index => $basketOrder)
    <a href="/cms/order_details/{{ $basketOrder->id }}">
        <div class="row {{ $index % 2 == 0 ? 'bg-lightgray' : '' }}">
            <div class="col-1">
                {{ $basketOrder->id }}
            </div>
            <div class="col-2">
                <x-status-button :status="$basketOrder->status"></x-status-button>
            </div>
            <div class="col-4">
                {{ $basketOrder->email }}
            </div>
            <div class="col-2">
                {{ $basketOrder->orderDate }}
            </div>
            <div class="col-2">
{{--                @currency($basketOrder->price_list->total_cost_cents)--}}
            </div>
        </div>
    </a>
    @endforeach
{{--    {% endif %}--}}
@endsection
