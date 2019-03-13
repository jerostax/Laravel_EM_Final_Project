@extends('layouts.master')
@section('content')

<!-- SECTION PRESENTATION COLLECTIF -->
<section>
    <div class='col-lg-7 collectif-title '>
        <h1 class='single-title animated fadeInDown'>L'ADN de FLUID</h1>
        <p class='animated fadeInRight'>FLUID est un collectif de curieux. Les membres sont étudiants, enseignants, professionnels, passionnés et tous interessés par l'art.</p>
    </div>
@endsection
@section('full-page')

    <img class='col-lg-12 photo-adn animated zoomIn'src='{{asset('assets/photoADN.jpg')}}'>
    <div class='col-lg-12 yellow row'>        
        <div class='col-lg-2 '>
            <img class='collectif-logo animated hideL'src='{{asset('assets/LOGbleu.jpg')}}'>
        </div>
    </div>
    <div class='col-lg-12 row collectif-adh'>
        <div class='col-lg-6'>
            <img class='collectif-etoile animated hideU'src='{{asset('assets/pictoetoile.jpg')}}'>
            <div class='col-lg-12 text-adh animated hideBR'>
                <h3>Rejoins le FLUID</h3>
                <a class='btn-perso btn-fluid'href='{{url('/adhesion')}}'>J'adhère au collectif</a>
            </div>
        </div>
    <div class='col-lg-6'>
            <img class='collectif-logo2'src='{{asset('assets/visueladn.jpg')}}'>
    </div>
    </div>
@endsection
@section('content2')
<div class='row collectif-text-end'>
    <div class='col-lg-6 adn-desc animated hideZ'>
        FLUID aime... La typographie, découvrir, l'humour, se faire surprendre, le musée des arts déco, la monochromie, les expériences créatives, les motifs, les salons indépendants, "les week-end Jam", parler pour ne rien dire, le packaging, le contraste, les fab-lab, la sérigraphie, le décalage, le rythme, le motion design, se coucher tard, la bienveillance, les performances, le graphisme suisse, les esperluettes, l'irrévérence, le rythme, le fromage & la charcuterie, les initiatives, le contraste, les surprises, ...
    </div>
    <div class='col-lg-6'>
            <img class='collectif-logo3 animated hideD'src='{{asset('assets/soyercurieux.jpg')}}'>
    </div>
</div>
<section id='instafluid'>
        <p class='insta-fluid animated hideD'><a target='_blank'href='https://www.instagram.com/fluid_flot_graphique/?hl=fr'><i class="fab fa-instagram "></i></a></p>
        <h2 class='animated hideBR'>Rejoins le FLUID Instagram</h2>  
        <div class='col-lg-12 animated hideZ'id="instafeed"></div>   
    </section>
</section>
@endsection