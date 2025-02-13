@extends('module.master')
@section('title')
    Kostenoverzicht 3D-printservice, 3D-ontwerpservice en overige services
@endsection
@section('page_content')
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid">
    <div class="container pb-4">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3">Kostenoverzicht voor de services die 3dme.nl levert</h1>
                <p>Wij zijn graag transparant over de te verwachten kosten. Dit zodat jij niet tegen onverwachts
                    hoge kosten aan loopt en wij er zeker van zijn dat we hierdoor geen ontevreden klanten
                    krijgen.</p>
                <p>Op deze pagina ziet u dus snel wat het kost om producten te laten 3D-printen. Heeft u na het
                    lezen van deze pagina nog steeds vragen of is het onduidelijk wat de exacte kosten zijn, neem
                    dan contact met ons op.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 pb-4">
                <h3>Dit zijn de tarieven voor onze 3D-printservice</h3>
                <div class="row ">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                FDM 3D-printservice
                            </span>
                    </div>
                    <div class="col-12">
                        Géén minimum orderwaarde.
                    </div>
                    <div class="col-12">
                        Bij orderswaardes kleiner dan &euro;18,15 rekenen wij &euro;4,99 opstartkosten.
                    </div>
                    <div class="col-12">
                        Bij orderwaardes kleiner dan &euro;30,- rekenen wij verzendkosten. Als de orderwaarde groter
                        is dan &euro;30,- nemen wij de verzendkosten op ons.
                    </div>
                    <div class="col-12">
                        Printkosten: Vanaf &euro;3,14 per uur inclusief materiaalkosten en nabewerkingskosten*.
                    </div>
                </div>
            </div>
            <div class="col-12 pb-4">
                <h3>Dit zijn de tarieven voor de overige services die wij verlenen</h3>
                <div class="row">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                3D-ontwerpservice (CAD ontwerpen voor functionele delen)
                            </span>
                    </div>
                    <div class="col-12">
                        &euro;54,45 per uur inclusief btw. (&euro;45,- exclusief btw) met een starttarief van &euro;13,61 (15 minuten).
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                3D-ontwerpservice (Organische ontwerpen gemaakt in bijv. Blender)
                            </span>
                    </div>
                    <div class="col-12">
                        &euro;60,50 per uur inclusief btw. (&euro;50,- exclusief btw)
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                3D-printer reparatieservice
                            </span>
                    </div>
                    <div class="col-12">
                        &euro;60,50 per uur inclusief btw. (&euro;50,- exclusief btw)
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                Een 3D-model maken op basis van een bestaand object met behulp van 3D-scannen.
                            </span>
                    </div>
                    <div class="col-12">
                        &euro;50,- per model inclusief btw. (&euro;41,32- exclusief btw)
                    </div>
                </div>
            </div>
            <div class="col-12 ">
                <h3>Verzendkosten</h3>
                <div class="row">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                PostNL pakketzending (Nederland)
                            </span>
                    </div>
                    <div class="col-12">
                        Voor standaard pakketzendingen rekenen wij &euro;6,50
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                PostNL Brievenbuspakket (Nederland)
                            </span>
                    </div>
                    <div class="col-12">
                        Voor brievenbuszendingen rekenen wij &euro;4,-
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                            <span class="font-weight-bold">
                                Brievenbuszending
                            </span>
                    </div>
                    <div class="col-12">
                        Wij leveren geen bestellingen via briefpost.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <h3>Kosten voor afspraken op locatie, of bezorging van producten</h3>
                <div class="row">
                    <div class="col-12">
                        Voor afspraken op locatie of bezorging van producten rekenen wij per gereden kilometer
                        &euro;1,15 inclusief btw.
                        De exacte prijs berekenen wij op basis van de afgelegde afstand volgens Google Maps.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
