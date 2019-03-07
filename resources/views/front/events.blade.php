@extends('layouts.master')
@section('content')
<h1>PAGE EVENT</h1>

<div class='row event-view'>
        
        @foreach($expos as $expo)
        
        <div class="card col-sm-12 col-lg-5 animated fadeInLeft"><a href="{{url('event', $expo->id)}}">
                <h2>Éxposition</h2>
                <img src="{{asset('images/'.$expo->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$expo->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$expo->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$expo->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$expo->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$expo->promo}} €</small></p>
                </div>
          </a></div>
        @endforeach

        @foreach($workshops as $workshop)
        <div class="card col-sm-12 col-lg-5 animated fadeInRight"><a href="{{url('event', $workshop->id)}}">
                <h2>WorkShop</h2>
                <img src="{{asset('images/'.$workshop->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$workshop->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$workshop->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$workshop->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$workshop->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$workshop->promo}} €</small></p>
                </div>
          </a></div>
        @endforeach

        @foreach($excursions as $excursion)
        <div class="card col-sm-12 col-lg-5 animated fadeInDown"><a href="{{url('event', $excursion->id)}}">
                <h2>Éxcursion</h2>
                <img src="{{asset('images/'.$excursion->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$excursion->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$excursion->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$excursion->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$excursion->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$excursion->promo}} €</small></p>
                </div>
          </a></div>
        @endforeach

        @foreach($soirees as $soiree)
        <div class="card col-sm-12 col-lg-5 animated fadeInDown"><a href="{{url('event', $soiree->id)}}">
                <h2>Soirée</h2>
                <img src="{{asset('images/'.$soiree->pictureEvent->url_img_event)}}" class="card-img-top" alt="{{$soiree->titre}}">
                <div class="card-body">
                  <h5 class="card-title">{{$soiree->titre}}</h5>
                  <p class="card-text"><small class="text-muted">Status : {{$soiree->status}} </small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix : {{$soiree->prix}} €</small></p>
                  <p class="card-text"><small class="text-muted" style='font-weight:bold'>Prix Adhérent: {{$soiree->promo}} €</small></p>
                </div>
          </a></div>
        @endforeach
</div>
@endsection