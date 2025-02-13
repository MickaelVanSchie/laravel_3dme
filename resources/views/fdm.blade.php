@extends('modules.master')

@section('title')
FDM printing, wat is dat en hoe gaat dat precies in zijn werk.
@endsection

@section('page_content')
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid">
    <div class="container  ">
        <div class="row">
            <div class="col-md-12">
                <h3>Wat is FDM printing</h3>
                <p>FDM Staat voor Fused Deposition Modeling. Dit is de iconische manier van 3D-printing waarmee
                    iedereen die ook maar íets van 3D-printing heeft gehoord wel bekend is.
                    Het materiaal word normaliter per spoel of in <span class="font-italic">pellets</span> geleverd.
                    De printer smelt dit materiaal om en zorgt met een bewegende printkop dat het materiaal op de
                    juiste plek wordt neergelegd.
                </p>
                <p>
                    FDM prints leveren vaak een 'ruwe schets' op van het eindproduct. Wij zeggen een ruwe schets
                    omdat
                    accuraatheid bij FDM vrij matig is. Producten die gemaakt zijn door middel van FDM hebben vaak
                    nog
                    wat nabewerking nodig. Deze methode is dus uitermate geschikt voor prototypes.
                </p>
                <hr>
                <h3>Wat zijn de voordelen van FDM printing</h3>
                <ul>
                    <li>FDM is een van de meest betaalbare methoden van 3D printen</li>
                    <li>Ruime keuze uit diverse soorten <a href='materiaalkeuze'>materialen</a>.</li>
                    <li>Relatief eenvoudig om grote objecten te kunnen maken</li>
                </ul>
                <hr>
                <h3>Wat zijn de nadelen van FDM printing</h3>
                <ul>
                    <li>Objecten zijn in de laag richting niet zo sterk als in de andere assen</li>
                    <li>Productietijd is relatief traag</li>
                    <li>Accuraatheid is vrij laag met een margin van +- 0.2mm.</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
