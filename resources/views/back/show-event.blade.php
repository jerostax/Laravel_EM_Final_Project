@extends('layouts.master')

@section('content')



<i class="fas fa-arrow-left animated bounceInRight"></i> <a href='{{route('events')}}'>Retour</a>

<!-- SECTION 1 SEUL EVENT -->
<section class='row one-event'>
    <div class='col-lg-5'>
        <h1 class='single-title animated fadeInDown'>{{$event->titre}}</h1>
        <h2 class='animated fadeInUp'>{{$event->category->titre}}</h2>
        <img class='animated zoomIn'src="{{asset('images/'.$event->pictureEvent->url_img_event)}}">
    </div>
    <div class='col-lg-5 event-right'>
            <h2 class='animated bounceInLeft'>{{$event->category->titre}}</h2>
            <p class='animated fadeInUp'>Le {{$event->date->format('d-m-Y')}}</p>
            <div class='row event-sn animated fadeInRight'>
                    <a class="nav-item nav-link mynav" target="_blank" href="https://www.facebook.com/groups/1797643553621438/"><i class="fab fa-facebook-f"></i></a>
                    <a class="nav-item nav-link mynav" target="_blank" href="https://www.instagram.com/fluid_flot_graphique/?hl=fr"><i class="fab fa-instagram"></i></a>
                    <a class="nav-item nav-link mynav" target="_blank" href=""><i class="fab fa-pinterest"></i></a>
            </div>
    </div>
    <div class='col-lg-12 event-desc'>
        <p>{{$event->description}}</p>  
        <a class='btn-perso btn-fluid'href='#haWidget'>Acheter un Billet</a>
    </div>
</section>

<!-- FORMULAIRE DE PAIEMENT -->

<iframe class='billeterie' id="haWidget" allowtransparency="true"  src="{{$event->form}}" style="width:100%;height:750px;border:none;"  ></iframe><div style="width:100%;text-align:center;">Propulsé par <a href="https://www.helloasso.com" rel="nofollow">HelloAsso</a></div>

@endsection



