<div class="container-fluid bg-secondary p-5">
    <div class="container">
        <div class="col">
            <div class="row text-center mb-2">
                <div class="col-12">
                    <h2 class="font-weight-bold text-light h3">Wat onze klanten zeggen over ons</h2>
                </div>
            </div>
            <div class="row text-center">
                <link rel="stylesheet" type="text/css"
                      href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
                <link rel="stylesheet" type="text/css"
                      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
                <script defer type="text/javascript"
                        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                <div class="items">
                    @foreach($reviews as $review)
                        <x-ReviewCard :review="$review"></x-ReviewCard>
                    @endforeach
                </div>
                <div class="col-12">
                    <div class="trustpilot-widget" data-locale="nl-NL" data-template-id="5419b6a8b0d04a076446a9ad"
                         data-businessunit-id="61c1c54da03161ac1677dedf" data-style-height="24px"
                         data-style-width="100%" data-theme="dark" data-min-review-count="10">
                        <a href="https://nl.trustpilot.com/review/3dme.nl" target="_blank" rel="noopener">Trustpilot</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="triangle-divider-r bg-secondary">
</div>
