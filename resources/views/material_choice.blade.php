@extends('modules.master')

@section('title')
Bekijk hier uit welke materialen u kunt kiezen. En wat de mechanische eigenschappen daarvan zijn.
@endsection

@section('page_content')
    <div class="banner-image position-relative">
        <div class="triangle-divider bg-white"></div>
    </div>
    <div class="container-fluid">
        <div class="container  ">
            <div class="row">
                <div class="col-md-12">
                    <h3>Materialen voor FDM prints</h3>
                    <p>FDM Staat voor Fused Deposition Modeling. Dit is de iconische manier van 3D-printing waarmee
                        iedereen die ook maar íets van 3D-printing heeft gehoord wel bekend is.
                        Het materiaal word normaliter per spoel of in <span class="font-italic">pellets</span> geleverd.
                        De printer smelt dit materiaal om en zorgt met een bewegende printkop dat het materiaal op de
                        juiste plek wordt neergelegd.
                    </p>
                    <p>
                        Onder ieder materiaal ziet u twee icoontjes staan. Het eerste icoontje indiceert de <span
                            class="font-italic">glass transition temperature</span>. Dit is de temperatuur waarop het
                        materiaal zacht begint te worden en dus risico loopt te vervormen. Het tweede icoontje toont de
                        temperatuur aan waarop wij dit printen.
                    </p>
                </div>
                @foreach($materials as $mat)
                    <div class="col-md-12 ">
                        <h4>{{ $mat->name }}</h4>
                        <p>
                            {{ $mat->description }}
                        </p>
                        <div class="col-md-5 ">
                            <div class="row">
                                <div class="col-6 col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <i class="fas fa-splotch material_choice_icon"></i>
                                        </div>
                                        <div class="col-md-6">
                                            {{ $mat->glassTransition }}&#8451;
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-md-12">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <i class="fas fa-burn material_choice_icon"></i>
                                        </div>
                                        <div class="col-md-6">
                                            {{ $mat->printTemp }}&#8451;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
