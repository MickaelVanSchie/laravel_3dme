@extends('modules.master')
@section('title')
    Het beschikbare kleurenpakket wat bij ons standaard in het assortiment is.
@endsection
@section('page_content')
    <div class="banner-image position-relative">
        <div class="triangle-divider bg-white"></div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 id="pla">PLA</h3>
                    <div class="row mb-5">
                        @foreach($pla as $pla_mat)
                            <x-FilamentCard name="{{$pla_mat->color}}" imageUrl="pla_{{$pla_mat->material}}" ></x-FilamentCard>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
