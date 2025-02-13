@extends('modules.master')
@section('title')
    3Dme.nl bedankt u voor uw bestelling!
@endsection

@section('page_content')
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Bedankt voor uw bestelling</h3>
                <p>Wij gaan zo snel mogelijk met uw bestelling aan de slag. U krijgt van ons een bestelbevestiging
                    in de mail.</p>
                <p>
                <ul>
                    <li>
                        Voorraadproducten worden dezelfde dag nog verzonden.
                    </li>
                    <li>
                        Levering van on-demand producten ligt af van het product.
                    </li>
                    <li>
                        Maatwerk of CAD tekeningen worden geleverd zoals afgesproken met de klant.
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    let events = {{ $datalayer }};
    window.dataLayer = window.dataLayer || [];
    events.forEach((function(event) {
        window.dataLayer.push(event);
    }));
</script>
@endsection
