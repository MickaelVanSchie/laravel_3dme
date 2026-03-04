<!DOCTYPE HTML>
<html lang="nl">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/logo_square.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('img/logo_new.png') }}">
    <script src="https://kit.fontawesome.com/7de4630796.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/cms.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    {{--    <script src="{{ url_for("layout.static", filename="js/ckeditor/ckeditor.js") }}"></script>--}}
    <meta name="robots" content="noindex">
    <title>
        @yield('title')
    </title>
    <meta name="description"
          content="Ben jij op zoek naar een bedrijf wat jouw design tot werkelijkheid kan maken, of heeft u op internet een model gevonden wat u wilt hebben? Neem contact met ons op en wij printen het direct voor jou!">
    @yield('head_end')
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="row p-4 bg-lightblue text-white">
            <h3>3Dme.nl CMS</h3>
        </div>
        <div class="row">
            <div class="col-md-2">
{{--                @include('cms.modules.sidebar')--}}
            </div>
            <div class="col-md-10 mt-1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12 pl-4">
                                @yield('pagecontent')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
