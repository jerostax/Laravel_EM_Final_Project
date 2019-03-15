@extends('layouts.master')

@section('content')



<i class="fas fa-arrow-left animated bounceInRight"></i> <a href='{{route('events')}}'>Retour</a>

<!-- SECTION 1 SEUL EVENT -->
<section class='row one-event'>
    <div class='col-lg-5'>
        <h1 class='single-title animated fadeInDown'>{{$events->titre}}</h1>
        <h2 class='animated fadeInUp'>{{$events->category->titre}}</h2>
    <img class='animated zoomIn'src="{{asset('images/'.$events->pictureEvent->url_img_event)}}" alt='{{$events->titre}}'>
    </div>
    <div class='col-lg-5 event-right'>
            <h2 class='animated bounceInLeft'>{{$events->category->titre}}</h2>
            <p class='animated fadeInUp'>Le {{$events->date->format('d-m-Y')}}</p>
            <p class='animated fadeInLeft '>Prix: <span class='product-price'>{{$events->prix}} €</span></p>
            <p class='animated fadeInRight'>Prix Adhérent: <span class='product-price'>{{$events->promo}} €</span></p>
            <div class='btn-billet animated zoomIn'><a class='btn-perso btn-fluid'href='#haWidget'>Acheter un Billet</a></div>
    <div class='event-adh animated bounceInLeft'>Adhère au <a href='{{(url('/collectif'))}}'>collectif</a> et bénificie du <a href='{{url('/adhesion')}}'>prix adhérent !</a></div>
            
    </div>
    <div class='col-lg-12 event-desc'>
        <p>{{$events->description}}</p>  
    </div>
</section>

<!-- FORMULAIRE DE PAIEMENT -->

<iframe class='billeterie' id="haWidget" allowtransparency="true"  src="{{$events->form}}" style="width:100%;height:750px;border:none;"  ></iframe><div style="width:100%;text-align:center;">Propulsé par <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a></div>

@endsection


