@extends('modules.master')
@section('head_end')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/testimonials.css') }}">
@endsection
@section('title')
    Uw online 3D-print en ontwerp service.
@endsection
@section('page_content')
    <script defer src="{{ asset('js/testimonials.js') }}" type="text/javascript"></script>
    <script defer type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
            async></script>
    <div class="col-12 index-image">
        <div class="container">
            <div class="row" style="padding-top: 180px; padding-bottom: 100px; color: white;">
                <div class="slogan col-12 text-center  text-shadow">
                    {{ $slogan }}
                </div>
                <div class="col-12 text-center  text-shadow">
                    Wilt u van uw product een prototype laten maken? Wij kunnen dit voor u realiseren in diverse
                    materialen.
                </div>
                <div class="col-12">
                    <div class="text-center">
                        <a href="{{ route('main.print-service') }}">
                            <div class="btn btn-primary p-3 m-2">Realiseer uw idee</div>
                        </a>
                        <a href="{{ route('main.contact') }}">
                            <div class="btn btn-primary p-3 m-2">Direct contact opnemen</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="triangle-divider bg-white">
        </div>
    </div>
    @include('modules.choose_us')
    @include('modules.the_process')
    @include('modules.gallery_showcase')
    @include('modules.testimonials')
@endsection

{{--@include('modules.homepage_blog')--}}


