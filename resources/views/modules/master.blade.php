<!DOCTYPE html>
<html lang="nl">
<head>
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-M3JB9R2');</script>
    <!-- End Google Tag Manager -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    <link rel="icon" type="image/png" href="{{ url_for('layout.static', filename='img/logo_square.png') }}">--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://cdn.jsdeliver.net">
    <link rel="preconnect" href="https://ka-f.fontawesome.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300&display=swap"
          rel="stylesheet">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    </noscript>
    <script async src="https://kit.fontawesome.com/7de4630796.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>
        @yield('title')
    </title>
    @if(empty($description))
        @php
            $description = "Ben jij op zoek naar een bedrijf wat jouw 3D ontwerp kan 3D printen? Of heeft u op internet een model gevonden wat u wilt hebben? Neem contact met ons op en wij 3D printen het direct voor jou!";
        @endphp
    @endif
    <meta name="description" content="{{ $description }}">
    <meta property="og:description"
          content="{{ $description }}"/>

    <meta property="og:title" content="{% block og_title %}https://3dme.nl{% endblock %}"/>
    <meta property="og:type" content="website"/>
    <meta property="og:locale" content="nl_NL"/>
    <meta property="og:image" itemprop="image" content="{% block og_image %}/static/img/logo_new.png{% endblock %}"/>
    @if($g->user && $g->user->admin_level > 0)
        <link rel="stylesheet" href="{{ asset('css/admin_sidebar.css') }}">
    @endif
    @yield('head_end')
    <!-- Start cookieyes banner
    <script id="cookieyes" type="text/javascript"
            src="https://cdn-cookieyes.com/client_data/7829c7cf42e4b6f15e3feee4/script.js"></script>
    End cookieyes banner -->
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3JB9R2"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="wrapper">
    @include('modules.header')
    @if($g->user && $g->user->admin_level > 0)
        @include('modules.admin_sidebar')
    @endif
    @yield('page_content')
    <div class="push">
    </div>
</div>
@include('modules.footer')
</body>
</html>
