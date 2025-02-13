@extends('modules.master')
@section('title')
    Bedankt voor uw bericht!
@endsection

@section('page_content')
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid">
    <div class="container  ">
        <div class="row">
            <div class="col-md-12 text-center">
                <img class='thanks' src="{{ url_for("layout.static", filename="img/thanks.jpg") }}">
                <h4>Bedankt voor uw bericht</h4>
                <p>Wij streven er naar om je binnen 3 werkdagen gepast antwoord te geven op je vraag.</p>
                <p class="">Helaas is het voor ons niet altijd mogelijk om direct een berichtje terug te kunnen
                    sturen. Probeer dan gerust via een andere weg contact op te nemen, of raadpleeg de FAQ.</p>
            </div>
        </div>
    </div>
</div>
@endsection
