<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" xmlns:og="http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="fluid, flot, graphique, design, collectif, art, créatif, création, digital, motion, designer, paris, association, exposition, workshop, typographie, monochromie, packaging, sérigraphie" />
    <meta name="description" content="Fluid est un collectif de curieux de l'image qui cherchent à assouvir leurs envies de culture, de rencontres professionelles. Fluid permet de se réunir pour des expos, excursions, soirées et workshops, principalement sur Paris." />
        <meta property="og:title" content="FLUID, le collectif curieux - Expositions, Workshops et soirées sur Paris" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="htpps://www.fluid-graphique.fr" />
        <meta property="og:image" content="{{asset('assets/LOGbleu.jpg')}}" />
        <meta property="og:description" content="Fluid est un collectif de curieux de l'image qui cherchent à assouvir leurs envies de culture, de rencontres professionelles. Fluid permet de se réunir pour des expos, excursions, soirées et workshops, principalement sur Paris." />
    <title>FLUID, le collectif curieux - Expositions, Workshops et soirées sur Paris</title>
    <link rel="shortcut-icon" href="{{asset('assets/favicon.ico')}}" type="image/ico" />
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
</head>
<body>
        
@include('partials.menu')

    @yield('header')
    @yield('dashboard-nav')

<div class="container">
        @yield('content')        
</div>

        @yield('full-page')

<div class="container">
        @yield('content2')
</div>

@include('partials.footer')

@section('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js'></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/animate.js')}}"></script>
@show
</body>
</html>
