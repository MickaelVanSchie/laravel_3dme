@extends('modules.master')

@section('title')
3D-print service, 3D-ontwerpservice en consultancy
@endsection

@section('head_end')
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" type="text/css"
      href="{{ asset('css/realiseer_uw_idee.css') }}">
<link rel="canonical" href="https://3dme.nl/3d-print-service">
@endsection

@section('page_content')
<div class="banner-image position-relative">
</div>
<script defer type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
        async></script>
<div class="top-box">
    <div class="row no-gutters">
        <div class="col-lg-6 col-12 bg-darker text-white">
            <div class="row">
                <div class="col-12 p-5 text-center">
                    <div class="spacer"></div>
                    <h1 class="font-weight-bold h2">On demand 3D-printing</h1>
                    <div class="row text-gray">
                        <div class="col-12 h5">
                            Wij garanderen kwaliteit voor ieder type onderdeel.
                            Of dit nu gaat om een prototype, of een eindproduct.
                        </div>
                        <div class="col-12 h5">
                            Direct kijken wat de mogelijkheden zijn?
                        </div>
                        <div class="col-12 h5">
                            <a href="{{ route('main.quotation') }}" class="btn btn-primary p-3 mt-1">Vraag een
                                offerte aan</a>
                            <a href="mailto:contact@3dme.nl" class="btn btn-primary p-3 mt-1">Of mail ons</a>
                            <a href="https://wa.me/+310302072432" class="btn btn-primary p-3 mt-1">Of stuur ons een
                                WhatsAppje</a>
                        </div>
                        <div class="col-12  ">
                            Aangeleverde bestanden zullen in geen geval worden gedeeld met derden.
                        </div>
                        <div class="spacer"></div>
                        <div class="col-12 text-center">
                            Lees wat andere klanten van ons vinden
                            <div class="trustpilot-widget" data-locale="nl-NL"
                                 data-template-id="5419b6a8b0d04a076446a9ad"
                                 data-businessunit-id="61c1c54da03161ac1677dedf" data-style-height="24px"
                                 data-style-width="100%" data-theme="dark" data-min-review-count="10">
                                <a href="https://nl.trustpilot.com/review/3dme.nl" target="_blank" rel="noopener">Trustpilot</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 min-height">
            <div class="image-box abs-img">
                <img src="{{ asset('img/realisator.webp') }}"
                     alt="Afbeelding van een 3D-printer in actie."
                     class="h-100">
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12 text-center p-4">
            <h2 class="h3">Welke services kunnen wij jou bieden?</h2>
        </div>
    </div>
    <div class="row p-4">
        <div class="col-6 text-center h-100">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/copyservice.webp') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>3D-Kopieerservice</h4>
                        </div>
                        <div class="col-12">
                            Heb je een fysiek object dat je wilt dupliceren? Wij kunnen je helpen! We maken een
                            3D-model van je originele object en printen het voor je in 3D.
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12">
                        <a href="mailto:contact@3dme.nl?subject=kopieerservice" class="btn btn-primary col-12">Meer
                            weten? Stuur ons een mailtje</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 text-center h-100">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/ontwerpservice.webp') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>3D-Ontwerpservice</h4>
                        </div>
                        <div class="col-12">
                            Heb je een idee, maar weet je niet hoe je het moet realiseren? Wij helpen je graag! Met
                            onze ruime ervaring in prototyping kunnen we jouw idee tot leven brengen.
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12">
                        <a href="mailto:contact@3dme.nl?subject=ontwerpservice" class="btn btn-primary col-12">Meer
                            weten? Stuur ons een mailtje</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4">
        <div class="col-6 text-center h-100">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/printservice.webp') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>FDM printing</h4>
                        </div>
                        <div class="col-12">
                            FDM printing is een veelzijdige techniek. Deze techniek kan voor verschillende
                            doeleinden worden ingezet.
                            FDM printing is vaak een goede keuze voor bijvoorbeeld een eerste test van een model.
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12">
                        <a href="mailto:contact@3dme.nl?subject=FDM print service" class="btn btn-primary col-12">Meer
                            weten? Stuur ons een mailtje</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 text-center h-100">
            <div class="card">
                <div class="card-img">
                    <img src="{{ asset('img/copyservice.webp') }}" alt="">
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <h4>3D-scannen</h4>
                        </div>
                        <div class="col-12">
                            Wil je een object nauwkeurig laten dupliceren? Onze 3D-scanners bieden de perfecte
                            oplossing. Met onze geavanceerde 3D-scanservice kunnen we gedetailleerde digitale
                            modellen van je object maken, klaar voor verdere bewerking of 3D-printing.
                        </div>
                    </div>
                </div>
                <div class="row p-2">
                    <div class="col-12">
                        <a href="mailto:contact@3dme.nl?subject=3dscannen" class="btn btn-primary col-12">Meer
                            weten? Stuur ons een mailtje</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="h3">3D printen, hoe gaat dat?</h2>
            <p class="pb-2">
                Als je op deze pagina bent uitgekomen is de kans groot dat je een object wilt laten 3D printen.
                Je bent daarvoor bij 3dme.nl aan het juiste adres! Het traject verloopt als volgt: je stuurt ons
                een 3D model dat u wilt laten printen. Dit kan een model zijn die je zelf hebt ontwikkeld of
                laten ontwikkelen, of bijvoorbeeld heeft gedownload op thingiverse of grabcad. Wij werken het
                liefste met modellen in de formaten OBJ, STL of 3MF. Maar voor andere formaten kunnen wij in
                overleg wellicht ook wel tot een oplossing komen.
            </p>
        </div>
        <div class="col-md-12">
            <h2 class="h3">Wat kost het om iets te laten 3D-printen?</h2>
            <p class="pb-2">
                Wij begrijpen dat je niet voor een verassing wilt staan, en onnodig veel wilt betalen.
                Hierom hebben wij een pagina gemaakt welke snel en overzichtelijk weergeeft welke kosten je kunt
                verwachten voor verschillende soorten projecten.
                <a href="/kosten-overzicht">Kijk voor meer informatie op deze pagina</a>
            </p>
        </div>
        <div class="col-md-12">
            <h2 class="h3">De voordelen van laten printen door 3dme.nl</h2>
            <p class="pb-2">
                Als je een 3D model laat printen door ons hoef je je geen zorgen te maken over de juiste
                instellingen. Onze deskundigen hebben de benodigde kennis in huis om dit tot in de puntjes voor
                je te verzorgen. Hiernaast hoef je zelf geen dure 3D printer te kopen, of uit te zoeken welke
                leverancier daarvoor het juiste materiaal levert. Je profiteert bij ons ook van een snelle
                levertijd, afhankelijk van de bestelling proberen wij er voor te zorgen dat jij je product
                binnen 5 werkdagen in huis hebt.
            </p>
        </div>
        <div class="col-md-12">
            <h2 class="h3">The battle of the clones</h2>
            <p class="pb-2">
                Maar 3dme.nl, ik heb nog geen 3D model. Ik heb alleen een object dat ik wil laten namaken, kan
                ik hiervoor ook bij jullie terecht? <span class='font-weight-bold'>Jazeker!</span> Als extra
                service bieden wij ook de mogelijkheid om objecten na te tekenen in CAD software. Deze 3D
                tekeningen kunnen wij vervolgens 3D printen. Heb je hierover een vraag, of wil je een object
                laten repliceren? Neem contact met ons op per telefoon of email voor meer informatie.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="h3">U kunt per mail direct een aanvraag indienen</h2>
            <p> Hieronder ziet u een lijstje met belangrijke vraagstukken voor uw project. Als u een of meerdere
                puntjes niet weet te beantwoorden helpen wij u graag om een passende keuze te maken voor deze
                punten.
                Stuur uw vragen dus gerust mee in de mail.
            </p>
            <ul class="pb-2">
                <li>Materiaaltype (Kijk even bij materiaalkeuze als u niet weet wat voor u de beste keuze is.)
                </li>
                <li>Het aantal producten dat u geprint wilt hebben</li>
                <li>In wat voor kwaliteit u de print graag wilt ontvangen. Wilt u de print graag als "draft" of
                    wilt u een perfect geprint exemplaar. De "draft" prints zijn wellicht beter voor éérste
                    prototypes waar perfect geprint beter is voor een eindprint
                </li>
                <li>Een of meerdere STL's van de bestand(en) die u geprint wilt hebben.</li>
                <li>(optioneel) Een korte uitleg over hoe Uw product gebruikt dient te worden. Hierdoor kunnen
                    onze experts misschien betere feedback geven over de printbaarheid van het product.
                </li>
                <li>(Optioneel) De gewenste uiterlijke leverdatum</li>
            </ul>
            <p>Alle antwoorden op de punten hierboven genoemd ontvangen wij graag per mail op <a
                    href="mailto:contact@3dme.nl">contact@3dme.nl</a></p>
        </div>
    </div>
</div>
<script>
    window.dataLayer = window.dataLayer || [];
    dataLayer.push(
        {
            'event': 'abTest',
            'value': '{{ $ab_test }}'
        }
    );

</script>
@endsection
