@extends('modules.master')
@section('title')
    Contactpagina, stel uw vraag en wij komen zo spoedig mogelijk bij je terug.
@endsection
@section('head_end')
    <script src="https://www.google.com/recaptcha/api.js"></script>
@endsection
@section('page_content')
<div class="banner-image position-relative">
    <div class="triangle-divider bg-white"></div>
</div>
<div class="container-fluid p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                De velden die zijn gemarkeerd met een ster zijn verplicht.
                <div class="row">
                    <div class="col-md-8">
                        <form action="submit-contact" method="post" id="contactForm">
                            <label for="name" class="mt-2">Uw naam *</label>
                            <input type="text" required name="name" class="col-md-12 form-control" id="namefield">
                            <input type="text" name="last_name" style="display: none">
                            <label for="email" class="mt-2">Uw E-mail adres*</label>
                            <input type="email" required name="email" class="col-md-12 form-control" id="emailfield">
                            <label for="message" class="mt-2">Uw Bericht *</label><br>
                            <textarea name="message" required id="" cols="60" rows="5" class="col-md-12 form-control"
                                      id="messagefield"></textarea>
                            <input
                                type="submit"
                                class="btn btn-primary mt-2 g-recaptcha"
                                value="Versturen"
                                data-sitekey="6LdouA8aAAAAAHK88B_vW9_crppF_OOdEH2qvR7N"
                                data-callback="onSubmit"
                                data-action="submit"
                            >
                        </form>
                    </div>
                    <div class="col-md-4 bg-light p-3">
                        <p>
                                <span class="font-weight-bold">
                                    3Dme.nl
                                </span>
                        </p>
                        <p>
                            3Dme.nl<br>
                            Deventerschans 21<br>
                            3432CP Nieuwegein (Geen bezoek adres)<br>
                            Telefoon: <a href="tel:+31302072432">030 20 72 432</a><br>
                            WhatsApp: <a href="https://wa.me/31302072432" target="_blank">030 20 72 432</a><br>
                            E-Mail: <a href="mailto:contact@3dme.nl">contact@3dme.nl</a><br>
                            <span class="text-muted">(Wij zouden het enorm waarderen als u dit email adres enkel gebruikt voor contactsdoeleinden.)</span>
                        </p>
                        <p>
                            3Dme.nl is onderdeel van Mickael van Schie Media.
                            Mickael van Schie Media staat geregistreerd bij de kamer van koophandel onder nummer
                            80503381.<br>
                            BTW Nr. NL003447855B66
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
