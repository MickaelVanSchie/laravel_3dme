@extends('modules.master')

@section('title')
Bekijk hier uit welke materialen u kunt kiezen. En wat de mechanische eigenschappen daarvan zijn.
@endsection

{% macro material_block(name, description, glass_transition, print_temp) %}
<div class="col-md-12 ">
    <h4>{{ name }}</h4>
    <p>
        {{ description | safe }}
    </p>
    <div class="col-md-5 ">
        <div class="row">
            <div class="col-6 col-md-12">
                <div class="row">
                    <div class="col-md-1">
                        <i class="fas fa-splotch material_choice_icon"></i>
                    </div>
                    <div class="col-md-6">
                        {{ glass_transition }}&#8451;
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-12">
                <div class="row">
                    <div class="col-md-1">
                        <i class="fas fa-burn material_choice_icon"></i>
                    </div>
                    <div class="col-md-6">
                        {{ print_temp }}&#8451;
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endmacro %}

{% block page_content %}
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
            {{ material_block('PLA', 'De volledige (Engelse) naam van PLA is Polylactic acid.
            PLA is een materiaal wat grootschalig
                    wordt gebruikt onder de 3D printers. Dit materiaal is makkelijk te printen en vertoond bij
                    afkoelen geen tot weinig <span class="font-italic">warping</span>. Het materiaal is van zichzelf
                    vrij hard en lastig na te bewerken. Diverse soorten verf hechten zich wel makkelijk op objecten
                    gemaakt van PLA. Als PLA langdurig onder kracht blijft staan loopt het object de kans op om
                    kruip te vertonen.', '60', '210') }}
            {{ material_block('PETG', 'PETG is een materiaal wat zich wat beter leent voor functionele ontwerpen.
            Het is iets taaier dan PLA en heeft een hogere glass transition temperatuur waardoor het geschikt is
            voor objecten die meer warmte te verduren krijgen. PETG kan wat beter tegen buigen waar PLA iets sneller
             breekt. PETG is een materiaal wat lastig is om na te bewerken.
             PETG is zonder primer ook lastig te verven.',
                    '75-85', '235') }}
            {{ material_block('ABS', 'ABS is een vormvast materiaal wat weinig neiging tot kruip heeft. ABS is makkelijk na te
                    bewerken en makkelijk te verven. ABS heeft een nog hogere glass transition temperatuur dan PETG.
                    De eigenschappen van ABS lenen zich goed voor functionele ontwerpen.', '95-110', '235') }}
            {{ material_block('PC-ABS', 'PC-ABS is een copolyester opgemaakt uit Polycarbonaat en ABS. De eigenschappen van PC-ABS zijn
                    vrijwel identiek aan gewoon ABS. Alleen door dat beetje Polycarbonaat wat er in verwerkt zit
                    heeft dit materiaal een hogere glass transition en smelttemperatuur.', '110', '245') }}
            {{ material_block('PETG-C', 'De C in PETG-C staat voor Carbon. Dit wil dus zeggen dat er in dit materiaal ook koolstofvezel
                    zit verwerkt.
                    Let wel op dat afhankelijk van het type filament dit niet daadwerkelijk extra stevigheid geeft.
                    Dat komt omdat het meestal niet de lange vezels zijn die wij kennen van de carbonfiber platen.
                    PETG-C is dus voornamelijk voor de mooie looks die het geeft.', '80', '235') }}
            {{ material_block('Nylon', 'Nylon is een slijtvast materiaal.
             Een van de onderdelen waar nylon vaak voor gebruikt word is bijvoorbeeld tandwieltjes.
             Nylon is van zichzelf ook vrij flexibel. Nylon is dus ook weer een materiaal wat uitermate geschikt is voor
             functionele (slijtvaste) onderdelen.', '70', '245') }}
            {{ material_block('TPU', 'TPU is een van de meest flexibele filamenten. Als u een product zoekt wat enigzinds moet kunnen vervormen
            tijdens gebruik, of tegen een stootje moet kunnen. Dan is TPU hoogstwaarschijnlijk de meest geschikte kandidaat.
            Hier bij 3DMe gebruiken we TPU het meeste om onderdelen te printen voor racedrones.', '60', '210-225') }}
        </div>
    </div>
</div>
{% endblock %}
